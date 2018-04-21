<?php


	$this_concept = "visit" ; 
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
		}
		else
		{
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $value ; 
				}
		
         if ( $item->ID()!=0)
        {
            $title = r_langline('edit_title',$this_concept.".form_data.") ;
            $title="" ; 
        }
        else {
            $title = r_langline('appointment_title',$this_concept.".form_data.") ;
        } 
        
        
		if ($disable_edit) $read_only = 1 ; 
		/*	r_theme_box_start
			($title,12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box",
						"tools"=>"")
			);
         * 
         */
          $this->load->view("_general/title_message",array("title"=>"Visit Information","content"=>"..","color"=>"blue")) ;	
		}
		
		
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  
		
		
		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0)
		{
				$field_name = "visit_id" ;
				
				$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
				if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
				$Label = r_langline($field_name.'_label',$lang_section);
				r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
		
		//  // _____________________________________________________________________________________________________
		
		
		
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span11 m-wrap">';
		$field_name = "visit_date" ;
		
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
				  	
		r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small confirm_save",$SubTip ,0,"date-picker");	
		//r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"large",$SubTip,1,1);
		//r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		 
		$field_name = "visit_v_status_id" ;
		r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
        
              
		echo '</div></div>';
        
               echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
        echo '<div class="span5 m-wrap">';
    
           $field_name = "visit_visit_type_id" ;
                    $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                    if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                    $Label = r_langline($field_name.'_label',$lang_section);
            
            $this->load->model("clinic/bi_visit_type") ; 
                    $lookup_class= "bi_visit_type" ; 
                $lookup_filter="" ;     
                r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"medium span12 confirm_save ",$SubTip,0,0);
    
                    
                    
        
                

        
        echo '</div></div>' ;
        
            echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
            echo '<div class="span11 m-wrap">';
            
            $field_name = "visit_weight" ;
            
            $SubTip = "" ; 
            if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
            $Label = r_langline($field_name.'_label',$lang_section);
            r_theme_InputText($field_name,$input_values[$field_name],"Patient Weight :" , "small confirm_save",$SubTip ,$read_only);
            
            
            echo '</div></div>'; 
            
         
		//_____________________________________________________________________________________________
		if ( $item->ID()!=0)
        {
            
			echo '<div class="controls-row">'; 
			echo '<div class="span11 m-wrap">';
			
			$field_name = "visit_complain" ;
			 
			$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
			if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
			$Label = r_langline($field_name.'_label',$lang_section);
			  	
			r_theme_InputArea($field_name,$input_values[$field_name],$Label , " confirm_save",$SubTip ,0,"");
			
			echo '</div></div>';
            echo "<br>" ;  
			//_____________________________________________________________________________________________
			echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
			echo '<div class="span11 m-wrap">';
			
			$field_name = "visit_diagnosis" ;
			
			$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
			if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
			$Label = r_langline($field_name.'_label',$lang_section);
			r_theme_InputText($field_name,$input_values[$field_name],$Label , "large typeahead confirm_save",$SubTip ,0,0,1,site_url("clinic/visits/typeahead_data/visit_diagnosis"));
			
			echo '</div></div>'; 
    echo "<br>" ;  

			echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
			echo '<div class="span11 m-wrap">';
			
			$field_name = "visit_cost" ;
			
			$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
			if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
			$Label = r_langline($field_name.'_label',$lang_section);
			r_theme_InputText($field_name,$input_values[$field_name],"Cost :" , "small confirm_save",$SubTip ,$read_only);
            
			
			echo '</div></div>'; 

    echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
            echo '<div class="span11 m-wrap">';
            
            $field_name = "visit_discount" ;
            
            $SubTip = " ";
            if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
            $Label = r_langline($field_name.'_label',$lang_section);
            r_theme_InputText($field_name,$input_values[$field_name],"Discount :" , "small confirm_save ",$SubTip ,$read_only);
            
            
            echo '</div></div>'; 
                echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
	       echo '<div class="span12 m-wrap">';
            
            $field_name = "visit_remarks" ;
            
            $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
            if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
            $Label = r_langline($field_name.'_label',$lang_section);
            r_theme_InputText($field_name,$input_values[$field_name],"Visit Remarks : " , "large typeahead confirm_save ","",$read_only,0,1,site_url("clinic/visits/typeahead_data/visit_remarks"));
            
            echo '</div></div>'; 
                 
	        $field_name = "visit_patient_id" ;
	        r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small ",$SubTip ,0);
		}
    else
    {
    	//-------------REPORT VISITS-----------------
    //_____________________________________________________________________________________________
        echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
        echo '<div class="span11 m-wrap">';
        
        $field_name = "visit_patient_id" ;

        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
        
        r_theme_InputText("patient_name",$input_values["patient_name"],$Label , "meduim",$SubTip ,1);
        
//_________________________________________________________________________

		
        $field_name = "visit_patient_id" ;
        r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
    
        echo '</div></div>';
    } 
		//-----------------------------------------------------------------------
		
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
		
		if($input_values["visit_id"]!=0)			 
		{
		?> 
		<div class="table-toolbar pull-right">
		      <div class="btn-group">
		            <button class="show_saving hide btn blue"> Saving Information - <?php echo date("D M d, Y G:i:s"); ;  ?> </button>
		      </div>
		<div class="btn-group">
		    
		   
                                
			<button  
			type="submit" 
		
			class="btn green ajax_action right master_font save_confirmed"
			
			caller_verb="post_form"
			caller_id="<?php echo $this_concept ; ?>_edit_form"
			caller_url="<?php echo site_url($this_controller)."/ajax_edit/".$item->ID()  ; ?>"
			caller_target="edit_<?php echo $this_concept ; ?>_body"
			
			form_type="POST"				
			form_name="<?php echo $this_concept ; ?>_form" 	
				
			>
			
			Save Visit 
			
			</button>	
			
		
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
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>