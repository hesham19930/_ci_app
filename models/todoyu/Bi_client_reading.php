<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bi_client_reading
 *
 * @author Resala
 */
class Bi_client_reading extends simple_report {

    function __construct() {
        $this->rep_config();
        // setup all variables 
        $this->Clear();
    }

    function rep_config() {
        $this->concept_key = "client_reading.";
        $this->use_sql = true;


//		
        $this->select_sql = "" .
                " select " .
                " client_id,client_name,client_email 
                , client_address , client_phone , client_create_date , industry_name
    				" .
                " from client_s" .
                " inner join industry_s ON client_s.client_industry_id = industry_s.industry_id" .
                " where 1 = 1 ".
                " (@_sqlsegment_client_industry_id_filter) ".
                " (@_sqlsegment_client_name_filter) ";
    
        $this->columns = array(
            "xx" => "*",
            "client_id" => '|hide|',
            "client_name" => "Client Name ",
            "client_email" => "Email",
            "client_address" => "Address",
            "industry_name" => "Industry Name ",
            "client_phone" => "Phone Number ",
            "client_create_date" => "Registration Date ",
            "industry_name" => "Industry Name  ",
            "_DETAILS" => "|hide|",
        );


        $this->sql_segments["sqlsegment_client_industry_id_filter"] = "!XX!";
        $this->sql_segments["sqlsegment_client_name_filter"] = "!XX!";
        


        $this->column_prefix = array();

        $this->table_name = "";
        $this->join_list = Array();

        $this->filters = Array(
            
            "client_industry_id" => "!XX!",
            "client_name" => "!XX!"
        );

        $this->filter_prefix = Array();

        $this->row_keys = Array("client_id");

        $this->list_edit_Col = 2;

        $this->order_by = Array(
            "client_id" => "asc",
                );
    }

    //_________________________________________________________________________________________
    function Clear() {
        
    }

    function read_sql_segment($segment_key) {
       
        if ($segment_key == "sqlsegment_client_industry_id_filter") {
            if ($this->filters["client_industry_id"] !== "!XX!")
                return "AND industry_id = '(@client_industry_id)' ";
        }
        
        if ($segment_key == "sqlsegment_client_name_filter") {
            if ($this->filters["client_name"] != "!XX!")
                
            
                return "AND client_name LIKE '%(@client_name)%' ";
           
        }
    }

    /* further configure table columns */

    public function more_config_cols(rTable $irTable, $view_name = "") {
        
    }

    /* further configure single table row */

    public function more_config_row(rTableRow $itable_row, Array $data_row) {

       
    }

}
