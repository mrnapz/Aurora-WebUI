<div id="content">
<?php if($displayDate) { ?>
<div id="ContentHeaderLeft"><h5><?= SYSNAME ?></h5></div>

<div id="ContentHeaderCenter">
    <div id="date">
     <?php $date = date("d-m-Y");
    $heure = date("H:i");
    Print("$webui_before_date $date $webui_after_date $heure");
    ?>
    </div>
</div>

<div id="ContentHeaderRight"><h5><?php echo $webui_home; ?></h5></div>
<?php } ?>

<div class="clear"></div>
        
<? include("sites/modules/steps123.php"); ?>
        
<div id="annonce7"><h3><?php echo $webui_welcome; ?> <?= SYSNAME ?></h3><?php echo $webui_home_page; ?></div>
<div id="annonce10"><p><?php echo $webui_home_page_warning; ?></p></div>

<? include("sites/modules/infos123.php"); ?>

</div>
