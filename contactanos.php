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
    <meta name="description" content="Pagina di contatto con l'organizzazione della Time Attack Series."><!-- max 155 caratteri -->
    <meta name="language" content="ES">
    <meta name="author" content="iRuby">
    <meta name="linkage" content="https://www.timeattackseries.com/contatti.html">
    <!-- -->
    <meta name="DC.Title" content="Contatti">
    <meta name="DC.Subject" content="Pagina di contatto con l'organizzazione della Time Attack Series.">
    <meta name="DC.Language" content="ES">
    <!-- -->
    <meta property="og:title" content="Contatti">
    <meta property="og:url" content="https://www.timeattackseries.com/contatti.html">
    <meta property="og:image" content="https://www.timeattackseries.com/foto/notizie/campionato2018.jpg">
    <meta property="og:site_name" content="TimeAttackSeries.com">
    <meta property="og:description" content="Pagina di contatto con l'organizzazione della Time Attack Series.">
    <!-- -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@timeattackitaly">
    <meta name="twitter:title" content="Contatti">
    <meta name="twitter:description" content="Pagina di contatto con l'organizzazione della Time Attack Series."><!-- max 140 caratteri -->
    <meta name="twitter:image" content="https://www.timeattackseries.com/foto/notizie/campionato2018.jpg">

    <title>Contatti</title>

    <link rel="icon" href="./style/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./style/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./style/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js?theme=grey&amp;tracking=1&amp;thirdparty=1&amp;privacyPage=https%3A%2F%2Fwww.timeattackseries.com%2Fcookie-policy.html"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/masonry.pkgd.min.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/loader.js"></script>
    <script src="./js/contact.js"></script>

    <script>
        $(document).ready(function() {
            var confirm_id = '';
            confirmMessage(confirm_id);
        });
    </script>
    <style></style>

</head>

<body class="bgPage">

    <?php require './header.php' ?>

    <div id="loader-wrapper" style="display: none;">
        <div id="loader"></div>
    </div>
    <main>
        <section>
            <div class="sectionBox">
                <h1 class="sectionTitle">CONTACTA CON <b>DALE ZAPATILLA</b></h1>
                <form class="contactUs" method="post" action="./invia-email.html" autocomplete="off">
                    <label id="name">
                        <span>NOMBRE COMPLETO</span>
                        <input type="text" name="nome">
                    </label>
                    <label id="email">
                        <span>E-MAIL</span>
                        <input type="text" name="email">
                    </label>
                    <label id="object">
                        <span>ASUNTO DEL MENSAJE</span>
                        <input type="text" name="oggetto">
                    </label>
                    <label id="message">
                        <span>TEXTO DEL MENSAJE</span>
                        <textarea name="messaggio"></textarea>
                    </label>
                    <div class="label">
                        <div class="confirm"></div>
                        <input type="submit" value="ENVIAR E-MAIL">
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php require './footer.php' ?>

</body>
<app-content ng-version="11.1.0"></app-content>

</html>