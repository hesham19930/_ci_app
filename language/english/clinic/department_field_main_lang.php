<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "department_field." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Medical Department descriptor";
	$lang[$section.'page_subtitle']="_"; 
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Departments list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "departments";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'department_descriptor_id'] = 	"#" ; 
	$lang[$section.'field_name'] = 	"Field Name" ;
	$lang[$section.'field_text'] = 	"Field Text" ;
	$lang[$section.'field_order'] = 	"Field Order" ;
	$lang[$section.'field_type_name'] = 	"Field Type" ;
	$lang[$section.'is_quanitity_field'] = 	"Is Quanitity Field" ;
	$lang[$section.'is_units_field'] = 	"Is Units Field" ;
	$lang[$section.'is_unit_price_field'] = 	"Is Unit Price Field" ;
	$lang[$section.'is_totalamount_field'] = 	"Is Totalamount Field" ;
	$lang[$section.'print_order'] = 	"Print Order" ;
	$lang[$section.'dd_is_hidden'] = 	"Is Hidden" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "departments" ;
	$lang[$section.'create_title'] = "Add department" ;
	$lang[$section.'read_title'] = "departments" ;
	$lang[$section.'delete_title'] = "Delete department" ;
	
	$field_name=$section."department_field_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."df_field_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Field Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_field_text" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Field Text :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."df_field_order" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Field Order" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."df_field_type_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Field Type Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_is_quanitity_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" is_quanitity_field :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."df_is_units_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"is_units_field" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."df_is_unit_price_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" is_unit_price_field :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_is_totalamount_field" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" is_totalamount_field :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."df_print_order" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"print_order" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."df_is_hidden" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"dd_is_hidden" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_field_forumula" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"field_forumula" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_lookup_class_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Lookup Class Name" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;



	$field_name=$section."df_field_options" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Field Options" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	
		$field_name=$section."df_hide_in_print" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"hide_in_print" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_field_format" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"field_format" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_default_value" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"default_value" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_is_obligatory" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Is Obligatory" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_field_width" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"field_width" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."df_lookup_class_filter" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Lookup Class Filter" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	

	
	?>