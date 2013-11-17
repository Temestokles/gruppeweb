<?php

setlocale (LC_TIME, 'no_NO');

$holdfile = 'http://www.yr.no/sted/Norge/Oslo/Oslo/Pilestredet/varsel.xml';

$loadfile = simplexml_load_file($holdfile);

$loaddag = $loadfile->forecast->tabular->time[0];

$temp = $loaddag->temperature['value'];
$typ = $loaddag->symbol['name'];
$val = $loaddag->symbol['number'];


if ($val == 1)
	$pic = 'weathersun.png';
if ($val == 2)
	$pic = 'weathersuncloud.png';
if ($val == 3)
	$pic = 'weathersuncloud.png';
if ($val == 4)
	$pic = 'weatherclouds.png';
if ($val == 5)
	$pic = 'weatherrain.png';
if ($val == 6)
	$pic = 'weatherbad.png';
if ($val == 7)
	$pic = 'weatherrain.png';
if ($val == 8)
	$pic = 'weathersnow.png';
if ($val == 9)
	$pic = 'weatherrain.png';
if ($val == 10)
	$pic = 'weatherrain.png';
if ($val == 11)
	$pic = 'weatherbad.png';
if ($val == 12)
	$pic = 'weatherrain.png';
if ($val == 13)
	$pic = 'weathersnow.png';
if ($val == 14)
	$pic = 'weathersnow.png';
if ($val == 15)
	$pic = 'weatherclouds.png';
if ($val == 20)
	$pic = 'weatherbad.png';
if ($val == 21)
	$pic = 'weathersnow.png';
if ($val == 22)
	$pic = 'weatherbad.png';
if ($val == 23)
	$pic = 'weatherbad.png';


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8">
<link rel="stylesheet" href="box.css" type="text/css" title="boxstil">
<title>Weatherbox</title>
</head>

<body>
<table>
	<tr>
		<td><img src ="<?php echo $pic; ?>" alt="weatherpic" height="120" width="80">
		<p>Temp = <?php echo $temp . "<br>" . "<br>" . $typ;?></p>
		</td>
	</tr>
</table>
</body>
</html>

/* css som burde bli lagt inn

img		{border: 2px solid black;
}

p		{position: relative;
		 text-align: center;
		 color: blue;
		 bottom: 107px;
		 font-size: small;
}

*/
