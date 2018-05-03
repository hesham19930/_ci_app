<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "client." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Clients";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = " Client List";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Client Group ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'client_id'] = 	"#" ; 
	$lang[$section.'client_name'] = 	"Client Name  " ;
	$lang[$section.'client_email'] = 	"Email " ;
        $lang[$section.'client_address'] = 	"Address " ;
         $lang[$section.'client_phone'] = 	"Phone  " ;
	 $lang[$section.'client_create_date'] = 	"Registeration Date  " ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Client Group " ;
	$lang[$section.'create_title'] = "Add Client  " ;
	$lang[$section.'read_title'] = "Clients" ;
	$lang[$section.'delete_title'] = "Delete Client " ;
	
	$field_name=$section."client_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."client_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Client Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."client_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Email :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        $field_name=$section."client_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."client_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Phone  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."client_create_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Registration Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
         $field_name=$section."client_industry_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Industry Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	
	?>