<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class patients extends Base_Controller {

    function __construct() {
        parent::__construct();

        $this->concept = "patient";
        $this->controller = "clinic/patients";

        $this->class_name = "bi_patient";
        $this->class_path = "clinic/bi_patient";

        $this->view_folder = "clinic";
        $this->id_field = "patient_id";

        $this->report_title = r_langline('report_title', "patient.master.");

        $this->use_lang_files = array("clinic/patient_main");
        $this->security_component = "security.patient";
        $this->use_master = master_type::ReportAMaster;
    }

//---------------------------------------------------------------
    public function info() {
        $access_component_name = $this->security_component;
        $access_verb = "edit";

        if (!$this->_top_function($access_component_name))
            return;
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;
        if ($this->admin_public->verify_access($access_verb, 0) == false) {
            $data["access_component_name"] = $access_component_name;
            $data["access_verb"] = $access_verb;
            $this->load->view('clc_master/no_access_master', $data);
            ; // takes care of login / header loading
            return;
        }


        // if we have a segment 5 , then the link is visit // 
        // else the link is a patient 
        // if non then this is new patient waiting to be saved 

        $visit_id = $this->uri->segment(5, 0);
        if ($visit_id == "") {
            $incoming_id = $this->uri->segment(4, 0);
        } else {
            $this->load->model("clinic/bi_visit");
            $this->bi_visit->Read($visit_id, "", 1);
            $incoming_id = $this->bi_visit->business_data["visit_patient_id"];
        }


        $incoming_id = intval($incoming_id);
        $this_item = $this->main_class;

        $data["public_data"] = $this->admin_public->DATA;
        $data["patient_id"] = $incoming_id;
        $data["visit_id"] = $visit_id;


        $data["this_concept"] = $this->concept;
        $data["this_controller"] = $this->controller;
        $data["this_id_field"] = $this_item->id_field_name;
        $this_item->read($incoming_id, "", 1);

        //-------------- main-details SECTIONS-----------
        $data["this_item"] = $this_item;
        //// $data["patient_id"] = $incoming_id ;

        $this->load->view('clc_master/patient_master', $data);
    }

    public function ajax_table() {

        $access_component_name = $this->security_component;
        if (!$this->_top_function($access_component_name, 'yes'))
            return;

        $access_verb = "list";
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb, 0) == false)
            return say_no_access($access_component_name, $access_verb);

        $this_item = & $this->main_class;

        $data["list_table"] = $this_item->list_items_rtable("all", array("1" => $this->admin_public->DATA["sys_account_id"]), "");

        $data["this_concept"] = $this->concept;
        $data["this_controller"] = $this->controller;

        $data["this_id_field"] = $this_item->id_field_name;
        $data["this_name_field"] = $this_item->name_field_name;
        $data["this_name_field_ar"] = $this_item->name_field_name;

        $data["options"]["hide_add_button"] = false;
        $data["options"]["disable_line_add"] = true;
        $data["options"]["disable_line_edit"] = false;
        $data["options"]["disable_line_delete"] = false;
        $data["options"]["hide_line_verbs"] = false;
        $data["options"]["disable_datatable"] = false;
        $data["options"]["line_verbs_colors"] = true;
        $data["options"]["line_verbs_buttons"] = true;

        $data["options"]["enable_open_button"] = true;
        $data["options"]["open_url_suffix"] = site_url("clinic/patients/info");
        $data["options"]["open_url_field"] = $this_item->id_field_name;

        $this->view_data = $data;

        return parent::ajax_table();
    }

    public function ajax_edit() {
        $access_component_name = "security.patient";
        $access_verb = "read";

        if (!$this->_top_function($access_component_name))
            return;
        if ($this->admin_public->verify_access($access_verb, 0) == false)
            return say_no_access($access_component_name, $access_verb);


        $data = array();
        $data["public_data"] = $this->admin_public->DATA;


        $this->load->library("form_validation");
        $this->load->model("clinic/bi_blood_group");

        $this->load->model("clinic/bi_company");
        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class;
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0); //4 is number of segements in the url after /index.php
        $patient_id = $this->uri->segment(5, 0);
        $date_of_visit = $this->uri->segment(6, 0);

        $this->load->model("clinic/bi_patient_data");
        $dataitem = $this->bi_patient_data;

        //when edit record
        if ($incoming_id != 0) {
            $this_item->Read($incoming_id, "", 1);
            if (!$this_item->is_published) {
                //redirect with error not found object
            }
        }
        $data["this_controller"] = $this->controller;


        // get department of the user
        $department_id = $this->bi_sys_account->business_data["sys_acc_dep_id"];



        echo $this_item->error_message; //to test read_pre_process()

        $fields_collection = $dataitem->get_patient_fields($department_id, $this_item->ID());
        //  print_r($fields_collection) ; 
        $this->form_validation->set_rules("patient_name", "Patient name", "required");
        if ($this_item->ID() == 0) {
            $this->form_validation->set_rules("patient_name", "patient_name", "is_unique[patient_s.patient_name]");
            $this->form_validation->set_rules("patient_phone", "patient_phone", "is_unique[patient_s.patient_phone]");
        }

        if ($this->form_validation->run() == FALSE) {
            $data["this_item"] = $this_item;
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            $data["fields_collection"] = $fields_collection;
            $this->load->view('clc_edit/patient_edit', $data);
            //$this->load->view( 'clc_edit/img_edit',$data);

            return;
        } else {

            $SuccessFlag = "";
            //when add new/edit record

            if ($this_item->ID() == 0) {
                if ($this->admin_public->verify_access("new", 0) == false)
                    return say_no_access($access_component_name, "new");
                $SuccessFlag = "NEW";
            }
            else {
                if ($this->admin_public->verify_access("edit", 0) == false)
                    return say_no_access($access_component_name, "update");
                $SuccessFlag = "EDIT";
            }

            /*
              // ---------------------------------------------------------------------------------------------
              // this assumes that you only expose business_data from editing or filling 						/
              // you may require the input->post manually if you have additional fields , that_ 				/
              // are not in the data base or the business data 												/
              // ---------------------------------------------------------------------------------------------

             * 
             */
            // just a quick fix for boolean // should find a long term solution
            //$this_item->business_data["drug_available"] = 0 ; //it's for check-box when it's unchecked return 0
            //to add new values

            $fields_collection = $dataitem->get_patient_fields($department_id, 0);

            foreach ($this_item->business_data as $key => $value) {
                if (key_exists($key, $this->input->post())) { // if ($this->input->post($key))
                    $this_item->business_data[$key] = $this->input->post($key);
                }
            }

            // in this moment , where would be the new value of the field before update ?
            $this_item->validate();

            if ($this_item->success == FALSE) {
                //goto redo;

                $data["this_item"] = $this_item;
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;

                $template_folder = "_templates/" . $this->template_name . "/";
                $this->load->helper($this->theme_helper);
                $this->load->view($this->view_folder . '/' . $this->concept . '_edit', $data);


                echo "<b><center>This patient is already registered</center></b>";

                return;
            } else {
                $this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];

                $this_item->business_data["patient_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];

                $this_item->update();


                $this_id = $this_item->ID();

                foreach ($fields_collection as $key => $fld) {
                    $this->bi_patient_data->read(array($this_id, $fld["df_field_name"]), array("pdata_patient_id", "pdata_field_name"), 0);
                    //if post exist
                    // echo "INSIDE LOOP" ;                                
                    $this->bi_patient_data->business_data["pdata_patient_id"] = $this_id;
                    $this->bi_patient_data->business_data["pdata_field_name"] = $fld["df_field_name"];

                    $this->bi_patient_data->set_field_value($this->input->post($fld["df_field_name"]), $fld["df_field_type_id"]);
                    ;
                    $this->bi_patient_data->update();
                }

                $theURL = '';
                if ($SuccessFlag == "NEW")
                    $theURL = '<URL>' . site_url('clinic/patients/info/' . $this_item->ID()) . '</URL>';
                echo '<a msg=record_update_success /></a><ID>' . $this_item->ID() . '</ID>' . $theURL;
            }
            return;
        }
    }

    public function find_form() {

        $access_component_name = $this->security_component;
        $access_verb = "list";
        if (!$this->_top_function($access_component_name))
            return;
        if ($this->admin_public->verify_access($access_verb, 0) == false)
            return say_no_access($access_component_name, $access_verb);
        $data = array();

        $data["public_data"] = $this->admin_public->DATA;

        $this->load->library("form_validation");

        $account_id = $this->uri->segment(4);

        ///setting the validation rules ,,

        $this->form_validation->set_rules("is_an_action", "patient_name", "required");


        $data["this_concept"] = $this->concept;
        $data["this_controller"] = $this->controller;

        $this->load->model("clinic/bi_company");

        if ($this->form_validation->run() == FALSE) {

            ///  $data["this_item"] = $this_item ;
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;

            $template_folder = "_templates/" . $this->template_name . "/";
            $this->load->helper($this->theme_helper);

            $this->load->view('clc_filters/patient_filters_form', $data);
            return;
        } else {

            $this_item = & $this->main_class;
            if ($this->input->post("patient_id")) {
                if ($this->input->post("openpatient") == "on") {
                    $this_item->read(trim($this->input->post("patient_id")), "", 0);
                    if ($this_item->is_published) {
                        echo "hahaha";
                        echo '<a msg=record_update_success /></a><ID class="hide" >' . $this_item->ID() . '</ID><URL>' . Site_url("clinic/patients/info") . '/' . $this_item->ID() . '</URL>';
                        return;
                    } else {
                        echo "Patient Number Not Found";
                        echo '<a msg=record_update_success /></a><ID class="hide" >' . $this_item->ID() . '</ID>';
                        return;
                    }
                }
            }

            $filter_data = array();

            if ($this->input->post("patient_name")) {
                $filter_data["patient_name"] = trim($this->input->post("patient_name"));
            }
            if ($this->input->post("patient_phone")) {
                $filter_data["patient_phone"] = trim($this->input->post("patient_phone"));
            }
            if ($this->input->post("patient_sex")) {
                $filter_data["patient_sex"] = trim($this->input->post("patient_sex"));
            }

            if ($this->input->post("patient_sex")) {
                $filter_data["patient_sex"] = trim($this->input->post("patient_sex"));
            }
            if ($this->input->post("patient_birth_date")) {
                $filter_data["patient_birth_date"] = trim($this->input->post("patient_birth_date"));
            }
            if ($this->input->post("patient_company_id")) {
                $filter_data["patient_company_id"] = trim($this->input->post("patient_company_id"));
            }
            if ($this->input->post("patient_id")) {
                $filter_data["patient_id"] = trim($this->input->post("patient_id"));
            }

            $this->load->model("reports/bi_rep_patient");
            $this_report = $this->bi_rep_patient;



            $this_report->set_filters($filter_data);

            $returned_rtable = $this_report->run_to_list("");
            //    print_r($returned_rtable );
            $data["list_table"] = $returned_rtable;

            $data["table_purpose"] = "";

            $data["this_concept"] = $this->concept;
            $data["this_controller"] = $this->controller;
            $data["this_id_field"] = $this_item->id_field_name;
            $data["this_name_field"] = $this_item->name_field_name;
            $data["this_name_field_ar"] = $this_item->name_field_name;

            //$data["this_lang_folder"] = $this->lang_folder  ;

            $data["options"]["hide_add_button"] = true;
            $data["options"]["disable_line_add"] = true;
            $data["options"]["disable_line_edit"] = true;
            $data["options"]["disable_line_delete"] = true;
            $data["options"]["hide_line_verbs"] = false;
            $data["options"]["disable_datatable"] = false;
            $data["options"]["line_verbs_colors"] = true;
            $data["options"]["line_verbs_buttons"] = true;

            $data["options"]["enable_open_button"] = true;
            $data["options"]["open_url_suffix"] = site_url("clinic/patients/info/");
            $data["options"]["open_url_field"] = "patient_id";


            if (!isset($page_langauge))
                $page_langauge = $this->admin_public->DATA["system_lang"];
            $template_folder = "_templates/" . $this->template_name . "/";
            $this->load->helper($this->theme_helper);
            $data["total_cols"] = array("visit_cost" => "", "patient_name" => "count");

            //$data["total_cols"] = array("debit"=>"sum","credit"=>"sum") ;
            $this->load->view('_general/concept_table_aj', $data);

            $theURL = '';

            echo '<a msg=record_update_success /></a><ID class="hide" >' . $this_item->ID() . '</ID>' . $theURL;
        }

        return;
    }

}
