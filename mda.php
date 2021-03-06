<?php
$page = 'Мониторинг работы станков. Модуль MDA';
include ('left_column_2.php');
$number = 6;
$number2 = 0;
$bkg = 'it_mda.jpg'?>
		<h1>Мониторинг работы станков. Модуль MDA</h1>
		<p><a href="catalogs/mda.pdf" target="_blank">Скачать буклет</a></p>
			<div class="img">
				<img src="image/mda.jpg">
			</div>
			<p class="name_list">Основные функции модуля:</p>
			<ol>
				<li>Автоматический сбор и учет производственных данных;</li>
				<li>Ведение истории производственных данных в базе данных;</li>
				<li>Подробный анализ производственных данных и их динамики;</li>
				<li>Автоматический расчет показателей эффективности использования оборудования.</li>
			</ol>
			<p class="name_list">Выгоды заказчика:</p>
			<ol>
				<li>Дает реальную картину производства;</li>
				<li>Быстрое выявление причин простоев;</li>
				<li>Упрощение поиска причин поломок;</li>
				<li>Инструмент для оценки эффективности управленческих решений;</li>
				<li>Повышение прозрачности и эффективности производства.</li>
			</ol>
		<h2>Перечень собираемой информации о работе станков</h2>
			<p class="name_list">Для станков с УЧПУ Sinumerik 840D и PCU50 фирмы Siemens для сбора доступна следующая информация о работе станка:</p>
			<table>
				<tr class="headerRow">
					<td>Состояние станка</td>
					<td>Способ определения</td>
				</tr>
				<tr class="headerRow">
					<td>1. Производство<sup>1</sup></td>
					<td></td>
				</tr>
				<tr>
					<td>1.1. Производство по УП (AUTO) согласно ТП <sup>2</sup></td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>1.2. Производство по УП (AUTO) с отклонениями от ТП <sup>3</sup></td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>1.3. Обработка в ручном режиме (JOG) <sup>4</sup></td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>1.4. Обработка в режиме преднабора (MDA) <sup>4</sup></td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>2. Организационный простой станка<sup>1</sup></td>
					<td></td>
				</tr>
				<tr>
					<td>2.1. Отсутствует задание</td>
					<td>Задает оператор<sup>5</sup></td>
				</tr>
				<tr>
					<td>2.2. Отсутствует заготовка</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.3.     Отсутствует инструмент</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.4.     Регламентированный перерыв</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.5.     Наладка станка</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.6.     Очистка станка</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.7.     Техническое обслуживание станка</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.8.     Ремонт станка</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.9.     Замена инструмента (износ, поломка)</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.10. Приемка детали контролером</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.11. Внедрение УП</td>
					<td>Задает оператор</td>
				</tr>
				<tr>
					<td>2.12. Организационный простой по неизвестной причине <sup>6</sup></td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>3. Технический отказ станка<sup>1</sup></td>
					<td></td>
				</tr>
				<tr>
					<td>3.1.     Отказ электрооборудования</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>3.2.     Отказ гидрооборудования</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>3.3.     Отказ системы смазки и охлаждения</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>3.4.     Отказ системы ЧПУ с остановом программы</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>3.5.     Наезд на ограничитель хода</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>3.6.     Наезд на аварийный ограничитель</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>3.7.     Механическая поломка станка</td>
					<td>Задает оператор</td>
				</tr>
				<tr class="headerRow">
					<td>4. Станок выключен</td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>5. Привода станка выключены</td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>6. Режим системы ЧПУ</td>
					<td></td>
				</tr>
				<tr>
					<td>6.1.     Ручной режим (JOG)</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>6.2.     Режим преднабора (MDA)</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>6.3.     Автоматический режим (AUTO)</td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>7. Состояние программы</td>
					<td></td>
				</tr>
				<tr>
					<td>7.1.     Программа выполняется</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>7.2.     Программа ожидает</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>7.3.     Программа остановлена</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>7.4.     Программа прервана</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>7.5.     Программа отменена</td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>8. Корректор оборотов шпинделя</td>
					<td></td>
				</tr>
				<tr>
					<td>8.1.     Корректор оборотов шпинделя выше нормы</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>8.2.     Корректор оборотов шпинделя в норме</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>8.3.     Корректор оборотов шпинделя ниже нормы</td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>9. Корректор подачи</td>
					<td></td>
				</tr>
				<tr>
					<td>9.1.     Корректор подачи выше нормы</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>9.2.     Корректор подачи в норме</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>9.3.     Корректор подачи ниже нормы</td>
					<td>Автоматически</td>
				</tr>
				<tr>
					<td>9.4.     Корректор подачи в нуле</td>
					<td>Автоматически</td>
				</tr>
				<tr class="headerRow">
					<td>10. Обработка <sup>7</sup></td>
					<td></td>
				</tr>
			</table>
			<p>1 – Групповые состояния возникают автоматически при возникновении хотя бы одного состояния входящего в группу.</p>
			<p>2 — Считается, что станок в состоянии <b>«Производство по УП (AUTO) согласно ТП»</b>, если одновременно выполняются следующие условия:
				<ol>
					<li>Система ЧПУ в автоматическом режиме AUTO;</li>
					<li>Управляющая программа в состоянии выполнения или ожидания;</li>
					<li>Корректор подачи выставлен в норме (задается в параметрах станка);</li>
					<li>Корректор оборотов шпинделя в норме (задается в параметрах станка);</li>
					<li>Технические отказы отсутствуют.</li>
				</ol>
			</p>
			<p>3 — Считается, что станок в состоянии <b>«Производство по УП (AUTO) согласно ТП»</b>, если одновременно выполняются следующие условия:
				<ol>
					<li>Система ЧПУ в автоматическом режиме AUTO;</li>
					<li>Управляющая программа в состоянии выполнения или ожидания;</li>
					<li><b>Корректор подачи не в норме или корректор оборотов шпинделя не в норме (задается в параметрах станка);</b></li>
					<li>Технические отказы отсутствуют.</li>
				</ol>
			</p>
			<p>4 — Считается, что станок в состоянии <b>«Обработка в ручном режиме (JOG)»</b>, если одновременно выполняются следующие условия:
				<ol>
					<li>Выставлено состояние <b>«Обработка»</b>;</li>
					<li>Система ЧПУ в ручном режиме JOG;</li>
					<li>Технические отказы отсутствуют.</li>
				</ol>
			</p>
			<p>5 — Оператор выбирает актуальное состояние на панели оператора из перечня «ручных» состояний и может уточнить его текстовым комментарием.
				<div class="img">
					<img src="image/mda_2.jpg">
					<p>Перечень «ручных» состояний может быть расширен и откорректирован по желанию Заказчика.</p>
				</div>	
			</p>
			<p>6 – <b>«Организационный простой по неизвестной причине»</b> выставляется автоматически, если оператор не указал явно причину простоя.</p>
			<p>7 — Считается, что станок в состоянии <b>«Обработка»</b>, если одновременно выполняются следующие условия:
				<ol>
					<li>Обороты шпинделя больше 0;</li>
					<li>Хотя бы одна ось станка в движении;</li>
					<li>Фактическая загрузка шпинделя больше 0.</li>
				</ol>
			</p>
			<br>
			<p>Для станков, <b>неоснащенных</b> УЧПУ Sinumerik 840D и PCU50 фирмы Siemens, некоторые состояния из представленного перечня могут быть не доступны. Окончательный перечень доступных для сбора состояний для них может быть определен только после анализа технической документации на станок.</p>
		<h2>Примеры аналитических отчетов по работе станков в системе MDA</h2>
			<div class="img">
				<img src="image/mda_3.jpg">
				<p>Зафиксированные состояния оборудования в виде временной диаграммы</p>
			</div>
			<div class="img">
				<img src="image/mda_4.jpg">
				<p>Столбчатая диаграмма распределения рабочего времени станков по категориям</p>
			</div>
			<div class="img">
				<img src="image/mda_5.jpg">
				<p>Столбчатая диаграмма динамики показателей фактической доступности и загрузки станков</p>
			</div>
			<div class="img">
				<img src="image/mda_6.jpg">
				<p>Оперативная схема участка с актуальным состоянием станков</p>
			</div>
			<div class="img">
				<img src="image/mda_7.jpg">
				<p>Подробный протокол системных сообщений системы ЧПУ</p>
			</div>
			<br>
			<p>В рамках сервисного обслуживания системы предлагается разработка расширенных форм специализированных аналитических отчетов на основе собираемой системой информации под конкретные требования заказчика.</p>
		</div>
	</div>
<?php include ('footer.php');?>
