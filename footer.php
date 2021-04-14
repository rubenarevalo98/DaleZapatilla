<footer>
    <div class="footerBox">
        <div class="footerContent intro">
            En Dale Zapatilla creamos jornadas con coches, buen ambiente,
            adrenalina y risas aseguradas, todo en un ambiente deportivo, y con
            coches para todos los gustos y bolsillos. ¡Creado por y para pilotos!,
            con afán de aumentar el número de eventos en los que exista
            competitividad y un impecable buen ambiente.
        </div>
        <div class="footerContent contact">
            <a href="contactanos.html">
                <h3>CONTACTANOS</h3>
            </a>
            Asociación Deportiva Dale Zapatilla
            <br />
            <!--P.ta IVA 03347010161-->
            <br />
            <a href="mailto:hola@dalezapatilla.com">hola@dalezapatilla.com</a>
        </div>
        <script>
            $(function() {
                $(".email").each(function(i) {
                    var mail = $(this).html();
                    mail = mail.replace(" [at] ", "@");
                    mail = mail.replace(" [dot] ", ".");

                    $(this)
                        .html(mail)
                        .replaceWith(
                            '<a href="mailto:' +
                            $(this).text() +
                            '">' +
                            $(this).text() +
                            "</a>"
                        );
                });
            });
        </script>
        <div class="footerContent social">
            <h3>REDES SOCIALES</h3>

            <a class="fSocial" target="_blank" href="https://www.youtube.com/channel/UC48u8o3hOGklAiGDgP3bD0g">
                <span class="fa-youtube"></span>
            </a>

            <a class="fSocial" target="_blank" href="https://www.instagram.com/dale.zapatilla/">
                <span class="fa-instagram"></span>
            </a>
        </div>
    </div>
</footer>