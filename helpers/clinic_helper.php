<?php


function total_today()
{
        $CI =& get_instance();
        $SQL = "select   IFNULL(SUM(visit_cost)-SUM(visit_discount),0)   as TOTAL_DATE From visit_s where visit_v_status_id = 3 and visit_date = '" . date("Y-m-d"). "'"  ; 
    
      
        $query = $CI->db->query( $SQL ) ; 
        $r = $query->result_array() ; 
        foreach ($r as $key => $value) {
            return $value["TOTAL_DATE"] ; 
        }
        return 0 ; 
        
  
}
?>
