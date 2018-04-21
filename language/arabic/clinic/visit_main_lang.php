<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "visit." ; 
	$section = $main_file."master." ; 

	$lang[$section.'show_box_title']="الزيارات";
	$lang[$section.'report_title']="تقرير الزيارات";
	$lang[$section.'search_button']="بحث";
	$lang['visit_search_report'] = "البحث فى الزيارات";

	$lang[$section.'page_title'] = "الزيارات";
	$lang[$section.'page_subtitle']="_"; 
	
	$lang[$section.'arrived_button'] = "تم الوصول";
	$lang[$section.'checked_button'] = "تم الكشف";
	

//-----Visit TABs
	$lang[$section.'visit_info_tab']="تفاصيل الزيارة";
	$lang[$section.'service_measurment_tab']="الخدمات والمؤشرات الحيوية";
	$lang[$section.'prescription_tab']="الروشتة";
	$lang[$section.'patient_tab'] = "صفحة المريض";



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الزيارات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "Visits";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'visit_id'] = 	"#" ; 
	$lang[$section.'visit_date'] = 	" التاريخ" ;
	$lang[$section.'visit_complain'] = 	"الشكوى" ;
	$lang[$section.'visit_diagnosis'] = 	" التشخيص" ;
	$lang[$section.'visit_status_name'] = 	" نوع الزيارة" ;
	$lang[$section.'patient_name'] = 	"اسم المريض" ;
	$lang[$section.'status_button'] = 	"حالة الزيارة" ;
	$lang[$section.'visit_services'] = 	"الخدمة" ;
	$lang[$section.'visit_amount'] = 	"الكمية" ;
	$lang[$section.'visit_diagnosis'] = 	"التشخيص" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'appointment_title'] = "زيارة جديدة" ;
	
	$lang[$section.'edit_title'] = "بيانات الزيارة" ;
	$lang[$section.'create_title'] = "Add Visit" ;
	$lang[$section.'read_title'] = "Visit" ;
	$lang[$section.'delete_title'] = "Delete Visit" ;
	
	$field_name=$section."visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."visit_patient_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم المريض:" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."visit_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريخ الزيارة:" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."visit_complain" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الشكوى :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."visit_diagnosis" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"التشخيص :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."visit_status" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Status :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم التلفون" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
//----------------------Visit Filter ------------------------------------------------------------------
	$section = "item.form_data." ;
	
	$field_name=$section."patient_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"البحث عن مريض" ;
	$lang[$field_name.'_is_required'] = 	"برجاء ادخال اسم المريض" ;
	
	$field_name=$section."visit_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريخ الزيارة" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	
	?>