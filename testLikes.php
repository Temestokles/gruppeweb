<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="testlikes.css"/>
	<title></title>
</head>
<body>
			<ul>
				<form action="testLikes.php" method="post">
					<input type="submit" name="knapp" Value="trykk her"/>
					<input type="hidden" name="knapp" value="true"/>
					<li>Lik</li>
			</form>
			</ul>

			
		


			<?php
			//php kode for å lese hvor mange likes
				$filref = fopen("likesUteliv/likerHorgans.txt","r"); 
			 	$likes = fgets($filref); 
			 	fclose($filref)
			 ?>


		 			<?php
		 			
		 			// php kode for å trykke på liker-knapp
            		if(isset($_POST['knapp']))
            		{

        			$likes++; 
        	 		$filref= fopen("likesUteliv/likerHorgans.txt","w"); 
        	 		fwrite($filref, $likes); 
        	 		fclose($filref);

					 echo "Du og ".$likes. " andre liker Horgans";
        			}
    			
    			if(!isset($_POST['knapp']))
            		{
            			echo" det er ".$likes. " som liker Horgans";

    				}
					?>

					</body>
</html>