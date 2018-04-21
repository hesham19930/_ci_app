<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "vital_sign_value." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "قيم المؤشرات الحيوية";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Vital Sign values list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Vital Sign values";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'vital_sign_value_id'] = 	"#" ; 
	$lang[$section.'vital_sign_type'] = 	"المؤشر الحيوي" ;
	//$lang[$section.'vsv_vital_sign_id'] = 	"Vital Sign" ;
	$lang[$section.'vsv_visit_id'] = 	"الزيارة" ;
	$lang[$section.'vsv_value'] = 	"القيمة" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "قيم المؤشرات الحيوية" ;
	$lang[$section.'create_title'] = "Add Vital Sign value" ;
	$lang[$section.'read_title'] = "Vital Sign value" ;
	$lang[$section.'delete_title'] = "Delete Vital Sign value" ;
	
	$field_name=$section."vital_sign_value_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."vsv_vital_sign_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المؤشر الحيوي :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."vsv_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الزيارة :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."vsv_value" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"القيمة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	?>