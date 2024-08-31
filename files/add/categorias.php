


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
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Añadir nueva categoria</font></font></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row justify-content-center">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <h4 class="mb-3 header-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulario para agregar categoría</font></font></h4>

                <form id="uploadForm" class="required-form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Código de categoría</font></font></label>
                        <input type="text" class="form-control" id="code" name="code" value="" readonly="">
                    </div>

                

                    <div class="form-group">
                        <label for="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título de la categoría </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                        <input type="text" class="form-control" id="name" name="name" required="">
                    </div>


                   
                    
                    
                    <!--  

                    -->

                    


                    <div class="form-group row mb-3">
                        
                        <label class="col-md-2 col-form-label" for="sub_category_id">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Si no se elije categoria sera categoria padre</font>
                                <br>
                                <font style="vertical-align: inherit;">Categoría </font>

                            </font>
                            <span class="required">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">*</font>
                                </font>
                            </span>
                        </label>
                        <div class="col-md-10">
                            <?php
                            $db = new Conexion();
                            $menu = $db->query("SELECT * FROM category WHERE parent = 0"); // Solo categorías principales

                            // Verificar si se encontraron categorías
                            if ($menu->rowCount() > 0) {
                                echo '<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="sub_category_id" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">';
                                echo '<option value="" data-select2-id="2">';
                                echo '<font style="vertical-align: inherit;">';
                                echo '<font style="vertical-align: inherit;">Seleccione una categoría</font>';
                                echo '</font>';
                                echo '</option>';
                                
                                // Imprimir las categorías principales
                                while ($row = $menu->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                                }
                                
                                echo '</select>';
                            } else {
                                // Si no se encontraron categorías, mostrar una opción predeterminada
                                echo '<select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="sub_category_id" id="sub_category_id" required="" data-select2-id="sub_category_id" tabindex="-1" aria-hidden="true">';
                                echo '<option value="0">Sin categoría</option>'; // Opción predeterminada
                                echo '</select>';
                            }
                            ?>
                        </div>
                    </div>









                    <!-- 

                     -->
                    <!-- <div class="form-group" id="thumbnail-picker-area">
                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Miniatura de categoría </font></font><small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(el tamaño de la imagen debe ser: 400 X 255)</font></font></small> </label>
                        <div class="input-group">
                            <div class="custom-file"> -->
                                <!-- <input type="file" class="custom-file-input" id="category_thumbnail" name="category_thumbnail" accept="image/*" onchange="changeTitleOfImageUploader(this)"> -->

                                <!-- <input type="file" class="custom-file-input" id="category_thumbnail" name="category_thumbnail" accept="image/*">
                                <label class="custom-file-label" for="category_thumbnail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elija miniatura</font></font></label>
                            </div>
                        </div>
                    </div>
                    -->

                    <button type="button" class="btn btn-primary" onclick="checkRequiredFields()" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entregar</font></font></button>
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

                <input type="button" value="Enviar" onclick="submitForm3()" class="btn btn-primary btn-user btn-block">
                <hr>
                <script>
                function submitForm3() {
                    // Obtener datos del formulario
                    const formData = new FormData(document.getElementById("form3"));

                    // Enviar el formulario de forma asíncrona
                    fetch('upload_imagenes.php', {
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
                        checkRequiredFields(data); 
                        // Aquí pasamos el nombre del archivo como argumento
                        // console.log('Nombre del archivo de imagen cargado:', data);
                        
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }

                </script>


                <hr class="sidebar-divider" style="display: none;">
                <div class="row" id="registrandoCategoria">
                <div id="registrandoCategoria"></div>
                </div>


              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

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
<script src="../../scripts/validacionCategorias.js"></script>
<script src="../../alertifyjs/alertify.min.js"></script>



</body>
</html>