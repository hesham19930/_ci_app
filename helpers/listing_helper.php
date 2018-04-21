<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
// ------------------------------------------------------------------------

/**
 * Theme Helper to Be Modified with Each Theme Used in the Application , 
 * Provides for layout and Style & drawing functions needed ,
 *  
 * By Anwar El-Sherif Date 12 OCT 2012   
 */ 
 
 function run_jasper_report($reportpath,array $reportcontrols= array() , $reporttype  , $reportname , $downlaodfile = false)
{
		

if ($reporttype == "pdf")
    {$filename = $reportname . ".pdf" ;}

$c = new Jaspersoft\Client\Client('http://localhost:8081/jasperserver','jasperadmin','jasperadmin','','Organization_1'); 
$c->setRequestTimeout(60); 
$info = $c->serverInfo();
$controls = $reportcontrols ; 
$report = $c->reportService()->runReport('/reports/'.$reportpath, $reporttype , null , null , $controls);


if ($reporttype == "pdf")
{
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Description: File Transfer');



if ($downlaodfile === false)
   {header('Content-Disposition: inline; filename=' . $filename);}
else 
   {header('Content-Disposition: attachment; filename=' . $filename);}
   	 
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . strlen($report));
//header("Content-Type: application/force-download");
header('Content-Type: application/pdf');
}

echo $report;

} ; 

 
 
 function hr($just_echo = 0 ) 
 {
 	if ($just_echo == 1)
	{
		echo "<hr/>" ; 
	}
	return "<hr/>" ; 
	
 } ; 
 function br($just_echo = 0 ) 
 {
 	if ($just_echo == 1)
	{
		echo "<br/>" ; 
	}
	return "<br/>" ; 
	
 }
 function wrap_this($string)
 {
 
 	return wordwrap($string,get_value("wrap_count"),"<br>\n");
 }
 function get_value($key)
 {
 		
 		$settings = array ();
		$settings["wrap_count"] = 50 ; 
			
		if (key_exists($key, $settings))
		{
			return $settings[$key];
		}
		else
		{
				return 0;
		}
		
 }
 function convert_number_to_words($number) {
    
    $hyphen      = ' ' ; // '-';
    $conjunction = ' ' ; // ' and ';
    $separator   = ' ' ; //  ', ';
    $negative    = 'negative ';
    $decimal     = ' & ' ; ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );
    
    if (!is_numeric($number)) {
        return false;
    }
    
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
    
    $string = $fraction = null;
    
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

  
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal . $fraction. "/100 " ;
        $words = array();
      //  foreach (str_split((string) $fraction) as $number) {
          //  $words[] = $dictionary[$number];
        //}
       // $string .= implode(' ', $words);
    }
    
    return $string;
	
    }

  function loadView($view,$data = null){
    $CI = get_instance();
    return $CI->load->view($view,$data,True);
}
  
 
 	function query_to_rtable($query)
	{
			$newtable = new rTable();
					
						$fld_list = $query->list_fields() ; 
						
						foreach ($fld_list as $value)
							{
							 
							$newtable->Addcol($value,$value,rColumnType::ColTypeText,30) ;				 	
							}
							
						foreach ( $query->result_array() as $row )
							{
					
							$NewRow = rTableRow::CreateNew($newtable);
							foreach ($fld_list as $value){
								$NewRow->Cells[$value]->Value = $row[$value] ;
							//	echo "ROW:".$row[$value] ; 
							
							}
							}
				return $newtable		;
						 
	}
 	function db_return_array($sql)
	{
		$values = array() ; 
		$CI =& get_instance();
		$query = $CI->db->query($sql) ; 
		foreach ( $query->result_array() as $row )
						{
							foreach ($row as $key => $value) {
								$values[$key] = $value ; 
							}
							break;  }
		return $values; 
	}
	
	function db_return_value($sql)
	{
		$value_to_return ="" ; 
		$CI =& get_instance();
		$query = $CI->db->query($sql) ; 
		foreach ( $query->result_array() as $row )
						{
							foreach ($row as $key => $value) {
								$value_to_return = $value ; 
								break;
							}
							break;  }
		return $value_to_return; 
	}
	
 	function sysDATA($key)
	{
		$CI =& get_instance();
		if (key_exists($key, $CI->admin_public->DATA))
		{
		return $CI->admin_public->DATA[$key] ;
		}
		else
		{ return "" ; }
		 
	}
	
	function select_html($iValue,$iData)
	{
			$my_string = "" ; 
			//echo "<SELECT>" ; 
			$my_string = $my_string .  "<option  value=''></option> ";
			foreach ($iData as $key => $item) {
				$my_string = $my_string . "<option value='" . $key . "' ";
				if ($iValue == $key) { $my_string = $my_string . " SELECTED " ;};
				$my_string = $my_string . "> " . $item . "</option>";
		
			}
			//echo "</SELECT>" ; 
			//echo "<textarea>".$my_string."</textarea>" ;  
			return $my_string ; 
			
	}
		
if ( ! function_exists('r_listbox_items'))
{
	function r_listbox_items($ClassName,$iListName,array $filter_data = array(),$use_extended_select=false)
		{
			$CI =& get_instance();
			$CI->load->model($ClassName);
			$newObject = new $ClassName;
			 
			$Items = Array();
			

				// first option to test , override sql , with parameters inside 
				// like select * from x where parmane=?parvalue
				 //echo $iListName; 
				if (($iListName !="") && ( key_exists(  $iListName,$newObject->simple_list_override_sql)))
				{
					// this block actually works , so do not question it , it does , just make the required settings 
						
					$query = $newObject->simple_list_override_sql[$iListName] ;
					//replace parameters
					//echo $query ;  
					if (key_exists($iListName, $newObject->list_items_where))
					{
					    if (!$newObject->list_items_extension($CI->db,$iListName,$filter_data)) 
						{
						$where_array =$newObject->list_items_where[$iListName];  
						foreach ($where_array as $ekey => $evalue) {
							$query  = str_replace('?'.$evalue,$filter_data[$evalue],$query);
						}
                        }
					}
					
					
					
					
					echo $query ;
					$result= $CI->db->query($query);	
					
				foreach ( $result->result_array() as $row)
				{
					//	echo $newObject->name_field_name."<br/>";
					//	print_r($row);
					//	print $newObject->id_field_name; 
					//	print $row->ID ; 
					//print_r($row);
					
					$first_field_name  =""; 
					$second_field_name="" ;
					
					foreach ($row as $rkey => $rvalue) {
						if ($first_field_name=="") 
							{
								$first_field_name =$rkey;
							}
						else {
							$second_field_name = $rkey;
						}
					}
					
					$Items[$row[$second_field_name]] =  $row[$first_field_name];
				}
						
				}
				else
				{
					// second option ,, check the select array , and then the where array 
					if (($iListName !="") && ( key_exists(  $iListName,$newObject->simple_list_select)))
					{
								$CI->db->select($newObject->simple_list_select[$iListName]) ; 
								$CI->db->from($newObject->table_name) ;
					
								if (key_exists($iListName, $newObject->list_items_where))
								{
								        if (!$newObject->list_items_extension($CI->db,$iListName,$filter_data)) 
                                            {
        									$where_array =$newObject->list_items_where[$iListName];
        									foreach ($where_array as $ekey => $evalue) {
        									$CI->db->where($evalue, $filter_data[$evalue]) ; 
                                            }
									       }
								}	
								
								if (key_exists($iListName, $newObject->list_items_where_fixed))
								{
										$CI->db->where($newObject->list_items_where_fixed[$iListName], NULL, FALSE) ;
								}		
								
								$result= $CI->db->get();
					}
					else {
						
						if ($use_extended_select == true )
						{
							$CI->db->select($newObject->list_select);
							$CI->db->from($newObject->table_name);
							foreach ($newObject->list_join as $joinvalues) {
									$CI->db->join($joinvalues[1],$joinvalues[2],$joinvalues[3]);	
								}	
						}
						else 
						{						
							// this block was also tested ,, 
							$CI->db->select(array($newObject->name_field_name,$newObject->id_field_name)) ; 
							$CI->db->from($newObject->table_name) ;
						}
						
						if (key_exists($iListName, $newObject->list_items_where))
							{
							       if (!$newObject->list_items_extension($CI->db,$iListName,$filter_data)) 
                                            {
								$where_array =$newObject->list_items_where[$iListName];
								foreach ($where_array as $ekey => $evalue) {
								$CI->db->where($evalue, $filter_data[$evalue]) ; }}
							} 	
								
						if (key_exists($iListName, $newObject->list_items_where_fixed))
							{
								$CI->db->where($newObject->list_items_where_fixed[$iListName], NULL, FALSE) ;
							}	
						
						
						if (isset($newObject->list_items_order[$iListName] ))
							{
								foreach ($newObject->list_items_order[$iListName] as $okey => $ovalue) {
								$CI->db->order_by($okey,$ovalue) ; }
							}	
							
				//		$sql = $CI->db->get_compiled_select();
//echo $sql;
						$result= $CI->db->get();
					
					}
					
				foreach ( $result->result_array() as $row)
				{
					//	echo $newObject->name_field_name."<br/>";
					//	print_r($row);
					//	print $newObject->id_field_name; 
					//	print $row->ID ; 
					//print_r($row);
					$Items[$row[$newObject->id_field_name]] =  $row[$newObject->name_field_name];					
				}
				
				}
				
			
				
				/* 
				$result = $iMySQLi->query($query);
			 	while ($row = $result->fetch_array(MYSQLI_NUM)) {
			 			$Items[$row[1]] = $row[0];
				}
				*/	
				
				return $Items; 
		}
}

function to_list_box_items($this_array_of_keys)
{
	$to_return = array() ; 
	foreach ($this_array_of_keys as $key => $value) {
		$to_return[$key]	= $key ; 
	}
	
	return $to_return ; 
}
function iif($condition, $true, $false ) {
    return ($condition ? $true : $false);
}

 function calc_diff ($fieldtype , $fistoperand , $secondoperand)
	{
	
	        if ($fieldtype == "Date")
			{
					
				
				$var1=date_create($fistoperand);
	        	$var2=date_create($secondoperand);
	            $diff=date_diff($var2,$var1);
	            //echo intval($diff->format("%R%a "));	
			    return intval($diff->format("%R%a "));
			}
			
			if ($fieldtype == "Time")
			{
					
				$time1 = strtotime($fistoperand);
                $time2 = strtotime($secondoperand);
                $diff = round(abs($time2 - $time1) / 3600,2);	
				
	            //echo $diff;	
			    return $diff;
			}
			
			if ($fieldtype == "Number")
			{
				return $secondoperand - $fistoperand ; 
			}		
	}
	
	
 function get_chr_position ($reqstr , $reqchr)
	 {
	 	for($i = 0; $i < strlen($reqstr); $i++) {
	       if (substr($reqstr , $i , 1) == $reqchr)
	          {return $i ; }
	
         }	
		return false ; 	
	 }
		

  function validate_obligatory ($servicedescriptorarray )
	 {
			
	 	
	 		
		foreach ($servicedescriptorarray as $key => $value) {
						
			if ($value["IS_OBLIGATORY"] == 1)
			{
				$fieldname = $value["FIELD_NAME"] ; 
				
				if ($value["TSD_FIELD_VALUE_NUMBER"] == "" && $value["TSD_FIELD_VALUE_STRING"] == "" && $value["TSD_FIELD_VALUE_DATE"] == "" )
				  {return $fieldname . " Is Required" ; }
				  
			}
		}	
			
	 	
	 	
	 	
	 	return True ; 
	 }	 
    

 function updata_service_descriptor_array ($servicedescriptorarray , $postarray   )
	 {
			
	 	
	 		
		foreach ($servicedescriptorarray as $key => $value) {
				
			$fieldname = $value["FIELD_NAME"] ; 
			
			if (array_key_exists($fieldname, $postarray))
			   {
			   	
				 
			   	switch ($value["SD_FIELD_TYPE_ID"]) 
				 {
						
						case 1: ;
						    $servicedescriptorarray[$key]["TSD_FIELD_VALUE_STRING"]  =$postarray[$fieldname] ; 
						    break ; 
						case 3: ;
						case 4: ; 
						case 5: ; 
						case 8: ; 
						    $servicedescriptorarray[$key]["TSD_FIELD_VALUE_NUMBER"]  =$postarray[$fieldname] ; 
						    break ; 
						case 2: ;
						case 6: ;
						case 9: ;
					        $servicedescriptorarray[$key]["TSD_FIELD_VALUE_DATE"]  =$postarray[$fieldname] ; 
						    break ;
						
				}
			}
				
			
		}	
			
	 	
	 	
	 	
	 	return $servicedescriptorarray ; 
	 }	
	 
	 
	 
  function get_array_element_value ($reqarray , $element , $service_id , $fieldtypearray)
	{
		
		
					  
							  
		foreach ($reqarray as  $value) {
				
			 	
			
			if (strtoupper($value["TSD_FIELD_NAME"]) == strtoupper($element))
			{
				
				   
				if ($value["TSD_FIELD_VALUE_NUMBER"] != "")
				  {$tt["value"] = $value["TSD_FIELD_VALUE_NUMBER"] ;
				   
				  }
				if ($value["TSD_FIELD_VALUE_DATE"] != "")
				  {$tt["value"] = $value["TSD_FIELD_VALUE_DATE"] ;
				  
				 }  
				if ($value["TSD_FIELD_VALUE_STRING"] != "")
				  {$tt["value"] = $value["TSD_FIELD_VALUE_STRING"] ; 
				   
				  } 
				  
				  
			   	
				  
				
				$fieldtype = $fieldtypearray[0]["SD_FIELD_TYPE_ID"] ; 
				
				switch ($fieldtype) 
					    {
						
						case 1: ;
						case 3: ;
						case 4: ; 
						    $tt["type"]  = "Number" ; 
						    break ; 
						case 2: ;
					        $tt["type"]  = "Date" ; 
						    break ;
						
						case 6: ;
					        $tt["type"]  = "Time" ; 
						    break ;	
						
					    }
				
				
				
				
				  
				Return $tt ;  }
		}
	}
     	 
function currency_rate ($currency_id , $local_currency_id  , $current_date , $branch_id )
{
	if ($currency_id ==$local_currency_id)	
	  {$date_rate = 1 ;} 	
	else {$date_rate = 1 ;} 	
	return $date_rate  ; 
}

function r_resolve_parameter($i_string,$i_options = array()) 
{
	
	if ($i_string =="") return array() ; 
	
	$collection  = explode('~~', $i_string) ;
//	print_r($collection) ; 
	$sub_collection =array() ;
	$final_collection  = array () ;
	   
	foreach ($collection as $value) {
		$sub_collection = explode(':',$value);
		if (count($sub_collection)  == 2)
		{
			$final_collection[$sub_collection[0]] =$sub_collection[1]  ; 
		}
		else {
			$final_collection[] = $sub_collection[0] ; 
		}
	}
	return $final_collection ; 
	
}

function orcl_to_date($date)
{
	
	return  "to_date('$date','yyyy-mm-dd')";
	
}

function orcl_to_time($time)
{
	return "to_date('$time','yyyy-mm-dd HH24:MI')";
}
function orcl_time()
{
	$iNow = date('Y-m-d H:i') ; 
	return  "to_date('$iNow','yyyy-mm-dd HH24:MI')";					
}
function orcl_date()
{
	$date = date('Y-m-d') ;
	return  "to_date('$date','yyyy-mm-dd')"; 
}




function weekdayname ($daynumber , $startday =1 , $lang = ''  )
{
        $use_lang = $lang ; 
        if ($use_lang=='')   $use_lang = system_lang() ;
        
   
        
        $dayof['en'][1] = "Sat" ;
        $dayof['en'][2] = "Sun" ;
        $dayof['en'][3] = "Mon" ;
        $dayof['en'][4] = "Tue" ;
        $dayof['en'][5] = "Wed" ;
        $dayof['en'][6] = "Thu" ;
        $dayof['en'][7] = "Fri" ;
        
        $dayof['ar'][1] = "السبت" ;
        $dayof['ar'][2] = "الاحد" ;
        $dayof['ar'][3] = "الاثنين" ;
        $dayof['ar'][4] = "الثلاثاء" ;
        $dayof['ar'][5] = "الاريعاء" ;
        $dayof['ar'][6] = "الخميس" ;
        $dayof['ar'][7] = "الجمعة" ;
        
        
        
        $dd = $daynumber + $startday - 1;
        
        if ($dd > 7 ) $dd = $dd - 7 ; 
        
        if ($dd<=0) $dd  = $dd + 7 ;
         
        if ($use_lang=='english')
        {
            return $dayof['en'][$dd ];
        } 
else {
            return $dayof['ar'][$dd ];
      }
}     
         
/* End of file listing_helper.php */
/* Location: ./application/helpers/listing_helper.php */