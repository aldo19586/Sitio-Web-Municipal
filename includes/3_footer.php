<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span5">
                <h3>Contacto</h3>
                <div>
                    <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
                        <div id="ajaxsuccess">El correo electrónico fue enviado con éxito.</div>
                        <div class="error" id="err-name">Porfavor ingrese su nombre</div>
                        <input name="name" id="name" type="text" value="Nombre" onfocus="if (this.value == 'Name')
                                    this.value = '';" onblur="if (this.value == '')
                                                this.value = 'Name';">

                        <div class="error" id="err-email">Por favor ingrese el correo electrónico</div>
                        <div class="error" id="err-emailvld">El correo electrónico no es un formato válido</div>
                        <input name="email" id="email" type="text" value="E-mail" onfocus="if (this.value == 'E-mail')
                                    this.value = '';" onblur="if (this.value == '')
                                                this.value = 'E-mail';">

                        <div class="error" id="err-message">Por favor ingrese el mensaje</div>
                        <textarea name="message" id="message" onfocus="if (this.value == 'Message')
                                    this.value = '';" onblur="if (this.value == '')
                                                this.value = 'Message';">Mensaje</textarea><br>
                        <div>
                            <div class="error" id="err-form">Hubo un problema al validar el formulario por favor revise!
                            </div>
                            <div class="error" id="err-timedout">¡La conexión al servidor expiró!</div>
                            <div class="error" id="err-state"></div>
                        </div>
                        <button id="send" class="btn f-right">Enviar Mensaje <i class="icon-ok"></i></button>
                    </form>
                </div>
            </div>
            <div class="span3 offset3">
                <h3>Palacio Municipal</h3>
                Jirón Ramon Zavala N°500<br>
                Barranca, C.P. 15169<br>
                Lima - Perú<br>
                <br>
                <i class="icon-phone"></i>(01) 2359621<br>
                <i class="icon-envelope"></i>imagenbarranca2019@gmail<br>
                <i class="icon-home"></i><a
                    href="https://www.gob.pe/munibarranca?fbclid=IwAR141juStBhwKwGlzOKyh3lpaqxtklxVw9oC7rsDp684KZ8LS3bAhyet8ok">Info
                    Gobierno</a>

                <div class="row space40"></div>

                <a href="https://www.facebook.com/MuniBarrancaOficial/" class="social-network sn2 facebook"></a>
                <a href="https://twitter.com/Muni_Barranca" class="social-network sn2 twitter"></a>
                <a href="https://www.youtube.com/channel/UCtT3z6a4xJy2XCSZqHZ1jOg"
                    class="social-network sn2 youtube"></a>
                <a href="https://www.instagram.com/munibarranca/" class="social-network sn2 pinterest"></a>

            </div>
        </div>

        <div class="row space50"></div>
        <div class="row">
            <div class="span6">
                <div class="logo-footer">
                    Diseñado por Aldo Solis</a>
                </div>
            </div>
            <div class="span6 right">
                &copy; 2022. Todos los derechos reservados.
            </div>
        </div>

    </div>
</footer>
<!-- Footer End -->

<!-- JavaScripts -->
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" defer src="js/jquery.flexslider.js"></script>