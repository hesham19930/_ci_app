<?php

// Master View Section -----------------------------------------------------------------------------------------

    $main_file = "evaluation." ; 
    $section = $main_file."master." ; 

    $lang[$section.'page_title'] = "Search ";
    $lang[$section.'page_subtitle']="_";
    
    $lang[$section.'search_button']="Search";
    $lang['evaluation_search_report'] = "Evaluations Search";
    
    $lang[$section.'show_box_title']="Evaluations";
    $lang[$section.'report_title']="Evaluations Report";


// Class & List View Section -----------------------------------------------------------------------------------------

    $lang[$section.'list_title'] = "evaluation list";
    
    $section=$main_file."bread_crumbs." ; 
    $lang[$section.'settings'] =    "Settings" ;
    $lang[$section.'item_types'] = "evaluation";
    
    $section=$main_file."buttons." ; 
    $lang[$section.'save'] =    "Save" ;

    
        
    // DEFAULT LISTVIEW FIELD TITLES 
    
    $section = $main_file."default.list." ;
    $lang[$section.'evaluation_id'] =   "#" ; 
    $lang[$section.'evaluation_eval_form_id'] =     "Form type" ;
    $lang[$section.'evaluation_date'] =     "Date" ;
    

    $lang[$section.'evaluation_company_id'] =   "Company" ;
    $lang[$section.'evaluation_person'] =   "Person" ;
    
    $lang[$section.'evaluation_conclusion'] =   "Conclusion" ;
    $lang[$section.'person_name'] =     "Evaluator Name" ;
    $lang[$section.'patient_name'] =    "patient Name" ;
    $lang[$section.'evaluation_form_name'] =    "form name" ;
    $lang[$section.'company_name'] =    "Company name" ;
    

    
    // ADDITIONAL VIEW FIELD TITLES //
        
    // edit view section -----------------------------------------------------------------------------------------
    
    $section = $main_file."form_data." ; 
    
    $lang[$section.'edit_title'] = " Add Company" ;
    $lang[$section.'create_title'] = "Add Company" ;
    $lang[$section.'read_title'] = "Company" ;
    $lang[$section.'delete_title'] = "Delete Company" ;
    
    $field_name=$section."evaluation_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "#" ;
    $lang[$field_name.'_is_required'] =     "_" ;
    
    
    $field_name=$section."evaluation_eval_form_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   " Form type :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;
    
    
    $field_name=$section."evaluation_date" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "From :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;
        
    $field_name=$section."evaluation_date2" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "To :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;


    $field_name=$section."evaluation_company_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Company :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;

    $field_name=$section."evaluation_person" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Person :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;

    $field_name=$section."evaluation_conclusion" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Conclusion :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;

    $field_name=$section."person_name" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Evaluator Name :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;


    $field_name=$section."patient_name" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Patient Name :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;



    $field_name=$section."patient_id" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Patient Number :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;


    $field_name=$section."evaluation_form_name" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "form name  :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;

    $field_name=$section."company_name" ;
    $lang[$field_name.'_tip'] =     "_" ;
    $lang[$field_name.'_label'] =   "Company name  :" ;
    $lang[$field_name.'_is_required'] =     "Required" ;
    
    
    ?>