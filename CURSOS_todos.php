
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
        include("header/headersineditarperfil.php");
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

      



  

    <?php
        include("paginas/menu_izquierdo.php");
    ?>



    <!--  -->
<!--  -->
    <!--  -->
    <!--  -->
    <nav id="menu-derecho">
      <?php 
      $db = new Conexion();
// Consultar solo el primer elemento de la lista
$sql = "SELECT * FROM course_links WHERE category_id = 22"; 

$result = $db->query($sql);
 ?>

  
  <ul id="lista-de-videos">
    <?php foreach($result as $m): ?>

    <li data-video="<?php echo $m["video_url"]; ?>" data-miniatura="LOGOS/1.png" data-duracion="1:30">
      <img src="LOGOS/1.png" alt="Miniatura del Video">
      <span>Video 1</span>
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


<!--  -->
<!--  -->
<!-- vista cursos04 -->


 <style>
.cc_course-card-inner {
  padding: 20px; /* Relleno interno */
  border: 1px solid #ccc; /* Borde alrededor del contenido */
  border-radius: 8px; /* Borde redondeado */
  overflow: hidden; /* Ocultar cualquier contenido que desborde */
}

.cc_course-card-footer {
  border-top: 1px solid #ccc; /* Borde superior */
  padding: 20px; /* Relleno interno */
  margin-top: 20px; /* Margen superior */
}

/* Estilos para el primer elemento */
#home-courses .w-dyn-item:first-child {
  grid-column: span 2; /* Ocupar dos columnas */
  grid-row: span 1; /* Ocupar una fila */
}

/* Estilos para los iconos */
#home-courses .cc_course-card-footer-item .icon-1-25 {
  width: 20px; /* Ancho reducido */
  height: 20px; /* Altura reducida */
}

/* Estilos generales */
#home-courses {
  margin-top: 20px; /* Margen superior */
}

.container {
  max-width: 1200px; /* Ancho máximo del contenedor */
  margin: 0 auto; /* Centrar horizontalmente */
}

.cc_courses-grid {
  display: grid; /* Mostrar como grid */
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Columnas automáticas con tamaño mínimo de 300px */
  gap: 20px; /* Espacio entre elementos */
}

.cc_courses-grid .w-dyn-item {
  border: 1px solid #ccc; /* Borde sólido */
  border-radius: 8px; /* Borde redondeado */
  overflow: hidden; /* Ocultar el contenido que se desborde */
}

.cc_courses-grid .w-dyn-item a {
  display: block; /* Mostrar como bloque */
  text-decoration: none; /* Sin decoración de texto */
}

.cc_courses-grid .w-dyn-item:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra al pasar el mouse */
}

.cc_course-card {
  padding: 20px; /* Relleno interno */
}

.cc_course-card-thumbnail-wrap {
  height: 200px; /* Altura de la imagen */
  background-size: cover; /* Cubrir completamente */
  background-position: center; /* Centrar la imagen */
  border-top-left-radius: 8px; /* Borde redondeado superior izquierdo */
  border-top-right-radius: 8px; /* Borde redondeado superior derecho */
}

.cc_course-card-inner {
  padding: 20px; /* Relleno interno */
}

.cc_course-card-footer {
  display: flex; /* Mostrar como flexbox */
  align-items: center; /* Alinear elementos verticalmente */
  justify-content: space-between; /* Espacio uniforme entre elementos */
  padding: 20px; /* Relleno interno */
}

.cc_course-card-footer .cc_course-card-footer-item {
  display: flex; /* Mostrar como flexbox */
  align-items: center; /* Alinear elementos verticalmente */
}

.cc_course-card-footer .cc_course-card-footer-item .icon-1-25 {
  width: 20px; /* Ancho reducido */
  height: 20px; /* Altura reducida */
}

  
  </style>
    <!--  -->
    <!--  -->
    <?php $sql = "SELECT * FROM category WHERE parent <> 0"; 

$result = $db->query($sql);
 ?>

  

    

    
    
    <!--  -->
    <section id="contenido-pagina" class="section u-border-b">
  <div class="container">
    <h2 class="h3 u-mb-md">CURSOS</h2>
    <div class="course-description" s>
      <div id="w-node-ad03d18d-b036-a9fd-f585-e0398c17c639-96b988bd">
      
        <div class="w-dyn-list">
        <!-- C:\xampp\htdocs\elearning\learner-1.0.0\CURSOS _descripcion.php -->
        <div role="list" class="grid_thirds w-dyn-items" style="display: flex; flex-wrap: wrap;">
        <?php foreach($result as $m): ?>  
          <div role="listitem" class="w-dyn-item" style="width: calc(33.33% - 20px); margin-right: 20px;">
              <a href="CURSOS_descripcion.php?id=<?php echo $m["id"]; ?>" class="cc_course-card w-inline-block">
                <div style="border: 2px solid #ccc; border-radius: 8px; overflow: hidden; color: #000; background-color: rgba(255, 255, 255, 0.8);">
                  <div style="background-image: url('images/categorias/<?php echo $m["thumbnail"]; ?>'); height: 200px; background-size: cover; background-position: center; border-top-left-radius: 8px; border-top-right-radius: 8px;"></div>
                  <div class="cc_course-card-inner" style="padding: 20px;">
                    <h3 class="h4 u-mb-0"><?php echo $m["name"]; ?></h3>
                    <p class="cc_course-card-description u-fc-2 text-style-2lines">Learn the entire design process from idea to final output as we take you through Figma, Cinema 4D and Octane, and Webflow.</p>
                  </div>
                  <div class="cc_course-card-footer" style="border-top: 1px solid #ccc; padding: 20px;">
                    <div class="cc_course-card-footer-item skill">
                      <p class="text-xs u-fc-2 u-mb-0">Beginner - Advanced</p>
                    </div>
                    <div class="cc_course-card-footer-item length">
                      <p class="text-xs u-fc-2 u-mb-0">6h 27m</p>
                    </div>
                    <div class="cc_course-card-footer-item arrow u-bgc-2">
                      <div class="icon-1-25 w-embed"><svg width="100%" height="100%" viewBox="0 0 14 12" fill="none" xmlns="#"><path d="M8.25 0.5L7.46 1.22L11.35 5.5H0.75V6.5H11.35L7.46 10.78L7.97 11.5L13.25 6L8.25 0.5Z" fill="currentColor"></path></svg></div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php endforeach; ?> 
            <!-- Repite lo mismo para los otros cursos -->
          </div>
          
        </div>
      </div>
    </div>
  </div>
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












  <!--  -->
</body>

</html>