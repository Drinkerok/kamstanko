<?php include ('header.php');?>
<div id="navigation">
	<ul id="nav">
		<li class="level-1"><a href="engineering.php">Инжиниринг</a></li>
		<li class="level-1"><a href="production.php">Производство станков</a>
			<ul>
				<li class="level-2"><a href="special_machines.php">Специальные станки с ЧПУ</a></li>
				<li class="level-2"><a href="milling_machines.php">Фрезерные станки с ЧПУ</a></li>
				<li class="level-2"><a href="turning_machines.php">Токарные станки с ЧПУ</a></li>
				<li class="level-2"><a href="#">Электрошкафы и пульты управления</a></li>
			</ul>
		</li>
		<li class="level-1"><a href="#">Нестандартное производство</a>
		<li class="level-1"><a href="service.php">Сервис</a>
		<li class="level-1"><a href="delivery.php">Поставка оборудования и комплектующих</a></li>
		<li class="level-1"><a href="modernization.php">Модернизация и капитальный ремонт</a></li>
		<li class="level-1"><a href="it.php">IT-технологии для производства</a>
			<ul>
				<li class="level-2"><a href="mda.php">Мониторинг работы станков. Модуль MDA</a></li>
				<li class="level-2"><a href="dnc.php">Управление программами ЧПУ. Модуль DNC</a></li>
				<!--<li class="level-2"><a href="tpm.php">Планирование и учет ТО. Модуль TPM</a></li>-->
				<li class="level-2"><a href="black_box.php">Модуль «Черный ящик»</a></li>
			</ul>
		</li>
		<li class="level-1"><a href="siemens.php">Региональный склад SIEMENS</a></li>
	</ul>
</div>				
</div>
<div id="main_content">
	<a href="index.php" class="logo">
		<img src="image/logo.jpg" alt="Logo"/>
	</a>
	<div id="main_navigation">
		<ul>
			<li><a href="index.php">О компании</a></li>
			<li class="active"><a href="engineering.php">Деятельность</a></li>
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