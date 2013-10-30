<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Velkommen', array(''));
 ?>
<body>
	<?php 
	include 'includes/loginbox.php';
	 ?>
	<div class="container">
	<?php 
	include 'includes/menu.php'
	 ?>
	<section id="main">
		<div class="center">
			<h1>Velkommen til inProgress</h1>
			<p>Med <strong>inProgress</strong> er det nemmere end nogensinde før, for en virksomhed og dets medarbejdere, at holde syt på arbejdsopgaver. Progress gør det muligt at oprette opgaver og sende dem direkte til en medarbejders telefon.</p>
			<br><hr><br>
			<h3 class="bold">Så nemt er det</h3>
			<div class="feature">
				<h1>1</h1>
				<h3>Administrer</h3>
				<img src="images/pc.png">
				<p class="clear">Administrer medarbejdere, projekter og materialer direkte i browseren.</p>
			</div>
			<div class="feature">
				<h1>2</h1>
				<h3>Følg op</h3>
				<img src="images/phone.png">
				<p class="clear">Med vores mobile app, kan dine medarbejdere hele tiden melde tilbage hvad de har lavet og hvilke materialer de har brugt.</p>
			</div>
			<div class="feature">
				<h1>3</h1>
				<h3>Fakturer</h3>
				<img src="images/invoice.png">
				<p class="clear">Med den data der samles, kan du nemt og hurtigt genererer fakturaer du kan sende til dine kunder.</p>
			</div>
			<div class="clear"></div>
			<br>	<br><hr><br>
			<h3 class="bold">Tilmeld dig nu</h3>
			<p>Du kan tilmelde dig lige nu helt gratis. </p>
			<br><hr><br>
			<section id="phoneapp">
				<h3 class="bold">Hent vores app til iPhone gratis</h3>
				<p>Med vores app til iPhone kan du:</p>
				<ul>
					<li>Se dagens opgaver</li>
					<li>Starte og stoppe opgaver for tidsregistrering</li>
					<li>Tilføje materialer til et projekt</li>
				</ul>
				<br>	
				<a href="" class="btn">Hent appen nu</a>
			</section>
			<img src="images/iphone.png" class="iphone">
		</div>
	</section>
	<?php 
	include 'includes/footer.php'
	 ?>