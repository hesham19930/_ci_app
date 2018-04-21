<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "school_class." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "قائمة الفصول";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة الفصول";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات " ;
	$lang[$section.'operation'] = 	"التشغيل " ;
	$lang[$section.'school_classes'] = 	"الفصول" ;
	$lang[$section.'school_classes_listing'] = 	"اعداد قوائم الفصول" ;
		$lang[$section.'school_classes_attend'] = 	"الغياب اليومى للفصول" ;
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save_class'] = 	"حفظ " ;
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'school_class_id'] = 	"#" ; 
	$lang[$section.'education_grade_name_ar'] = 	" الصف الدراسى :" ; 
	$lang[$section.'school_class_name'] = 	"الاسم بالانجليزية"  ;
	$lang[$section.'s_c_order'] = 	"الترتيب"  ;
	$lang[$section.'school_class_name_ar'] = 	"الفصل"  ;
	
	
	
	
	$lang[$section.'s_c_active'] = 	"فعال?" ;
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "الفصل" ;
	$lang[$section.'create_title'] = "اضافة فصل جديد" ;
	$lang[$section.'read_title'] = "الفصل" ;
	$lang[$section.'delete_title'] = "حذف الفصل " ;
	
	$field_name=$section."school_class_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	$field_name=$section."school_class_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الاسم بالانجليزية :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."school_class_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الفصـــــــــــل :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."s_c_active" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"فعال :" ;
	$lang[$field_name.'_is_required'] = 	"" ;
	
	$field_name=$section."s_c_education_grade_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الصف الدراسى :" ;
	$lang[$field_name.'_is_required'] = 		"مطلوب" ;
	
	$field_name=$section."education_grade_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الصف الدراسى :" ;
	$lang[$field_name.'_is_required'] = 		"مطلوب" ;
	
	$field_name=$section."s_c_order" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" الترتيب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$field_name=$section."attend_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" التاريخ :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	

	$field_name=$section."late_students" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" التأخيرات :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	$field_name=$section."absent_students" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" الغياب :" ;
	$lang[$field_name.'_is_required'] = 	"مطلوب" ;
	
	
	$lang["records_saved"] = 	"تم حفظ عدد سجلات" ;
		
?>