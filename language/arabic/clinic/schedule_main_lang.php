<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "schedule." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "الجدول الزمنى";
	$lang[$section.'page_subtitle']="_"; 
	
	$lang[$section.'new_schedule_button'] = "جديد";
	



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "schedule list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "schedule";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	/*$lang[$section.'patient_id'] = 	"#" ; 
	$lang[$section.'patient_name'] = 	" Name" ;
	$lang[$section.'patient_phone'] = 	"Phone" ;
	$lang[$section.'patient_address'] = 	" Address" ;
	
	
*/
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "التقويم الشهرى للحجوزات" ;
	/*$lang[$section.'create_title'] = "Add Patient" ;
	$lang[$section.'read_title'] = "Patient" ;
	$lang[$section.'delete_title'] = "Delete Patient" ;
	
	$field_name=$section."patient_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	*/
	
	?>