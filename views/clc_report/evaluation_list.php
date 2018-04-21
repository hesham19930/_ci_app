
<?php 


 $patient_eval = array_reverse($patient_eval) ; 


 /*function date_sort($a, $b) {
    return strtotime($a) - strtotime($b);
}

$patient_eval= usort($patient_eval, "date_sort");
*/

foreach($patient_eval["list_table"] as $key=>$patient_evaluation  ) {
    $evaluation_date=$patient_evaluation['evaluation_date']; 
    $evaluation_company=$patient_evaluation['company_name'];
    $visit_id=$patient_evaluation['evaluation_id'];
    $evaluation_person=$patient_evaluation['evaluation_person'];    
    $eval_form_name = $patient_evaluation['evaluation_form_name'];
    $conclusion=  $patient_evaluation['evaluation_conclusion'];
   // $evaluation_patient_id=$patient_evaluation['evaluation_patient_id']; 
    
  
    
      

    ?>
     <div class="profile-classic row-fluid">
    <div class="span2"> <a href="#" ><h4><?php echo $evaluation_date ?></h4></a></div>
    <ul class="unstyled span10">
   
         <li> <span>Type :</span> <?php echo $eval_form_name ;  ?> </li>
          <li> <span>Conclusion:</span> <?php echo $conclusion ?> </li>
  <li> <span>Company Name:</span> <?php echo $evaluation_company ?> </li>
  
  <li> <span>Person Name:</span> <?php echo $evaluation_person ?> </li>
 
      
 
         
    </ul> 

   
    </div>
    <div class="profile-classic row-fluid">
    <div class="span2"> &nbsp;</div>
    <div class="no-more-tables span9" >
    <table class="table table-striped table-respxonsive  table-condensed  table-bordered table-advance txable-hover cf">
     <tbody>
     <?php 
                                
            
                                
        foreach( $patient_evaluation["evaluation"] as $key=>$eval  ) 
        {

           /* $evdata_value_name=$eval['eval_field_name']; 
        $evdata_value_date=$eval['evdata_value_date'];
        $evdata_value_number=$eval['evdata_value_number'];
        $evdata_value_string=$eval['evdata_value_string'];
            
            ?>
            <div class="profile-classic row-fluid">
           
            <ul class="unstyled span10">



                 <li><span>Field Name:</span> <?php echo $evdata_value_name ?>
                
                </li>

                <li><span>Value Date:</span> <?php echo $evdata_value_date ?>
                
                </li>
               <li> <span>Value Number:</span> <?php echo $evdata_value_number ?></li>

               <li> <span>Value String:</span> <?php echo $evdata_value_string ?></li>
                
              
                
                
                 
              
                 
            </ul>
            
           
                </tbody>
                </table></div> 
                </div>
            
                                        
            
             <br>   <hr style="height: 2px;background-color:grey;">   
             <?php */
             echo '<tr class="data_row" >' ;
             echo '<td class="highlight" data-title="'.$eval['eval_field_text'].'">
                                         <div class="info"></div>
                                         <a >'. $eval['eval_field_text'].'</a>
                                     </td>';
if ($eval['eval_field_type_id']==3)
{
    echo '<td class="wrappable"  data-title="'.+$eval['evdata_value_number'].'" >'. +$eval['evdata_value_number'] ;
    echo ' </td>';
}

if ($eval['eval_field_type_id']==4)
{
    echo '<td class="wrappable"  data-title="'.+$eval['evdata_value_number'].'" >'. +$eval['evdata_value_number'] ;
    echo ' </td>';
}

if ($eval['eval_field_type_id']==2)

{

                     echo '<td class="wrappable"  data-title="'.$eval['evdata_value_date'].'" >'. $eval['evdata_value_date'] ;
                       echo ' </td>';
}

if($eval['eval_field_type_id']==1)
{

                       echo '<td class="wrappable"  data-title="'.$eval['evdata_value_string'].'" >'. $eval['evdata_value_string'] ;
                       echo ' </td>';
}
if($eval['eval_field_type_id']==1)
{

                       echo '<td class="wrappable"  data-title="'.$eval['evdata_value_string'].'" >'. $eval['evdata_value_string'] ;
                       echo ' </td>';
}

                      
             echo "</tr>";    
}

?>
</tbody>
</table></div> 
</div>

    

<br>   <hr style="height: 2px;background-color:grey;">

<?php 
}



?>

























