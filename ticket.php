<html>
<head>
    <title>TecnoPlanet</title>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-messaging.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/62ea397d3a.js"></script>
    <script src="funciones.js"></script>
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
        </nav> -->
        <nav id="nav">
            <li id="icono"><i class="fas fa-globe"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/index.php">TecnoPlanet</a></li>
            <li><i class="fas fa-laptop"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/page.php">Productos</a></li>
            <li><i class="fas fa-user"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/about.php">About us</a></li>
            <li><i class="fas fa-envelope"></i><a href="http://www.icastro.colexio-karbo.com/2021-2022/Xestion/ev2/TecnoPlanet/contacto.php">Contact</a></li>
        </nav>
    </header>

    <h2 id="titulo">Resumen de su pedido</h2>

    <?

    ?><form action="creaPDF.php" method="POST" id="formuPDF">
        <table id="tablaFactura">
        <tr>
            <td>Producto</td>
            <td>Cantidad</td>
            <td>Precio</td>
        </tr>
        <?
        $i = 0;
        $importe = 1;
        $precio = 0;
        $j = 0;
        foreach ($_POST as $value) {
            if ($value != "") {
                if ($i % 3 == 0) {
                    $producto[$j] = $value;
                }
                if ($i % 3 == 1) {
                    $precios[$j] = $value;
                }
                if ($i % 3 == 2) {
                    $cant[$j] = $value;
                    $j++;
                }
                if ($i % 3 == 0) {
                    ?><tr><? $importe = 1;
                }
                if ($i % 3 == 0 && $i > 0) { 
                    ?></tr><? 
                }
                $i++;
            } //llave if
        } //llave del foreach
        for ($j = 0; $j < count($producto); $j++) {
            //$precio = $precio + ($precios[$j] * $cant[$j]);
            $precio+=$precios[$j]*$cant[$j];
            $json[$j] = array("Nombre" => $producto[$j], "Precio" => $precios[$j], "Cantidad" => $cant[$j]);
            $iva = $precio * 0.21;
            ?>
                <tr class="TR">
                    <td class="TR"><input type="text" id="NS<?=$j?>" name="NS<?=$j?>" value="<?=$producto[$j]?>"/></td>
                    <td class="TR"><input type="number" id="PS<?=$j?>" name="PS<?=$j?>" value="<?=$precios[$j]?>"/></td>
                    <td class="TR"><input type="text" id="CS<?=$j?>" name="CS<?=$j?>" value="<?=$cant[$j]?>"/></td>
                </tr>
                    <?
        }//llave del for
        ?>
        <tr>
            <td>Precio Total(+iva) = </td>
            <td class="TR" colspan="3"><input type="text" id="PT<?=$j?>" name="PT<?=$j?>" value="<?=$precio + $iva?>"/></td>
        </tr>
    </table>
    <button type="submit" style="border-radius: 4px;border-style:solid;background-color:black;color:white;margin-left:560px;margin-top:50px" onclick="abrePDF()">Generar Ticket PDF</button>
    </form>
    
    <?
    ?>

    <script>
        <? $preTot = $precio + $iva ?>
        var algo = '<?php echo json_encode($json); ?>'
        meteDatos(algo, <?= $preTot ?>);
    </script>
    <!-- <button type="button" id="verTickets" onclick='meteDatos(algo)'>Meter Ticket</button> -->
</body>

</html>