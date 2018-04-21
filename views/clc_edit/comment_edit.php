<?php


	$this_concept = "comment" ; 
	$this_controller = "clinic/".$this_concept."s";
	
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
		}else{
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $value ; 
				}
		
			if ($disable_edit) $read_only = 1 ; 
           
	//		r_theme_box_start("",12,array("body_id"=>"edit_".$this_concept."_body","box_id"=>"edit_".$this_concept."_box","tools"=>""));	
            $this->load->view("_general/title_message",array("title"=>"Visit Notes","content"=>" ","color"=>"green")) ;
            
		}
		
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  
		r_theme_InputHidden( "is_an_action", "yes");
		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0){
			
		$field_name = "comment_id" ;
				
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
	
        $field_name = "comment_visit_id" ;
                
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
        r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "meduim",$SubTip ,0);
         
          
		//----------------------------------------------------------------------------------------------------
		
	
				
				
				
		// obligatory // _____________________________________________________________________________________________________	
	

            //----------------------------------------------------------------------------------------------------
   
			echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
			echo '<div class="span5 m-wrap">';   
			  echo "Enter Visit Notes  and Click Save" ;
			   
			echo '</div>';echo '</div>';
			  //__________________________________________________________________________________________ 	
			  echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
			  echo '<div class="span3 m-wrap">';   
		  $field_name = "comment_prefix" ;
			   
			  $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
			  if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
			  $Label = r_langline($field_name.'_label',$lang_section);
				  
			  r_theme_inputtext($field_name,$input_values[$field_name],$Label,"small  typeahead ","",0,1,0,site_url("clinic/comments/typeahead_data/comment_prefix"));
			  echo '</div>';
	   
			  echo '<div class="span6 m-wrap">';   
        $field_name = "comment" ;
         
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
       
        $Label  = r_langline("x");     
        r_theme_inputtext($field_name,$input_values[$field_name],$Label,"large typeahead ","",0,1,0,site_url("clinic/comments/typeahead_data/comment"));
        
               $field_name = "comment_color" ;
         

     
     //if($input_values[$field_name]==="") {   $input_values[$field_name] =0;    }
     
     $SubTip = " ";
     if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
     $Label ="Alert" ;

     r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,$read_only);
     
     
        echo '</div>';
        
           //_____________________________________________________________________________________________
        echo '<div class="span3 m-wrap">';
        // obligatory // _____________________________________________________________________________________________________  
             
             			
		if($input_values["comment_visit_id"]!=0)			 
		{
		?> 
		<div class="table-toolbar pull-right">
<div class="btn-group">
		<button  
		type="submit" 
	
		class="btn green ajax_action right master_font"
		
		caller_verb="post_form"
		caller_id="<?php echo $this_concept ; ?>_edit_form"
		caller_url="<?php echo site_url($this_controller)."/ajax_edit/".$item->ID()  ; ?>"
		caller_target="edit_<?php echo $this_concept ; ?>_body"
		
		form_type="POST"				
		form_name="<?php echo $this_concept ; ?>_form" 	
			
		>
		
		S.
		
		</button>	
		
		</div>
	</div>
	</div>
		<?php }
		else
			{
		?>
		<div class="table-toolbar pull-right">
		<div class="btn-group">
			<button  
				type="submit" 
				
				class="btn blue ajax_action pull-right master_font"
				
				caller_verb="form_cancel"
				caller_id="<?php echo $this_concept ; ?>_edit_form"
				caller_url='_'
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
		>			
		<?php echo r_langline("general.button_cancel") ; ?>		
		</button>	
		</div>
		
		<div class="btn-group">
		<button  
				type="submit" 
			
				class="btn green ajax_action right master_font"
				
				caller_verb="post_form"
				caller_id="<?php echo $this_concept ; ?>_edit_form"
				caller_url="<?php echo site_url($this_controller)."/ajax_edit/".$item->ID()  ; ?>"
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
				
			>
			<?php echo r_langline("general.button_save") ; ?>
		</button>
		
		</div></div>
		<?php
			}		
		echo "<form>" ; 
		//r_theme_endform();
	 
	//	r_theme_box_end();	
					
		?>