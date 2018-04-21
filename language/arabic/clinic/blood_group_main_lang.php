<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "blood_group." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "فصيلة الدم";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة فصائل الدم";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "فصائل الدم";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'blood_group_id'] = 	"#" ; 
	$lang[$section.'blood_group_type'] = 	"نوع فصيلة الدم" ;
	$lang[$section.'blood_group_description'] = 	"الوصف" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "فصائل الدم" ;
	$lang[$section.'create_title'] = "اضافة فصيلة دم" ;
	$lang[$section.'read_title'] = "فصائل الدم" ;
	$lang[$section.'delete_title'] = "مسح فصيلة الدم" ;
	
	$field_name=$section."blood_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."blood_group_type" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" نوع فصيلة الدم :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."blood_group_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الوصف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	?>