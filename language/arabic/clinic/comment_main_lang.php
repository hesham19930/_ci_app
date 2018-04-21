<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "comment." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "التعليقات";
	$lang[$section.'page_subtitle']="_"; 




// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة التعليقات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "التعليقات";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"حفظ" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'comment_id'] = 	"#" ; 
	$lang[$section.'comment'] = 	"التعليق" ;
	$lang[$section.'comment_visit_id'] = 	"" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "التعليقات" ;
	$lang[$section.'create_title'] = "اضافة تعليق" ;
	$lang[$section.'read_title'] = "التعليق" ;
	$lang[$section.'delete_title'] = "مسح التعليق" ;
	
	$field_name=$section."comment_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."comment_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" :" ;
	$lang[$field_name.'_is_required'] = 	"" ;
	
	
	$field_name=$section."comment" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اضافة تعليق :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	?>