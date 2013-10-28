<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Tilmeld nu', array('<script src="scripts/flippy.js"></script>', '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>'));
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
				<h1>Tilmeld dig Progress</h1>
				<form action="validate.php" method="post" class="flipbox">
					<h3>Det tager kun et øjeblik</h3>
					<input type="text" name="firmanavn" id="firmanavn" placeholder="Firmanavn" class="field"><br>
					<input type="text" name="name" id="name" placeholder="Fulde navn" class="field"><br>
					<input type="email" name="email" id="email" placeholder="E-mail adresse" class="field"><br>
					<input type="password" name="pass" id="pass" placeholder="Password" class="field"><br>
					<input type="password" name="passrepeat" id="passrepeat" placeholder="Gentag Password" class="field"><br>
					<br>
					<input type="submit" value="Fortsæt" class="btn">
				</form>
				<script src="scripts/form.js"></script>
			</div>
		</div>
	</section>
	<div class="hide">
		<div id="content">
			<h3>Retninglinjer</h3>
			<div id="cont">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices imperdiet odio, sit amet lobortis ante. Quisque lobortis est velit, in porta sapien fringilla eget. Donec nec ornare metus. Sed eu arcu volutpat mi luctus fringilla. Nulla facilisi. Etiam non lectus est. Donec sed ligula volutpat nisl congue laoreet. Aenean eleifend adipiscing lobortis. Suspendisse iaculis commodo libero, eu rutrum erat euismod id. In laoreet sem orci, ac rhoncus erat fringilla consequat. Sed venenatis metus metus, ut hendrerit nunc bibendum id. Fusce consectetur sed velit vel malesuada.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices imperdiet odio, sit amet lobortis ante. Quisque lobortis est velit, in porta sapien fringilla eget. Donec nec ornare metus. Sed eu arcu volutpat mi luctus fringilla. Nulla facilisi. Etiam non lectus est. Donec sed ligula volutpat nisl congue laoreet. Aenean eleifend adipiscing lobortis. Suspendisse iaculis commodo libero, eu rutrum erat euismod id. In laoreet sem orci, ac rhoncus erat fringilla consequat. Sed venenatis metus metus, ut hendrerit nunc bibendum id. Fusce consectetur sed velit vel malesuada.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices imperdiet odio, sit amet lobortis ante. Quisque lobortis est velit, in porta sapien fringilla eget. Donec nec ornare metus. Sed eu arcu volutpat mi luctus fringilla. Nulla facilisi. Etiam non lectus est. Donec sed ligula volutpat nisl congue laoreet. Aenean eleifend adipiscing lobortis. Suspendisse iaculis commodo libero, eu rutrum erat euismod id. In laoreet sem orci, ac rhoncus erat fringilla consequat. Sed venenatis metus metus, ut hendrerit nunc bibendum id. Fusce consectetur sed velit vel malesuada.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices imperdiet odio, sit amet lobortis ante. Quisque lobortis est velit, in porta sapien fringilla eget. Donec nec ornare metus. Sed eu arcu volutpat mi luctus fringilla. Nulla facilisi. Etiam non lectus est. Donec sed ligula volutpat nisl congue laoreet. Aenean eleifend adipiscing lobortis. Suspendisse iaculis commodo libero, eu rutrum erat euismod id. In laoreet sem orci, ac rhoncus erat fringilla consequat. Sed venenatis metus metus, ut hendrerit nunc bibendum id. Fusce consectetur sed velit vel malesuada.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices imperdiet odio, sit amet lobortis ante. Quisque lobortis est velit, in porta sapien fringilla eget. Donec nec ornare metus. Sed eu arcu volutpat mi luctus fringilla. Nulla facilisi. Etiam non lectus est. Donec sed ligula volutpat nisl congue laoreet. Aenean eleifend adipiscing lobortis. Suspendisse iaculis commodo libero, eu rutrum erat euismod id. In laoreet sem orci, ac rhoncus erat fringilla consequat. Sed venenatis metus metus, ut hendrerit nunc bibendum id. Fusce consectetur sed velit vel malesuada.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices imperdiet odio, sit amet lobortis ante. Quisque lobortis est velit, in porta sapien fringilla eget. Donec nec ornare metus. Sed eu arcu volutpat mi luctus fringilla. Nulla facilisi. Etiam non lectus est. Donec sed ligula volutpat nisl congue laoreet. Aenean eleifend adipiscing lobortis. Suspendisse iaculis commodo libero, eu rutrum erat euismod id. In laoreet sem orci, ac rhoncus erat fringilla consequat. Sed venenatis metus metus, ut hendrerit nunc bibendum id. Fusce consectetur sed velit vel malesuada.</p>

			</div>
			<input type="checkbox" name="accept" id="accept">
			<label for="accept">Accepter retningslinjer</label>
			<br>
			<input type="submit" class="btn" value="Opret konto">
		</div>
	</div>
	<?php 
	include 'includes/footer.php'
	 ?>