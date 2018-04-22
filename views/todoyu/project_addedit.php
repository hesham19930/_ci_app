
<?php
// ---------------------------------------------- HEADER SECTION ------------------------------------------------------- 

$this_lang_folder = "todoyu";
$box_color = "green";

// BEGIN PAGE SETTINGS
$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
$this->lang->load($this_lang_folder . '/' . "project" . '_main', $this->admin_public->DATA["system_lang"]);

$public_data["page_title_formatted"] = '<i class="icon-tags big"></i>' . r_langline('page_title', $this_concept . ".master.");
$public_data["page_title"] = r_langline('page_title', $this_concept . ".master.");
$public_data["page_subtitle"] = r_langline('page_subtitle', $this_concept . ".master.");
$public_data["page_description"] = r_langline('page_description', $this_concept . ".master.");
$public_data["page_scripts"] = array("bootstrap", "chart");  //

$public_data["bread_crumbs"] = array();

echo loadView($public_data["template_folder"] . 'header', $public_data);
echo loadView("page_title_view", $public_data);
/***********************************************************************************/
// AUTOMATIONSSSS 
/***********************************************************************************/
?>

<!--  LOAD ADD FORM FOR NEW TASK BUTTON   -->

<a class="r_automation"
caller_key = "add_new_task_button"
automation_verb = "add_new_task"
automation_target= "task_edit_section"
automation_action = "load_form_modal"
automation_url = "[get_from_caller]">
</a>



<!--   SAVE NEW TASK HANDLER   -->

<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "post_form"
automation_target= "[get_from_caller]"
automation_action = "post_form"
automation_url = "[get_from_caller]"
></a>


<!--   Clear After save HANDLER   -->

<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "post_form"
automation_target= "task_edit_section"
automation_action = "clear_modal"
automation_url = "[get_from_caller]"
></a>

<!--   Refresh List After save HANDLER   -->
<!--   Refresh NEW HANDLER   -->
<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "form_post_success"
automation_target= "new_task_list_section"
automation_action = "reload"
automation_url = ""
></a>

<!--   Refresh INPROGRESS HANDLER   -->
<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "form_post_success"
automation_target= "inprogress_task_list_section"
automation_action = "reload"
automation_url = ""
></a>

<!--   Refresh DONE HANDLER   -->
<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "form_post_success"
automation_target= "done_task_list_section"
automation_action = "reload"
automation_url = ""
></a>


<!--   Cancel add new Button HANDLER   -->

<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "form_cancel"
automation_target= "task_edit_section"
automation_action = "clear_modal"
automation_url = "[get_from_caller]"
></a>
<!--   Edit Icon HANDLER   -->

<a class="r_automation"
caller_key = "task_table"
automation_verb = "edit"
automation_target= "task_edit_section"
automation_action = "load_form_modal"
automation_url = "[get_from_caller]"
></a>


<!--   Delete Icon HANDLER   -->

<a class="r_automation"
caller_key = "task_table"
automation_verb = "delete"
automation_target= "task_delete_section"
automation_action = "load_form_modal"
automation_url = "[get_from_caller]"
></a>

<!--   Confirm Delete HANDLER   -->

<a class="r_automation"
caller_key = "task_delete_form"
automation_verb = "post_form"
automation_target= "[get_from_caller]"
automation_action = "post_form"
automation_url = "[get_from_caller]"
></a>


<!--   Clear After Delete HANDLER   -->

<a class="r_automation"
caller_key = "task_delete_form"
automation_verb = "form_post_success"
automation_target= "task_delete_section"
automation_action = "clear_modal"
automation_url = ""
></a>

<!--   Refresh List After Delete HANDLER   -->
<!--   Refresh Delete NEW HANDLER   -->
<a class="r_automation"
caller_key = "task_delete_form"
automation_verb = "form_post_success"
automation_target= "new_task_list_section"
automation_action = "reload"
automation_url = ""
></a>

<!--   Refresh Delete INPROGRESS HANDLER   -->
<a class="r_automation"
caller_key = "task_delete_form"
automation_verb = "form_post_success"
automation_target= "inprogress_task_list_section"
automation_action = "reload"
automation_url = ""
></a>


<!--   Refresh Delete DONE HANDLER   -->
<a class="r_automation"
caller_key = "task_delete_form"
automation_verb = "form_post_success"
automation_target= "done_task_list_section"
automation_action = "reload"
automation_url = ""
></a>
<!--   Cancel delete Button HANDLER   -->

<a class="r_automation"
caller_key = "task_edit_form"
automation_verb = "form_cancel"
automation_target= "task_delete_section"
automation_action = "clear_modal"
automation_url = "[get_from_caller]"
></a>




<!--   Add LOG Icon HANDLER   -->

<a class="r_automation"
caller_key = "add_new_log_button"
automation_verb = "add_new_log"
automation_target= "log_edit_section"
automation_action = "load_form_modal"
automation_url = "[get_from_caller]">
</a>

<?php

// ---------------------------------------------- MAIN FORM EDIT SECTION -------------------------------------------------------				  

r_theme_row_start();
r_theme_section_start(12, array("id" => "hesham", "attributes" => array(
        'class' => 'autoload',
        'url' => site_url('todoyu/projects/ajax_edit/').'/'.$project_id.'/'.'main_view')));
echo '<div align="center">123</div>';
r_theme_section_end();
r_theme_row_end();


// ---------------------------------------------- Details SECTION -------------------------------------------------------
// // ---------------------------------------------- ADD NEW TASK BUTTON -------------------------------------------------------	//
r_theme_row_start();
?>
<div class="table-toolbar pull-left">
    <div class="btn-group">
        <button  
            class="btn blue ajax_action pull-right master_font"

            caller_verb="add_new_task"
            caller_id="add_new_task_button"
            caller_url="<?php   echo site_url("todoyu/tasks/ajax_edit/0/".$project_id);?>"
            >			
            Add New Task		
        </button>	
    </div>
</div>

<?php 
r_theme_row_end();


// ---------------------------------------------- TASKS LISTS New SECTION -------------------------------------------------------				  
echo '<h2>New Tasks</h2>';
r_theme_row_start();

r_theme_section_start(12, array("id" => "new_task_list_section", "attributes" => array(
        'class' => 'autoload ',
        'url' => site_url('todoyu/tasks/ajax_table/').'/'.$project_id.'/'.'new')));
echo '<div align="center">123</div>';
r_theme_section_end();
r_theme_row_end();

// ---------------------------------------------- TASKS LISTS inprogress SECTION -------------------------------------------------------				  
echo '<h2>Inprogress Tasks</h2>';
r_theme_row_start();

r_theme_section_start(12, array("id" => "inprogress_task_list_section", "attributes" => array(
        'class' => 'autoload ',
        'url' => site_url('todoyu/tasks/ajax_table/').'/'.$project_id.'/'.'inprogress')));
echo '<div align="center">123</div>';
r_theme_section_end();
r_theme_row_end();

// ---------------------------------------------- TASKS LISTS done SECTION -------------------------------------------------------				  
echo '<h2>Done Tasks</h2>';
r_theme_row_start();

r_theme_section_start(12, array("id" => "done_task_list_section", "attributes" => array(
        'class' => 'autoload ',
        'url' => site_url('todoyu/tasks/ajax_table/').'/'.$project_id.'/'.'done')));
echo '<div align="center">123</div>';
r_theme_section_end();
r_theme_row_end();
// ---------------------------------------------- TASKS EDIT SECTION -------------------------------------------------------				  
r_theme_section_start(4, array("id" => "task_edit_section", "attributes" => array(
        'class' => 'modal trasparent container hide',
        
        )));
echo '<div align="center">123</div>';
r_theme_section_end();
// ---------------------------------------------- ADD LOG SECTION -------------------------------------------------------				  
r_theme_row_start();
?>
<div class="table-toolbar pull-left">
    <div class="btn-group">
        <button  
            class="btn blue ajax_action pull-right master_font"

            caller_verb="add_new_log"
            caller_id="add_new_log_button"
            caller_url="<?php   echo site_url("todoyu/logs/ajax_edit/0/".'13');?>"
            >			
            Add New Log		
        </button>	
    </div>
</div>

<?php 
r_theme_row_end();
// ---------------------------------------------- TASKS Delete SECTION -------------------------------------------------------				  
r_theme_section_start(4, array("id" => "task_delete_section", "attributes" => array(
        'class' => 'modal trasparent container hide'
        )));
echo '<div align="center">123</div>';
r_theme_section_end();


// ---------------------------------------------- Log edit SECTION -------------------------------------------------------				  
r_theme_section_start(4, array("id" => "log_edit_section", "attributes" => array(
        'class' => 'modal trasparent container hide',
        
        )));
echo '<div align="center">123</div>';
r_theme_section_end();

// ---------------------------------------------- TASKS LIST Done SECTION -------------------------------------------------------				  


r_theme_row_end();

 $public_data["include_sird_edit_form_script"] = true ; 
 echo loadView($public_data["template_folder"].'footer',$public_data); 

// -----------------------------------------------------------------------------------------------------------------------------
?>

