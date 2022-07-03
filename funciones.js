var cont_pro = [];
var pre = 0;

var preFinal = 0;
var contador = 0;
var fecha = new Date();
var nombre = "Log-in"

/* openNavButton = document.getElementById('top-bar');
nav = document.getElementById('nav');

openedNav = false;

openNavButton.addEventListener("click", () => {
    if (!openedNav) {
        nav.style.animation = "aparecer 1s forwards";
        openedNav = true;
    } else {
        nav.style.animation = "desaparecer 1s forwards";
        openedNav = false;
    }

}); */



// Ponemos nuestra configuración de Firestore
const firebaseConfig = {
    apiKey: "AIzaSyAreCWPKJRS7vdmxKXUol217OW9NYWx5o0",
    authDomain: "fben-c5dcc.firebaseapp.com",
    projectId: "fben-c5dcc",
    storageBucket: "fben-c5dcc.appspot.com",
    messagingSenderId: "730805522250",
    appId: "1:730805522250:web:b90ade1fb98ea585d9fbb3",
    measurementId: "G-Q51Z50J8Z1"
};
// Inicializamos Firestore
firebase.initializeApp(firebaseConfig);
var bd = firebase.firestore();

//Colecciones
var collectionResults = bd.collection("Tienda");

consulta_productos();

function consulta_productos() {
    $('#productos').empty();
    let consulta = collectionResults
        .get()
        .then(
            snapshot => {
                if (snapshot.empty) {
                    console.log("No se encontraron productos.");
                    return;
                }
                snapshot.forEach(doc => {
                    console.log(doc.id, "=>jaja", doc.data());
                    let datos = doc.data();
                    pon_productos(doc.id, datos);
                });
            }
        );
}

function pon_productos(id, producto) {
    $('#productos').append($('<span id="single-product"  style="float:left;height:350px">').load('productos.php', {
        id,
        producto
    }));
}

function consulta_productos2(name) {
    console.log("Nombre: " + name);
    $('#product').empty();
    let consulta = collectionResults.where('Nombre', '==', name)
        .get()
        .then(
            snapshot => {
                if (snapshot.empty) {
                    console.log("No se encontraron productos.");
                    return;
                }
                snapshot.forEach(doc => {
                    console.log(doc.id, "=>", doc.data());
                    let datos = doc.data();
                    pon_productos2(doc.id, datos);
                });
            }
        );
}

function pon_productos2(id, producto) {
    $('#product').append($('<span id="single-product"  style="float:left;height:350px">').load('productos2.php', {
        id,
        producto
    }));
}

function goTo() {
    let check1 = document.getElementById('#check-portatil');
    if (check1.checked) {
        $('#product').append($('<span id="single-product"  style="float:left;height:350px">').load('productos2.php', {
            id,
            producto
        }));
    }
}

function filtra(dato, id) {
    $('#productos').empty();
    let check1 = document.getElementById(id);
    if (check1.checked) {
        let consulta = collectionResults.where('tipo', '==', dato)
            .get()
            .then(
                snapshot => {
                    if (snapshot.empty) {
                        console.log("No se encontraron productos.");
                        return;
                    }
                    snapshot.forEach(doc => {
                        console.log(doc.id, "=>", doc.data());
                        let datos = doc.data();
                        pon_productos(doc.id, datos);
                    });
                }
            );
    } else {
        consulta_productos();
    }

}

function filtra2(dato, id) {
    $('#productos').empty();
    let check1 = document.getElementById(id);
    console.log(check1.id);

    if (check1.checked && check1.id == 'check-0') {
        let consulta_base = collectionResults.where('Precio', '>', 0).where('Precio', '<=', 500)
            .get()
            .then(
                snapshot => {
                    if (snapshot.empty) {
                        console.log("No se encontraron productos.");
                        return;
                    }
                    snapshot.forEach(doc => {
                        console.log(doc.id, "=>", doc.data());
                        let datos = doc.data();
                        pon_productos(doc.id, datos);
                    });
                }
            )
    }

    if (check1.checked && check1.id == 'check-500') {
        let consulta_base2 = collectionResults.where('Precio', '>', 500).where('Precio', '<=', 1000)
            .get()
            .then(
                snapshot => {
                    if (snapshot.empty) {
                        console.log("No se encontraron productos.");
                        return;
                    }
                    snapshot.forEach(doc => {
                        console.log(doc.id, "=>", doc.data());
                        let datos = doc.data();
                        pon_productos(doc.id, datos);
                    });
                }
            )
    }
    if (check1.checked && check1.id == 'check-1000') {
        let consulta_base3 = collectionResults.where('Precio', '>', 1000)
            .get()
            .then(
                snapshot => {
                    if (snapshot.empty) {
                        console.log("No se encontraron productos.");
                        return;
                    }
                    snapshot.forEach(doc => {
                        console.log(doc.id, "=>", doc.data());
                        let datos = doc.data();
                        pon_productos(doc.id, datos);
                    });
                }
            )
    }

    if (check1.checked == false) {
        consulta_productos();
    }
} //llave function

function redirect(name) {
    location.href = "http://localhost/TecnoPlanet/product_page.php";
    consulta_productos2(name);
}

function open_shop() {
    document.getElementById("shop").style.display = 'initial';
}

function close_shop() {
    document.getElementById("shop").style.display = 'none';
}

function addShop(nombre1, foto, precio, stock, id) {

    document.getElementById("precioTotal").style.display = 'initial';
    document.getElementById("envia_ticket").style.display = 'initial';

    nombre = nombre1.replace(/\s/g, "_");

    if ($("#cont_" + nombre) != null) {
        cont_pro[nombre] = $("#cont_" + nombre).val();
    }

    if (typeof cont_pro[nombre] == 'undefined') {
        cont_pro[nombre] = 1;
        $('#formu').append("<div id='F_" + nombre + "'>");
        $('#F_' + nombre).append("<input type='text' id='S_" + nombre + "' name='S_" + nombre + "' value='" + nombre1 + "' class='nombre_cesta' readonly/>");
        $('#F_' + nombre).append("<input type='text' id='cont_" + nombre + "' name='cont_" + nombre + "' value='" + cont_pro[nombre] + " uds' class='num' readonly/>");
        $('#F_' + nombre).append("<input type='text' id='pre_" + nombre + "' name='pre_" + nombre + "' value='" + precio + "' class='num' readonly/>€");
        $('#F_' + nombre).append("<button type='button' id='M_" + nombre + "'onclick='resta(\"" + nombre + "\")' class='peque' readonly> - </button>");
        $('#F_' + nombre).append("<button type='button' id='B_" + nombre + "'onclick='borrar(\"" + nombre + "\")' class='peque' readonly> x </button>");
        $('#F_' + nombre).append("</br");
    } else {
        cont_pro[nombre]++;
    }

    $("#cont_" + nombre).val(cont_pro[nombre]);

    pre = parseFloat(pre) + parseFloat($("#pre_" + nombre).val());
    pre = pre.toFixed(2);

    $("#precioTotal").val(pre);
}

function envia_formu() {
    $("#formu").submit();
}

//resto en 1 la cantidad del producto en el ticket
function resta(obj) {
    var cantidad = $('#cont_' + obj).val();
    //alert("..." + cantidad);
    cantidad = cantidad - 1;
    $('#cont_' + obj).val(cantidad);
    //bajamos el precio
    pre = parseFloat(pre) - parseFloat($("#pre_" + obj).val());
    pre = pre.toFixed(2);

    $("#precioTotal").val(pre);

    if (parseFloat($("#cont_" + obj).val()) == 0) {
        $('#F_' + obj).remove();
        cont_ser[obj] = undefined;
    }
}

//borro un producto del ticket
function borrar(obj) {
    var cantidad = parseFloat($('#cont_' + obj).val());
    var preParcial = parseFloat($('#pre_' + obj).val());

    pre = parseFloat(pre) - cantidad * preParcial;
    pre = pre.toFixed(2);

    $("#precioTotal").val(pre);
    $('#F_' + obj).remove();
    cont_ser[obj] = undefined;
}

function borrar_item(name) {
    $('#cesta_product' + name).remove();
}

function cargaPDF() {
    $('#productos').load('creaPDF.php', {

    });
}

function abrePDF() {
    location.assign('creaPDF.php');
    document.getElementById('formuPDF').submit();
}

function meteDatos(producto, precioTotal) {
    colleccionResultados2.add({
        Productos: JSON.parse(producto),
        Fecha: fecha.toLocaleDateString("zh-Hans-CN"),
        PrecioTotal: precioTotal
    });
}

function enviado_contacto() {
    alert("Su mensaje ha sido enviado");
}