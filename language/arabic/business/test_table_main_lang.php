<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "test_table." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = " أختبار";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الاختبارات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'test_table'] = "جدول الاختبارات";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'test_id'] = 	"#" ; 
	$lang[$section.'test_name'] = 	"النوع" ;
	$lang[$section.'test_desc'] = 	"ملاحظات" ;
	$lang[$section.'test_desc'] = "النوع" ;
		$lang[$section.'test_enabled'] = "متوقف" ;
	

					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "نوع اصناف" ;
	$lang[$section.'create_title'] = "اضافة نوع" ;
	$lang[$section.'read_title'] = "نوع" ;
		$lang[$section.'delete_title'] = "حذف نوع " ;
	
	$field_name=$section."test_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	

	$field_name=$section."test_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"النوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."test_desc" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."test_enabled" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

		
	

		
?>