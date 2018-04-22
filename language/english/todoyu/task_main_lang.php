<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "task." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "tasks";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Tasks List";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Tasks ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'task_id'] = 	"#" ; 
	$lang[$section.'task_name'] = 	"Task Name  " ;
	$lang[$section.'task_description'] = 	"Task Description  " ;
        $lang[$section.'task_project_id'] = 	"Project Name " ;
         $lang[$section.'task_creation_date'] = 	"Creation Date  " ;
	 $lang[$section.'task_estimated_days'] = 	"Estemated Days  " ;
         $lang[$section.'task_end_time'] = 	"Delivery Date " ;
         $lang[$section.'task_status'] = 	"Task Status  " ;
	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Task " ;
	$lang[$section.'create_title'] = "Add Task  " ;
	$lang[$section.'read_title'] = "Tasks" ;
	$lang[$section.'delete_title'] = "Delete Task " ;
	
	$field_name=$section."task_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."task_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Task Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."task_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Task Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        $field_name=$section."task_project_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Project Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_creation_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Creation Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_estimated_day" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Estimate Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_status" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Task Status  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_end_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Delivery Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_mperson_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Assign Task    :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	
	
	?>