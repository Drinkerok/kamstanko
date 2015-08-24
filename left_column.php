<?php include ('header.php');?>
<div id="navigation">
	<ul id="nav">
		<li class="level-1"><a href="index.php">О компании</a></li>
		<!--<li class="level-1"><a href="management.php">Руководство</a></li>-->		
		<li class="level-1"><a href="certificates.php">Сертификаты</a></li>
		<li class="level-1"><a href="contacts.php">Контакты</a></li>
		<li class="level-1"><a href="partners.php">Наши заказчики</a></li>
		<li class="level-1"><a href="gallery_exhibition.php">Фотогалерея</a>
			<ul>
				<li class="level-2"><a href="gallery_exhibition.php">Выставки</a></li>
				<li class="level-2"><a href="gallery_production.php">Производство</a></li>
				<li class="level-2"><a href="gallery_non-standard_equipment.php">Нестандартное оборудование</a></li>
				<li class="level-2"><a href="gallery_completed_projects.php">Выполненные проекты</a></li>
			</ul>
		</li>
	</ul>
</div>				
</div>
<div id="main_content">
	
		<a href="index.php" class="logo">
			<img src="image/logo.jpg" alt="Logo"/>
		</a>
	<div id="main_navigation">
		<ul>
			<li class="active"><a href="index.php">О компании</a></li>
			<li><a href="engineering.php">Деятельность</a></li>
			<li><a href="contacts.php">Контакты</a></li>
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