<?php
$this_concept = "task";
$this_controller = "todoyu/" . $this_concept . "s";

// BEGIN PAGE SETTINGS
$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);

$this->lang->load('todoyu/' . $this_concept . '_main', $this->admin_public->DATA["system_lang"]);
//$read_only = 0;
if($mode === 'readonly'){
   $read_only = 1; 
}else {
$read_only = 0;
}
// take the value from the previous form submit
$item = $this_item;
$input_values = array(); // this is our array 

if (set_value("is_an_action") == "yes") {
    //echo "ACTION=yes" ;
    foreach ($item->business_data as $key => $value) {
        $input_values[$key] = set_value($key);
    }
} else {
    foreach ($item->business_data as $key => $value) {
        $input_values[$key] = $value;
    }
   
    if ($disable_edit)
        $read_only = 1;
    r_theme_box_start
            (r_langline('edit_title', $this_concept . ".form_data."), 12, array("body_id" => "edit_" . $this_concept . "_body",
        "box_id" => "edit_" . $this_concept . "_box",
        "tools" => "")
    );
}


r_theme_startform($this_concept . "_form", $this_concept . "_form", "", "post"); //echo form_open('form');
$lang_section = $this_concept . ".form_data.";


// ID FIELD  // _____________________________________________________________________________________________________		
if ($item->ID() != 0) {
    $field_name = "task_id";

    $SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
    if (form_error($field_name) != "") {
        $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
    }
    $Label = r_langline($field_name . '_label', $lang_section);
    r_theme_Inputhidden($field_name, $input_values[$field_name], $Label, "small", $SubTip, 0);
}

//  // _____________________________________________________________________________________________________


echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';
$field_name = "task_name";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_InputText($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
echo '</div></div>';


echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';
$field_name = "task_description";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);


r_theme_InputArea($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
echo '</div></div>';
//_____________________________________________________________________________________________




echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';
$field_name = "task_project_id";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_Inputhidden($field_name, $input_values[$field_name], $Label, "small", $SubTip, $read_only);
echo '</div></div>';


echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';
$field_name = "task_group_id";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_Inputhidden($field_name, $input_values[$field_name], $Label, "small", $SubTip, $read_only);
echo '</div></div>';



echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "task_mperson_id";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
$SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);
$lookup_class = "bi_mperson";
$lookup_filter = "";

if($mode === 'readonly'){
  r_theme_InputText($field_name, $mperson_name, $Label, "meduim", $SubTip, $read_only);
}else {
r_theme_InputSelect($field_name, $input_values[$field_name], $Label, r_listbox_items($lookup_class, $lookup_filter), "small", $SubTip, $read_only, 1);
}




echo '</div></div>';




echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "task_creation_date";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);
//r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");

if($mode === 'readonly'){
  r_theme_InputText($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
}else {
r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
}



echo '</div></div>';



echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "task_estimated_days";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);
//r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
if($mode === 'readonly'){
  r_theme_InputText($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
}else {
r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
}
echo '</div></div>';




echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "task_status";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);
if($status === 'all')
{
    $data = array('new'=>'New','inprogress'=>'In Progress' , 'done'=>'Done');
}else {
    $data = array('new'=>'New');
}

if($mode === 'readonly'){
  r_theme_InputText($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
}else {
    r_theme_InputSelect($field_name, $input_values[$field_name], $Label, $data, "small", $SubTip, $read_only, 1);
}

echo '</div></div>';



echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "task_end_date";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);
//r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
if($mode === 'readonly'){
  r_theme_InputText($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
}else {
r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
}
echo '</div></div>';
//_____________________________________________________________________________________________
// obligatory // _____________________________________________________________________________________________________	
r_theme_InputHidden("is_an_action", "yes");
?> 
<?php   if($mode !== 'readonly'):    ?>
<div class="table-toolbar pull-right">
    <div class="btn-group">
        <button  
            type="submit" 

            class="btn blue ajax_action pull-right master_font"

            caller_verb="form_cancel"
            caller_id="<?php echo $this_concept; ?>_edit_form"
            caller_url='_'
            caller_target="edit_<?php echo $this_concept; ?>_body"

            form_type="POST"				
            form_name="<?php echo $this_concept; ?>_form" 	
            >			
<?php echo r_langline("general.button_cancel"); ?>		
        </button>	
    </div>

    <div class="btn-group">
        <button  
            type="submit" 

            class="btn green ajax_action right master_font"

            caller_verb="post_form"
            caller_id="<?php echo $this_concept; ?>_edit_form"
            caller_url="<?php echo site_url($this_controller) . "/ajax_edit/" . $item->ID(); ?>"
            caller_target="edit_<?php echo $this_concept; ?>_body"

            form_type="POST"				
            form_name="<?php echo $this_concept; ?>_form" 	

            >
<?php echo r_langline("general.button_save"); ?>
        </button>



    </div></div>
<?php endif;  ?>
<?php
r_theme_endform();

r_theme_box_end();
?>