<?php
/**
 * 
 * @file header.php Header file
 * 
 * */

// Security Check
if( !defined( 'ABSPATH' ) ) die();
global $FileManager;
?>
<div class='fm-header'>
	
	<h1><img class='fm-logo' src='<?php echo plugin_dir_url(__FILE__) . '../..' . DS . 'img' . DS . 'icon-128x128.png';?>'><?= $FileManager->name; ?></h1>
	
	<ul>
		<li><a href='<?= $FileManager->support_page; ?>'>Need help?</a></li>
		<li><a href='<?= $FileManager->feedback_page; ?>'>Leave us a feedback</a></li>
		<li class='fm-marketing'><a href='<?= $FileManager->giribaz_landing_page; ?>'>Extend</a></li>
	</ul>

</div>
