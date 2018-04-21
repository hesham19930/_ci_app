<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "history_line." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "تاريخ الطبى للمريض";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "التاريخ الطبى للمريض ";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "التاريخ الطبى";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'history_line_id'] = 	"#" ; 
	$lang[$section.'history_line'] = 	"التاريخ الطبى" ;
	$lang[$section.'patient_name'] = 	"اسم المريض" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "تفاصيل التاريخ الطبى للمريض" ;
	$lang[$section.'create_title'] = "اضافة تاريخ طبى" ;
	$lang[$section.'read_title'] = "التاريخ الطبى" ;
	$lang[$section.'delete_title'] = "مسح التاريخ الطبى" ;
	
	$field_name=$section."history_line_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."history_line" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"التاريخ الطبى :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."hl_patient_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم المريض :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	
	?>