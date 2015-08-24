<?php
$page = 'Manufacture';
include ('left_column_2.php');
$number = 1;
$bkg="production.jpg";?>
		<h1>Machines production</h1>
		<div class="productions">
			<a href="special_machines.php" class="one_production">
				<img src="../image/production/cnc_special_machines.jpg" alt="Cnc special machines"/>
				<p class="production_description">Cnc special machines</p>
			</a>
			<a href="turning_machines.php" class="one_production">
				<img src="../image/production/turning_cnc_machines.jpg" alt="Turning cnc machines"/>
				<p class="production_description">Turning cnc machines</p>
			</a>
			<a href="milling_machines.php" class="one_production">
				<img src="../image/production/cnc_milling_machines.jpg" alt="Cnc milling machines"/>
				<p class="production_description">Cnc milling machines</p>
			</a>
			<a href="#" class="one_production">
				<img src="../image/production/electrical_cabinets_and_control_panels.jpg" alt="Electrical cabinets and control panels"/>
				<p class="production_description">Electrical cabinets and control panels</p>
			</a>
		</div>	
	</div>
</div>
<?php include ('footer.php');?>
