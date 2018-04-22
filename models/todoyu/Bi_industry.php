<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bi_industry
 *
 * @author Resala
 */
class Bi_industry extends Simple_business implements iSimple_Business {

    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }

    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "industry_id" => 0,
            "industry_name" => "",
            "industry_remarks" => ""
        );
    }

    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/industry_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_industry";
        $this->table_name = "industry_s";

        $this->concept_key = "industry.";

        $this->id_field_name = "industry_id";

        $this->name_field_name = r_langcase("industry_name", "industry_name");
        $this->name_field_name = "industry_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "industry_id" => '|hide|',
            "industry_name" => "Industry Name",
            "industry_remarks" => "Industry Remarks",
        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("industry_s.*");




        $this->list_edit_Col = 2;

        $this->list_items_where["all"] = array();
    }

}
