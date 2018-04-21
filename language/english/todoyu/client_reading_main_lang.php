<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "client_reading." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Client Report";
	$lang[$section.'page_subtitle']="_"; 
	
	
// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Client Report";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Client Report";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'client_id'] = 	"#" ; 
	$lang[$section.'client_name'] = 	"Client Name " ;
        $lang[$section.'industry_name'] = 	"Industry" ;
	$lang[$section.'client_email'] = 	"Email" ;
        $lang[$section.'client_address'] = 	"Address" ;
         $lang[$section.'client_phone'] = 	"Phone" ;
	 $lang[$section.'client_create_date'] = 	"Registeration Date" ;
	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Client Report  " ;
	$lang[$section.'create_title'] = "Add Client" ;
	$lang[$section.'read_title'] = "Clients" ;
	$lang[$section.'delete_title'] = "Delete Client" ;
	
	
        $field_name=$section."client_industry_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Industry  :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
        
        
        $field_name=$section."client_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Client Name  :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
			
	?>