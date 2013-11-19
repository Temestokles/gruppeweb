<?php
include('funksjoner.php');
?>
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
			<nav class="mainmenu">
				<ul>
					<li><a href="?page=index">Startside</a></li>
					<li><a href="?page=1">Resturanter</a></li>
					<li><a href="?page=2">Uteliv</a></li>
					<li><a href="?page=3">Shopping</a></li>
					<li><a href="?page=4">Severdigheter</a></li>
					<li><a href="?page=5">Kultur</a></li>
					<li><a href="?page=6">Aktiviteter</a></li>
				</ul>
				
					<div class="date">
						<?php
						$dato=date("d-m-Y H:i"); 
						setlocale(LC_TIME, "no_NO");

						echo"$dato";

						?>
					</div>
			</nav>
			</div>
			<h2>Velkommen til</h2>
			<h1>Oslo Guiden</h1>
				
</header>
		
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

	case 3:
		include("shopping.php");
	break;

	case 4:
		include ("severdigheter.php");
	break;

	case 5:
		include ("kulturaktiviteter.php");
	break;

	case 6:
		include ("aktiviteter.php");
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
