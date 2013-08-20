<?php
/**
 * sidebox
 */
?>

        <div id="Alfa" >
            <div id="sidebox">
                <div id="GlobalMenus" class="Left-GlobalMenus">
                    <?php $bcBaser->element('global_menu') ?>
                </div>
            </div>
                <?php $bcBaser->widgetArea() ?>

<!--
            <div id="sidebox">
                <?php $bcBaser->widgetArea() ?>
            </div>
-->
            <div id="sidebox">
                <div id="sidebox-bnr">
                    <?php $bcBaser->img('./sidebox/flag_works_01_bana.png', array('url' => 'http://www.itm-asp.com/')); ?>
                </div>
            </div>
            <div id="sidebox">
                <div id="sidebox-bnr">
                    <?php $bcBaser->img('./sidebox/flag_works_01_bana.jpg', array('url' => 'http://nadadesigns.flagsystem.co.jp/')); ?>
                    <span style="font-size:12px;">Flagsystemのデザインルームです</span>
                </div>
            </div>

            <?php //$bcBaser->widgetArea() ?>
        </div><!--Alfa-->