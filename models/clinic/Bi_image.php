<?php

Class bi_image extends Simple_business implements iSimple_Business 
	{
		
	/* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
function __construct() 
		{
		  
		  	$this->bi_config(); 			
			// setup all variables 
			$this->clear();
			
		}
	
	/* config & clear business_data  Array of the object */ 
public function clear(){
		// create array containing all data of the business object not including linked tables//
		$this->business_data  = 
			array(
			"image_id"=>"",
			"img_image_type_id"=>"",
			"image_date"=>"",
			"patient_name"=>"",
			"img_patient_id"=>"",
			"img_center_name"=>"",
			"image_type_name"=>"",
			
			
			"img_sys_account_id"=>sysDATA("sys_account_id") , 
			);
			
		
		
		  
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/image_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_image";
			$this->table_name="image_s";
			
			$this->concept_key="image." ; 
			
			$this->id_field_name="image_id" ; 

			$this->name_field_name=r_langcase("image_id","image_id");
			$this->name_field_name="image_id" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
		
		
			$this->list_views["default"] = Array (
				"image_id"=>"|hide|", 
				
				"patient_name"=>"|hide|",
				"img_patient_id"=>"|hide|",
				
				"img_image_type_id"=>r_langline("default.list.img",$this->concept_key),
			
				
			
				"image_date"=>r_langline("default.list.image_date",$this->concept_key),
				"img_center_name"=>r_langline("default.list.img_center_name",$this->concept_key),
				
				
				
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("image_s.*");		
			$this->read_select_extended=Array("image_s.*" , "patient_name","image_type_name");
			$this->read_join_extended=Array(
								
						Array(
							"1"=>"patient_s" , 
							"2"=>"patient_s.patient_id = image_s.img_patient_id",
							"3"=>"left"),
							Array(
								"1"=>"image_type_s" , 
								"2"=>"image_type_s.image_type_id = image_s.img_image_type_id",
								"3"=>"left"),
							);



							
			$this->list_join = $this->read_join_extended ;
			
			$this->list_edit_Col =2 ; 
			
			//$this->list_items_where["all"] = array();  
			$this->list_items_where["single_patient"] = array("patient_id"=>"image_s.img_patient_id" ) ;				
	}

	function typeahead_list($fieldname="",$search_value = "" , $and_where = array() ) 
        {
            $this_and_where = $and_where ; 
            $this_and_where []= "img_sys_account_id =  ".sysDATA("sys_account_id");  
            return parent::typeahead_list($fieldname,$search_value,$this_and_where);
		}
		
	function delete_pre_process()
	{

		
			

			
			
return true; 
	}

	function delete_post_process($id,$cleared=false)
	{
		$file_name ="patdata-".$id ;
		
	   $the_file = $this->config->item('resala_image_store_path'). "/" . $file_name.".jpg";	
	   
		if (file_exists($the_file)) unlink  ($the_file) ; 
		$the_file = $this->config->item('resala_image_store_path'). "/" . $file_name.".png";
		if (file_exists($the_file)) unlink  ($the_file) ; 
		$the_file = $this->config->item('resala_image_store_path'). "/" . $file_name.".gif";
		if (file_exists($the_file)) unlink  ($the_file) ; 
	}	
//----------------End OF The Class---------------------------------
}