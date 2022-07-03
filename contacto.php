<html>

<head>
    <title>TecnoPlanet-Contacto</title>
    <link rel="stylesheet" href="formStyle.css">
    <script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
    <script src="funciones.js"></script>
</head>
<body>
    <div class="form-container">
        <h2><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php" class="fas fa-arrow-left" id="back"></a>CONTACTO</h2>
        <form action="" method="POST">
            <div class="user-form">
                <div class="user-data">
                    <div class="form-input">
                        Nombre Completo
                        <input id="nombre_contacto" type="text" placeholder="Nombre y Apellido">
                    </div>
                    <div class="form-input">
                        Email
                        <input id="email_contacto" type="email" placeholder="Email de contacto">
                    </div>
                    <div class="form-input">
                        Número
                        <input id="num_contacto" type="number" placeholder="Número de teléfono">
                    </div>
                </div>
                <div class="user-msg">
                    <div class="form-textarea">
                        Mensaje
                        <textarea placeholder="Déjanos tu mensaje"></textarea>
                    </div>
                </div>
            </div>
            <div class="user-accept">
                <div class="form-checkbox">
                    <input type="checkbox">Quiero recibir notificaciones de <b>TecnoPlanet</b>
                </div>
                <div class="form-submit">
                    <button type="submit" id="enviar_contacto" onclick="enviado_contacto()" style="border-radius: 5px;width:100px;border-style:solid;font-size:15px">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>