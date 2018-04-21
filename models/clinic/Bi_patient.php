<?php

Class bi_patient extends Simple_business implements iSimple_Business {
    /* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */

    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }

    /* config & clear business_data  Array of the object */

    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
                    "patient_id" => 0,
                    "patient_name" => "",
                    "patient_phone" => "",
                    "patient_address" => "",
                    "patient_birth_date" => "2000-01-01",
                    "patient_sex" => "",
                    "patient_sys_account_id" => sysDATA("sys_account_id"),
                    "sys_account_name" => "",
                    "blood_group_type" => "",
                    "patient_blood_group_id" => "",
                    "patient_company_id" => "",
                    "company_name" => "",
        );
    }

//-------------------------------------------------
    // class configuration 

    public function bi_config() {
        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("clinic/patient_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_patient";
        $this->table_name = "patient_s";

        $this->concept_key = "patient.";

        $this->id_field_name = "patient_id";

        $this->name_field_name = r_langcase("patient_name", "patient_name_ar");
        $this->name_field_name = "patient_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 
        $this->list_views["default"] = Array(
            "patient_id" => r_langline("default.list.patient_id", $this->concept_key),
            "patient_name" => r_langline("default.list.patient_name", $this->concept_key),
            "patient_phone" => r_langline("default.list.patient_phone", $this->concept_key),
            "patient_address" => r_langline("default.list.patient_address", $this->concept_key),
            "patient_birth_date" => r_langline("default.list.patient_birth_date", $this->concept_key),
            "patient_sex" => r_langline("default.list.patient_sex", $this->concept_key),
            "patient_company_id" => r_langline("default.list.patient_company_id", $this->concept_key),
            //"sys_account_name"=>r_langline("default.list.sys_account_name",$this->concept_key),
            "blood_group_type" => r_langline("default.list.blood_group_type", $this->concept_key),
        );


        //----------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("patient_s.*");
        $this->read_select_extended = Array("patient_s.*", "blood_group_type", "sys_account_name", "company_name");
        $this->read_join_extended = Array(
            Array(
                "1" => "blood_group_s", //selectr from
                "2" => "blood_group_s.blood_group_id = patient_s.patient_blood_group_id", //where
                "3" => "left"),
            Array(
                "1" => "a_sys_accounts",
                "2" => "patient_s.patient_sys_account_id = a_sys_accounts.sys_account_id",
                "3" => "left"),
            Array(
                "1" => "company_s",
                "2" => "patient_s.patient_company_id = company_s.company_id",
                "3" => "left"),
        );

        $this->list_join = $this->read_join_extended;

        $this->list_edit_Col = 2;

        $this->list_items_where["all"] = array("1" => "patient_sys_account_id");


        $this->list_items_where["fullname"] = array();
    }

//////////////////////////////////////////////////////////////
    public function more_config_cols(rTable $irTable, $view_name = "") {
        //$this->get_max("drug_active");
        //$irTable->Cols["drug_available"]->Type = rColumnType::ColTypeBoolean;
    }

    /* further configure single table row */

    public function more_config_row(rTableRow $itable_row, Array $data_row, $view_name) {
        
    }

    public function validate() {

        // 
        $repeat_id = $this->check_value_exist(array("patient_name" => $this->business_data["patient_name"]), 0, 1);
        if ($repeat_id != 0) {
            if (intval($repeat_id) != intval($this->ID())) {
                $this->error_message = "Name Aleady Exists .......... :) ";
                $this->success = false;
                return;
            }
        }

        $this->success = true;
        return;
    }

    public function validate_patient_phone($phone_entry, $full_fetch = 0) {

        /* 	
          $qry = "
          select patient_id
          from patient_s
          where patient_phone = $phone_entry


          ";

          $data = $this->db->query($qry);
          $result = $data->result_array();
         */



        $repeat_id = $this->check_value_exist(array("patient_phone" => $phone_entry), 0, 1);
        if ($full_fetch == 1) {
            $this->read($repeat_id, "", 1);
        }
        return $repeat_id;
    }

    function typeahead_list($fieldname = "", $search_value = "", $and_where = array()) {
        $this_and_where = $and_where;
        $this_and_where [] = "patient_sys_account_id =  " . sysDATA("sys_account_id");
        return parent::typeahead_list($fieldname, $search_value, $this_and_where);
    }

//----------------End OF The Class---------------------------------
}
