<!-- Clase a la que llamo para crear los divs con cada producto -->
<?
$nombre = $_POST["producto"]["Nombre"];
$precio = $_POST["producto"]["Precio"];
$descripcion = $_POST["producto"]["Descripcion"];
$id = $_POST["id"];
$foto = $_POST["producto"]["Foto"];
$stock = $_POST["producto"]["stock"];
?>
<script>
    var algo = '<?php echo json_encode($nombre); ?>';
    var algo2 = "hola";
</script>
<!-- Creo los div dentro de cada span, donde meto los datos de los productos, y tres botones, para editar, borrar o añadir a la cesta el producto-->
<div id="<?= $_POST["id"] ?>" class="productosDiv" style="text-align: left;">
    <div>
        <div style="background-color: rgb(185, 181, 181);">
            <img src="<?= $foto?>" height="250" onclick="redirect(<?php $nombre ?>)">
        </div>

        <h5 id="name"><?= $nombre ?></h5>
        <div>
                <h5 class="pre-cesta" style="color: red;font:bold;width:fit-content"><?= $precio ?>€</h5>
                <button type="button" class="pre-cesta" id="anade_cesta" style="margin-left: 70px;border-radius:4px;border-style:solid;background-color:white;" onclick="addShop('<?=$nombre?>','<?=$foto?>','<?=$precio?>','<?=$stock?>',<?=$id?>)">Añadir a la cesta</button>
        </div>
    </div>
</div>