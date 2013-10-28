<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Glemt password', array(''));
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
			<h1>Glemt Password</h1>
			<p>Skulle du have glemt dit password, kan du indtaste din email adresse og vi sender dig et midlertidigt password så du kan komme igang igen med det samme.</p>
			<div id="signup">
				<form action="" method="post">
					<h3>Udfyld din email adresse</h3>
					<input type="email" class="field" name="email" id="email" placeholder="E-mail adresse" required><br>
					<br>
					<input type="submit" value="Bestil ny adganskode" class="btn">
				</form>	
			</div>
		</div>
	</section>
	<?php 
	include 'includes/footer.php'
	 ?>