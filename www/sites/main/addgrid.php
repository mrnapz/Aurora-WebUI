<script type="text/javascript" src="javascripts/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="javascripts/highslide/highslide.css" />
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="javascripts/highslide/highslide-ie6.css" />
<![endif]-->
<script type="text/javascript"> 
    hs.graphicsDir = 'javascripts/highslide/graphics/';
    hs.outlineType = 'rounded-white';
</script>

<!--
    3) This is how you mark up the thumbnail image with an anchor tag around it.
    The anchor's href attribute defines the URL of the full-size image.
-->

<!--
    4 (optional). This is how you mark up the caption. The caption must be directly
    after the anchor above.
-->

<div id="content">
	<div id="ContentHeaderLeft"><h5><?php echo SYSNAME; ?></h5></div>
	<div id="ContentHeaderCenter"></div>
	<div id="ContentHeaderRight"><h5><?php echo $webui_addgrid; ?></h5></div>
	<div id="addgrid">
	<div id="info"><p><?php echo $webui_addgrid_info; ?></p></div>

	<div id="addgrid01">
		<div align="center"><center>
		<table>
			<tr>
				<td width="20%" align="center"><h3><?php echo $webui_addgrid_hippo; ?></h3></td>
				<td width="20%" align="center"><h3><?php echo $webui_addgrid_imprudence; ?></h3></td>
				<td width="20%" align="center"><h3><?php echo $webui_addgrid_phoenix; ?></h3></td>
				<td width="20%" align="center"><h3><?php echo $webui_addgrid_emerald; ?></h3></td>
				<td width="20%" align="center"><h3><?php echo $webui_addgrid_meerkat; ?></h3></td>
			</tr>

			<tr>
				<td width="20%" align="center">
					<a id="thumb1" href="images/viewers/digigrids_hippo_01.jpg" class="highslide" onclick="return hs.expand(this, {wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
					<img style="margin-top: 15px" width="120" height="80" src="images/viewers/digigrids_hippo_thumb_01.jpg" alt="Highslide JS" title="<?php echo $webui_addgrid_click_to_enlarge; ?>" /></a>
					<div class='highslide-caption' id="caption-for-thumb1"><?php echo $webui_addgrid_config_hippo; ?>"</div>
				</td>
				<td width="20%" align="center">
					<a id="thumb1" href="images/viewers/digigrids_imprudence_01.jpg" class="highslide" onclick="return hs.expand(this, {wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
					<img style="margin-top: 15px" width="120" height="80" src="images/viewers/digigrids_imprudence_thumb_01.jpg" alt="Highslide JS" title="<?php echo $webui_addgrid_click_to_enlarge; ?>" /></a>
					<div class='highslide-caption' id="caption-for-thumb2"><?php echo $webui_addgrid_config_imprudence; ?>"</div>
				</td>
				<td width="20%" align="center">
					<a id="thumb1" href="images/viewers/digigrids_phoenix_01.jpg" class="highslide" onclick="return hs.expand(this, {wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
					<img style="margin-top: 15px" width="120" height="80" src="images/viewers/digigrids_phoenix_thumb_01.jpg" alt="Highslide JS" title="<?php echo $webui_addgrid_click_to_enlarge; ?>" /></a>
					<div class='highslide-caption' id="caption-for-thumb3"><?php echo $webui_addgrid_config_phoenix; ?>"</div>
				</td>
				<td width="20%" align="center">
					<a id="thumb1" href="images/viewers/digigrids_emerald_01.jpg" class="highslide" onclick="return hs.expand(this, {wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
					<img style="margin-top: 15px" width="120" height="80" src="images/viewers/digigrids_emerald_thumb_01.jpg" alt="Highslide JS" title="<?php echo $webui_addgrid_click_to_enlarge; ?>" /></a>
					<div class='highslide-caption' id="caption-for-thumb4"><?php echo $webui_addgrid_config_emerald; ?>"</div>
				</td>
				<td width="20%" align="center">
					<a id="thumb1" href="images/viewers/digigrids_meerkat_01.jpg" class="highslide" onclick="return hs.expand(this, {wrapperClassName: 'borderless floating-caption', dimmingOpacity: 0.75, align: 'center'})">
					<img style="margin-top: 15px" width="120" height="80" src="images/viewers/digigrids_meerkat_thumb_01.jpg" alt="Highslide JS" title="<?php echo $webui_addgrid_click_to_enlarge; ?>" /></a>
					<div class='highslide-caption' id="caption-for-thumb5"><?php echo $webui_addgrid_config_meerkat; ?>"</div>
				</td>
			</tr>
		</table>
		</center></div>
	</div>

	<div class="clear"></div>

		<div id="addgrid02">
			<h3><?php echo $webui_addgrid_title; ?></h3>
			<p>&#149; <?php echo $webui_addgrid_add; ?></p>
			<p>&#149; <?php echo $webui_addgrid_complete; ?></p>
		
			<p><b><?php echo $webui_addgrid_gridNick; ?> :</b> <?= AddGrid_GridNick ?></p>
			<p><b><?php echo $webui_addgrid_gridName; ?> :</b> <?= AddGrid_GridName ?></p>

			<p><b><?php echo $webui_addgrid_AvFirstName; ?> :</b> <?= AddGrid_AvFirstName ?></p>
			<p><b><?php echo $webui_addgrid_AvlastName; ?> :</b> <?= AddGrid_AvLastName ?></p>
			<p><b><?php echo $webui_addgrid_Avpassword; ?> :</b> <?= AddGrid_AvPassword ?></p>		
		
			<p><b><?php echo $webui_addgrid_loginURL; ?> :</b> <?= AddGrid_LoginURL ?></p>
		
			<p>&#149; <?php echo $webui_addgrid_getGridInfo; ?></p>
			<p><b><?php echo $webui_addgrid_loginPage; ?> :</b> <?= AddGrid_LoginPage ?></p>
			<p><b><?php echo $webui_addgrid_helperURL; ?> :</b> <?= AddGrid_HelperURL ?></p>
			<p><b><?php echo $webui_addgrid_website; ?> :</b> <?= AddGrid_Website ?></p>
			<p><b><?php echo $webui_addgrid_support; ?> :</b> <?= AddGrid_Support ?></p>
			<p><b><?php echo $webui_addgrid_account; ?> :</b> <?= AddGrid_Account ?></p>
			<p><b><?php echo $webui_addgrid_password; ?> :</b> <?= AddGrid_Password ?></p>
			<p><b><?php echo $webui_addgrid_webSearch; ?> :</b> <?= AddGrid_WebSearch ?></p>
			<!-- <p><b>Select a grid :</b> digigrids</p> -->
			<!-- <p><b>Plateform :</b> OpenSim</p> -->
			<p>&#149; <?php echo $webui_addgrid_apply; ?></p>
			<p>&#149; <?php echo $webui_addgrid_login; ?></p>
			<p>* <?php echo $webui_addgrid_valid; ?></p>
		</div>

		<?php if($displayWelcomeMessage) { ?>
			<?php
			if($_SESSION[NAME] != "") {
				// echo $webui_welcome_back." ";
				// echo $_SESSION[NAME];
				if($allowWebLogin == 'true')
				{
				echo "<div class='clear'></div><div id='addgrid10'><center><h3>";
				echo "<a href=\"secondlife:///app/login?first_name=$_SESSION[FIRSTNAME]&last_name=$_SESSION[LASTNAME]&location=last&grid=$gridNickName&web_login_key=$_SESSION[WEBLOGINKEY]\">$webui_login</a> au chat 3D.";
				echo "</h3></center></div>";
				}
			}
			else {;}
			?>
		<?php } ?>

		<div id="alert"><p><?php echo $webui_addgrid_diff_info; ?></p></div>

		<div id="addgrid03">
			<h3><?php echo $webui_addgrid_diff_title; ?></h3>
			<p>&#149; <?php echo $webui_addgrid_diff_shortcut; ?></p>
			<p>&#149; <?php echo $webui_addgrid_diff_propriete; ?></p>
			<p>&#149; <?php echo $webui_addgrid_diff_complete; ?></p>

			<p>- <b><?php echo $webui_addgrid_KokuaViewer; ?> :</b> Kokua.exe" -loginuri <?= AddGrid_KokuaURL ?></p>
			<p>- <b><?php echo $webui_addgrid_SecondLifeViewer; ?> :</b> SecondLife.exe" -loginuri <?= AddGrid_SecondLifeURL ?></p>
			<p>- <b><?php echo $webui_addgrid_KristenViewer; ?> :</b> Kirstens S20.exe" -loginuri <?= AddGrid_KristenURL ?></p>
		</div>

		<div id="info"><p><?php echo $webui_addgrid_HyperGrid_info; ?></p></div>
		<div id="addgrid04">
			<h3><?php echo $webui_addgrid_HyperGrid_title; ?></h3>
			<p><?php echo $webui_addgrid_HyperGrid_content; ?></p>
		</div>

		<div id="alert"><p><?php echo $webui_addgrid_banned_info; ?></p></div>
		<div id="addgrid05">
			<h3><?php echo $webui_addgrid_banned_title; ?></h3>
			<p><?php echo $webui_addgrid_banned_content; ?></p>
		</div>
		<!-- <?php // include("sites/modules/steps123.php"); ?> -->
	</div>
</div>