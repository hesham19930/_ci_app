<?php


	$this_concept = "image" ; 
	$this_controller = "clinic/".$this_concept."s";
	$this->load->model('clinic/bi_image');
		// BEGIN PAGE SETTINGS
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	$this->lang->load('clinic/'.$this_concept.'_main', $this->admin_public->DATA["system_lang"]);

	$read_only = 0 ;  			 	 
		// take the value from the previous form submit
	$item = $this_item ; 			
	$input_values = array() ; // this is our array 
					
		if (set_value("is_an_action") == "yes")
		{
				//echo "ACTION=yes" ;
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = set_value($key) ;
				}	
		}
		else
		{

				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $value ; 
				}
		
		if ($disable_edit) $read_only = 1 ; 
		  
        	r_theme_box_start
			("",12,
				array("body_id"=>"new_image_body",
						"box_id"=>"new_image_body",
						"tools"=>"")
			);		
		}

//
		r_theme_startform(   "new_image_form",  "new_image_form" ,"","post"); //echo form_open('form');
    echo '<form action="" class="form-horizontal" name="img_form" id="img_form" method="post"
		
		enctype="multipart/form-data" > '; 
        
		$lang_section =$this_concept.".form_data.";  

	   ////////////////////to disable patient-name when validation = false////////
		$patient_id = $item->business_data["img_patient_id"] ;
	   ///////////////////////////////////////////////////////////////////////////	
			
		
		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0)
		{
				$field_name = "image_id" ;
				
				$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
				if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
				$Label = r_langline($field_name.'_label',$lang_section);
				r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
		
		//  // _____________________________________________________________________________________________________
	//	echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
	//	echo '<div class="span11 m-wrap">';
		
		$field_name = "img_patient_id" ;

		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		
		$lookup_class= "bi_patient" ; 
		$lookup_filter="" ; 	
		
		//echo"idddddddddddddd>>>>>>".$patient_id;
		
		if($patient_id != 0)
		{
			$input_values[$field_name ] = $patient_id ;
			r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "meduim ",$SubTip ,$read_only);
			//r_theme_InputText($field_name,$input_values[$field_name],$Label , "meduim",$SubTip ,$read_only);
		}
		elseif ($patient_id == 0)
			 r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"meduim",$SubTip,0,1);
		
	//	echo '</div></div>'; */
		//----------------------------------------------------------------------------------------------------------------------------------------------
		r_theme_InputHidden( "is_an_action", "yes");       
        echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
      echo '<div class="span5 m-wrap">';   
       echo "Upload New Medical Image" ;
         
      echo '</div>';echo '</div>';
		//__________________________________________________________________________________________ 	
	
		echo '<div class="controls-row">'; ///START RIGHT HALF ---------------------------------------------
		echo '<div class="span11 m-wrap">';
		
		$field_name = "img_image_type_id" ;

		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		
		$lookup_class= "bi_image_type" ; 
		$lookup_filter="" ; 	
		r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"meduim",$SubTip,0,0);
		
		echo '</div></div>';	echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span11 m-wrap">';
		




		echo '<div class="controls-row">'; 	
		echo '<div class="span6 m-wrap">';
		
		$field_name = "img_center_name" ;
		 $SubTip = "";
		if (form_error($field_name)!="")
		{	$SubTip = r_theme_input_error('Center name Required');	}
		$Label = r_langline($field_name.'_label',$lang_section);
		  
		
		//r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
		r_theme_InputText($field_name,$input_values[$field_name],$Label , "large typeahead",$SubTip ,$read_only ,0,1,site_url("clinic/evaluations/typeahead_data"));   	
		
		echo '</div></div><br>'; 

		
		$field_name = "image_date" ;	//date
				 
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
				  	
		r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only,"date-picker");	
		
		echo '</div></div>'; 
        
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span11 m-wrap">';
		
		//$field_name =$GLOBALS['logo'];
		//global $field_name;
		
		//$field_name = "image_logo" ;
				
					
    echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
 
		   echo '<div class="span8 m-wrap">'; 
           
		      ?> 
		      <label class="control-label master_font" for="logo">Select File :</label>
		      <div class="controls input-icon">
		<input name= "logo" id="logo" type="file"  class="btn green master_font" data-max-file-size="4096K" />
		</div></div></div>
		

<?php 



       ?>

	<button  type="submit" 		

				class="btn green ajax_action l master_font pull-right"
				
				caller_verb="post_form"
				caller_id="new_image_form"
				caller_url="<?php echo site_url($this_controller)."/ajax_edit/".$item->ID()  ; ?>"
				caller_target="new_image_body"
				
				form_type="POST"				
				form_name="new_image_form" 	
				
			>
			
			<?php echo r_langline("general.button_save") ; ?>
		</button>
		<?php		
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>