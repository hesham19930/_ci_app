<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "visit_service." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "خدمات الزيارة";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "visit services list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "visit services";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'visit_service_id'] = 	"#" ; 
	$lang[$section.'vs_visit_id'] = 	"vistit_id" ;
	$lang[$section.'service_name'] = 	"الخدمة المقدمة" ;
	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "الخدمات المقدمة" ;
	$lang[$section.'create_title'] = "Add visit service" ;
	$lang[$section.'read_title'] = "visit service" ;
	$lang[$section.'delete_title'] = "Delete visit service" ;
	
	$field_name=$section."visit_service_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."vs_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Visit ID :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."vs_service_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الخدمة المقدمة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."vs_price" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "التكلفة :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;
	?>