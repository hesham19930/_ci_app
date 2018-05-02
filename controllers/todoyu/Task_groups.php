<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Task_groups
 *
 * @author Resala
 */
class Task_groups extends Base_Controller {

    function __construct() {
        parent::__construct();

        $this->concept = "task_group";
        $this->controller = "todoyu/task_groups";

        $this->class_name = "bi_task_group";
        $this->class_path = "todoyu/bi_task_group";

        $this->view_folder = "todoyu";
        $this->id_field = "task_group_id";

        $this->use_lang_files = array("todoyu/task_group_main");
        $this->security_component = "security.general";
        $this->use_master = master_type::TableMaster;
    }

    public function info() {
        $access_component_name = "security.general";
        $access_verb = "read";
        $this_view_file = "task_group_addedit";


        if (!$this->_top_function($access_component_name))
            return;
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;
        if ($this->admin_public->verify_access("read", 0) == false) {
            $data["access_component_name"] = $access_component_name;
            $data["access_verb"] = $access_verb;
            $this->load->view('_general/general/invalid_rights_message', $data);
            ; // takes care of login / header loading 
        }

        $this_view = $this->view_folder . '/' . $this_view_file;

        $incoming_id = $this->uri->segment(4, 0); //passenger id in case filters not creat new ticket

        $this_item = & $this->main_class;
        $this_item->clear();
        $this_item->read($incoming_id, "", 1);
        $project_id = $this_item->business_data['task_group_project_id'];


        $data["public_data"] = $this->admin_public->DATA;

        $data["task_group_id"] = $incoming_id;
        $data['project_id'] = $project_id;


        $data["this_concept"] = $this->concept;
        $data["this_controller"] = $this->controller;

        $data["this_id_field"] = $this->id_field;
        $data["hscroll"] = true;

        $this->load->view($this_view, $data);
    }

    public function ajax_table() {
        $access_component_name = $this->security_component;
        if (!$this->_top_function($access_component_name, 'yes'))
            return;

        $access_verb = "read";
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;


        if ($this->admin_public->verify_access($access_verb, 0) == false) {
            $data["access_component_name"] = $access_component_name;
            $data["access_verb"] = $access_verb;
            $this->load->view('_general/general/invalid_rights_message', $data);   // takes care of login / header loading
            return;
        }
        $incoming_id = $this->uri->segment(4, 0);
        $task_group_status = $this->uri->segment(5, 0);
        $this_item = & $this->main_class;

        $data["list_table"] = $this_item->list_items_rtable("project_tasks", array('task_group_project_id' => $incoming_id, 'task_group_status' => $task_group_status), "");
        // $data["list_table"] = $this_item->list_items_rtable("all", array(), "");
        /*  if ($status_task == 'mperson') {
          $task_mperson_status = $this->uri->segment(6, 0);
          $data["list_table"] = $this_item->list_items_rtable("mperson_tasks", array('task_mperson_id' => $incoming_id, 'task_status' => $task_mperson_status), "");
          } else {
          $data["list_table"] = $this_item->list_items_rtable("project_tasks", array('task_project_id' => $incoming_id, 'task_status' => $status_task), "");
          } */

        // $data["list_table"] = $this_item->list_items_rtable("all", array('task_group_project_id'=>$incoming_id), "");
        //   $data["list_table"] = $this_item->list_items_rtable("all", array(), "");




        $data["this_concept"] = "task_group";
        $data["this_controller"] = $this->controller;

        $data["this_lang_file"] = "todoyu/task_group_main";
        $data["this_id_field"] = "task_group_id";
        $data["this_name_field"] = "task_group_name";
        $data["this_name_field_ar"] = "task_group_name";

        //echo $incoming_id , $status;
        $data["options"]["hide_add_button"] = FALSE;
        $data["options"]["disable_line_add"] = false;
        $data["options"]["disable_line_edit"] = false;
        $data["options"]["disable_line_delete"] = false;
        $data["options"]["hide_line_verbs"] = false;
        $data["options"]["disable_datatable"] = true;
        $data["options"]["line_verbs_colors"] = true;
        $data["options"]["line_verbs_buttons"] = true;
        $data["options"]["enable_open_button"] = true;
        $data["options"]["open_url_suffix"] = site_url("todoyu/task_groups/info");
        $data["options"]["open_url_field"] = "task_group_id";
        $data["hscroll"] = true;

        $this->view_data = $data;

        return parent::ajax_table();
    }

    public function ajax_edit() {
        $access_component_name = "security.general";
        $access_verb = "read";

        if (!$this->_top_function($access_component_name))
            return;
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access("read", 0) == false) {
            $data["access_component_name"] = $access_component_name;
            $data["access_verb"] = $access_verb;
            $this->load->view('_general/general/invalid_rights_message', $data);   // takes care of login / header loading 
        }

        $this->load->library("form_validation");
        $this->load->model("todoyu/bi_project");


        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class;
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);
        $project_id = $this->uri->segment(5, 0);
        $data['mode'] = 'nothing';

        if ($project_id === 'readonly') {
            $data['mode'] = $project_id;
        }
        if ($incoming_id != 0) {
            $this_item->Read($incoming_id, "", 1);
            $data['status'] = "all";

            if (!$this_item->is_published) {
                //redirect with error not found object  
            }
        } else {
            $this_item->business_data['task_group_project_id'] = $project_id;
            $data['status'] = "new";
        }



        $data["this_controller"] = $this->controller;



        $this->form_validation->set_rules("task_group_name", "Task Group Name", "required");
        $this->form_validation->set_rules("task_group_status", "Task Group Status", "required");

        $this->form_validation->set_rules("task_group_creation_date", "Create Date", "required");
        $this->form_validation->set_rules("task_group_estimated_days", "Estimated Date", "required");




        if ($this->form_validation->run() == FALSE) {

            $data["this_item"] = $this_item;
            $data["public_data"] = $this->admin_public->DATA;
            $data["disable_edit"] = false;
            $this->load->view('todoyu/task_group_edit', $data);
            return;
        } else {

            if ($this_item->ID() == 0) {
                if ($this->admin_public->verify_access("new", 1) == false)
                    return;
            }
            else {
                if ($this->admin_public->verify_access("edit", 1) == false)
                    return;
            }




            foreach ($this_item->business_data as $key => $value) {
                if (key_exists($key, $this->input->post())) {
                    $this_item->business_data[$key] = $this->input->post($key);
                }
            }
            $task_group_id = $this_item->business_data['task_group_id'];
            /* print_r($this_item->business_data);
              // exit();
              echo '<pre>';
              exit();
              //return; */
            /*  $create = new DateTime($this_item->business_data['task_creation_date']);
              $expect = new DateTime($this_item->business_data['task_estimated_day']);
              $deliver = new DateTime($this_item->business_data['task_end_date']);



              if($create > $expect || $create > $deliver)
              {
              echo 'You can\'t deliver task before creation date';
              return;
              }

              $difference =  date_diff($create , $expect);

              $this_item->business_data['task_estimated_day'] = $difference->format("%d days"); */
            $this_item->validate();

            if ($this_item->success == FALSE) {


                $data["this_item"] = $this_item;
                $data["public_data"] = $this->admin_public->DATA;
                $data["disable_edit"] = false;

                $template_folder = "_templates/" . $this->template_name . "/";
                $this->load->helper($this->theme_helper);
                $this->load->view($this->view_folder . '/' . $this->concept . '_edit', $data);


                echo "<b><center>" . $this_item->error_message . "</center></b>";
                return;
            }
            else {

                $this_item->update();
                echo "FINE: OK :" . "<a msg=record_update_success /><ID>" . $this_item->ID() . "</ID>";
            }

            return;
        }
    }

    public function ajax_delete() {

        $access_component_name = $this->security_component;
        $access_verb = "delete";

        if (!$this->_top_function($access_component_name))
           // return;
        $data = array();
        $data["public_data"] = $this->admin_public->DATA;
        if ($this->admin_public->verify_access($access_verb, 0) == false)
            return say_no_access($access_component_name, $access_verb);

        // load & read Existing object  ----------------------------------------------------
        $this_item = & $this->main_class;
        $this_item->clear();

        $incoming_id = $this->uri->segment(4, 0);

        if ($incoming_id != 0) {
            $this_item->Read($incoming_id, "", 1);
            if (!$this_item->is_published) {
                //redirect with error not found object  
            }
        }

        //setting the validation rules ,, 

        if (!$this->input->post("is_an_action")) {
            $data["this_item"] = $this_item;
            $data["public_data"] = $this->admin_public->DATA;

            $data["this_concept"] = $this->concept;
            $data["this_controller"] = $this->controller;
            $data["this_id_field"] = $this->id_field;


            $template_folder = "_templates/" . $this->template_name . "/";
            $this->load->helper($this->theme_helper);

            $this->load->view('_general/concept_delete_aj', $data);

            return;
        } else {
            $this_id = $this->input->post($this_item->id_field_name);


            $this_item->read($this_id, "", 1);
            $this_name = $this_item->get_name();

            $this->lang->load("business/general", $this->admin_public->DATA["system_lang"]);

            //------------ validation before delete and get the pop-up message ----- 
            $returned_delete_message = $this_item->delete_validate($this_id);

            if ($returned_delete_message == "") {
                //echo"!!!!!!!!!!!!";return;
                $this_item->delete($this_id);
            } else {
                //echo" delete_message >>> $returned_delete_message<br>";return;
            }

            if ($this_item->success === false) {
               // return;
                echo '<div class="alert alert-error">';
                echo '<h4><i class="icon-warning-sign big"></i>  ' . r_langline("general.delete_error") . "</h4><hr/>";
                echo "<h4>[ " . $this_name . " ] $returned_delete_message </h4><br/>" . $this_item->error_message;
                echo '</div></div></div>';
                echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="' . $this->concept . '_edit_form">';
                echo r_langline("general.button_close");
                echo '</button>';
                return;
            } else {

                echo '<div class="alert alert-success">';
                echo '<h4><i class="icon-ok-sign big"></i>  ' . r_langline("general.delete_success") . "</h4><hr/>";
                echo "<h4>[ " . $this_name . " ]</h4><br/>";
                echo '</div></div></div>';
                echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="' . $this->concept . '_edit_form">';
                echo r_langline("general.button_close");
                echo '</button><a msg=record_update_success /><ID>';

                return;
            }
        }
    }

}
