<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "find_trans." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "حركات المخازن";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   حركات المخازن";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'find_trans'] = "حركة المخزن";
	
	$lang[$section.'find_trans'] = "حركة المخزن";
	
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
		$lang[$section.'account_name'] = "المورد / المخزن / العميل" ;
			$lang[$section.'person_name'] = "مستلم" ;
					$lang[$section.'trans_type_name'] = "الحركة" ;
	
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "find_trans." ; 
	$section = $main_file."form_data." ; 
	
	
	$lang[$section.'edit_title'] = "البحث فى حركة المخزن" ;
	$lang[$section.'edit_title_return'] = " تسجيل حركة ارتجاع مشتريات " ;
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	
	$lang['new_supplier_invoice'] = "فاتورة مشتريات" ; 
	$lang['new_supplier_return'] = "ارتجاع مشتريات" ; 
	$lang['new_store_in'] = "اضافة من مخزن" ; 
	$lang['new_store_out'] = "صرف لمخزن" ; 
	
	$field_name=$section."store_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
$field_name=$section."st_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"المستلم" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"من تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."supplier_invoice_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم فاتورة المورد :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المورد :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;

		
	

		
?>