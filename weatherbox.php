<?php

setlocale (LC_TIME, 'no_NO');

$holdfile = 'http://www.yr.no/sted/Norge/Oslo/Oslo/Pilestredet/varsel.xml';

$loadfile = simplexml_load_file($holdfile);

$loaddag = $loadfile->forecast->tabular->time[0];

$temp = $loaddag->temperature['value'];
$typ = $loaddag->symbol['name'];
$val = $loaddag->symbol['number'];



switch ($val) {

	case 1:
	$pic = 'weathersun.png';
	break;
	case 2:
	case 3:
	$pic = 'weathersuncloud.png';
	break;
	case 4:
	case 15:
	$pic = 'weatherclouds.png';
	break;
    case 5:
    case 7:
    case 9:
    case 13:
    $pic = 'weatherrain.png';
    break;
    case 6:
    case 11:
    case 20:
    case 22:
    case 23:
	$pic = 'weatherbad.png';
	break;
	case 8:
	case 9:
	case 14:
	case 22:
	$pic = 'weathersnow.png';
	break;
}


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
