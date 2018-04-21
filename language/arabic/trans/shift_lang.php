<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "shift." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "مناوبات";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] ="مناوبات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'one_balance'] = "مناوبات";
	
	$lang[$section.'one_balance'] = "مناوبات";
	
	$lang['button.close_shift'] = "اغلاق المناوبة ";
	$lang['button.close_day'] = "اغلاق اليوم ";
	$lang['button.new_shift'] = "فتح مناوبة ";
	
	$lang['day_will_close_ok?'] = "سوف يتم اغلاق اليوم المفتوح .. هل انت متأكد   ؟ " ;  
	$lang['day_closing'] = "اغلاق اليوم" ;    
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ " ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	$main_file = "shift." ; 
	
	$section = $main_file."default.list." ;
	$lang[$section.'shift_id'] = 	"#" ; 
	$lang[$section.'shift_name'] = 	"المناوبة" ; 
	$lang[$section.'shift_closed'] = 	"مغلق" ;
	$lang[$section.'close_time'] = 	"وقت الاغلاق" ;
	$lang[$section.'pos_name'] = "نقطة البيع" ;
	$lang[$section.'user_name'] = "المستخدم" ;
	
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "shift." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'open_new_title'] = "مناوبة جديدة" ;
	$lang[$section.'edit_title'] = "مناوبة" ;
	$lang[$section.'create_title'] = "اضافة حركة مخزن" ;
	$lang[$section.'read_title'] = "حركة مخزن" ;
	$lang[$section.'delete_title'] = "حذف حركة مخزن " ;
	
	$field_name=$section."shift_id" ;
	$lang[$field_name.'_tip'] = 	"رقم  النظلم - تلقائى " ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    $field_name=$section."shift_name" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"ملاحظات" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."pos_name" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"نقطة البيع" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."shift_pos_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"نقطة بيع :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."to_date" ;
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

	
	 $field_name=$section."from_date" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"من تاريخ" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	 $field_name=$section."to_date" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"االى تاريخ" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	 $field_name=$section."sys_account_id" ;
	$lang[$field_name.'_tip'] = 	"  " ;
	$lang[$field_name.'_label'] = 	"االفرع" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
		
	
?>