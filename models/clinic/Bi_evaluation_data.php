<?php

    Class bi_evaluation_data extends Simple_business implements iSimple_Business 
    {
        
    /* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
    function __construct() 
        {
          
            $this->bi_config();             
            // setup all variables 
            $this->clear();
            
        }
    
    /* config & clear business_data  Array of the object */ 
    public function clear(){
        // create array containing all data of the business object not including linked tables//
        $this->business_data  = 
            array(
            "evaluation_data_id"=>0 , 
            "evdata_evaluation_id"=>0,
 
            "evdata_field_name"=>"",
            "evdata_value_number"=>0 , 
            "evdata_value_date"=>"" ,    
            "evdata_value_string"=>""
            );
    }  

    
    // class configuration 
    public function bi_config()
    {
        
            $CI =& get_instance();
            $lang = $CI->admin_public->DATA["system_lang"] ; 
            $CI->lang->load("business/ar_main",$lang);
        
        //create the class stamp -------------------------------------------
        
            $this->class_name="bi_evaluation_data";
            $this->table_name="evaluation_data_s";
            
            $this->concept_key="evaluation_data." ; 
            
            $this->id_field_name="evaluation_data_id" ; 
            $this->name_field_name="evdata_field_name";
                 
            $this->list_title = r_langline(".list_title",$this->concept_key);
            
            // create array containing fields to show in the table , with listoption =""
         
            $this->list_view_edit_icon["default"] = 1 ;                 
            // create array containing fields to show in the table , with listoption ="" 
            $this->list_views["default"] = Array (
                "evaluation_data_id"=>r_langline("default.list.evaluation_data_id",$this->concept_key) , 
                
                
                );
                
                $this->list_items_where["list_search"] = array("search"=>"") ;  
                $this->list_items_order["list_search"]=array("ITEM_S.ITEM_CODE"=>"asc") ; 
         
            
            $this->list_view_edit_icon["selector"] =0 ; 
            $this->list_views["selector"] = Array (
                "evaluation_data_id"=>r_langline("default.list.evaluation_data_id",$this->concept_key) , 
                "evdata_field_name"=>r_langline("default.list.evdata_field_name",$this->concept_key),
                
                );
         
        
            
        // ------ --------------------------------------------------- ---------------------------
            // to be used in reading simple & exteded Modes 
            $this->read_select = Array("evaluation_data_s.*"); 
            $this->read_select_extended=Array("evaluation_data_s.*" );
                                              
                                             
            $this->read_join_extended=Array(   ) ; 
                        
                    
        
            $this->list_join = $this->read_join_extended ;
            
        
            
            $this->list_edit_Col =2 ; 
            
            $this->list_items_where["all"] = array();
        
            //$this->agsums["xcalc_sumx_fullnumname"] = " patient_number ";
        //  $this->simple_list_override_sql["fullname"] = ' SELECT CONCAT_WS(" .: ",service_code,service_name)  as FULLNAME ,service_id   from service_s '; 
            $this->list_items_where["fullname"] = array(); 
            
            //$this->list_items_where_fixed["clients"] = "(( ITEM_TYPE_CODE = 'client' ))" ; 
            //$this->list_items_where_fixed["suppliers"] = "(( ITEM_TYPE_CODE = 'supplier' ))" ; 
            
                
    }
    
    
    public function set_field_value($fld_value,$fld_type_id)
    {
              switch ($fld_type_id) 
                        {
                        /*
                         * 1    TEXT
                            2   DATE
                            3   INT
                            4   DECIMAL
                            5   LOOKUP
                            6   TIME
                            7   MULTILINE
                            8   LOOKUP_COMBO
                            9   DATETIME
                            10  LOOKUP_PREDEF
                         */
                        case 1: ;  //  TEXT 
                            $field_value = trim($fld_value) ; 
                        $this->business_data["evdata_value_string"]  = $field_value ; 
                            break ; 
                        case 2: // DATE
                            $field_value = trim($fld_value) ; 
                            $this->business_data["evdata_value_date"]  = $field_value ; 
                            break ;
                        case 3: ; // INTVALUE
                            $field_value = intval($fld_value) ; 
                             $this->business_data["evdata_value_number"]  = $field_value ; 
                            break ;
                        case 4: ;  //DECIMAL
                            $field_value = floatval ($fld_value) ; 
                              $this->business_data["evdata_value_number"]  = $field_value ; 
                            break ;
                        case 5: ;  //LOOKUP NUM
                            $field_value = intval($fld_value) ;
                              $this->business_data["evdata_value_number"]  = $field_value ; 
                            break ;
                        case 6:;  // TIME )STRING 
                            $field_value = trim($fld_value) ; 
                         $this->business_data["evdata_value_string"]  = $field_value ; 
                            break ;
                        case 7:;
                            $field_value = trim($fld_value) ; 
                            $this->business_data["evdata_value_string"]  = $field_value ; 
                            break ;
                        case 8: ; //LOOKUP COM NUM
                             $field_value = intval($fld_value) ;
                             $this->business_data["evdata_value_number"]  = $field_value ; 
                            break ;          
                        case 9:;// DATETIME / STRING
                             $field_value = trim($fld_value) ;
                            $this->business_data["evdata_value_string"]  = $field_value ; 
                            break ;
                        case 10: ; 
                            $field_value = trim($fld_value) ; 
                            $this->business_data["evdata_value_string"]  = $field_value ;
                            break ;
                            
                         default:
                              $field_value = trim($fld_value) ; 
                              $this->business_data["evdata_value_string"]  = $field_value ; 
                            break ;
                            break ;     
                           
                        }
   
    }
    /* further configure table columns */
    public function more_config_cols(rTable $irTable,$view_name="")
        {
            
            //$irTable->Cols["service_is_service"]->Type = rColumnType::ColTypeBoolean;
            
            //$itable_row->Cols["open_icon"]->Type = rColumnType::ColTypeImage ;    
        }   
        
    /* further configure single table row */ 
    public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
        {
            $new_id_name = $this->id_field_name ;
            $this_id = $data_row[$new_id_name] ;    
            //$itable_row->Cells["open_icon"]->URL = site_url('records/patient_file/master/'.$this_id) ;        
            //$itable_row->Cells["open_icon"]->Value='<button class="pull-right"><li class="icon-file" style="color:green;"></li></button>' ; 
        }
        
    

    
    public function get_evaluation_fields ($evaluation_form_id , $evaluationl_id )
    {
                
             //   echo "FORM:".$evaluation_form_id ; 
        $qry = "SELECT * FROM eval_field_s 
                            WHERE eval_field_form_id  = '$evaluation_form_id' ";
        $qry = $qry . " order by  eval_field_order" ; 
                        
        $data = $this->db->query($qry);
        $result = $data->result_array();
        
   //   echo "<pre>"; print_r($result) ; echo "</pre>" ;  

        if(count($result) >0 )
        {
            
            $i = 0 ;    
            
            foreach ($result as  $value) {
                    
                 $result[$i]["evdata_value_number"] = "" ; 
                 $result[$i]["evdata_value_date"] = "" ; 
                 $result[$i]["evdata_value_string"] = "" ; 
                 
                 if ($evaluationl_id != 0 )
                    {   
                
                     $fieldname = $value["eval_field_name"] ; 
                     
                     
                      $qry = "SELECT * FROM evaluation_data_s 
                            WHERE evdata_evaluation_id = " . $evaluationl_id .  " and evdata_field_name = '$fieldname'" ;
                               
                     $data = $this->db->query($qry);
                     $details = $data->result_array();
                     if(count($details) >0 ) {
                        $result[$i]["evdata_value_number"] = $details[0]["evdata_value_number"] ; 
                        $result[$i]["evdata_value_date"] = $details[0]["evdata_value_date"] ; 
                        $result[$i]["evdata_value_string"] = $details[0]["evdata_value_string"] ;
                        
                        if (($result[$i]["eval_field_type_id"]==5 )or($result[$i]["eval_field_type_id"]==8 ))
                        {
                            $ClassName = $result[$i]["efld_lookup_class_name"] ; 
                             $CI =& get_instance();
                             
                            $CI->load->model("clinic/data/".$ClassName);
                            $newObject = new $ClassName;
                            $calcvalue  = $newObject->get_name($result[$i]["evdata_value_number"]  ) ; 
                            $result[$i]["evdata_value_string"]  = $calcvalue   ; 
                        }
                        // update text to reflect look ups 
                        
                        }
                       
                    }
                    
                    
                    
                    
                     ++$i ;
                          
            }   
            
         
           //  echo "<pre>"; print_r($result) ; echo "</pre>" ;  
            return $result;
                        
        }
        
        else
            
        return array() ; 
    }     
    
    }
/* END OF CLASS * Started By Anwar APR 14/2013 */ 
