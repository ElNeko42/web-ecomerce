<?
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$foto = $_POST["foto"];
?>

<!-- Creo los div dentro de cada span, donde meto los datos de los productos, y tres botones, para editar, borrar o añadir a la cesta el producto-->
<div id="" class="productosDiv2" style="text-align: center;">
        <div style="background-color: rgb(185, 181, 181); display:inline-block">
            <img src="<?= $foto ?>" width="100px"></img>
            <h5><?= $nombre ?></h5>
            <h5 style="color: red;font:bold;"><?= $precio ?>€</h5>
            <button type="button" class="pre-cesta" id="anade_cesta" style="margin-left: 70px;border-radius:4px;border-style:solid;background-color:white;" onclick="borrar_item('<?= $nombre ?>')">-</button>
        </div>
</div>