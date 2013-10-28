<?php 
require 'core/init.php';
 ?>
<?php 
makeHeader('Dashboard', array(''));
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
			<h1>Velkommen Chris</h1>
			<div class="infobox warning">
				<a class="close" href="#"></a>
				<h3>Du har opgaver der har overskredet deadlines!</h3>
				<p>Du har <strong>2</strong> projekter som har overskredet deres deadline.</p>
				<a href="updateFirm.php">Vis projekter med overskredet deadline</a>
			</div>
			<div class="infobox yellow">
				<a class="close" href="#"></a>
				<h3>Færdiggør din profil</h3>
				<p>Der mangler stadig nogle få oplysniger i din profil.</p>
				<a href="updateProfile.php">Opdater oplysninger her</a>
			</div>
			<div class="infobox yellow">
				<a class="close" href="#"></a>
				<h3>Opdater oplysninger om dit firma</h3>
				<p>Vi mangler endnu nogle oplysninger om dit firma. Visse funktioner vil ikke være tilgængelige før end dine firmaoplysninger er opdateret.</p>
				<a href="updateFirm.php">Opdater oplysninger her</a>
			</div>
			<div class="infobox">
				<table class="infoTable">
					<tr>
						<td>7/8</td>
						<td>4/4</td>
						<td>15/23</td>
						<td>32</td>
					</tr>
					<tr>
						<td>OPGAVER LØST IDAG</td>
						<td>OPGAVER LØST IGÅR</td>
						<td>OPGAVER LØST DENNE UGE</td>
						<td>TIMER ARBEJDET DENNE UGE</td>
					</tr>
				</table>
				<br>
				<hr>
				<br>
				<table class="projects">
					<tr>
						<td>Projekt</td>
						<td>Opgave</td>
						<td>Deadline</td>
						<td>Muligheder</td>
					</tr>
					<tr>
						<td>Lygten 37, Kbh N</td>
						<td>Rense toiletter</td>
						<td>I dag</td>
						<td><a href="">Gå til opgave</a> | <a href="">Opgaven er løst</a></td>
					</tr>
					<tr>
						<td>Tranedalen 2, Ishøj</td>
						<td>Sætte tapet op</td>
						<td>I dag</td>
						<td><a href="">Gå til opgave</a> | <a href="">Opgaven er løst</a></td>
					</tr>
				</table>
			</div>
			<br>
			<h2>Oversigt over firma</h2>
			<div class="infobox">
				<table class="infoTable">
					<tr>
						<td>7</td>
						<td>18/20</td>
						<td>56</td>
						<td>328</td>
					</tr>
					<tr>
						<td>MEDARBEJDERE</td>
						<td>OPGAVER LØST IGÅR</td>
						<td>TIMER ARBEJDET IGÅR</td>
						<td>TIMER ARBEJDET DENNE UGE</td>
					</tr>
				</table>
			</div>
		</div>

		<script>
		$(".close").click(function() {
		    $(this).parent().hide(200);
		});
		</script>
	</section>
	<?php 
	include 'includes/footer.php'
	 ?>