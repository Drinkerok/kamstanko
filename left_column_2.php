<?php include ('header.php');?>
<div id="navigation">
	<ul id="nav">
		<li class="level-1"><a href="engineering.php">Инжиниринг</a></li>
		<li class="level-1"><a href="production.php">Производство</a>
			<ul>
				<li class="level-2"><a href="#">Специальные станки</a></li>
				<li class="level-2"><a href="#">Электрошкафы</a></li>
				<li class="level-2"><a href="serial_machines.php">Серийные станки</a></li>
				<li class="level-2"><a href="#">Нестандартное оборудование</a></li>
			</ul>
		</li>
		<li class="level-1"><a href="service.php">Сервисная и технологическая поддержка</a>
		<li class="level-1"><a href="delivery.php">Поставка оборудования</a></li>
		<li class="level-1"><a href="modernization.php">Модернизация и капитальный ремонт</a></li>
		<li class="level-1"><a href="it.php">IT-технологии для производства</a>
			<ul>
				<li class="level-2"><a href="mda.php">Мониторинг работы станков. Модуль MDA</a></li>
				<li class="level-2"><a href="dnc.php">Управление программами ЧПУ. Модуль DNC</a></li>
				<!--<li class="level-2"><a href="tpm.php">Планирование и учет ТО. Модуль TPM</a></li>-->
				<li class="level-2"><a href="black_box.php">Модуль «Черный ящик»</a></li>
			</ul>
		</li>
		<li class="level-1"><a href="siemens.php">Склад SIEMENS</a></li>
	</ul>
</div>				
</div>
<div id="main_content">
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