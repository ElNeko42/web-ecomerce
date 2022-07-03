<html>
<!-- Página donde se encuentran todos los productos -->

<head>
    <title>TecnoPlanet</title>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-messaging.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="tienda.css">
</head>

<body>
    <header>
        <div id="top-bar">
            <div class="fas fa-bars"></div>
        </div>
        <!-- <nav id="nav">
            <li id="icono"><i class="fas fa-globe"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/index.php">TecnoPlanet</a></li>
            <li><i class="fas fa-laptop"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php">Productos</a></li>
            <li><i class="fas fa-user"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/about.php">About us</a></li>
            <li><i class="fas fa-envelope"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/contacto.php">Contact</a></li>
            <li><a class="fas fa-shopping-cart" onclick="open_shop()"></a></li>
        </nav> -->
        <nav id="nav">
            <li id="icono"><i class="fas fa-globe"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/index.php">TecnoPlanet</a></li>
            <li><i class="fas fa-laptop"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php">Productos</a></li>
            <li><i class="fas fa-users"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/about.php">About us</a></li>
            <li><i class="fas fa-envelope"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/contacto.php">Contact</a></li>
            <li><a class="fas fa-shopping-cart" onclick="open_shop()"></a></li>
        </nav>
    </header>
    <div id="page-content">
        <div id="filter">
            <h3 style="text-decoration: underline;">Filtrar</h3>
            <div id="checkbox">
                <h4>Tipo de producto</h4>
                <input type="checkbox" id="check-portatil" onclick="filtra('portatil',this.id)">Portátiles</input><br>
                <input type="checkbox" id="check-accesorio" onclick="filtra('accesorio',this.id)">Accesorios</input>
            </div>
            <div id="price">
                <h4>Precio del producto</h4>
                <input type="checkbox" id="check-0" onclick="filtra2('portatil',this.id)">0€-500€</input><br>
                <input type="checkbox" id="check-500" onclick="filtra2('precio',this.id)">500€-1000€</input><br>
                <input type="checkbox" id="check-1000" onclick="filtra2('accesorio',this.id)">+1000€</input>
            </div>
        </div>
        <div id="productos"></div>
        <div id="shop" style="display: none;">
            <a class="fas fa-window-close" style="position: relative; float:right;" onclick="close_shop()"></a>
            <h2>Resumen del pedido</h2>
            <form method="post" action="ticket.php" id="formu">
            </form>
            <input type="text" id="precioTotal" name="precioTotal" class="num" style="display: none;">€</input><br><br>
            <button type="submit" id="envia_ticket" style="display: none; border-radius:6px; border-style:solid" onclick="envia_formu()">Comprar</button>
        </div>
    </div>

</body>
<script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
<script src="funciones.js"></script>

</html>