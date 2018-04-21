<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "dashboard." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Patients";
	$lang[$section.'page_subtitle']="_"; 

//---tabs -------------
	
	$lang[$section.'patient_find']="Find Patient";
	$lang[$section.'waiting_to_arrive']="Wainting to Arrive";
	$lang[$section.'already_arrived']="Already Arrived";
	$lang[$section.'appointments_schedule']="Appointments Schedule";
	$lang[$section.'today_appointments']="Today Appointments";


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Patients list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Patients";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'patient_id'] = 	"#" ; 
	$lang[$section.'patient_name'] = 	" Name" ;
	$lang[$section.'patient_phone'] = 	"Phone" ;
	$lang[$section.'patient_address'] = 	" Address" ;
	$lang[$section.'patient_birth_date'] = 	" Birth Date" ;
	$lang[$section.'patient_sex'] = 	"Sex" ;
	$lang[$section.'blood_group_type'] = 	"Blood Group Type" ;
	

					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Patients" ;
	$lang[$section.'create_title'] = "Add Patient" ;
	$lang[$section.'read_title'] = "Patient" ;
	$lang[$section.'delete_title'] = "Delete Patient" ;
	
	$field_name=$section."patient_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."patient_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."patient_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Phone :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_birth_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Birth Date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_sex" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Sex :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_blood_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Blood Group Type :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>