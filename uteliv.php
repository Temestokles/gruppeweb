<section class="uteliv main">

	<h2> POPULÆRE UTESTEDER I OSLO</h2>


<table>

<tr>
	<td> 
			<img src="BilderWebb/horgans.jpg" Alt="Bild fra utestedet Horgan's" width="150">
	</td>

	<td>	<p><strong>HORGAN'S</strong><br>
			Horgan`s åpnet i 1991 og er Oslos første amerikanske Bar og Restaurant.
			Fra torsdag til lørdag igjennom fylles ”storstua” opp med et mangfold av gjester,
			som studenter, forretningsfolk, artister og bohemer. <br>
			Det er godt med sitteplasser og det er servering ved bordene.
			<br></p>
	
	
			<div id="merinfoHorgans">
				<div class="close_button"> X </div>

				<img src="BilderWebb/horgans.jpg" Alt="Bild fra utestedet Horgan's" width="250">
			<p>Aldersgrensen er 26 år og tilbyr tre ulike musikkprofiler med to dansegulv.<br> 
			Det spilles variert musikk fra rock`n`roll, pop, R&amp;B, hip hop til elektronika som deephouse, <br>
			NU disco og disco. Kan også spise, Horgan`s serverer amerikanskinspirert mat og er mest kjent for sine<br>
			legendariske hamburgere.<br/> Source:<a href="http://www.horgans.no" target="blank"> www.horgans.no</a></p>
			</div>
	</td>
</tr>


<tr> 
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoHorgans">Les mer..</li>
				<li id="likeHorgans"> Lik </li>
				<li class="comments" data-target="comment_boks_Horgans"> Kommentere</li>
			</ul>
					<div id="comment_boks_Horgans">
						<h2> Skriv inn her</h2>
						<form action="?page=2" method="post">
							Navn:<input type="text" name="Navn"/><br>
							Kommentar:<br><textarea wrap="Soft" name="comment_text"></textarea><br>
							<input type="submit" name="knapp1" Value="Send"/>
							
						</form>
					</div>
					<?php
								$filref = fopen("commentsHorgans.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp1'])){

        	 					$filref= fopen("commentsHorgans.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>

					<?php
					$filref = fopen("likerHorgans.txt","r"); 
			 		$likes = fgets($filref); 
			 		fclose($filref)
			 		?>

		 			<?php

            		if(isset($_REQUEST['likeHorgans']))
            		{

        			$likes++; 
        	 		$filref= fopen("likerHorgans.txt","w"); 
        	 		fwrite($filref, $likes); 
        	 		fclose($filref);

					 echo "Det er ".$likes. "som liker Horgans";
        			}



					?>
				
	</td>
</tr>

<tr> 
	<td> 	<img src="BilderWebb/bar_vulkan_oslo1.jpg" alt="bild fra utestedet bar Vulkan" width="150" height="90">

	</td>

	<td>	<p><strong>BAR VULKAN</strong><br>
			BAR er både restaurant og bar i samme lokaler, med like stor vekt på begge deler.
			BAR Vulkan kan tilby en helaften med deilig mat og vin, spennende cocktails og behagelig musikk utover kvelden.</p>
	

			<div id="merinfoVulkan">
				<div class="close_button"> X </div>

				<img src="BilderWebb/bar_vulkan_oslo1.jpg" alt="bild fra utestedet bar Vulkan" width="250" height="190">
			<p>Når varmen tillater det kan du benytte deg av deres uteservering tett inn mot Akerselven,
			 eller beundre utsikten fra takterrassen.<br> Byns beste stede for de som er 30 og oppover.</p>
			</div>

	 </td>
 </tr>
 
<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoVulkan"> Les mer..</li>
				<li id="likeVulkan"> Lik </li>
				<li class="comments" data-target="comment_boks_Vulkan"> Kommentere</li>
			</ul>
					<div id="comment_boks_Vulkan">
						<form action="?page=2" method="post">
							Navn:<input type="text" name="Navn"/>
							<textarea wrap="Soft" name="comment_text"></textarea><br>
							<input type="submit" name="knapp2" Value="Send"/>
							<input type="submit" name="read_commentsVulkan" Value="Les kommentarer"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsVulkan.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp2'])){

        	 					$filref= fopen("commentsVulkan.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>

<tr>
	<td><img src="BilderWebb/nivou_logo.jpg" Alt="Bilde fra utestedet Nivou" width="150"> 

	</td>

	<td>	<p><strong>NIVOU</strong><br>
			Nivou er Oslos største nattklubb, med to etasjer, VIP-lounger, og helårsåpen bakgård med sydlig stemning. 
			Nivou har en stor og variert champagnemeny og et godt utvalg av drinker.<br>
			I underetasjen er det minimalt med møbler, og musikken er noe tyngre enn i første etasje.<br></p>
	
			<div id="merinfoNivou">
				<div class="close_button"> X </div>

				<img src="BilderWebb/nivou_logo.jpg" Alt="Bilde fra utestedet Nivou" width="250">
			<p>I underetasjen er det minimalt med møbler, og musikken er noe tyngre enn i første etasje.
			Flere av Norges beste Djs gjester Nivou hver helg,<br> 
			og med jevne mellomrom kommer også kjente, internasjonale Djs til stedets to scener.<br>
			Source:<a href="http://www.nivou.no" target="blank"> www.nivou.no</a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoNivou"> Les mer..</li>
				<li id="likeNivou"> Lik </li>
				<li class="comments" data-target="comment_boks_Nivou"> Kommentere</li>
			</ul>
					<div id="comment_boks_Nivou">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp3" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsNivou.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp3'])){

        	 					$filref= fopen("commentsNivou.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>

<tr>
	<td> <img src="BilderWebb/jaeger-oslo.jpg" Alt="Loggo fra utestedet Jæger" width="130">

	</td>

	<td>	<p><strong>JÆGER</strong><br>
			Med internasjonale bookings i helgene og faste konsepter i ukedagene har Jaeger på kort tid blitt
			en av de mest populære og innflytelsesrike utestedene i Oslo.
			<br></p>
			
			<div id="merinfoJaeger"> 
				<div class="close_button"> X </div>

				<img src="BilderWebb/jaeger-oslo.jpg" Alt="Loggo fra utestedet Jæger" width="200">
			<p>Lokalisert på grensen 9 midt i hjertet av hovedstaden er klubben blitt ett knutepunkt
			mellom øst og vest og trekker ett publikum<br> som strekker seg langt utover de faste klubbgåerene i byen. Gratis før midnatt, 100kr etter. Diskon åpner 23:00. ID 23 fra 23:00.<br>
			På dagtid kan du drikke kaffe, ta en pils eller spise lunsj i caféen som holder åpent frem til 18.30 hver dag<br>
			og på kveldstid har vi ett spekket klubbprogram fra mandag til og med søndag.<br>
			Source: <a href="http://www.jægeroslo.no" target="blank">www.jægeroslo.no</a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoJaeger"> Les mer..</li>
				<li id="likeJaeger"> Lik </li>
				<li class="comments" data-target="comment_boks_Jaeger"> Kommentere</li>
			</ul>
					<div id="comment_boks_Jaeger">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp4" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsJaeger.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp4'])){

        	 					$filref= fopen("commentsJaeger.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>


<tr>
	<td><img src="BilderWebb/blaaLogo.png" Alt="Bild fra utestedet Blå" width="100">

	</td>

	<td>	<p><strong>BLÅ</strong><br>
			BLÅ booking vil overraske, utfordre, engasjere og fokusere på nerve innen de fleste sjangre og kulturelle uttrykk.
			Det finnes noe bra innen alle sjangre.<br></p>
			
			<div id="merinfoBlaa">
				<div class="close_button"> X </div>

				<img src="BilderWebb/blaaLogo.png" Alt="Bild fra utestedet Blå" width="150">
			<p>Jazz, elektronisk, hip-hop, pop og rock samt krysningene mellom disse er noe som du kan oppleve på Blå.<br>
			Visionen er og fylle det gamle diamantlageret til randen med kultur. <br>
			Tilsammen arrangerer BLÅ ca.380 arrangementer per år.
			Fin uteservering med utsikt over akerselva.<br>
			Source:<a href="http://www.blaaoslo.no" target="blank"> www.blaaoslo.no</a></p>
			</div>

	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoBlaa"> Les mer..</li>
				<li id="likeBlaa"> Lik </li>
				<li class="comments" data-target="comment_boks_Blaa"> Kommentere</li>
			</ul>
					<div id="comment_boks_Blaa">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp5" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsBlaa.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp5'])){

        	 					$filref= fopen("commentsBlaa.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>

<tr>

	<td><img src="BilderWebb/vu-club-oslo.jpg" Alt="Bild fra utestedet VU" width="160">

	</td>

	<td>	<p><strong>CLUB VU</strong><br/>
			VU betyr "å ha sett" på fransk.Bak VU finner man tre dedikerte eiere med lang erfaring i bransjen.
			Etter å ha sett og erfart mye ville de skape et sted i tråd med deres smak.
			Resultatet VU ble som består av en jovial bakgård, hovedrommet og en separè.<br></p> 

			<div id="merinfoVu">
				<div class="close_button"> X </div>

				<img src="BilderWebb/vu-club-oslo.jpg" Alt="Bild fra utestedet VU" width="250">
			<p>Aldersgrensen er 26 år, da Oslo mangler et tilbud til denne aldersgruppen.<br> 
			Det er godt med sitteplasser og bord på VU, og det er servering ved bordene.<br>
			Baren har et rikholdig utvalg, og personalet er meget serviceinnstilt.
			Musikken består av klassisk soul,<br> funk og disko blandet med nyere house
			og popmusikk. <br>
			Funktion-One anlegget sørger for knallbra lyd. Source:<a href="http://www.vu-oslo.no" target="blank"> www.vu-oslo.no</a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoVu"> Les mer..</li>
				<li id="likeVu"> Lik </li>
				<li class="comments" data-target="comment_boks_Vu"> Kommentere</li>
			</ul>
					<div id="comment_boks_Vu">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp6" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsVu.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp6'])){

        	 					$filref= fopen("commentsVu.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>

<tr>
	<td><img src="BilderWebb/nox2.jpg" Alt="Bilde fra utestedet Nox" width="160" height="90">

	</td>

	<td>	<p><strong>NOX</strong><br>
			Her er stedet for de som liker når champagnen fløder. Nox er et ekslusivt stede med flott interiör og har sin beligenhet
			på Solli Plass. På et stede som Nox er det dresscode som gjelder og det kan vare vanskelig å komme in.<br></p>
		
			<div id="merinfoNox">
				<div class="close_button"> X </div>

				<img src="BilderWebb/nox2.jpg" Alt="Bilde fra utestedet Nox" width="260" height="150">
			<p>Vil du tilbringe en kveld på Nox så ta med mye penger da drykk koster.<br>
			Source:<a href="http://www.clubnox.no" target="blank">http://www.clubnox.no/</a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoNox"> Les mer..</li>
				<li id="likeNox"> Lik </li>
				<li class="comments" data-target="comment_boks_Nox"> Kommentere</li>
			</ul>
					<div id="comment_boks_Nox">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp7" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsNox.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp7'])){

        	 					$filref= fopen("commentsNox.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>


<tr>
	<td><img src="BilderWebb/sologgo2.jpg" Alt="Loggo fra utestedet SO" width="130">

	</td>

	<td>	<p><strong>SO</strong><br>
			So er Norges eneste utested for jenter som liker jenter.
			Ett til synes litet stede som ligger i Grensen men som har god service, bra musikk og en deilig stemning.
			Bra musikk for de som liker variert, allt fra dagens hit-låtar til gamle sanger fra førr.<br></p>
			
			<div id="merinfoSo">
				<div class="close_button"> X </div>

				<img src="BilderWebb/sologgo2.jpg" Alt="Loggo fra utestedet SO" width="200">
			<p>Finnes også en poledance stang som man kan svinge seg runt mitt på dansegulvet.<br> 
			Her kommer garantert en låt der du kan synge med.<br>
			Source: <a href="http://www.so-oslo.no" target="blank">www.so-oslo.no </a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoSo"> Les mer..</li>
				<li id="likeSo"> Lik </li>
				<li class="comments" data-target="comment_boks_So"> Kommentere</li>
			</ul>
					<div id="comment_boks_So">
						<form action="?page=1" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp8" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsSo.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp8'])){

        	 					$filref= fopen("commentsSo.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>

<tr>
	<td><img src="BilderWebb/villaloggo1.jpg" Alt="Loggo fra utestedet The villa" width="100">

	</td>

	<td> 	<p><strong>THE VILLA</strong><br>
			En underground klubb med Norges beste sounds system. Her kommer nationelle og internationelle dj's fra hele verden.<br>
		 	Ett stede som for deg til og danse hele natten. <br></p>
		 	
		 	<div id="merinfoVilla">
		 		<div class="close_button"> X </div>
		 		<img src="BilderWebb/villaloggo1.jpg" Alt="Loggo fra utestedet The villa" width="150">
		 	<p>Tips, ta med øronpropper. For den som fremst liker club house, elektro og dubstep. Aldersgrense 21+.<br/>
			Annet stede å ha i baktanke hvis man liker dubstep og elektro beats er Kulturhuset Hausmania 
			<a href="http://www.hausmania.org" target="blank"><br/>(www.hausmania.org)</a>
			som oftest ordner konserter inom den genren.</p><br/>
			</div>
	</td>
</tr>

<tr>	
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoVilla"> Les mer..</li>
				<li id="likeVilla"> Lik </li>
				<li class="comments" data-target="comment_boks_Villa"> Kommentere</li>
			</ul>
					<div id="comment_boks_Villa">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp9" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsVilla.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp9'])){

        	 					$filref= fopen("commentsVilla.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>

<tr>
	<td><img src="BilderWebb/raanattklubbLogo.gif" Alt="Loggo fra utestedet Rå" width="160" height="100">

	</td>

	<td> 	<p><strong>RÅ</strong><br>
			Rå er storstua for hip hopere i Oslo, over to etasjer og med et oppvarmet uteområde.
			Dj:er, dansegulv, og konserter. Utenlandske hiphop- og rnbstjerner som gjester Norge ender ihvertfall alltid opp på Rå utpå natta.
			<br></p>
			
			<div id="merinfoRaa">
				<div class="close_button"> X </div>

				<img src="BilderWebb/raanattklubbLogo.gif" Alt="Loggo fra utestedet Rå" width="200" height="120">
			<p>Publikum her er 18+. Så et utestede som passer seg for en yngre målgruppe.<br>
			Source:<a href="http://www.raaoslo.no" target="blank"> http://www.raaoslo.no</a></p>
			</div>
	</td>
</tr>

<tr>	
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoRaa"> Les mer..</li>
				<li id="likeRaa"> Lik </li>
				<li class="comments" data-target="comment_boks_Raa"> Kommentere</li>
			</ul>
					<div id="comment_boks_Raa">
						<form action="?page=2" method="post">
							<textarea wrap="Soft" name="comment_text"></textarea>
							<input type="submit" name="knapp10" Value="Send"/>
						</form>
					</div>
					<?php
								$filref = fopen("commentsRaa.txt","r"); 
			 					$Horgans = fgets($filref); 
			 					fclose($filref)
 					?>

 					<?php

								if(isset($_POST['knapp10'])){

        	 					$filref= fopen("commentsRaa.txt","a"); 
        	 					$navn=$_POST['Navn'];
        	 					$kommentar = $_POST['comment_text'];
        	 					fwrite($filref,"\r\n".$navn);
        	 					fwrite($filref,"\r\n".$kommentar); 
        	 					fclose($filref);

        	 				echo'Kommentar sendt';
					}

					?>
	</td>
</tr>


</table>


</section>
