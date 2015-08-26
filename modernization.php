<?php
$page = 'Модернизация и капитальный ремонт';
include ('left_column_2.php');
$number = 5;
$bkg="modernization.jpg";?>
		<h1>Модернизация и капитальный ремонт</h1>
		<div id="modernization">
			<p>ООО «КАМ-Инжиниринг» предлагает сотрудничество в области модернизации станочного парка Вашего предприятия.</p>
			<p>Наша компания с 2001 года занимается капитальным ремонтом и модернизацией металлообрабатывающего оборудования с ЧПУ, за прошедшие годы нами выполнено более 150 проектов по глубокой модернизации как отечественного, так и импортного оборудования, а общее число отремонтированных станков превысило 400шт.</p> 
			<p>Среди выполненных проектов - капитальный ремонт и модернизация станков:</p>
			
			<h3>Токарная группа</h3>
			<p>Отечественные: ИТ42С, 1И611П, 16M30Ф31, 1512, 1516Ф3, 1Е516Ф3, 1А516Ф3, 1525Ф3, 16А20, 16М30Ф31, 1П756ДФЗ, PT-755, ТПК125ВН2, AT450, СА564, СТП220, СТП320, 1Б340.</p>
			<p>Импортные: BERTHIEZ TFM-160, CZEPEL SD-610E, MAX MUELLER MDW10, MDW20, TAJMAC-ZPS SPS-2/25, TOS HULIN SKJ-12A, SKIQ-16, SKIQ-20, TOS VARNSDORF W100.</p>
			
			<h3>Фрезерная группа</h3>
			<p>Отечественные: ГФ214, ГФ826, ДФ966, МА655А2, МА655А8, МА655А10, 2A470, 2A450, ФП9П, ИР320ПМФ4, ИС500ПМФ4, ИР800ПМФ4, CBM1Ф4, MC032, ОЦ1И, СФП500.</p>
			<p>Импортные: FRITZ HECKERT FKRS-630, FKRSRS-500, CW-800, CW-1000, KOLB KBNG85M, Mikromat 12, Mikromat14, TOS KURIM FCQV-63, CZEPEL YBM90, MANDELLI Regent 1500, MITSUI SEIKI HR7A, OLIVETTI Horizon-3, Horizon-4, Horizon-21, Horizon-24, Horizon-700, TSUGAMI MP5A.</p>
			
			<h3>Шлифовальные станки</h3>
			<p>BERTHIEZ VGM200P9, FRITZ WERNER SKR-8A, SKR-12A, SKR-20A, KAPP RS2003</p>
			<p>и многие другие.</p>
			
			
			
			<h2>Ремонт механической части</h2>
			<p>При ремонте механической части станков выполняется шлифовка направляющих, регулировка или замена ШВП, приводов подач, шпиндельного узла и коробки скоростей, замена РТИ, ремонт или замена гидро- пневмоаппаратуры, системы смазки, охлаждения. Производится восстановление точностных характеристик оборудования.</p>
			<div class="images_block">
				<a href="image/modernization/mechanical_repair_1--big.jpg" target="_blank"><img src="image/modernization/mechanical_repair_1.jpg"></a>
				<a href="image/modernization/mechanical_repair_2--big.jpg" target="_blank"><img src="image/modernization/mechanical_repair_2.jpg"></a>
			</div>
			
			
			
			<h2>Ремонт электрической части</h2>
			<p>При ремонте электрической части производится демонтаж элементов старого электрооборудования, устанавливаются новые системы ЧПУ, пульты управления, электрошкафы, новые измерительные системы, электродвигатели, кабели и др. Разрабатывается новая эксплуатационная документация в соответствии с требованиями ГОСТ2.008</p>
			<div class="images_block">
				<a href="image/modernization/electrical_repeair_1--big.jpg" target="_blank"><img src="image/modernization/electrical_repeair_1.jpg"></a>
				<a href="image/modernization/electrical_repeair_2--big.jpg" target="_blank"><img src="image/modernization/electrical_repeair_2.jpg"></a>
			</div>
			
			
			
			<!--<h2 class="drop">Выполненные проекты</h2>
				<div class="hide hidden">
					<ul>
						<li>CW-800, CW-1000 фирмы Heckert</li>
						<li>Horizon 4 фирмы Olivetti</li>
						<li>Многое другое</li>
					</ul>
				</div>-->
		</div>
		</div>
	</div>
<script>
	var uls = document.getElementsByClassName('drop');
		for(var i=0; i<uls.length; i++) (function(i) {
			var element = uls[i];
			var child = element.nextElementSibling;
			element.onclick = function(event) {
				event = event || window.event;
				if (event.target.classList.contains('drop') || event.target.classList.contains('dropped')){
					child.classList.toggle('hidden');
					element.classList.toggle('drop');
					element.classList.toggle('dropped');
				}
				//alert(event.target.firstElementChild.nodeName);
				 // Кроссбраузерно получить событие
				if (event.stopPropagation) { // существует ли метод?
					// Стандартно:
					event.stopPropagation();
				} else {
					// Вариант IE
					event.cancelBubble = true;
				}
		}})(i);
</script>
<?php include ('footer.php');?>
