<?php ?> 

<!--style="position: fixed; top:0 ; 
   right: 0;
   left: 0;
   z-index: 1030;
   margin-bxottom: 0;" --> 

<div class="controls-row " >  

    <div class="span12 m-wrap "style="background-color: #222; padding-top:8px;padding-left:8px;border:#ccc 1px solid">
        <div class="tiles">

            <!-- -------------------------------------------------------------- -->
            <div class="tile bg-green pull-right">
                <a href="<?php echo site_url('clinic/dashboards/assistant'); ?>" >
                    <div class="tile-body"><i class="icon-group"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
<?php echo r_langline('reception_box', "dashboard.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>


            <!--               
            <!-- -------------------------------------------------------------- -->
<?php
if ($user_group_name == "DOCTOR") {
    ?>



                <div class="tile bg-blue  pull-right">
                    <a href="<?php echo site_url('clinic/patients/info/new'); ?>" >
                        <div class="tile-body"><i class="icon-user"></i></div>
                        <div class="tile-object">
                            <div class="name" style="font-size: 10pt;">
    <?php echo r_langline('new_patient_box', "patient.master."); ?> 
                            </div>
                            <div class="number">

                            </div>
                        </div>
                    </a>
                </div>  

    <?php }
?>
            <!-- -------------------------------------------------------------- -->



            <!-- -------------------------------------------------------------- -->



            <div class="tile bg-red pull-right" >
                <a href="<?php echo site_url('clinic/patients'); ?>" >
                    <div class="tile-body"><i class="icon-search"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
<?php echo r_langline('search_patient_box', "patient.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>
            <!-- -------------------------------------------------------------- -->


            <div class="tile bg-purple pull-right" >
                <a href="<?php echo site_url('clinic/visits'); ?>" >
                    <div class="tile-body"><i class="icon-search"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
<?php echo r_langline('search_visit_box', "visit.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>
            <!-- -------------------------------------------------------------->



            <div class="tile bg-purple pull-right" >
                <a href="<?php echo site_url('clinic/evaluations'); ?>" >
                    <div class="tile-body"><i class="icon-search"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
<?php echo r_langline('evaluation_box', "evaluation.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>
            <!-- -------------------------------------------------------------- -->
            <div class="tile bg-yellow pull-right">
                <a href="<?php echo site_url('account/dashboard/settings'); ?>" >
                    <div class="tile-body"><i class="icon-cogs"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
<?php echo r_langline('setting_box', "dashboard.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>

            <div class="tile bg-red pull-right">
                <a href="#" >
                    <div class="tile-body"><i class="icon-money"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
                            LE  
                        </div>
                        <div class="number">
<?php
echo
total_today();
;
?>
                        </div>
                    </div>
                </a>
            </div>


            <!-- -------------------------------------------------------------->
            <div class="tile bg-green pull-right">

                <a href="#" onClick="history.go(0)" >
                    <div class="tile-body"><i class="icon-refresh"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
                            <?php echo r_langline('refresh_box', "refresh"); ?> 
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>


            <div class="tile bg-red pull-right" >
                <a href="<?php echo site_url('todoyu/clients'); ?>" >
                    <div class="tile-body"><i class="icon-user"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
                            <?php echo r_langline('clients', "client.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>
            
            <div class="tile bg-red pull-right" >
                <a href="<?php echo site_url('todoyu/mpersons'); ?>" >
                    <div class="tile-body"><i class="icon-user"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
                            <?php echo r_langline('mpersons', "mperson.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>
            
             <div class="tile bg-green pull-right" >
                <a href="<?php echo site_url('todoyu/projects'); ?>" >
                    <div class="tile-body"><i class="icon-cogs"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
                            <?php echo r_langline('projects', "project.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>
            
            <div class="tile bg-blue pull-right" >
                <a href="<?php echo site_url('todoyu/industrys'); ?>" >
                    <div class="tile-body"><i class="icon-cogs"></i></div>
                    <div class="tile-object">
                        <div class="name" style="font-size: 10pt;">
                            <?php echo r_langline('industry', "industrys.master."); ?>
                        </div>
                        <div class="number">

                        </div>
                    </div>
                </a>
            </div>



            <!-- -------------------------------------------------------------- 
       <div class="tile bg-yellow pull-right">
               <a href="<?php echo site_url('airline'); ?>" >
           <div class="tile-body"><i class="icon-plane"></i></div>
           <div class="tile-object">
               <div class="name" style="font-size: 10pt;">
                       SETTINGS
               </div>
               <div class="number">
                   
               </div>
           </div>
           </a>
       </div>
            <!-- -------------------------------------------------------------- 
            <div class="tile bg-green pull-right">
                    <a href="<?php echo site_url('account/dashboard/settings'); ?>" >
                <div class="tile-body"><i class="icon-cogs"></i></div>
                <div class="tile-object">
                    <div class="name" style="font-size: 10pt;">
                            SETTINGS
                    </div>
                    <div class="number">
                        
                    </div>
                </div>
                </a>
            </div>
            <!--  -------------------------------------------------------------- 
            <div class="tile bg-yellow pull-right">
                <a href="<?php echo site_url('reports'); ?>" >
                <div class="tile-body"><i class="icon-search"></i></div>
                <div class="tile-object">
                    <div class="name" style="font-size: 10pt;">
                        Reporting 
                    </div>
                    <div class="number">
                        
                    </div>
                </div>
                </a>
            </div>  
            --> 

        </div></div></div>




<!---------------------------------------------------------------------------------------------------->
