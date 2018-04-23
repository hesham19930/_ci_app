<?php



class Bi_client extends Simple_business implements iSimple_Business {

    function __construct() {

        $this->bi_config();
        // setup all variables 
        $this->clear();
    }

    public function clear() {
        // create array containing all data of the business object not including linked tables//
        $this->business_data = array(
            "client_id" => 0,
            "client_name" => "",
            "client_phone" => 0,
            "client_address" => "",
            "client_email" => "",
            "client_last_edit_user_id" => 0,
            "client_industry_id" => 0
        );
    }

    public function bi_config() {

        $CI = & get_instance();
        $lang = $CI->admin_public->DATA["system_lang"];
        $CI->lang->load("todoyu/client_main", $lang);

        //create the class stamp -------------------------------------------

        $this->class_name = "bi_client";
        $this->table_name = "client_s";

        $this->concept_key = "client.";

        $this->id_field_name = "client_id";

        $this->name_field_name = r_langcase("client_name", "client_name");
        $this->name_field_name = "client_name";

        $this->list_title = r_langline(".list_title", $this->concept_key);
        $this->editing_title = r_langline(".editing_title", $this->concept_key);
        $this->creating_title = r_langline(".creating_title", $this->concept_key);

        // create array containing fields to show in the table , with listoption =""

        $this->list_view_edit_icon["default"] = 1;
        // create array containing fields to show in the table , with listoption ="" 

        $this->list_views["default"] = Array(
            "client_id" => '|hide|',
            "client_name" => "Client Name ",
            "client_email" => "Email",
            "client_address" => "Address",
            "industry_name" => "Industry Name ",
            "client_phone" => "Phone Number ",
            "client_create_date" => "Registration Date ",
            "industry_name" => "Industry Name  ",
        );


        //---------------------------------------------------------- ---------------------------
        // to be used in reading simple & exteded Modes 
        $this->read_select = Array("client_s.*");

      //  $this->read_select = Array("client_s.*");

        $this->read_join_extended = Array(
            Array(
                "1" => "industry_s",
                "2" => "client_s.client_industry_id = industry_s.industry_id",
                "3" => "inner"
            )
        );

        $this->list_join = $this->read_join_extended;


        $this->list_edit_Col = 2;

        $this->list_items_where["filter_client"] = array();
    }

    public function list_items_extension($db, $use_list, $filter_data) {

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
    }

}
