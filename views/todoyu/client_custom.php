<?php
//---------------------------------------------------------------------------------------
// 																			Requirements 
// $this_concept  = "client";
// $this_controller = "todoyu/" . $this_concept . "s";
 $this_report_title  = "clients";
// $this_lang_file = "todoyu/client_reading_main_lang";
// $this_lang_file : more optional 
// $edit_type : optional 		
//---------------------------------------------------------------------------------------
// BEGIN PAGE SETTINGS
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  


if (isset($this_lang_file)) {

    $this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
}

$public_data["page_title_formatted"] = '<span class="hide_with_menu" ><i class="icon-tags big"></i>' . r_langline($this_report_title) . "</span>";

$public_data["page_title"] = $this_report_title;
//$public_data["page_subtitle"] =r_langline('page_subtitle',"sales_report.master.");  
$public_data["page_description"] = r_langline('page_description', "sales_report.master.");
$public_data["page_scripts"] = array("bootstrap", "chart");  //


$public_data["bread_crumbs"] = array(
    "country.list" => array("text" => r_langline("find_trans", "find_trans" . ".bread_crumbs."), "url" => site_url($this_controller)));



if (!isset($tool_box_view)) {
    $tool_box_view = "general_tool_box";
}

if (isset($show_toolbox)) {

    $public_data["tool_box_vars"] = array();
    $public_data["show_toolbox"] = $show_toolbox;
}

$this->load->view($public_data["template_folder"] . 'header', $public_data);

$this->load->view('page_title_view', $public_data);
?>

<!-- -------------------------------------------------------------- SEARCH FORM --> 
<a class="r_automation" caller_key = "search_form" automation_verb="post_form"

   automation_target = "@differ"

   automation_form_fail_target="find_form_section" 
   automation_form_success_target="_list_section"

   automation_action ="post_form"
   automation_url="[get_from_caller]"   
   ></a>

<a class="r_automation" caller_key = "find_trans_table" automation_verb="open_document"
   automation_url="[get_from_caller]"   
   automation_target = "_blank"
   automation_action ="just_go_to_page"
   ></a>

<a class="r_automation"  caller_key = "<?php echo $this_concept . '_table'; ?>" automation_verb="open_document"
   automation_url="[get_from_caller]"   
   automation_target = "_blank"
   automation_action ="just_go_to_page"
   ></a>

<?php
// ---------------------------------------------- MAIN FORM EDIT SECTION ------------------------------------------------------- 
r_theme_row_start();
r_theme_section_start(12, array("id" => "find_form_section", "attributes" => array(
        'class' => 'autoload',
        'url' => site_url($this_controller . '/find_form') . '/')));
echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
r_theme_section_end();
r_theme_row_end();
// ----------------------------------------------  Client Edit SECTION ------------------------------------------------------			

r_theme_row_start();
r_theme_section_start(12, array("id" => "client_edit_section", "attributes" => array('class' => 'modal trasparent container hide')));
r_theme_section_end();
r_theme_row_end();
// ----------------------------------------------  DETAILS LIST SECTION ------------------------------------------------------			

r_theme_row_start();
r_theme_section_start(12, array("id" => "_list_section", "attributes" => array()));
r_theme_section_end();
r_theme_row_end();

// ----------------------------------------------  DETAILS EDIT SECTION ------------------------------------------------------
if (!isset($edit_type)) {
    r_theme_row_start();
    r_theme_section_start(12, array("id" => "_edit_section", "attributes" => array('class' => 'modal transparent container hide')));
    //	echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
    r_theme_section_end();
    r_theme_row_end();
}
// ----------------------------------------------  DETAILS EDIT SECTION 2------------------------------------------------------

if (isset($edit_type)) {
    r_theme_row_start();
    switch ($edit_type) {
        case 'modal':
            r_theme_section_start(12, array("id" => "_edit_section", "attributes" => array('class' => 'modal transparent container hide')));
            //	echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 				
            break;
        case 'inline':
            r_theme_section_start(12, array("id" => "_edit_section", "attributes" => array('class' => 'transparent container hide')));
            //	echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 
            break;
        case 'new_window':
            r_theme_section_start(12, array("id" => "_edit_section", "attributes" => array('class' => 'transparent container hide')));
            //	echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 
            break;
        default:
            r_theme_section_start(12, array("id" => "client_edit_section", "attributes" => array('class' => 'modal transparent container hide')));
            //echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;
            break;
    }
    r_theme_section_end();
    r_theme_row_end();
}
?>
<!-- List Actions Automation ..................................................................... -->
<a class="r_automation"  caller_key = "<?php echo $this_concept . '_table'; ?>" automation_verb="add"
   automation_target = "<?php echo $this_concept . '_edit_section'; ?>"
   automation_action ="load_form_modal"
   automation_url="[get_from_caller]"   
   ></a>

<a class="r_automation" 	caller_key = "<?php echo $this_concept . '_table'; ?>" automation_verb="edit" 
   automation_target = "<?php echo $this_concept . '_edit_section'; ?>"
   automation_action ="load_form_modal"
   automation_url="[get_from_caller]"   
   ></a>


<a class="r_automation" caller_key = "<?php echo $this_concept . '_edit_form'; ?>" automation_verb="post_form"
   automation_target = "[get_from_caller]"
   automation_action ="post_form"
   automation_url="[get_from_caller]"   
   ></a>

<a class="r_automation"  caller_key = "<?php echo $this_concept . '_edit_form'; ?>" automation_verb="form_post_success"
   automation_target = "<?php echo $this_concept . '_list_section'; ?>" 
   automation_action ="reload"
   automation_url=""   
   ></a>

<a class="r_automation" caller_key = "<?php echo $this_concept . '_edit_form'; ?>" automation_verb="form_post_success"		
   automation_target = "<?php echo $this_concept . '_edit_section'; ?>"
   automation_action ="clear_modal"
   automation_url=""   
   ></a>

<a class="r_automation" caller_key = "<?php echo $this_concept . '_edit_form'; ?>" automation_verb="form_cancel"

   event_caller_type="edit_form" 	
   automation_target = "<?php echo '_edit_section'; ?>"
   automation_action ="clear_modal"
   automation_url=""   
   ></a>

<!--- DELETE ---------------------------------------------------------------------------------->
<a class="r_automation"  caller_key = "<?php echo $this_concept . '_table'; ?>"  automation_verb="delete"
   automation_target = "<?php echo '_edit_section'; ?>"
   automation_action ="load_form_modal"
   automation_url="[get_from_caller]"   

   ></a>	
<a class="r_automation" caller_key = "<?php echo $this_concept . '_delete_form'; ?>" automation_verb="post_form"
   automation_target = "<?php echo '_edit_section'; ?>"
   automation_action ="post_form"
   automation_url="[get_from_caller]"   
   ></a>

<a NOTRIGHTclass="r_automation" caller_key = "<?php echo $this_concept . '_delete_form'; ?>" automation_verb="form_post_success"
   automation_target = "<?php echo $this_concept . '_list_section'; ?>" 
   automation_action ="reload"
   automation_url=""   
   ></a>

<a class="r_automation" caller_key = "<?php echo $this_concept . '_delete_form'; ?>" automation_verb="form_post_success"
   automation_target = "<?php echo '_edit_section'; ?>"
   automation_action ="clearx_modal"
   automation_url=""   
   ></a>

<?php
// ----------------------------------------------  FOOTER -------------------------------------------------------------		

$this->load->view($public_data["template_folder"] . 'footer', $public_data);
?> 