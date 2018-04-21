<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "eval_field." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Medical Evaluation Fields";
	$lang[$section.'page_subtitle']="_"; 
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Evaluations list";
	
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "evaluations";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'eval_field_id'] = 	"#" ; 
	$lang[$section.'eval_field_name'] = 	"Field Name" ;
	$lang[$section.'eval_field_text'] = 	"Field Text" ;
	$lang[$section.'eval_field_type_id'] = 	"Type" ;	
	$lang[$section.'eval_field_text_arabic'] = 	"Field Text Arabic" ;
	$lang[$section.'eval_field_order'] = 	"Field Order" ;
	$lang[$section.'field_type_name'] = 	"Field Type" ;
	
	$lang[$section.'efld_is_quanitity_field'] = 	"Is Quanitity Field" ;
	$lang[$section.'efld_is_units_field'] = 	"Is Units Field" ;
	$lang[$section.'efld_is_unit_price_field'] = 	"Is Unit Price Field" ;
	$lang[$section.'efld_is_totalamount_field'] = 	"Is Totalamount Field" ;
	
	
	$lang[$section.'efld_print_order'] = 	"Print Order" ;
	$lang[$section.'efld_is_hidden'] = 	"Is Hidden" ;
	$lang[$section.'efld_options'] = 	"Options" ;
	$lang[$section.'efld_lookup_class_name'] = 	"Class Name" ;

	//$lang[$section.'Remark: Donot Make Space At Field Name you can use (_)'] = "Remark: Donot Make Space At Field Name  you can use (_)" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "evaluations" ;
	$lang[$section.'create_title'] = "Add evaluation" ;
	$lang[$section.'read_title'] = "evaluations" ;
	$lang[$section.'delete_title'] = "Delete evaluation" ;
	
	$field_name=$section."eval_field_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	




	$field_name=$section."Remark: Donot Make Space At Field Name you can use (_)" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Remark: Donot Make Space At Field Name  you can use (_)" ;
	$lang[$field_name.'_is_required'] = 	"_" ;



	
	$field_name=$section."eval_field_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Field Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;





	$field_name=$section."efld_options" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Options :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	

	$field_name=$section."field_type_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Type Bame :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;


	
		$field_name=$section."eval_field_text" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Field Text :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	////////////////
	$field_name=$section."eval_field_text_arabic" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Field Text Arabic :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."eval_field_order" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Field Order" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	////////////////////
	$field_name=$section."eval_field_type_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Type" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	////////////////////////////
	$field_name=$section."eval_field_type_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Type Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_is_quanitity_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Is Quanitity Field :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."efld_is_units_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Is Units Field" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."efld_is_unit_price_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Is Unit Price Field :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_is_totalamount_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" is_totalamount_field :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."efld_print_order" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"print_order" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."efld_is_hidden" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"dd_is_hidden" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."eval_field_forumula" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"field_forumula" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_lookup_class_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Lookup Class Name" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_hide_in_print" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"hide_in_print" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_field_format" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"field_format" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_default_value" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"default_value" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_is_obligatory" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Is Obligatory" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_field_width" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"field_width" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."efld_lookup_class_filter" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Lookup Class Filter" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;


	$field_name=$section."field_type_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Type Name" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	
	

	
	?>