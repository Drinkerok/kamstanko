<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<script src="js/sticky.js" type="text/javascript"></script>
	<script>
		var nav = document.getElementById('nav');
		
		var level1 = nav.getElementsByClassName('level-1');
		if (isNumber("<?php echo $number ?>")) {
			level1["<?php echo $number ?>"].classList.add('active');
		}
		
		var level2 = level1["<?php echo $number ?>"].getElementsByClassName('level-2');
		if (isNumber("<?php echo $number2 ?>")) {
			level2["<?php echo $number2 ?>"].classList.add('active');
		}
		for (var i = 0; i < level2.length; i++){
			level2[i].onclick = function(e){
				var uls = this.getElementsByTagName('UL');
				if (uls.length == 1) {
					this.classList.toggle('active');
				}
			}
		}
		
		if (isNumber("<?php echo $number3 ?>")) {
			var level3 = level2["<?php echo $number2 ?>"].getElementsByClassName('level-3');
			level3["<?php echo $number3 ?>"].classList.add('active');
		}
		
		
		
		//BACKGROUND
		
		if ('<?php echo $bkg?>') {
			document.getElementById('background').style.backgroundImage = 'url(image/background/<?php echo $bkg?>)';
		}
		else document.getElementById('background').style.backgroundImage = 'url(image/background/IGO_1917.jpg)';
		
		
		
		
		
		
		function isNumber(n) {
			return !isNaN(parseFloat(n)) && isFinite(n);
		}
	</script>
	
	<!--<script>
		function isNumber(n) {
			return !isNaN(parseFloat(n)) && isFinite(n);
		}
		
		var links = document.getElementById('nav').getElementsByClassName('level-1');
		links["<?php echo $number ?>"].classList.add('active');
		
		if (links["<?php echo $number ?>"].parentNode.firstElementChild != links["<?php echo $number ?>"]){
		if ((links["<?php echo $number ?>"].previousElementSibling.nodeName.toLowerCase() == 'li') && (links["<?php echo $number ?>"].previousElementSibling == links["<?php echo $number ?>" - 1])) {
			links["<?php echo $number ?>" - 1].firstChild.style.borderBottom='none';
		}}
		
		if (isNumber("<?php echo $number2 ?>")) {
		if (links["<?php echo $number ?>"].lastElementChild.nodeName.toLowerCase() == 'ul') {
			var link = links["<?php echo $number ?>"].lastElementChild.getElementsByClassName('level-2');
			link["<?php echo $number2 ?>"].classList.add('active');
		}}

		if ('<?php echo $bkg?>') {
			document.getElementById('background').style.backgroundImage = 'url(image/background/<?php echo $bkg?>)';
		}
		else document.getElementById('background').style.backgroundImage = 'url(image/background/IGO_1917.jpg)';
		
		/*ПЛАВАЮЩЕЕ МЕНЮ
		jQuery(document).ready(function(){
			jQuery('#navigation').stickyfloat({duration:0});
		});*/
	</script>-->
	</div>
</body>
</html>