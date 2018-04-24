<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bi_task_group
 *
 * @author Resala
 */
class Bi_task_group extends Simple_business implements iSimple_Business{
    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }

    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "task_group_id" => 0,
            "task_group_name" => "",
            "task_group_description" => "",
            "task_group_project_id" => 0,
            "task_group_status" => "",
            "task_group_creation_date" => 0,
            "task_group_estimated_time" => 0,
            "task_group_end_date" => 0,
           
        );
    }
    
    
    
    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/client_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_task_group";
        $this->table_name = "task_group_s";

        $this->concept_key = "task_group.";

        $this->id_field_name = "task_group_id";

        $this->name_field_name = r_langcase("task_group_name", "task_group_name");
        $this->name_field_name = "task_group_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "task_group_id" => "|hide|",
            "task_group_name" => "Group Name",
            "task_group_description" => "Description",
            "task_group_status" => "Status",
            "task_group_creation_date" => "Create Date",
            "task_group_estimated_time" => "Estimated Days",
            "task_group_end_date" => "Group End",
            'project_name' => 'project_name',
          
            
        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("task_group_s.*");
        $this->read_select_extended = Array("task_group_s.*", "project_id", "project_name");


        $this->read_join_extended = Array(
            Array(
                "1" => "project_s",
                "2" => "task_group_s.task_group_project_id = project_s.project_id",
                "3" => "inner"
            )
        );

        $this->list_join = $this->read_join_extended;


        $this->list_edit_Col = 2;

       $this->list_items_where["project_tasks"] = array("task_group_project_id" => "task_group_s.task_group_project_id", "task_group_status" => "task_group_s.task_group_status");
      //  $this->list_items_where["mperson_tasks"] = array("task_mperson_id" => "task_s.task_mperson_id", "task_status" => "task_s.task_status");

      //  $this->list_items_where["all"] = array("task_group_project_id" => "task_group_s.task_group_project_id");
    }
}
