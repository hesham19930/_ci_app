
<?php 

//$patient_visit = array_reverse($patient_visit) ; 




//$patient_visit=usort($patient_visit, "date_sort");
/*foreach( $patient_visit as $key=>$visit_id  ) {

    $visit_id=$visit_id['visit_id'];  


}
echo "<pre>"; 
echo print_r($visit_id);
echo"<pre>";
return ;
//.'/'. date('Y-m-d')
echo '<button 


class="btn green ajax_action right master_font"

caller_verb="visit"
caller_id="new_visit"
caller_url= "'.site_url('clinic/patients/info/0/'.$visit_id).'"
caller_target=""



>
r_langline("general.button_visit") ; 
</button>
';*/


  // usort($array, "cmp");

foreach( $patient_visit as $key=>$visit  ) {
    $date=$visit['visit_date'];    
    $complain=$visit['visit_complain'];  
    $diagnosis=$visit['visit_diagnosis'];
    $visit_cost=$visit['visit_cost'];
    $visit_id=$visit['visit_id'];
    $visit_type=$visit['visit_type_name'];
    $visit_remarks = $visit['visit_remarks'];
    $visit_discount = $visit['visit_discount'] ; 


  //$visit_id=$visit['visit_id'];
  //echo print_r($visit_id);
  //return ;
   
    
      
    ?>
    <div class="profile-classic row-fluid">
    <div class="span2"> <a href="#" ><h4><?php echo $date ?></h4></a> <br><br><br>
    
  
    
    </div>
    <ul class="unstyled span10">
        <li><span> <?php echo $visit_id ?>:</span> <?php echo $visit["visit_type_name"] ?> |  <?php echo $visit_cost ?> 
            <?php if ($visit_discount!=0) echo '<span style="color:red;" ><b>-'.$visit_discount.'</b></span>'; ?>  
            </li>
        <li><span>Complain:</span> <?php echo $complain ?></li>
        <li><span>Diagnosis:</span> <?php echo $diagnosis ?></li>
        <?php 
        if (trim($visit_remarks)!="") echo  '<li><span>Remarks:</span>'. $visit_remarks .'</li>' ; 
        ?> 
     </div>
      <div class="profile-classic row-fluid">
    <div class="span2"> <ul class="unstyled pull-right"><li>Visit Notes</li></ul> &nbsp;</div>
    <div class="no-more-tables span9" >
    <table class="table table-striped table-respxonsive  table-condensed  table-bordered table-advance txable-hover cf">
     <tbody>
     <?php 
                                
                                
            foreach( $visit["comments"] as $key=>$comment  ) 
        {
         echo '<tr class="data_row" >' ;
                    echo '<td class="highlight" style="width:10%;" no-wrap= no-wrap data-title="'.$comment['comment_prefix'].'">
                                                <div class="info"></div>
                                                <a >'. $comment['comment_prefix'].' :</a>
                                            </td>';
    
                            echo '<td class="wrappable"  data-title="'.$comment['comment'].'" >'. $comment['comment'] ;
                              echo ' </td>';
                    echo "</tr>";     
          }
     ?>
        </tbody>
        </table></div> 
        </div>

            
    </div>
    
    

    <div class="profile-classic row-fluid">
    <div class="span2"> <ul class="unstyled pull-right"><li>Visit Prescription</li></ul>&nbsp;</div>
    <div class="no-more-tables span9" >
    <table class="table table-striped table-respxonsive  table-condensed  table-bordered table-advance txable-hover cf">
     <tbody>
     <?php 
                                
                                
        foreach( $visit["prescription"] as $key=>$medication  ) 
        {
         echo '<tr class="data_row" >' ;
                    echo '<td class="highlight" style="width:10%;" no-wrap= no-wrap data-title="'.$medication['prescription_drug_name'].'">
                                                <div class="warning importantx"></div>
                                                <a >'. $medication['prescription_drug_name'].' : </a>
                                            </td>';
    
                            echo '<td class="wrappable"  data-title="'.$medication['prescription_daily_dose'].'" >'. $medication['prescription_daily_dose'] ;
                              echo ' </td>';
                    echo "</tr>";     
          }
     ?>
        </tbody>
        </table></div> 
        </div>
    
                                
    
     <br>   
    
    <?php 
    }
     
    
    
    ?>
 

 <a class="r_automation" 

        caller_key = "new_visit" 
        automation_verb="visit"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>


