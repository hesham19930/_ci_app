<?php

	function r_lanxxgline($key,$section="") 
	{
		// assumes langfile loaded
		$CI =& get_instance();
		
		$lang_string = "" ; 
		//$skey =    $section.'.'.$key;
		//$lang_string =  $CI->lang->line($skey);
		
		//if ($lang_string =="")
	//	{
			$CI->lang->line($key);
	//	}
				
		if ($lang_string=="" ) // means not found or empty 
			{ $lang_string = $section.'.'.$key ;}
			
		elseif ($lang_string=="_" ) // this means skip it  
			{ $lang_string ="" ; } 
			
		return $lang_string ; 
	}
	
	function r_langcase($i_english_string,$i_arabic_string)
	{
			$CI =& get_instance(); 
			if ($CI->admin_public->DATA["system_lang"]=="english")
			{
				return $i_english_string ; 
			} else {
				return $i_arabic_string ; 
			}; 
	}

    function system_lang()
    {
          $CI =& get_instance(); 
          return $CI->admin_public->DATA["system_lang"] ; 
    }
		function oldr_langline($key,$section="") 
	{
		// assumes langfile loaded
		$CI =& get_instance(); 
		$lang_string =  $CI->lang->line($key);
		if ($lang_string=="" ) $lang_string = $section.'.'.$key ; 
		return $lang_string ; 
	}
	
	function r_langline($key,$section="") 
	{
		  
		// $key = strtolower($key);
		// assumes langfile loaded
		$CI =& get_instance(); 
		$lang_string="";
		
		// echo "SECTIONKEY".$section.$key. $CI->lang->line($section.$key )."<br/>"  ; 
		$lang_string =  $CI->lang->line($section.$key );
		
		if ($lang_string ==""){ $lang_string =  $CI->lang->line($key);	}
		
		if ($lang_string=="" ) // means not found or empty 
			{ $lang_string = $section.$key ;}
			
		elseif ($lang_string=="_" ) // this means skip it  
			{ $lang_string ="" ; } 
		
		//echo $lang_string."<hr/>" ; 	
		return $lang_string ; 
		
	}


?>