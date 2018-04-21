			
<?php

	// need the lang_file_name 
	// need add button caption & add button link 
	
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]); 
	$this->lang->load($lang_file_name, $this->admin_public->DATA["system_lang"]);
	
	$line_verb_attibutes = array(); 
	$line_verbs = array () ; 	
	$page_rows = 20 ; 
		
	if (($table_purpose== "")||($table_purpose== "general"))
	{
	?>
	
		<div class="table-toolbar">
			<div class="btn-group pull-left">
				<button class="btn dropdown-toggle blue master_font " data-toggle="dropdown"><?php echo r_langline("general.button_tools") ; ?><i class="icon-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-left master_font">
					<li><a href="#"
						class="ajax_action" 
						caller_url= "<?php echo $add_button_link ; ?>"
						caller_id="<?php echo $table_caller_id; ?>" 
						caller_verb="<?php echo $add_button_verb; ?>"
						><i class="icon-plus"></i><?php echo r_langline($add_button_caption) ; ?> &nbsp;</a></li>
				</ul>
			</div>
			
			<div class="btn-group pull-right">
				<button 
				
				id="sample_editable_1_new"  
				class="btn green ajax_action master_font" 
				caller_url= "<?php echo $add_button_link ; ?>"
				caller_id="<?php echo $table_caller_id; ?>" 
				caller_verb="<?php echo $add_button_verb; ?>"
								
			 	>
				<?php echo r_langline($add_button_caption) ; ?>  <i class="icon-plus"></i>
				</button>
			</div>
			
			
		<div class="clearfix"></div></div>	
	
		<?php
	
		foreach ($row_buttons as $key => $button) {
			
			$line_verb_attibutes[$key] = Array(
				"class"=>"ajax_action master_font", 
				"caller_url" => $button["link"],
				"caller_id"=>$table_caller_id,
				"caller_verb"=>$button["verb"]);
				
				
			$line_verbs[$key] = array(
									"caption"=>r_langline($button["caption"]),
									"attributes"=>$line_verb_attibutes[$key] , 
									"icon" => $button["icon"],
									"id_column"=>$table_id_column); 
				 
			}

		}
	
	if ($table_purpose== "selector")
	{
				$line_verb_attibutes["select"] = Array(
							
				"caller_id"=>"expenses_table", 
				"selected_id"=>"vvv_ID_vvv" , 
				"selected_name"=>"vvv_NAME_vvv", 
				"caller_verb"=>"select"); 
		
				$page_rows = 5 ;		
				$line_verbs = array ("select"=>array(
										"caption"=>"" ,
										"attributes"=>$line_verb_attibutes["select"] , 
										"icon" => "icon-ok",
										"id_column"=>"expense_id",
										"name_column"=>r_langcase("expense_name","expense_name_ar")));
		}
		
						
	r_theme_draw_table($list_table,$i_options=array("page_rows"=>$page_rows,"class"=>"autodatatable","show_verbs"=>true),$table_id="datatable_of_expenses",$line_verbs);
	
	
		//echo "post_table_but_in_view" ; 
/* end of file 