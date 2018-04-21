<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
// ------------------------------------------------------------------------

/**
 * Theme Helper to Be Modified with Each Theme Used in the Application , 
 * Provides for layout and Style & drawing functions needed ,
 *  
 * By Anwar El-Sherif Date 12 OCT 2012   
 */ 
 
 	//const  cImagetype_icon = '1' ; 
	//const  cImagetype_smallicon = '2' ; 
	//const  cImagetype_data = '9' ; .
	
	
	// at least include grid960 // 
	
if ( ! function_exists('r_theme_draw_menu'))
{
	function r_theme_draw_menu($mainmenu, $menutype= 'master')
	{
		
		// 'start by searching for subitems under no parent ; then drill down , 3 levels max// 
		// 0 Menu Text 
		// 1 Menu URL 
		// 2 Menu Parent Key 
		// 3 Icon 
		// 4 Description
		 
		echo '<ul class="sf-menu">' ;
		$SecondLevelMenuExist = false;  $ThirdLevelMenuExist = false; 
		foreach ($mainmenu as $key=>$firstlevel) {
			if ($firstlevel[2]=="")
			{
				$firstlevelkey = $key ;
				echo '<li><a href="'.base_url($firstlevel[1]).'">'.$firstlevel[0].'</a>';
				//echo '<ul>';  
				foreach ($mainmenu as $key=>$secondlevel) {
						if ($secondlevel[2]==$firstlevelkey)
						{
							if ($SecondLevelMenuExist == false)
							{
								echo '<ul>';  	
								$SecondLevelMenuExist = true; 				
							} 
							$secondlevelkey = $key;
							echo '<li><a href="'.base_url($secondlevel[1]).'">'.$secondlevel[0].'</a>'; 
							//echo '<ul>';  	
							foreach ($mainmenu as $key=>$thirdlevel) {
								if ($thirdlevel[2]==$secondlevelkey){
									if ($ThirdLevelMenuExist == false)
									{
										echo '<ul>';  	
										$ThirdLevelMenuExist = true; 				
									} 
									echo '<li><a href="'.base_url($thirdlevel[1]).'">'.$thirdlevel[0].'</a></li>';
								}
							}
							//echo "</ul>";
							if ($ThirdLevelMenuExist == true)
							{
								echo '</ul>';  	
								$ThirdLevelMenuExist = false; 				
							} 
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
		echo '</ul>' ;
		
		return FALSE;
	}
}
	
if ( ! function_exists('r_theme_startform'))
{
	function r_theme_startform($iFormName, $iFormID, $iFormAction, $iFormMethod = "post") {
		echo '<form  action="' . $iFormAction . '" name="' . $iFormName . '" ' . 'id="' . $iFormID . '" method="' . $iFormMethod . '" >' . '';
	}
}	

if ( ! function_exists('r_theme_message'))
{
	function r_theme_message($iStyle,$iTitle,$iMessage , $iWithBox=0,$iBoxTitle="")
	{
		if ($iWithBox==1)
		{
			echo '<br />';
			echo '<section class="container_12">';
			echo '<section class="grid_12">';
			echo '<div class="box">';
			echo '<div class="title"><div class="layout">';
			echo $iBoxTitle;
			echo '</div></div>';

		}
		
		echo '<div class="inside">	<div class="in">';
		
		switch ($iStyle)
		{
			case "error":
				echo '<div class="alert error_msg ">';
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
		echo 'STD<strong>'.$iTitle.'</strong> : ';
		echo $iMessage.'</div>';
		echo "</div></div>";
		
		if ($iWithBox==1)
		{
			echo '			</div></section></section>';
		}
			
	}
}
if ( ! function_exists('r_theme_draw_table'))
{
	function r_theme_draw_table(rTable $iTable, $iStyle="", $iTableVersion=1.0) {
		
		
		$CI =& get_instance();
		$ThemeConfig = $CI->config->item("theme");
		
		//echo "ICO:".$ThemeConfig["IconPath"]; 
		
		echo <<<EOT
<div class="container_16">
<div class="grid_16" style="font-family:tahoma;">
<table cellpadding="0" cellspacing="0" border="0"   width=100% style="font-family:tahoma;">
<thead>
<tr>
EOT;

		$Col = new rTableColumn();

		foreach ($iTable->Cols as $key => $Col) {
			echo "<th>" . $Col -> Header . "</th>";
		}

		echo <<<EOT
</tr>
</thead>
<tbody>
EOT;

		 
		$odd = "";
		foreach ($iTable->Rows as $key => $Row) {
			
			if ($odd == "odd gradeA") {$odd = "even gradeA";
			} else {$odd = "odd gradeA";
			}
			echo "<tr class='" . $odd . "'>";
			$Cell = new rTableCell;
			foreach ($Row->Cells as $key => $Cell) {
				if ($Cell -> URL != "") {
					$urlstart = "<a href='" . site_url()."/". $Cell -> URL . "'>";
					$urlend = "</a>";
				} else {$urlstart = "";
					$urlend = "";
				}
				
			
			//$vcol = new rTableColumn; 
			 $vCol = $iTable->Cols[$key];
			 $cellcontent = ""; 
			 echo $cellcontent ; 
			switch ($vCol->Type) {
				case rColumnType::ColTypeText :
					echo "<td align='right'>" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeNumber :
					echo "<td align='right' >" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeDecimal:
					echo "<td align='right' >" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeImage:
					echo "<td align='right' >" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeButton:
					switch ($vCol->ButtonType) {
						case rButtonType::ButtonEdit:
							echo "<td align='right' ><a href='" . site_url() ."/"  . $Cell -> URL . "' class='edit_button'  ></a>"."</td>";
							break;
						case rButtonType::ButtonNew:
							echo "<td align='right' ><a href='" . site_url() ."/"  . $Cell -> URL . "' class='edit_button'  ></a>"."</td>";
							break;
						
						default:
							echo "<td align='right' ><a href='" . site_url() ."/"  . $Cell -> URL . "' class='edit_button'  ></a>"."</td>";
							break;
					}	
				
							break;
				case rColumnType::ColTypeHTML:
				//	echo "<td>" . $urlstart . "<textarea rows=2 cols=40 readonly='readonly' >".$Cell -> Value."</textarea>" . $urlend . "</td>";
					echo "<td align='right'>" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;			
				case rColumnType::ColTypeBoolean:
					if($Cell->Value==1){$cellcontent="YES";}
					if($Cell->Value!=1){$cellcontent="NO";}
					
					echo "<td align='right' >" . $urlstart . $cellcontent. $urlend . "</td>";
					break;
				default:
					echo "<td align='right'>" . $urlstart . $Cell->Value. $urlend .' ?'. "</td>";
					break;
			}
			 
		
			//	echo "<td>" .var_dump($vCol) . "</td>";
			}
			echo "</tr>";  
		}

		echo <<<EOT
</tr>
</tbody>
<tfoot>
<tr>
EOT;

		foreach ($iTable->Cols as $key => $Col) {
			echo "<th>" . $Col -> Header . "</th>";
		}
		echo <<<EOT
</tr>
</tfoot>
</table>
	<div class="clear"></div>
	</div>
EOT;

	}
	}


if ( ! function_exists('r_theme_box_start'))
{
	function r_theme_box_start($iTitle="") {
			echo '
			<div >
			<div style="width:100%;background-color:gray;padding:10px;"><div style="font-size:150%;">' . $iTitle . '</div></div>						
			<div style="padding:10px;">'; 
	}
}


if ( ! function_exists('r_theme_box_end'))
{
	function r_theme_box_end() {
			echo '</div></div></section>
					';
	}
}
if ( ! function_exists('r_theme_inputtext'))
{
		function r_theme_inputtext($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {
		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-2-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<input type="text"  value="' . $iValue . '" name="' . $iName . '"';
		if ($iReadOnly == 1) {echo 'readonly="readonly"';
		}
		echo '/>';
		echo '<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';	
	}
}
	

	function r_theme_InputHidden($iName, $iValue) {
		echo '<div class="grid-12-12"><input type="hidden" value="' . $iValue . '" name="' . $iName . '"  /></div>';
		echo '<div class="clear"></div>';
	}

	function r_theme_InputSelect($iName, $iValue, $iLabel, $iData, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {
		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-2-12" align="left"><label>' . $iLabel . ' :</label></div>';
		echo '<div class="grid-6-12">';
		echo '<select data-placeholder="' . $iSubTip . '" class="chzn-select" style="max-width:350px;font-family:Tahoma;" tabindex="1" name="' . $iName . '" >';
		echo '<option value=""></option> ';

		foreach ($iData as $key => $item) {
			echo '<option value="' . $key . '"';
			if ($iValue == $key) { echo 'SELECTED';
			}
			echo '> ' . $item . '</option>';
		}

		echo '</select><br/>';
		echo '<span class="subtip">' . $iSubTip . '</span>';
		echo '</div><div class="clear"></div>';
	}

	function r_theme_InputArea($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {
		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-2-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<textarea class="txt_autogrow" name="' . $iName . '"';
		if ($iReadOnly == 1) {echo 'readonly="readonly"';
		}
		echo '/>' . $iValue . '</textarea>';
		echo '<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';
	}

	function r_theme_InputCheck($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {

		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-2-12" align="left"></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<ul class="formee-list">';
		echo '<li><input name="' . $iName . '" type="checkbox"  ';
		if ($iValue == "1") {echo 'Checked';
		}
		if ($iReadOnly == 1) {echo ' disabled="disabled" ';
		}
		echo '></li><label>' . $iLabel . '</label>';
		echo '</ul>';
		echo '<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';

	}

	function r_theme_InputRadio($iName, $iValue, $iLabel, $iData, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {
		echo '		
		';
		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-2-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<ul class="formee-list">';

		foreach ($iData as $key => $item) {
			echo '<li><input name="' . $iName . '" type="radio"  value="' . $key . '"';
			if ($iValue == $key) { echo ' checked="checked" ';
			}
			if ($iReadOnly == 1) { echo 'disabled="disabled"';
			}

			echo '><label>' . $item . '</label></li>';
		}
		echo '</ul>';
		echo '	<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';
	}

	function r_theme_InputDate($iName, $iValue, $iLabel, $iLenght = 5, $iSubTip = "", $iReadOnly = 0) {
		echo '<script language="javascript">';
		echo 'jQuery(function() { jQuery( "#' . $iName . '" ).datepicker({';
		echo "showAnim: 'slide',";
		echo "dateFormat : 'yy-mm-dd'  });});";
		echo '</script>';
		echo '';

		echo '<div class="grid-1-12"></div>';
		echo '<div class="grid-2-12" align="left"><label>' . $iLabel . ':</label></div>';
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
		echo '<div class="grid-2-12" align="left"><label>' . $iLabel . ':</label></div>';
		echo '<div class="grid-' . $iLenght . '-12">';
		echo '<textarea  name="' . $iName . '"  id="elm2" name="elm2" class="tinymce"   ';
		if ($iReadOnly == 1) {echo 'readonly="readonly"';
		}
		echo '/>' . $iValue . '</textarea>';
		echo '<span class="subtip">' . $iSubTip . '</span></div>';
		echo '<div class="clear"></div>';
	}


	function r_theme_endform() {
		echo <<<EOT
</span>
<section class="box_footer">
<div class="grid-12-12">
<input type="submit" value="ارسال" />
</div>
<div class="clear"></div>
</section>
<!--Form footer end-->
</form>
EOT;
	}
		
/* End of file theme_helper.php */
/* Location: ./application/helpers/theme_helper.php */