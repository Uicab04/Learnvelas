        


<?php
                        include("../clases/Conexion.php");

                        ?>


<style>
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


.add-courses-section3 {
    position: relative;
    background-image: url('images/fondomadera/2.jpg'); /* Agrega la ruta de la imagen aquí */
    background-size: cover;
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra con opacidad reducida */
    border: 1px solid rgba(0, 0, 0, 0.1); /* Borde con opacidad reducida */
    border-left: 1px solid rgba(0, 0, 0, 0.1); /* Borde izquierdo con opacidad reducida */
    border-right: 1px solid rgba(0, 0, 0, 0.1); /* Borde derecho con opacidad reducida */
    overflow: hidden; /* Oculta el desbordamiento de los bordes redondeados */
}

.add-courses-section3::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.1); /* Fondo semitransparente */

    border-radius: inherit; /* Hereda el radio de borde del contenedor principal */
}

.add-courses-section3 img {
    position: relative;
    z-index: -1; /* Coloca la imagen detrás del pseudo-elemento ::before */
    width: 100%;
    height: auto;
    display: block;
}




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
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 30px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

/*  */
/*  */
/*  */
/*  */
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

/*  */
/*  */
/*  */



</style>
<!-- <div class="row" id="edicionCursos2" style="display: none; overflow-y: auto; max-height: 900px;">
     <div id="vertemas"></div>
</div> -->

<div class="row2">

<div class="row">
    
    <div class="col-xl-12">
    <div class="close3" onclick="cerrarPestana()">&times;</div> <!-- X para cerrar la pestaña -->

        <div class="">
            <div class="add-courses-section2">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Cursos
                    <a href="files\add\add_couses.php" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>
                        Agregar nuevo scurso</a>
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<!--  -->
<!--  -->
<?php

$db = new Conexion();

// Consulta para obtener el número de categorías sin parent
$sqlCategorias = "SELECT COUNT(*) AS total_categorias FROM category WHERE parent = 0";
$resultadoCategorias = $db->query($sqlCategorias);
$filaCategorias = $resultadoCategorias->fetch(PDO::FETCH_ASSOC);
$totalCategorias = $filaCategorias['total_categorias'];

// Consulta para obtener el número de subcategorías con parent
$sqlSubcategorias = "SELECT COUNT(*) AS total_subcategorias FROM category WHERE parent != 0";
$resultadoSubcategorias = $db->query($sqlSubcategorias);
$filaSubcategorias = $resultadoSubcategorias->fetch(PDO::FETCH_ASSOC);
$totalSubcategorias = $filaSubcategorias['total_subcategorias'];

// Consulta para obtener el número de videos en la tabla course_links
$sqlVideos = "SELECT COUNT(*) AS total_videos FROM course_links";
$resultadoVideos = $db->query($sqlVideos);
$filaVideos = $resultadoVideos->fetch(PDO::FETCH_ASSOC);
$totalVideos = $filaVideos['total_videos'];
?>

<div class="row">
    <div class="col-12">
        <div class="add-courses-section2 widget-inline">
            <div class="add-courses-section2 p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-xl-3">
                        <a href="#" class="text-secondary">
                            <div class="add-courses-section shadow-none m-0">
                                <div class="add-courses-section text-center">
                                    <i class="dripicons-link text-muted" style="font-size: 24px;"></i>
                                    <h3><span><?php echo $totalCategorias; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Categorías</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="#" class="text-secondary">
                            <div class="add-courses-section shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="dripicons-link-broken text-muted" style="font-size: 24px;"></i>
                                    <h3><span><?php echo $totalSubcategorias; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Subcategorías</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="#" class="text-secondary">
                            <div class="add-courses-section shadow-none m-0 border-left">
                                <div class="cadd-courses-section text-center">
                                    <i class="dripicons-star text-muted" style="font-size: 24px;"></i>
                                    <h3><span><?php echo $totalVideos; ?></span></h3>
                                    <p class="text-muted font-15 mb-0">Videos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>


<div class="row">
    <div class="col-xl-12">
        <div class="">


            <div class="add-courses-section2">
                <h4 class="mb-3 header-title">
                    Lista de cursos
                </h4>
                <form class="row justify-content-center" action="URL_DE_TU_PÁGINA" method="get">

                    <!-- Course Categories -->
                    <!--  

                    -->



                    <!-- Course Status -->
                    <!-- <div class="col-xl-3">
                        <div class="form-group">
                            <label for="category_id">Categorías</label>
                            <select class="form-control select2" data-toggle="select2" name="category_id"
                                id="category_id">
                                <option value="all" selected>Todas las categorías</option>
                                <optgroup label="Categoría 1">
                                    <option value="1">Subcategoría 1.1</option>
                                    <option value="2">Subcategoría 1.2</option>
                                    <option value="3">Subcategoría 1.3</option>
                                </optgroup>
                                <optgroup label="Categoría 2">
                                    <option value="4">Subcategoría 2.1</option>
                                    <option value="5">Subcategoría 2.2</option>
                                    <option value="6">Subcategoría 2.3</option>
                                </optgroup>
                            </select>
                        </div>
                    </div> -->

                    <!-- 

 -->
                    <!-- Course Instructors -->
                    <!-- <div class="col-xl-3">
                        <div class="form-group">
                            <label for="instructor_id">
                                Instructor
                            </label>
                            <select class="form-control select2" data-toggle="select2" name="instructor_id"
                                id='instructor_id'>
                                <option value="all" selected>
                                    Todos
                                </option>
                                <option value="1">
                                    Juan Pérez
                                </option>
                                <option value="2">
                                    María Gómez
                                </option>
                                <option value="3">
                                    Carlos Martínez
                                </option>
                            </select>
                        </div>
                    </div> -->


                    <!-- Precio del curso -->
                    <!-- <div class="col-xl-2">
                        <div class="form-group">
                            <label for="price">
                                Precio
                            </label>
                            <select class="form-control select2" data-toggle="select2" name="price" id='price'>
                                <option value="all" selected>
                                    Todos
                                </option>
                                <option value="free">
                                    Gratis
                                </option>
                                <option value="paid">
                                    Pago
                                </option>
                            </select>
                        </div>
                    </div> -->


                    <!-- <div class="col-xl-2">
                        <label for=".." class="text-white">
                            Nombre de etiqueta
                        </label>
                        <button type="submit" class="btn btn-primary btn-block" name="button">
                            Filtrar
                        </button>
                    </div> -->

                </form>

                <div class="table-responsive-sm mt-4">
                    <!-- ?php if (count($courses) > 0): ?> -->
                    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%"
                        data-page-length='25'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Lección y Sección</th>
                                <th>Estudiante Inscrito</th>
                                <th>Estado</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>

                        </thead>

                        <!-- LISTA DE CURSOS php -->
                        
                        <?php

                        $db3 = new Conexion();
                        $sql3 = "SELECT * FROM category WHERE parent != 0";

                        $resultado3 = $db3->query($sql3);

                        ?>
                        
                        <!-- LISTA DE CURSOS -->
                        <?php foreach ($resultado3 as $dat) : ?>

                        <tbody class="add-courses-section3">

                            <tr>
                                <td>

                                </td>
                                <td>
                                    <strong><a href="#"><?php echo $dat['name']; ?></a></strong><br>
                                    <small class="text-white">
                                        Instructor: <b>Nombre del Instructor Ejemplo</b>
                                    </small>
                                </td>
                                <td>
                                    <span class="badge badge-dark-lighten">
                                        Nombre de la Categoría Ejemplo
                                    </span>
                                </td>
                                <td>
                                    <small class="text-white">
                                        <b>Total de Secciones</b>: ?
                                    </small><br>
                                    <small class="text-white">
                                        <b>Total de Lecciones</b>: ?
                                    </small><br>
                                </td>
                                <td>
                                    <small class="text-white">
                                        <b>Total de Inscritos</b>: ?
                                    </small>
                                </td>
                                <td class="text-center">
                                    <i class="mdi mdi-circle" style="color: #4CAF50; font-size: 19px;"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Activo"></i>
                                </td>
                                <td>
                                    <span class="text-white">
                                        $Gratis
                                    </span>
                                </td>

                                <td>
                                    <div class="dropright dropright">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="CURSOS_descripcion.php?id=<?php echo $dat["id"]; ?>">Ver Curso en el Frontend</a></li>
                                            <li><a class="dropdown-item" href="files/add/update_couses2.php?id=<?php echo $dat["id"]; ?>">Editar Este Curso</a></li>
                                            <!-- <li><a class="dropdown-item" href="javascript:ver_curso_temas(<?php echo $dat["id"]; ?>)">Editar Este Curso</a></li> -->

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
                                            <!-- <li><a class="dropdown-item" href="#"
                                                    onclick="confirm_modal('URL_PARA_ELIMINAR_CURSO');">Eliminar
                                                    Curso</a></li> -->
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
        </div>
    </div>

</div>


<script>
function cerrarPestana() {
    var row2 = document.querySelector('.row2');
    row2.parentNode.removeChild(row2); // Elimina la tarjeta del DOM al hacer clic en la X
}


</script>
