<?php
//$to      = 'dmkazantsev@gmail.com';
$to      = 'commerce@kamstanko.ru';
$subject = 'Опросный лист для заказа станка КСТ-510';
$message = 'Данные отправителя:' . "\r\n";
$headers = 'From: kamstanko@website.ru' . "\r\n" ;
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
$headers .= "Mime-Version: 1.0" . "\r\n";
if ($_REQUEST['organization']) $message = $message . "Ораганизация " . $_REQUEST['organization'] . "\r\n";
if ($_REQUEST['name']) $message = $message . "Имя " . $_REQUEST['name'] . "\r\n";
if ($_REQUEST['phone']) $message = $message . "Телефон " . $_REQUEST['phone'] . "\r\n";
if ($_REQUEST['city']) $message = $message . "Город " . $_REQUEST['city'] . "\r\n";
if ($_REQUEST['email']) $message = $message . "E-mail " . $_REQUEST['email'] . "\r\n";
if ($_REQUEST['additional_information']) $message = $message . "Дополнительная информация " . "\r\n" . $_REQUEST['additional_information'] . "\r\n";
$message = $message . "\r\n" . "\r\n" . "Данные:" . "\r\n";
$message = $message . $_REQUEST['hydrostation'] . "\r\n";
$message = $message . "Межцентровое расстояние " . $_REQUEST['centers'] . "\r\n";
$message = $message . "Отверстие в шпинделе " . $_REQUEST['hole'] . "\r\n";
$message = $message . "Мощность двигателя шпинделя " . $_REQUEST['spindle_power'] . "\r\n";
$message = $message . "Патрон " . $_REQUEST['cartridge'] . "\r\n";
$message = $message . "Размер патрона " . $_REQUEST['cartridge_size'] . "\r\n";
if ($_REQUEST['pedal']){
	$message = $message . "Педаль разжима патрона ДА" . "\r\n";
} else {
	$message = $message . "Педаль разжима патрона Нет" . "\r\n";
}
$message = $message . "Переключение коробки передач " . $_REQUEST['switching_transmission'] . "\r\n";
if ($_REQUEST['double_cartridge']){
	$message = $message . "Система двойного патрона ДА" . "\r\n";
} else {
	$message = $message . "Система двойного патрона Нет" . "\r\n";
}
$message = $message . "Тип резцедержки " . $_REQUEST['reztsederzhka'] . "\r\n";
$message = $message . "Тип системы ЧПУ " . $_REQUEST['cnc'] . "\r\n";
$message = $message . "Люнет " . $_REQUEST['lunette'] . "\r\n";



mail($to, $subject, $message, $headers);?>
<script>window.location = "turning_machines.php"</script>

