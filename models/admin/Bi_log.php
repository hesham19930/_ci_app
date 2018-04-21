<?php

    
Class bi_log 
    {
    
        
     public  $log_all = true ; 
     public $log_to_file = "" ; 
    /* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
    function __construct() {
        
           $tz_object = new DateTimeZone('Etc/GMT+2');
                    $datetime = new DateTime();
                    $datetime->setTimezone($tz_object);
                    $this->log_to_file = '_LOG_'.$datetime->format('Y_m_d_h_i_s').".HTML" ; 
            }
    
    
    function start($file_name="")
    {
        
                    $tz_object = new DateTimeZone('Etc/GMT+2');
                    $datetime = new DateTime();
                    $datetime->setTimezone($tz_object);
                    
                    $this->log_to_file =$file_name .  '_LOG_'.$datetime->format('Y_m_d_h_i_s').".HTML" ;
                    $message = "STARTING ". $file_name. " @ " . $datetime->format('Y_m_d h:i:s')   ;
                     
                    file_put_contents($this->log_to_file, $message  , FILE_APPEND | LOCK_EX);
                    
                    $message = "<table border=1 width=100% >"  ;
                    file_put_contents($this->log_to_file, $message  , FILE_APPEND | LOCK_EX);
              
    }
    /* config & clear business_data  Array of the object */ 
    
    public function logthis($Message = " " , $to_file  = 0 , $to_echo  = 0 , $to_db = 0  , $hr = 0 ){
            
            
            if ($this->log_all == false ) return ; 
            
            
            $tz_object = new DateTimeZone('Etc/GMT+3');
            $datetime = new DateTime();
            $datetime->setTimezone($tz_object);
                    
                    
            if (is_array($Message))
            {
                echo "<br>". $datetime->format('Y_m_d h:i:s') . " |   ARRAY" ;
                
                //$array = array('lastname', 'email', 'phone');
                //$comma_separated = implode(",", $array);
                //echo "<br/>".$comma_separated ; 
                                
                 foreach ($Message as $key => $value) {
                            if (is_array($value))
                            {
                                    echo "<br/>" ; 
                                    var_dump($value)  ; 
                            }
                            else
                            {
                                    echo "<br>".  $value  ; 
                            }
                }   
                 
                 
            }
            else 
            {
            if ($to_file ==1)
            {
                        $file =   $this->log_to_file ; 
                        $person = "<tr><td width=1% nowrap >". $datetime->format('Y_m_d h:i:s') . "  | " ."</td><td>". $Message ."</td></tr>"; 
                        //$person = str_replace("<br/>", "\n", $person);
                    //  $person = str_replace("<hr/>", "\n", $person);
                    //  $person = str_replace("<br>", "\n", $person);
                        
                        file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
            
            }
            
            if ($to_echo ==1)
            {
                    echo "<br>". $datetime->format('Y_m_d h:i:s')." |                            ". $Message  ; 
                    if ($hr == 1 ) echo "<hr/>" ; 
            }
            }
    }
    }
    