<?php

if (!isset($title)) $title = "Information" ; 
if (!isset($color)) $color  ="blue_color" ; 
    r_theme_row_start() ;   
?>

<div class="portlet ">
                            <div class="portlet-title">
                                <div class="caption <?php echo $color ; ?>" style="padding-bottom: 5px;" ><i class="icon-bookmark" style="color:<?php echo $color ; ?> ;"></i><b><?php echo $title; ?></b></div>
                                <div class="tools"><!--
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>-->
                                </div>
                            </div>
                            <div class="portlet-body">
                                <?php 
                                if (isset($content))
                                {
                                    echo $content ; 
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                           r_theme_row_end() ; 
                           ?> 
                            