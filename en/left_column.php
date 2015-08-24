<?php include ('header.php');?>
<div id="navigation">
	<ul id="nav">
		<li class="level-1"><a href="index.php">About us</a></li>
		<!--<li class="level-1"><a href="management.php">Management</a></li>-->		
		<li class="level-1"><a href="certificates.php">Certificates</a></li>
		<li class="level-1"><a href="contacts.php">Contact us</a></li>
		<li class="level-1"><a href="partners.php">Our customers</a></li>
		<li class="level-1"><a href="gallery_exhibition.php">Gallery</a>
			<ul>
				<li class="level-2"><a href="gallery_exhibition.php">Exhibition</a></li>
				<li class="level-2"><a href="gallery_production.php">Production</a></li>
				<li class="level-2"><a href="gallery_non-standard_equipment.php">Non-standard equipment</a></li>
				<li class="level-2"><a href="gallery_completed_projects.php">Completed projects</a></li>
			</ul>
		</li>
	</ul>
</div>				
</div>
<div id="main_content">
	<a href="index.php" class="logo">
		<img src="../image/logo_en.jpg" alt="Logo"/>
	</a>
	<div id="main_navigation">
		<ul>
			<li class="active"><a href="index.php">About us</a></li>
			<li><a href="engineering.php">Activity</a></li>
			<li><a href="contacts.php">Contact us</a></li>
		</ul>
		<?php if ($_SESSION['lang'] == 'ru'){
			//$lang_href = str_replace('kamstanko/', 'kamstanko/en/', $_SERVER["REQUEST_URI"] );
			$lang_href = 'en'.$_SERVER["REQUEST_URI"]?>
			<a href="<?php echo $lang_href?>" class="language">English</a>
		<?php } else{
			$lang_href = str_replace('/en/', '/', $_SERVER["REQUEST_URI"] )?>
			<a href="<?php echo $lang_href?>" class="language">Русский</a>
		<?php }?>
	</div>
		<div id="information">