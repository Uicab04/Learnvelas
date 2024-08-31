


<?php

include("../../clases/Conexion.php");
include("../../files/iniciarSesion.php");
include("../../clases/Usuario.php");
include("../../clases/Funciones.php");

$funciones = new Funciones();

if(isset($_COOKIE["cDash"])){

    $hash = $_COOKIE["cDash"];

    $idUsuario = $funciones->obtenerIdUsuario($hash);

    if($idUsuario !=0 ){
        $usuario = new Usuario($idUsuario);
    }
    else{
        Header ("Location: login.html");
        exit;
    }
}
if(isset($_SESSION['usuario_id'])){
    $idUsuario = $_SESSION['usuario_id'];
    $usuario = new Usuario($idUsuario);
}

//2222

$db = new Conexion();
// $menu = $db->query("SELECT * FROM course");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../../alertifyjs/css/alertify.css" rel="stylesheet">
    <link href="../../alertifyjs/css/themes/default.css" rel="stylesheet">
    <link rel="../../stylesheet" href="../css/style.css">
    <style>
        /* Estilos generales */
.content-page {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    border-radius: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-body {
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    border-radius: 10px;
}

.btn-primary {
    border-radius: 10px;
}

/* Estilos para pantallas pequeñas */
@media (max-width: 576px) {
    .col-xl-7 {
        max-width: 90%;
    }
}

/* Estilos para pantallas medianas */
@media (min-width: 576px) and (max-width: 992px) {
    .col-xl-7 {
        max-width: 70%;
    }
}

/* Estilos para pantallas grandes */
@media (min-width: 992px) {
    .col-xl-7 {
        max-width: 50%;
    }
}






.btn-group .btn {
  margin-left: 5px; /* Espacio entre botones */
}

.btn i {
  margin-right: 5px; /* Espacio entre ícono y texto */
}
body {
  background-image: url("fondo.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

    
    </style>
               
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

     <script>
        window.onload = function() {
            // Generar código de categoría aleatorio
            var randomCode = generateRandomCode();
            
            // Asignar código generado al campo de entrada
            document.getElementById("code").value = randomCode;
        }

        function generateRandomCode() {
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var length = 10;
            var randomCode = '';

            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                randomCode += characters.charAt(randomIndex);
            }

            return randomCode;
        }
    </script>
    



</head>
<body>
<script>
                function submitForm4() {
                    // Obtener datos del formulario
                    const formData = new FormData(document.getElementById("form3"));

                    // Enviar el formulario de forma asíncrona
                    fetch('../../files/add/upload_imagenes.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                            return response.text();
                        }
                        throw new Error('Error en la respuesta del servidor');
                    })
                    .then(data => {
                        // Llamada a la función checkRequiredFields con el nombre del archivo de imagen cargado
                        enviarDatosPresentacion(data); 
                        // Aquí pasamos el nombre del archivo como argumento
                        // console.log('Nombre del archivo de imagen cargado:', data);
                        
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }

                </script>
<div class="untree_co-hero overlay" style="background-image: url('../../LOGOS/bc2.webp');">

         <!-- PAGE CONTAINER-->
         <div class="content-page">
            
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <!-- start page title -->
                    <h4 class="header-title mb-3">
  
  <div class="btn-group">
    <a href="../../index.php" class="btn btn-primary">
      <i class="mdi mdi-home"></i> Inicio
    </a>
    <a href="add_couses.php" class="btn btn-secondary">
      <i class="mdi mdi-view-grid"></i> Añadir videos
    </a>
    <a href="../../CURSOS_todos.php" class="btn btn-success">
      <i class="mdi mdi-book-open-page-variant"></i> Ver cursos
    </a>
  </div>
</h4>
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Añadir nueva presentación</font></font></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row justify-content-center">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <h4 class="mb-3 header-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario para agregar presentación</font></font></h4>

                <form id="cursoForm" class="required-form" action="procesar_curso.php" method="post">
                    <div class="form-group">
                        <label for="titulo">Título del curso</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción del curso</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="objetivos">Objetivos del curso</label>
                        <textarea class="form-control" id="objetivos" name="objetivos" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="link">Enlace del curso</label>
                        <input type="text" class="form-control" id="link" name="link" required>
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="enviarDatosPresentacion()" style="display: none;">Agregar Curso</button>
                </form>

                <form id="form3" action="upload_imagenes.php" method="post" enctype="multipart/form-data">
                    <!-- Contenido del formulario 3 -->
                    <div class="form-group" id="thumbnail-picker-area">
                        <label>Miniatura de categoría <small>(el tamaño de la imagen debe ser: 400 X 255)</small></label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="category_thumbnail" name="category_thumbnail" accept="image/*">
                                <label class="custom-file-label" for="category_thumbnail">Elija miniatura</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Cargar Imagen" name="uploadButton" style="display: none;"> <!-- Ocultar el botón de envío -->
                </form>

                <input type="button" value="Enviar" onclick="submitForm4()" class="btn btn-primary btn-user btn-block">
                <hr>



                <hr class="sidebar-divider" style="display: none;">
                <div class="row" id="agregandoPresentaciones">
                <div id="agregandoPresentaciones"></div>
                </div>


              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>




<?php
          $sql2 = "SELECT * FROM presentaciones"; // "WHERE", no "WERE"

          $result2 = $db->query($sql2);
          ?>
         
         <div class="container-fluid">
         <div class="row">
    <div class="col-lg-9">
        <!-- Contenido principal de tu página -->
    </div>
    <div class="col-lg-3">
        <!-- Lista de presentaciones cursos -->
        <?php
        $sql2 = "SELECT * FROM presentaciones"; // "WHERE", no "WERE"
        $result2 = $db->query($sql2);
        ?>
        <div class="card2 p-3">
            <h2 class="line-bottom text-center mb-4">Presentaciones cursos</h2>
            <ul class="list-group">
                <?php foreach($result2 as $m): ?> 
                <div class="dropdown-item">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Opciones</div>
                            <a class="dropdown-item eliminar-usuario" href="javascript:eliminandoUsuario(<?php echo $usu["id"]; ?>)">Eliminar Usuario</a>
                        </div>
                    </div>
                    <li class="list-group-item mb-2">

                    <a href="../../presentacion.php?link=<?php echo $m["link"]; ?>">
                        <h3><?php echo $m["titulo"]; ?></h3>
                        <span>courses</span>
                    </a>
                </li>
                
                <?php endforeach; ?> 
            </ul>
        </div>
    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencias a todos los menús desplegables
    var dropdownMenus = document.querySelectorAll('.dropdown-menu');

    // Iterar sobre cada menú desplegable
    dropdownMenus.forEach(function(dropdownMenu) {
        // Agregar evento para cuando se muestre el menú desplegable
        dropdownMenu.addEventListener('show.bs.dropdown', function() {
            // Obtener el enlace "Eliminar Usuario" dentro de este menú desplegable
            var eliminarUsuarioLink = dropdownMenu.querySelector('.eliminar-usuario');
            // Mostrar el enlace "Eliminar Usuario"
            if (eliminarUsuarioLink) {
                eliminarUsuarioLink.style.display = 'block';
            }
        });

        // Agregar evento para cuando se oculte el menú desplegable
        dropdownMenu.addEventListener('hide.bs.dropdown', function() {
            // Obtener el enlace "Eliminar Usuario" dentro de este menú desplegable
            var eliminarUsuarioLink = dropdownMenu.querySelector('.eliminar-usuario');
            // Ocultar el enlace "Eliminar Usuario"
            if (eliminarUsuarioLink) {
                eliminarUsuarioLink.style.display = 'none';
            }
        });
    });
});


</script>


<style>
  .dropdown-item {
    position: relative;
}

.dropdown-toggle {
    text-decoration: none;
    color: inherit;
}

.dropdown-menu {
    min-width: 10rem;
}

.dropdown-header {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    color: #858796;
    text-transform: uppercase;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #000;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.dropdown-item:hover,
.dropdown-item:focus {
    color: #000;
    text-decoration: none;
    background-color: rgba(0, 0, 0, 0.1);
}
 

.card2 {
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.0001);
    position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        /* background: linear-gradient(to bottom, #7b6c49, rgba(146, 134, 101, 0.152)); */
        /* Degradado entre cafés */
        color: #fff;
        /* Color del texto */
        width: 150px;
        /* Ancho del menú reducido */
        min-height: 200px;
        /* Altura mínima para el menú */
        padding: 20px;
        /* Espaciado interno */
        z-index: 1000;
        /* Asegurar que esté por encima de otros elementos */
        overflow-y: auto;
        /* Permitir desplazamiento vertical */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Sombra */
        transition: width 0.3s;
        /* Agrega una transición suave para cambios de tamaño */
}

.list-group {
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.list-group-item {
    background-color: rgba(255, 255, 255, 0.6);
}

.list-group-item:hover {
    background-color: rgba(255, 255, 255, 1);
}    

 
</style>

<script type="text/javascript">
    function checkCategoryType(category_type) {
        if (category_type > 0) {
            $('#thumbnail-picker-area').hide();
            $('#icon-picker-area').hide();
        }else {
            $('#thumbnail-picker-area').show();
            $('#icon-picker-area').show();
        }
    }
</script>


<script src="../../scripts/ajaxU.js"></script>
<script src="../../scripts/validacionPresentaciones.js"></script>
<script src="../../alertifyjs/alertify.min.js"></script>



</body>
</html>