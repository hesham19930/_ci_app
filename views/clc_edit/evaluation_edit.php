<?php

	$this_concept = "evaluation" ; 
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
		
		if ($disable_edit) $read_only = 1 ; 
			r_theme_box_start
			('',12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box","back_color"=>"blue" , 
						"tools"=>"")
			);	
		}
		
		
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  
		
		
		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0)
		{
				$field_name = "evaluation_id" ;
				
				$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
				if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
				$Label = r_langline($field_name.'_label',$lang_section);
				r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
		
		//  // _____________________________________________________________________________________________________		
		
	// echo "<pre>";print_r($fields_collection) ; echo "</pre>" ; 
       
              $field_name = "evaluation_patient_id" ;
                
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
        r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
      
        echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
        echo '<div class="span6 m-wrap">';
        $field_name = "patient_name" ;
        
                $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                $Label = r_langline($field_name.'_label',$lang_section);
                
                  r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,1,0);
                
                echo '</div></div>';    
                  
		//_____________________________________________________________________________________________
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span6 m-wrap">';
		$field_name = "evaluation_eval_form_id" ;
		
				$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
				if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
				$Label = r_langline($field_name.'_label',$lang_section);
				
				$lookup_class= "bi_evaluation_form" ; 
				$lookup_filter="" ; 	
				r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"meduim",$SubTip,1,0);
				r_theme_Inputhidden($field_name , $input_values[$field_name ]) ; 
                
				echo '</div></div>';	

				echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
				echo '<div class="span6 m-wrap" >';
				$field_name = "evaluation_company_id" ;
				
				$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
				if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
				$Label = r_langline($field_name.'_label',$lang_section);
				
				$lookup_class= "bi_company" ; 
				$lookup_filter="" ; 	
				r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"meduim",$SubTip,0,0);
						
				echo '</div></div>';
              
				echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
			     echo '<div class="span11 m-wrap" >';
				$field_name = "evaluation_person" ;
				
					$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
					if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
					$Label = r_langline($field_name.'_label',$lang_section);
			      r_theme_InputText($field_name,$input_values[$field_name],$Label , "meduim",$SubTip ,0);
						
                echo '</div></div>';

		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span11 m-wrap">';
		
		$field_name = "evaluation_conclusion" ;
		
	   $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
	   if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
	   $Label = r_langline($field_name.'_label',$lang_section);
			 
	   r_theme_InputArea($field_name,$input_values[$field_name],$Label , "",$SubTip ,0,"");

		
		echo '</div></div>'; 
		//_____________________________________________________________________________________________
		
		//_____________________________________________________________________________________________
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span11 m-wrap">';
		
		$field_name = "evaluation_date" ;	//date
				 
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
				  	
		r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only,"date-picker");	
		
		echo '</div></div>'; 

		//_____________________________________________________________________________________________
		
		  r_theme_box_start
            ('',12,
                array("body_id"=>"xx",
                        "box_id"=>"yyy","back_color"=>"yellow" , 
                        "tools"=>"")
            );  
            
			 foreach ($fields_collection  as $key => $servicedetail) {
                    
                
                echo '<div class="controls-row">'; 
                echo '<div class="span11 m-wrap">';
    
                    
                $field_value_number = $servicedetail["evdata_value_number"] ; 
                $field_value_date = $servicedetail["evdata_value_date"] ;
                $field_value_string = $servicedetail["evdata_value_string"] ; 
                
                $readonly = 0 ; 
                
                
                $field_name = $servicedetail["eval_field_name"] ;
                $Label = $servicedetail["eval_field_text"] ;
                $SubTip = "" ; 
                if (form_error($field_name)!=""){   $SubTip = r_theme_input_error("Field is Required"); }
            
                $fieldtype = $servicedetail["eval_field_type_id"] ; 
                
                
                
                
                          
                    switch ($fieldtype) 
                        {
                        
                        case 1: ; //text 
                        
                            $field_value = trim($field_value_string) ; 
                            r_theme_InputText($field_name,$field_value,$Label , "large",$SubTip ,0);
                            
                            break ;
                       case 2: ; // date 
                            $field_value = trim($field_value_date) ; // we need to remove time 
                            $dt = new DateTime($field_value);
                            $field_value= $dt->format('Y-m-d');
                            r_theme_InputText($field_name,$field_value,$Label , "xcalcx small date-picker",$SubTip ,0,"");
                            break ;
                        
                        case 3: ; // interger 
                                $field_value = intval($field_value_number) ;
                               r_theme_InputText($field_name,$field_value,$Label , " small",$SubTip ,$readonly);
                                 break ;
                        case 4: ;  // decimal 
                            $field_value = trim($field_value_number) ;
                               r_theme_InputText($field_name,$field_value,$Label , "xcalcx small",$SubTip ,$readonly);
                            break ; 
                        case 5: ; // lookup select ( class )  
                            $field_value = trim($field_value_number) ;
                            $lookup_class= $servicedetail["efld_lookup_class_name"] ; 
                            $lookup_filter="" ; 
                             r_theme_InputSelect($field_name , $field_value, $Label,r_listbox_items($lookup_class,$lookup_filter),"3",$SubTip,$read_only,0);
                               break ; 
                     case 6: ; // time treaded as string 
                              $field_value = trim($field_value_string) ; 
                               r_theme_inputtext($field_name,$field_value,$Label , "",$SubTip ,0,"");
                            
                            break ; 
                      case 7: ;  // multiline 
                            $field_value = trim($field_value_string) ;
                            r_theme_InputArea($field_name,$field_value,$Label , "",$SubTip ,0);
                            
                            break ;     
                        case 8: ; // lookup from class 
                            $field_value = trim($field_value_number) ;
                            $lookup_class= $servicedetail["efld_lookup_class_name"] ; 
                            $lookup_filter="" ; 
                             r_theme_InputSelect($field_name , $field_value, $Label,r_listbox_items($lookup_class,$lookup_filter),"3",$SubTip,$read_only,0);
                             break ;     
                        case 9:;  // datetime ,, treated as string 
                             $field_value = trim($field_value_string) ; 
                               r_theme_inputtext($field_name,$field_value,$Label , "",$SubTip ,0,"");
                            break ;     
                        case 10:;  // defined options select box 
                             $options =   $servicedetail["efld_options"] ;
                             $pieces = explode(",", $options);
                             foreach ($pieces as  $value) {
                                 $options_array[trim($value)] = trim($value) ; 
                             }
                             $field_value = trim($field_value_string) ; ; 
                              r_theme_InputSelect($field_name , $field_value, $Label,$options_array,"3",$SubTip,$read_only,0);
                            
                            break ;     
                                 
                  
                        }
                     
                  
                
                echo '</div>';
                echo '</div>'    ; 
                    
                
            
          }
        	
		//__________________________________________________________________________________________________________
	
		//__________________________________________________________________________________________________________
	 // START RIGHT HALF ---------------------------------------------
			
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
		
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
		
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>