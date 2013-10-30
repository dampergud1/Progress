<?php 
function makeHeader($title, $imports = array()) {
?>
<?php 
if (isset($_GET['accept-cookies'])) {
	setcookie('accept-cookies', 'true', time() + 31536000);
	header('Location: '.$_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta name="author" content="Kasper Sølvstrøm, Chris Nielsen">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">

	<!-- TITLE -->
	<title><?php echo $title; ?> | inProgress</title>

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<!-- SCRIPTS -->
	<!--[if lt IE 9]>
        <script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="scripts/modernizr.custom.js"></script>
    <?php 

    foreach ($imports as $import) {
    	echo $import;
    }

     ?>

	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="styles/master.css" media="all">
	<link rel="stylesheet" type="text/css" href="styles/component.css">

	<!-- FAV ICONS -->
	<link rel="shortcut icon" href="images/logo.png"/>

	<!-- iOS ICONS -->

</head>
	<?php
}

 ?>