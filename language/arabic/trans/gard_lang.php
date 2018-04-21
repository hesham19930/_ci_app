<?php

// Master View Section -----------------------------------------------------------------------------------------


	
	$main_file = "gard." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "  الجرد ";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "  الجرد ";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'gard'] = "  الجرد ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	// DEFAULT LISTVIEW FIELD TITLES 
	$main_file = "store_trans." ; 
	$section = $main_file."default.list." ;
	$lang[$section.'store_trans_id'] = 	"#" ; 
	$lang[$section.'store_trans_date'] = 	"التاريخ" ; 
	$lang[$section.'store_trans_remarks'] = 	"ملاحظات" ;
	$lang[$section.'store_trans_name_ar'] = "الحركة مخزن" ;
	$lang[$section.'store_trans_onhold'] = "متوقف" ;
	$lang[$section.'account_name'] = "الحساب" ;
	$lang[$section.'person_name'] = "مستلم" ;
	$lang[$section.'trans_type_name'] = "الحركة" ;
	
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "gard." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "_" ;
	$lang[$section.'edit_title_return'] = " تسجيل حركة ارتجاع مشتريات " ;
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."gard_main_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."gard_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"معرفة" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."gard_main_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."gard_main_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	$field_name=$section."gard_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."gard_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."gard_for_store_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;

	
					