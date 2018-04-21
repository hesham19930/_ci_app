<style>

div#myDiv {
    -ms-transform: rotate(88deg); /* IE 9 */
    -webkit-transform: rotate(0deg); /* Safari */
    transform: rotate(90deg); /* Standard syntax */
    padding-bottom: 19cm;
  
  
}

</style>
<div align="center">
    <table style="width:50%;direxction: rtl" border="0">
        <tr><td>&nbsp;</td></tr>
        <tr><td width=1% nowrap="nowrap" ><b><?php echo $patient['visit_patient_id']; ?> - <?php echo substr($patient['visit_type_name'],0,3) ; ?></b></td></tr>
       </table>
<table style="width:90%;direction: rtl" border="0">
    <tr style="height:175"><td>&nbsp;</td></tr>
    <tr><td width=1% nowrap="nowrap">الاسم : </td><td style="text-align:right;font-size: 16px;"><b><?php echo $patient['patient_name']; ?></b></td>  </tr>
  <tr><td nowrap="nowrap">التاريخ: </td><td><?php echo $patient['visit_date']; ?></td></tr>
  <!--<tr><td nowrap="nowrap">رقم الملف  : </td><td><b><?php echo $patient['visit_patient_id']; ?></b></td></tr>-->
    </table>
    </div>
    <hr>
    <div align="right">
<table style="width:90%">
  <tr style="height:14px;">
<?php 



foreach( $patient_prescription as $key=>$prescription  ) {
?> <td><?php echo  $prescription['prescription_drug_name'] . ' - ' . $prescription['prescription_daily_dose']  ; ?> </td> 
<td> <?php  echo $prescription['prescription_remarks']; ?>  </td>
</tr>


<?php 

}?>


</table>
</div>
 <hr>
 





<script>

window.print();

var d = new Date();
document.getElementById("demo").innerHTML = d;

</script>