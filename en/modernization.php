<?php
$page = 'Модернизация и капитальный ремонт';
include ('left_column_2.php');
$number = 5;
$bkg="modernization.jpg";?>
		<h1>Модернизация и капитальный ремонт</h1>
		<div id="modernization">
			<h2 class="drop">Проектирование</h2>
				<div class="hide hidden">
					<ul>В соответствии с Техническим заданием разрабатывается полный комплект конструкторской документации. Комплект проектной документации, как правило,  включает в себя:
						<li>Схемы электрические принципиальные;</li>
						<li>Схемы электромонтажные и соединений;</li>
						<li>Перечень элементов;</li>
						<li>Принципиальные гидравлические схемы, схемы смазки, системы охлаждения;</li>
						<li>Программа электроавтоматики;</li>
						<li>Чертежи вновь разрабатываемых деталей и узлов.</li>
					</ul>
					<p>На этапе проектирования определяется дизайн и место установки нового пульта управления, расположение кабель-каналов, варианты замены конечных выключателей и других элементов станка на более современные. Разрабатывается проект размещения элементов в электрошкафу с учетом требований теплообмена, ЭМС и помехозащищенности. В проектах используются шкафы фирмы RITTAL, при необходимости устанавливаются кондиционеры. Монтаж электрических и электронных компонентов осуществляется в соответствии с промышленными стандартами. Для монтажа используются комплектующие SIEMENS, SCHNEIDER ELECTRIC, PHOENIX CONTACT, кабельная продукция LAPP KABEL. При монтаже используются современные средства маркировки цепей.</p>
					<p>Проектная документация выполняется с использованием программных пакетов EPLAN Electric, EPLAN Cabinet, КОМПАС, STEP7</p>
				</div>
			<h2 class="drop">Ремонт механической части</h2>
				<div class="hide hidden">
					<p>При ремонте механической части станков выполняется шлифовка направляющих, регулировка или замена ШВП, приводов подач, шпиндельного узла и коробки скоростей, замена РТИ, ремонт или замена гидро- пневмоаппаратуры, системы смазки, охлаждения. Производится восстановление точностных характеристик оборудования.</p>
					<div class="images_block">
						<a href="../image/modernization/mechanical_repair_1--big.jpg" target="_blank"><img src="../image/modernization/mechanical_repair_1.jpg"></a>
						<a href="../image/modernization/mechanical_repair_2--big.jpg" target="_blank"><img src="../image/modernization/mechanical_repair_2.jpg"></a>
					</div>
				</div>
			<h2 class="drop">Ремонт электрической части</h2>
				<div class="hide hidden">
					<p>При ремонте электрической части производится демонтаж элементов старого электрооборудования, устанавливаются новые системы ЧПУ, пульты управления, электрошкафы, новые измерительные системы, электродвигатели, кабели и др. Разрабатывается новая эксплуатационная документация в соответствии с требованиями ГОСТ2.008</p>
					<div class="images_block">
						<a href="../image/modernization/electrical_repair_1--big.jpg" target="_blank"><img src="../image/modernization/electrical_repair_1.jpg"></a>
						<a href="../image/modernization/electrical_repair_2--big.jpg" target="_blank"><img src="../image/modernization/electrical_repair_2.jpg"></a>
					</div>
				</div>
			<h2 class="drop">Выполненные проекты</h2>
				<div class="hide hidden">
					<ul>
						<li>CW-800, CW-1000 фирмы Heckert</li>
						<li>Horizon 4 фирмы Olivetti</li>
						<li>Многое другое</li>
					</ul>
				</div>
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
