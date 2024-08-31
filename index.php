<!-- para que puedo usar los datos de los usuarios registados dentro de una agina de 
cusrosos en linea en una pagina web de capacitacion del personal dentro del hotel 
esto me puede servir para que yo sepa si en mi pagina web agrego registrarse primero cuando 
inicie en el index o mejor que se registre cuando quiera teniendo el apartado para hacerlo cuando quiera

-->
<!-- oye acuerdate de checar que dice el correo del uniforme si medir talla o probar uniforme
 -->

<!-- que le interesa saber de porcentajes de la pagina web o de los usuarios que 
toman cursos su progresos al puesto de capacitacion interna de un hotel para saber que datos recopilar y dime que datos podria usar
 -->






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

//2222

$db = new Conexion();
$menu = $db->query("SELECT * FROM course");



// $menuInfo = $menu->fetch();

?>



<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
  <link href="alertifyjs/css/alertify.css" rel="stylesheet">

  <title>GRAND VELAS</title>
</head>

<body>
    <?php
        include("header/header.php");
    ?>


        <!-- Fin de site-navigation -->
        <!-- IMPRESION EDITAR PERFIL 04-->
        <hr class="sidebar-divider" style="display: none;">
        <div class="row" id="editarPerfil">
          <div id="informacion"></div>
        </div>

        <!-- IMPRESION EDICION CURSOS-->

        <div class="row" id="edicionCursos" style="display: none; overflow-y: auto; max-height: 900px;">
            <div id="admin"></div>
        </div>
        <!-- <div class="row" id="edicionCursos2" style="display: none; overflow-y: auto; max-height: 900px;">
            <div id="vertemas"></div>
        </div> -->


        
        

        <hr class="sidebar-divider" style="display: none;">
        <div class="row" id="anadirCursos">
          <div id="anadircursos"></div>
        </div>







        <script>

          // Función para mostrar la sección de edición de perfil y ocultar la de edición de cursos
          function mostrarEditarPerfil() {
            document.getElementById("editarPerfil").style.display = "block";
            document.getElementById("edicionCursos").style.display = "none";
            document.getElementById("anadirCursos").style.display = "none";
          }

          // Función para mostrar la sección de edición de cursos y ocultar la de edición de perfil
          function mostrarEdicionCursos() {
            document.getElementById("edicionCursos").style.display = "block";
            document.getElementById("editarPerfil").style.display = "none";
            document.getElementById("anadirCursos").style.display = "none";
          }
          // function mostrarAnadirCursos() {
          //   document.getElementById("anadirCursos2").style.display = "block";

          //   document.getElementById("anadirCursos").style.display = "none";
          //   document.getElementById("editarPerfil").style.display = "none";
          //   document.getElementById("edicionCursos").style.display = "none";

          // }

          function mostrarAnadirCursos() {
            document.getElementById("anadirCursos").style.display = "block";
            document.getElementById("editarPerfil").style.display = "none";
            document.getElementById("edicionCursos").style.display = "none";


          }


          // al abrir editar perfil: cerrar ver usuarios:
          // function mostrarEdicionUsuario() {
          //   document.getElementById("EdicionUsuario").style.display = "block";
          //   document.getElementById("editarPerfil").style.display = "none";
          // }

        </script>


        <!-- Texto de ayuda a tu proyecto de E-Learning -->
        <div class="project-info">

          <!-- Tu texto sobre el proyecto aquí -->
        </div>
        <!-- Fin de project-info -->
      </div>

      <!-- Fin de container -->
    </div>

    <!-- Fin de sticky-nav js-sticky-header -->


    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
      data-toggle="collapse" data-target="#main-navbar">
      <span></span>

    </a>

    </div>

    </div>

    </div>

    <style>
      #menu-derecho {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background: linear-gradient(to bottom, #7b6c49, rgba(146, 134, 101, 0.152));
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

      #menu-derecho:hover {
        width: 250px;
        /* Aumenta el ancho del menú al pasar el mouse sobre él */
      }

      #menu-derecho hr {
        margin: 10px 0;
        border: 0;
        border-top: 1px solid #fff;
        /* Línea divisoria */
      }

      .sidebar-heading {
        margin-bottom: 10px;
        /* Espaciado inferior */
        font-size: 16px;
        /* Tamaño de fuente reducido */
      }

      #menu-derecho ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      #menu-derecho li {
        padding: 10px 0;
      }

      #menu-derecho li a {
        color: #fff;
        /* Color del texto de los enlaces */
        text-decoration: none;
      }

      #menu-derecho li:hover {
        background-color: #634F2E;
        /* Cambiar color de fondo al pasar el mouse */
      }
    </style>

    <?php if($usuario->tipo == 1): ?>

    <nav id="menu-derecho">
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->

      <hr>

      <div class="sidebar-heading">
        <!-- Permisos Administrador (deshabilitado) -->
        <!-- <span style="color: #FFF;">Permisos Administrador</span> -->
      </div>

      <li class="nav-item active">
        <a class="nav-link" href="javascript:verUsuario()" onclick="mostrarEditarPerfil()">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <h1>Usuarios registrados</span>
        </a>

      </li>

      <!-- <li>
            <a href="ActualizarProd.php">Actualizar productos</a>
        </li> -->



      <li class="nav-item active">
        <a class="nav-link" href="javascript:verIndexAdmin()" onclick="mostrarEdicionCursos()">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <h1>Ver<br> cursos</span>
        </a>
      </li>


      <li class="nav-item active">
        <!-- <a class="nav-link" href="javascript:anadirCursos()" onclick="mostrarAnadirCursos()"> -->
        <!-- <a class="nav-link" href="javascript:anadirCursos()" onclick="mostrarAnadirCursos()"> -->
        <a class="nav-link" href="files/add/add_couses.php">  
        <i class="fas fa-fw fa-tachometer-alt"></i>
          <h1>Añadir<br> video</span>
        </a>
      </li>

      <li class="nav-item active">
        <!-- <a class="nav-link" href="javascript:anadirCursos()" onclick="mostrarAnadirCursos()"> -->
        <!-- <a class="nav-link" href="javascript:anadirCursos()" onclick="mostrarAnadirCursos()"> -->
        <a class="nav-link" href="files/add/categorias.php">  
        <i class="fas fa-fw fa-tachometer-alt"></i>
          <h1>Añadir<br>cursos</span>
        </a>
      </li>

      <li class="nav-item active">
        <!-- <a class="nav-link" href="javascript:anadirCursos()" onclick="mostrarAnadirCursos()"> -->
        <!-- <a class="nav-link" href="javascript:anadirCursos()" onclick="mostrarAnadirCursos()"> -->
        <a class="nav-link" href="files/add/add_presentaciones.php">  
        <i class="fas fa-fw fa-tachometer-alt"></i>
          <h1>Añadir<br>presentaciones</span>
        </a>
      </li>





      <div class="sidebar-heading">
        <!-- Permisos Administrador (deshabilitado) -->
        <span style="color: #999;">Permisos Administrador</span>
      </div>


      <!-- Lista de usuarios -->

    </nav>
    <?php endif; ?>
  </nav>




  <div class="untree_co-hero overlay" style="background-image: url('LOGOS/bc2.webp');">




    <div class="container">



      <div class="row align-items-center justify-content-center">

        <!-- 

 -->
        <!--  -->






        <!-- 

     -->
        <div class="col-12">

          <div class="row justify-content-center ">


            <div class="col-lg-6 text-center ">


              <a href="videos/GV.mp4" href="videos/GV.mp4" data-fancybox data-aos="fade-up" data-aos-delay="0"
                class="caption mb-4 d-inline-block">VER EL VIDEO</a>

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">La educación es la madre del
                liderazgo</h1>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="CURSOS_todos.php"
                  class="btn btn-secondary">Explora cursos</a></p>


            </div>


          </div>

        </div>

      </div> <!-- /.row -->

    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->
  <style>
  .category img {
    padding: 3px; /* Puedes ajustar este valor según necesites */
  }
</style>
          <?php
        $sql = "SELECT * FROM category WHERE parent = 0"; // "WHERE", no "WERE"

        $result = $db->query($sql);
        ?>

        <div class="untree_co-section">
          <div class="container">
            <div class="row justify-content-center mb-3">
              <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Categoria</h2>
              </div>
            </div>
            <div class="row align-items-stretch">
            <?php foreach($result as $m): ?> 
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
              <a href="CURSOS_elegidosporCategoria.php?id=<?php echo $m["id"]; ?>" class="category d-flex align-items-start h-100">
                <div>
                  <img src="images/categorias/<?php echo $m["thumbnail"]; ?>" alt="<?php echo $m["thumbnail"]; ?>" alt="<?php echo $m["name"]; ?>" style="width: 50px; height: 50px;">
                </div>
                <div>
                  <h3><?php echo $m["name"]; ?></h3>
                  
                  <span>courses</span>
                </div>
              </a>
            </div>
          <?php endforeach; ?> 
    
      



          <?php
          $sql2 = "SELECT * FROM presentaciones"; // "WHERE", no "WERE"

          $result2 = $db->query($sql2);
          ?>
         
          <div class="container">
          <div class="row justify-content-center mb-3">
              <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
                <h2 class="line-bottom text-center mb-4">Presentaciones cursos</h2>
              </div>
            </div>
            <div class="row align-items-stretch">
            <?php foreach($result2 as $m): ?> 
            <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
              <a href="presentacion.php?link=<?php echo $m["link"]; ?>" class="category d-flex align-items-start h-100">
                <!-- <div>
                  <img src="images/categorias/" alt="<?php echo $m["titulo"]; ?>" style="width: 50px; height: 50px;">
                </div> -->
                <div>
                  <h3><?php echo $m["titulo"]; ?></h3>
                  
                  <span>courses</span>
                </div>
              </a>
            </div>
          <?php endforeach; ?> 
          </div>
        

            
          
        

        <!-- <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-briefcase"></i>
            </div>
            <div>
              <h3>Business</h3>
              <span>3,234 courses</span>
            </div>
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-calculator"></i>
            </div>
            <div>
              <h3>Finance Accounting</h3>
              <span>931 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>Design</h3>
              <span>7,291 courses</span>
            </div>
          </a>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-music"></i>
            </div>
            <div>
              <h3>Music</h3>
              <span>9,114 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-chart-pie"></i>
            </div>
            <div>
              <h3>Marketing</h3>
              <span>2,391 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-camera"></i>
            </div>
            <div>
              <h3>Photography</h3>
              <span>7,991 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-circle-layer"></i>
            </div>
            <div>
              <h3>Animation</h3>
              <span>6,491 courses</span>
            </div>
          </a>
        </div> -->


      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-8 text-center">
          <!-- <p>We have more category here. <a href="#">Browse all</a></p> -->
        </div>
      </div>
    </div>
  </div>

  <div class="services-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Conviértete en Instructor</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">¿Eres un experto en tu área 
            y te apasiona enseñar? ¡Grand Velas Riviera Maya te invita a unirte a 
            nuestro equipo de instructores! Comparte tus conocimientos y habilidades 
            con otros miembros del equipo a través de nuestra plataforma de e-learning.</p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>+52 981 593 8269</li>
            <li> ccapacitacionrm@velasresorts.com</li>
            <!-- <li>Océano de lenguaje grande.</li> -->
          </ul>

          <!-- <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Empezar</a></p> -->

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img src="images/grandvelas/1692199917940.jpeg" alt="Imagen" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>




  <!-- <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-music"></span>
            <h3>Music Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-calculator-alt"></span>
            <h3>Math Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>English Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>


        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>Reading for Kids</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-history"></span>
            <h3>History Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-headphones"></span>
            <h3>Music</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
      </div> -->
    <!-- </div>  -->
    <!-- /.container -->
  <!-- </div>  -->
  <!-- /.untree_co-section -->

<!-- usar par mostrar cursos -->
  <!-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">The Right Course For You</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Education Program Title</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$87.00</span></div>
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Education Program Title</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$93.00</span></div>
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Education Program Title</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$65.00</span></div>
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('images/grandvelas/grand-velas-riviera-mayajpg.webp');">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Educación para los líderes del mañana</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">
En la paradisiaca Riviera Maya, donde el mar Caribe se encuentra con la exuberante selva, Grand Velas Riviera Maya se erige como un faro de conocimiento y desarrollo para los líderes del futuro.
A través de programas de formación innovadores y un enfoque en la excelencia, cultivamos el talento de nuestros colaboradores, impulsándolos a alcanzar su máximo potencial y a liderar con pasión e integridad.          <!-- <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p> -->
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Sobre Nosotros</h2>
          <p data-aos="fade-up" data-aos-delay="100">Grand Velas Riviera Maya es un oasis de aprendizaje 
            y crecimiento, ubicado en el corazón de la Riviera Maya. Aquí, 
            la excelencia se fusiona con la belleza natural para crear un ambiente único donde 
            el desarrollo personal y profesional se entrelazan.</p>
          <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Únete a nosotros y descubre un mundo de posibilidades para tu futuro.</li>
            <!-- <li>Bookmarksgrove right at the coast</li> -->
            <!-- <li>large language ocean</li> -->
          </ul>

          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <!-- <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span> -->
              <!-- <span class="caption-2">No. Students</span> -->
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <!-- <span class="counter d-block"><span data-number="49">0</span><span></span></span> -->
              <!-- <span class="caption-2">No. Teachers</span> -->
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <!-- <span class="counter d-block"><span data-number="12">0</span><span></span></span> -->
              <!-- <span class="caption-2">No. Awards</span> -->
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <!-- <a href="#" class="btn btn-primary mr-1">Admission</a> -->
            <!-- <a href="#" class="btn btn-outline-primary">Learn More</a> -->
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>
          <a href="videos/GV.mp4" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="images/categorias/66048fd1e8e9e.jpg" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <!-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">School News</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-1-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span> <span
                  class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-2-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Enroll Your Kids This Summer to get 30% off</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span> <span
                  class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- /.untree_co-section -->


  <!-- <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Pricing</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
          <div class="pricing"> -->
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
            <!-- <div class="pricing-body">

              <h3 class="pricing-plan-title">Starter</h3>
              <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there live the blind texts.</p>

              <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing"> -->
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div> -->
            <!-- <div class="pricing-body">

              <h3 class="pricing-plan-title">Business</h3>
              <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there live the blind texts.</p>

              <p><a href="#" class="btn btn-primary">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing"> -->
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div> -->
            <!-- <div class="pricing-body">

              <h3 class="pricing-plan-title">Premium</h3>
              <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there live the blind texts.</p>

              <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- /.untree_co-section -->


  <!-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">

          <h3 class="line-bottom mb-4">Testimonials</h3>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                  live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                  large language ocean.&rdquo;</p>
                <div class="author">
                  <img src="images/person_1.jpg" alt="Free template by TemplateUX">
                  <h3>John Doe</h3>
                  <p class="position">CEO, Founder</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the
                  skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                  road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                  way.&rdquo;</p>
                <div class="author">
                  <img src="images/person_2.jpg" alt="Free template by TemplateUX">
                  <h3>James Woodland</h3>
                  <p class="position">Designer at Facebook</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia.
                  It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                <div class="author">
                  <img src="images/person_3.jpg" alt="Free template by TemplateUX">
                  <h3>Rob Smith</h3>
                  <p class="position">Product Designer at Twitter</p>
                </div>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> -->


  <div class="untree_co-section">


    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
          <img src="images/grandvelas/Grand-Velas-Riviera-Maya-202308-CUNGVR-07_Pool-at-Night.webp" alt="image" class="img-fluid">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4">¿Por qué elegirnos?</h3>
          <p>Grand Velas Riviera Maya se distingue por ofrecer una experiencia educativa excepcional, que va más allá de la formación tradicional.</p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">Buenos profesores y Staffs</button>
              </h2>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/grandvelas/1692199917940.jpeg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Ambiente inspirador: Nuestro entorno en la Riviera Maya, rodeado de belleza natural y cultural, fomenta la creatividad, el bienestar y el aprendizaje significativo.</p>
                      <p>Desarrollo integral: Nos enfocamos no solo en el desarrollo de habilidades técnicas, sino también en el crecimiento personal, la ética y el liderazgo.</p>
                      <p>Oportunidades de crecimiento: Te brindamos las herramientas y el apoyo para que alcances tu máximo potencial y te conviertas en un líder exitoso.</p>   
                      <p>Excelencia académica: Contamos con un equipo de profesores altamente calificados y programas de formación innovadores que te prepararán para enfrentar los retos del futuro.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <!-- .accordion-item -->

            <!-- <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">We Value Good Characters</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                      <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>  -->
            <!-- .accordion-item -->
            <!-- <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">Your Children are Safe</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="accordion-img mr-4">
                      <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div>
                      <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                        skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her
                        own road, the Line Lane.</p>
                      <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div>  -->
            <!-- .accordion-item -->

          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->
    <?php
        include("header/footer.php");
    ?>

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
  <!-- 

 -->
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="scripts/ajax.js"></script>
  <script src="scripts/validacion.js"></script>
  <script src="alertifyjs/alertify.min.js"></script>






  <!-- 

   -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!--Scripts-->
  <!-- <script src="scripts/ajax.js"></script>
    <script src="scripts/validacionU.js"></script>
    <script src="alertifyjs/alertify.min.js"></script> -->

  <!-- <script src="scripts/ajax.js"></script> -->
  <script src="scripts/validacionCursos.js"></script>
  <!-- <script src="alertifyjs/alertify.min.js"></script> -->

  <!-- <script src="../../scripts/ajax.js"></script>
    <script src="../../scripts/validacionCursos.js"></script>
    <script src="../../alertifyjs/alertify.min.js"></script> -->
  <!-- Tu HTML aquí -->

</body>

</html>