<?php



// Master View Section -----------------------------------------------------------------------------------------



    $main_file = "visit." ; 

    $section = $main_file."master." ; 



    $lang[$section.'show_box_title']="Visits";

    $lang[$section.'report_title']="Visits Report";

    

    $lang[$section.'reservations_report_title']="Reservations Report";



    $lang[$section.'search_button']="Search";

    $lang['visit_search_report'] = "Visits Search";

    

    

    $lang[$section.'page_title'] = "Visits";

    $lang[$section.'page_subtitle']="_";



    $lang[$section.'arrived_button'] = "Arrived";

    $lang[$section.'checked_button'] = "Checked In";

    



//-----Visit TABs

    $lang[$section.'visit_info_tab']="Visit Information";

    $lang[$section.'service_measurment_tab']="Services & Measurments";

    $lang[$section.'prescription_tab']="Prescription";

    $lang[$section.'patient_tab'] = "Patient Page"; 

    



// Class & List View Section -----------------------------------------------------------------------------------------



    $lang[$section.'list_title'] = "Visits list";

    

    $section=$main_file."bread_crumbs." ; 

    $lang[$section.'settings'] =    "Settings" ;

    $lang[$section.'item_types'] = "Visits";

    

    $section=$main_file."buttons." ; 

    $lang[$section.'save'] =    "Save" ;



    

        

    // DEFAULT LISTVIEW FIELD TITLES 

    

    $section = $main_file."default.list." ;

    $lang[$section.'visit_id'] =    "#" ; 

    $lang[$section.'visit_date'] =  " Date" ;

    $lang[$section.'visit_time'] =  " Time" ;

    $lang[$section.'visit_complain'] =  "Complain" ;

    $lang[$section.'visit_diagnosis'] =     " Diagnosis" ;

    $lang[$section.'visit_status_name'] =   " Status" ;

    $lang[$section.'patient_name'] =    "Patient Name" ;

    $lang[$section.'status_button'] =   "Arrival" ;

    $lang[$section.'visit_services'] =  "Visit Services" ;

    $lang[$section.'visit_amount'] =    "Visit Amount" ;

    $lang[$section.'patient_birth_date'] =  "Patient Birth Date" ;

    $lang[$section.'patient_company_id'] =  "Company Name :" ;

    $lang[$section.'patient_sex'] =     "Patient Gender" ;

    $lang[$section.'visit_type'] =  "Visit Type" ;

    $lang[$section.'patient_phone'] =   "Phone" ;

    $lang[$section.'company_name'] =    "Company Name" ;

    $lang[$section.'visit_cost'] =  "Cost" ;





    $lang[$section.'visit_type_name'] = "Visit Type" ;

    

    $lang[$section.'visit_type_name'] =     "Visit Type" ;

    // ADDITIONAL VIEW FIELD TITLES //

    

    // edit view section -----------------------------------------------------------------------------------------

    

    $section = $main_file."form_data." ; 

    

    $lang[$section.'appointment_title'] = "New Appointment" ;

    

    $lang[$section.'edit_title'] = "Visits" ;

    $lang[$section.'create_title'] = "Add Visit" ;

    $lang[$section.'read_title'] = "Visit" ;

    $lang[$section.'delete_title'] = "Delete Visit" ;

    

    $field_name=$section."visit_id" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "#" ;

    $lang[$field_name.'_is_required'] =     "_" ;

    

    

    $field_name=$section."visit_date" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Visit Date :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;





    $field_name=$section."visit_type" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Visit Type:" ;

    $lang[$field_name.'_is_required'] =     "Required" ;







    $field_name=$section."patient_sex" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Gender :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;







    $field_name=$section."patient_company_id" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Company Name :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;







    $field_name=$section."patient_birth_date" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Birth Date :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;





    $field_name=$section."patient_name" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Patient Name :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;



    



    

    $field_name=$section."visit_time" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Visit Time :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    

        

    $field_name=$section."visit_visit_type_id" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Type :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    

    

$field_name=$section."patient_weight" ;

    

        $lang[$field_name.'_tip'] =     "_" ;

    

        $lang[$field_name.'_label'] =   "Weight :" ;

    

        $lang[$field_name.'_is_required'] =     "Required" ;

    

    $field_name=$section."visit_complain" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Complain :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    

    $field_name=$section."visit_diagnosis" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Diagnosis :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    

    $field_name=$section."visit_status_name" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Status :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    

    $field_name=$section."visit_patient_id" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Patient Name :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    

    $field_name=$section."patient_phone" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Phone :" ;

    $lang[$field_name.'_is_required'] =     "_" ;

            

    $field_name=$section."visit_cost" ;

    $lang[$field_name.'_tip'] =     "_";

    $lang[$field_name.'_label'] =   "Cost :" ;

    $lang[$field_name.'_is_required'] =     "Required" ;



//----------------------Visit Filter ------------------------------------------------------------------

    $section = "item.form_data." ;

    

    $field_name=$section."patient_name" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Find Patient" ;

    $lang[$field_name.'_is_required'] =     "Required" ;

    


     


    $field_name=$section."visit_visit_type_id" ;
    
        $lang[$field_name.'_tip'] =     "_" ;
    
        $lang[$field_name.'_label'] =   "Visit Type" ;
    
        $lang[$field_name.'_is_required'] =     "_" ;

        
    $field_name=$section."visit_date" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "From" ;

    $lang[$field_name.'_is_required'] =     "_" ;





    $field_name=$section."visit_date2" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "To" ;

    $lang[$field_name.'_is_required'] =     "_" ;







    $field_name=$section."visit_cost" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Visit Cost" ;

    $lang[$field_name.'_is_required'] =     "_" ;





    

    

    $field_name=$section."visit_type_name" ;

    $lang[$field_name.'_tip'] =     "_" ;

    $lang[$field_name.'_label'] =   "Visit Type" ;

    $lang[$field_name.'_is_required'] =     "_" ;

    

    

    $section=$main_file."buttons." ; 

    $lang[$section.'save'] =    "Save" ;    

    ?>

