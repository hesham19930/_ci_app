<?php

// Master View Section -----------------------------------------------------------------------------------------
	$lang['new_supplier_invoice']="فاتورة مشتريات "; 

	$main_file = "supplier_invoice." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "فاتورة مشتريات "; 

	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   فواتبر المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'supplier_r'] = "فاتورة مشتريات "; 
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
// Master View Section -----------------------------------------------------------------------------------------	
	$main_file = "supplier_return." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "حركات ارتجاع مشتريات ";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   ارتجاع المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'supplier_returns'] = "حركات ارتجاع المشتريات";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
// Master View Section -----------------------------------------------------------------------------------------	
	$main_file = "store_in." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "اضافة من مخزن او نقطة ";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   ارتجاع المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;

	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	
// Master View Section -----------------------------------------------------------------------------------------	
	$main_file = "store_out." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "صرف الى  مخزن او نقطة ";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   ارتجاع المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;

	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	$main_file = "store_trans." ; 
	$section = $main_file."default.list." ;
	$lang[$section.'store_trans_id'] = 	"#" ; 
	
	$lang[$section.'store_trans_date'] = 	"التاريخ" ; 
	$lang[$section.'store_trans_remarks'] = 	"ملاحظات" ;
	
		$lang[$section.'st_go'] = 	"مغلق" ;
			$lang[$section.'st_serial_number'] = 	"مسلسل" ;
	$lang[$section.'store_trans_name_ar'] = "الحركة مخزن" ;
	$lang[$section.'net_trans_amount'] = "الاجمالى" ;
	$lang[$section.'store_trans_onhold'] = "متوقف" ;
		$lang[$section.'account_name'] = "الحساب" ;
			$lang[$section.'person_name'] = "مستلم" ;
					$lang[$section.'trans_type_name'] = "الحركة" ;
	
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "supplier_invoice." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل حركة مشتريات " ;
	$lang[$section.'edit_title_return'] = " تسجيل حركة ارتجاع مشتريات " ;
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
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
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."account_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المورد :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."person_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بمعرفة :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."st_no_season" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خارج الموسم الحالى " ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	$field_name=$section."st_serial_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مسلسل :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."supplier_invoice_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم فاتورة المورد :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموسم :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خصم  : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_discount_percent" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نسبة الخصم  : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."st_total_discount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"قيمة الخصم  : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المورد :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

		
	
	// SUPPLIER RETURN edit view section -----------------------------------------------------------------------------------------
	$main_file = "supplier_return." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل حركة مشتريات " ;
	$lang[$section.'edit_title_return'] = " تسجيل حركة ارتجاع مشتريات " ;
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
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
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	$field_name=$section."st_serial_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مسلسل :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموسم :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."account_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن / الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."person_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بمعرفة :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."supplier_invoice_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم فاتورة المورد :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خصم خاص : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المورد :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	
	// SUPPLIER RETURN edit view section -----------------------------------------------------------------------------------------
	$main_file = "store_out." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل حركة صرف اصناف  " ;
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."store_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموسم :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    $field_name=$section."st_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"المستلم" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	$field_name=$section."st_serial_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مسلسل :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."account_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن / الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."person_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بمعرفة :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خصم خاص : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
		
	// SUPPLIER RETURN edit view section -----------------------------------------------------------------------------------------
	$main_file = "store_in." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل حركة اضافة اصناف  " ;
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."store_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	$field_name=$section."st_serial_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مسلسل :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."st_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"المستلم" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
			$field_name=$section."account_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن / الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."person_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بمعرفة :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموسم :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."supplier_invoice_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم فاتورة المورد :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خصم خاص : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;	
	
	
	
	// Master View Section -----------------------------------------------------------------------------------------	
	$main_file = "direct_sales." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "البيع المباشر ";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   ارتجاع المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;

	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	
	// SUPPLIER RETURN edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " بيع مباشر  " ;
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."store_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."st_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"البائع" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."XCALCX__shift_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مناوبة :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."XCALCX__user_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المستخدم :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"موسم :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_user_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المستخدم :" ;
	$lang[$field_name.'_is_required'] = 	"" ;
	
	
	
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_serial_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مسلسل :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."supplier_invoice_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم فاتورة المورد :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خصم خاص : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تليفون :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_percent" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نسبة الخصم " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"قيمة الخصم :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	// SUPPLIER RETURN edit view section -----------------------------------------------------------------------------------------
	$main_file = "direct_return." ;
	$section = $main_file."master." ; 
		
	$lang[$section.'page_title'] = "مرتجع البيع المباشر ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "قائمة   ارتجاع المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;

	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " بيع مباشر  " ;
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."store_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."st_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"البائع" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."XCALCX__shift_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مناوبة :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."XCALCX__user_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المستخدم :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"موسم :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_user_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المستخدم :" ;
	$lang[$field_name.'_is_required'] = 	"" ;
	

	$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تمام :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_serial_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مسلسل :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."st_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."supplier_invoice_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم فاتورة المورد :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"خصم خاص : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."st_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تليفون :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."st_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_percent" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نسبة الخصم " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_discount_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"قيمة الخصم :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
?>