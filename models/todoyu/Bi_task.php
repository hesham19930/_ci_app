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
class Bi_task extends Simple_business implements iSimple_Business {
    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }
    
    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "task_id" => 0,
            "task_name" => "",
            "task_description" => "",
            "task_project_id"=>0,
            "task_status" => "",
            "task_creation_date" => 0,
            "task_estimated_day" => 0,
            "task_end_date" => 0,
            "task_mperson_id" => 0,
            "project_name" => "",
           
        );
    }
    
    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/client_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_task";
        $this->table_name = "task_s";

        $this->concept_key = "task.";

        $this->id_field_name = "task_id";

        $this->name_field_name = r_langcase("task_name", "task_name");
        $this->name_field_name = "task_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "task_id" => "|hide|",
            "task_name" => "Task Name",
            "task_description" => "Description",
            "task_status"=> "Status",
            "mperson_name" => "Task Assign To",
            "task_creation_date" => 0,
            "task_estimated_day" => 0,
            "task_end_date" => "Task End",
            "project_name" => "Project Name",
            "log_description" => "log Description"
            
          

        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("task_s.*");
    $this->read_select_extended=Array("task_s.*", "project_id", "project_name","mperson_name");
    

        $this->read_join_extended = Array(
            Array(
                "1" => "project_s",
                "2" => "task_s.task_project_id = project_s.project_id",
                "3" => "inner"
            ),Array(
                "1" => "mperson_s",
                "2" => "task_s.task_mperson_id = mperson_s.mperson_id",
                "3" => "inner"
            )
           
        );
       
        $this->list_join = $this->read_join_extended;


        $this->list_edit_Col = 2;

       $this->list_items_where["project_tasks"] = array("task_project_id"=>"task_s.task_project_id","task_status"=>"task_s.task_status");
       $this->list_items_where["mperson_tasks"] = array("task_mperson_id"=>"task_s.task_mperson_id","task_status"=>"task_s.task_status");
     
	    $this->list_items_where["all"] = array(); 
      
    }

    public function more_config_row(rTableRow $iTable_row, array $data_row,$view_name)
	{
        $task_id = $data_row['task_id'];
        $query_des = "select log_description from log_s where log_task_id = $task_id";
        $log_description = 0;
        $my_log = $this->db->query($query_des);
        if($my_log->num_rows()==0)
        {
            $log_description = "No Logs";
            
        }else {
            $log_array = $my_log->result_array($my_log);
           $log_description = $log_array[0]['log_description'];
        }

       
      
       $iTable_row->Cells["log_description"]->Value = $log_description ;		  
	}
}
