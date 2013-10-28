<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Cookies', array(''));
 ?>
<body>
	<?php 
	include 'includes/loginbox.php';
	 ?>
	<?php 
	include 'includes/menu.php'
	 ?>
	<section id="main">
		<div class="center">
			<h1>Cookies</h1>
			<p>Vi benytter os af cookies på vores hjemmeside for at give en bedre oplevelse. Cookies er en lille fil, hjemmesider kan bruge til at genkende computere og gemme information. Vi lagre ingen personlige oplysninger i cookies.</p>
			<p>Det er muligt at sætte en browser op til ikke at lagre cookies, og allerede lagrede cookies kan slettes efter vilje. Vær dog klar over at brugeroplevelsen på dette site kan falde hvis dette er tilfældet.</p><br>
			<h2>Cookies vi benytter</h2>
			<p>Her er en kort forklaring om hvilke cookies vi benytter:</p><br>
			<h3>Cookie der husker dig</h3>
			<p>Når du logger ind på vores website har du mulighed for at vælge at blive husket, således at du ikke skal logge ind hver gang. Til dette benyttes en cookie så vi kan genkende dig næste gang du besøger vores side.</p><br>
			<h3>Cookie der husker at du accepterer cookies</h3>
			<p>Når du klikker på banneret i toppen af siden, tager vi det som en accept af vores cookie politik, og vi undlader at vise dig banneret igen i et år, ved mindre du sletter dine cookies.</p><br>
			<h3>Cookie til statistik og analyse</h3>
			<p>Vi benytter Google Analytics som analyserer de brugere der besøger vores website. Bl.a. lagres der informationer om operativ system, hvilken browser du bruger, skærmens opløsning, tid for besøget, besøgets længe, geografisk placering osv.</p><br>

			<p><a href="privacy.php">Du kan læse mere om vores beskyttelse af personlige oplysninger her</a></p>
		</div>
	</section>
	<?php 
	include 'includes/footer.php'
	 ?>