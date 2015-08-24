<?php
$page = 'Склад SIEMENS';
include ('left_column_2.php');
$number = 7;
$bkg="siemens.jpg";?>
		<h1>Склад SIEMENS</h1>
		<a href="catalogs/kamstanko_siemens.pdf" target="_blank" class="pdf">Перечень нашего регионального склада на 22.06.2015</a>
		<!--<p align="center">Раздел находится в разработке</p>
		<div id="siemens">
			<div id="search">
				<input type="text" value="Введите код продукта" id="search_input"/>
				<button>Искать</button>
			</div>
		<ul id="store">
			<li class="drop">Приводная техника
				<ul class="hidden">
					<li class="drop">Преобразователи
						<ul class="hidden">
							<li>Стандартные преобразователи</li>
							<li>Преобразователи на среднее напряжение</li>
							<li>Преобразователи постоянного тока</li>
						</ul>
					</li>
					<li class="drop">Двигатели переменного тока
						<ul class="hidden">
							<li>Стандартные промышленные двигатели</li>
							<li class="drop">Серводвигатели и двигатели главного движения
								<ul class="hidden">
									<li>Синхронные двигатели</li>
									<li>Асинхронные двигатели</li>
									<li>SIMOTICS L линейные двигатели</li>
									<li>SIMOTICS Т моментные двигатели</li>
									<li>Мотор-шпиндель 2SP ECS</li>
								</ul>
							</li>
							<li class="drop">Прямые двигатели
								<ul class="hidden">
									<li>Линейные двигатели</li>
									<li>Моментные двигатели 1FW</li>
								</ul>
							</li>
							<li>Высоковольтные двигатели</li>
							<li>Двигатели постоянного тока</li>
							<li>Системы измерения</li>
						</ul>
					</li>
					<li class="drop">Мотор-редукторы
						<ul class="hidden">
							<li>Мотор-редукторы SIMOGEAR</li>
							<li>Мотор-редукторы MOTOX</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="drop">Системы автоматизации
				<ul class="hidden">
					<li class="drop">Промышленные системы автоматизации SIMATIC
						<ul class="hidden">
							<li>Программируемые контроллеры</li>
							<li>Распределенный ввод/вывод</li>
							<li>Система автоматизации SIMATIC TDC</li>
							<li>Программное обеспечение для SIMATIC S7/WinAC</li>
							<li>Программаторы</li>
							<li>Наборы Micro Automation Sets</li>
						</ul>
					</li>
					<li>Motion Control - система SIMOTION</li>
					<li class="drop">Системы автоматизации ЧПУ SINUMERIK
						<ul class="hidden">
							<li class="drop">УЧПУ
								<ul class="hidden">
									<li class="drop">SINUMERIK 808
										<ul class="hidden">
											<li>SINUMERIK 808D Токарное исполнение</li>
											<li>SINUMERIK 808D Фрезерное исполнение</li>
											<li>SINUMERIK 808D МСР машинная панель</li>
										</ul>
									</li>
									<li class="drop">SINUMERIK 802
										<ul class="hidden">
											<li>SINUMERIK 802 base line</li>
											<li>SINUMERIK 802S/SINUMERIK 802C</li>
											<li>SINUMERIK 802D sl</li>
										</ul>
									</li>
									<li class="drop">SINUMERIK 828
										<ul class="hidden">
											<li>SINUMERIK 828D BASIC T</li>
											<li>SINUMERIK 828D BASIC M</li>
										</ul>
									</li>
									<li class="drop">SINUMERIK 840
										<ul class="hidden">
											<li>SINUMERIK 840Di sl</li>
											<li>SINUMERIK 840D</li>
											<li>SINUMERIK 840 sl</li>
										</ul>
									</li>
									<li>SINUMERIK 810D powerline</li>
									<li>Модуль ввода/вывода для SINUMERIK</li>
								</ul>
							</li>
							<li>Компоненты для управления УЧПУ</li>
							<li>Модуль позиционирования</li>
							<li>Программное обеспечение HMI для УЧПУ</li>
						</ul>
					</li>
					<li class="drop">Система соединителей/ шкафы управления
						<ul class="hidden">
							<li>Системные кабели SIMATIC TOP connect</li>
							<li>Кабели и штекеры MOTION-CONNECT</li>
						</ul>
					</li>
					<li>Программное обеспечение для систем автоматизации</li>
				</ul>
			</li>
		</ul>
		</div>-->
		</div>
	</div>
<!--<script>
	var uls = document.getElementById('store').getElementsByTagName('UL');
		for(var i=0; i<uls.length; i++) (function(i) {
			var element = uls[i];
			var parent = element.parentNode;
			parent.onclick = function() {
				event = event || window.event;
				if (event.target.classList.contains('drop') || event.target.classList.contains('dropped')){
					element.classList.toggle('hidden');
					element.parentNode.classList.toggle('drop');
					element.parentNode.classList.toggle('dropped');
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
	var search = document.getElementById('search_input');
	search.onclick = function(){
		if (search.value == 'Введите код продукта') {document.getElementById('search_input').value = '';}
	};
</script>-->
<?php include ('footer.php');?>
