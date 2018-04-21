<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "patient." ; 
	$section = $main_file."master." ; 

	$lang['patient_Search_report'] = "البحث عن المرضى";
	$lang[$section.'report_title']="تقرير المرضي";

	$lang[$section.'page_title'] = "المرضى";
	$lang[$section.'page_subtitle']="_"; 
	
	$lang[$section.'search_button']="بحث";
	$lang[$section.'add_appointment_button']="حجز زيارة";
	
//-----patient TABs
	$lang[$section.'patient_info_tab']="بيانات المريض";
	$lang[$section.'patient_history_tab']="التاريخ المرضي ";
	$lang[$section.'patient_visits_tab']="زيارات المريض السابقة";
	$lang[$section.'patient_appointments_tab'] = "حجوزات المريض القادمة";	
// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة المرضى";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "المرضى";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'patient_id'] = 	"#" ; 
	$lang[$section.'patient_name'] = 	"الاسم" ;
	$lang[$section.'patient_phone'] = 	"التليفون" ;
	$lang[$section.'patient_address'] = 	" العنوان" ;
	$lang[$section.'patient_birth_date'] = 	" تاريخ الميلاد" ;
	$lang[$section.'patient_sex'] = 	"الجنس" ;
	
	$lang[$section.'blood_group_type'] = 	"فصيلة الدم" ;
	
	$lang[$section.'visit_date'] = 	"اخر زيارة" ;
	
	

					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "المرضى" ;
	$lang[$section.'create_title'] = "اضافة مريض" ;
	$lang[$section.'read_title'] = "مريض" ;
	$lang[$section.'delete_title'] = "مسح المريض" ;
	
	$field_name=$section."patient_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."patient_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم المريض :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."patient_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رقم الهاتف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."patient_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"العنوان :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."patient_birth_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريخ الميلاد :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."patient_sex" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الجنس :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."patient_blood_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"فصيلة الدم :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	//----------------------Patient Filter --------------------------------
	$section = "item.form_data." ;
	
	$field_name=$section."patient_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"البحث عن مريض" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	?>