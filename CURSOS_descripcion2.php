
<?php
include("clases/Conexion.php");
include("files/iniciarSesion.php");
include("clases/Usuario.php");
include("clases/Funciones.php");

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



$db = new Conexion();


// Verifica si se proporcionó el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Obtiene el valor del parámetro 'id'
    $idCurso = $_GET['id'];
    
    // Utiliza el ID del curso como necesites
    // echo "ID del curso: " . $idCurso;
} else {
    // Si no se proporcionó el parámetro 'id', muestra un mensaje de error o redirige a otra página
    echo "Error: No se proporcionó el ID del curso.";
}


?>                                                             

<!-- imprime datos del curso -->
<?php 
$sql4 = "SELECT * FROM category WHERE id = " . $idCurso . ""; 
$result4 = $db->query($sql4);


// Verificar si hay resultados
if ($result4->rowCount() > 0) {
    // Iterar sobre los resultados
    foreach ($result4 as $row) {
        // Imprimir el valor de 'name'
        $nameValue = $row['name'];
        $foto = $row['thumbnail'];
    }
} else {
    echo "No se encontraron resultados.";
}
?>


<?php
$short_description = "";
// Segunda consulta a la tabla course_links
$sql_links = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " LIMIT 1"; 
$result_links = $db->query($sql_links);

// Verificar si hay resultados en la segunda consulta
if ($result_links->rowCount() > 0) {
    // Iterar sobre los resultados
    foreach ($result_links as $link) {
        // Imprimir los datos de course_links
        $idvideos = $link['category_id'];
        $thumbnail4 = $link['thumbnail'];
        $video_url4 = $link['video_url'];
        $short_description4 = $link['short_description'];
        $description4 = $link['description'];
        $require = $link['requirements'];


                // // Puedes imprimir estos datos como desees
                // echo "Thumbnail: " . $thumbnail . "<br>";
                // echo "Video URL: " . $video_url . "<br>";
                // echo "Short Description: " . $short_description . "<br>";
                // echo "Description: " . $description . "<br>";
    }
} else {
    echo "No se encontraron enlaces de curso para este ID de categoría.";
}

// echo "Short Description fuera del bucle: " . $short_description4;
?>

<!-- <?php echo $require; ?> -->


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="LOGOS/1.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/style2.css"> -->

  <title>GRAND VELAS</title>

  <head>
    <meta charset="utf-8">
    <title>Maquetaci�n con HTML5</title>
    <style type="text/css">
#contenedor {
  width: 100%;
  margin: auto;
  padding: 0px;
  height: 100vh; /* Ocupar toda la pantalla verticalmente */
  overflow: auto; /* Hacer que el contenido sea desplazable */
  position: relative; /* Mantener fijo el contenedor en la ventana */
}


      #contenedor #encabezado,
      #contenedor #barra-navegacion,
      #contenedor #menu-lateral,
      #contenedor #contenido-pagina,
      #contenedor #pie-pagina,
      #menu-derecho {
        font-family: 'Arial Rounded MT';
        font-size: 9pt;
        text-align: center;
        
        display: flex;
        justify-content: center;
        align-items: center;
        /* espacio entre contenedores */
        margin: 0px;
        padding: 0px;
      }

      #contenedor #encabezado {
        width: 100%;
        height: 100px;
        
        /* background: #00000; */
        /* color: #FFF; */
      }

      #contenedor #barra-navegacion {
        /* background: #008080; */
        /* background: rgba(146, 134, 101, 0.152); */
        width: 100%;
        height: 30px;
      }

      #contenedor #menu-lateral {
        /* background-color: #4D9AC5; */
        background: rgba(146, 134, 101, 0.152);
        width: 200px;
        /* height: 837px; */
        height: 537px;

        float: left;
      }

      /* Media query para dispositivos móviles */
      @media only screen and (max-width: 768px) {
        #contenedor #menu-lateral {
          display: none;
          /* Ocultar el menú lateral en dispositivos móviles */
        }
      }

      /*  */
      /*  */

      #menu-derecho {
        background: rgba(146, 134, 101, 0.152);
        /* background-color: #4D9AC5; */
        width: 200px;
        height: 837px;
        float: right;
      }

      #menu-derecho ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      #menu-derecho li {
        text-align: center;
        padding: 10px 0;
        border-bottom: 1px solid #fff;
      }

      #menu-derecho a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        display: block;
      }

      #menu-derecho a:hover {
        background-color: #357ca5;
      }

      /* Media query para dispositivos móviles */
      @media only screen and (max-width: 768px) {
        #menu-derecho {
          display: none;
          /* Ocultar el menú derecho en dispositivos móviles */
        }
      }


      /*  */
      /*  */
      #contenedor #contenido-pagina {
        /* background-color: #F2F2F2; */
        /* background-color: #92866526; #928665 con una opacidad aproximada del 15.2% */
        
        width: calc(100% - 400px);
        /* Restando el ancho de ambos menús laterales */
        height: auto;
        float: right;
        overflow-x: hidden;
        overflow-y: scroll;
      }

      @media screen and (max-width: 768px) {
        #contenedor #contenido-pagina {
          width: 100%;
          /* Ajustar al 100% en dispositivos móviles */
          height: 
          
        }
      }

  
      

/* 

      #contenedor #contenido-pagina {
    background-color: #F2F2F2;
    width: 100%; 
    height: auto; 
    float: right;
    overflow-x: hidden;
    overflow-y: scroll;
} */



      /* #contenedor #pie-pagina {
        background: #000000;
        width: 100%;
        height: 75px;
        color: #FFF;
        clear: both;
      } */




      /*  */



    </style>

  </head>


<body>



<?php
include("paginas/head.php");
?>
   <!--  -->
    <!--  -->
<!--  -->
<div id="contenedor">
  <header id="encabezado">
</header>

<!--  -->
<!--  -->
  <!--  -->
 
  <nav id="barra-navegacion">


                                                                     



  </nav>

<!--  -->
<!--  -->
<!--  -->
    <!-- <nav id="barra-navegacion"></nav> -->

      



  


    <nav id="menu-lateral">

    <style>

</style>

<!-- HTML con los iconos -->
<div class="page-wrapper">
  <div class="sidebar_wrap">
    <nav id="sidebar" class="sidebar opened">
      <!-- Contenido del sidebar -->
      <div class="sidebar_header">
        <div class="sidebar_logo-wrap">
          <a href="https://miweb.com/" class="w-inline-block">
            <div class="wf_mark w-embed"></div>
          </a>
          <a href="https://universidad.com/" class="wf_wordmark w-inline-block">
            <div class="wm_wf w-embed icon icon-wordmark">🎓</div>
          </a>
        </div>
      </div>
      <div class="sidebar__links-wrap">
        <div class="sidebar_group">
          <!-- Iconos de la primera sección -->
          <a data-logged-in-display="none" data-tooltip="Inicio" href="https://universidad.com/" class="sidebar_link-group hide-mobile-p w-inline-block">
            <div class="icon icon-home"></div>
            <div class="sidebar_link-text">Inicio</div>
          </a>
          <a data-logged-in-display="flex" data-tooltip="Panel" href="https://universidad.com/panel" class="sidebar_link-group hide-logged-out w-inline-block">
            <div class="icon icon-dashboard"></div>
            <div class="sidebar_link-text">Panel</div>
          </a>
          <a data-tooltip="Buscar" href="https://universidad.com/buscar" class="sidebar_link-group open-search w-inline-block">
            <div class="icon icon-search"></div>
            <div class="sidebar_link-text">Buscar</div>
          </a>
        </div>
        <div class="sidebar_group">
          <!-- Iconos de la segunda sección -->
          <div class="sidebar_title">Aprender</div>
          <a data-tooltip="Cursos" href="https://universidad.com/cursos" class="sidebar_link-group w-inline-block">
            <div class="icon icon-books">📚</div>
            <div class="sidebar_link-text">Cursos</div>
          </a>
          <a data-tooltip="Calendario" href="https://universidad.com/calendario" class="sidebar_link-group w-inline-block">
            <div class="icon icon-calendar"></div>
            <div class="sidebar_link-text">Calendario</div>
          </a>
        </div>
        <div class="sidebar_group">
          <!-- Iconos de la tercera sección -->
          <div class="sidebar_title">Otros</div>
          <a data-tooltip="Soporte" href="https://universidad.com/soporte" class="sidebar_link-group w-inline-block">
            <div class="icon icon-support"></div>
            <div class="sidebar_link-text">Soporte</div>
          </a>
          <a data-tooltip="Cerrar sesión" href="https://universidad.com/cerrar-sesion" class="sidebar_link-group w-inline-block">
            <div class="icon icon-logout"></div>
            <div class="sidebar_link-text">Cerrar sesión</div>
          </a>
        </div>
      </div>
    </nav>
  </div>
</div>


    </nav>

      <!-- estilos menu lateral izquierdo -->

    <style>
  .wf_mark,
  .wm_wf {
    font-size: 28px;
    margin-right: 15px;
    color: #333333;
  }
  
  .wm_uni {
    font-size: 22px;
    font-weight: bold;
    color: #333333;
  }


  /* Estilos para el icono */
.wm_wf {
    font-size: 40px; /* Tamaño del icono aumentado */
    color: rgba(255, 255, 255, 0.9); /* Color del icono */
    position: relative; /* Posición relativa para animaciones */
}

/* Efecto de caída como pluma */
@keyframes fall {
    0% { transform: translateY(-100px) rotateZ(-5deg); opacity: 0; }
    100% { transform: translateY(0) rotateZ(0deg); opacity: 1; }
}

/* Aplicar la animación de caída al icono */
.wm_wf {
    animation: fall 1s ease forwards;
}


  
  /* Estilos para los botones pastilla */
.sidebar_link-group {
    display: block;
    padding: 10px 20px;
    margin: 5px;
    border: none;
    border-radius: 30px; /* Bordes redondeados */
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada */
    transition: all 0.3s ease;
    text-decoration: none;
    color: rgba(255, 255, 255, 0.9); /* Texto blanco con transparencia */
    background-color: rgba(146, 134, 101, 0.152); /* Café claro con transparencia */
}

/* Fondo más claro para resaltar el botón */
.sidebar_link-group:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: inherit;
    background-color: rgba(146, 134, 101, 0.152); /* Café más claro detrás del botón */
    z-index: -1;
}

/* Efecto al pasar el cursor */
.sidebar_link-group:hover {
    transform: translateY(-2px); /* Efecto de levantamiento */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.4); /* Sombra aún más pronunciada */
}

  

    </style>


    <!--  -->
<!--  -->
    <!-- style menu derecho -->
<style>



.preview-video-box {
  text-align: center; /* Alinear al centro */
  margin-bottom: 20px; /* Margen inferior */
}

.preview-video-box img {
  max-width: 100%; /* Ancho máximo */
  height: auto; /* Altura automática */
}

.preview-text {
  display: block; /* Mostrar como bloque */
  margin-top: 10px; /* Margen superior */
  font-weight: bold; /* Negrita */
}

.price {
  text-align: center; /* Alinear al centro */
  margin-bottom: 20px; /* Margen inferior */
}

.current-price {
  font-weight: bold; /* Negrita */
  color: #007bff; /* Color del texto */
  font-size: 24px; /* Tamaño de fuente */
}

.buy-btns {
  text-align: center; /* Alinear al centro */
  margin-bottom: 20px; /* Margen inferior */
}

.btn-buy-now {
  background-color: #007bff; /* Color de fondo */
  color: #fff; /* Color del texto */
  padding: 10px 20px; /* Relleno */
  border: none; /* Sin borde */
  border-radius: 5px; /* Bordes redondeados */
  font-size: 18px; /* Tamaño de fuente */
  cursor: pointer; /* Cursor de puntero */
  transition: background-color 0.3s ease; /* Transición suave */
}

.btn-buy-now:hover {
  background-color: #0056b3; /* Cambio de color al pasar el mouse */
}

.includes {
  margin-top: 20px; /* Margen superior */
}

.title {
  font-weight: bold; /* Negrita */
  margin-bottom: 10px; /* Margen inferior */
}

.includes ul {
  list-style: none; /* Eliminar viñetas */
  padding: 0; /* Eliminar relleno */
}

.includes ul li {
  margin-bottom: 10px; /* Margen inferior */
}

.includes ul li i {
  margin-right: 5px; /* Margen derecho */
  color: #007bff; /* Color del icono */
}


</style>

<nav id="menu-derecho">
  <div class="course-sidebar natural">
    <div class="preview-video-box">
      <a data-toggle="modal" data-target="#CoursePreviewModal">
        <img src="images\categorias\<?php echo $foto; ?>" alt="Vista previa del curso" class="img-fluid">
        <span class="preview-text">Vista previa del curso</span>
        <span class="play-btn"></span>
      </a>
    </div>
    <div class="course-sidebar-text-box">
      <div class="price">
        <span class="current-price">Gratis</span> 
        <span class="original-price"></span> 
        <input type="hidden" id="total_price_of_checking_out" value="$99.99"> 
      </div>
      <div class="buy-btns">
        <!-- <a href="#" class="btn btn-buy-now" onclick="handleEnrolledButton()">Comenzar</a> -->
        <a href="javascript:listaVideosCurso(<?php echo $idCurso; ?>)" class="btn btn-buy-now" onclick="">Comenzar</a>

      </div>
      <div class="includes">
        <div class="title"><b>Incluye:</b></div>
        <ul>
          <li><i class="far fa-file-video"></i> videos bajo demanda</li> 
          <li><i class="far fa-file"></i> 10 lecciones</li> 
          <li><i class="far fa-compass"></i> Acceso de por vida completo</li>
          <li><i class="fas fa-mobile-alt"></i> Acceso en dispositivos móviles y TV</li> 
        </ul>
      </div>
    </div>
  </div>
</nav>

<!--  -->
<style>
  /* Estilos CSS aquí */
  #menu-derecho {
    background: rgba(146, 134, 101, 0.152);
    width: 200px;
    height: 837px;
    float: right;
    overflow-y: auto;
    border-right: 1px solid #ddd;
  }
  #menu-derecho ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  #menu-derecho li {
    padding: 10px;
    border-bottom: 1px solid #fff;
    cursor: pointer;
    display: flex;
    align-items: center;
  }
  #menu-derecho li:hover {
    background-color: #357ca5;
  }
  #menu-derecho li img {
    width: 80px;
    height: 45px;
    margin-right: 10px;
  }
  #menu-derecho li span {
    font-size: 14px;
    color: #fff;
  }
</style>

<!-- click al video y reproduce -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  var listaVideos = document.getElementById("lista-de-videos");
  listaVideos.addEventListener("click", function(event) {
    var elemento = event.target.closest("li");
    if (elemento) {
      var videoURL = elemento.getAttribute("data-video");
      var reproductorPrincipal = document.getElementById("reproductor-principal");
      reproductorPrincipal.src = videoURL;
    }
  });
});
</script>


<!--  -->
<!--  -->
<!-- vista cursos04 -->


 <style>
  /* Estilo para el título del plan de estudios */
.course-curriculum-title {
  background-color: #f8f9fa; /* Color de fondo */
  border-bottom: 1px solid #dee2e6; /* Borde inferior */
  padding: 10px 20px; /* Espaciado interno */
  border-radius: 5px; /* Bordes redondeados */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra */
  margin-bottom: 20px; /* Margen inferior */
}

/* Estilo para el título de la sección */
.course-curriculum-title .title {
  font-size: 20px; /* Tamaño de fuente */
  font-weight: bold; /* Negrita */
  color: #343a40; /* Color del texto */
}

/* Estilo para los detalles a la derecha */
.course-curriculum-title .float-right {
  font-size: 14px; /* Tamaño de fuente */
}

/* Estilo para el icono de lecciones */
.total-lectures::before {
  content: "\f02d"; /* Código del icono de lecciones */
  font-family: "Font Awesome 5 Free"; /* Familia de fuentes */
  margin-right: 5px; /* Margen derecho */
}

/* Estilo para el icono de tiempo */
.total-time::before {
  content: "\f017"; /* Código del icono de tiempo */
  font-family: "Font Awesome 5 Free"; /* Familia de fuentes */
  margin-right: 5px; /* Margen derecho */
}

/* Estilo para el contenedor del título */
.course-curriculum-title .float-right {
  color: #6c757d; /* Color del texto */
}

/* Estilo para el área del contenido del curso */
/* Estilo para el área del contenido del curso */
.course-content-area {
  background-color: rgba(255, 255, 255, 0.8); /* Color de fondo con transparencia */
  border: 2px solid #8B4513; /* Borde con color madera */
  border-radius: 10px; /* Bordes redondeados */
  padding: 30px; /* Espaciado interior aumentado */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.1); /* Sombra mejorada */
  margin-bottom: 30px; /* Margen inferior aumentado */
}

/* Estilo para las cajas de contenido */
.course-content-area .content-box {
  background-color: rgba(255, 255, 255, 0.9); /* Color de fondo con transparencia */
  border: 1px solid #8B4513; /* Borde con color madera */
  border-radius: 8px; /* Bordes redondeados */
  padding: 20px; /* Espaciado interior */
  margin-bottom: 20px; /* Margen inferior */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

/* Estilo para los títulos de las cajas */
.course-content-area .content-title {
  color: #8B4513; /* Color del texto */
  font-size: 24px; /* Tamaño de fuente aumentado */
  font-weight: bold; /* Negrita */
  margin-bottom: 15px; /* Margen inferior */
  text-transform: uppercase; /* Convertir texto a mayúsculas */
}

/* Estilo para el contenido dentro de las cajas */
.course-content-area .content-text {
  color: #333; /* Color del texto */
  font-size: 18px; /* Tamaño de fuente */
  line-height: 1.6; /* Altura de línea aumentada */
}

/* Estilo para los enlaces dentro de las cajas */
.course-content-area .content-link {
  color: #8B4513; /* Color del texto */
  text-decoration: none; /* Sin subrayado */
  transition: color 0.3s; /* Transición suave del color */
}

/* Estilo para los enlaces hover dentro de las cajas */
.course-content-area .content-link:hover {
  color: #654321; /* Cambio de color al pasar el mouse */
}

/* Estilo para las cajas de contenido */
.course-content-area .what-you-get-box,
.course-content-area .course-curriculum-box,
.course-content-area .requirements-box,
.course-content-area .description-box {
  background-color: rgba(255, 255, 255, 0.8); /* Color de fondo con transparencia */
  border: 2px solid #8B4513; /* Borde con color madera */
  border-radius: 10px; /* Bordes redondeados */
  margin-bottom: 30px; /* Margen inferior aumentado */
  padding: 25px; /* Espaciado interior aumentado */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra suave */
}
/* Estilo para los títulos de las cajas */
.course-content-area .what-you-get-title,
.course-content-area .course-curriculum-title,
.course-content-area .requirements-title,
.course-content-area .description-title {
  color: #8B4513; /* Color del texto */
  font-size: 24px; /* Tamaño de fuente aumentado */
  font-weight: bold; /* Negrita */
  margin-bottom: 20px; /* Margen inferior aumentado */
  text-transform: uppercase; /* Convertir texto a mayúsculas */
}

/* Estilo para los ítems de la lista */
.course-content-area .what-you-get__items,
.course-content-area .requirements__list {
  list-style: none; /* Eliminar viñetas */
  padding: 0; /* Eliminar el relleno */
  margin-left: 0; /* Eliminar el margen izquierdo */
}


/* Estilo para los elementos de la lista */
.course-content-area .what-you-get__items li,
.course-content-area .requirements__list li {
  margin-bottom: 15px; /* Margen inferior aumentado */
}


/* Estilo para los enlaces */
.course-content-area a {
  color: #8B4513; /* Color del texto */
}

/* Estilo para los botones */
.course-content-area .view-more {
  color: #8B4513; /* Color del texto */
  cursor: pointer; /* Cursor de puntero */
}

/* Estilo para el texto de descripción */
.course-content-area .description-content {
  color: #444; /* Color del texto más oscuro */
  font-size: 18px; /* Tamaño de fuente aumentado */
  line-height: 1.5; /* Altura de línea aumentada */
}

/* Estilo para los títulos de sección */
.course-content-area .lecture-group-title,
.course-content-area .lecture-title {
  color: #8B4513; /* Color marrón */
  font-size: 22px; /* Tamaño de fuente aumentado */
  font-weight: bold; /* Negrita */
  margin-bottom: 20px; /* Margen inferior aumentado */
  border-bottom: 2px solid #8B4513; /* Línea inferior marrón */
  padding-bottom: 10px; /* Espaciado inferior */
}
/* Estilo para los elementos de la lista de lecciones */
.course-content-area .lecture-list li {
  border-bottom: 1px solid #8B4513; /* Borde inferior */
  padding-bottom: 20px; /* Espaciado inferior aumentado */
  margin-bottom: 20px; /* Margen inferior aumentado */
}

/* Estilo para el enlace de vista previa */
.course-content-area .lecture-preview {
  color: #8B4513; /* Color del texto */
  cursor: pointer; /* Cursor de puntero */
  transition: color 0.3s ease; /* Transición de color suave */
}

/* Estilo para el botón de vista previa al pasar el mouse */
.course-content-area .lecture-preview:hover {
  text-decoration: underline; /* Subrayado */
  color: #5d2a0e; /* Color del texto más oscuro */
}

/* Estilo para los enlaces flotantes a la derecha */
.course-content-area .float-right {
  float: right; /* Alineación a la derecha */
  margin-left: 10px; /* Espacio a la izquierda */
}

/* Estilo para los elementos clearfix */
.course-content-area .clearfix::after {
  content: ""; /* Contenido vacío */
  display: table; /* Se muestra como tabla */
  clear: both; /* Borra los flotados */
}

/* Estilo para la flecha de desplegable */
.course-content-area .lecture-group-title::after {
  content: "+"; /* Contenido de la flecha */
  float: right; /* Alineación a la derecha */
  margin-left: 5px; /* Espacio a la izquierda */
  transition: transform 0.3s; /* Transición suave */
}

/* Estilo para la sección desplegable activa */
.course-content-area .lecture-group-title.active::after {
  content: "-"; /* Cambiar contenido de la flecha */
  transform: rotate(90deg); /* Rotar la flecha */
}

/* Estilo para el contenedor del reproductor de video */
.video-player {
  position: relative;
}

/* Estilo para el video */
video {
  width: 50%;
  height: auto;
}

/* Estilo para la superposición de texto */
.video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro semi-transparente */
}

/* Estilo para el contenido de la superposición */
.overlay-content {
  text-align: center;
  color: #fff; /* Color del texto */
  z-index: 1; /* Asegurar que esté sobre el video */
}

/* Estilo para el texto grande del nombre del curso */
.overlay-content h1 {
  font-size: 36px;
  margin-bottom: 10px;
}

/* Estilo para el texto de la descripción del curso */
.overlay-content p {
  font-size: 18px;
}

/* Estilo para resaltar el nombre del curso en modo silencioso */
video::cue {
  color: #ff0000; /* Color rojo para resaltar */
  font-weight: bold; /* Texto en negrita */
}

    </style>
    
    
    
    <?php $sql = "SELECT * FROM course_links WHERE category_id = 2"; 

$result = $db->query($sql);
 ?>

  

    

    
    
    <!--  -->
    <section id="contenido-pagina">










  <section class="course-content-area">
    
    <div class="container">


  <div class="video-player">
    <video id="myVideo" controls autoplay muted playsinline>

      <source src="videos\<?php echo $video_url4; ?>" type="video/mp4">
      Tu navegador no admite la etiqueta de video.
    </video>
    <div class="video-overlay">
      <div class="overlay-content">
        <h1><?php echo $nameValue; ?></h1>
        <p><?php echo $short_description4; ?></p>
      </div>
    </div>
  </div>
<script>
  var video = document.getElementById('myVideo');

  // Cuando el video comienza a reproducirse, quita el atributo 'muted'
  video.addEventListener('play', function() {
    video.removeAttribute('muted');
  });
</script>
<!--


 -->
<!--  -->

<!-- <nav id="menu-derecho">
  <div class="course-sidebar natural">
    <div class="preview-video-box">
      <a data-toggle="modal" data-target="#CoursePreviewModal">
        <img src="LOGOS\bc2.webp" alt="Vista previa del curso" class="img-fluid">
        <span class="preview-text">Vista previa del curso</span>
        <span class="play-btn"></span>
      </a>
    </div>
    <div class="course-sidebar-text-box">
      <div class="price">
        <span class="current-price">$99.99</span> 
        <span class="original-price">$129.99</span> 
        <input type="hidden" id="total_price_of_checking_out" value="$99.99"> 
      </div>
      <div class="buy-btns">
        <a href="#" class="btn btn-buy-now" onclick="handleEnrolledButton()">Inscribirse</a> 
      </div>
      <div class="includes">
        <div class="title"><b>Incluye:</b></div>
        <ul>
          <li><i class="far fa-file-video"></i> 20 horas de videos bajo demanda</li> 
          <li><i class="far fa-file"></i> 10 lecciones</li> 
          <li><i class="far fa-compass"></i> Acceso de por vida completo</li> 
          <li><i class="fas fa-mobile-alt"></i> Acceso en dispositivos móviles y TV</li> 
        </ul>
      </div>
    </div>
  </div>
</nav> -->




<!--  -->
<!-- 

 -->
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="Temarios-tab" data-toggle="tab" href="#Temarios" role="tab" aria-controls="Temarios" aria-selected="true">Temarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="lo-que-obtienes-tab" data-toggle="tab" href="#lo-que-obtienes" role="tab" aria-controls="lo-que-obtienes" aria-selected="false">Lo que obtienes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="requisitos-tab" data-toggle="tab" href="#requisitos" role="tab" aria-controls="requisitos" aria-selected="false">Requisitos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="descripcion-tab" data-toggle="tab" href="#descripcion" role="tab" aria-controls="descripcion" aria-selected="false">Descripción</a>
            </li>

          </ul>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Temarios" role="tabpanel" aria-labelledby="Temarios-tab">
              <div class="description-box">
                <div class="description-title">Temarios</div>
                <div class="description-content">
                  <!-- <p>Este curso te brindará una introducción completa a...</p>
                  <p>Temas cubiertos:</p> -->
                  <ul>
                    <!-- <li>Tema 1</li> -->
                    <div class="row">
                    <div class="col-xl-12">
                    <!-- AQUI -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="">
                                <?php 
                                $sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " GROUP BY section ORDER BY section"; 
                                $result = $db->query($sql);
                                ?>

                                <?php foreach ($result as $m) : 
                                    $tema = $m['section'];

                                    // Consulta SQL para obtener los subtemas del tema actual
                                    $subtemas_sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " AND section = '$tema'";
                                    $subtemas_result = $db->query($subtemas_sql);
                                ?>
                                <div class="add-courses-section2">
                                    <h4 class="mb-3 header-title">
                                        TEMA <a href="#" onclick="mostrarSubtemas('<?php echo $tema; ?>')"><?php echo $tema; ?></a>
                                    </h4>

                                    <?php if ($subtemas_result && $subtemas_result->rowCount() > 0) : ?>
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
                                            <?php foreach ($subtemas_result as $subtema) : ?>
                                            <tbody class="add-courses-section3">
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <strong><a href="#"><?php echo $subtema['title']; ?></a></strong><br>
                                                        <small class="text-white">
                                                            Instructor: <b>Nombre del Instructor Ejemplo</b>
                                                        </small>
                                                    </td>
                                                    <?php
                                                    // Consulta SQL para obtener la categoría del curso actual
                                                    $subCategory = $subtema['category_id'];
                                                    $sqlc = "SELECT * FROM category WHERE id = $subCategory";
                                                    $tiulocurso = $db->query($sqlc);

                                                    // Mostrar la categoría del curso actual
                                                    foreach ($tiulocurso as $cat) :
                                                    ?>
                                                    <td>
                                                        <span class="badge badge-dark-lighten">
                                                            <?php echo $cat['name']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        descripcion
                                                    </td>
                                                    <?php endforeach; ?>
                                                    <!-- Aquí van las otras columnas -->
                                                    <td>
                                                        <!-- Aquí van las acciones -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                      
                  </ul>
                </div>
              </div>      <!-- AQUI -->
            </div>



          
            <div class="tab-pane fade" id="lo-que-obtienes" role="tabpanel" aria-labelledby="lo-que-obtienes-tab">
              <div class="what-you-get-box">
                <div class="what-you-get-title">Lo que obtienes</div>
                <ul class="what-you-get__items">
                  <li>Material de estudio de alta calidad</li>
                  <li>Acceso a videos instructivos</li>
                  <li>Ejercicios prácticos</li>
                  <li>Soporte del instructor</li>
                </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="requisitos" role="tabpanel" aria-labelledby="requisitos-tab">
              <div class="requirements-box">
                <div class="requirements-title">Requisitos</div>
                <div class="requirements-content">
                  <ul class="requirements__list">
                    <li><?php echo $require; ?></li>
                    <!-- <li>Acceso a internet</li>
                    <li>Motivación para aprender</li> -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
              <div class="description-box">
                <div class="description-title">Descripción</div>
                <div class="description-content">
                  <p><?php echo $description4; ?></p>
                  <!-- <p>Temas cubiertos:</p>
                  <ul>
                    <li>Tema 1</li>
                    <li>Tema 2</li>
                    <li>Tema 3</li>
                  </ul> -->
                </div>
              </div>
            </div>








                    <!-- <li>Tema 2</li>
                    <li>Tema 3</li> -->
                  
            </div>

          </div>
        </div>
      </div>

      <script>
$(document).ready(function() {
  // Activar la primera pestaña
  $('#mytab a[href="#Temarios"]').tab('show');

  // Mostrar/ocultar contenido al hacer clic en "Ver más"
  $('.description-box .view-more').click(function() {
    $(this).parent().find('.description-content-wrap').toggleClass('expanded');
  });
});

      </script>







    </div>


  </section>
</section>



  
  <!--  -->
  <!---->



  <!--  -->
  <!--  -->
  <!--  -->


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/custom.js"></script>



  <script src="scripts/ajax.js"></script>
  <!-- <script src="scripts/validacionU.js"></script> -->
  <script src="scripts/validacion.js"></script>
  <script src="alertifyjs/alertify.min.js"></script>









  <!--  -->
</body>

</html>