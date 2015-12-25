<?php 
error_reporting(E_ALL);
include_once 'inc/config.php';
include_once 'inc/functions_login.php';

sec_session_start();

if (login_check($mysqli) == true) {
	$logged = 'Ja';
	header('Location: loggedin.php');
} else {
	$logged = 'Nein';
}

?>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style/main.css">
		<link type="text/css" rel="stylesheet" href="style/index.css">
		<script type="text/JavaScript" src="js/sha512.js"></script>
    	<script type="text/JavaScript" src="js/forms.js"></script>
	</head>
	<body>

	
	<div id="main_left">
		<div id="logo">
			<div class="inner_logo">
				<a href="index.php"><img src="images/logo2.png" class="img_logo"></a>
			</div>
		</div>
		
		<div id="charinfo">
			<div class="inner_charinfo">
				<p>
				<?php
					if (isset($_GET['error'])) {
						echo '<p class="error">Error Logging In!</p>';
					}
					?>
					<form method="POST" action="inc/login_procedure.php" name="login_form">
						<input class="textbox" type="text" name="email" placeholder="E-Mail Adresse" maxlength="50" size="30">
						<input class="textbox" type="password" name="password" placeholder="Passwort" maxlength="50" size="30">
						<input class="button" type="button" value="Einloggen" onclick="formhash(this.form, this.form.password);">
					</form>
				<?php
					if (login_check($mysqli) == true) {
						echo '<p>Eingeloggt? ' . $logged . ' als ' . htmlentities($_SESSION['username']) . '<a style="color: #3f75bc;" href="loggedin.php"> zum Spielbereich!</a>' . '.</p>';

						echo '<p>M&ouml;chten Sie den Benutzer wechseln? <a style="color: #3f75bc;" href="inc/logout.php">ausloggen</a>.</p>';
					} else {
						echo '<p>Eingeloggt: ' . $logged . '.</p>';
						echo "<p>Sie haben noch keinen Account? <a href='register.php' style='color: #3f75bc;'><b>Registrieren</b></a></p>";
					}
				?>
				</p>
			</div>
		</div>
		
		<div id="navigation">
			<div class="inner_navigation">

			</div>
		</div>
		
		<div id="footer">
			<div class="inner_footer">
				Support<br>
				Entwicklerteam<br>
				Datenschutzerkl&auml;rung
			</div>
		</div>
	</div>
	
	<div id="main_right">
		<div id="header">
			<div class="inner_header">
				Es sind derzeit <b><?php include('inc/users_online.php'); ?></b> Benutzer online. <a href="list_users_online.php" id="show_link">Anzeigen</a>
			</div>
		</div>
		
		<div id="content">
			<div class="inner_content">
				Herzlich Willkommen, auf <b>Browsergame.de</b><br>
				Du m&ouml;chtest ein Abenteuer in der Welt von Browsergame.de erleben und mit deinen Freunden
				eine atemberaubende Reise bestreiten?<br><br>
				
				Dann registriere dich jetzt und mit etwas Gl&uumlck erh&aumllst du auch einen<br>
				Beta-Zugang um so fr&uuml;h wie m&ouml;glich mit dem Abenteuer zu beginnen!<br>
			</div>
		</div>
	</div>
	
	
	</body>
</html>
	