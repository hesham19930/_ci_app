<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
// ------------------------------------------------------------------------

/**
 * Theme Helper to Be Modified with Each Theme Used in the Application ,
 * Provides for layout and Style & drawing functions needed ,
 *
 * By Anwar El-Sherif Date 12 OCT 2012
 */

 	//const  cImagetype_icon = 1 ;
	//const  cImagetype_smallicon = 2 ;
	//const  cImagetype_data = 9 ;


	function r_theme_config($config_option,$key="")
	{

		$theme_config["icon_path"] = "metronic_ar\assets\img" ;

		if (key_exists($config_option, $theme_config))
		{
			if ($key=="")
				{
					return $theme_config[$config_option];
				}
			else {
				if (key_exists($config_option, $theme_config[$config_option]))
				{
					return $theme_config[$config_option][$key];
				}

			}
		}

		return "" ;
	}

/* DRAW MENU ****************************************************************************** */

if ( ! function_exists('r_theme_draw_menu'))
{
	function r_theme_draw_menu($mainmenu, $menutype= 'master',$active_key='')
	{
		r_theme_draw_top_menu ($mainmenu,$menutype,$active_key) ;
	}
}

if ( ! function_exists('r_theme_draw_side_menu'))
{
	function r_theme_draw_side_menu($mainmenu, $menutype= 'master',$active_key='')
	{


		// 'start by searching for subitems under no parent ; then drill down , 3 levels max//
		// 0 Menu Text
		// 1 Menu URL
		// 2 Menu Parent Key
		// 3 Icon
		// 4 Descriptionadd_32.png
		$CI =& get_instance();
		$CI->lang->load("config/admin_side_menu",$CI->admin_public->DATA["system_lang"]);

		$first_topmenu = TRUE ;
		$SecondLevelMenuExist = false;  $ThirdLevelMenuExist = false;

		foreach ($mainmenu as $key=>$firstlevel) {
			if (key_exists("enabled", $firstlevel))
			{
				if ($firstlevel["enabled"]==false)
				{
					continue;
				}
			}
			if ($firstlevel[2]=="")
			{
				$firstlevelkey = $key ;

				echo '<li class="main_font tooltips';
				echo ' data-placement="right" data-original-title="'.$firstlevel[4].'" ' ;
				if ($first_topmenu) {
					echo ' first ';
					$first_topmenu = FALSE ;
				}
			$this_top_active = FALSE ;
			if (key_exists($active_key, $mainmenu))
				{
					if ($mainmenu[$active_key][2] ==$firstlevelkey)
					{
							$this_top_active = TRUE  ;
					}
					else {
						if ($active_key==$firstlevelkey )
						{
							$this_top_active = TRUE ;
						}
						else {
							$this_top_active = FALSE ;
						}
					}
				}

				if ($this_top_active) echo ' active ';
				echo '">';
				echo '<a href="javascript:;">'.'<i class="icon-cogs"></i><span class="title">'.r_langline($firstlevel[0]).'</span>';
				if ($this_top_active )
					{
					echo '<span class="selected "></span><span class="arrow open"></span>';
					}
				else {
					echo '<span class="arrow "></span>' ;
				}
				echo '</a>';
				//echo '<ul>';
				foreach ($mainmenu as $key=>$secondlevel) {
						if ($secondlevel[2]==$firstlevelkey)
						{
							if (key_exists("enabled", $secondlevel))
							{
								if ($secondlevel["enabled"]==false)
								{
									continue;
								}
							}

							if ($SecondLevelMenuExist == false)
							{
								echo '<ul class="sub-menu">';
								$SecondLevelMenuExist = true;
							}
							$secondlevelkey = $key;
							echo '<li ';
							echo ' class="tooltips xmain_font" data-placement="right" data-original-title="Tool&nbsp;Tip&nbsp;For&nbsp;Upper&nbsp;Menu"  ' ;
							if ($active_key==$secondlevelkey )  echo ' xclass="active" ';
							echo ' ><a ';
						//	echo ' class="tooltips main_font" data-placement="right" data-original-title="Tool&nbsp;Tip&nbsp;For&nbsp;Upper&nbsp;Menu"  ' ;
							echo ' href="'.site_url($secondlevel[1]).'">'.r_langline($secondlevel[0]).'</a>';
							echo '</li>';
						}
				}
				if ($SecondLevelMenuExist == true)
							{
								echo '</ul>';
								$SecondLevelMenuExist = false;
							}
				echo '</li>';
			}

		}

		return FALSE;
	}
}

if ( ! function_exists('r_theme_draw_top_menu'))
{
	function r_theme_draw_top_menu($mainmenu, $menutype= 'master',$active_key='')
	{


		 $CI =& get_instance();
		$CI->lang->load("config/admin_top_menu",$CI->admin_public->DATA["system_lang"]);


		// 'start by searching for subitems under no parent ; then drill down , 3 levels max//
		// 0 Menu Text
		// 1 Menu URL
		// 2 Menu Parent Key
		// 3 Icon
		// 4 Descriptionadd_32.png

		$first_topmenu = TRUE ;
		$SecondLevelMenuExist = false;  $ThirdLevelMenuExist = false;


		foreach ($mainmenu as $key=>$firstlevel) {
			if (key_exists("enabled", $firstlevel))
			{
				if ($firstlevel["enabled"]==false)
				{
					continue;
				}
			}

			if ($firstlevel[2]=="")
			{
				$firstlevelkey = $key ;

				echo '<li' ;
				//echo ' class="tooltips master_font" data-placement="right" data-original-title="'.$firstlevel[4].'" ' ;

			$this_top_active = FALSE ;
			if (key_exists($active_key, $mainmenu))
				{
					if ($mainmenu[$active_key][2] ==$firstlevelkey)
					{
							$this_top_active = TRUE  ;
					}
					else {
						if ($active_key==$firstlevelkey )
						{
							$this_top_active = TRUE ;
						}
						else {
							$this_top_active = FALSE ;
						}
					}
				}

				if ($this_top_active ) echo ' class="active" ' ;
				echo '>' ;
				echo '<a data-hover="dropdown" data-close-others="true" href="'.site_url($firstlevel[1]).'" >
						'  ;

				echo '<i class="icon-cogs"></i>
					<span  class="master_font" >'.r_langline($firstlevel[0]).' </span>';
				if ($this_top_active )
					{
					echo '<span class="arrow"></span><span class="selected "><span>';
					}
				else {
					echo '<span class="arrow "></span>' ;
				}

				echo '</a>
				' ;
				foreach ($mainmenu as $key=>$secondlevel) {
						if ($secondlevel[2]==$firstlevelkey)
						{
							if (key_exists("enabled", $secondlevel))
							{
								if ($secondlevel["enabled"]==false)
								{
									continue;
								}
							}

							if ($SecondLevelMenuExist == false)
							{
								echo '<ul class="dropdown-menu">
								';
								$SecondLevelMenuExist = true;
							}
							$secondlevelkey = $key;
							echo '<li ';
							echo ' class="tooltips master_font" data-placement="right" dzzzzzata-original-title="'.$secondlevel[4].'" ' ;
							if ($active_key==$secondlevelkey )  echo ' cxlass="active" ';
							echo ' >
							<a href="'.site_url($secondlevel[1]).'">'.r_langline($secondlevel[0]).'</a>';
							echo '</li>
							';
						}
				}
				if ($SecondLevelMenuExist == true)
							{
								echo '</ul>
								';
								echo '<b class="caret-out"></b>
								' ;
								$SecondLevelMenuExist = false;
							}
				echo '</li>
				';
			}

		}

		return FALSE;
	}
}

/* END DRAW MENU ****************************************************************************** */


if ( ! function_exists('r_theme_startform'))
{
	function r_theme_startform($iFormName, $iFormID, $iFormAction, $iFormMethod = "post") {

		echo '	<div class="form" >
		<form action="' . $iFormAction . '" class="form-horizontal"
		name="' . $iFormName . '" ' . 'id="' . $iFormID . '" method="' . $iFormMethod . '" >';

	}
}

function r_theme_endform($submit_text="") {

		echo '</form>
		</div>' ;


	}


if ( ! function_exists('r_theme_message'))
{
	function r_theme_message($iStyle,$iTitle,$iMessage , $iWithBox=0,$iBoxTitle="",$id="")
	{
		if ($iWithBox==1)
		{
			echo '<br />';
			echo '<section ixd="container" class="container_12">';
			echo '<section class="grid_12">';
			echo '<div class="box" id="'.$id.'" >';
			echo '<div class="title"><div class="layout">';
			echo $iBoxTitle;
			echo '</div></div>';

		}

		echo '<div class="inside">	<div class="in">';

		switch ($iStyle)
		{
			case "error":
				echo '<div class="btn red" style="color:white;font-size:14pt;" >';
					echo '<i class="icon-exclamation-sign bixg"></i>' ;
  				break;
			case "success":
				echo '<div class="alert succes_msg ">';
  				break;
			case "info":
				echo '<div class="alert info_msg ">';
  				break;
			case "saved":
				echo '<div class="alert saved_msg ">';
  				break;
			case "exclamation":
				echo '<div class="alert exclamation_msg ">';
  				break;

			default:
				echo '<div class="alert info_msg ">';

		}

		echo '<strong>'.$iTitle.'</strong> : ';
		echo $iMessage.'</div>';
		echo "</div><br/></div>";

		if ($iWithBox==1)
		{
			echo '			</div></section></section>';
		}

	}
}

function say_no_records ($message="")
{
    $message_2 = "" ; 
        if ($message=="") $message = r_langline("No Records Found !!");
     if ($message=="") $message_2 =  date("D M d, Y G:i:s"); 
    ?>
    <div class="alert alert-info">
 <strong>Info!</strong> <?php echo $message. " ". $message_2   ; ?> 
    </div>
       <?
    }
       
                                
function say_this($message,$title="")
{
  ?>
  <div class="alert alert-block alert-warning fade in">
                                      <button type="button" class="close" data-dismiss="alert"></button>
                                      <h4 class="alert-heading" style="color:red;"><?php echo $title ; ?></h4>
                                      <p  style="color:black;font-size:1.1em;"><i class=" icon-eye-close big red"></i>
                                          <?php echo $message  ; ?>
                                      </p>

                                      <p>
                                          <!--<a class="btn red" href="#">Do this</a> <a class="btn blue" href="#">Or do this</a>-->
                                      </p>
                                  </div>
                                  <?php

   return true;
}

function say_no_access($access_component_name="",$access_verb="")
{
  ?>
  <div class="alert alert-block alert-warning fade in">
                                      <button type="button" class="close" data-dismiss="alert"></button>
                                      <h4 class="alert-heading" style="color:red;"><?php echo r_langline("Sorry! No Access") ; ?></h4>
                                      <p  style="color:black;font-size:1.1em;"><i class=" icon-eye-close big red"></i>
                                          <?php echo r_langline(" I am afraid you have no access to this information ") ; ?>
                                      </p>
                                      <?php

                                      if ($access_component_name!="")
                                      {
                                          echo '</p> - ' . $access_component_name . '</p>';
                                      }
                                      if ($access_verb!="")
                                      {
                                          echo '</p> - ' . $access_verb . '</p>';
                                      }
                                          echo '</p> - ' .strtolower(sysDATA("user_group_name")). '</p>';
                                      ?>
                                      <p>
                                          <!--<a class="btn red" href="#">Do this</a> <a class="btn blue" href="#">Or do this</a>-->
                                      </p>
                                  </div>
                                  <?php

   return true;
}
if ( ! function_exists('r_theme_draw_table'))
{
	function r_theme_draw_table( rTable $iTable ,array $i_options=array(),$i_table_id="datatable_1",array $i_line_vers=array(),$split_buttons =0,$total_these =array()
		,$header_html = ""
	) {
			//ECHO "YA SALAM";
		//echo "ROWCOUNT:".count($iTable->Rows);

		$add_class="" ;
		$add_checkboxes = false ;
		$add_verbs = false ;
		$page_rows = 20;
		$header_color = "blue" ;
		$bottom_row = false ;


		$hide_detail = false ;

        $show_all_details = false ;

         if (key_exists("show_all_details", $i_options))
            { $show_all_details = $i_options["show_all_details"] ; }

		if (key_exists("page_rows", $i_options))
			{ $page_rows = $i_options["page_rows"] ; }
		if (key_exists("class", $i_options))
			{ $add_class = $i_options["class"] ; }
		if (key_exists("checkboxes", $i_options))
			{ if ($i_options["checkboxes"]===true) $add_checkboxes = true ; }
		if (key_exists("show_verbs", $i_options))
			{ if ($i_options["show_verbs"]===true) $add_verbs = true ; }
		if (key_exists("header_color", $i_options))
			{ $header_color =$i_options["header_color"] ;  }

		if (key_exists("bottom_row", $i_options))
			{ $bottom_row =$i_options["bottom_row"] ;  }
		$hscroll = "false" ;
		if (key_exists("hscroll", $i_options))
			$hscroll = 'hscroll="'.$i_options["hscroll"].'"' ;

		$noheader = false ;
		if (key_exists("noheader", $i_options))
			$noheader = $i_options["noheader"] ;


		$enable_search ="";
		if (key_exists("enable_search", $i_options))
			$enable_search = 'enable_search="'.$i_options["enable_search"].'"' ;

		$managed = "" ;
		$th_add ="";
		if (strpos($i_table_id, 'atatable_')!=0) { $managed = "managed" ; }
		if (strpos("_".$add_class, 'autodatatable')!=0) { $th_add=" . " ; }


		foreach ($iTable->Cols as $key => $Col) {
				if ($Col->Header==".")
				{
				//	echo 	$Col->Header ;
						$Col->Header="|hide|" ;
			//				echo 	$Col->Header ;
							//$iTable->Cols[$key] =
				//			echo ",,,," ;
			}
		}

		echo '<table align=center
		class=" table table-condensed table-striped table-hover main_font  '.$managed.' '.$add_class.' "
		id="'.$i_table_id.'" '.$hscroll.' '.$enable_search.'  "   align="center"
		style="border-left: #AAA 1px solid;border-right: #AAA 1px solid;border-top: #AAA 1px solid;border-bottom: #AAA 1px solid;"
		> ';

		 //echo '<table class="table taxble-condensed table-striped table-hover main_font  '.$managed.' '.$add_class.' " id="'.$i_table_id.'" page_rows="'.$page_rows.'" > ';
		//echo '<table cellpadding="0" cellspacing="0" border="0" class="display" id="'.$table_id.'">';
		if (!$noheader)
		{

		echo '<thead>';
		echo '<tr  id="player"  style="color:white;height:36px;font-weight:semi-bold;"  class="portlet box '.$header_color.' "

		>';

		$Col = new rTableColumn();

		if ($add_verbs)
		{
			if (count($i_line_vers)==0) $add_verbs = false ;
		}

		if ($add_verbs) echo '<th style="width:8px;" class="hide_with_menu" ><i class="icon-pencil hide_with_menu "></i></th>' ;

		if ($add_checkboxes) echo '<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#'.$i_table_id.' .checkboxes" /></th>' ;
		foreach ($iTable->Cols as $key => $Col) {

			if ($Col->Header!="|hide|")
			{
					echo "<th>" . $Col -> Header . $th_add ."</th>";
			 }

		}

		echo "</tr></thead>" ;

		}

		echo "<tbody>" ;
		$odd = "";
		foreach ($iTable->Rows as $key => $Row) {


		//	    if (key_exists("_DETAILS", $Row->Cells))
		//			{
		//				$show_detail_mark = "<i></i>" ;
		//				$hide_detail = "hide" ;
		//				if (substr($Row->Cells["_DETAILS"]->Value, 0,strlen($show_detail_mark)) == $show_detail_mark ) $hide_detail = "show" ;
		//			}

		$hide_detail = "show" ;

			$row_key = $key ;

			if ($odd == "odd gradeA") {$odd = "even gradeA";
			} else {$odd = "odd gradeA";
			}
			$odd = "even gradeA";
			$new_page = "" ;
		//	if ($row_key==3) $new_page = ' <div style="page-break-inside:always" ></div> ' ;
		//		if ($row_key==3) $new_page = ' page-break ' ;
			$low_height = "" ;
			if  ($Row->details_section_only==1)  $low_height = ' style="height:200;px;background-color:#555;" ' ;
			echo '<tr '.$low_height.' row_id ="'.$row_key.'" class="ranwar ' . $odd  .  $new_page .'" '.'_ '.'  >';

			if ($add_checkboxes) echo '<td ><input type="checkbox" class="checkboxes" value="1" /></td>';

				if (($add_verbs))
				{

					echo '<td sxtyle="width:8px;" class="hide_with_menu" >';
					if  ($Row->details_section_only==0)
					{
					if ($split_buttons ==0)
					{
					?>

							<div class="actions">

									<div class="btn-group small pull-left hide_with_menu" >
										<!--<a href="#" class="btn blue"><i class="icon-pencil"></i> Edit</a>-->
										<button class="bxtn red-stripe smxall" href="#" data-toggle="dropdown">
										<i class="icon-chevron-up" style="color:blue;"></i>
										<!--<i class="icon-angle-down mini"></i>-->
										</button>
										<ul class="dropdown-menu bottom-up pull-left">
											<?php
												foreach ($i_line_vers as $key => $icon_details) {
													if (key_exists("use_edit_url", $iTable->Cols))
															{
																if ($key = "edit") $icon_details[caller_url] = $Row["use_edit_url"]->Value ;
															}
													if (in_array($key,$Row->disable_verbs)) continue ;


													echo '<li  ><a href="#"';
													foreach ($icon_details["attributes"] as $attr_key => $attr_value) {

															$attr_value = str_replace( "vvv_ID_vvv", $Row->Cells[$icon_details["id_column"]]->Value, $attr_value);
															echo ' '.$attr_key.'="'.$attr_value.'" ' ;
													}

													echo ' ><i class="'.$icon_details["icon"].'"></i>';
													echo $icon_details["caption"];

													echo '</a>';
													echo '</li>' ;

																						}
											?>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-home"></i> Home Page</a></li>
										</ul>
									</div>
							</div>
				<?php
					}
					if ($split_buttons ==1)
					{
							echo '<div class="btn-group small pull-left hide_with_menu" >';

							foreach ($i_line_vers as $key => $icon_details) {
								//	echo $key ;
							if (key_exists("use_edit_url", $iTable->Cols))
										{
										//	echo "<button class='btn'>";
									//		print_r($icon_details) ;
										//	echo  $key ;
										//	echo "</button>";
											if ($key == "edit") $icon_details["attributes"]["caller_url"] = $Row->Cells["use_edit_url"]->Value ;
										}
								if (in_array($key,$Row->disable_verbs)) { continue ; }

								echo '&nbsp;<a id="'.$key.'_'.$row_key.'"  class="selected_action hide_with_menu '.$icon_details["attributes"]["class"].'"   ';
									foreach ($icon_details["attributes"] as $attr_key => $attr_value) {

											if (key_exists( "id_column",$icon_details)) $attr_value = str_replace( "vvv_ID_vvv", $Row->Cells[$icon_details["id_column"]]->Value, $attr_value);
											if (key_exists("name_column", $icon_details)) $attr_value = str_replace( "vvv_NAME_vvv", $Row->Cells[$icon_details["name_column"]]->Value, $attr_value);

																										//now we need to work on vvv_fieldname_vvv ,
															//if of the attribute has a vvv

															$floc = strpos($attr_value, "vvv");
														//	echo $floc ;
															if ($floc !=0)
															{
																$thenumber = substr($attr_value, $floc+3,1);
																$floc2 = strpos ($attr_value,"xxx".$thenumber) ;
																//echo "n:".$thenumber ;
																$the_field_name = substr($attr_value,$floc+5,$floc2-1-($floc+5));
															//	echo $the_field_name ;
																echo  "vvv".$thenumber."_".$the_field_name."_xxx".$thenumber ;
																$attr_value = str_replace( "vvv".$thenumber."_".$the_field_name."_xxx".$thenumber, $Row->Cells[$the_field_name]->Value, $attr_value);
															}

											echo '
											 '.$attr_key.'="'.$attr_value.'" ' ;
									}
								echo 'datxa-dismiss="modal" ' ;
								echo ' ><i class="'.$icon_details["icon"].' selected_action" ';
									foreach ($icon_details["attributes"] as $attr_key => $attr_value) {

											if (key_exists( "id_column",$icon_details)) $attr_value = str_replace( "vvv_ID_vvv", $Row->Cells[$icon_details["id_column"]]->Value, $attr_value);
											if (key_exists("name_column", $icon_details)) $attr_value = str_replace( "vvv_NAME_vvv", $Row->Cells[$icon_details["name_column"]]->Value, $attr_value);

											echo '
											 '.$attr_key.'="'.$attr_value.'" ' ;
									}
								echo 'datxa-dismiss="modal" ' ;
								echo '></i>';
								echo $icon_details["caption"];

								echo '</a>
								';

							}
								//echo '<button class="selection_button hide btn blue" id="select_button_'.$row_key.'">.</button>' ;
							echo '</div>' ;
					}
					echo '</td>' ;
				}}



			$Cell = new rTableCell;
			foreach ($Row->Cells as $key => $Cell) {
				if (($iTable->Cols[$key]->Header!="|hide|") )
				{

				if ($Cell -> URL != "") {
					$the_address =$Cell -> URL ;
					$target = "" ;
					if (strpos("x".$Cell -> URL,"_blank|")!= 0)
					{
						$the_address = substr($Cell -> URL ,  strlen("_blank|"));
						$target  = "target='_blank'";
					}
					$urls = "<a href='" . $the_address . "' ". $target ." ";
					$urlse = " > ";
					$urlstart = "<a href='" . $the_address . "' ". $target ." >";
					$urlend = "</a>";
				} else {$urlstart = "";
					$urlend = "";
					$urls = "";
					$urlse ="";
				}


			//$vcol = new rTableColumn;
			 $vCol = $iTable->Cols[$key];
			 $cellcontent = "";
			 //echo $cellcontent ;

			// added for total ---------------------------------------------------------------------
			if (key_exists($key,$total_these))
			{

				if ($total_these[$key]=="count") $vCol->Total = $vCol->Total + 1 ;
				if ($total_these[$key]=="sum") $vCol->Total  = $vCol->Total + $Cell -> Value ;

			}
			// end of added for total 	---------------------------------------------------------------------

			if  ($Row->details_section_only==1)
			{
				echo "<td></td>" ;
			}
			else
			{
			switch ($vCol->Type) {
				case rColumnType::ColTypeText :
					if ($Cell->URL=="")
					{ echo "<td align='right' class='hidden-480' >" . $urlstart . $Cell -> Value . $urlend . "</td>";}
					else
					{ echo "<td align='right' >".$urls. "  ".$Cell -> MoreData. ">".$Cell -> Value."</a>"."</td>"; }
					break;
				case rColumnType::ColTypeNumber :

					echo "<td align='right' style='text-align:right'  >" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeInteger :
					echo "<td align='right' >" . $urlstart . intval($Cell -> Value) . $urlend . "</td>";
					break;
				case rColumnType::ColTypeDecimal:
					if (($vCol->zero_to_empty ==1 ) and (floatval($Cell -> Value) ==0.00 ))
					{
						echo "<td align='right'  style='text-align:right' ></td>";
					}
					else {
						if ($Cell->Value < 0 )
						{ echo "<td align='right'  style='text-align:right' >" . $urlstart ." (".  number_format ( -$Cell -> Value, 2  ) .") ". $urlend . "</td>"; }
						else { 	echo "<td align='right'  style='text-align:right' >" . $urlstart .  number_format ( $Cell -> Value, 2  ) . $urlend . "</td>"; }
					}

					break;
				case rColumnType::ColTypeImage:
					echo "<td align='right' width=1% >" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeButton:
					if ($Cell->URL !="")
					{
							switch ($vCol->ButtonType) {
								case rButtonType::ButtonEdit:
									echo "<td align='right' >".$urls. "' class='edit_button'  ".$Cell -> MoreData. ">".$Cell -> Value."</a>"."</td>";
									break;
								case rButtonType::ButtonNew:
									echo "<td align='right' >".$urls. "' class='edit_button' ".$Cell -> MoreData. " >".$Cell -> Value."</a>"."</td>";
									break;

								default:
									echo "<td align='right' >" . $urlstart . $Cell -> Value . $urlend . "</td>";
									break;
							}
					}
					else {
						echo '<td class="hidden-480" align="right" ></td>';
					}
							break;
				case rColumnType::ColTypeHTML:
				//	echo "<td>" . $urlstart . "<textarea rows=2 cols=40 readonly='readonly' >".$Cell -> Value."</textarea>" . $urlend . "</td>";
					echo "<td align='right'>" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeBoolean:
					if($Cell->Value==1){$cellcontent="<img src='".base_url(r_theme_config("icon_path"))."/check1.gif' height=21 ><span style='color:transparent;' >.</span>";}
					if($Cell->Value!=1){$cellcontent="<img src='".base_url(r_theme_config("icon_path"))."/uncheck1.gif' height=21 >";}

					echo "<td align='right' >" . $urlstart . $cellcontent. $urlend . "</td>";
					break;
				case rColumnType::ColTypeBoolean_NoX:
					if($Cell->Value==1){$cellcontent="<img src='".base_url(r_theme_config("icon_path"))."/check1.gif' height=21 ><span style='color:transparent;' >.</span>";}
					echo "<td align='right' >" . $urlstart . $cellcontent. $urlend . "</td>";
					break;
				case rColumnType::ColTypeCheckBox:
					if ($Cell -> URL !="")
					{

						echo "<td align='right'><input ";
						?>style="<?php echo "cursor:url(".base_url("hand_blue.cur")."),auto;" ; ?>"
						type='checkbox' tag='datagrid_select' name='datagrid_select[]'
						<?php
						echo $Cell->MoreData ;
						echo " value='" .  $Cell -> URL . "' info='" .  $Cell -> Value . "' >" ;
						echo  $Cell -> Value;
						echo  "</td>";
					}
					else {
					echo "<td align='right'> ".  $Cell -> Value ."</td>";
					}

					break;
				default:
					echo "<td align='right'>" . $urlstart . $Cell->Value. $urlend .' ?'. "</td>";
					break;
			}
			}

			//	echo "<td>" .var_dump($vCol) . "</td>";
			}
			}

			echo "</tr>";
			$hw ="" ;
		//	echo "<tr><td colspan='12' ></td></tr>";
			if (strpos("_".$add_class, 'autodatatable')==0)
			{
					$hw ="hide_with_menu" ;
					//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
					if (key_exists("_DETAILS", $Row->Cells))
					{
						$show_detail_mark = "<i></i>" ;
						$hide_detail = "hide" ;
                        if ($show_all_details ) $hide_detail = "show" ;
						if (substr($Row->Cells["_DETAILS"]->Value, 0,strlen($show_detail_mark)) == $show_detail_mark ) $hide_detail = "show" ;
						$hw ="" ;


					$detail_id_segment ="" ;
					if (isset($icon_details)) $detail_id_segment = " id='details_".$Row->Cells[$icon_details["id_column"]]->Value."'  "  ;

					echo "<tr style='border-top:#00f 2px solid;heixght:35px;' ><td  class='details ".$hide_detail." ".$hw." ' colspan='". strval(count($Row->Cells))."'" .$detail_id_segment.
								iif($hide_detail=="show" , "style='position: relative; zoom: 1; display: table-cell;'", "" ) . "> " ;
					echo "<div style='background-color: #FFFFFF;heigxht:40px; padding:10px;' >";
					if (key_exists("_DETAILS", $Row->Cells))
					{
					//	print_r($icon_details) ;  br(1);
						echo $Row->Cells["_DETAILS"]->Value  ;
					}
					echo "</div></td></tr>" ;
					}
					//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
			}
		}


		echo <<<EOT
</tbody>
<tfoot>
EOT;


		if (count ($total_these)>1)
		{
			echo '<tr  class="portlet box blue " style="color:white;background-color:#999;border-top: #e02222 20 px solid;"  >';
		if ($add_verbs) echo '<td style="width:8px;" class="hide_with_menu"  ></th>' ;
			foreach ($iTable->Cols as $key => $Col) {
				if ($Col->Header!="|hide|")
				{
					if (key_exists($key,$total_these))
					{

						if ($total_these[$key]=="title")  $Col->Total= "Total :" ;
						if ($total_these[$key]=="sum") $Col->Total= number_format($Col->Total,2) ;

						echo "<td style='text-align:right;'>" . $Col->Total. "</td>";
					}
					else {
						echo "<td><span style='color:#555555;' class='hide_with_menu' >" . "</span></td>";
					}

				}
			}

			echo "</tr>" ;
		}

		if ($bottom_row==1)
		{
			echo '<tr style="color:white;"   class="portlet box '.$header_color.' " >';
			if ($add_checkboxes) echo '<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#'.$i_table_id.' .checkboxes" /></th>' ;

			foreach ($iTable->Cols as $key => $Col) {
				if ($Col->Header!="|hide|")
				{
				echo "<th>" . $Col -> Header . "</th>";
				}
			}
					if ($add_verbs) echo '<th style="width:8px;" class="hide_with_menu"  ></th>' ;
			echo "</tr>" ;
		}

		if (strpos("_".$add_class, 'autodatatable')!=0)
		{
			echo '<tr style="color:white;height=0px;"   class="portlet box '.$header_color.' " >';
			foreach ($iTable->Cols as $key => $Col) {
			if ($Col->Header!="|hide|")
			{
			echo "<td></td>";
			}
			}
			if ($add_verbs) echo '<td style="width:8px;" class="hide_with_menu"  ></td>' ;
			echo "</tr>" ;
		}

		echo <<<EOT
</txfoot>
</table>
EOT;

	echo "</td></tr></table>" ;

//---------------------------------------------------------------------------------------------------



	}
	}


	function r_theme_save_button($i_options = array() )
	{

		if (key_exists("ajaxform", $i_options))
			{
				$A = $i_options["target"] ;
				$B = $i_options["href"] ;
				$class_add = ' ajaxithis' ;
				$add_more =  ' target="'.$A.'" href = "'.$B.'" ' ;
			}

		echo '	<div class="form-actions">
					<button type="submit" class="btn blue'. $class_add.'" '.$add_more.' ><i class="icon-ok"></i> Save</button>
					<button type="button" class="btn">Cancel</button>
					</div> ' ;

	}
if ( ! function_exists('r_theme_row_start'))
{
	function r_theme_row_start($i_width = 12,$i_options = array()) {

			echo '<div class="row-fluid" >';
	}
}

if ( ! function_exists('r_theme_row_end'))
{
	function r_theme_row_end($i_width = 12) {
			echo '</div>';
	}
}

if ( ! function_exists('r_theme_section_start'))
{
	function r_theme_section_start($i_width = 12,$i_options = array(),$style="") {
			echo '<div ';

			$this_class = 'span'.$i_width.' ';

			if (key_exists("id", $i_options))
			{
				echo ' id="'.$i_options["id"].'" ' ;
			}


			//very carefull handling of the class attribute if sent in parameter
			// the browser only assumes the first class attribute // i am talking about chrome

			if (key_exists("attributes", $i_options))
			{
			if (key_exists("class", $i_options["attributes"]))
			{
				$this_class = $this_class .$i_options["attributes"]["class"].' ' ;
			}
			}


			echo ' class="'.$this_class.' " ';
			if (key_exists("attributes", $i_options))
			{
				foreach ($i_options["attributes"] as $key => $value) {
					if ($key!="class")
					{
						echo ' '.$key.'="'.$value.'"' ;
					}
				}
			}

			echo ' style= '.$style.';" ' ;
			echo '  >';


	}
}

if ( ! function_exists('r_theme_section_end'))
{
	function r_theme_section_end($i_width = 12) {
		echo '</div>';
		}
}


if ( ! function_exists('r_theme_box_start'))
{
	function r_theme_box_start($iTitle="",$i_width = 12,$i_options = array()) {

		$body_id = "" ;
		if (isset($i_options["body_id"])) $body_id = $i_options["body_id"] ;
		$back_color = "green" ;
		$fore_color = "white" ;
		$make_box = "box";
        $assume_edit = "" ;
		$make_collapsed = "" ;
		$box_icon = "icon-list-alt" ;
		$hide_with_menu = 'no' ;

		if (key_exists("back_color",$i_options)) $back_color=$i_options["back_color"] ;
            if (key_exists("assume_edit",$i_options)) $assume_edit =$i_options["assume_edit"] ;

		if (key_exists("box_icon",$i_options)) $box_icon=$i_options["box_icon"] ;
		if (key_exists("box",$i_options)) $make_box=$i_options["box"] ;
		if (key_exists("collapsed",$i_options)) $make_collapsed=$i_options["collapsed"] ;
		if (key_exists("hide_with_menu",$i_options)) $hide_with_menu=$i_options["hide_with_menu"] ;


		echo '<div class="portlet '.$make_box.' '.$assume_edit . ' ' . $back_color ;
		if (isset($i_options["hide_this"]))
			{
			if ($i_options["hide_this"] == "yes") echo " hide " ;
			}
		if ($hide_with_menu=='yes')
		{
			echo ' hide_with_menu ' ;
		}
		echo '" ';


		$tools  = array() ;
		if (isset($i_options["tools"]))
		{
			$tools = explode(',',	$i_options["tools"]) ;
		}

		if (isset($i_options["box_id"])) echo ' id="'.$i_options["box_id"].'" ' ;
		echo '>';
		echo '<div class="portlet-title zhidex_with_menu '.$back_color.' "'  ;

		echo '>';

		$expanded = 3 ;
		if ($iTitle!="")
		{
				echo '<div class="caption master_font"><i class="'.$box_icon.'"></i>'.$iTitle.'</div>
				<div class="tools">' ;

				if (in_array("config", $tools)) echo '<a href="#portlet-config" data-toggle="modal" class="config"></a> ' ;

              $expanded = 3 ;
				if (in_array("reload", $tools)) echo '	<a href="javascript:;" class="reload"></a> ' ;


				if (in_array("collapse", $tools))
                 {   echo '	<a href="javascript:;" class="expand"></a> ' ;
                        $expanded = 2  ;
                }
                if (in_array("expand", $tools))
                    {
                        echo ' <a href="javascript:;" class="collapse"></a> ' ;
                        $expanded = 1 ;
                    }

                if ( $expanded==3)
                {
                    echo ' <a href="javascript:;" class="collapse"></a> ' ;
                    $expanded = 1  ;
               }

				if (in_array("remove", $tools)) echo '	<a href="javascript:;" class="remove"></a> ';
				if (in_array("hide", $tools)) echo '	<a href="javascript:;" class="hide"></a> ';


		echo '
				</div>';
		}


		/*
							<div class="actions">
									<!--<a href="#" class="btn blue"><i class="icon-pencil"></i> Q</a>-->
									<div class="btn-group">
										<a class="btn red" href="#" data-toggle="dropdown">
										<i class="icon-cogs"></i> Tools
										<i class="icon-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-left">
											<li><a href="#"><i class="icon-pencil"></i> Option 1 </a></li>
											<li><a href="#"><i class="icon-trash"></i> Optoin 2</a></li>
											<li><a href="#"><i class="icon-ban-circle"></i> Option</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="i"></i> Make admin</a></li>
										</ul>
									</div>
								</div>
		*/

			echo '</div>';
			$add_to_class = "" ;
			$add_to_attrib = "" ;
			if (key_exists("body_attributes", $i_options))
			{

				$body_attributes = $i_options["body_attributes"] ;
				foreach ($body_attributes as $key => $value) {
					if ($key=="class")
					{ $add_to_class = $body_attributes["class"] ; }
					else
					{ $add_to_attrib = $add_to_attrib . ' '. $key .'="' . $value .'" '; }
					;
				}
			}

			$add_to_class = $add_to_class .' '.$make_collapsed ." " ;
            $heightstring = "" ;
            if (key_exists("height", $i_options))
            {
                $heightstring = 'min-height:'.$i_options["height"].' !important;' ;
            }
            $display_string = " " ;
           if ($expanded == 2 ) $display_string = "display: none; " ;

		echo '<div style="background-color: #FFFFFF;' . $heightstring. '  ; ' . $display_string . '"  class="portlet-body  fxxlip-scroll '.$add_to_class.'" id="'.$body_id.'" '.$add_to_attrib.' >';
	//   echo "sss" ; $display_string  ;
    }
}

if ( ! function_exists('r_theme_box_end'))
{
	function r_theme_box_end() {
			echo '</div></div>
					';
	}
}



if ( ! function_exists('r_theme_draw_input_error'))
{
	function r_theme_input_error($i_error,$i_options=array())
	{
		$error_string = "" ;
		$error_string = $error_string . '<span class="input-error tooltips" style="color:red;" data-original-title="sss" >
				  <i class="icon-warning-sign"></i>&nbsp;&nbsp;';
		$error_string = $error_string . $i_error ;
		$error_string = $error_string . '</span>';
		return $error_string ;
	}
}

if ( ! function_exists('r_theme_LabelBox'))
{
		function r_theme_LabelBox($iName, $iValue, $iLabel, $iLenght = "medium", $iSubTip = "", $iReadOnly = 0) {

			/* from layout -----------------------------------------------  */
			echo '
			<div class="xcontrol-group">
				<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>
				<div class="controls input-icon">
					<input type="text" placeholder="" class="m-wrap '.$iLenght.'" value="' . $iValue . '" name="' . $iName . '" id="'.$iName.'" ';
			if ($iReadOnly == 1) {echo 'readonly="readonly" ';}
			echo '/>
			' ;
			if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';

			return ;

	}
}

if ( ! function_exists('r_theme_inputcode'))
{
		function r_theme_inputcode(array $iNames, array $iValues, $iLabel, $iLenght = "medium", $iSubTip = "", $iReadOnly = 0,$control_only=0,$with_label=1,			$iSelectorURL="") {

			/* from layout -----------------------------------------------  */
			if ($control_only == 0 ) {
				echo '
			<div class="control-group">';
			}
			if ($with_label==1)
			{
				echo '<label class="control-label master_font" for="'.$iNames[1].'">'.$iLabel.'</label>';
			}

			if ($control_only == 0 ) {echo '<div class="controls input-icon master_font">';}

			echo '<input type="hidden" name="' . $iNames[1] . '" id="'.$iNames[1].'"  value="' . $iValues[1] . '" />';
			echo '<input type="text"  size="10"   placeholder="" class="m-wrap small'.' master_font " value="' . $iValues[2]. '" name="' . $iNames[2] . '" id="'.$iNames[2].'" ';
			if ($iReadOnly == 1) {echo 'readonly="readonly" ';}
			echo '/> ' ;
			echo '<input type="text" placeholder="" class="m-wrap large master_font " value="' . $iValues[3]. '" name="' . $iNames[3] . '" id="'.$iNames[3].'" '. 'readonly="readonly"' ;
			echo '/>' ;
			?>
			<a
			class="btn blue select_action"
			select_url="<?php echo $iSelectorURL; ?>"
			name_control="<?php echo $iNames[2]; ?>"
			id_control="<?php echo $iNames[1]; ?>"
			><i class="icon-list select_action"

			select_url="<?php echo $iSelectorURL; ?>"
			name_control="<?php echo $iNames[2]; ?>"
			id_control="<?php echo $iNames[1]; ?>"
			></i></a>
			<?php

			if ($control_only == 0 ) {
			if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>';
			}
			echo '</div>
			</div>';
			}


			return ;

	}
}


if ( ! function_exists('r_theme_inputtext'))
{
		function r_theme_inputtext($iName, $iValue, $iLabel, $iLenght = "medium", $iSubTip = "", $iReadOnly = 0,$control_only=0,$with_label=1 , $thurl="" ) {

			/* from layout -----------------------------------------------  */
			if ($control_only == 0 ) {
				echo '
			<div class="control-group">';
			}
			if ($with_label==1)
			{
				echo '<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>';
			}


		  if ($control_only == 0 ) {echo '<div class="controls input-icon master_font">';}

			echo '<input type="text" placeholder="" class="m-wrap '.$iLenght.' master_font "  tabindex="1" value="' . $iValue . '" name="' . $iName . '" id="'.$iName.'" ';
			    if (strpos($iLenght, "typeahead") > 0)
                {
                    echo  'data-provide="typeahead" autocomplete="off" thurl = "'.$thurl.'" ' ;
                }
				  else {
                     echo ' autocomplete="off" ' ;      
                }
			if ($iReadOnly == 1) {echo 'readonly="readonly" ';}
			echo '/>
			' ;
			if ($control_only == 0 ) {
			if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';
			}


			return ;

	}
}


if ( ! function_exists('r_theme_input_selector'))
{
		function r_theme_input_selector($iName, $iValue_ID,$iValue_Name, $iLabel,
				$iSelectorURL,
				$iLenght = "medium", $iSubTip = "", $iReadOnly = 0,$enable_clear=1,$enable_add=0, $iAdditionURL="" ) {

			/* from layout -----------------------------------------------  */
			echo '
			<div class="control-group" >
				<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>
				<div class="controls input-icon" >
					<input type="text" placeholder="" class="m-wrap '.$iLenght.' mas$ter_font" value="' . $iValue_Name . '" name="name_of_' . $iName . '" id="name_of_'.$iName.'" readonly="readonly" />
					<input type="hidden" name="' . $iName . '" id="'.$iName.'" value="' . $iValue_ID . '" readonly="readonly" />';


			if ($iReadOnly==0)
			{
			echo '
			<a
			class="btn bluxe select_action"
			select_url="'.$iSelectorURL.'"
			name_control="name_of_'.$iName.'"
			id_control="'.$iName.'"
			><i class="icon-list select_action"

			select_url="'.$iSelectorURL.'"
			name_control="name_of_'.$iName.'"
			id_control="'.$iName.'"
			></i></a>';

			if ($enable_add ==1)
				{
				echo '
				<a
				class="btn quick_add"
				add_url="'.$iAdditionURL.'"
				name_control="name_of_'.$iName.'"
				id_control="'.$iName.'"
				>أضف</a>';
				}

			if ($enable_clear==1)
				{
					//	echo '<a  class="btn red clearcombo" clearof="'.$iName.'" >..</a>';
						echo ' <a class="btn clearselector" clearof="'.$iName.'" ><i class="icon-file clearselector" clearof="'.$iName.'"></i></a>';
				}
			}

			if ($iSubTip!="")
			{
			echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';

			return ;

	}
}

if ( ! function_exists('r_theme_inputtext_mask'))
{
		function r_theme_inputtext_mask($iName, $iValue, $iLabel, $iLenght = "medium", $iSubTip = "", $iReadOnly = 0,$maskclass) {

			/* from layout -----------------------------------------------  */
			echo '
			<div class="control-group">
				<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>
				<div class="controls input-icon">
					<input stxyle="direction:ltr;text-align:right;" type="text" placeholder=""  tabindex="1" class="m-wrap '.$iLenght.' '.$maskclass.'" value="' . $iValue . '" name="' . $iName . '" id="'.$iName.'" ';
			if ($iReadOnly == 1) {echo 'readonly="readonly" ';}
			echo '/>
			' ;
			if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';

			return ;
			/* grid12 layout -----------------------------------------------  */
			echo '	<div class="controls controls-row">
			' ;
			echo '<div class="span2 m-wrap master_font" align="left"><label>' . $iLabel . ':</label></div>
			';
			echo '<input type="text" value="' . $iValue . '" name="' . $iName . '" class="span' . $iLenght . ' m-wrap" ';
			echo ' id="'.$iName.'" ' ;
			if ($iReadOnly == 1) {echo 'readonly="readonly" ';
			}
			echo '/>
			';
			if ($iSubTip!="")
			{
			echo '<span class="help-inline master_font small" >' . $iSubTip . '</span>';

			}
			echo '</div>
			';

	}
}

if ( ! function_exists('r_theme_inputPassword'))
{
		function r_theme_inputPassword($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

			/* from layout -----------------------------------------------  */
			echo '
			<div class="control-group">
				<label class="control-label master_font">'.$iLabel.'</label>
				<div class="controls">
					<input type="password" placeholder="" class="m-wrap '.$iLenght.'" value="' . $iValue . '" name="' . $iName . '" ';
			if ($iReadOnly == 1) {echo 'readonly="readonly" '; }
			echo '/>
			' ;
			if ($iSubTip!="")
			{
			echo '<span class="help-inline master_font">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';

			return ;
			/* grid12 layout -----------------------------------------------  */
			echo '	<div class="controls controls-row">
			' ;
			echo '<div class="span2 m-wrap master_font" align="left"><label>' . $iLabel . ':</label></div>
			';
			echo '<input type="password" value="' . $iValue . '" name="' . $iName . '" class="span' . $iLenght . ' m-wrap" ';
			echo ' id="'.$iName.'" ' ;
			if ($iReadOnly == 1) {echo 'readonly="readonly" ';
			}
			echo '/>
			';
			if ($iSubTip!="")
			{
			echo '<span class="help-inline master_font small" >' . $iSubTip . '</span>
			';

			}
			echo '</div>
			';
	}
}


if ( ! function_exists('r_theme_input_textlabel'))
{
		function r_theme_input_textlabel($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

			echo '
			<div class="control-group">
				<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>
				<div class="controls input-icon">
				<label style="margin-top:6px;"><span class="master_font">' . $iValue .'</span></label>';

			if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';


	}
}

	function r_theme_InputHidden($iName, $iValue) {
		echo '<div class="grid-12-12"><input type="hidden" value="' . $iValue . '" name="' . $iName . '" ';
		echo ' id="'.$iName.'" ' ;
		echo ' /></div>';
		echo '<div class="clear"></div>';
	}


	function r_theme_InputTime($iName,$iValue)
	{
		echo '
		<div class="control-group">
										<label class="control-label">Default Timepicker</label>
										<div class="controls">
											<div class="input-append bootstrap-timepicker-component">
												<input class="m-wrap m-ctrl-small timepicker-default" type="text" />
												<span class="add-on"><i class="icon-time"></i></span>
											</div>
										</div>
		</div>';

	}
	function r_theme_InputSelect($iName, $iValue, $iLabel, $iData, $iLenght = 5, $iSubTip = "", $iReadOnly = 0,$enable_clear=0,$reload_url="",$enable_add=0, $iAdditionURL="") {

		echo '<div class="control-group">
				<label class="control-label master_font">'.$iLabel.'</label>
				<div class="controls">';


		r_theme_InputSelect_Box($iName, $iValue, $iLabel, $iData, $iLenght,$iReadOnly,$enable_clear,$iSubTip,$reload_url,$enable_add, $iAdditionURL) ;

		echo '</div>';
		//echo '</div>';

		return ;
		return ;
	}

	function r_theme_select_html($iValue,$iData)
	{
		//echo "<SELECT>" ;
		echo '<option  value=""></option> ';
		foreach ($iData as $key => $item) {
			echo '<option value="' . $key . '"';
			if ($iValue == $key) { echo ' SELECTED ';}
			if (count($iData)==1 ) { echo ' SELECTED ';}
			echo '> ' . $item . '</option>';
		}
		//echo "</SELECT>" ;
	}

	/*
	 * class="' ;
		if ($iReadOnly != 1) { echo 'select2_combo spanx2 ' ; }
		echo 'mx-wrap '.$iLenght.'"
	 */
	function r_theme_InputSelect_BoxInGrid($iName, $iValue, $iLabel, $iData, $iLenght , $iReadOnly = 0,$enable_clear=0,$iSubTip,$reload_url = "",$enable_add=0, $iAdditionURL="")
	{
		echo '<select   name="' . $iName . '" ';
		echo ' id="'.$iName.'" ' ;
		if ($iReadOnly == 1) {
		?>
		 disabled="disbaled"
		<?php
		}
		echo ' >';

	}
	function r_theme_InputSelect_Box($iName, $iValue, $iLabel, $iData, $iLenght , $iReadOnly = 0,$enable_clear=0,$iSubTip,$reload_url = "",$enable_add=0, $iAdditionURL="")
	{

        if ($iLenght =="meduim") $iLenght = 6;
        if ($iLenght =="large") $iLenght = 8;
        if ($iLenght =="small") $iLenght = 2 ;

		echo '<select  data-placeholder="' . $iLabel . '"  class="' ;
		if ($iReadOnly != 1) { echo ' select2_combo select2 ' ; }
		echo 'm-wrap  span'.$iLenght.'" tabindex="1" name="' . $iName . '" ';
		echo ' id="'.$iName.'" ' ;
		if ($iReadOnly == 1) {
		?>
		 disabled="disbaled"
		<?php
		}
		echo ' >';
		/*
		echo '<option  value=""></option> ';
		foreach ($iData as $key => $item) {
			echo '<option value="' . $key . '"';
			if ($iValue == $key) { echo 'SELECTED';
			}
			echo '> ' . $item . '</option>';
		}
		*/
		r_theme_select_html($iValue,$iData);
		echo '</select>';

		if ($iReadOnly==0)
		{
			if ($enable_clear==1)
				{echo '&nbsp;<a  class="btn red clearcombo" clearof="'.$iName.'" >&nbsp;!</a>'; }
		}

		if ($enable_add ==1)
				{
				echo '&nbsp;<a
				class="btn quick_add green"
				add_url="'.$iAdditionURL.'"
				name_control="'.$iName.'"
				id_control="_combo"

				>&nbsp;+</a>';
				}
		else { // allow reload button only if quick add is not active
			if ($reload_url==="")
			{ } else {
			echo '&nbsp;<a  class="btn green reload_combo" reloadof="'.$iName.'" reload_url="'.$reload_url.'" >..</a>';

			}
		}


		if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}

	}

	function r_theme_InputSelect_Normal($iName, $iValue, $iLabel, $iData, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

			echo '<div class="control-group">
					<label class="control-label master_font">'.$iLabel.'</label>
					<div class="controls">
					<select class="span7 m-wrap  '.$iLenght.'" value="' . $iValue . '" name="' . $iName . '"  tabindex="1"  ';
			echo ' id="'.$iName.'" ' ;
			if ($iReadOnly == 1) {
					echo 'disabled="disbaled" ';
				}
			echo ' >';
			echo '<option  value=""></option> ';
			foreach ($iData as $key => $item) {
				echo '<option value="' . $key . '"';
				if ($iValue == $key) { echo 'SELECTED';
				}
				echo '> ' . $item . '</option>';
			}

			echo '</select>

			';
			if ($iSubTip!="")
			{
			echo '<span class="help-inline master_font small" >' . $iSubTip . '</span>
			';
			}
			echo '</div>
			</div>';

			return ;
			/* grid12 layout */
			echo '	<div class="controls controls-row">
			' ;
			echo '<div class="span2 m-wrap master_font" ><label>' . $iLabel . ':</label></div>
			';
			echo '<select data-placeholder="' . $iLabel . '"  class="span' . $iLenght . ' m-wrap"  tabindex="1" name="' . $iName . '" ';
			echo ' id="'.$iName.'" ' ;
			if ($iReadOnly == 1) {
				?>
				disabled="disbaled";
				<?php
			}
			echo ' >';
			echo '<option  value=""></option> ';

			foreach ($iData as $key => $item) {
				echo '<option value="' . $key . '"';
				if ($iValue == $key) { echo 'SELECTED';
				}
				echo '> ' . $item . '</option>';
			}

			echo '</select>

			';
			if ($iSubTip!="")
			{
			echo '<span class="help-inline master_font small" >' . $iSubTip . '</span>
			';

			}
			echo '</div>
			';

	}


	function r_theme_InputArea($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

			echo '
			<div class="control-group">
				<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>
				<div class="controls input-icon">
					<textarea class="large m-wrap '.$iLenght.' " rows="3" value="' . $iValue . '"  tabindex="1" name="' . $iName . '" id="'.$iName.'" ';

			if ($iReadOnly == 1) {echo 'readonly="readonly" ';}
			echo '>'.$iValue.'</textarea>
			' ;
			if ($iSubTip!="")
			{
			echo '<span class="hexlp-inlxine">'.$iSubTip.'</span>
				';
			}
			echo '</div>
			</div>';

		return ;
		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-3-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<textarea class="txt_autogrow" name="' . $iName . '"' . "rows=4" ;
		if ($iReadOnly == 1) {echo 'readonly="readonly"';
		}
		echo '/>' . $iValue . '</textarea>';
		echo '<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';
	}

	function r_theme_InputCheck($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

		echo '<div class="control-group">

					<div class="controls">
					<label class="checkbox master_font line ">
					<input type="checkbox" name="' . $iName . '" ';
					if ($iValue == "1") {echo 'Checked';
						}
						if ($iReadOnly == 1) {echo ' disabled="disabled" ';
						}
 					echo '/>';
					echo  $iLabel ;
 					if ($iSubTip!="")
					{
						echo '<span class="help-inline master_font " >' . $iSubTip . '</span>
						';

					}
 					echo  '</label>' ;

					echo '</div>
					</div>';


	}

	function r_theme_InputRadio($iName, $iValue, $iLabel, $iData, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

		echo '
			<div class="control-group">
				<label class="control-label master_font" for="'.$iName.'">'.$iLabel.'</label>';

			echo '<div class="controls" >';

		foreach ($iData as $key => $item) {
			echo '<label class="radio" > <div claxss="radio"> <span> <input type="radio" name="' . $iName . '" value="' . $key . '" ';
			if ($iValue == $key) { echo ' checked="checked" ';
			}
			if ($iReadOnly == 1) { echo 'disabled="disabled"';
			}
			echo " id='".$iName."_".$key."' ";
			echo "style='cursor:url(".base_url("hand_blue.cur")."),auto;'";
			echo '><span></div>'.'</label>'.$item ;


		//	echo "<label for='".$iName."_".$key."' style='cursor:url(".base_url("hand_blue.cur")."),auto;' >";
		//	echo  $item . '</label>';
		}

			echo '</div>';
			echo '</div>';




	}


	function r_theme_InputDate($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {
		echo '<script language="javascript">';
		echo 'jQuery(function() { jQuery( "#' . $iName . '" ).datepicker({';
		echo "showAnim: 'slide',";
		echo "dateFormat : 'yy-mm-dd'  });});";
		echo '</script>';
		echo '';

		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-3-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<input type="text" id="' . $iName . '" value="' . $iValue . '" name="' . $iName . '"    class="sizew150" ';
		if ($iReadOnly == 1) {echo 'readonly="readonly"';
		}
		echo '/>';
		echo '	<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';

	}

	function r_theme_InputWYSIWYG($iName, $iValue, $iLabel, $iLenght = 9, $iSubTip = "", $iReadOnly = 0) {
		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-3-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<textarea  name="' . $iName . '"  id="elm2" name="elm2" class="tinymce"   ';
		if ($iReadOnly == 1) {echo 'readonly="readonly"';
		}
		echo '/>' . $iValue . '</textarea>';
		echo '<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';
	}



/* End of file theme_helper.php */
/* Location: ./application/helpers/theme_helper.php */
