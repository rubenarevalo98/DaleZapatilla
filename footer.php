<footer>
    <div class="footerBox">
        <div class="footerContent intro">
            Il Time Attack nasce in Giappone come fenomeno che unisce la passione per i motori alla rincorsa del
            giro più veloce.
            <br>
            Condividendone lo spirito, abbiamo deciso di portarlo anche in Italia, consentendo a tutti gli
            appassionati di potersi confrontare con ogni tipo di auto, rendendo le loro giornate in pista uniche ed
            indimenticabili...
        </div>
        <div class="footerContent">
            <a href="./contactanos.php">
                <h3>CONTACTANOS</h3>
            </a>
            WD AUTOMOTIVE di Andrea Scorrano
            <br>
            P.ta IVA 03347010161
            <br><br>
            <a href="mailto:hola@dalezapatilla.com">hola@dalezapatilla.com</a>
        </div>
        <script>
            $(function() {
                $('.email').each(function(i) {
                    var mail = $(this).html();
                    mail = mail.replace(" [at] ", "@");
                    mail = mail.replace(" [dot] ", ".");

                    $(this).html(mail).replaceWith('<a href="mailto:' + $(this).text() + '">' + $(this)
                        .text() + '</a>');
                });
            });
        </script>
        <div class="footerContent social">
            <h3>REDES SOCIALES</h3>
        <!-- <a class="fSocial" target="_blank" href="">
                <span class="fa-facebook"></span>
            </a>-->
            <a class="fSocial" target="_blank" href="https://www.youtube.com/channel/UC48u8o3hOGklAiGDgP3bD0g">
                <span class="fa-youtube"></span>
            </a>
            <a class="fSocial" target="_blank" href="https://www.twitch.tv/elgarajedehache">
                <span class="fa-twitch"></span>
            </a>
            <a class="fSocial" target="_blank" href="https://www.instagram.com/dale.zapatilla/">
                <span class="fa-instagram"></span>
            </a>
        </div>
    </div>
</footer>