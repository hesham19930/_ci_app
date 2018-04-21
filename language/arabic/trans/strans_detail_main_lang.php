<?php

	// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "strans_detail." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "حركة  صنف";
	$lang[$section.'page_subtitle']="_"; 

	// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة   فواتبر المشتريات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'supplier_invoices'] = "حركات المشتريات";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;
	
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'store_trans_detail_id'] = 	"#" ; 
	$lang[$section.'std_item_code'] = 	"كود" ; 
	$lang[$section.'std_item_quantity'] = 	"الكمية" ;
	$lang[$section.'std_item_price'] = "السعر" ;
		$lang[$section.'std_item_cost'] = "تكلفة القطعة" ;
	$lang[$section.'std_item_net_price'] = "صافى" ;
		$lang[$section.'std_item_sales_price'] = "بيع" ;
	$lang[$section.'std_src_supplier_invoice'] = "فانورة" ;
	
	$lang[$section.'std_item_total'] = "الاجمالى" ;
	$lang[$section.'full_name'] = "الصنف" ;
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " تسجيل حركة صنف " ;
	$lang['supplier_invoice_details.form_data.edit_title'] = "شراء صنف" ; 
	$lang['supplier_return_details.form_data.edit_title'] = "ارتجاع صنف لمورد " ; 
	$lang['store_out_details.form_data.edit_title'] = "خروج صنف لمخزن او نقطة" ;  
	$lang['store_in_details.form_data.edit_title'] = "حركة صنف من مخزن الى مخزن"; 
	
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."store_trans_detail_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."std_item_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الصنف" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_type_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"نوع" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_brand_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"ماركة" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."std_size_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"مقاس" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
		$field_name=$section."std_weight_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"وزن" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
			$field_name=$section."std_item_unit_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الوحدة" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."std_country_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"بلد المنشأ" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."std_color_id" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"لون" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_name" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الصنف" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."XCALCX__full_name" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الصنف" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."std_item_model" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الموديل" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_quantity" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الكمية" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_price" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"السعر" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_src_supplier_invoice" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"فاتورة المورد" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_discount_itm" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الخصم" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_discount_percent" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"نسبة الخصم" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_net_price" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"صافى السعر" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."entered_profit_percent" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"نسبة الربح" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."calculated_profit_percent" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"نسبة " ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
			
	$field_name=$section."entered_sales_value" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"سعر البيع المدخل" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_total" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"الاجمالى" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_sales_price" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"سعر البيع" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."std_item_short" ;
	$lang[$field_name.'_tip'] = 	" " ;
	$lang[$field_name.'_label'] = 	"كود" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."store_trans_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بتاريخ :" ;
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
	
	$field_name=$section."store_trans_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."store_trans_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحركة مخزن :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
		
?>