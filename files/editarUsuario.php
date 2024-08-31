<?php
$idUsuario = $_POST["idUsuario"];

include("../clases/Usuario.php");

$usuario = new Usuario($idUsuario);
?>
<style>
.card {
    position: relative;
    background-image: url('images/fondomadera/2.jpg');
    background-color: #F5F5DC; /* Beige */
    background-size: cover;
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra con opacidad reducida */
    border: 1px solid rgba(0, 0, 0, 0.1); /* Borde con opacidad reducida */
    border-left: 1px solid rgba(0, 0, 0, 0.1); /* Borde izquierdo con opacidad reducida */
    border-right: 1px solid rgba(0, 0, 0, 0.1); /* Borde derecho con opacidad reducida */
    overflow: hidden; /* Oculta el desbordamiento de los bordes redondeados */
}

.card::before,
.card::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 50%;
    background: rgba(0, 0, 0, 0.2); /* Color blanco semitransparente para simular el brillo */
    filter: blur(3px); /* Aplicar un filtro de desenfoque para simular el brillo del barniz */
    pointer-events: none; /* Evita que los pseudoelementos interfieran con los eventos del mouse */
}

.card::before {
    left: 0;
}

.card::after {
    right: 0;
}


.card-body {
    position: relative; /* Para que los elementos posicionados absolutamente estén relativos a este contenedor */
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

.close1 {
    position: absolute;
    top: 10px;
    right: 50px;
    font-size: 24px;
    
    cursor: pointer;
    z-index: 1;
    
    color: #fff;
    
 
        
    background-color: #000;
    padding: 2px;
}

</style>









<div class="card o-hidden border-0 shadow-lg my-5">
<div class="overlay"></div> <!-- Superposición semitransparente -->
<div class="close1" onclick="cerrarPestana()">&times;</div> <!-- X para cerrar la pestaña -->
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        <img class="img-profile rounded-circle"
			src=""  
			width="200" height="200" href="menu.php">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Editando Usuario</h1>
                    </div>
                    <form class="user" name="registroUsuario">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <h4 class="h4 text-gray-900 mb-4">Nombre:</h4>

                                <input type="text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $usuario->nombre; ?>">
                            </div>
                            <div class="col-sm-6">
                            <h4 class="h4 text-gray-900 mb-4">Apellidos:</h4>

                                <input type="text" class="form-control form-control-user" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo $usuario->apellidos; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <h4 class="h4 text-gray-900 mb-4">Email:</h4>

                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Correo electrónico" value="<?php echo $usuario->email; ?>">
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" id="password1" placeholder="Contraseña">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" id="password2" placeholder="Repetir contraseña">
                            </div>
                        </div> -->
                        <input type="button" value="Actualizar Información" onclick="guardarEdicionUsuario(<?php echo $idUsuario; ?>)" class="btn btn-primary btn-user btn-block">
                        <hr>
                    </form>
                    <div id="registrando"></div>
                    <hr>
                    <!-- <div class="text-center">
                        <a class="small" href="forgot-password.html">¿Olvidaste tu contraseña?</a>
                    </div> -->
                    <!-- <div class="text-center">
                        <a class="small" href="login.html">¿Ya tienes una cuenta? Inicia sesión!</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function cerrarPestana() {
    var card = document.querySelector('.card');
    card.parentNode.removeChild(card); // Elimina la tarjeta del DOM al hacer clic en la X
}


</script>