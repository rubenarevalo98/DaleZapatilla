<html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-113923279-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-113923279-1');
	</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="ES">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Sito ufficiale del Time Attack Italia dove rimanere aggiornati su eventi, regolamenti, foto, video, classifiche e risultati...">
	<!-- max 155 caratteri -->
	<meta name="language" content="ES">
	<meta name="author" content="iRuby">iRuby
	<meta name="linkage" content="https://www.dalezapatilla.com/">
	<!-- -->
	<meta name="DC.Title" content="DaleZapatilla.com">
	<meta name="DC.Subject" content="Sito ufficiale del Time Attack Italia  dove rimanere aggiornati su eventi, regolamenti, foto, video, classifiche e risultati...">
	<meta name="DC.Language" content="ES">
	<!-- -->
	<meta property="og:title" content="DaleZapatilla.com">
	<meta property="og:url" content="https://www.DaleZapatilla.com/">
	<meta property="og:image" content="https://www.timeattackseries.com/foto/notizie/campionato2018.jpg">
	<meta property="og:site_name" content="TimeAttackSeries.com">
	<meta property="og:description" content="Sito ufficiale del Time Attack Italia  dove rimanere aggiornati su eventi, regolamenti, foto, video, classifiche e risultati...">
	<!-- -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@timeattackitaly">
	<meta name="twitter:title" content="TimeAttackSeries">
	<meta name="twitter:description" content="Sito ufficiale del Time Attack Italia  dove rimanere aggiornati su eventi, regolamenti, foto, video, classifiche e risultati...">
	<!-- max 140 caratteri -->
	<meta name="twitter:image" content="https://www.timeattackseries.com/foto/notizie/campionato2018.jpg">

	<title>Dale Zapatilla</title>

	<link rel="icon" href="./style/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="./style/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<link rel="stylesheet" type="text/css" href="./style/YouTubePopUp.css">
	<link rel="stylesheet" type="text/css" href="./style/carousel.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js?theme=grey&amp;tracking=1&amp;thirdparty=1&amp;privacyPage=https%3A%2F%2Fwww.timeattackseries.com%2Fcookie-policy.html"></script>
	<script src="./js/slick.js"></script>
	<script src="./js/menu.js"></script>
	<script src="./js/masonry.pkgd.min.js"></script>
	<script src="./js/imagesloaded.pkgd.min.js"></script>
	<script src="./js/loader.js"></script>
	<script src="./js/partnerList.js"></script>
	<script src="./js/YouTubePopUp.js"></script>
	<script src="./js/kinetic.js"></script>
	<script src="./js/final-countdown.min.js"></script>

	<script type="text/javascript">
		$('document').ready(function() {
			var countNow = new Date();
			var countStart = new Date(countNow);
			countStart.setDate(countNow.getDate() - 1);
			var countEnd = new Date('04/17/2021'); /* mm/gg/aaaa */

			$('#countdown').final_countdown({
				'now': countNow.getTime() / 1000,
				'start': countStart.getTime() / 1000,
				'end': countEnd.getTime() / 1000
			}, function() {
				// Finish Callback
			});
		});
	</script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/cookie-bar/1/cookiebar-grey.min.css">
	<style></style>
</head>

<body style="margin-bottom: 32px;">

	<?php require './header.php' ?>

	<div id="loader-wrapper" style="display: none;">
		<div id="loader"></div>
	</div>
	
	<main id="">
		<section class="nextEvent">
			<div class="countdownEvent">
				<div id="countdown" class="countdown-container container">
					<div class="clock row">

						<div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
							<div class="wrap">
								<div class="inner">
									<div id="canvas-days" class="clock-canvas">
										<div class="kineticjs-content" role="presentation" style="position: relative; display: inline-block; width: 138px; height: 138px;">
											<canvas width="138" height="138" style="padding: 0px; margin: 0px; border: 0px; background: transparent; position: absolute; top: 0px; left: 0px; width: 138px; height: 138px;"></canvas>
										</div>
									</div>
									<div class="text">
										<p class="val">9</p>
										<!--<span class="type-days type-time">GIORNI</span>-->
									</div>
								</div>
							</div>
						</div>

						<div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
							<div class="wrap">
								<div class="inner">
									<div id="canvas-hours" class="clock-canvas">
										<div class="kineticjs-content" role="presentation" style="position: relative; display: inline-block; width: 138px; height: 138px;">
											<canvas width="138" height="138" style="padding: 0px; margin: 0px; border: 0px; background: transparent; position: absolute; top: 0px; left: 0px; width: 138px; height: 138px;"></canvas>
										</div>
									</div>
									<div class="text">
										<p class="val">8</p>
										<!--<p class="type-hours type-time">ORE</p>-->
									</div>
								</div>
							</div>
						</div>

						<div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
							<div class="wrap">
								<div class="inner">
									<div id="canvas-minutes" class="clock-canvas">
										<div class="kineticjs-content" role="presentation" style="position: relative; display: inline-block; width: 138px; height: 138px;">
											<canvas width="138" height="138" style="padding: 0px; margin: 0px; border: 0px; background: transparent; position: absolute; top: 0px; left: 0px; width: 138px; height: 138px;"></canvas>
										</div>
									</div>
									<div class="text">
										<p class="val">29</p>
										<!--<p class="type-minutes type-time">MINUTI</p>-->
									</div>
								</div>
							</div>
						</div>

						<div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
							<div class="wrap">
								<div class="inner">
									<div id="canvas-seconds" class="clock-canvas">
										<div class="kineticjs-content" role="presentation" style="position: relative; display: inline-block; width: 138px; height: 138px;">
											<canvas width="138" height="138" style="padding: 0px; margin: 0px; border: 0px; background: transparent; position: absolute; top: 0px; left: 0px; width: 138px; height: 138px;"></canvas>
										</div>
									</div>
									<div class="text">
										<p class="val">12</p>
										<!--<p class="type-seconds type-time">SECONDI</p>-->
									</div>
								</div>
							</div>
						</div>

						<div class="clock-item desc">
							DIAS
						</div>
						<div class="clock-item desc">
							HORAS
						</div>
						<div class="clock-item desc">
							MINUTOS
						</div>
						<div class="clock-item desc">
							SEGUNDOS
						</div>

					</div>
				</div>

			</div>
			<div class="eventLayout Misano">
				<a class="eventName" href="./11-04-2021_misano.html">Misano</a>
				<img src="./circuito/Misano.png" alt="">
				<div>
					<a href="./11-04-2021_misano.html">FK1</a>
				</div>
			</div>
		</section>
	</main>

	<section>
		<div class="sectionBox">
			<h1 class="sectionTitle">Dale Zapatilla: <b>??Hacemos algo diferente?<br><br></b></h1>
			<h2 class="sectionTitle">Somos aficionados, y ??queremos correr! As?? que aqu?? estamos, organiz??ndolo todo:).
				<br><br>

				Creamos jornadas con coches, buen ambiente, adrenalina y risas aseguradas, todo en un ambiente
				deportivo, <br> y con coches para todos los gustos y bolsillos.

			</h2>
			<br><br><br><br><br><br>

			<ul id="newsList">
				<li>
					<div style="background-image: url('./foto/Anotacion_2020-09-29_150831_540x.jpg');"></div>
					<div>
						<h1>Con un toque innovador</h1>
						<span class="newsPreview">
							No mola hacer siempre lo mismo, ??no? Por eso nos estrujamos el coco. Cambiando la salida
							tradicional por una tipo "Le Mans", o cambiando el sentido de pista a mitad de resistencia.
							??Lo importante es hacerlo divertido!
						</span>
						<br>
						<br>
						<a href="">??Le damos zapatilla?</a>
					</div>
				</li>
				<li>
					<div style="background-image: url('./foto/preguntas_540x.jpg');"></div>
					<div>
						<h1>??Tienes alguna duda?</h1>
						<span class="newsPreview">
							??Cont??ctanos! Somos aficionados como t??, y todos en alg??n momento nos hemos sentido perdidos
							en algo. De veras, tengas duda sobre el coche, la resistencia o lo que sea, ponte en
							contacto con nosotros y te ayudaremos!
						</span>
						<br>
						<br>
						<a href="">Contacta con nosotros</a>
					</div>
				</li>
			</ul>

			<h2 class="sectionTitle"> <b></b></h2>

	</section>
	<section>
		<div class="sectionBox text-center">

			<div class="wrapper">

				<div class="section-header text-center">
					<h1 class="sectionTitle">??Nos han visto en directo desde todo el mundo!<b><br><br></b></h1>

				</div>

				<div class="grid">
					<div class="grid__item one-whole">
						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/t_xkneEgQ4Q?rel=0&amp;showinfo=0&amp;vq=720" width="850" height="480" frameborder="0" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section>
		<div class="sectionBox text-center">

			<div class="wrapper">

				<ul id="newsList">

					<li>
						<div style="background-image: url('./foto/Anotacion_2020-09-29_152232_540x.jpg');"></div>
						<div>
							<h1>??Venimos a pasarlo bien!</h1>
							<span class="newsPreview">
								Solo buscamos hacer algo en que todos podamos pasarlo bien. Todo buen rollo, con coches para todos los gustos, colores y bolsillos. Y ganes o quedes ??ltimo, adem??s de la experiencia, ??te llevar??s una medalla para recordarlo!
							</span>
							<br>
							<br>
							<a href="">??Te vienes a correr?</a>
						</div>
					</li>
				</ul>
				<h2 class="sectionTitle"> <b></b></h2>
				<h2 class="sectionTitle"> <b></b></h2>
	</section>


	


	<?php require './footer.php' ?>




<!--
	<div>
		<div id="cookie-bar-prompt" style="display:none">
			<div id="cookie-bar-prompt-content">
				<a rel="nofollow" id="cookie-bar-prompt-logo" href="http://cookie-bar.eu"><span>cookie bar</span></a>
				<a rel="nofollow" id="cookie-bar-prompt-close"><span>cerrar</span></a>

				<div class="clear"></div>
				<p>Esta web utiliza cookies para mejorar la experiencia y proporcionar funcionalidades adicionales.
					Ninguna de esta informaci??n puede ser o ser?? utilizada para identificarle o contactarle.<br>

					<i id="cookie-bar-thirdparty" style="display: block;">
						<br>Esta web utiliza cookies de terceros, consulte los detalles en la pol??tica de
						privacidad.<br>
					</i>

					<i id="cookie-bar-tracking" style="display: block;">
						<br>Esta web utiliza cookies de seguimiento, consulte los detalles en la pol??tica de
						privacidad.<br>
					</i>

					<i id="cookie-bar-privacy-page" style="display: inline-block;">
						<br>Para saber m??s sobre c??mo se utilizan las cookies en esta web consulte nuestra <a rel="nofollow" id="cookie-bar-privacy-link" href="https://www.timeattackseries.com/cookie-policy.html">POL??TICA DE
							PRIVACIDAD</a>.<br><br></i>

					<br>Pulsando <span>Aceptar cookies</span>, <span id="cookie-bar-scrolling">o desplaz??ndose a trav??s
						de la p??gina,</span> est?? dando su consentimiento a que se almacenen peque??as cantidades de
					informaci??n en su navegador.
					<i id="cookie-bar-no-consent" style="display: none;">
						<br>
						<br>Pulsando <span>No aceptar cookies</span> rechaza que se almacene informaci??n alguna para
						esta web y posiblemente se borre las cookies ya existente (algunas partes de la web podr??an
						dejar de funcionar correctamente).</i><br>

					<br>Para saber m??s sobre cookies consulte la <a rel="nofollow" target="_blank" href="https://es.wikipedia.org/wiki/Cookie_(inform%C3%A1tica)">Wikipedia</a>.
				</p>
				<hr>
				Para desactivar completamente las cookies en este navegador, pulse sobre el icono correspondiente y siga
				las instrucciones:
				<br>
				<br>
				<div id="cookie-bar-browsers">
					<!-- Thanks Peequi for the icons http://ampeross.deviantart.com/art/Peequi-part-1-290622606 --><!--
					<a rel="nofollow" class="chrome" target="_blank" href="https://support.google.com/accounts/answer/61416?hl=es"><span>Chrome</span></a>
					<a rel="nofollow" class="firefox" target="_blank" href="https://support.mozilla.org/es-ES/kb/enable-and-disable-cookies-website-preferences"><span>Firefox</span></a>
					<a rel="nofollow" class="ie" target="_blank" href="http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-11"><span>Internet
							Explorer</span></a>
					<a rel="nofollow" class="opera" target="_blank" href="http://help.opera.com/Windows/10.00/en/cookies.html"><span>Opera</span></a>
					<a rel="nofollow" class="safari" target="_blank" href="https://support.apple.com/kb/PH17191?viewlocale=es_ES"><span>Safari</span></a>
				</div>
				<br>
			</div>
		</div>

		<div id="cookie-bar" style="display: block; bottom: 0px; opacity: 1;">
			<p>Esta web utiliza cookies para mejorar la experiencia y proporcionar funcionalidades adicionales.
				<a rel="nofollow" id="cookie-bar-prompt-button" data-alt="Privacy policy">Detalles</a>
			</p>
			<a rel="nofollow" id="cookie-bar-button-no" style="display: none;">No aceptar cookies</a>
			<a rel="nofollow" id="cookie-bar-button">Aceptar cookies</a>
		</div>
	</div>-->
</body>
<app-content ng-version="11.1.0"></app-content>

</html>
