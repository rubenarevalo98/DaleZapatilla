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
    <meta name="language" content="ES">
    <meta name="author" content="iRuby">

    <title>Shop » Carrello</title>

    <link rel="icon" href="./style/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./style/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/YouTubePopUp.css">
    <link rel="stylesheet" type="text/css" href="./style/carousel.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js?theme=grey&amp;tracking=1&amp;thirdparty=1&amp;privacyPage=https%3A%2F%2Fwww.timeattackseries.com%2Fcookie-policy.html"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/masonry.pkgd.min.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/loader.js"></script>
    <script src="./js/shop_cart.js"></script>
    <script src="./js/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            function verifyForm(text, url) {
                swal({
                    type: 'success',
                    title: 'Un\'ultima verifica...',
                    text: text,
                    html: true,
                    showCancelButton: true,
                    cancelButtonText: 'correggi indirizzo',
                    showConfirmButton: true,
                    confirmButtonColor: '#00a651',
                    confirmButtonText: 'completa l\'acquisto',
                    allowOutsideClick: true,
                    closeOnConfirm: false
                }, function() {
                    window.location = url;
                });
            }

            function errorMessage(text) {
                swal({
                    type: 'error',
                    title: 'ERRORE!',
                    text: text,
                    html: true,
                    showConfirmButton: true,
                    confirmButtonColor: '#009f4e',
                    confirmButtonText: 'aggiorna il profilo',
                    allowOutsideClick: true,
                    closeOnConfirm: false
                }, function() {
                    window.location = 'https://www.timeattackseries.com/shop/profilo.html';
                });
            }
            $('a#Payment').click(function() {
                var linkURL = $(this).attr('href'),
                    paypalCommissions = '',
                    paymentType = $(this).text();
                paymentType = $.trim(paymentType.replace(/[\t\n]+/g, ' '));

                if (paymentType == 'PayPal') {
                    var totalOrder = $('span.itemPrice.totalOrder').text();
                    totalOrder = totalOrder.replace('€ ', '');
                    totalOrder = totalOrder.replace('.', '');
                    totalOrder = totalOrder.replace(',', '.');

                    // commissione del 4%
                    paypalCommissions = ((totalOrder * 100) / 96) - totalOrder;
                    paypalCommissions = paypalCommissions.toFixed(2);
                    paypalCommissions = '<br /><br /><b style="color: #0070ba;">Commissione PayPal: + € ' + paypalCommissions.replace('.', ',') + '</b>';
                }

                errorMessage("Prima di procedere con l\'invio dell\'ordine, accedi al tuo profilo e compila tutti i dati mancanti...");

                return false;
            });
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
                <h1 class="sectionTitle">CONTENUTO <b>CARRELLO</b></h1>
                <div class="shopMenuFixed">
                    <ul class="shopMenu">
                        <li>
                            <a href="https://www.timeattackseries.com/shop/accedi.html">
                                <span class="ico fa-sign-in">Accedi</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.timeattackseries.com/shop/registrazione.html">
                                <span class="ico fa-user-plus">Registrati</span>
                            </a>
                        </li>
                        <li class="cart">
                            <a href="https://www.timeattackseries.com/shop/carrello.html">
                                <span class="ico fa-shopping-cart"><b>3</b> <strong>articoli</strong></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="shopCartList">
                    <li>
                        <a class="del" href="https://www.timeattackseries.com/shop/0_cancella.html" title="Rimuovi articolo dal carrello">
                            <span class="ico fa-trash-o"></span>
                        </a>
                        <span class="itemName full">Iscrizione EXTREME - Misano 1</span>
                        <span class="itemName slim">Iscrizione EXTREME - Misano 1</span>
                        <span class="itemPrice" id="destID0">€ 516,00</span>
                        <input class="quantity" type="number" name="itemQuantity" min="1" value="1" amount="516" destination="destID0">
                    </li>
                    <li>
                        <a class="del" href="https://www.timeattackseries.com/shop/1_cancella.html" title="Rimuovi articolo dal carrello">
                            <span class="ico fa-trash-o"></span>
                        </a>
                        <span class="itemName full">Iscrizione PRO - Franciacorta</span>
                        <span class="itemName slim">Iscrizione PRO - Franciacorta</span>
                        <span class="itemPrice" id="destID1">€ 468,00</span>
                        <input class="quantity" type="number" name="itemQuantity" min="1" value="1" amount="468" destination="destID1">
                    </li>
                    <li>
                        <a class="del" href="https://www.timeattackseries.com/shop/2_cancella.html" title="Rimuovi articolo dal carrello">
                            <span class="ico fa-trash-o"></span>
                        </a>
                        <span class="itemName full">Iscrizione STREET - Monza</span>
                        <span class="itemName slim">Iscrizione STREET - Monza</span>
                        <span class="itemPrice" id="destID2">€ 468,00</span>
                        <input class="quantity" type="number" name="itemQuantity" min="1" value="1" amount="468" destination="destID2">
                    </li>
                    <li class="cartSummary">
                        <span class="itemPrice total">€ 1.452,00</span>
                        <span class="cartSummaryInfo">Totale prodotti &nbsp;</span>
                    </li>
                    <li class="cartSummary transport">
                        <span class="itemPrice">€ 0,00</span>
                        <input type="hidden" id="shippingCost" value="0">
                        <span class="cartSummaryInfo">Spedizione &nbsp;</span>
                    </li>
                    <li class="cartSummary">
                        <span class="itemPrice totalOrder">€ 1.452,00</span>
                        <span class="cartSummaryInfo">Totale ordine &nbsp;</span>
                    </li>
                </ul>
            </div>
        </section>
    </main>



    <?php require './footer.php' ?>


</body>
<app-content ng-version="11.1.0"></app-content>

</html>