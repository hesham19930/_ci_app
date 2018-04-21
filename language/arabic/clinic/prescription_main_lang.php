<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "prescription." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "الوصفات الطبية";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الروشتات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"االاعدادات" ;
	$lang[$section.'item_types'] = "Prescriptions";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'prescription_id'] = 	"#" ; 
	$lang[$section.'drug_name'] = 	"اسم الدواء" ;
	$lang[$section.'prescription_daily_dose'] = 	"الجرعة اليومية" ;
	$lang[$section.'prescription_remarks'] = 	"ملاحظات" ;
	$lang[$section.'prescription_visit_id'] = 	"Visit" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "الروشتة" ;
	$lang[$section.'create_title'] = "Add Prescription" ;
	$lang[$section.'read_title'] = "Prescription" ;
	$lang[$section.'delete_title'] = "Delete Prescription" ;
	
	$field_name=$section."prescription_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."prescription_drug_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم الدواء :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."prescription_daily_dose" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الجرعة اليومية :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."prescription_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>