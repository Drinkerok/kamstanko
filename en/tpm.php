<?php
$page = 'Планирование и учет ТО. Модуль TPM';
include ('left_column_2.php');
$number = 5;
$number2 = 2;
$bkg = 'it_tpm.jpg'?>
		<h1>Планирование и учет ТО. Модуль TPM</h1>
			<div class="img">
				<img src="image/tpm_1.jpg">
			</div>
			<p class="name_list">Основные функции модуля:</p>
			<ol>
				<li>Планирование расписания работ по ТО и проверке оборудования;</li>
				<li>Напоминание о приближении очередного ТО;</li>
				<li>Ведение журнала произведенных работ;</li>
				<li>[Блокирование работы станка с не пройденным ТО].</li>
			</ol>
			<p class="name_list">Способы привязки работ в расписании:</p>
			<ol>
				<li>По календарному времени;</li>
				<li>По машинному времени (моточасы);</li>
				<li>По количеству произведенных деталей.</li>
			</ol>
			<p class="name_list">Выгоды заказчика:</p>
			<ol>
				<li>Обеспечивает своевременность ТО и проверки станков;</li>
				<li>Сокращение простоев по причинам поломок.</li>
			</ol>
		<h2>Планирование работ ТО и контроля станков на сервере</h2>
			<div class="img">
				<img src="image/tpm_2.jpg">
				<p>Добавление работы в план</p>
			</div>
			<p class="name_list">Виды работ, заложенные в систему:</p>
			<ol>
				<li>Контроль;</li>
				<li>Техобслуживание;</li>
				<li>Ремонт;</li>
				<li>Очистка.</li>
			</ol>
			<p>Перечень может быть расширен по желанию заказчика.</p>
			<p class="name_list">Способы задания периодов работ при планировании:</p>
			<ol>
				<li>По календарному времени;</li>
				<li>По машинному времени (моточасы);</li>
				<li>По количеству произведенных деталей.</li>
			</ol>
			<p>Детали считаются по количеству успешно законченных управляющих программ.</p>
		<h2>План работ ТО и контроля станков всего цеха</h2>
			<div class="img">
				<img src="image/tpm_3.jpg">
			</div>
		<h2>Напоминание и предупреждение о приближающихся сроках </h2>
			<div class="img">
				<img src="image/tpm_4.jpg">
				<p>На сервере для службы главного механика</p>
			</div>
			<div class="img">
				<img src="image/tpm_5.jpg">
				<p>На станке для оператора</p>
			</div>
		<h2>Возможность блокировки работы станков по критичным работам</h2>
			<p>Возможно блокирование работы станка в случае, если важные работы не были выполнены.</p>
			<p>Выполнение работы подтверждается уполномоченным лицом путем ввода пароля.</p>
			<div class="img">
				<img src="image/tpm_6.jpg">
			</div>
		<h2>Настройка и контроль прав доступа службы главного механика </h2>
			<div class="img">
				<img src="image/tpm_7.jpg">
				<p>Разграничение прав и зоны ответственности</p>
			</div>
		<h2>Журнал выполненных работ </h2>
			<div class="img">
				<img src="image/tpm_8.jpg">
				<p>Просроченные работы </p>
			</div>
			<div class="img">
				<img src="image/tpm_9.jpg">
				<p>Отчет о своевременности проведения работ</p>
			</div>
			<p>В рамках расширенного сервисного обслуживания системы предлагается разработка расширенных форм специализированных аналитических отчетов на основе собираемой системой информации под конкретные требования заказчика.</p>
			<div class="img">
				<img src="image/tpm_10.jpg">
			</div>
		</div>
	</div>
<?include ('footer.php');?>