
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
            overflow: hidden; /* Ocultar el desbordamiento para evitar barras de desplazamiento */
            position: relative; /* Posición relativa para que los elementos internos se posicionen correctamente */
        }

      #contenedor #encabezado,
      #contenedor #barra-navegacion,
      #contenedor #menu-lateral,
      /* #contenedor #contenido-pagina, */
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
        height: 837px;
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


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  >TITULO CURSO</h4>



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
    <!--  -->
    <!--  -->
    <!-- $thumbnail4 = $link['thumbnail'];
        $video_url4 = $link['video_url'];
        $short_description4 = $link['short_description'];
        $description4 = $link['description'];
        $require = $link['requirements']; -->
    <nav id="menu-derecho">
      <?php 
      $db = new Conexion();
// Consultar solo el primer elemento de la lista
$sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . ""; 

$result = $db->query($sql);
 ?>

  
  <ul id="lista-de-videos">
    <?php foreach($result as $m): $description4 = $m['description']; ?>
      
    <span><?php echo $m["title"]; ?></span>
    <li data-video="videos/<?php echo $m["video_url"]; ?>" data-descripcion="<?php echo $m["description"]; ?>">
      <img src="LOGOS/1.png" alt="Miniatura del Video">
      <span><?php echo $m["title"]; ?></span>
    </li>
    <?php endforeach; ?>
    <!-- Puedes agregar más elementos <li> aquí según sea necesario -->
  </ul>
</nav>

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
<!-- <iframe width="773" height="321" src="https://www.mediafire.com/file/llzpon69sy7344l/videoplayback.mp4/file.mp4" title="Fuerza Regida - Sigo Chambeando (En Vivo)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
  <!-- // Consulta SQL para obtener la ruta del video desde la base de datos -->





 
    <!--  -->
    <!--  -->
    <!--  -->
<!-- <video id="reproductor-principal" controls autoplay style="margin-right: 200px;">
  Tu navegador no soporta la etiqueta de video.
</video> -->
<!-- $thumbnail4 = $link['thumbnail'];
        $video_url4 = $link['video_url'];
        $short_description4 = $link['short_description'];
        $description4 = $link['description'];
        $require = $link['requirements']; -->

<style>
.descripcion-container {
  max-width: 500px; /* ajusta el ancho máximo según tus necesidades */
  margin: 0 auto; /* centra el contenedor horizontalmente */
  text-align: justify; /* justifica el texto dentro de cada párrafo */
}

.descripcion-container p {
  text-align: left; /* alinea el texto del párrafo a la izquierda */
}

/*  */


#contenido-pagina {
  display: flex;
  flex-direction: column;
  align-items: center; /* Centrar todo horizontalmente */
}

.video-wrapper {
  margin-bottom: 20px; /* Espacio entre el video y el texto */
}

.content-wrapper {
  text-align: center; /* Centrar el texto */
  margin-bottom: 20px; /* Espacio entre el texto y los recursos */
}

.course-objective {
  /* Estilos para los recursos */
}


/* /* colores y fondo del texto */

/* Estilos para el título */
h1 {
    color: #fff; /* Color del texto */
    font-size: 24px; /* Tamaño de fuente */
    text-align: center; /* Alineación del texto */
}

/* Estilos para el texto de recursos */
.course-objective {
    background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente */
    padding: 20px; /* Espacio alrededor del texto */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
}

.course-objective p {
    color: #000; /* Color del texto */
    font-size: 16px; /* Tamaño de fuente */
    line-height: 1.6; /* Altura de línea */
    text-align: center; /* Alineación del texto */
}

.course-description {
    background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente */
    padding: 20px; /* Espacio alrededor del texto */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
}

.course-description p {
    color: #000; /* Color del texto */
    font-size: 16px; /* Tamaño de fuente */
    line-height: 1.6; /* Altura de línea */
    text-align: justify; /* Alineación del texto */
}
h1 {
            color: #fff; /* Color del texto */
            font-size: 24px; /* Tamaño de fuente */
            text-align: center; /* Alineación del texto */
        }

        /* Estilos para el texto de recursos */
        .course-objective {
            background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente */
            padding: 20px; /* Espacio alrededor del texto */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
        }

        .course-objective p {
            color: #000; /* Color del texto */
            font-size: 16px; /* Tamaño de fuente */
            line-height: 1.6; /* Altura de línea */
            text-align: center; /* Alineación del texto */
        }

        .course-description {
            background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente */
            padding: 20px; /* Espacio alrededor del texto */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
        }

        .course-description p {
            color: #000; /* Color del texto */
            font-size: 16px; /* Tamaño de fuente */
            line-height: 1.6; /* Altura de línea */
            text-align: justify; /* Alineación del texto */
        }

        /* Comentarios */
        /* Puedes añadir tus comentarios CSS aquí */
</style>
<style>
        h1 {
            color: #fff; /* Color del texto */
            font-size: 24px; /* Tamaño de fuente */
            text-align: center; /* Alineación del texto */
        }

        /* Estilos para el contenedor principal */
        .content-wrapper {
            max-width: 800px; /* Ancho máximo del contenedor */
            margin: 0 auto; /* Centrar el contenedor */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Estilos para el texto de recursos */
        .course-description,
        .course-objective {
            background-color: rgba(255, 255, 255, 0.6); /* Fondo semitransparente */
            padding: 20px; /* Espacio alrededor del texto */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
            margin-bottom: 20px; /* Margen inferior */
            text-align: justify; /* Alineación del texto */
        }

        .course-description {
            background-color: rgba(255, 255, 255, 0.6); /* Fondo semitransparente más sólido */
        }

        .course-description h2,
        .course-objective h2 {
            text-align: center; /* Alineación del texto */
        }

        .course-description p,
        .course-objective p {
            color: #000; /* Color del texto */
            font-size: 16px; /* Tamaño de fuente */
            line-height: 1.6; /* Altura de línea */
            text-align: justify; /* Alineación del texto */
        }


        .course-info {
    background-color: rgba(255, 255, 255, 0.2); /* Fondo semitransparente más sólido */
    padding: 20px; /* Espacio alrededor del texto */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
    margin-bottom: 20px; /* Margen inferior */
    width: 100%; /* Ancho completo */
}

.course-info h1 {
    text-align: center; /* Alineación del texto */
    margin-bottom: 20px; /* Margen inferior */
}

/* coments*/

/* Estilos para la sección de comentarios */


/* Estilos para la sección de comentarios */
/* Estilos para la sección de comentarios */
/* Estilos para la sección de comentarios */
/* Estilos para la sección de comentarios */
.comments-section {
    background-color: rgba(255, 255, 255, 0.6); /* Fondo semitransparente */
    padding: 20px; /* Espacio alrededor del texto */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
    margin-bottom: 20px; /* Margen inferior */
    width: 100%; /* Ancho completo */
}

.comments-section h2 {
    text-align: center; /* Alineación del texto */
    margin-bottom: 10px; /* Margen inferior */
}

.comments-form {
    text-align: center; /* Alineación del formulario */
    width: 100%;
    display: flex; /* Agregar display flex para alinear el cuadro de texto y el botón */
    justify-content: space-between; /* Agregar justify-content para separar el cuadro de texto y el botón */
}

.comments-form textarea {
    width: 100%; /* Ancho completo */
    height: 60px; /* Altura del cuadro de texto */
    margin-bottom: 10px; /* Margen inferior */
    padding: 10px; /* Espaciado interno */
}

/* Estilos para el botón de enviar */
.comments-form button {
        align-self: center; /* Alinear el botón con el centro del campo de texto */
        background-color: #795548; /* Color de fondo del botón en color café */
        border: none; /* Quitar el borde del botón */
        border-radius: 50%; /* Hacer el botón redondo */
        color: #fff; /* Color del texto del botón en blanco */
        font-size: 18px; /* Tamaño de fuente del texto del botón */
        height: 36px; /* Altura del botón */
        line-height: 36px; /* Altura de línea del botón para centrar verticalmente el texto */
        padding: 0 16px; /* Relleno del botón */
        text-align: center; /* Alinear el texto del botón al centro */
        width: 36px; /* Ancho del botón */
        position: relative; /* Posición relativa para alinear el icono */
    }

    .comments-form button:hover {
        background-color: #5d4037; /* Color de fondo del botón al pasar el mouse en color café más oscuro */
    }

    .comments-form button::before {
        content: '\f102'; /* Código Unicode para el icono de avión de papel */
        font-family: 'Font Awesome 5 Free'; /* Familia de fuente para el icono */
        font-weight: 900; /* Grosor de la fuente del icono */
        font-size: 20px; /* Tamaño de fuente del icono */
        margin-right: 5px; /* Margen derecho del icono */
        transform: scaleX(-1); /* Voltear horizontalmente el icono */
        position: absolute; /* Posición absoluta para ajustar la ubicación */
        left: 50%; /* Alinear el icono a la mitad del botón */
        top: 50%; /* Alinear el icono a la mitad del botón */
        transform-origin: center; /* Origen de la transformación para el volteo horizontal */
        transform: translateX(-50%) translateY(-50%) scaleX(-1); /* Ajustar la posición del icono y voltearlo horizontalmente */
    }





    /* leer comentarios */
    .comments-section {
    background-color: rgba(255, 255, 255, 0.6); /* Fondo semitransparente */
    padding: 20px; /* Espacio alrededor del texto */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra de texto */
    margin-bottom: 20px; /* Margen inferior */
    width: 100%; /* Ancho completo */
}

.comments-list {
    list-style: none; /* Eliminar viñetas */
    padding: 0; /* Eliminar relleno */
}

.comment {
    margin-bottom: 20px; /* Espacio entre comentarios */
    border: 1px solid #ccc; /* Borde alrededor del comentario */
    padding: 10px; /* Espaciado interno del comentario */
    border-radius: 10px; /* Bordes redondeados */
}

.comment-header {
    display: flex; /* Mostrar elementos en línea */
    align-items: center; /* Alinear elementos verticalmente */
}

.comment-header img {
    width: 40px; /* Ancho de la foto de perfil */
    height: 40px; /* Altura de la foto de perfil */
    border-radius: 50%; /* Hacer la foto de perfil redonda */
    margin-right: 10px; /* Espacio entre la foto de perfil y el nombre de usuario */
}

.comment-header p {
    margin: 0; /* Eliminar el margen del párrafo */
    font-weight: bold; /* Hacer el nombre de usuario en negrita */
}

.comment-content {
    margin-left: 50px; /* Espacio entre la foto de perfil y el comentario */
}


    </style>
<?php
    $db = new Conexion();
    // Consultar solo el primer elemento de la lista
    $sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " LIMIT 1"; 

    $result = $db->query($sql);

    // Verificar si se encontró algún resultado
    if ($result->rowCount() > 0) {
        // Obtener la ruta del primer video
        $video = $result->fetch();
        $videoURL = $video["video_url"];
        $nombrecurso = $video["title"];
        $description5 = $video['description'];

        // Mostrar el contenido
        echo '<section id="contenido-pagina">';
        
        // Contenedor principal
        echo '<div class="content-wrapper" style="display: flex; flex-direction: column; align-items: center;">';
        
        // Video
        echo '<div class="video-wrapper">';
        echo '<div class="video-player">';
        echo '<video id="reproductor-principal" controls autoplay>';
        echo '<source src="videos/' . $videoURL . '" type="video/mp4">';
        echo 'Tu navegador no admite el elemento de video.';
        echo '</video>';
        echo '<div class="controls">';
        echo '<button id="prev-video">Anterior</button>';
        echo '<button id="next-video">Siguiente</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Título
        echo '<h1>' . $nombrecurso . '</h1>';
        echo '<div class="course-info">';

        // Descripción
        echo '<div class="course-description">';
        echo '<h2 style="text-align: center;">Descripción</h2>';

        // Dividir el texto en párrafos
        $parrafos = explode("\n", $description5);
        
        // Mostrar cada párrafo en un elemento <p>
        foreach ($parrafos as $parrafo) {
            // Eliminar espacios en blanco adicionales y asegurarse de que no esté vacío
            $parrafo = trim($parrafo);
            if (!empty($parrafo)) {
                // Aplicar wordwrap para dividir el texto en varias líneas
                $parrafo = wordwrap($parrafo, 80, "<br />\n");
                echo '<p style="text-align: justify;">' . $parrafo . '</p>';
            }
        }
        
        echo '</div>'; // Cierre del div de la descripción
        
        // Recursos
        echo '<div class="course-objective">';
        echo '<h2 style="text-align: center;">Recursos</h2>';
        echo '<p style="text-align: center;">Presentacion, pdfs</p>';
        echo '</div>';
        echo '</div>'; // Cierre del div del curso-info
        // 
// Formulario de comentarios
        
        // Sección de comentarios
// Sección de comentarios
// Sección de comentarios
// Sección de comentarios
// Consulta SQL para seleccionar todos los comentarios
// Consulta SQL para seleccionar todos los comentarios
// Consulta SQL para seleccionar todos los comentarios
$sql6 = "SELECT * FROM comment WHERE video_id = 323 "; 

// Preparar y ejecutar la consulta
$statement = $db->query($sql6);

// Verificar si se obtuvieron resultados
if ($statement->rowCount() > 0) {
    // Sección de comentarios
    echo '<div class="comments-section">';
    echo '<h2>Comentarios</h2>';
    echo '<form action="" method="post" class="comments-form">';
    echo '<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Escribe tu comentario aquí..."></textarea>';
    echo '<button type="submit" name="submit-comment"></button>';
    echo '</form>';
    echo '<h2>Comentarios</h2>';
    echo '<div class="comments-list">';
    // Iterar sobre los resultados
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="comment">';
        echo '<div class="comment-header">';
        // Consulta SQL para obtener el nombre de usuario
        $sql_usuario = "SELECT nombre FROM dash_usuarios WHERE id = :user_id";
        $stmt_usuario = $db->prepare($sql_usuario);
        $stmt_usuario->bindParam(':user_id', $row['user_id']);
        $stmt_usuario->execute();
        $nombre_usuario = $stmt_usuario->fetchColumn();
        echo '<p>' . $nombre_usuario . '</p>'; // Imprimir el nombre de usuario
        echo '</div>';
        echo '<p>' . $row["body"] . '</p>'; // Imprimir el comentario de la base de datos
        // echo '<a href="#">Responder</a>';
        echo '</div>';
    }
    echo '</div>'; // Fin de .comments-list
    echo '</div>'; // Fin de .comments-section
} else {
    echo '<p>No hay comentarios aún.</p>';
}







        // 
        echo '</div>'; // Cierre del div del contenedor principal
        
        echo '</section>';
    } else {
        // Si no se encontraron videos en la lista, mostrar un mensaje de error
        echo "No se encontraron videos en la lista.";
    }

    // Cerrar la conexión a la base de datos
    $db = null;
    ?>













  </div>
  <!--  -->
  <!---->





  <!--  -->
  <!--  -->
  <!--  -->
  <script>
document.addEventListener('DOMContentLoaded', function() {
    var listaVideos = document.querySelectorAll('#lista-de-videos li');

    listaVideos.forEach(function(video) {
        video.addEventListener('click', function() {
            var videoURL = this.getAttribute('data-video');
            var nombreCurso = this.querySelector('span').textContent;
            var descripcion = this.getAttribute('data-descripcion');
            var reproductorPrincipal = document.getElementById('reproductor-principal');
            var nombreCursoElement = document.querySelector('.course-description h1');
            var descripcionContainer = document.querySelector('.descripcion-container');

            // Actualizar el reproductor principal con el nuevo video
            reproductorPrincipal.src = videoURL;
            reproductorPrincipal.load();
            reproductorPrincipal.play();

            // Actualizar el nombre del curso y la descripción
            nombreCursoElement.textContent = nombreCurso;

            // Dividir el texto de la descripción en párrafos y mostrarlos
            descripcionContainer.innerHTML = '';
            var parrafos = descripcion.split("\n");
            parrafos.forEach(function(parrafo) {
                var p = document.createElement('p');
                p.textContent = parrafo;
                descripcionContainer.appendChild(p);
            });
        });
    });
});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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












  <!--  -->
</body>

</html>