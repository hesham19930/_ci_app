<?php

	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
	
?>
<div class="alert alert-block alert-warning fade in">
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    <h4 class="alert-heading" style="color:red;"><?php echo r_langline("Sorry! No Access") ; ?></h4>
                                    <p  style="color:black;font-size:1.1em;"><i class=" icon-eye-close big red"></i>
                                        <?php echo r_langline(" I am afraid you have no access to this information ") ; ?>
                                    </p>
                                    <?php 
                                    
                                    if (isset($access_component_name)) 
                                    {
                                        echo '</p> - ' . $access_component_name . '</p>'; 
                                    }
                                    if (isset($access_verb)) 
                                    {
                                        echo '</p> - ' . $access_verb . '</p>'; 
                                    }
                                        echo '</p> - ' .strtolower(sysDATA("user_group_name")). '</p>';
                                    ?>
                                    <p>
                                        <!--<a class="btn red" href="#">Do this</a> <a class="btn blue" href="#">Or do this</a>-->
                                    </p>
                                </div>
                                
		
	
	
	