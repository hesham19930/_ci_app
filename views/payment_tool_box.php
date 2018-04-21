<?php

    $safe_id = $tool_box_vars["safe_id"] ; 
	$trans_type = $tool_box_vars["trans_type"] ; 
 //   echo $file_id ; 
?> 

    <div class="controls-row">
                             
                                <div class="span12 m-wrap "style="background-color: #efefdf; padding-top:8px;padding-left:8px;border:#ccc 1px solid">
                                    <div class="tiles">
                  
                 
                                    
                                    <!-- -------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------>
                                    <div class="tile bg-red pull-right">
                                        <a href="<?php 
                                         
                                           if ($trans_type == 'cash') {$payment_type = 'CPRQ' ; } else {$payment_type = 'CKPRQ' ; }
                                           echo site_url('arap/payment_s/info/new/'.$safe_id . '/' . $payment_type); 
                                           
                                           ?> " >
                                         
                                         
                                        <div class="tile-body"><i class="icon-file"></i></div>
                                        <div class="tile-object">
                                            <div class="name" style="font-size: 10pt;">
                                               Payment Request
                                            </div>
                                            <div class="number">
                                                
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <!-- -------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------>
                                    <div class="tile bg-blue pull-right">
                                       
                                        	
                                        <a href="<?php 
                                         
                                           if ($trans_type == 'cash') {$payment_type = 'CP' ; } else {$payment_type = 'CKP' ; }
                                           echo site_url('arap/payment_s/info/new/'.$safe_id . '/' . $payment_type); 
                                           
                                           ?> " >
                                           
                                           	
                                        <div class="tile-body"><i class="icon-list"></i></div>
                                        <div class="tile-object">
                                            <div class="name" style="font-size: 10pt;">
                                                Payment
                                            </div>
                                            <div class="number">
                                                
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                     <!-- -------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------>
                                    <div class="tile bg-green pull-right">
                                        
                                        	
                                        <a href="<?php 
                                         
                                           if ($trans_type == 'cash') {$payment_type = 'CRRQ' ; } else {$payment_type = 'CKRRQ' ; }
                                           echo site_url('arap/payment_s/info/new/'.$safe_id . '/' . $payment_type); 
                                           
                                           ?> " >
                                           
                                           	
                                        <div class="tile-body"><i class="icon-download"></i></div>
                                        <div class="tile-object">
                                            <div class="name" style="font-size: 10pt;">
                                                Receipt Request
                                            </div>
                                            <div class="number">
                                                
                                            </div>
                                        </div>
                                        </a>
                                    </div>         
                                           <!-- -------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------>
                                    <div class="tile bg-yellow pull-right">
                                       
                                        	
                                         <a href="<?php 
                                         
                                           if ($trans_type == 'cash') {$payment_type = 'CR' ; } else {$payment_type = 'CKR' ; }
                                           echo site_url('arap/payment_s/info/new/'.$safe_id . '/' . $payment_type); 
                                           
                                           ?> " >
                                           	
                                        	
                                        	
                                        <div class="tile-body"><i class="icon-money"></i></div>
                                        <div class="tile-object">
                                            <div class="name" style="font-size: 10pt;">
                                                Receipt
                                            </div>
                                            <div class="number">
                                                
                                            </div>
                                        </div>
                                        </a>
                                    </div>                                    
                                            <!-- -------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------>
                                     <div class="tile bg-white pull-right">&nbsp;
                                     </div>
                                           <!-- -------------------------------------------------------------- ------------------------------------------------------------------------------------------------------------------------------>
                                    <div class="tile bg-green pull-right">
                                        <a href="<?php echo site_url('arap/payment_s/main/' . $trans_type . '/' .$safe_id ); ?>" >
                                        	
                                         
                                           
                                           	
                                        <div class="tile-body"><i class="icon-money"></i></div>
                                        <div class="tile-object">
                                            <div class="name" style="font-size: 10pt;">
                                                Safe
                                            </div>
                                            <div class="number">
                                                
                                            </div>
                                        </div>
                                        </a>
                                    </div>              
                                               
                       
                                
                                    
                                    
                                 </div></div></div>
                                    