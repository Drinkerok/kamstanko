<?php
$page = 'Фрезерные станки с ЧПУ';
include ('left_column_2.php');
$number = 1;
$number2 = 1;
$bkg="modernization.jpg";?>
		<div class="logo_right">
			<h1>Фрезерные станки с ЧПУ</h1>
		</div>
		<div id="modernization">
				<div class="hide">
					<p class="header">Вертикальные фрезерные станки с ЧПУ серии КСВ</p>
					<p class="header">ТУ 3810-001-81246591-2014</p>
					<img src="image/kcb_1.jpg" alt="kcb" style="display:block; margin:0 auto 10px;"/>
					<p>Технические характеристики</p>
					<table>
						<thead>
							<tr>
								<td>Параметр</td>
								<td>КСВ-800</td>
								<td colspan="2">КСВ-1100</td>
								<td>КСВ-1600</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Перемещение по осям X, Y, Z, мм</td>
								<td>800х500х510</td>
								<td colspan="2">1100x610x610</td>
								<td>1600x815x800</td>
							</tr>
							<tr>
								<td>Размер стола, мм</td>
								<td>450х1000</td>
								<td colspan="2">1270x640</td>
								<td>1700x815</td>
							</tr>
							<tr>
								<td>Т-образные пазы (Ширина, кол-во, расстояние)</td>
								<td>18х3х125</td>
								<td colspan="2">18x5x125</td>
								<td>18х5х150</td>
							</tr>
							<tr>
								<td>Максимальный вес детали, кг</td>
								<td>500</td>
								<td colspan="2">1200</td>
								<td>2000</td>
							</tr>
							<tr>
								<td>Конус шпинделя</td>
								<td>ISO40</td>
								<td>ISO40</td>
								<td>ISO50</td>
								<td>ISO50</td>
							</tr>
							<tr>
								<td>Мощность шпинделя, кВт</td>
								<td>5,5/7,5</td>
								<td>7,5/11</td>
								<td> 17/25</td>
								<td> 17/25</td>
							</tr>
							<tr>
								<td>Максимальная частота вращения, об/мин</td>
								<td colspan="2">8000/10000/12000</td>
								<td>6000</td>
								<td>6000</td>
							</tr>
							<tr>
								<td>Скорости быстрых перемещений, мм/мин</td>
								<td>20000</td>
								<td colspan="2">20000</td>
								<td>20000</td>
							</tr>
							<tr>
								<td>Диапазон рабочих подач, мм/мин</td>
								<td>1-8000</td>
								<td colspan="2">1-8000</td>
								<td>1-8000</td>
							</tr>
							<tr>
								<td>Число инструментов в МСИ</td>
								<td>20</td>
								<td colspan="2">24</td>
								<td>24</td>
							</tr>
							<tr>
								<td>Максимальный диаметр/длина инструмента, мм</td>
								<td>80/250</td>
								<td>106/300</td>
								<td>250/300</td>
								<td>250/300</td>
							</tr>
							<tr>
								<td>Максимальный вес инструмента, кг</td>
								<td>7</td>
								<td>7</td>
								<td>15</td>
								<td>15</td>
							</tr>
							<tr>
								<td>Вес станка, кг</td>
								<td>4500</td>
								<td>7300</td>
								<td>7900</td>
								<td>13000</td>
							</tr>
							<tr>
								<td>Система ЧПУ</td>
								<td colspan="4">SIEMENS, FANUC</td>
							</tr>
							<tr>
								<td>Установленная мощность, кВт</td>
								<td>15</td>
								<td>25</td>
								<td>40</td>
								<td>50</td>
							</tr>
						</tbody>
					</table>
					<p>Стандартные принадлежности</p>
					<ul>
						<li>Ограждение стола кабинетного типа</li>
						<li>20-инструментальный МСИ без манипулятора</li>
						<li>Система подачи СОЖ</li>
						<li>Автоматическая система смазки</li>
						<li>Обдув конуса шпинделя сжатым воздухом</li>
						<li>Рабочий светильник</li>
						<li>Аварийный светильник</li>
						<li>Индикатор начала и окончания цикла </li>
						<li>Установочные болты и подкладки</li>
					</ul>
					<p>Опции</p>
					<ul>
						<li>Шпиндель 8000/10000/12000/15000об/мин.</li>
						<li>Мотор-шпиндель PERON (Италия) 26/22кВт, 18000об/мин, HSK-A63</li>
						<li>Магазин автоматической смены инструмента манипуляторного типа на 24/32/40/60 инструментов. </li>
						<li>Конвейер стружки цепного типа с тележкой.</li>
						<li>Поворотные и наклонно-поворотные столы</li>
						<li>Фотоэлектрические линейки Heidenhein по осям X, Y, Z с принудительным продувом.</li>
						<li>Система автоматического смыва стружки с дополнительным насосом.</li>
						<li>Датчик замера длины, радиуса и поломки инструмента Renishaw, Heidenhein, Blum.</li>
						<li>Датчик обмера заготовки Renishaw, Heidenhein, Blum.</li>
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
			element.onclick = function() {
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
