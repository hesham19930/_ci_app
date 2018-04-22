<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bi_tasks
 *
 * @author Resala
 */
class Bi_log extends Simple_business implements iSimple_Business {
    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }
    
    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "log_id" => 0,
            "log_name" => "",
            "log_description" => "",
            "log_task_id"=>0,
            "log_create_date" => 0,
            "log_person_id" => 0,
            "log_complete_date" => 0
           
        );
    }
    
    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/client_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_log";
        $this->table_name = "log_s";

        $this->concept_key = "log.";

        $this->id_field_name = "log_id";

        $this->name_field_name = r_langcase("log_name", "log_name");
        $this->name_field_name = "log_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "log_id" => "|hide|",
            "log_name" => "Log Name",
            "log_description" => "Log Description",
            "log_task_id"=> "Task Name",
            "log_creation_date" => "Creation Date",
            "log_person_id" => "User Name",
            "log_complete_date" => "Complete Date"
          
        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("log_s.*");
    /*    $this->read_select_extended=Array("log_s.*","task_id","task_name","task_description");
    

        $this->read_join_extended = Array(
            Array(
                "1" => "task_s",
                "2" => "task_s.task_id = log_s.log_task_id",
                "3" => "inner"
            )
           
        );
       
        $this->list_join = $this->read_join_extended;*/


        $this->list_edit_Col = 2;

       $this->list_items_where["all"] = array("log_task_id"=>"log_s.log_task_id");
	      
    }
}
