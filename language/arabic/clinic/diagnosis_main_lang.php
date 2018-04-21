<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "diagnosis." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "التشخيصات";
	$lang[$section.'page_subtitle']="_"; 




// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة التشخيصات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادت" ;
	$lang[$section.'item_types'] = "التشخيصات";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'diagnosis_id'] = 	"#" ; 
	$lang[$section.'diagnosis_name'] = 	" التشخيص" ;
	$lang[$section.'diagnosis_code'] = 	"الكود" ;
	$lang[$section.'diagnosis_abbreviations'] = 	" الاختصارات" ;
	$lang[$section.'diagnosis_description'] = 	"الوصف" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "التشخيصات" ;
	$lang[$section.'create_title'] = "اضافة تشخيص" ;
	$lang[$section.'read_title'] = "التشخيص" ;
	$lang[$section.'delete_title'] = "مسح التشخيص" ;
	
	$field_name=$section."diagnosis_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."diagnosis_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"التشخيص :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."diagnosis_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"كود التشخيص :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."diagnosis_abbreviations" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الاختصار :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."diagnosis_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الوصف :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	?>