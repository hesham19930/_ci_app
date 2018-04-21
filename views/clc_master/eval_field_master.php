	<?php

		
		// BEGIN PAGE SETTINGS 
		$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	if (!isset ( $this_lang_file)) $this_lang_file = "business/".$this_concept.'_main' ; 	
		$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
	 
	 	$this_title = "" ; // $this_item->business_data["JOURNAL_TYPE_NAME"] . " : " ; 
	 	if ($this_item->ID()==0) { $this_title = $this_title." NEW ";} else { $this_title = $this_title . $this_item->ID();} 
		$public_data["page_title_formatted"] ="" ; //'<i class="icon-file big"></i>'.$this_title ;
		 $this_title = "" ; 
		
		$public_data["page_title"] = "Evaluation Setup" ; 
		
		
		
		
		$public_data["page_subtitle"] =r_langline('page_subtitle',$this_concept.".master.");  
		$public_data["page_description"] = r_langline('page_description',$this_concept.".master.");		  
		$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
		
		$public_data["bread_crumbs"] = array(
											"settings"=>array("text"=>r_langline("settings",$this_concept.".bread_crumbs."),"url"=>site_url("account/dashboard/settings")),
											"country.list"=>array("text"=>r_langline($this_concept."s",$this_concept.".bread_crumbs."),"url"=>site_url($this_controller))) ; 
				 
		$this->load->view($public_data["template_folder"].'header',$public_data);
				
        //$this->load->view('page_title_view',$public_data);
		//print_r($this_item->business_data) ; 
		
        //redirect (site_url($this_controller.'/ajax_edit/'.$this_item->ID())) ;
		
		//  EDIT SECTION 
		// ---------------------------------------------- ----------------------------------------------  -------------------------------------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array(
									  'class'=>'autoload' ,
		'url'=>site_url($this_controller.'/ajax_edit/'.$this_item->ID()) )));	
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
	
		r_theme_row_end() ;	
		
							
		// ----------------------------------------------  DETAIL SECTION ------------------------------------------------------------------------------------------------------------		
		r_theme_row_start() ;
		//echo site_url($this_controller.'/ajax_list') ; 
		r_theme_section_start(12,array("id"=>"eval_field_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));									  
		//echo '<div align="center"><img align="center" src='.base_url("loading.gif").'>';
		//echo site_url($this_controller.'/ajax_list'); 
		//echo '</div>' ;  
		r_theme_section_end();
		r_theme_row_end() ;
		
		
		?>
		<div class="table-toolbar hide_with_menu " style="background-color: #f0f7f0;padding:1px;border: 1px #DDD solid;"  >
			<div class="btn-group pull-left">
				
				<button 
				
				class="btn red ajax_action  master_font"
				
				caller_verb="add_eval_field"
				caller_id="new_eval_field_button"
				caller_url= "<?php echo site_url('clinic/eval_fields/ajax_edit/0/'.$evaluation_form_id)  ; ?>" 
				caller_target="eval_field_edit_section"
								
			 	><i class="icon-minus"> </i>
				Add evaluation Detail Element 
				</button>
				
			</div>
			<div class="btn-group pull-left">&nbsp;</div>
			</div>
					
			<div><br/></div>
		<?php
		// ----------------------------------------------  DETAIL SECTION -LIST-----------------------------------------------------------------------------------------------------------		
	
		r_theme_row_start() ;
		
		if (!$this_item->ID()==0)
		{
		   	 	
		   	r_theme_section_start(12,array("id"=>"eval_field_list_section","attributes"=>array(
										  'class'=>'autoload' ,
										  'url'=>site_url("clinic/eval_fields/ajax_table/".$evaluation_form_id)) ) );	
		
			r_theme_section_end();	
		}
		
		r_theme_row_end() ;	
		
	
		// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		
		
	?>
	
    		
	<!-- -------------------------------------------------------------- MAIN FORM --> 
	<a class="r_automation" caller_key = "<?php echo $this_concept.'_edit_form' ;?>" automation_verb="post_form"
		automation_target = '<?php echo $this_concept."_edit_section" ;?>' 
		automation_action ="post_form"
		automation_url="[get_from_caller]"   
	></a>
		
	<!-- in case the transaction is new dont show details & respond to saving by reloding details --> 
		
	
		<!-- List Actions Automation ..................................................................... -->
	
		<a class="r_automation"  caller_key = "new_eval_field_button" automation_verb="add_eval_field"
			automation_action ="load_form_modal"
		
			automation_target = "eval_field_edit_section"			
			automation_url="<?php echo site_url('clinic/eval_fields/ajax_edit/0/'.$this_item->ID()) ; ?>"   
			
		></a>
		
	
		<a class="r_automation"  caller_key = "eval_field_s_table" automation_verb="open_document"
			automation_target = "eval_field_edit_section"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
		></a>
		
		
		<a class="r_automation" 	caller_key = "eval_field_table" automation_verb="add" 
			automation_target ="eval_field_edit_section"  
			automation_action ="load_form"
			automation_url="[get_from_caller]"   
		></a>
		
		<a class="r_automation" 	caller_key = "eval_field_table" automation_verb="edit" 
			automation_target ="eval_field_edit_section"  
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
		></a>		
	
		<a class="r_automation" caller_key = "eval_field_edit_form" automation_verb="post_form"
			automation_target ="[get_from_caller]"   
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
		></a>
		
		
		
		<a class="r_automation" caller_key = "eval_field_edit_form"  automation_verb="form_post_success"		
			automation_target ="eval_field_edit_section"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
		
		
		<a class="r_automation"  caller_key = "eval_field_edit_form"  automation_verb="form_post_success"
			automation_target = "eval_field_list_section" 
			automation_action ="reload"
			automation_url=""   
		></a>		
		
		
		
		<a class="r_automation" caller_key = "eval_field_edit_form"  automation_verb="form_cancel"
			automation_target ="eval_field_edit_section"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
	
		
		
		<!-- Delete department Descriptor Handler---------------------------->
		<a class="r_automation"  caller_key = "eval_field_table"  automation_verb="delete"
			automation_target ="delete_message_box"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
		></a>
		
		<a class="r_automation" caller_key = "eval_field_edit_form"  automation_verb="form_cancel"
			automation_target ="delete_message_box"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
			
		<a class="r_automation" caller_key = "eval_field_delete_form" automation_verb="post_form"
			automation_target ="[get_from_caller]"   
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
		></a>
		
		<a class="r_automation" caller_key = "eval_field_delete_form" automation_verb="form_post_success"
			automation_target = "eval_field_list_section" 
			automation_action ="reload"
			automation_url=""   
		></a>	
		
		<a class="r_automation" caller_key = "eval_field_edit_form"  automation_verb="form_cancel"
			automation_target ="delete_message_box"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
		
		

		 <!-- FORCE SAVING OF MAIN ON DETAIL SAVING 
		<a class="r_automation" caller_key = "cash_payment_detail_edit_form"  automation_verb="form_post_success"		
			automation_target ="trans_save_button"
			automation_action ="trigger_action"
			automation_url=""   
		 ></a>
		
		<a class="r_automation" caller_key = "cash_payment_detail_delete_form"  automation_verb="form_post_success"		
			automation_target ="trans_save_button"
			automation_action ="trigger_action"
			automation_url=""   
		></a> --> 
		
		
		<?php
		 // ----------------------------------------------  FOOTER -------------------------------------------------------------		
	   $this->load->view($public_data["template_folder"].'footer',$public_data);	
	 ?>