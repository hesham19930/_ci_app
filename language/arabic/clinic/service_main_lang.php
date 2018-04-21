<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "service." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "الخدمات المقدمة";
	$lang[$section.'page_subtitle']="_"; 


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الخدمات المقدمة";

	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "Services";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'service_id'] = 	"#" ; 
	$lang[$section.'service_name'] = 	"الخدمة المقدمة" ;
	$lang[$section.'service_cost'] = 	"التكلفة" ;
	$lang[$section.'sys_account_name'] = 	"حساب العيادة" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "الخدمات المقدمة" ;
	$lang[$section.'create_title'] = "Add Service" ;
	$lang[$section.'read_title'] = "Service" ;
	$lang[$section.'delete_title'] = "Delete Service" ;
	
	$field_name=$section."service_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."service_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الخدمة المقدمة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."service_cost" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تكلفة الخدمة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	

	?>