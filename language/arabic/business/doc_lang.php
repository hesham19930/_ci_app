<?php

	//------------------------------------------------------------------------------------------------------
	//----------------------------------------------------------------------------------------------------
	// AGENT
	
    $main_file = "doc." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Employee ";
	$lang[$section.'page_subtitle']="_"; 
	$lang[$section.'list_title'] = "List of Employees ";
	
	
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'DOC_ID'] = 	"|hide|" ; 
	$lang[$section.'DOC_NUMBER'] = 	"Number :" ;
	$lang[$section.'DOC_INFO'] = 	"Document " ;
	$lang[$section.'DOC_IS_CURRENT'] = 	"Active " ;
	$lang[$section.'COUNTRY_NAME'] = "Country" ;
	$lang[$section.'DOC_REMARKS'] = "Remarks" ;
	$lang[$section.'EMPLOYEE_NAME'] = "Employee" ;

		$lang[$section.'DOC_ISSUE_DATE'] = "Issue" ;
		$lang[$section.'DOC_EXPIRE_DATE'] = "Expire" ;	
		$lang[$section.'DOC_EMP_CATEGORY_NAME'] = "Category" ;	
			$lang[$section.'DOC_FOLLOWUP_INFO'] = "VP#/App# :" ;	
	
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Agent Information";
	
	$field_name=$section."EMPLPYEE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMPLOYEE_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."COUNTRY_NAME" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Nationality :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_PPNO" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 		"Passport :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."DOC_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."DOC_DOCUMENT_TYPE_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Doc. Type :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."DOC_EMP_CATEGORY_ID" ;
	$lang[$field_name.'_tip'] = 	" ( if req. in this document ) " ;
	$lang[$field_name.'_label'] = "Category ID :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."DOC_NUMBER" ;
	$lang[$field_name.'_tip'] = 	" Visa Or Eqama Or Similar" ;
	$lang[$field_name.'_label'] = "Document Number :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."DOC_ISSUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Document Issue :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."DOC_IS_VALID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Valid :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."DOC_IS_CURRENT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "This is Current" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."DOC_EXPIRE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Document Expire :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."DOC_FOLLOWUP_INFO" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "VP#/App# :" ;	
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."EMP_SEX_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Sex :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_DEPARTMENT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Department :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."HIRE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Date Hired :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_BIRTH_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Birth date :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_PROFESSION_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Profession :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_PROJECT_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Current Project :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."EMP_MARITAL_STATUS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Marital Status :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."EMP_RELIGION_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Religion :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_ADDRESS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Address :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_PERSONAL_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Personal Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_QUALIFICATION_TEXT" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Qualification :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
		$field_name=$section."EMP_PP_NO" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Passport # :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_PP_EXPIRE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "PP Expire :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	

	$field_name=$section."EMP_MEDICAL_CARD" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Medical Card # :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_MEDICAL_STATUS_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Medical Status  :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_MED_ISSUE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "MED Issue :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."EMP_MED_EXPIRE_DATE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "MED Expire :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."EMP_BLOOD_TYPE" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Blood Type :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_MED_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Medical Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."EMP_BANK_ID" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Bank :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."EMP_BANK_ACCNO" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Bnk Acc # :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."IBAN" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "IBAN :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_BANK_REMARKS" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Fin. Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	//------------------------------------------------- for report filters 
	$field_name=$section."EMP_HIRE_DATE_FROM" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Hired From :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."EMP_HIRE_DATE_TO" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Hired To :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."autotable" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Enable Result Sort and Search " ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	$field_name=$section."LIST_VIEW" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = "Field Collection :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	
			
	
	
	