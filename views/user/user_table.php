<?php


	?>
		
		<div class="table-toolbar">
			<div class="btn-group">
				<button 
				id="sample_editable_1_new" class="btn green ajaxithis" 

				show="edit_user_box"
				target="edit_user_body" 
				url = "<?php echo site_url("account/users/ajax_edit/109") ; ?>"
					
		
				form_type="GET" 
				submit_form = "NO"
				xform_name = "name" 
			 	success_goto = "" 
			 	fail_goto = "" 
			 	>
				Add New <i class="icon-plus"></i>
				</button>
			</div>
			<div class="btn-group pull-right">
				<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
				</button>
				<ul class="dropdown-menu pull-right">
					<li><a href="#">Print</a></li>
					<li><a href="#">Save as PDF</a></li>
					<li><a href="#">Export to Excel</a></li>
				</ul>
			</div>
		</div>

	<?php
	
		$line_verb_text = array() ;
		$line_verb_attibutes = array(); 
		
		$line_verb_caption["add"]="ADD" ;
		$line_verb_attibutes["add"] = Array(
				"id=">"sample_editable_1_new" ,
				"class"=>"ajaxithis", 
				"show"=>"edit_user_box",
				"target"=>"edit_user_body" ,
				"url" => site_url("account/users/ajax_edit"),
				"form_type"=>"GET", 
				"submit_form"=> "NO",
				"xform_name" => "name", 
			 	"success_goto" => "", 
			 	"fail_goto"=>""
		) ; 
		
		$line_verb_caption["edit"]="Edit" ;
		$line_verb_attibutes["edit"] = Array(
				"id=">"sample_editable_1_new" ,
				"class"=>"ajaxithis", 
				"show"=>"edit_user_box",
				"target"=>"edit_user_body" ,
				"url" => site_url("account/users/ajax_edit/vvv_ID_vvv"),
				"form_type"=>"GET", 
				"submit_form"=> "NO",
				"xform_name" => "name", 
			 	"success_goto" => "", 
			 	"fail_goto"=>""
		) ; 
		
		$line_verbs = array ("add"=>array(
										"caption"=>"Add New" ,
										"attributes"=>$line_verb_attibutes["add"] , 
										"icon" => "icon-plus",
										"id_column"=>"user_id"),
							 "edit"	=>array(
										"caption"=>"Edit This" ,
										"attributes"=>$line_verb_attibutes["edit"] , 
										"icon" => "icon-pencil",
										"id_column"=>"user_id"),
							"delete"	=>array(
										"caption"=>"Delete This" ,
										"attributes"=>$line_verb_attibutes["edit"] , 
										"icon" => "icon-trash",
										"id_column"=>"user_id")
							);
		
				
		r_theme_draw_table($list_table,$i_options=array("class"=>"autodatatable","show_verbs"=>true),$table_id="datatable_of_users",$line_verbs);
	
/* end of file 