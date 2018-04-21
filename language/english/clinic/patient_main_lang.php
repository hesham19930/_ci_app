<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "patient." ; 
	$section = $main_file."master." ; 

	$lang['patient_Search_report'] = "Find Patient";
	$lang[$section.'report_title']="Find Patient";
	
	$lang[$section.'page_title'] = "Patients";
	$lang[$section.'page_subtitle']="_"; 
    $lang[$section.'new_history_button']=" Add New History "; 
	
	$lang[$section.'search_button']="Search";
	$lang[$section.'add_appointment_button']="Add Apointment";

	$lang[$section.'appointment_button']="Add Apointment ";
	$lang[$section.'add_appointment_button']="Add Apointment";
    
//-----patient TABs
	$lang[$section.'patient_info_tab']="Patient Information";
	$lang[$section.'patient_history_tab']="History Line";
	$lang[$section.'patient_visits_tab']="Past Visits";
	$lang[$section.'patient_appointments_tab'] = "Next Appointments";
	
	
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
	$lang[$section.'patient_sex'] = 	"Gender" ;
	$lang[$section.'patient_address'] = 	" Address" ;
	$lang[$section.'patient_birth_date'] = 	" Birth Date" ;
	$lang[$section.'patient_history'] = 	"History" ;
        $lang[$section.'company_name'] =     "Company" ;
	$lang[$section.'patient_sex'] = 	"Gender" ;
	$lang[$section.'appointement'] = 	"Reserve Appointment" ;
	
	
	$lang[$section.'blood_group_type'] = 	"Blood Type" ;
	$lang[$section.'visit_date'] = 	"Last Visit" ;
	
	$lang[$section.'patient_company_id'] = 	"Company" ;
	$lang[$section.'visit_cost'] = 	"Cost" ;
	$lang[$section.'patient_birth_date'] = 	"Birth_date" ;
	

					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Patient Info" ;
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

	$field_name=$section."patient_sex" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Gender :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_birth_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Birth Date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_history" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient History :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		
	$field_name=$section."visit_cost" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Cost" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	

	$field_name=$section."patient_sex" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Gender :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."patient_blood_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Blood Type :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	$field_name=$section."patient_company_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Company" ;
    $lang[$field_name.'_is_required'] =     "_" ;
	//----------------------Patient Filter --------------------------------
	$section = "item.form_data." ;
			
	$field_name=$section."visit_cost" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Cost" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."patient_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
    
        $field_name=$section."patient_phone" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Phone : " ;
	$lang[$field_name.'_is_required'] =     "_" ;
	
	$field_name=$section."patient_sex" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Gender :" ;
	$lang[$field_name.'_is_required '] =     "_" ;

	$field_name=$section."patient_birth_date" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   " Birth Date :" ;
	$lang[$field_name.'_is_required'] =     "_" ;




	$field_name=$section."patient_company_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "  Company Name :" ;
	$lang[$field_name.'_is_required'] =     "_" ;

	$field_name=$section."patient_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   " Patient Number :" ;
	$lang[$field_name.'_is_required'] =     "_" ;

	
	$field_name=$section."visit_cost" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "  Cost :" ;
	$lang[$field_name.'_is_required'] =     "_" ;


	
	$field_name=$section."appointement" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "   appointement " ;
	$lang[$field_name.'_is_required'] =     "_" ;

	?>
