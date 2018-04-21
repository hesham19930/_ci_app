<?php

	 
	 
	$lang['general.button_ok'] = "  مــــــــوافق   " ; 
	
	
	$section = "batch_card_report ." ; 
	$lang[$section.'page_title'] = "  تقرير كارت الصنف";
	$lang[$section.'page_subtitle']="_"; 
	
	 
	$section = "batch_report ." ; 
	$lang[$section.'page_title'] = "  تقرير شحنات الاصناف";
	$lang[$section.'page_subtitle']="_"; 
	
	
	$section = "start_balance ." ; 
	$lang[$section.'page_title'] = "  الارصدة الافتتاحية للموسم";
	$lang[$section.'page_subtitle']="_"; 
	
	
// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "item." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "  الاصناف";
	$lang[$section.'page_subtitle']="_"; 
	
	
	$lang[$section.'page_title'] = "  الاصناف";
	$lang[$section.'page_subtitle']="_"; 
	

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة    الاصناف";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'items'] = "  الاصناف";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;

		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'item_id'] = 	"#" ; 
	$lang[$section.'item_name'] = 	"الصنف" ;
		$lang[$section.'item_code'] = 	"الكود" ;
		
	$lang[$section.'item_remarks'] = 	"ملاحظات" ;
	$lang[$section.'item_group_name'] = 	"المجموعة" ;
	$lang[$section.'item_name_ar'] = "الصنف" ;
	$lang[$section.'item_onhold'] = "متوقف" ;
	
		$lang[$section.'ss_full_name'] = 	"الصنف" ;
		$lang[$section.'ss_short_code'] = 	"الكود" ;
			$lang[$section.'ss_quantity'] = 	"الكمية" ;

	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "صنف " ;
	$lang[$section.'create_title'] = "اضافة صنف" ;
	$lang[$section.'read_title'] = "صنف" ;
		$lang[$section.'delete_title'] = "حذف صنف " ;
	
	$field_name=$section."item_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."item_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الصنف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."item_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"كود الصنف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
			$field_name=$section."hide_safe" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اخفاء الخزينة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."item_brand_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الماركة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."item_color_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اللون :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."item_model" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموديل :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."item_country_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"بلد المنشأ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	

	$field_name=$section."item_name_alternate" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم آخر للصنف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."item_onhold" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"متوقف :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."item_item_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المجموعة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
		$field_name=$section."season_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموسم :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."store_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزت / الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."ss_short_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] ="الكود :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."si_full_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] ="الصنف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."ss_quantity" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] ="الكمية :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	
	//search form 		----------------------------------------------------------------------------------
	$field_name=$section."for_season_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الموسم :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"المخزت / الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."to_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"حتى تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."from_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"من تاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الصنف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."brand_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"الماركة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_type_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"النوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."trans_type_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"النوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."supplier_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"المورد :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_short" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"الكود :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."client_telephone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تليفون العميل :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
		
	$field_name=$section."st_go" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"اظهار الحركات الغير مقفلة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."autotable" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"تفعيل البحث والترتيب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."gard_prepare" ;
	$lang[$field_name.'_tip'] = 	"_" ;
		$lang[$field_name.'_label'] = 	"تحضير للجرد" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
		$field_name=$section."expense_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
			$field_name=$section."safe_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الجهة :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	// -----------------------------------------------------------------------------------------------------
	
	$field_name=$section."item_item_type_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"النوع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_from_price" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"من سعر :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."item_to_price" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الى سعر :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."item_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الصنف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."summary_only" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اظهار الملخص فقط :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;

		
	$main_file="item." ; 
	$section = $main_file."default.list." ;
	$lang[$section.'si_id'] = 	"#" ; 
	$lang[$section.'si_full_name'] = 	"الصنف" ;
		$lang[$section.'si_short_code'] = 	"الكود" ;
		$lang[$section.'si_cost_value'] = 	"التكلفة" ;
		$lang[$section.'si_sales_price'] = 	"سعر البيع" ;
		$lang[$section.'supplier_name'] = 	"المورد" ;
		$lang[$section.'quantity'] = 	"الكمية المشتراه" ;
		$lang[$section.'si_main_id'] = 	"# مشتريات" ;
			$lang[$section.'si_model'] = 	"موديل" ;
		

	
	

		
?>