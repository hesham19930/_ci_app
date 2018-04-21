<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
 
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
*/

// Key , Text , Url , ParentKey , Icon , Description
  
//$config["menu"]["MenuKey"] = Array($MenuText,$MenuURL,$MenuParentKey,$MenuItem,$MenuDescription );

$config["enable_menu"] = 1 ; 


$config["top_menu"] = array() ; 
$config["top_menu"]["reception"] = Array("Reception","clinic/dashboards/assistant","","","","");
$config["top_menu"]["patients"] = Array("Patients","clinic/patients","","","","");

$config["top_menu"]["reservations_report"] = Array("Reservations","clinic/reservations","","","","");
$config["top_menu"]["visits_report"] = Array("Visits","clinic/visits","","","","");
$config["top_menu"]["evals_report"] = Array("Evaluations","clinic/evaluations","","","","");
$config["top_menu"]["settings"] = Array("Settings","account/dashboard/settings","","","","");


/* End of file menu_config.php */
/* Location: ./application/config/menu_config.php */