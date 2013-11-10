<!DOCTYPE html>
<html>
<head>
	<title>Velkommen til Oslo</title>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="oslo.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="functions.js"></script>
</head>

<body>
	<div class="container">

		<header>
				<h2>Velkommen til</h2>
					<h1>OSLO</h1>
						<h1>GUIDEN</h1>
			<nav class="mainmenu">
				<ul>
					<li>Startside</li>
					<li>Resturanter</li>
					<li><a href="?page=1">Uteliv</a></li>
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
		
		<?php

if(!isset($_GET['page'])){
	$_GET['page'] = "index";
}

switch($_GET['page']){
	case 1:
		include("uteliv.php");
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
			<p>Gruppe 1</p>
		</footer>
	</div>
</body>
</html>