<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bi_project
 *
 * @author Resala
 */
class Bi_project extends Simple_business implements iSimple_Business {

    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }

    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "project_id" => 0,
            "project_name" => "",
            "project_description" => "",
            "project_client_id" => 0,
            "project_creation_date" => "",
            "project_estimated_days" => 0,
            "project_end_time" => "",
            "project_status" => ""
        );
    }

    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/client_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_project";
        $this->table_name = "project_s";

        $this->concept_key = "project.";

        $this->id_field_name = "project_id";

        $this->name_field_name = r_langcase("project_name", "project_name");
        $this->name_field_name = "project_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "project_id" => '|hide|',
            "project_name" => "Project Name ",
            "project_description" => "Project Desciption ",
            "client_name" => "Client Name ",
            "project_creation_date" => " Creation Date ",
            "project_status" => "Project Status ",
            "project_estimated_days" => "Estimated Date  ",
            "project_end_time" => "Delivery Date  "
            
        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("project_s.*");

        $this->read_join_extended = Array(
            Array(
                "1" => "client_s",
                "2" => "project_s.project_client_id = client_s.client_id",
                "3" => "inner"
            )
        );

        $this->list_join = $this->read_join_extended;


        $this->list_edit_Col = 2;

        $this->list_items_where["all"] = array();
    }
    
    
    public function more_config_cols(rTable $irTable,$view_name="")
	{
		
		
                
                
                
                
	}

}
