    
    


<?php 

$patient_images = array_reverse($patient_images) ; 
foreach( $patient_images as $key=>$img  ) {
$type=$img['image_type_name']; 
$date=$img['image_date']; 
$center=$img['img_center_name'];       
?>
<div>

 <div   class="tile image double double-down selected">
 <div class="tile-body">
<div class="pop" sourceimage="<?php echo site_url('/clinic/images/get_image/' . $img['image_id'] ."/".$type ) ; ?>" >

  

      <img  width="300"   class="clicktoview" src="<?php echo site_url('/clinic/images/get_thumb/' . $img['image_id'] ."/".$type ) ; ?>"   
      visit_info = "   <?php echo  $date ?> :  <?php echo   $type  ?>  : <?php echo   $center  ?>   "    /> <br> <br> 
     </div>
     </div>
     <div class="tile-object">
     <div class="name btn blue">
                <?php echo  $date ?> :  <?php echo   $type  ?> : <?php echo   $center  ?>  
		</div>
	  
	          
         <div  class="number  small btn  red  icn-only ajax_action" 
               caller_id = "image_table" 
            caller_url = "<?php echo site_url('/clinic/images/ajax_delete/') .  '/'. $img['image_id'] ; ?>"
            caller_verb="delete" 
               ><i class=" icon-trash white"></i></div>
  </div>

	
 </div>
    
    
        <?php

}
?>


  <script>
  
      /*
      jQuery('.pop').live("click", function (e) { 
          alert("s") ;     
      var mysource = $(e.target).attr("src") ;
      alert(mysource) ; 
      $('#myModalLabel').html($(e.target).attr("visit_info")); 
   $('#imagepreview').attr('src', mysource); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
  });
  */

      jQuery('.clicktoview').live("click", function (e) {     
          e.preventDefault();
      var mysource = $(e.target).parent().attr("sourceimage") ;
 //   alert(mysource) ;  
    $('#imagepreview').attr('src', "");
    $('#imagepreview').attr('src', mysource); // here asign the image to the modal when the user click the enlarge link
    $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
  });

  </script>

