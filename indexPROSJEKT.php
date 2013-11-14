<!DOCTYPE html>
<html>
<head>
	<title>Velkommen til Oslo</title>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="oslo.css"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="functions.js"></script>
</head>

<body>
	<div class="container">
		<div class="header-cont">
		<header>
				<h2>Velkommen til</h2>
					<h1>OSLOGUIDEN</h1>
						
			<nav class="mainmenu">
				<ul>
					<li>Startside</li>
					<li><a href="?page=1">Resturanter</a></li>
					<li><a href="?page=2">Uteliv</a></li>
					<li>Shopping</li>
					<li>Severdigheter</li>
					<li>Kultur</li>
					<li>Aktiviteter</li>
				</ul>

					<div class="date">
						<?php
						$dato=date("d-m-Y H:i"); 
						setlocale(LC_TIME, "no_NO");

						echo"$dato";

						?>
					</div>
			</nav>
</header>
</div>		
		<?php

if(!isset($_GET['page'])){
	$_GET['page'] = "index";
}

switch($_GET['page']){
	case 1:
		include("restauranter.php");
	break;

	case 2:
		include("uteliv.php");
	break;

	default:
		include("index_innhold.php");
	break;
}



?>
		<footer>
			<p>Gruppe 34</p>
		</footer>
	</div>
</body>
</html>
