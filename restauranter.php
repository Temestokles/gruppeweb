<section class="restaurants main">

	<h2>THAILANSKT</h2>

	<table>

		<tr>

			<td>
				<img src="BilderWebb/Yayas.JPG" Alt="Bild fra Yayas" width="150"  height="90">
			</td>

			<td>	<p><strong>YAYAS</strong><br>
				På restaurangen Yayas kan du oppleve Thailand i Oslo. En atmosphere som må oppleves.<br>
				Bra variert mat, som ikke er alltfor kryddet. Hvis man ønsker mer kryddet mat så er det mulig og be om det.
				<br></p>


				<div id="merinfoYayas">
					<div class="close_button"> X </div>

					<img src="BilderWebb/Yayas.JPG" Alt="Bild fra Yayas" width="200">
					<p>Matrettene er satt sammen av både thailandske og svenske kokker. <br>
						Restaurangen finnes på tre ulike steder i Oslo, Majorstuen,Vika og på Øvre Vollgata 13 i sentrum. <br>
						Her trenger man å booke bord før da det er et veldigt populært stede.<br>
						Kilde:<a href="http://www.yayas.no" target="blank"> www.yayas.no</a>
						Bilde: Fotograf: Saja Andersson</p>
					</div>
				</td>
			</tr>


			<tr>
				<td>
					<ul>
						<li class="lesMer" data-target="merinfoYayas">Les mer..</li>
						<li class="comments" data-target="comment_boks_Yayas"> Kommentere</li>
					</ul>

						<div id="comment_boks_Yayas">
							<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["YayasForm"])){
								skrivKommentarRestauranter("commentsYayas.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="YayasForm">
									</form>
								</div>
									<div class="kommentarer">
								<?php
								echo hentKommentarerRestauranter("commentsYayas.txt");
								?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>

<tr>

	<td>
			<img src="BilderWebb/plah.jpg" Alt="Bild fra restaurangen Plah" width="150"  height="90">
	</td>

	<td>	<p><strong>PLAH</strong><br>
			Plah Restaurant åpnet dørene 7. januar 2004, som første moderne thai i Skandinavia,<br>
			og er fremdeles den eneste i Norge. Man kan spise en stor meny i restauranten, eller street food i baren.
			<br></p>


			<div id="merinfoPlah">
				<div class="close_button"> X </div>

				<img src="BilderWebb/plah.jpg" Alt="Bild fra restaurangen Plah" width="200"  height="130">
			<p>Denne variasjonen har ført til at Plah bar og restaurant har blitt et mekka for matinteresserte,<br>
			 og har gjennom årene fått mye god media omtale.<br>
			24. juni 2013 utvidet Plah med egen Street Food Bar, vegg i vegg med Plah Restaurant<br/>
			Plah Bar er en moderne gastrobar med cocktails og Street Food fra Thailand og Sørøst Asia.<br>
			Stilen er uformell og avslappet. Her bestiller man flere retter som man deler seg imellom eller <br>
			velger en av to ferdigkomponerte menyer for hele bordet. I Plah Bar, skjenker man vinen selv, drikkr øl eller spennende cocktails.<br>
			Kilde:<a href="http://www.plah.no" target="blank"> www.plah.no</a></p>
			</div>
	</td>
</tr>


<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoPlah">Les mer..</li>
				<li class="comments" data-target="comment_boks_Plah"> Kommentere</li>
		</ul>
			<div id="comment_boks_Plah">
							<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["PlahForm"])){
								skrivKommentarRestauranter("commentsPlah.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="PlahForm">
									</form>
								</div>
										<div class="kommentarer">
											<?php
												echo hentKommentarerRestauranter("commentsPlah.txt");
											?>
										</div>

							</div>
						</td>
						<td>
						</td>
					</tr>
</table>

		<h2> SPANSKT</h2>

<table>

	<tr>

		<td> 	<img src="BilderWebb/Tapas.JPG" Alt="Bild på tapas fra Dattra" width="150"  height="90">
		</td>

		<td>	<p><strong>DATTRA TIL HAGEN</strong><br>
			Dattra til hagen er en fargerik bar, cafè og klubb fordelt over to etasjer og Oslos fineste og koseligeste bakgård.<br>
			Dattra byr på et godt utvalg av både varm og kald drikke og maten varier mellom lunsjretter og nydelige tapasretter, til a la cartè</p>


			<div id="merinfoDattra">
				<div class="close_button"> X </div>

				<img src="BilderWebb/Tapas.JPG" Alt="Bild på tapas fra Dattra" width="200">
				<p>Her er det humane priser på både drykk og mat.<br>
					Adresse: Grønland 10, 0188 Oslo<br>
					Kilde: <a href="http://www.dattra.no" target="blank">www.dattra.no</a><br>
					Bilde: Fotograf: Saja Andersson </p>
				</div>

			</td>
		</tr>

		<tr>
			<td>
				<ul>
					<li class="lesMer" data-target="merinfoDattra"> Les mer..</li>
					<li class="comments" data-target="comment_boks_Dattra"> Kommentere</li>
				</ul>

				<div id="comment_boks_Dattra">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["DattraForm"])){
								skrivKommentarRestauranter("commentsDattra.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="DattraForm">
									</form>
								</div>
										<div class="kommentarer">
											<?php
											echo hentKommentarerRestauranter("commentsDattra.txt");
											?>
										</div>

							</div>
						</td>
						<td>
						</td>
					</tr>
				

				<tr>
					<td>	<img src="BilderWebb/delikatessen.jpg" Alt="Bild på inngang til delikatessen" width="150"  height="90">

					</td>

					<td>	<p><strong>DELIKATESSEN</strong><br>
						Delikatessen er kjent for sin gode tapas og det finns idag tre restauranter i Oslo, Aker Brygge, Majorstuen og Grünerløkka.<br>
						Prismessigt ligger de på litt over middels men søker du etter kvalitè og ekte spansk tapas så har du kommit till rett stede.</p>

						<div id="merinfoDelikatessen">
							<div class="close_button"> X </div>

							<img src="BilderWebb/delikatessen.jpg" Alt="Bild på inngang til delikatessen" width="200">
							<p>Adresse:Aker Brygge, Holmens gate 2<br>
								Majorstuen,Vibes gate 8<br>
								Grünerløkka, Søndregate 8<br>
								For mer info, gå på <a href="http://www.delicatessen.no" target="blank"> www.delicatessen.no</a><br>
								Bilde: www.dn.no</p>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							<ul>
								<li class="lesMer" data-target="merinfoDelikatessen"> Les mer..</li>
								<li class="comments" data-target="comment_boks_Delikatessen"> Kommentere</li>
							</ul>

					<div id="comment_boks_Delikatessen">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["delikatessenForm"])){
								skrivKommentarRestauranter("commentsDelikatessen.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="delikatessenForm">
									</form>
								</div>
										<div class="kommentarer">
											<?php
											echo hentKommentarerRestauranter("commentsDelikatessen.txt");
											?>
										</div>

							</div>
						</td>
						<td>
						</td>
					</tr>
	</table>

	<h2> KINESISKT</h2>

<table>

<tr>

	<td> <img src="BilderWebb/dinner.jpg" Alt="Bild fra restauranten Dinner" width="150"  height="90">

	</td>

	<td>	<p><strong>DINNER</strong><br>
			Dinner Restaurant har servert mat fra det Szechuanske- og Kantonesiske kjøkken i hjertet av Oslo siden 1989 <br>
			og er stolte av å fremdeles tilby våre gjester en spennende reise i Kinesisk matkultur.
			</p>

			<div id="merinfoDinner">
				<div class="close_button"> X </div>

				<img src="BilderWebb/dinner.jpg" Alt="Bild fra restauranten Dinner" width="200"  height="140">
			<p>Tradisjonelt inneholder et kinesisk måltid mange retter som man deler mellom gjestene ved bordet for å danne en sosial ramme rundt måltidet.<br>
			 Vår meny er lagt opp på en slik måte at dette er mulig også hos oss.<br>
			Kilde: <a href="http://www.dinner.no" target="blank">www.dinner.no</a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoDinner"> Les mer..</li>
				<li class="comments" data-target="comment_boks_Dinner"> Kommentere</li>
		</ul>
				<div id="comment_boks_Dinner">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["dinnerForm"])){
								skrivKommentarRestauranter("commentsDinner.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="dinnerForm">
									</form>
								</div>
										<div class="kommentarer">
											<?php
											echo hentKommentarerRestauranter("commentsDinner.txt");
											?>
										</div>

							</div>
						</td>
						<td>
						</td>
					</tr>


<tr>
	<td><img src="BilderWebb/bambus.jpg" Alt="Bild fra Bambus loggo" width="150"  height="90">


	</td>

	<td>	<p><strong>BAMBUS RESTAURANT</strong><br>
			Bambus Restaurent i Oslo tilbyr mat fra vietnamesisk, thailandsk, japansk og kinesisk kjökken.<br>
			Hos Bambus kan du velge mellom et utvalg kinesiske retter. Vi gir deg den ekte smaken av kina <br>
			med hjemmelagde sauser og krydderblandinger.</p>

			<div id="merinfoBambus">
				<div class="close_button"> X </div>

				<img src="BilderWebb/bambus.jpg" Alt="Bild fra Bambus loggo" width="180"  height="110">
			<p>Adresse: Kirkeveien 57, 0368 Oslo<br>
			For mer info, gå in på <a href="http://www.bambussushi.no/" target="blank"> www.bambussushi.no</a></p>
			</div>

	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoBambus"> Les mer..</li>
				<li class="comments" data-target="comment_boks_Bambus"> Kommentere</li>
		</ul>
				<div id="comment_boks_Bambus">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["bambusForm"])){
								skrivKommentarRestauranter("commentsBambus.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="bambusForm">
									</form>
								</div>
									<div class="kommentarer">
										<?php
										echo hentKommentarerRestauranter("commentsBambus.txt");
										?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>
</table>

	<h2> JAPANSKT</h2>

<table>

	<tr>

		<td><img src="BilderWebb/sushi-godbit.jpg" Alt="Sushi Godbit loggo" width="150"  height="90">

		</td>

		<td>	<p><strong>SUSHI GODBIT BISLETT</strong><br/>
			Sushi godbit Bislett har sin beligenhet på Pilestredet 55<br>
			Her kan du bestille sushi for takeaway eller catering.</p>

			<div id="merinfoSushiBislett">
				<div class="close_button"> X </div>

				<img src="BilderWebb/sushi-godbit.jpg" Alt="Sushi Godbit loggo" width="180" height="110">
				<p>Her serveres det god og billig sushi. Faste tilbud på eksempel dagens sushi.<br>
					Her har de åpent alle dager frem til kl.21.00. <br>
					For mer info, gå in på <a href="http://www.sushigodbit.no" target="blank"> www.sushigodbit.no</a><br>
					Bilde: www.takeawayoslo.no </p>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<ul>
					<li class="lesMer" data-target="merinfoSushiBislett"> Les mer..</li>
					<li class="comments" data-target="comment_boks_Bislett"> Kommentere</li>
				</ul>

						<div id="comment_boks_Bislett">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["bislettForm"])){
								skrivKommentarRestauranter("commentsBislett.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="bislettForm">
									</form>
								</div>
										<div class="kommentarer">
										<?php
											echo hentKommentarerRestauranter("commentsBislett.txt");
										?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>
	</table>

	<h2>BUDGET</h2>

<table>

<tr>

	<td><img src="BilderWebb/logomemphis.jpg" Alt="Loggo fra Memphis" width="150"  height="90">

	</td>

	<td>	<p><strong>MEMPHIS</strong><br>
			Memphis ble etablert i mars 2000. Vår konsept er trendy og ungdommelig - et typisk studentsted. <br>
			Memphis har ca. 60 sitteplasser. Innredning er enkel, men fresh og trendy. <br>
			Memphis har også uteservering i bakgård og på gateplan.</p>

			<div id="merinfoMemphis">
				<div class="close_button"> X </div>

				<img src="BilderWebb/logomemphis.jpg" Alt="Loggo fra Memphis" width="180" height="110">
			<p>Det er uteservering utenfor med god sol på formiddagen, med lunsj eller kopp kaffe. <br>
			De har dagens aviser, spill til utlån og trådløs internett. <br>
			Adresse: Thorvald Meyers gate 63 på Grünerlökka<br>
			Source: <a href="http://www.memphis.no" target="blank">www.memphis.no </a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoMemphis"> Les mer..</li>
				<li class="comments" data-target="comment_boks_Memphis"> Kommentere</li>
		</ul>
				<div id="comment_boks_Memphis">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["memphisForm"])){
								skrivKommentarRestauranter("commentsMemphis.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="memphisForm">
									</form>
								</div>
										<div class="kommentarer">
										<?php
											echo hentKommentarerRestauranter("commentsMemphis.txt");
										?>
										</div>

							</div>
						</td>
						<td>
						</td>
					</tr>

<tr>
	<td><img src="BilderWebb/punjab.jpg" Alt="Bild fra punjab Tandoori" width="150"  height="90">

	</td>

	<td> 	<p><strong>PUNJAB TANDOORI</strong><br>
			Restauranten var en av de første Indiske restaurantene, med hjemmelaget Indisk mat i Oslo.<br>
			Harinder Singh som kom fra India i 1983 startet restauranten med sin kone Kiren Jot. <br>
			På denne tiden var det bare paret og en ansatt som jobbet i restauranten.<br>
			</p>

		 	<div id="merinfoPunjab">
		 		<div class="close_button"> X </div>
		 		<img src="BilderWebb/punjab.jpg" Alt="Bild fra punjab Tandoori" width="180" height="110">
		 	<p>Nå har restauranten blitt større og enda romsligere med Indiske dekorasjoner hentet inn spesielt fra India<br>
	 		Kokken har alltid vært kona til Mr. Singh, Kiren Jot som har vært kokk siden oppstarten i 1990 til dags dato. <br>
	 		Derfor har maten hatt den samme smaken i så mange år.<br>
	 		Her får du servert tradisjonell Indisk mat til en billig penge på rekord tid.<br>
			Source:<a href="http://www.punjabtandoori.no" target="blank">www.punjabtandoori.no</a>
			</p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoPunjab"> Les mer..</li>
				<li class="comments" data-target="comment_boks_Punjab"> Kommentere</li>
		</ul>
				<div id="comment_boks_Punjab">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["punjabForm"])){
								skrivKommentarRestauranter("commentsPunjab.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="punjabForm">
									</form>
								</div>
										<div class="kommentarer">
										<?php
											echo hentKommentarerRestauranter("commentsPunjab.txt");
										?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>

<tr>
	<td><img src="BilderWebb/ricebowl.png.jpg" Alt="Bild fra Rice bowl" width="150"  height="80">

	</td>

	<td> 	<p><strong>RICE BOWL</strong><br>
			Ricebowl er et samlingssted hvor familier kan spise en god middag til en rimelig pris <br>
			og et sted hvor du som har lyst på eksotisk mat med smak kan komme til.
			<br></p>

			<div id="merinfoRice">
				<div class="close_button"> X </div>

				<img src="BilderWebb/ricebowl.png.jpg" Alt="Bild fra Rice bowl" width="180" height="150">
			<p>Ricebowl har 54 sitteplasser til sammen så da gjelder det å komme først for å slippe køen.<br>
			Ricebowl ligger også veldig sentralt og det gjør at du slipper å lete,<br>
			og enklere finner man ikke så god mat.<br>
			Kilde:<a href="http://www.ricebowl.no" target="blank"> http://www.ricebowl.no</a></p>
			</div>
	</td>
</tr>

<tr>
	<td>
		<ul>
				<li class="lesMer" data-target="merinfoRice"> Les mer..</li>
				<li class="comments" data-target="comment_boks_Rice"> Kommentere</li>
		</ul>
				<div id="comment_boks_Rice">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["riceForm"])){
								skrivKommentarRestauranter("commentsRice.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="riceForm">
									</form>
								</div>
										<div class="kommentarer">
										<?php
											echo hentKommentarerRestauranter("commentsRice.txt");
										?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>
</table>

	<h2> EKSLUSIVT</h2>

<table>

	<tr>

		<td><img src="BilderWebb/backup/klosteret-logo.png." Alt="Loggo fra klosteret" width="120"  height="90">

		</td>

		<td> 	<p><strong>KLOSTERET</strong><br>
			Kjøkkenet på Klosteret er internasjonalt/fransk. Menyen er klassisk og råvarene er eksklusive.<br>
			Restauranten tilbyr dagens 3-5 og 7 retters menyer i tillegg til en a la carte meny som består av både kjøtt og fisk.<br>
			Klosterets vinkjeller har mer enn 800 forskjellige viner i alle prisklasser.<br>
			<br></p>

			<div id="merinfoKlostret">
				<div class="close_button"> X </div>

				<img src="BilderWebb/backup/klosteret-logo.png" Alt="Loggo fra klosteret" width="100" height="110">
				<p>Klosteret er et perfekt sted til å ta med din partner på. Romantisk atmosfär.<br>
					Adresse: Fredensborgveien 13. For mer info, gå in på <a href="http://www.klosteret.no" target="blank"> http://www.klosteret.no</a></p>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<ul>
					<li class="lesMer" data-target="merinfoKlostret"> Les mer..</li>
					<li class="comments" data-target="comment_boks_Klosteret"> Kommentere</li>
				</ul>

					<div id="comment_boks_Klosteret">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["klosteretForm"])){
								skrivKommentarRestauranter("commentsKlosteret.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="klosteretForm">
									</form>
								</div>
									<div class="kommentarer">
										<?php
										echo hentKommentarerRestauranter("commentsKlosteret.txt");
										?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>

		<tr>
			<td><img src="BilderWebb/nodee.jpg" Alt="Bild fra Nodee Asian cooking" width="150"  height="90">

			</td>

			<td> 	<p><strong>NODEE ASIAN COOKING</strong><br>
				Vi på Nodee ønsker deg velkommen til å prøve noe av det mest spennende innenfor Asian fusion i Oslo.<br>
				På menyen finner våre gjester alt fra fersk og innovativ sushi laget av lokale og <br>
				internationale råvarer samt unike og spennede retter som er laget med inspirasjon fra Øst- Asia.
				<br></p>

				<div id="merinfoNodee">
					<div class="close_button"> X </div>

					<img src="BilderWebb/nodee.jpg" Alt="Bild fra Nodee Asian cooking" width="180" height="110">
					<p>Nodee er populärt bland kjendiser så her finnes det stor risk at du möter på en og annen<br>
						For mer info, gå in på <a href="http://www.nodee.no" target="blank"> http://www.nodee.no</a></p>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<ul>
						<li class="lesMer" data-target="merinfoNodee"> Les mer..</li>
						<li class="comments" data-target="comment_boks_Nodee"> Kommentere</li>
					</ul>

				<div id="comment_boks_Nodee">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["nodeeForm"])){
								skrivKommentarRestauranter("commentsNodee.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="nodeeForm">
									</form>
								</div>
										<div class="kommentarer">
										<?php
											echo hentKommentarerRestauranter("commentsNodee.txt");
										?>
									</div>

							</div>
						</td>
						<td>
						</td>
					</tr>

			<tr>

				<td><img src="BilderWebb/alexsushi.png.jpg" Alt="Loggo Alex sushi" width="150"  height="90">

				</td>

				<td>	<p><strong>ALEX SUSHI</strong><br/>
					Alex suhi er Oslos populäreste Sushi stede. Her håller de höy klasse og kvalitet.<br>
					Her sitter man og ser når din sushi blir forberedt. Dyrt og ekslusivt men som mange syns er verdt det</p>

					<div id="merinfoAlex">
						<div class="close_button"> X </div>

						<img src="BilderWebb/alexsushi.png.jpg" Alt="Loggo Alex sushi" width="180" height="110">
						<p> Alex sushi håller till på to steder i Oslo. En på tjuvholmen og en på Solli plass.<br>
							For mer info, gå in på <a href="http://www.alexsushi.no" target="blank"> www.alexsushi.no</a></p>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<ul>
							<li class="lesMer" data-target="merinfoAlex"> Les mer..</li>
							<li class="comments" data-target="comment_boks_Alex"> Kommentere</li>
						</ul>

					<div id="comment_boks_Alex">
						<div class="close_button"> X </div>

						<h2> Skriv inn her</h2>

						<div class="form">
							<?php
							if(isset($_POST["alexForm"])){
								skrivKommentarRestauranter("commentsAlex.txt", $_POST["navn"], $_POST["comment_text"]);
							}
							?>

							<form action="?page=1" method="post">

								<table>
									<tr>
										<td> <strong> Ditt navn</strong> <br>
											<input type="text" name="navn"/><br></td>
										</tr>

										<tr>
											<td> <h4> Din kommentar</h4> <textarea wrap="Soft" name="comment_text"></textarea><br>
												<input type="submit" name="knapp1" Value="Send"/></td>
											</tr>
										</table>
										<input type="hidden" name="alexForm">
									</form>
								</div>
										<div class="kommentarer">
											<?php
												echo hentKommentarerRestauranter("commentsAlex.txt");
											?>
										</div>

							</div>
						</td>
						<td>
							s</td>
					</tr>
</table>
</section>