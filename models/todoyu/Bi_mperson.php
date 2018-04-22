<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bi_mperson
 *
 * @author Resala
 */
class Bi_mperson extends Simple_business implements iSimple_Business {
   function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }

    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "mperson_id" => 0,
            "mperson_name" => "",
            "mperson_phone" => 0,
            "mperson_type" => "",
            "mperson_email" => "",
            "mperson_status" => "",
            "mperson_creation_date" => 0,
            "mperson_created_by" => 0
        );
    }

    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/mperson_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_mperson";
        $this->table_name = "mperson_s";

        $this->concept_key = "mperson.";

        $this->id_field_name = "mperson_id";

        $this->name_field_name = r_langcase("mperson_name", "mperson_name");
        $this->name_field_name = "mperson_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "mperson_id" => '|hide|',
            "mperson_name" => "Person Name ",
            "mperson_phone" => "Phone",
            "mperson_type" => "Person Type",
            "mperson_email" => "Email",
            "mperson_status" => "Status",
            "mperson_creation_date" => "Join Date ",
            "mperson_created_by" => "Added By",
        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
      $this->read_select = Array("mperson_s.*");




        $this->list_edit_Col = 2;

        $this->list_items_where["all"] = array();
    }

   /* public function list_items_extension($db, $use_list, $filter_data) {

        if ($use_list == "filter_client") {



            if ($filter_data["client_industry_id"] != "") {
                $where = "1 = 1 " . "AND industry_s.industry_id =" . $filter_data["client_industry_id"] . "";
                $this->db->where($where, NULL, FALSE);
            }if ($filter_data["client_name"] != "") {

                $where = "1 = 1 " . "AND client_name LIKE '%" . $filter_data["client_name"] . "%'";
                $this->db->where($where, NULL, FALSE);
            }



            $this->db->where($where, NULL, FALSE);
            return true;
        }




        return false;
    }*/

}
