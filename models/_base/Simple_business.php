<?php

    Class Simple_business extends Simple_list
    {
    
        Public $error_message = ""; // should contain erros generated inside any function  either logic or system errors
         
        Public $success = false; // if the any call is completed should contain true (!! NOT ACTING) 
         
        Public $is_published = false ; 
        Public $is_Extended = false ;  
        
    
                                                // if the read is complete and the data is filled with the contents of the data base
                                                // table this attribute should be true , if not it will be false 
        
        Public $list_title ="";                 // to be used by the controllers or views to display the title of the lisf of objects of this class
         
        Public $editing_title = "" ;            // editing title 
        public $creating_title = "" ;           // new record title of the screen 
        
        // the DEC2012 Addition 
        // more abstract 
        public $controller_name ;               // sometimes needed 
        public $new_method_name ; 
        public $edit_method_name ; 
        public $list_method_name ; 
        
        public $business_data  = Array ();      // the store of the data of single record information of the object
                                                // key (mostly field name )// value
                                                // if you put any key that's not in the table it will still work without saving or reading    
        
        public $read_select = Array() ;         //  array of what fields to read from db when using the read method in case of extended = 0
                                                //  if placed a field not exist in the table error will happen 
          
        public $read_select_extended = Array() ;  // same as above in case of extended =1 // when calling the read method
         
        public $read_join_extended= Array() ;       // you need the join information in case of extended 
                                                    // array of arrays each  array has 3 elements 
                                                        //[1] --> table name to join 
                                                        //[2] --> join relation fields 
                                                        //[3] --> type of join .. inner / left / right 
                                                        
    
        public $list_select = Array() ; //          calcuated ,, need not initialize
         
        public $list_join = Array() ;               // same as $read_join_extended but for the rtable creation in crate list , and list_item_rtable
                                                    // can be the same as $read_join_extended in implementation  
        
    
        public $list_views = array();               // used by list_items_rtable to create different views of the list of objects = different columns
                                                    // list_views["this_view"] = array("fieldname"=>"coltitle","fieldname2"=>"coltitle2");   
        public $list_view_edit_icon = array();      // edit icon location of the specific view  
        
        
        public $agsums = array() ;                  // transaction of calculation of cacluated fields 
                                                     
            
        public $test_values =Array(); // no meaning // used for testing only
        
        
        public $concept_key = "" ; 
        // NOW METHODS ------------------------------------------------------------------------------------
        // controller related 
        
        
        
        // NOW METHODS ------------------------------------------------------------------------------------
        
        public function ii($key)
        {
            if (key_exists($key,$this->business_data))
            {
                return $this->business_data[$key] ; 
            }
            else
                {return -1 ; }
        }
        // returning id value of a published object 
        public function ID() {
                $new_id_name = $this->id_field_name ;
                return $this->business_data[$new_id_name]; 
        }
        
        public function get_name($for_id = 0 )
        {
                if ($for_id == 0 )
                {   
                    return $this->business_data[$this->name_field_name];
                }
                else
                {
                    $this->db->from($this->table_name);
                    $this->db->select($this->name_field_name);
                    $this->db->where($this->id_field_name, $for_id);
                    $result = $this->db->get();
                    foreach ( $result->result_array() as $row ) { return $row[$this->name_field_name] ; }           
                    return "" ; 
                        
                } 
        }
        
        // reads from db and populated the business_data with db contents 
        // parameters 
        // $iValueToFind = search for value ,  
        // $iFindByWhat = what to search for  - if blank assumes seach for id
        //  $iIsExtended = if 1 assume full exteded data fetch with related tables field values
        //  $iAddtionalFilter - backup 
        
        
        public function read($iValueToFind="",$iFindByWhat="",$iIsExtended=0, $iAddtionalFilter =""){
        
        $this->clear();
        $this->is_published = false ;
        
        
        $this->read_pre_process() ;
 
        try 
        { 
        
            if ($iValueToFind=="")  {$ValueToFind=$this->business_data[$this->id_field_name];} else {$ValueToFind=$iValueToFind;}       
            //  if ($iFindByWhat=="")  {$FindByWhat="id";} else {$FindByWhat=$iValueToFind;}
        
            if(is_array($iFindByWhat))
                {
                    
                }
            else 
                {
    
                if ($iFindByWhat =="")
                    {
                        $FindByWhat =$this->table_name.".".$this->id_field_name ; 
                    }
                else
                    {
                        $FindByWhat = $iFindByWhat; 
                    }
                }
        
            
                if ($iIsExtended!=1)
                    {
                         $this->db->select($this->read_select);
                    }
                else
                    {
                        $normal_select = $this->read_select_extended;
                        $new_select = $normal_select ; 
        
                        foreach ($this->business_data as $key => $value) {
                            if (strpos("_".$key,"XCALCX_") == 0) 
                            {            
                            }
                            else
                                {
                                    
                                    //$new_select = str_replace ( $new_select, ","$key, mixed $subject [, int &$count ] )   
                                    // you need to remove the sum field from the selection
                                    //echo $key."<hr/>NS1" ; 
                                    //print_r($new_select);
                                    //in the select string , our key is a value
                                     
                                    $sKey = array_search ( $key, $new_select);
                                    //echo "sKey".$sKey."<hr/>"  ; 
                                    
                                    if ($sKey!="") { unset($new_select[$Key]);}     
                                        $new_select [$key] = $this->agsums[$key]." AS ". $key ;
                                    
                                }
                        }
                            
                    
                        $this->db->select($new_select);
                        
                        
                        foreach ($this->read_join_extended as $joinvalues) {
                            $this->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);  
                        }
                                            
                    }
                     
                /* the following segment needs no change ,, in common cases */
                $this->db->from($this->table_name);
                
                if(is_array($iFindByWhat))
                {
                        foreach ($iFindByWhat as $ekey => $evalue) {
                                $this->db->where($evalue, $ValueToFind[$ekey]) ; 
                        }
                }
                else 
                {
                        $this->db->where ($FindByWhat,$ValueToFind) ;
                }
                
                //if ($FindByWhat =="si_short_code") $this->db->where ("s","s") ; ; 
                
                //$this->db->limit(1); 
                $result = $this->db->get();     
            
                foreach ( $result->result_array() as $row ) 
                {
                    //echo "<hr>";
                    //print_r($row); 
                    foreach ($row as $key=>$value)
                    {                       
                        if (key_exists($key, $this->business_data)) $this->business_data[$key] = $value ;
                    }           
                    $this->is_published = true ;    
                    if ($iIsExtended==1){ $this->is_Extended = true ; } 
                }
                
             
            $this->read_post_process() ;
                 
        } 
        catch (Exception $e) {
            $this->is_published = false ; 
            $this->$error_message= 'Caught exception: <br/>'.  $e->getMessage(). "\n" ; 
            show_error( $this->$error_message);
            throw new Exception("Error Processing Request", 1);
            
        }                   
        
        }  
        
        
        public function fix_orc_date()
        {
            
        }
        // updates the db with the contents of the busiess_data array 
        // if the id is 0 creates new record 
                     
    public function update()
        {


            try 
            {
            
            
            $new_record_flag  = false ;         
            if ($this->ID() ==0) $new_record_flag = true; 
                
            $this->update_pre_process($new_record_flag); // allow the subclass to say something before updading 
            
            $update_fields = Array() ; 
            $fields = $this->db->list_fields($this->table_name);
            $fields  = array_merge(Array("X"),$fields ) ; // just to shift first field not to return zero on search 
        
            foreach ($this->business_data as $key => $value) {
                $checkexist =  array_search($key, $fields) ;
                
                if ($checkexist!=FALSE)
                {
                    if (strpos(substr($key,-3),"!") !=0 )
                    {
                        // any field with the last 3 chars containing "!" will never be saved in an update // or insert 
                    }
                    else {
                        if ($value==='on'){ $value  =1;}
                        //echo $value ."<br/>"; 
                        $update_fields[$key] = $value ; 
                    }
                    
                } 
            }  
            
            
        
            //$update_fields["test"] = "test"; 
            // convert fields to upper case 
            //foreach ($update_fields as $key => $value) {
            //  $update_fields[strtoupper($key)] = $value ; 
            //  unset ($update_fields[$key]);
            //}
            //print_r ($update_fields) ; return ;
            $inserting = false ;  if ($this->ID()==0) $inserting = true ;
              
            unset ($update_fields[$this->id_field_name]); 
            
            /*if ($inserting == true )
            {
            $this->business_data[$this->id_field_name] = $this->getNextId();
            }*/
            
            
            $update_fields[$this->id_field_name]=$this->business_data[$this->id_field_name] ;
            
            
            foreach ($update_fields as $fkey => $fvalue) {
            
                //IF ($fkey==$this->id_field_name) ECHO $this->id_field_name .$this->business_data[$this->id_field_name]; 
                if (strpos($fkey, "_DATE")!=0)
                {
                    if (strpos("_".$fvalue, "to_date(")==0) // alreadu converted to oracle format 
                    {
                    $fvalue = orcl_to_date($fvalue) ;
                    } 
                }
                /*if (strpos($fkey, "_TIME")!=0)
                {
                    if (strpos("_".$fvalue, "to_date(")==0) // alreadu converted to oracle format 
                    {
                    $fvalue = orcl_to_time($fvalue) ;
                    } 
                }*/
                
                if (strpos("_".$fvalue, "to_date")!=0)
                {
                $this->db->set($fkey,$fvalue,false) ;
                }
                else
                {
                $this->db->set($fkey,$fvalue)   ;
                } 
                
            }
            // ECHO "THIS_ID=".$this->ID() ; 
            
            if ($inserting)
            {
                //  $this->business_data[$this->id_field_name] = $this->getNextId();
                //  $this->db->Insert($this->table_name,$update_fields);
                // ECHO "NOW_INSERTING" ; 
                    $this->db->Insert($this->table_name);
                    $this->business_data[$this->id_field_name] = $this->db->insert_id(); 
            }
            else {   
                    $this->db->where($this->id_field_name, $this->ID());
                    $this->db->Update($this->table_name);
                //  $this->db->Update($this->table_name,$update_fields);
            }
                    

            $this->update_post_process($new_record_flag,false); // allow the subclass to say something before updading
            $this->read($this->ID(),"",1  ) ;
            if ($this->update_post_process($new_record_flag,true)===true)
            {
                $this->read($this->ID(),"",1  ) ;
            }                   
            
            return true ; 
            
                
            }
            catch (Exception $e) {
        
                $this->error_message= 'Caught exception: '.  $e->getMessage(). "\n";
        
                return FALSE;  
            } 
        }
            
     

    /*  private function getNextId() {
          $this->db->select($this->table_name."_SEQ.NEXTVAL AS NEXTID", FALSE);
          $this->db->from("dual");
          $query = $this->db->get();
          $row = $query->row();
          $NEXT_ID =$row->NEXTID;
          ECHO "NEXT_ID".$NEXT_ID; 
          return $NEXT_ID;
        }*/
        
            
        // creates a new record not used the objects business data array , but recieving 
        // the business data array in parameter 
        // and returns ID 
              
        public function create(array $i_business_data )
        {
            foreach ($this->business_data as $key => $value) {
                if (key_exists($key, $i_business_data))
                {
                    $this->business_data[$key] =$i_business_data[$key] ; 
                }
            }
            
            if ($this->update())
            {
                return $this->ID() ; 
            }
            else
            {
                return -1; 
            }
        }
        
        
        // checks if a record exists in the database with speecific information 
        // paramers 
        // $name_value_pairs["client_number"]=>10 ;
        // $name_value_pairs["client_type"]=>2 ;
        
        // if $return_id_value = 1 , it will return the ID of first matching record 
        // usefull in checking exisitence of serial number 
        // serial number can be dependent on other parameter 
        
        public function check_value_exist(array $name_value_pairs,$extended_tables=0,$return_id_value=0)
        {
            
            $this->db->select($this->id_field_name);
            $this->db->from($this->table_name); 
            if ($extended_tables==1)
            {
                foreach ($this->read_join_extended as $joinvalues) {
                            $this->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);
                    }   
            }
            foreach ($name_value_pairs as $key => $value) {
                $this->db->where($key,$value);  
            }
            $query = $this->db->get();
            if (($query->num_rows) > 0 ) 
            {
                if ($return_id_value==1)
                    {
                        foreach ( $query->result_array() as $row )
                        {   return $row[$this->id_field_name] ; }
                    }
                return true ;
            } 
            
            return false ; 
            
        }
    
    
        // returns max number of value with speecific or no prefix 
        // get me the max number staring with "37" getmax("number","37")
        
        public function get_max($field_name,$like_value="")
        {
            
            $my_max_value = 0 ; 
            //  ECHO '<DIV>'.$like_value.'</DIV> ';
            $this->db->select_max($field_name, 'my_max_value');
            if ($like_value!="")
            {
                $this->db->like($field_name, $like_value, 'after'); 
            }
            
            $query = $this->db->get($this->table_name);
            foreach ($query->result() as $row)
            {
                $my_max_value =  $row->my_max_value ;
                //ECHO '<DIV>'.$row->my_max_value.'</DIV> ';
            }
             
            if ($my_max_value==null) return 0; 
            return $my_max_value ; ;
        
        }
        
        
        // get count of records with spedic filter 
        // get count of records with spedic filter 
        public function get_count($iValueToFind="",$iFindByWhat="",$with_extension=0)
        {
            
            
            
            $this->db->from($this->table_name);
            if ($with_extension==1)
            {
                foreach ($this->read_join_extended as $joinvalues) {
                    $this->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);
                }   
            }   
            
            
        
            if (($iValueToFind==="")&&($iFindByWhat===""))
            {
                
            }
            else
                {
                if(is_array($iFindByWhat))
                {
                        foreach ($iFindByWhat as $ekey => $evalue) {
                                $this->db->where($evalue, $iValueToFind[$ekey]) ; 
                        }
                }
                else 
                {
                        $this->db->where ($iFindByWhat,$iValueToFind) ;
                }
            }
                return $this->db->count_all_results();
        }
        
        
        public function get_count_distinct($iValueToFind="",$iFindByWhat="",$with_extension=0,$distinct_string = "" )
        {
            
            if ($distinct_string=="")
            {
                $this->db->select('count(*) as numrows');
            }
            else
            {
                    $this->db->select('count('.$distinct_string.') as numrows');
            }
            

            $this->db->from($this->table_name);
            if ($with_extension==1)
            {
                foreach ($this->read_join_extended as $joinvalues) {
                    $this->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);
                }   
            }   
            
            
            if (($iValueToFind==="")&&($iFindByWhat===""))
            {
                
            }
            else
                {
                if(is_array($iFindByWhat))
                {
                        foreach ($iFindByWhat as $ekey => $evalue) {
                                $this->db->where($evalue, $iValueToFind[$ekey]) ; 
                        }
                }
                else 
                {
                        $this->db->where ($iFindByWhat,$iValueToFind) ;
                }
            }
            $query = $this->db->get()   ;
            foreach ($query->result() as $row)
            {
                return  $row->numrows ;
                //ECHO '<DIV>'.$row->my_max_value.'</DIV> ';
            }
                
        } 
        // should return an array of objects of the class with array keys = id_field_value ; 
        public function list_items($uselist = "",array $filter_data =array())
        {
            
                $return_array = array(); 
                foreach ($this->list_items_where as $key => $value) {
                    if ($key == $uselist)
                    {
                        
                        $this->db->select($this->id_field_name);
                        $this->db->from($this->table_name);
                        $where_array =$this->list_items_where[$uselist];  
                        print_r($where_array) ; 
                        foreach ($where_array as $ekey => $evalue) {
                            $this->db->where($evalue, $filter_data[$ekey]) ; 
                        }
                    }
                }           
                            
                $result = $this->db->get();     
                foreach ( $result->result_array() as $row )
                {
                    $NewRow = new $this->class_name;
                    $NewRow->read ($row[$this->id_field_name],"",1); 
                    $return_array[$row[$this->id_field_name]] =$NewRow ;  
                }   
                return $return_array;               
        }
        
        // should return an array of arrays ,, key -> the id , value = array = business_data of the object
        // I am doing this for the sake if improving performance not to execute dbconnections as many times 
        // as the list of objects //         
        public function list_items_array($uselist = "",array $filter_data =array() , $use_extended=0,$view_name="")
        {

                $return_array = array(); 
                foreach ($this->list_items_where as $key => $value) {
                    if ($key == $uselist)
                    {
                        
                        $this->db->from($this->table_name);
                        if ($use_extended!==1)
                        {
                            //echo "NOT EXECUTNIG ,, EXTENDED SELECT , JOIN" ; 
                            $this->db->select($this->read_select);
                            $column_collection = $this->business_data ;
                        }
                        else
                        {
                            
                            $sum_list_select = array() ;
                            if ($view_name ==="")
                            {
                                $column_collection = $this->business_data ; 
                            }
                            else {
                                $column_collection = $this->list_views [$view_name];
                            
                            } 
                            foreach ($column_collection as $key => $value) {
                            if (strpos($key,"XCALCX_") === false) 
                            {        
                            }
                            else
                            {
                                $sum_list_select[] = $this->agsums[$key]." AS ". $key ;
                                    
                            }
                            }
                            $sum_list_select = array_merge($sum_list_select, $this->read_select_extended);
                            
                             
                            //echo "EXECUTNIG ,, EXTENDED SELECT , JOIN" ; 
                            $this->db->select($sum_list_select);
                            foreach ($this->read_join_extended as $joinvalues) {
                                $this->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);  
                            }               
                        }
                    
                            
                        foreach ($this->list_items_where as $key => $value) {
                            if ($key == $uselist)
                            {
                                $db  = & $this->db  ;                   
                                
                                if ($this->list_items_extension($db,$uselist,$filter_data)===false)
                                    {
                                    $this->db->select($this->id_field_name);
                                    $where_array =$this->list_items_where[$uselist];  
                                    foreach ($where_array as $ekey => $evalue) {
                                        if (key_exists($ekey, $filter_data))
                                        {
                                        $this->db->where($evalue, $filter_data[$ekey]) ;
                                        //echo $evalue."=>".$filter_data[$ekey] ; 
                                        } 
                                    }
                                }
                            }
                        }
                        
                    }
                }       
                
                if (isset($this->list_items_order[$uselist] ))
                {
                foreach ($this->list_items_order[$uselist] as $okey => $ovalue) {
                    $this->db->order_by($okey,$ovalue) ;
                //echo $okey ."--". $ovalue;  
                }
                }
                            
                $result = $this->db->get();     
                foreach ( $result->result_array() as $row ) 
                {
                    $this_data = Array() ;
                     
                    foreach($column_collection as $key=>$value)
                    {
                        $this_data[$key] = $value ;
                    //  echo $key ;  
                    }
                    
                    //echo "<br/>;";
                    
                    foreach ($row as $key=>$value)
                        {
                            if (key_exists($key, $column_collection)) $this_data[$key] = $value ;
                        }
                        
                    $return_array[$row[$this->id_field_name]] =$this_data;
                }
            
                return $return_array;
        }
                        
        // i found out this strange behaviour it actially works for any first parameter
        // returns rtable , with the filters assigned in the list_items_where (option) 
        public function list_items_rtable($uselist = "",array $filter_data  , $use_extended=0,$view_name="default")
        {
        
            $newtable = new rTable();
        
            $column_collection = $this->list_views [$view_name];
            //print_r ($column_collection) ; 
            $edit_icon_index = $this->list_view_edit_icon[$view_name];
            
            $normal_select = $this->read_select_extended;
            $new_select = $normal_select ; 
        
            // this was replaced nov 20 2015 
            foreach ($this->business_data as $key => $value) {
                if (strpos("_".$key,"XCALCX_") == 0) 
                {            
                }
                else
                    {
                        
                        //$new_select = str_replace ( $new_select, ","$key, mixed $subject [, int &$count ] )   
                        // you need to remove the sum field from the selection
                        //echo $key."<hr/>NS1" ; 
                        //print_r($new_select);
                        //in the select string , our key is a value
                         
                        $sKey = array_search ( $key, $new_select);
                        //echo "sKey".$sKey."<hr/>"  ; 
                        
                        if ($sKey!="") { unset($new_select[$Key]);}     
                            $new_select [$key] = $this->agsums[$key]." AS ". $key ;
                        
                    }
            }
                
        
            $this->db->select($new_select);
    
            $this->db->from($this->table_name);
            foreach ($this->list_join as $joinvalues) {
                    $this->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);  
                }
    
            $ColIndexCounter = 0; 
            foreach ($column_collection as $key=>$value) {
                    $ColIndexCounter = $ColIndexCounter + 1 ;
                    if ($ColIndexCounter==$edit_icon_index)
                    {
                        $newtable->Addcol("edit_icon",".",rColumnType::ColTypeButton,10) ;
                    }  
                    $newtable->Addcol($key,$value,rColumnType::ColTypeText,30) ;                    
            }
        
 
            $this->more_config_cols ($newtable,$view_name); 
                        
            
            // ADDED 20131026
            //foreach ($filter_data as $n1_key=>$n1_value)
            //{
            //  $this->db->where($n1_key, $filter_data[$n1_key]) ;      
            //}
            
            // END ADDED 20131026
             
            
            // no need to touch -------------------------------------------------------------                                               
            if (key_exists($uselist, $this->list_items_where_fixed)){
                
                $db  = & $this->db  ;
                $this->db->where($this->list_items_where_fixed[$uselist] , NULL , false ) ;
            }
            
            foreach ($this->list_items_where as $key => $value) {
                        
                            if ($key == $uselist)
                            {
                                    
                                $db  = & $this->db  ;   
                                
                                if ($this->list_items_extension($db,$uselist,$filter_data)===false)
                                    {
                                    
                                    //$this->db->select($this->id_field_name);
                                    $where_array =$this->list_items_where[$uselist];  
                                    foreach ($where_array as $ekey => $evalue) {
                                        
                                        if (key_exists($ekey, $filter_data))
                                        {
                                            
                                            $do_protect = true ;
                                            $first_parameter = $evalue ;
                                            
                                            
                                            if (!strpos("_".$ekey, "from_date")===false)
                                                {
                                                    $first_parameter = $first_parameter  ." >=" ; 
                                                    
                                                } elseif (!strpos("_".$ekey, "to_date")===false)
                                                {
                                                    $first_parameter = $first_parameter  ." <" ; 
                                                }
                                                else    
                                                {
                                                    
                                                }  
                                            
                                        //  echo "<hr/>".$first_parameter ;     
                                            if (!(strpos( "_".$evalue , "|NOPROTECT|"  )==0))
                                            {
                                                $do_protect = false ;
                                                $first_parameter = substr($evalue, strlen("|NOPROTECT|")) ; 
                                            }
                                            
                                            
                                            if (strpos("_".$evalue,"XCALCX_") == 0) 
                                            {
                                                $this->db->where($first_parameter, $filter_data[$ekey],$do_protect) ;
                                                    
                                            }
                                            else 
                                            {
                                                $this->db->where($this->agsums[$first_parameter]."=". $filter_data[$ekey] ) ;
                                                                                        
                                            }
                                        
                                        //echo $evalue."=>".$filter_data[$ekey] ; 
                                        } 
                                    }
                                }
                            }
                        }

                        //-------------------------------------------------------------------------------
                        if (isset($this->list_items_order[$view_name] ))
                        {
                            foreach ($this->list_items_order[$view_name] as $okey => $ovalue) {
                            $this->db->order_by($okey,$ovalue) ;}
                        }
                        else
                        {
                            if (isset($this->list_items_order[$uselist] ))
                            {
                                foreach ($this->list_items_order[$uselist] as $okey => $ovalue) {
                                $this->db->order_by($okey,$ovalue) ; }
                            }                   
                        }
                        // Fetch data from db and build rows ,              
                        $result = $this->db->get();     
                        //$NewRow = rTableRow::CreateNew($newtable);
                        //$this->more_config_row($NewRow,null);
                        //echo $this->db->last_query();
                        
                        foreach ( $result->result_array() as $row )
                            {
                            $NewRow = rTableRow::CreateNew($newtable);
                            
                            foreach ($column_collection as $key => $value) {
                                //echo "<hr/>"; 
                                //ECHO $key ."....". $value ;
                                //print_r($row) ;  
                                if (key_exists($key, $row)) 
                                    {
                                    $NewRow->Cells[$key]->Value = $row[$key] ;
                                    }  
                            }

                            //configure row with using current data 
                            $this->more_config_row($NewRow,$row,$view_name);
                    
            }
                        
                return $newtable;       
            
        }


        //_______________________________________________________________________________________________
        // GHOST FUNCTIONS 
        // functions, can be found on driven / child classes when needed
        // if you have something to add in the driven class , make a funcion , and do what you need
        // those all are overriable functions, // by nature of php ,, ( i think )
        // to override ,  make a function in the sub class with the same stamp ; 
        //_______________________________________________________________________________________________
        
        
        public function list_items_extension($db,$use_list,$filter_data)
        {
            return false ; 
        }
        
        public function create_list($orderby="",$listoption="")
        {
            return $this->list_items_rtable("",array()) ; 
        }       
        
        public function read_pre_process()
        {
            
        }
            
        public function read_post_process()
        {
            // this is intended to allow calculation of fetch of more fields into the business_data array
            // called when reading only -- after actual reading from record and populating business data
            //   
            
        }   
    
        public function update_pre_process($new_record_flag)
        {
            // this allow some work before actually making the update , 
            // such as calculating fields , adjusting values , 
            // and not related to validations 
            
            //ECHO "this should be removed" ;
        }

        public function update_post_process($new_record_flag,$post_read)
        {
                
            // if $post_read===true ,, the reading  ( extended mode already done and the object is poplualted )
            // this allows to say , your word after process ..
            
            // if this returns true , a re-read should be carried out 
            // ECHO "this should be removed" ; 
        }
        
        /* further configure table columns */
        public function more_config_cols(rTable $irTable,$view_name="")
            {
                //$irTable->Cols["detail_amount"]->Type = rColumnType::ColTypeDecimal;  
                                
            }       
        
        /* further configure single table row */ 
        public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
        {
            //  $itable_row->Cells["edit_icon"]->URL = site_url('xxx'.$data_row[$this->id_field_name]) ; 
            
        }
        
        /* Validation Code , returns ? */ 
        public function validate(){
            $valid = true; 
            // if you think this not not valid
            // notice that the unique test is done by the code-igniter , validation rules 
            
            if ($valid==false)
            { 
                $this->success = false;
                $this->error_message= "Error Validating .. ";  
            }
            else {
                $this->success = true;
            }
        }
        
        public function basic_business_data($option="", array $param =array())
        {
            $suffix = "" ; 
            
            $basic_data=array(
                            $suffix."id"=>0
                            ,$suffix."date_create"=>date('Y-m-d H:i:s')
                            ,$suffix."date_update"=>date('Y-m-d H:i:s')
                            ,$suffix."id_person_create"=>0
                            ,$suffix."deleted"=>0
                            ,$suffix."title"=>""
                            ,$suffix."description"=>""
                            ,$suffix."is_active"=>0
                            );
            
            
            return $basic_data ; 
        }
        
        public function delete($object_id=0 )
        {
            
                 
            $delete_id = $object_id ; 
            if ($delete_id==0)
            {
                $delete_id = $this->ID();   
            }
            
            if ($this->delete_pre_process() != true) 
                {
                    if ($this->error_message=="") $this->error_message = "delete_pre_process Fail" ; 
                    return false ; 
                }
            if (!$this->delete_details($delete_id ))
                {
                $this->success = false;
                $this->error_message="error deleting details..." ; 
                return false ;
                }
                
            try
            {
                $this->db->where($this->id_field_name, $delete_id);
                $this->db->delete($this->table_name);
                $this->success = true;
                
                if ($this->delete_post_process($this->ID()) != true) 
                {
                    if ($this->error_message=="") $this->error_message = "delete_post_process Fail" ; 
                    return false ; 
                }
                
                $this_id = $this->ID();
                $this->clear() ; 
                
                if ($this->delete_post_process($this_id,true) != true) 
                {
                    if ($this->error_message=="") $this->error_message = "delete_post_process AClear Fail" ; 
                    return false ; 
                }
                 
                return true ; 
            }
            catch (Exception $e) {
                $this->success = false;
                $this->error_message =  'Caught exception: '.  $e->getMessage(). "\n";
                return false;  
            }
            
            
        }   
                
        public function delete_details($main_id)
        {
            
            return true ; 
        }
        
        public function delete_pre_process()
        {
            // this allow some work before actually making the update , 
            // such as calculating fields , adjusting values , 
            // and not related to validations 
            
            //ECHO "this should be removed" ;
            return true ; 
        }

        public function delete_post_process($record_id,$cleared = false)
        {
                
            // if $post_read===true ,, the reading  ( extended mode already done and the object is poplualted )
            // this allows to say , your word after process ..
            
            // if this returns true , a re-read should be carried out 
            // ECHO "this should be removed" ; 
            return true ; 
        }
        
        public function find($find_array,$find_types,$return_type="id" )
        {
            if ($return_type=="id")
            {
                $this->db->select($this->id_field_name) ;   
            }   
            
            foreach ($find_array as $key => $value) {
                $this->db->where ($key,$value); 
            }
            $result = $this->db->get($this->table_name) ;  
            
            foreach ( $result->result_array() as $row ) { return $row[$this->id_field_name] ; }         
            
            return 0 ; 
                        
            
        }
        
        function typeahead_list($fieldname="",$search_value = "" , $and_where = array() ) 
        {
                    
                $use_field_name = $fieldname ; 
                if ($use_field_name =="") $use_field_name = $this->name_field_name ; 
                $this->db->distinct();
                 $this->db->select($use_field_name);
                $this->db->from($this->table_name);
                $this->db->like($use_field_name, $search_value, 'after');  
                foreach ($and_where as $key => $value) {
                $this->db->where($value);     
                }
                $this->db->limit(10);
                $query = $this->db->get();
                $return_array = array() ; 
                foreach ( $query->result_array() as $row )
                        {   $return_array[] =  $row[$use_field_name] ; }
                return $return_array ;  
        }
}   


/* end of Simple Business Class code */