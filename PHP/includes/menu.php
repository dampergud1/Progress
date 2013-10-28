<?php 	
if (!isset($_COOKIE['accept-cookies'])) {
 ?>
<div id="cookie">
	<div class="center">
		<div class="cookieContent">
			<h3>Vi bruger cookies</h3>
			<p>Ved at benytte vores hjemmeside går vi ud fra at du accepterer vores brug af cookies. Du kan læse mere om vores <a href="cookies.php">cookie politik her</a>.</p>
		</div>	
		<a href="?accept-cookies" class="cookieAccept">Accepter</a>
		<div class="clear"></div>
	</div>
</div>

<?php } ?>
<header id="top">
	<div class="center">
		<h1>Progress</h1>
		<nav id="menu">
			<?php 

			$group = 'a';

			switch ($group) {
				case 'admin':
				?>
				<ul>
					<li><a href="dashboard.php">Hjem</a></li>
					<li><a href="#">Medarbejdere</a></li>
					<li><a href="#">Projekter</a></li>
					<li><a href="#">Materialer</a></li>
					<li><a href="#">Fakturaer</a></li>
					<li><a href="#">Indstillinger</a></li>
					<li><a href="logout.php">Log ud</a></li>
				</ul>
				<?php
					break;

				case 'standard':
				?>
				<ul>
					<li><a href="dashboard.php">Hjem</a></li>
					<li><a href="#">Projekter</a></li>
					<li><a href="#">Timeregistrering</a></li>
					<li><a href="#">Indstillinger</a></li>
					<li><a href="logout.php">Log ud</a></li>
				</ul>
				<?php
					break;
				
				default:
					?>
				<ul>
					<li><a href="index.php">Hjem</a></li>
					<li><a href="about.php">Hvad er Progress?</a></li>
					<li><a href="stories.php">Det siger folk</a></li>
					<li><a href="register.php">Tilmeld nu</a></li>
					<li><a href="#" data-modal="modal-5" class="md-trigger">Log ind</a></li>
				</ul>
				<?php
					break;
			}

			 ?>

			
		</nav>
	</div>
	<div class="clear"></div>
</header>
<script>
	$(document).ready(function() {
		if ($('#cookie').length) {
			$('#cookie').slideDown();
		}
	});
</script>