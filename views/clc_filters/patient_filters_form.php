<?php
//coming from controller
//$this_concept = "store_balance" ;
//$this_lang_folder = "trans" ;
// BEGIN PAGE SETTINGS
///	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
$this->lang->load("clinic/patient_main", $this->admin_public->DATA["system_lang"]);

$read_only = 0;
// take the value from the previous form submit

$this_form_title = "";
if (isset($form_title))
    $this_form_title = $form_title;

$input_values = array(); // this is our array
//$input_values["from_date"] =  date('Y-01-01 H:i:s');

$input_values["patient_name"] = "";
$input_values["patient_phone"] = "";
$input_values["patient_sex"] = "";
$input_values["patient_birth_date"] = "";
$input_values["allow_repeat"] = "";
$input_values["patient_company_id"] = "";
$input_values["patient_id"] = "";
$input_values["openpatient"] = "";


// poplulating this one from the controller first time


if (set_value("is_an_action") == "yes") {
    foreach ($input_values as $key => $value) {
        $input_values[$key] = set_value($key);
        print_r($input_values[$key]);
    }
} else {
    
}



$this_form_title = "Search FFor Patient ";
$this_form_title = "";
r_theme_box_start
        ($this_form_title, 12, array("body_id" => "edit_" . $this_concept . "_body",
    "box_id" => "edit_" . $this_concept . "_box", "back_color" => "blue",
    "tools" => "")
);



//	echo form_error("patient_name") ;
$url_extend = "";


r_theme_startform("search_form", "search_form", "", "post"); //echo form_open('form');
$lang_section = "item.form_data.";

echo '<div class="hide_with_menu" >';


//  \/ ______________________________ _______________________________________________________________________\/





echo '<div class="controls-row">';
echo '<div class="span3 m-wrap">';

$field_name = "patient_id";
$SubTip = "";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error('Patient Name Required');
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_InputText($field_name, $input_values[$field_name], $Label, "small ", $SubTip, $read_only, 0, 1, site_url("clinic/patients/typeahead_data"));
echo '</div>';

echo '<div class="span6 mwrap">';
$field_name = "openpatient";
if ($input_values[$field_name] === "on") {
    $input_values[$field_name] = 1;
}
if ($input_values[$field_name] === "") {
    $input_values[$field_name] = 0;
}
if (sysDATA("user_group_name") != "DOCTOR") {
    $input_values[$field_name] = 1;
}

$SubTip = " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = "Open Patient File";

r_theme_InputCheck($field_name, $input_values[$field_name], $Label, 6, $SubTip, $read_only);
echo '</div></div>';
echo '<div class="controls-row">';
echo '<div class="span6 m-wrap">';

$field_name = "patient_name";
$SubTip = "";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error('Patient Name Required');
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_InputText($field_name, $input_values[$field_name], $Label, "large typxeahead", $SubTip, $read_only, 0, 1, site_url("clinic/patients/typeahead_data"));

echo '</div></div>';
echo '<div class="controls-row">';
echo '<div class="span6 m-wrap">';

$field_name = "patient_phone";
$SubTip = "";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error('Patient Name Required');
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_InputText($field_name, $input_values[$field_name], $Label, "large ", $SubTip, $read_only, 0, 1, site_url("clinic/patients/typeahead_data"));

echo '</div></div>';


echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "patient_sex";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

$gender = array("Male" => "Male", "Female" => "Female");
r_theme_InputSelect($field_name, $input_values[$field_name], $Label, $gender, "2", $SubTip, 0, 0);

echo '</div></div>';
echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';

$field_name = "patient_birth_date"; //date

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

r_theme_inputtext_mask($field_name, $input_values[$field_name], $Label, "small", $SubTip, $read_only, "date-picker");

echo '</div></div>';

echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
echo '<div class="span11 m-wrap">';
$field_name = "patient_company_id";

$SubTip = r_langline($field_name . '_tip', $lang_section) . " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = r_langline($field_name . '_label', $lang_section);

$lookup_class = "bi_company";
$lookup_filter = "";
r_theme_InputSelect($field_name, $input_values[$field_name], $Label, r_listbox_items($lookup_class, $lookup_filter), "4", $SubTip, 0, 0);

echo '</div></div>';

echo '<div class="controls-row">';
echo '<div class="span6 m-wrap">';

$field_name = "allow_repeat";
if ($input_values[$field_name] === "on") {
    $input_values[$field_name] = 1;
}
if ($input_values[$field_name] === "") {
    $input_values[$field_name] = 0;
}

$SubTip = " ";
if (form_error($field_name) != "") {
    $SubTip = r_theme_input_error(r_langline($field_name . '_is_required', $lang_section));
}
$Label = "Allow Add Repeat Phone";

r_theme_InputCheck($field_name, $input_values[$field_name], $Label, 6, $SubTip, $read_only);
echo '</div></div>';


//  /\_____________________________________________________________________________________________________/\
//  /\_____________________________________________________________________________________________________/\
// obligatory // _____________________________________________________________________________________________________
r_theme_InputHidden("is_an_action", "yes");
?>




<div class="table-toolbar pull-left">

    <div class="btn-group">
        <button
            type="submit"

            id="item_filters_go"
            name="item_filters_go"

            class="btn blue ajax_action right master_font "

            caller_verb="post_form"
            caller_id="search_form"
            caller_url="<?php echo site_url($this_controller . "/find_form") . $url_extend; ?>"

            caller_target="_"
            form_type="POST"
            form_name="search_form"

            >
<?php echo r_langline('search_button', $this_concept . ".master."); ?>
        </button>
    </div>
</div>
<div class="table-toolbar pull-right">
    <div class="btn-group">



        <button
            type="submit"

            id="make_app"
            name="make_app"

            class="btn green  ajax_action right master_font "

            caller_verb="patient_appointment_click"
            caller_id="search_form"
            caller_url="<?php echo site_url("clinic/visits/patient_appointment/0"); ?>"

            caller_target="_"
            form_type="POST"
            form_name="search_form"

            >
<?php echo "New Patient & Appointment "; ?>
        </button>




    </div></div>



<?php
r_theme_endform();


r_theme_box_end();

r_theme_row_start();
r_theme_section_start(8, array("id" => "appointment_section",
    "attributes" => array('class' => 'modal hide transparent container',
)));
echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
r_theme_section_end();
r_theme_row_end();



r_theme_row_start();
r_theme_section_start(8, array("id" => "visit_section",
    "attributes" => array('class' => 'modal hide transparent container',
)));
echo '<div align="center"><img align="center" src=' . base_url("loading.gif") . '></div>';
r_theme_section_end();
r_theme_row_end();
?>


<!-- THE CLICK ON THE BUTTON OF THE LIST --> 

<a class="r_automation"

   caller_key = "visit_appo"
   automation_verb="Click"

   automation_target = "appointment_section"
   automation_action ="load_form_modal"
   automation_url="[get_from_caller]"

   ></a>


<a class="r_automation" 

   caller_key = "Save_Appointment" 
   automation_verb="form_cancel"

   automation_target = "appointment_section"
   automation_action ="clear_modal"
   automation_url="[get_from_caller]"   

   ></a> 

<a class="r_automation"
   caller_key = "Save_Appointment"
   automation_verb="post_form"
   automation_action ="post_form"
   automation_target = 'appointment_section'
   automation_url="[get_from_caller]"
   ></a>


<a class="r_automation"
   caller_key = "Save_Appointment"
   automation_verb="form_post_success"

   automation_target = "appointment_section"
   automation_action ="clear_modal"
   automation_url=""
   ></a>


<a class="r_automation"
   caller_key = "Save_Appointment"
   automation_verb="form_post_success"

   automation_target = "appointment_section"
   automation_action ="clear_modal"
   automation_url=""
   ></a>



<a class="r_automation"
   caller_key = "Save_Appointment"
   automation_verb="form_post_success"

   automation_target = "today_visit_list_section"
   automation_action ="reload"
   automation_url=""
   ></a>



<!--     add new visit and patient  -->

<a class="r_automation"

   caller_key = "search_form"
   automation_verb="patient_appointment_click"

   automation_target = "visit_section"
   automation_action ="post_form_load"
   automation_form_success_target= 'visit_section'
   automation_url="[get_from_caller]"

   ></a>



<a class="r_automation"

   caller_key = "new_full_visit_form"
   automation_verb="form_cancel"

   automation_target = "visit_section"
   automation_action ="clear_modal"
   automation_url="[get_from_caller]"

   ></a>







<a class="r_automation"
   caller_key = "new_full_visit_form"
   automation_verb="post_form"
   automation_action ="post_form"
   automation_target = 'visit_section'

   automation_url="[get_from_caller]"
   ></a>





<a class="r_automation"
   caller_key = "new_full_visit_form"
   automation_verb="form_post_success"

   automation_target = "visit_section"
   automation_action ="clear_modal"
   automation_url=""
   ></a>



<a class="r_automation"
   caller_key = "new_full_visit_form"
   automation_verb="form_post_success"

   automation_target = "patient_search_edit_section"
   automation_action ="reload"
   automation_url=""
   ></a>
