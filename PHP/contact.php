<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Kontakt os', array(''));
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
			<div id="signup">
			<h1>Har du nogen spørgsmål, er du velkommen til at kontakte os her</h1>
				<form action="" method="post">
					<h3>Udfyld felterne og vi vender tilbage</h3>
					<input type="text" class="field" name="name" id="name" placeholder="Navn" required><br>
					<input type="email" class="field" name="email" id="email" placeholder="E-mail adresse" required><br>
					<input type="text" class="field" name="phone" id="phone" placeholder="Tlf. nummer"><br>
					<textarea class="field" name="msg" id="msg" placeholder="Besked" required></textarea><br>
					<br>
					<input type="submit" value="Send" class="btn">
				</form>	
			</div>		
		</div>
	</section>
	<?php 
	include 'includes/footer.php'
	 ?>