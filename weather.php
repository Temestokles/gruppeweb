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
	$pic = 'BilderWebb/weathersun.png';
	break;
	case 2:
	case 3:
	$pic = 'BilderWebb/weathersuncloud.png';
	break;
	case 4:
	case 15:
	$pic = 'BilderWebb/weatherclouds.png';
	break;
    	case 5:
	case 7:
    	case 9:
	case 13:
	$pic = 'BilderWebb/weatherrain.png';
	break;
	case 6:
	case 11:
    	case 20:
    	case 22:
    	case 23:
	$pic = 'BilderWebb/weatherbad.png';
	break;
	case 8:
	case 9:
	case 14:
	case 22:
	$pic = 'BilderWebb/weathersnow.png';
	break;
}


?>


<table id="weather">
        <tr>
                <td><img src ="<?php echo $pic; ?>" alt="weatherpic" height="180" width="120">
                <p>Temp = 3<br><br>Lettskyet</p>
                </td>
        </tr>
</table>