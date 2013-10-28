<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Gensend aktiverings email', array(''));
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
			<h1>Gensend aktiverings email</h1>
			<p>Har du ikke modtaget din aktiveringsemail, kan du her bede om at få en ny tilsendt. Husk evt. at tjekke dit spam / junk filter!</p>
			<div id="signup">
				<form action="" method="post">
					<h3>Udfyld din email adresse</h3>
					<input type="email" class="field" name="email" id="email" placeholder="E-mail adresse" required><br>
					<br>
					<input type="submit" value="Send aktiverings mail" class="btn">
				</form>	
			</div>
		</div>
	</section>
	<?php 
	include 'includes/footer.php'
	 ?>