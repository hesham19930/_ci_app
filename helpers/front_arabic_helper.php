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
		echo '<strong>'.$iTitle.'</strong> : ';
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
	function r_theme_draw_table(rTable $iTable, $iStyle="", $iTableVersion=1.0 , $table_id="datatable_1") {
		
		
		//ECHO "YA SALAM"; 
		//echo "ROWCOUNT:".count($iTable->Rows);
	
		
		echo '<div class="inside"  >';
		echo '<table cellpadding="0" cellspacing="0" border="0" class="display arabic_font" ixd="'.$table_id.'" >';
		echo '<thead>';
		echo '<tr>';


		$Col = new rTableColumn();

	
		echo "<th width='100px;'></th><th width='270px;>Data</th>";
	
		echo <<<EOT
</tr>
</thead>
<tbody>
EOT;

		//echo "<br>"; 
		$odd = "";
		foreach ($iTable->Rows as $Row) {
			
	
						if ($odd == "background-color: #E1E1FF;") 
							{$odd = "background-color: #FAFAFA;";
						} else {$odd = "background-color: #E1E1FF;";}
						
			$Cell = new rTableCell;
			
		
			echo '<tr style="background-color: #E1E1FF;height:20px;color:909090" ><td><td colspan= align="right">|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       |</td></tr>';
				echo '<tr style="background-color: #202020;height:3px;" ><td colspan=2 ></td></tr>';
			
			foreach ($Row->Cells as $key => $Cell) {
							
				if ($iTable->Cols[$key]->Header!="|hide|")
				{
					
			
						
				echo "<tr sxtyle='" . $odd . "' ><td>".$iTable->Cols[$key]->Header."</td>";
					
	
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
			switch ($vCol->Type) {
				case rColumnType::ColTypeText :
					if ($Cell->URL=="")
					{ echo "<td align='right'>" . $urlstart . $Cell -> Value . $urlend . "</td>";}
					else
					{ echo "<td align='right' >".$urls. "  ".$Cell -> MoreData. ">".$Cell -> Value."</a>"."</td>"; } 
					break;
				case rColumnType::ColTypeNumber :
					echo "<td align='right' >" . $urlstart . $Cell -> Value . $urlend . "</td>";
					break;
				case rColumnType::ColTypeDecimal:
					echo "<td align='right' >" . $urlstart .  number_format ( $Cell -> Value, 2  ) . $urlend . "</td>";
					break;
				case rColumnType::ColTypeImage:
					echo "<td align='right' >" . $urlstart . $Cell -> Value . $urlend . "</td>";
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
						echo "<td align='right' ></td>";
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
			 
			echo "</tr>";  	
			//	echo "<td>" .var_dump($vCol) . "</td>";
			
			}
	
			}
			
		}

		echo <<<EOT
</tbody>
EOT;


		echo <<<EOT
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
					<section class="grid_12">
					<div class="box">
						<div class="title"><div class="layout">' . $iTitle . '</div></div>						
						<div class="inside" style="padding:10px;">'; 
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
	

	


		
/* End of file theme_helper.php */
/* Location: ./application/helpers/theme_helper.php */