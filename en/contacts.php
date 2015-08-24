<?php
$page = 'Контакты';
include ('left_column.php');
$number = 2;
$bkg = 'contacts.jpg'?>
			<h1>Contacts</h1>
			<div id="contact_info">
				<table>
					<tr class="contactHeader">
						<td>Department</td>
						<td>Phone/fax</td>
						<td>E-mail</td>
					</tr>
					<tr>
						<td>General</td>
						<td>+7 (3412) 65-82-31</td>
						<td>office@kamstanko.ru</td>
					</tr>
					<tr>
						<td>Commercial Department</td>
						<td>+7 (3412) 90-02-74</td>
						<td>commerce@kamstanko.ru</td>
					</tr>
					<tr>
						<td>Supply of Siemens spare parts</td>
						<td></td>
						<td>siemens@kamstanko.ru</td>
					</tr>
				</table>
				<!--<table>		/старая таблица на основной адрес
					<tr>
						<td align="right">Адрес:</td>
						<td align="left">426009, г. Ижевск, ул. Ленина, 101.</td>
					</tr>
					<tr>
						<td align="right">Тел/факс:</td>
						<td align="left">+7 (3412) 65-82-31</td>
					</tr>
					<tr>
						<td align="right">E-mail:</td>
						<td align="left">office@kamstanko.ru</td>
					</tr>
				</table>-->
			</div>
			<div class="clear"></div>
			
			<div id="contact_form">			
				<p class="warning" id="status"></p>
				<h1>Send a message</h1>
				<div id="contact_div">
					<form id="contact" method="post" action="../php/message_process.php">
						<p class="name">Your name:</p>
						<input type="text" id="name" name="name" size="35" />
						<p class="email">Your e-mail:</p>
						<input type="text" id="email" name="email" size="35" />
						<p class="message">Message:</p>
						<textarea id="message" name="message" rows="1"></textarea>
						<input id="send_message" name="send_message" type="submit" value="Send" />
					</form>
				</div>
			</div>
			<p class="address">Our address: <span>101, st. Lenin, Izhevsk, Udmurt Republic, Russia, 426072</span></p>
			<div id="map">
				<div id="large_map">
					<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=P6DWI09t67Cj3dOqYMF59A6GcBqTX2aH&width=600&height=450"></script>
				</div>				
			</div>
						
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="../js/contact.js" type="text/javascript"></script>
<?php include ('footer.php');?>
