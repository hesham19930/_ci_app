<?php

	$this_concept = "schedule" ; 
	$this_controller = "clinic/".$this_concept."s";
	
	// BEGIN PAGE SETTINGS
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	$this->lang->load('clinic/'.$this_concept.'_main', $this->admin_public->DATA["system_lang"]);

	$read_only = 0 ;  			 	 

		// take the value from the previous form submit

	$item = $this_item ; 			
	$input_values = array() ; // this is our array 
					
	if (set_value("is_an_action") == "yes")
	{
		//echo "ACTION=yes" ;
		foreach ($item->business_data as $key => $value) 
		{
			$input_values[$key] = set_value($key) ;
		}	
	}
	else
	{
		foreach ($item->business_data as $key => $value) 
		{
			$input_values[$key] = $value ; 
		}
		
		if ($disable_edit) $read_only = 1 ; 
			r_theme_box_start(
				r_langline('edit_title',$this_concept.".form_data."),12,
					 		array("body_id"=>"edit_".$this_concept."_body",
									"box_id"=>"edit_".$this_concept."_box",
									"tools"=>"")
								);	
	}

	
?>
	<div class="controls-row">
	<div class="span12 m-wrap">
	<div class="tiles">
			
	<?php
	
	//-------------------to draw empty box--------------------
		
		for (  $x=1 ; $x <= ($start_day_number -1) ; $x++)
		{
	?>
			<div class="tile bg-gxrey">
				<a href="#" >
				<div class="tile-body"><i class="icon-uploxad"></i></div>
				<div class="tile-object">			
					<div class="big"  >       </div>
            
					<div class="number" style="color:grey;font-weight: normal;" >	<?php echo (weekdayname($x));  ?>   </div>
				</div>
				</a>
			</div>
	<?php
									
		}
	
	//---------------------to draw colored box with dates------------------	
	
		for (  $x=$start_day_number ; $x<= 29+$start_day_number ; $x++)
		{
			
						$today = date("Y-m-d") ; 
						$new_day = new DateTime($today);
						$y = $x-$start_day_number ; 
						$new_day->modify('+'.$y.' day');
						$new_day = $new_day->format('Y-m-d');
                        
                        if (array_key_exists($new_day,$reservation))
                        { $color='bg-green'; } else {$color='bg-yellow';} 
                        
                        $the_url = "#" ; 
                        if ($view_type=="patient_master")
                        {
                        $the_url = site_url('clinic/visits/ajax_edit/0/'.$patient_id.'/'.$new_day); 
                        $book_url =$the_url; 
                        }
                        if ($view_type=="assistant_master")
                        {
                        $the_url = site_url('clinic/visits/ajax_table/0/'.$patient_id.'/'.$new_day.'/day_visits'); 
                        $book_url = site_url('clinic/visits/full_new_visit/'.$new_day.'');
                        }
                        
	?>
			<div class="tile <?php echo $color ; ?> ajax_action "
			            caller_verb="click" 
				        caller_id="calendar_day" 
				        caller_url="<?php echo $the_url ;  ?>"  
				        caller_target=""
			>
			<?php //echo "xxx".$view_type ; ?> 
			<div  class="tile-body"
				>
				<?php 
				    $wd = intval($x   -  ( 7 * intval($x/7)) ); 
				     ////if ($wd==0) $wd = 7 ;   
                    //    echo $wd ; 
						echo weekdayname($wd,1) . ' <br/>' . $new_day; 
				?></div>
			<div class="tile-object">
				
				<div class="name ajax_action small btn " style="background-color:#FFF;color:black;"
				        caller_verb="book" 
                        caller_id="calendar_day" 
                        caller_url="<?php echo $book_url  ;  ?>"  
                        caller_target=""
				>New</div> 
				<div class="number" 
				  >
					<?php 
					if (array_key_exists($new_day,$reservation))
					{
						if ($reservation[$new_day] != '0' ) echo $reservation[$new_day] ;
					}
					else
					{
						echo "";
					}
					//echo $reservation[$x - $start_day_number+1] ;
					?>
				</div>
			</div>
			</a>
			</div>
	<?php
	
		if (($x/7) == intval($x/7))
		{
			echo '</div></div></div> <div class="controls-row"><div class="span12 m-wrap"><div class="tiles">' ; 
			
		}
		}
		
	?>


</div></div></div></div>
<?php
/*
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		
		$lang_section =$this_concept.".form_data.";  
			
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
				
		r_theme_endform();
	 
		r_theme_box_end();	
*/					
		?>