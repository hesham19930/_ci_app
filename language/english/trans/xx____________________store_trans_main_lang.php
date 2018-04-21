<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "store_trans." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "حركات المخازن";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة    حركات المخازن";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'store_transs'] = "حركات المخازن";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'store_trans_id'] = 	"#" ; 
	$lang[$section.'store_trans_date'] = 	"التاريخ" ; 
	$lang[$section.'store_trans_remarks'] = 	"ملاحظات" ;
	$lang[$section.'store_trans_name_ar'] = "الحركة مخزن" ;
	$lang[$section.'store_trans_onhold'] = "متوقف" ;
	
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "حركة مخزن اصناف" ;
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
		$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."store_trans_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	

	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريح :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."store_trans_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

		
	

		
?>