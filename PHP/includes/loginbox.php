<div class="md-modal md-effect-5" id="modal-5">
	<div class="md-content">
		<h3>Log ind</h3>
		<div>
			<form action="login.php" method="post" id="login" class="login">
				<input type="email" name="loginemail" id="loginemail" placeholder="E-mail adresse" class="field" required><br>
				<input type="password" name="loginpass" id="loginpass" placeholder="Password" class="field" required><br>
				<div id="rememberArea">
					<input type="checkbox" name="remember" id="remember"><label for="remember">Husk mig</label><br>
				</div>
				<div id="options">
					<p><a href="forgot.php">Glemt password</a></p>
					<p><a href="reactivate.php">Gensend aktiverings email</a></p>
				</div>
				<div class="clear"></div>
				<br>
				<input type="submit" class="btn" value="Log ind">
			</form>
		    <script src="scripts/login.js"></script>
		</div>
	</div>
</div>