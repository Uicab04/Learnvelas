<?php
include("clases/Conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
</style>

<div class="row">
    <div class="col-xl-12">
        <div class="">
        <?php 
        $db = new Conexion();
        // Consultar solo el primer elemento de la lista
        $sql = "SELECT * FROM course_links WHERE sub_category_id = 21 GROUP BY section ORDER BY section"; 

        $result = $db->query($sql);
        
        ?>

            <?php foreach ($result as $m) : 
                $tema = $m['section'];
                $category = $m['sub_category_id'];
                $subCategory = $m['category_id'];
            ?>
                
                

            <div class="add-courses-section2">
                <h4 class="mb-3 header-title">
                    TEMA <a href="#"><?php echo $tema; ?></a>
                </h4>
                

            <div class="table-responsive-sm mt-4">
                    <!-- ?php if (count($courses) > 0): ?> -->
                        
                    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%"
                        data-page-length='25'>
                        
                        <thead>
                            
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Subcategoría</th>
                                <!-- <th>Lección y Sección</th> -->
                                <th>Descripción</th>
                                <!-- <th>Estado</th> -->
                                <!-- <th>Precio</th> -->
                                <th>Acciones</th>
                            </tr>

                        </thead>
                        <!-- LISTA DE CURSOS -->
                        <?php
                        // Consulta SQL para obtener los videos del tema actual
                        // $db = new Conexion();
                        $videos_sql = "SELECT * FROM course_links WHERE sub_category_id = 21 AND section = $tema";
                        $videos_result = $db->query($videos_sql);

                        // Mostrar los videos del tema actual
                        foreach ($videos_result as $video) :
                        ?>
                        <tbody class="add-courses-section3">

                            <tr>
                                <td>

                                </td>
                                <td>
                                    <strong><a href="#"><?php echo $video['title']; ?></a></strong><br>
                                    <small class="text-white">
                                        Instructor: <b>Nombre del Instructor Ejemplo</b>
                                    </small>
                                </td>
                                <?php
                                // Consulta SQL para obtener los videos del tema actual
                                // $db = new Conexion();
                                $sqlc = "SELECT * FROM category WHERE id = $subCategory";
                                $tiulocurso = $db->query($sqlc);

                                // Mostrar los videos del tema actual
                                foreach ($tiulocurso as $cat) :
                                ?>
                                <td>
                                    <span class="badge badge-dark-lighten">
                                        Nombre <?php echo $cat['name']; ?>
                                    </span>
                                </td>
                                <?php endforeach; ?>
                                
                                <!-- <td>
                                    <small class="text-white">
                                        <b>Total de Secciones</b>: 5
                                    </small><br>
                                    <small class="text-white">
                                        <b>Total de Lecciones</b>: 25
                                    </small><br>
                                </td>
                                <td>
                                    <small class="text-white">
                                        <b>Total de Inscritos</b>: 100
                                    </small>
                                </td> -->
                                <td class="text-center">
                                    <i class="mdi mdi-circle" style="color: #4CAF50; font-size: 19px;"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Activo"></i>
                                </td>
                                <!-- <td>
                                    <span class="text-white">
                                        $99.99
                                    </span>
                                </td> -->

                                <td>
                                    <div class="dropright dropright">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Ver Curso en el Frontend</a></li>
                                            <li><a class="dropdown-item" href="#">Editar Este Curso</a></li>
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
                                                    
                                    
                                            
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                    <!-- <div class="img-fluid w-100 text-center">
                        <img style="opacity: 1; width: 100px;" src="URL_DE_LA_IMAGEN"><br>
                        No se encontraron datos
                    </div> -->
                    <!--  -->
                </div>
                
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</div>
<!-- FIN DEL CONTENIDO -->



 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Agrega Bootstrap si aún no lo has hecho -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script src="scripts/ajax.js"></script>
<script src="scripts/validacion.js"></script>
<script src="alertifyjs/alertify.min.js"></script>
                                                     




</body>
</html>