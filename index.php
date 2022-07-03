<html>
<!-- Página principal que te encuentras al entrar a la web -->

<head>
    <title>TecnoPlanet</title>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-messaging.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="tienda.css">
</head>

<body onload="pon_nombre()">
    <header>
        <div id="top-bar">
            <div class="fas fa-bars"></div>
        </div>
        <!-- <nav id="nav">
            <li id="icono"><i class="fas fa-globe"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/index.php">TecnoPlanet</a></li>
            <li><i class="fas fa-laptop"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php">Productos</a></li>
            <li><i class="fas fa-user"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/about.php">About us</a></li>
            <li><i class="fas fa-envelope"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/contacto.php">Contact</a></li>
        </nav> -->
        <nav id="nav">
            <li id="icono"><i class="fas fa-globe"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/index.php">TecnoPlanet</a></li>
            <li class="listaLI"><i class="fas fa-laptop"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/login.php">Productos</a></li>
            <li><i class="fas fa-user"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/about.php">About us</a></li>
            <li><i class="fas fa-envelope"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/contacto.php">Contact</a></li>
        </nav>
    </header>
    <div id="first-section">
        <h2 id="titulo">DESCUBRE NUESTROS PRODUCTOS</h2>
        <div id="first">
            <img class="images" id="portatiles" src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/refurb-macbook-air-silver-m1-202010?wid=1144&hei=1144&fmt=jpeg&qlt=80&.v=1634145618000">
            <div id="first-second">
                <h2>Portátiles</h2>
                <h4 id="portatil-text">Descubre nuestro gran catálogo de portátiles, donde podrás encontrar desde lo más potente de la actualidad hasta aquel producto para el uso diario de un usuario normal y corriente.</h5>
                    <a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php" id="saber-mas-1">Saber más</a>
            </div>
        </div>
        <div id="second">
            <div id="first-second">
                <h2>Accesorios</h2>
                <h4 id="portatil-text">Toda una variedad de accesorios para completar tu set-up. Encuentra desde cascos inalámbricos hasta los mejores ratones del mercado.</h5>
                    <a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php" id="saber-mas-1">Saber más</a>
            </div>
            <img class="images" id="accesorios" src="https://static.carrefour.es/hd_510x_/crs/cdn_static/catalog/hd/849120_00_1.jpg">
        </div>
    </div>
</body>
<script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
<script src="funciones.js"></script>

</html>