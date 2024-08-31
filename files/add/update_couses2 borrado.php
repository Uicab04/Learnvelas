<?php
include("../../clases/Conexion.php");


$db = new Conexion();


// Verifica si se proporcionó el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Obtiene el valor del parámetro 'id'
    $idCurso = $_GET['id'];
    
    // Utiliza el ID del curso como necesites
    echo "ID del curso: " . $idCurso;
} else {
    // Si no se proporcionó el parámetro 'id', muestra un mensaje de error o redirige a otra página
    echo "Error: No se proporcionó el ID del curso.";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="../../alertifyjs/css/alertify.css" rel="stylesheet">

</head>
<body>
    
<style>

    .add-courses-section2 {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .add-courses-section2 h4.header-title {
        margin-bottom: 15px;
    }

    .add-courses-section3 tr th,
    .add-courses-section3 tr td {
        padding: 8px;
    }


    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-menu.show {
        display: block;
        background-color: #f8f9fa; /* Color de fondo cuando se muestra */
    }


    /* GGGGGGGGGGGGGG */
    .add-courses-section {
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

    .add-courses-section::before {
        left: 0;
    }

    .add-courses-section::after {
        right: 0;
    }


    .add-courses-section {
        position: relative; /* Para que los elementos posicionados absolutamente estén relativos a este contenedor */
    }



    .add-courses-section {
        padding: 15px; /* Espaciado interno del cuerpo */
    }


    .add-courses-section {
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 30px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    /*  */
    /*  */
    /*  */

    .add-courses-section2 {
        position: relative;
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra con opacidad reducida */
        border: 1px solid rgba(0, 0, 0, 0.1); /* Borde con opacidad reducida */
        border-left: 1px solid rgba(0, 0, 0, 0.1); /* Borde izquierdo con opacidad reducida */
        border-right: 1px solid rgba(0, 0, 0, 0.1); /* Borde derecho con opacidad reducida */
        background-image: url('images/fondomadera/2.jpg'); /* Ruta de la imagen de fondo */
        background-size: cover; /* Escalar la imagen para que cubra todo el contenedor */
        margin-bottom: 20px; /* Ajustar el margen inferior para tomar distancia con otros elementos */
    }

    .add-courses-section2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente oscuro */
        border-radius: 10px; /* Bordes redondeados */
    }

    .add-courses-section2 img {
        position: relative;
        z-index: -1; /* Coloca la imagen detrás del pseudo-elemento ::before */
        width: 100%;
        height: auto;
        display: block;
    }

    .add-courses-section2::before {
        left: 0;
    }

    .add-courses-section2::after {
        right: 0;
    }

    .add-courses-section2 {
        position: relative; /* Para que los elementos posicionados absolutamente estén relativos a este contenedor */
        padding: 15px; /* Espaciado interno del cuerpo */
        overflow: visible; /* Permitir que el contenido se desborde */
    }

    .add-courses-section2 .row.no-gutters {
        margin-right: 0; /* Ajustar el margen derecho de la fila sin espacios */
        margin-left: 0; /* Ajustar el margen izquierdo de la fila sin espacios */
    }

    /*  */
    /*  */
    /*  */
    /*  */




  

  
    .add-courses-section3::before {
        left: 0;
    }

    .add-courses-section3::after {
        right: 0;
    }


    .add-courses-section3 {
        position: relative; /* Para que los elementos posicionados absolutamente estén relativos a este contenedor */
}

.add-courses-section3 {
padding: 15px; /* Espaciado interno del cuerpo */
}

.add-courses-section3 {
/* background-color: #f9f9f9; */
padding: 10px;
border-radius: 10px;
margin-bottom: 30px;
box-shadow: 0px 0px 20px rgba(0, 0, 0, 2);
}

/* Estilo para la barra de navegación */
.navbar-brand {
font-size: 24px;
font-weight: bold;
color: #333;
}

.navbar {
background-color: #fff;
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Estilo para los títulos de sección */
.page-title {
font-size: 24px;
font-weight: bold;
color: #333;
}

/* Estilo para las tarjetas */
.card {
border-radius: 10px;
box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.card-body {
padding: 20px;
}

/* Estilo para los elementos de la tabla */
.table {
width: 100%;
border-collapse: collapse;
}

.table th,
.table td {
padding: 10px;
text-align: left;
border-bottom: 1px solid #ddd;
}

.table th {
background-color: #f2f2f2;
}

/* Estilo para los enlaces */
a {
color: #007bff;
text-decoration: none;
transition: all 0.3s ease;
}

a:hover {
color: #0056b3;
}
.close3 {
position: absolute;
top: 2px;
right: 18px;
font-size: 24px;

cursor: pointer;
z-index: 1;

color: #fff;

background-color: #000;
padding: 2px;
}


/* Agrega este estilo al final de tu archivo CSS */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Estilos específicos para el formulario dentro del contenedor form-container */
.form-container input[type="text"],
.form-container input[type="email"],
.form-container textarea {
    /* Estilos para los campos de texto y textarea dentro del contenedor */
    /* Por ejemplo: */
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Otros estilos específicos para el formulario dentro del contenedor form-container */
.form-container button {
    /* Estilos para los botones dentro del contenedor */
    /* Por ejemplo: */
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
}

/* importante imprimir bien editar */
/* Estilos para el modal */
#myModal {
    display: none; /* Ocultar el modal por defecto */
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 50%;
    height: 90%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5); /* Fondo semi-transparente */
    margin: auto; /* Centrar horizontalmente */
    right: 0; /* Centrar horizontalmente */
}

/* Estilos para el contenido del modal dentro del iframe */
#modalIframe {
    width: 60%; /* Ancho del iframe */
    height: 60%; /* Altura del iframe */
    margin: auto; /* Centrar verticalmente */
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    border: none; /* Sin borde para el iframe */
}

/* Estilos para el botón de cerrar */
.close {
    position: absolute;
    top: 10px; /* Ajusta la posición vertical según sea necesario */
    right: 10px; /* Ajusta la posición horizontal según sea necesario */
    cursor: pointer;
    font-size: 40px;
    color: #aaa;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* Puedes agregar más reglas CSS según tus necesidades */

</style>

<!-- Resto del contenido HTML -->

<!-- <div id="informacionEditar">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-9">
        <hr class="sidebar-divider">
        <div class="row">
          <div id="modalInformacionEditar" class="col-md-12">
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- <hr class="sidebar-divider" style="display: none;"> -->
<!-- <div class="row2" id="editarPerfil">
    <div id="informacionEditar"></div>
</div> -->

    <!-- <div class="row2" id="editarPerfil">
        <div id="informacionEditar">
            
           
        </div>
    </div> -->
    
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="informacionEditar">
            
        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="guardarCambios()">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div> -->




<!-- Agrega este código al final de tu archivo update_couses.php -->

<!-- Agrega este código al final de tu archivo update_couses.php -->
<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span> <!-- Botón de cerrar -->
        <iframe id="modalIframe" src=""></iframe>
    </div>
</div>



     
<div class="row">
    <div class="col-xl-12">
        <div class="">
            <?php 
            $sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " GROUP BY section ORDER BY section"; 
            $result = $db->query($sql);
            ?>

            <?php foreach ($result as $m) : 
                $tema = $m['section'];
                $category = $m['sub_category_id'];
                $subCategory = $m['category_id'];
                
                // Consulta SQL para obtener los videos del tema actual
                $videos_sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " AND section = '$tema'";
                $videos_result = $db->query($videos_sql);

                // Verificar si hay resultados para este tema
                if ($videos_result && $videos_result->rowCount() > 0) {
            ?>
            <div class="add-courses-section2">
                <h4 class="mb-3 header-title">
                    TEMA <a href="#"><?php echo $tema; ?></a>
                </h4>

                <div class="table-responsive-sm mt-4">
                    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Subcategoría</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach ($videos_result as $video) : ?>
                        <tbody class="add-courses-section3">
                            <tr>
                                <td></td>
                                <td>
                                    <strong><a href="#"><?php echo $video['title']; ?></a></strong><br>
                                    <small class="text-white">
                                        Instructor: <b>Nombre del Instructor Ejemplo</b>
                                    </small>
                                </td>
                                <?php
                                // Consulta SQL para obtener la categoría del curso actual
                                $sqlc = "SELECT * FROM category WHERE id = $subCategory";
                                $tiulocurso = $db->query($sqlc);

                                // Mostrar la categoría del curso actual
                                foreach ($tiulocurso as $cat) :
                                ?>
                                <td>
                                    <span class="badge badge-dark-lighten">
                                        Nombre <?php echo $cat['name']; ?>
                                    </span>
                                </td>
                                <td>
                                   descripcion
                                </td>
                                <?php endforeach; ?>
                                <!-- Aquí van las otras columnas -->
                                <td>
                                    <div class="dropright dropright">
                                        
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        
                                        <ul class="dropdown-menu">
                                            
                                            <li><a class="dropdown-item" href="#">Ver Curso en el Frontend</a></li>
                                            <li><a class="dropdown-item" href="javascript:actualizandoVideo(<?php echo $video["id"]; ?>)">Editar Este Curso</a></li>
                                            
                                            <!-- <li><a class="dropdown-item" href="#">Sección y Lección</a></li> -->
                                            <!-- <li>
                                                <a class="dropdown-item" href="#">
                                                    Marcar como Pendiente
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Marcar como Activo
                                                </a>
                                            </li> -->
                                            <!-- 

                                             -->
                                            <li><a class="dropdown-item" href="javascript:eliminandoVideo(<?php echo $video["id"]; ?>)">Eliminar
                                                    Curso</a></li>
                                                    <hr class="sidebar-divider" style="display: none;">
                                            <div class="row" id="editarPerfil">
                                            <div id="informacion"></div>
                    
                                                    
                                    
                                            
                                        </ul>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <?php 
                } // Fin del if
            endforeach; 
            ?>
        </div>
    </div>
</div>

<!-- FIN DEL CONTENIDO -->


        
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Agrega Bootstrap si aún no lo has hecho -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script src="../../scripts/ajax.js"></script>
<script src="../../scripts/validacion.js"></script>
<script src="../../alertifyjs/alertify.min.js"></script>
                                                     
<!-- <script src="../../scripts/validacionCursos.js"></script> -->




</body>
</html>