<?php

	//------------------------------------------------------------------------------------------------------
	// FILE TYPE
	
    $main_file = "file_type." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "File Types ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of File Types";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "file_type." ;
	$section = $main_file."default.list." ;
	$lang[$section.'DEPARTMENT_ID'] = 	"#" ; 
	$lang[$section.'DEPARTMENT_NAME'] = 	"File Type Name" ;
	$lang[$section.'BRANCH_NAME'] = 	"Branch" ;
	
	// edit view department -----------------------------------------------------------------------------------------
	$main_file = "file_type." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "File Type Information";
	
	$field_name=$section."FILE_TYPE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."FILE_TYPE_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Department Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."FILE_TYPE_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	
	$field_name=$section."FILE_TYPE_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    //----------------------------------------------------------------------------------------------------
	// DEPARTMENT
	
    $main_file = "department." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Departments ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Department";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "department." ;
	$section = $main_file."default.list." ;
	$lang[$section.'DEPARTMENT_ID'] = 	"#" ; 
	$lang[$section.'DEPARTMENT_NAME'] = 	"Department Name" ;
	$lang[$section.'BRANCH_NAME'] = 	"Branch" ;
	
	// edit view department -----------------------------------------------------------------------------------------
	$main_file = "department." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Department Information";
	
	$field_name=$section."DEPARTMENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."DEPARTMENT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Department Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."DEPARTMENT_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	
	$field_name=$section."DEPARTMENT_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    //----------------------------------------------------------------------------------------------------
	

	
	// SECTION
	
    $main_file = "section." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Sections ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Sections";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "section." ;
	$section = $main_file."default.list." ;
	$lang[$section.'SECTION_ID'] = 	"#" ;
	$lang[$section.'SECTION_CODE'] = 	"Section Code" ; 
	$lang[$section.'SECTION_NAME'] = 	"Section Name" ;
	$lang[$section.'DEPARTMENT_NAME'] = 	"Department Name" ;
	
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "section." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Section Information";
	
	$field_name=$section."SECTION_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."SECTION_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Section Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."SECTION_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Section Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."SEC_DEPARTMENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Department : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	
	$field_name=$section."SECTION_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	//-------------------------------------------------------------
	
	// ACCOUNT GROUPS
	
    $main_file = "accountgroup." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Account Groups ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Account Groups";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "accountgroup." ;
	$section = $main_file."default.list." ;
	$lang[$section.'ACCOUNT_GROUP_ID'] = 	"#" ; 
	$lang[$section.'ACCOUNT_GROUP_NAME'] = 	"Name" ;
	$lang[$section.'ACCOUNT_GROUP_CODE'] = 	"Code" ;
	$lang[$section.'ACCOUNT_GROUP_REMARKS'] = 	"Remarks" ;
	$lang[$section.'GL_ACCOUNT_CODE5'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME5'] = 	"GL Name" ;
	
	// edit view account group -----------------------------------------------------------------------------------------
	$main_file = "accountgroup." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Account Group Information";
	
	$field_name=$section."ACCOUNT_GROUP_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_GROUP_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACCOUNT_GROUP_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."GL_ACCOUNT_CODE5" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"GL Account Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_NAME5" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"GL Account Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	$field_name=$section."ACCOUNT_GROUP_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    //----------------------------------------------------------------------------------------------------
	
    
	
	// SERVICE CATEGORY
	
    $main_file = "service_category." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Service Categories ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Service Categories";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "service_category." ;
	$section = $main_file."default.list." ;
	$lang[$section.'SERVICE_CATEGORY_ID'] = 	"#" ; 
	$lang[$section.'SERVICE_CATEGORY_NAME'] = 	"Service Category Name" ;
	$lang[$section.'IS_AIRLINE'] = 	"Air Line Category" ;
	
	// edit view service category -----------------------------------------------------------------------------------------
	$main_file = "service_category." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Service Category Information";
	
	$field_name=$section."SERVICE_CATEGORY_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."SERVICE_CATEGORY_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Service Category Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."IS_AIRLINE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Is Air Line " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	
	$field_name=$section."SERVICE_CATEGORY_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    //----------------------------------------------------------------------------------------------------
	
// SERVICE 
	
    $main_file = "service." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Services ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Services";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "service." ;
	$section = $main_file."default.list." ;
	$lang[$section.'T_SERVICE_ID'] = 	"#" ; 
	$lang[$section.'T_SERVICE_NAME'] = 	"Service Name" ;
	$lang[$section.'T_SERVICE_CODE'] = 	"Service Code" ;
	$lang[$section.'SERVICE_CATEGORY_NAME'] = 	"Service Category" ;
	$lang[$section.'T_SERVICE_ONHOLD'] = 	"On Hold" ;
	$lang[$section.'T_SERVICE_NO_SUPPLIER'] = 	"No Suuplier" ;
	
	$lang[$section.'T_SERVICE_VALID_COST'] = 	"Valid For Cost" ;
	$lang[$section.'T_SERVICE_VALID_INCOME'] = 	"Valid For Income" ;
	
	
	
	// edit view service  -----------------------------------------------------------------------------------------
	$main_file = "service." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Service Information";
	
	$field_name=$section."T_SERVICE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."T_SERVICE_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Service Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_SERVICE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Service Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TS_SERVICE_CATEGORY_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Service Category :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."T_SERVICE_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_SERVICE_VALID_COST" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Valid For Cost " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_SERVICE_VALID_INCOME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Valid For Income " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."T_SERVICE_NO_SUPPLIER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " No Suuplier " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."T_SERVICE_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
    //----------------------------------------------------------------------------------------------------
	
 //----------------------------------------------------------------------------------------------------
	
// SERVICE DESCRIPTOR
	
    $main_file = "service_descriptor." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Service Descriptors ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Service Descriptors";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "service_descriptor." ;
	$section = $main_file."default.list." ;
	$lang[$section.'SERVICE_DESCRIPTOR_ID'] = 	"#" ; 
	$lang[$section.'FIELD_NAME'] = 	"Field Name" ;
	$lang[$section.'FIELD_TEXT'] = 	"Field Text" ;
	$lang[$section.'FIELD_ORDER'] = 	"Field Order" ;
	$lang[$section.'T_FIELD_TYPE_NAME'] = 	"Field Type" ;
	
	$lang[$section.'IS_UNIT_PRICE_FIELD'] = 	"Is Unit Price" ;
	$lang[$section.'IS_TOTALAMOUNT_FIELD'] = 	"Is Total Amount" ;
	$lang[$section.'IS_QUANITITY_FIELD'] = 	"Is Quantity" ;
	$lang[$section.'IS_UNITS_FIELD'] = 	"Is Unit" ;
	$lang[$section.'SD_IS_HIDDEN'] = 	"Is Hidden" ;
	$lang[$section.'PRINT_ORDER'] = 	"Print Order" ;
	
	
	// edit view service  -----------------------------------------------------------------------------------------
	$main_file = "service_descriptor." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Service Descriptor Information";
	
	$field_name=$section."SERVICE_DESCRIPTOR_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."SERVICE_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Service Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."FIELD_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Field Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."FIELD_TEXT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Field Text :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."FIELD_ORDER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Field Order " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PRINT_ORDER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Print Order " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."SD_FIELD_TYPE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Field Type " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."FIELD_FORUMULA" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Field Formula " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."DEFAULT_VALUE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Default Value :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."LOOKUP_CLASS_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Lookup Class " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."SD_IS_HIDDEN" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Is Hidden " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."IS_TOTALAMOUNT_FIELD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Is Total Amount " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."IS_OBLIGATORY" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Is Obligatory :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."HIDE_IN_PRINT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Hide In Print " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."FIELD_WIDTH" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Field Width " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."FIELD_FORMAT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Field Format " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."IS_UNIT_PRICE_FIELD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Is Unit Price :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		
	$field_name=$section."IS_UNITS_FIELD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Is Unit Field :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."LOOKUP_CLASS_FILTER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Lookup Class Filter :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."IS_QUANITITY_FIELD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Is Quantity Field :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
    //----------------------------------------------------------------------------------------------------
		    
 //----------------------------------------------------------------------------------------------------
	
// QUOATATION MAIN
	
    $main_file = "quoatation." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Quoatations ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Quoatations";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "quoatation." ;
	$section = $main_file."default.list." ;
	$lang[$section.'SERVICE_DESCRIPTOR_ID'] = 	"#" ; 
	$lang[$section.'FIELD_NAME'] = 	"Field Name" ;
	$lang[$section.'FIELD_TEXT'] = 	"Field Text" ;
	$lang[$section.'FIELD_ORDER'] = 	"Field Order" ;
	$lang[$section.'T_FIELD_TYPE_NAME'] = 	"Field Type" ;
	
	$lang[$section.'IS_UNIT_PRICE_FIELD'] = 	"Is Unit Price" ;
	$lang[$section.'IS_TOTALAMOUNT_FIELD'] = 	"Is Total Amount" ;
	$lang[$section.'IS_QUANITITY_FIELD'] = 	"Is Quantity" ;
	$lang[$section.'IS_UNITS_FIELD'] = 	"Is Unit" ;
	
	
	// edit view service  -----------------------------------------------------------------------------------------
	$main_file = "quoatation." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Quoatation Information";
	
	$field_name=$section."T_QUOATATION_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."T_QUOATATION_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Quoatation Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_QUOATATION_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Quoatation Date :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TQ_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Client Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."T_QUOATATION_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Quoatation Reference " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TQ_DEPARTMENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Department Name " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TQ_SECTION_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Section Name " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_QUOATATION_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Quoatation Description :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TQ_TOTAL_AMOUNT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Total Amount " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	//----------------------------------------------------------------------------------------------------
	
// FILE MAIN
	
    $main_file = "file." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Files ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Files";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "file." ;
	$section = $main_file."default.list." ;
	$lang[$section.'SERVICE_DESCRIPTOR_ID'] = 	"#" ; 
	$lang[$section.'FIELD_NAME'] = 	"Field Name" ;
	$lang[$section.'FIELD_TEXT'] = 	"Field Text" ;
	$lang[$section.'FIELD_ORDER'] = 	"Field Order" ;
	$lang[$section.'T_FIELD_TYPE_NAME'] = 	"Field Type" ;
	
	$lang[$section.'IS_UNIT_PRICE_FIELD'] = 	"Is Unit Price" ;
	$lang[$section.'IS_TOTALAMOUNT_FIELD'] = 	"Is Total Amount" ;
	$lang[$section.'IS_QUANITITY_FIELD'] = 	"Is Quantity" ;
	$lang[$section.'IS_UNITS_FIELD'] = 	"Is Unit" ;
	
	
	// edit view service  -----------------------------------------------------------------------------------------
	$main_file = "file." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "File Information";
	
	$field_name=$section."T_FILE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."T_FILE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"File Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_FILE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"File Date :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TF_DEPARTMENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Department Name " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TF_SECTION_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Section Name " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."T_FILE_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"File Description :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TF_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Client :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TF_TOTAL_AMOUNT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Total Amount " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TF_TOTAL_COST" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Total Cost " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
			
	
    //----------------------------------------------------------------------------------------------------
	// PERFORMA MAIN
	
    $main_file = "performa." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Performas ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Performas";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	
	
	$main_file = "performa." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "P Information";
	
	//---------------------------------------------
	
	// income detail -----------------------------------------------------------------------------------------
	$main_file = "income_detail." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "";
	
	$field_name=$section."TI_CLIENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Client Name" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	//----------------------------------------------------------------------------------------------------
	
	
	$field_name=$section."DEPARTMENT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Department Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		    		
		// CLIENT
	
    $main_file = "client." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Client Accounts ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Client Accounts";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "account." ;
	$section = $main_file."client.list." ;
	$lang[$section.'ACCOUNT_ID'] = 	"#" ; 
	$lang[$section.'ACCOUNT_NAME'] = 	"Requester Name" ;
	$lang[$section.'ACCOUNT_CODE'] = 	"CODE" ;
	$lang[$section.'ACCOUNT_GROUP_NAME'] = 	"Client Name" ;
	$lang[$section.'ACC_TELEPHONE'] = "Telephones" ;
	$lang[$section.'GL_ACCOUNT_CODE5'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME5'] =     "GL Account Name" ;
	$lang[$section.'ACC_REMARKS'] = 	"Client Remarks" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "client." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Client Information";
	
	$field_name=$section."ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Requester Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Requester Code : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_ACCOUNT_GROUP_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Client Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_ADDRESS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Client Address : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_TELEPHONE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Telesphones : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_CONTACT_PERSON" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Contact Person : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_EMAIL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Client E-Mail : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_PERIOD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Payment Terms : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_CODE5" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_NAME5" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account Name : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	$field_name=$section."ACC_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	//----------------------------------------------------------------------------------------------------
	
	// SUPPLIER
	
    $main_file = "supplier." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Supplier Accounts ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Supplier Accounts";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "account." ;
	$section = $main_file."supplier.list." ;
	$lang[$section.'ACCOUNT_ID'] = 	"#" ; 
	$lang[$section.'ACCOUNT_NAME'] = 	"Supplier Name" ;
	$lang[$section.'ACCOUNT_CODE'] = 	"CODE" ;
	$lang[$section.'ACCOUNT_GROUP_NAME'] = 	"Supplier Group" ;
	$lang[$section.'ACC_TELEPHONE'] = "Telephones" ;
	$lang[$section.'GL_ACCOUNT_CODE5'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME5'] =     "GL Account Name" ;
	$lang[$section.'ACC_REMARKS'] = 	"Supplier Remarks" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "supplier." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Supplier Information";
	
	$field_name=$section."ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Supplier Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACC_ACCOUNT_GROUP_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Group Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Supplier Code : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_ADDRESS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Supplier Address : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_TELEPHONE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Telesphones : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_CONTACT_PERSON" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Contact Person : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_EMAIL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Supplier E-Mail : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACC_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_PERIOD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " Payment Terms : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."GL_ACCOUNT_CODE5" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_NAME5" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account Name : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	$field_name=$section."ACC_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	//----------------------------------------------------------------------------------------------------
	
	// BANK
	
    $main_file = "bank." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Bank Accounts ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Bank Accounts";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "account." ;
	$section = $main_file."bank.list." ;
	$lang[$section.'ACCOUNT_ID'] = 	"#" ; 
	$lang[$section.'ACCOUNT_NAME'] = 	"Bank Name" ;
	$lang[$section.'GL_ACCOUNT_CODE5'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME5'] =     "GL Account Name" ;
	$lang[$section.'ACC_REMARKS'] = 	"Remarks" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "bank." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Bank Information";
	
	$field_name=$section."ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Bank Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACCOUNT_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Bank Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACC_GL_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	$field_name=$section."ACC_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	//----------------------------------------------------------------------------------------------------
	
	// PETTY CASH
	
    $main_file = "petty_cash." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Petty Cash Accounts ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Petty Cash Accounts";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "account." ;
	$section = $main_file."petty_cash.list." ;
	$lang[$section.'ACCOUNT_ID'] = 	"#" ; 
	$lang[$section.'ACCOUNT_NAME'] = 	"Account Name" ;
	$lang[$section.'GL_ACCOUNT_CODE5'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME5'] =     "GL Account Name" ;
	$lang[$section.'ACC_REMARKS'] = 	"Remarks" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "petty_cash." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Petty Cash Information";
	
	$field_name=$section."ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACCOUNT_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACC_GL_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	$field_name=$section."ACC_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	//----------------------------------------------------------------------------------------------------
	
	// SAFE
	
    $main_file = "safe." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Safe Accounts ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Safe Accounts";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "account." ;
	$section = $main_file."safe.list." ;
	$lang[$section.'ACCOUNT_ID'] = 	"#" ; 
	$lang[$section.'ACCOUNT_NAME'] = 	"Safe Name" ;
	$lang[$section.'GL_ACCOUNT_CODE5'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME5'] =     "GL Account Name" ;
	$lang[$section.'ACC_REMARKS'] = 	"Remarks" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	$main_file = "safe." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Safe Information";
	
	$field_name=$section."ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACCOUNT_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Safe Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACCOUNT_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Safe Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."ACC_ONHOLD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " On Hold : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ACC_GL_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	
	$field_name=$section."ACC_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	//------------------------------------------------------------------------------------------------------
	//----------------------------------------------------------------------------------------------------
	// INVOICE ITEMS
	
    $main_file = "item." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Sales Items ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Sales Items";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'ITEM_ID'] = 	"#" ; 
	$lang[$section.'ITEM_NAME'] = 	"Item Name" ;
	$lang[$section.'ITEM_CODE'] = "Item Code" ;
	$lang[$section.'ITEM_PRICE'] = 	"Item Price" ;
	$lang[$section.'ITEM_UNIT'] = 	"Item Unit" ;
	$lang[$section.'GL_ACCOUNT_CODE'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME'] =     "GL Account Name" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Sales Item";
	
	$field_name=$section."ITEM_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ITEM_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Item Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ITEM_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Item Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ITEM_PRICE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Item Price :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ITEM_UNIT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Unit :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account Name : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	

	
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// INVOICE ITEMS
	
    $main_file = "supplier_item." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Purchasing Items ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Purchasing Items";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'ITEM_ID'] = 	"#" ; 
	$lang[$section.'ITEM_NAME'] = 	"Item Name" ;
	$lang[$section.'ITEM_CODE'] = "Item Code" ;
	$lang[$section.'ITEM_PRICE'] = 	"Item Price" ;
	$lang[$section.'ITEM_UNIT'] = 	"Item Unit" ;
	$lang[$section.'GL_ACCOUNT_CODE'] = 	"GL Account" ;
	$lang[$section.'GL_ACCOUNT_NAME'] =     "GL Account Name" ;
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Purchasing Item";
	
	$field_name=$section."ITEM_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."ITEM_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Item Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ITEM_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Item Code :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ITEM_PRICE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Item Price :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ITEM_UNIT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Unit :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ACCOUNT_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = " GL Account Name : " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	

	
	//-------------------------------------------------------
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	// A/R INVOICES
	
    $main_file = "client_invoice." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Client Invoices";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Client Invoices";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Invoice Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Client Invoice";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Client:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total Invoice:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Reference:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	// A/P INVOICES
	
    $main_file = "supplier_invoice." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Supplier Invoices";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Supplier Invoices";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Invoice Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Supplier Invoice";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Supplier:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total Invoice:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Reference:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	

	
		
	


// A/R DEBIT NOTES
	
    $main_file = "note." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Debit Notes";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Debit Notes";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Debit Note";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Account:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total Note:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;


// A/R DEBIT NOTES
	
    $main_file = "credit_note." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Credit Notes";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Credit Notes";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Credit Note";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Credit Note  Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Account:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;



	
	// CASH PAYMENT VOUCHER
	
    $main_file = "payment." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Payment Transaction";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Payment Transactions";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'PAYMENT_ID'] = 	"#" ; 
	$lang[$section.'PAYMENT_NUMBER'] = 	"Payment Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Payment";
	
	$field_name=$section."PAYMENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."PAYMENT_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"PV# Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payment Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."P_PAYMENT_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payment Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."P_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Safe/Bank" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."P_PAY_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Account:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	$field_name=$section."PAYMENT_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payment From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payment To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payment Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."PAYMENT_AMOUNT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."P_CURRENCY_RATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Currency Rate:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."PAYMENT_AMOUNT_CURRENCY" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Currency:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."P_CHECK_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Number:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."P_CHECK_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
		
	$field_name=$section."P_CHECK_BANK" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Issued Bank:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	// CASH EXPENSES VOUCHER
	
    $main_file = "cash_expense." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Cash Transaction";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Cash Transaction";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Cash in / Cash out";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"PV# Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"PV Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Pay To:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_PAY_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Receive From:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"PV Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	




    // CASH RECEIPT
	
    $main_file = "cash_receipt." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Cash Receipt";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Cash Receipt";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Cash Receipt";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"CR# Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"CR Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Receive From:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_PAY_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Pay To:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"CR Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_COST_CENTER_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Cost Center:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_COST_CENTER_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Cost Center Name:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ANALYSIS_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Analysis:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ANALYSIS_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Analysis Name:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	


   // CHECK PAYMENT VOUCHER
	
    $main_file = "check_payment." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Check Transaction";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Check Transaction";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Check Payment";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Pay To:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_PAY_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Receive From:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_CHECK_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Number:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_CHECK_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_COST_CENTER_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Cost Center:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_COST_CENTER_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Cost Center Name:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ANALYSIS_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Analysis:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ANALYSIS_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Analysis Name:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
       
	
    // CHECK RECEIPT
	
    $main_file = "check_receipt." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Check Receipt Transaction";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Check Receipt";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Check Receipt";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Receive From:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_PAY_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Pay To:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_CHECK_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Number:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_CHECK_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
		
	$field_name=$section."TR_CHECK_BANK" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Issued Bank:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_COST_CENTER_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Cost Center:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_COST_CENTER_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Cost Center Name:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ANALYSIS_CODE6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Analysis:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."GL_ANALYSIS_NAME6" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Analysis Name:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// REPORTS
	
    $main_file = "account_report." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Check Receipt Transaction";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Check Receipt";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Check Receipt";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Receive From:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_PAY_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Pay To:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Invoice To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_CHECK_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Number:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_CHECK_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Check Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
		
	$field_name=$section."TR_CHECK_BANK" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Issued Bank:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	
	//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// GENERAL REPORTS
	
    $main_file = "trans_report." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Check Receipt Transaction";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Check Receipt";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'TRANS_ID'] = 	"#" ; 
	$lang[$section.'TRANS_NUMBER'] = 	"Trans Number" ;
	
	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Transaction Browsing";
	
	$field_name=$section."TRANS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."TRANS_NUMBER" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_REFERENCE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Reference :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TR_TRANS_TYPE_CODE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."P_ACCOUNT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Account:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
	
	$field_name=$section."TRANS_DESCRIPTION" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Description:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_DUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Due Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_FROM_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"From Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TO_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"To Date:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_STATUS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Trans Status:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_PAYEE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Payee:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TRANS_TOTAL" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Total:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."ACCOUNT_TYPE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Account Type:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
// SUPPLIER SERVICE 
	
    $main_file = "supplier_service." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Supplier Service ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Suppliers Service ";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_groups'] =  " ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$main_file = "supplier_service." ;
	$section = $main_file."default.list." ;
	$lang[$section.'T_SUPPLIER_SERVICE_ID'] = 	"#" ; 
	$lang[$section.'T_SERVICE_NAME'] = 	"Service Name" ;
	$lang[$section.'ACCOUNT_NAME'] = 	"Supplier Name" ;
	
	// edit view service  -----------------------------------------------------------------------------------------
	$main_file = "supplier_service." ; 
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Supplier Service Information";
	
	$field_name=$section."T_SUPPLIER_SERVICE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."TS_SERVICE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Service Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."TS_SUPPLIER_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Supplier Name :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
    //----------------------------------------------------------------------------------------------------
	
