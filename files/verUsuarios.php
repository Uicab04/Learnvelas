<?php
include("../clases/Funciones.php");

$funciones = new Funciones();

$usuarios = $funciones->obtenerUsuariosNormales();
$numUsuarios = $usuarios->rowCount();
?>

<style>
    .card {
        position: relative;
        background-image: url('images/fondomadera/2.jpg'); /* Fondo de madera */
        background-color: #8b7351; /* Color más claro para la madera */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
        border: 1px solid rgba(0, 0, 0, 0.1); /* Borde */
        overflow: hidden; /* Oculta el desbordamiento de los bordes redondeados */
        margin: 0 10px 20px 10px; /* Margen para separar las tarjetas */
    }

    .card-header {
        background-color: rgba(255, 255, 255, 0.5); /* Fondo semitransparente para el encabezado */
        padding: 15px; /* Espaciado interno del encabezado */
        border-bottom: 1px solid #dee2e6; /* Borde inferior */
        display: flex; /* Establece un contenedor flexible para alinear elementos */
        align-items: center; /* Alinea elementos verticalmente */
    }

    .card-body {
        padding: 15px; /* Espaciado interno del cuerpo */
    }

    .img-profile {
        margin-right: 10px; /* Margen derecho para separar la imagen del texto */
    }

    .close2 {
        position: absolute;
        top: 70px;
        right: 10px;
        font-size: 24px;
        color: #fff;
        cursor: pointer;
        z-index: 1;
        
        background-color: #000;
        padding: 2px;
    }
</style>

<div class="row">
<div class="close2" id="closeButton">&times;</div>
<!-- Close Button for All Cards -->
    <?php foreach($usuarios as $usu): ?>
        <div class="card shadow">
            <!-- Card Header -->
            <div class="card-header">
                <img class="img-profile rounded-circle" src="images/OIP.jpg" width="50" height="50" href="menu.php">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $usu["nombre"]." ".$usu["apellidos"]; ?></h6>
                <div class="dropdown-item">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Opciones</div>
                        <a class="dropdown-item" href="javascript:eliminandoUsuario(<?php echo $usu["id"]; ?>)">Eliminar Usuario</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                Fecha de registro: <?php echo $usu["fechaRegistro"];?>
            </div>
            
        </div>
    <?php endforeach; ?>
</div>
<hr class="sidebar-divider" style="display: none;">
        <div class="row" id="informacion">
          <div id="informacion"></div>
        </div>
<script>
document.querySelector('#closeButton').addEventListener('click', cerrarTodasLasPestanas);

function cerrarTodasLasPestanas() {
    var cards = document.querySelectorAll('.card');
    cards.forEach(function(card) {
        card.parentNode.removeChild(card);
    });
    // Ocultar el botón de cierre
    document.querySelector('#closeButton').style.display = 'none';
}
</script>

