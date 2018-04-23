
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

<!--  LOAD ADD FORM FOR NEW LOG BUTTON   -->


<a class="r_automation"
caller_key = "log_table"
automation_verb = "add"
automation_target= "log_edit_section"
automation_action = "load_form_modal"
automation_url = "<?php   echo site_url("todoyu/logs/ajax_edit/0/".$task_id);?>"
></a>


<!--   SAVE NEW TASK HANDLER   -->

<a class="r_automation"
caller_key = "log_edit_form"
automation_verb = "post_form"
automation_target= "[get_from_caller]"
automation_action = "post_form"
automation_url = "[get_from_caller]"
></a>


<!--   Clear After save HANDLER   -->

<a class="r_automation"
caller_key = "log_edit_form"
automation_verb = "post_form"
automation_target= "log_edit_section"
automation_action = "clear_modal"
automation_url = "[get_from_caller]"
></a>

<!--   Refresh List After save HANDLER   -->
<!--   Refresh NEW HANDLER   -->
<a class="r_automation"
caller_key = "log_edit_form"
automation_verb = "form_post_success"
automation_target= "log_list_section"
automation_action = "reload"
automation_url = ""
></a>





<!--   Cancel add new Button HANDLER   -->

<a class="r_automation"
caller_key = "log_edit_form"
automation_verb = "form_cancel"
automation_target= "log_edit_section"
automation_action = "clear_modal"
automation_url = "[get_from_caller]"
></a>
<!--   Edit Icon HANDLER   -->

<a class="r_automation"
caller_key = "log_table"
automation_verb = "edit"
automation_target= "log_edit_section"
automation_action = "load_form_modal"
automation_url = "[get_from_caller]"
></a>


<!--   Delete Icon HANDLER   -->

<a class="r_automation"
caller_key = "log_table"
automation_verb = "delete"
automation_target= "log_delete_section"
automation_action = "load_form_modal"
automation_url = "[get_from_caller]"
></a>

<!--   Confirm Delete HANDLER   -->

<a class="r_automation"
caller_key = "log_delete_form"
automation_verb = "post_form"
automation_target= "[get_from_caller]"
automation_action = "post_form"
automation_url = "[get_from_caller]"
></a>


<!--   Clear After Delete HANDLER   -->

<a class="r_automation"
caller_key = "log_delete_form"
automation_verb = "form_post_success"
automation_target= "log_delete_section"
automation_action = "clear_modal"
automation_url = ""
></a>

<!--   Refresh List After Delete HANDLER   -->
<!--   Refresh Delete NEW HANDLER   -->
<a class="r_automation"
caller_key = "log_delete_form"
automation_verb = "form_post_success"
automation_target= "log_list_section"
automation_action = "reload"
automation_url = ""
></a>





<!--   Cancel delete Button HANDLER   -->

<a class="r_automation"
caller_key = "log_edit_form"
automation_verb = "form_cancel"
automation_target= "log_delete_section"
automation_action = "clear_modal"
automation_url = "[get_from_caller]"
></a>






<?php

// ---------------------------------------------- MAIN FORM EDIT SECTION -------------------------------------------------------				  

r_theme_row_start();
r_theme_section_start(12, array("id" => "hesham", "attributes" => array(
        'class' => 'autoload',
        'url' => site_url('todoyu/tasks/ajax_edit/').'/'.$task_id.'/mode/readonly')));
echo '<div align="center">123</div>';
r_theme_section_end();
r_theme_row_end();



// ---------------------------------------------- Details SECTION -------------------------------------------------------


// ---------------------------------------------- TASKS LISTS New SECTION -------------------------------------------------------				  


r_theme_row_start();

r_theme_section_start(12, array("id" => "log_list_section", "attributes" => array(
        'class' => 'autoload ',
        'url' => site_url('todoyu/logs/ajax_table/').'/'.$task_id)));
echo '<div align="center">123</div>';
r_theme_section_end();
r_theme_row_end();

// ---------------------------------------------- TASKS LISTS inprogress SECTION -------------------------------------------------------				  

// ---------------------------------------------- TASKS LISTS done SECTION -------------------------------------------------------				  

// ---------------------------------------------- TASKS EDIT SECTION -------------------------------------------------------				  
r_theme_section_start(4, array("id" => "log_edit_section", "attributes" => array(
        'class' => 'modal trasparent container hide',
        
        )));
echo '<div align="center">123</div>';
r_theme_section_end();
// ---------------------------------------------- ADD LOG SECTION -------------------------------------------------------				  
// ---------------------------------------------- TASKS Delete SECTION -------------------------------------------------------				  
r_theme_section_start(4, array("id" => "log_delete_section", "attributes" => array(
        'class' => 'modal trasparent container hide'
        )));
echo '<div align="center">123</div>';
r_theme_section_end();


			  


// ---------------------------------------------- TASKS LIST Done SECTION -------------------------------------------------------				  


r_theme_row_end();

 $public_data["include_sird_edit_form_script"] = true ; 
 echo loadView($public_data["template_folder"].'footer',$public_data); 

// -----------------------------------------------------------------------------------------------------------------------------
?>

