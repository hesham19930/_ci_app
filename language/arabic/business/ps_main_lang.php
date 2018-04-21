<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "ps." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Cash Box .";
	$lang[$section.'page_subtitle']="Payments Database"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	
	
	  
	$lang[$section.'list_title'] = "Services & Products";
	$lang[$section.'patient_services'] = "Services & Products On File";
	
	
	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'ps_id'] = 	"#" ; 
	$lang[$section.'ps_amount'] = "Amount" ;
	$lang[$section.'ps_service_name'] = 	"Service/Product"  ;
	$lang[$section.'ps_date'] = 	"Date"  ;
	$lang[$section.'ps_time'] = 	"Time"  ;
	
	
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'patient_service_title'] = "Patient Service" ;
	$lang[$section.'delete_title'] = "Delete Patient Service ?" ;
	$lang[$section.'payment_voucher'] = 'PATMENT VOUCHER<i class="icon-signout"></i>' ;
	$lang[$section.'cash_receipt'] = 'CASH RECEIPT<i class="icon-signin"></i>' ;
	
	
	$lang[$section.'create_title'] = "New Voucher" ;
	$lang[$section.'read_title'] = "" ;
	
	$field_name=$section."ps_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"System#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ps_service_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Service :" ;
	$lang[$field_name.'_is_required'] = "Select Service/Product" ;

	$field_name=$section."ps_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Date :" ;
	$lang[$field_name.'_is_required'] = 	"Date Is Required" ;
	
	$field_name=$section."ps_time" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Time :" ;
	$lang[$field_name.'_is_required'] = 	"Field Is Required" ;

	$field_name=$section."ps_amount" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Amount :" ;
	$lang[$field_name.'_is_required'] = 	" Required" ;
	
	$field_name=$section."ps_patient_id" ;
	$lang[$field_name.'_tip'] = 	" <br/>Select from List" ;
	$lang[$field_name.'_label'] = 	"File # :" ;
	$lang[$field_name.'_is_required'] = 	" Required" ;
	
	$field_name=$section."ps_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Description :" ;
	$lang[$field_name.'_is_required'] = " Required" ;
	
	
	$field_name=$section."payment_payee_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Payee :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."from_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"from Date :" ;
	$lang[$field_name.'_is_required'] = "_" ;
	
	$field_name=$section."to_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"To Date :" ;
	$lang[$field_name.'_is_required'] = "_" ;
	
		//print_r($lang)
?>