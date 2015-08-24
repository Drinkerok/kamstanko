<?php
$page = 'Изготовление';
include ('left_column_2.php');
$number = 1;
$bkg="production.jpg";?>
		<h1>Производство станков</h1>
		<div class="productions">
			<a href="special_machines.php" class="one_production">
				<img src="image/production/cnc_special_machines.jpg" alt="Специальные станки с ЧПУ"/>
				<p class="production_description">Специальные станки с ЧПУ</p>
			</a>
			<a href="turning_machines.php" class="one_production">
				<img src="image/production/turning_cnc_machines.jpg" alt="Токарные станки с ЧПУ"/>
				<p class="production_description">Токарные станки с ЧПУ</p>
			</a>
			<a href="milling_machines.php" class="one_production">
				<img src="image/production/cnc_milling_machines.jpg" alt="Фрезерные станки с ЧПУ"/>
				<p class="production_description">Фрезерные станки с ЧПУ</p>
			</a>
			<a href="#" class="one_production">
				<img src="image/production/electrical_cabinets_and_control_panels.jpg" alt="Электрошкафы и пульты управления"/>
				<p class="production_description">Электрошкафы и пульты управления</p>
			</a>
		</div>
	</div>
</div>
<?php include ('footer.php');?>
