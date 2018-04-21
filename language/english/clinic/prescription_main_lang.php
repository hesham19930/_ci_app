<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "prescription." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Prescriptions";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Prescriptions list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Prescriptions";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'prescription_id'] = 	"#" ; 
	$lang[$section.'drug_name'] = 	"Drug Name" ;
	$lang[$section.'prescription_daily_dose'] = 	"Daily Dose" ;
	$lang[$section.'prescription_remarks'] = 	"Remarks" ;
	$lang[$section.'prescription_visit_id'] = 	"Visit" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Prescriptions" ;
	$lang[$section.'create_title'] = "Add Prescription" ;
	$lang[$section.'read_title'] = "Prescription" ;
	$lang[$section.'delete_title'] = "Delete Prescription" ;
	
	$field_name=$section."prescription_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

    $field_name=$section."prescription_drug_name" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Drug Name :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;
   
	
	$field_name=$section."prescription_daily_dose" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Daily Dose :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."prescription_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>