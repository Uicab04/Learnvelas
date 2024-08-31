<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
    <!-- <title>Cambiar imagen en diapositiva</title> -->

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
        height: 130px;
        
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
      #contenido-pagina {
        /* background-color: #F2F2F2; */
        /* background-color: #92866526; #928665 con una opacidad aproximada del 15.2% */
        
        width: calc(100% - 400px);
        /* Restando el ancho de ambos menús laterales */
        height: auto;
        float: right;
        overflow-x: hidden;
        overflow-y: scroll;
        padding-top: 70px; /* Ajusta este valor según sea necesario */

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
<nav id="menu-derecho">

</nav>

<?php
if(isset($_GET['link'])){
  // Obtener el valor del parámetro "parent"
  $link = $_GET['link'];
  
  // Imprimir el valor de "parent"
  // echo "El valor de 'parent' es: " . $link;
} else {
  // Si no se encuentra el parámetro "parent", mostrar un mensaje
  echo "No se encontró el parámetro 'parent'";
}


?>

    <!-- <h1>Presentación de ejemplo</h1> -->
    <!-- <div id="full-screen-image"></div> -->
    <section id="contenido-pagina" class="section u-border-b">
   

      <iframe id="presentation-iframe" src="<?php echo $link; ?>/embed?start=true&loop=true&delayms=5000" width="1000" height="800" allowfullscreen></iframe>
  
    </section>
    <script>
        // Obtener la URL de la primera diapositiva de la presentación
        fetch("<?php echo $link; ?>/export/png?id=1-mOANe-zNL7FRI6Tz52_Lzfu_vAgzNjV2GHxblDalo8")
            .then(response => response.blob())
            .then(blob => {
                const objectURL = URL.createObjectURL(blob);
                const img = document.createElement("img");
                img.src = objectURL;
                document.getElementById("full-screen-image").appendChild(img);
            })
            .catch(error => console.error("Error al obtener la imagen de la primera diapositiva:", error));


        // Enlace completo
// Enlace completo
var enlaceCompleto = "https://docs.google.com/presentation/d/1-mOANe-zNL7FRI6Tz52_Lzfu_vAgzNjV2GHxblDalo8/edit#slide=id.g8f1c0dd2f4_0_711";

// Encontrar la posición de "/edit"
var indiceEdit = enlaceCompleto.indexOf("/edit");

// Obtener el enlace sin la parte después de "/edit"
var enlaceSinEdit = enlaceCompleto.substring(0, indiceEdit);

// Imprimir el enlace sin la parte después de "/edit"
console.log(enlaceSinEdit);

// alert(enlaceSinEdit);
    </script>
</body>
</html>
