<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "drug." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "الأدوية";
	$lang[$section.'page_subtitle']="_"; 
	
	$lang[$section.'search_button']="بحث";
	$lang[$section.'report_title']="تقرير الادوية";
	$lang['drug_search_report'] = "البحث فى الادوية";
	
	



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الأدوية";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "الأدوية";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'drug_id'] = 	"#" ; 
	$lang[$section.'drug_name'] = 	" اسم الدواء" ;
	$lang[$section.'drug_description'] = 	"الوصف" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "الأدوية" ;
	$lang[$section.'create_title'] = "اضافة دواء" ;
	$lang[$section.'read_title'] = "الدواء" ;
	$lang[$section.'delete_title'] = "مسح الدواء" ;
	
	$field_name=$section."drug_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."drug_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم الدواء :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."drug_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"وصف الدواء :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
//----------------------drug Filter ------------------------------------------------------------------
	$section = "item.form_data." ;
	
	$field_name=$section."drug_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"البحث عن دواء" ;
	$lang[$field_name.'_is_required'] = 	"برجاء ادخال اسم الدواء" ;
		
	
	?>