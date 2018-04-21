<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "cashbox." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "النقدية";
	$lang[$section.'page_subtitle']="_"; 

	$lang[$section.'list_title'] = "حركة الخزينة";
	$lang[$section.'button'] = "حركة الخزينة";
	
	$lang[$section.'button_change_dates'] = "تغيير التاريخ";
	
	
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'cashbox'] = "النقدية";
	
	
	
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	
// Class & List View Section -----------------------------------------------------------------------------------------

	$section = $main_file."balance." ;
	
	$lang[$section.'in_flows'] = "مقبوضات";
	$lang[$section.'out_flows'] = "مدفوعات";
	$lang[$section.'start_balance'] = "رصيد البداية";
	$lang[$section.'end_balance'] = "رصيد النهائى";
	
	$lang[$section.'from_date'] = "من :";
	$lang[$section.'to_date'] = "الى :";
	
	



	$main_file = "cashbox." ; 
	$section = $main_file."button." ; 
	$lang[$section.'new_cash_out'] = "تحرير اذن صرف نقدية";
	$lang[$section.'new_cash_in'] = "تحرير اذن استلام نقدية";
	$lang[$section.'new_check_issue'] = " تحرير شيك صادر " ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	$main_file = "cashbox." ; 
	$section = $main_file."default.list." ;
	$lang[$section.'finance_trans_id'] = 	"#" ; 
	$lang[$section.'fin_trans_date'] = 	"التاريخ" ; 
	$lang[$section.'fin_trans_remarks'] = 	"ملاحظات" ;

		$lang[$section.'account_name'] = "الحساب" ;
			$lang[$section.'person_name'] = "بمعرفة" ;
					$lang[$section.'trans_type_name'] = "الحركة" ;
						$lang[$section.'in'] = "استلام" ;
							$lang[$section.'out'] = "صرف" ;
	
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "cash_out." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل صرف نقدى " ;
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."finance_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."fin_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"بمعرفة" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	$field_name=$section."fin_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم داخلى :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_document_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم المستند :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_total_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المبلغ : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."fin_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."fin_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;

		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "cash_in." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل استلام نقدى " ;

	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."finance_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."fin_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"بمعرفة" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	$field_name=$section."fin_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم داخلى :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_document_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم المستند :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_total_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المبلغ : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."fin_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."fin_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;


// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "cash_out." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل صرف نقدى " ;
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."finance_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."fin_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"بمعرفة" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	$field_name=$section."fin_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم داخلى :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_document_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم المستند :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_total_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المبلغ : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."fin_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."fin_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;

		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "check_issue." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل شيك صادر " ;

	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."finance_trans_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    $field_name=$section."fin_person_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"بمعرفة" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."store_trans_date2" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	$field_name=$section."fin_reference_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم داخلى :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_document_number" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم الشيك :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."fin_total_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"مبلغ الشيك : " ; 
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."st_total_taxes_plus" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "ضريبة اضافة : " ;  
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."fin_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			$field_name=$section."fin_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"لصالح :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."fin_for_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"حساب البنك :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."st_trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."fin_payee" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"باسم :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;

		
