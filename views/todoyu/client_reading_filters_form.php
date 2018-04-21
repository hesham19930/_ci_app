<div class="btn-group">
        
         <button  
            type="submit" 

            class="btn green ajax_action right master_font"

            caller_verb="post_form"
            caller_id="<?php echo $this_concept; ?>_edit_form"
            caller_url="<?php echo site_url($this_controller) . "/ajax_edit/" . 0; ?>"
            caller_target="edit_<?php echo $this_concept; ?>_body"

            form_type="POST"				
            form_name="<?php echo $this_concept; ?>_form" 	

            >
<?php echo  "Add"; ?>
        </button>
        
    </div>
<?php
$this->lang->load("business/item_main", $this->admin_public->DATA["system_lang"]);

$read_only = 0;
// take the value from the previous form submit

$this_form_title = "";
if (isset($form_title))
    $this_form_title = $form_title;

$input_values = array(); // this is our array 
//$input_values["from_date"] =  date('Y-01-01 H:i:s');
//values to filter
$input_values["client_industry_id"] = "";
$input_values["client_name"] = "";




// poplulating this one from the controller first time 

if (set_value("is_an_action") == "yes") {
    foreach ($input_values as $key => $value) {
        $input_values[$key] = set_value($key);
    }

    //echo "action" ; 
} else {
    
}


r_theme_box_start
        ($this_form_title, 12, array("body_id" => "edit_" . $this_concept . "_body",
    "box_id" => "edit_" . $this_concept . "_box", "back_color" => "blue",
    "tools" => "")
);



$url_extend = "";

r_theme_startform("search_form", "search_form", "", "post"); 

$lang_section = $this_concept . ".form_data.";
echo '<div class="hide_with_menu" >';


echo '<div class="controls-row">';
echo '<div class="span11 m-wrap">';
$field_name = "client_name";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_InputText($field_name, $input_values[$field_name], $Label, "meduim", $SubTip, $read_only);
echo '</div></div>';

echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "client_industry_id";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);
$lookup_class = "bi_industry";

$lookup_filter = "";

r_theme_InputSelect($field_name, $input_values[$field_name], $Label, r_listbox_items($lookup_class, $lookup_filter), "small", $SubTip, 0, 1);
echo '</div></div>';
//_____________________________________________________________________________ ______________________________
//  \/ ______________________________ _______________________________________________________________________\/
// obligatory // _____________________________________________________________________________________________________	
r_theme_InputHidden("is_an_action", "yes");
?>


<div class="table-toolbar pull-left">
    
       
    
    

    <div class="btn-group">
        <button  
            type="submit" 

            id="item_filters_go"
            name="item_filters_go"

            class="btn blue ajax_action right master_font autoaction"

            caller_verb="post_form"
            caller_id="search_form"
            caller_url="<?php echo site_url($this_controller . "/find_form") . $url_extend; ?>" 

            caller_target="_"				
            form_type="POST"		
            form_name="search_form"

            >
            

<?php echo "Search"; ?>
        </button></div></div>
<a class="r_automation" 	
			caller_key = "<?php echo $this_concept.'_table' ;?>" 
			automation_verb="edit" 
			automation_target = "_edit_section"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
		></a>

<a class="r_automation" 	
			caller_key = "<?php echo $this_concept.'_table' ;?>" 
			automation_verb="post_form" 
			automation_target = "_edit_form"
			automation_action ="clear_modal"
			automation_url="[get_from_caller]"   
		></a>
                <?php
                r_theme_endform();

                r_theme_box_end();
                ?>
		
