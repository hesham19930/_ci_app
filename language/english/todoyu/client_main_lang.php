<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "client." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "العملاء";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = " قائمه بيانات العملاء";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الأعدادت" ;
	$lang[$section.'item_types'] = "مجموعات العملاء";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'client_id'] = 	"#" ; 
	$lang[$section.'client_name'] = 	"اسم العميل " ;
	$lang[$section.'client_email'] = 	"ايميل " ;
        $lang[$section.'client_address'] = 	"العنوان " ;
         $lang[$section.'client_phone'] = 	"رقم الهاتف " ;
	 $lang[$section.'client_create_date'] = 	"تاريخ التسجيل " ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "مجموعه العملاء" ;
	$lang[$section.'create_title'] = "اضافة عميل " ;
	$lang[$section.'read_title'] = "العملاء" ;
	$lang[$section.'delete_title'] = "حذف عميل" ;
	
	$field_name=$section."client_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."client_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم العميل :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."client_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ايميل :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        $field_name=$section."client_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"العنوان :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."client_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم الهاتف :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."client_create_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريخ التسجيل :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
         $field_name=$section."client_industry_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Industry Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	
	?>