<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "doctor." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "الاطباء";
	$lang[$section.'page_subtitle']="_"; 




// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الاطباء";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "الاطباء";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'doctor_id'] = 	"#" ; 
	$lang[$section.'doctor_name'] = 	" الاسم" ;
	$lang[$section.'doctor_phone'] = 	"التليفون" ;
	$lang[$section.'doctor_address'] = 	" العنوان" ;
	$lang[$section.'doctor_department'] = 	"القسم" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "الاطباء" ;
	$lang[$section.'create_title'] = "اضافة طبيب" ;
	$lang[$section.'read_title'] = "طبيب" ;
	$lang[$section.'delete_title'] = "مسح طبيب" ;
	
	$field_name=$section."doctor_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."doctor_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم الطبيب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."doctor_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"هاتف الطبيب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."doctor_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"عنوان الطبيب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."doctor_department" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"القسم :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	?>