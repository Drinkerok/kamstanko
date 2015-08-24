<?php include ('header.php');?>
<div id="navigation">
	<ul id="nav">
		<li class="level-1"><a href="engineering.php">Engineering</a></li>
		<li class="level-1"><a href="production.php">Production</a>
			<ul>
				<li class="level-2"><a href="#">Special machines</a></li>
				<li class="level-2"><a href="#">Electrical cabinets</a></li>
				<li class="level-2"><a href="serial_machines.php">Serial machines</a></li>
				<li class="level-2"><a href="#">Non-standard equipment</a></li>
			</ul>
		</li>
		<li class="level-1"><a href="service.php">Service and technological support</a>
		<li class="level-1"><a href="delivery.php">Sale of machines and components</a></li>
		<li class="level-1"><a href="modernization.php">Modernization and overhaul</a></li>
		<li class="level-1"><a href="it.php">IT-technologies for the production</a>
			<ul>
				<li class="level-2"><a href="mda.php">Monitoring of machines. MDA module</a></li>
				<li class="level-2"><a href="dnc.php">NC program management. DNC module</a></li>
				<!--<li class="level-2"><a href="tpm.php">Планирование и учет ТО. Модуль TPM</a></li>-->
				<li class="level-2"><a href="black_box.php">Module "Black Box"</a></li>
			</ul>
		</li>
		<li class="level-1"><a href="siemens.php">SIEMENS parts stock</a></li>
	</ul>
</div>				
</div>
<div id="main_content">
	<div id="main_navigation">
		<ul>
			<li><a href="index.php">About us</a></li>
			<li class="active"><a href="engineering.php">Activity</a></li>
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