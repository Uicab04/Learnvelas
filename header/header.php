
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-9">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> <span
                class="d-none d-lg-inline-block">Tienes preguntas?</span></a>
            <a href="#" class="small mr-3"><span class="icon-phone mr-2"></span> <span
                class="d-none d-lg-inline-block">+52 981 593 8269</span></a>
            <a href="#" class="small mr-3"><span class="icon-envelope mr-2"></span> <span
                class="d-none d-lg-inline-block">ccapacitacionrm@velasresorts.com</span></a>
          </div>

          <div class="col-6 col-lg-3 text-right">
            <a href="javascript:editarUsuario(<?php echo $idUsuario; ?>)" class="small" onclick="mostrarEditarPerfil()">
              <span class="icon-pencil"></span>
              Editar perfil
            </a>

            <a href="register.html" class="small">
              <span class="icon-person"></span>
              Registrarse
            </a>
          </div>

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header" style="background: rgba(146, 134, 101, 0.152);">
      <div class="container position-relative">
        <div class="site-navigation text-center">

          <!-- <a href="index.html" class="logo menu-absolute m-0">Aprendiz<span class="text-primary">.</span></a> -->
          <!--  -->

          <img data-nodeferimage="true" id="logo" class="logo"
            src="https://rivieramaya.grandvelas.com.mx/images/grand-velas-riviera-maya-mexico-logo.svg" width="325"
            height="57" alt="Carretera Cancun Tulum Km 62, Playa Del Carmen Quintana Roo">

          <!--  -->
          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
          <style>
.b-2 {
  height: 60px;
  
}

  


</style>
            <li class="b-2 btn btn-secondary btn-sm"><a href="index.php">Inicio</a></li>
            <li class="has-children">
              <!-- <a href="#">Desplegable</a> -->
              <ul class="dropdown">
                <li><a href="#">Elementos</a></li>
                <!-- <li><a href="elements.html">Elementos</a></li> -->

                <li class="has-children">
                  <a href="#">Menú Dos</a>
                  <ul class="dropdown">
                    <li><a href="#">Submenú Uno</a></li>
                    <li><a href="#">Submenú Dos</a></li>
                    <li><a href="#">Submenú Tres</a></li>
                  </ul>
                </li>
                <li><a href="#">Menú Tres</a></li>
              </ul>
            </li>
            <!-- <li><a href="staff.html">Nuestro Equipo</a></li> -->
            <li class="b-2 btn btn-secondary btn-sm"><a href="CURSOS_todos.php">Cursos</a></li>
            <!-- <li><a href="gallery.html">Galería</a></li> -->
            <li class="b-2 btn btn-secondary btn-sm"><a href="about.php">Quienes somos?</a></li>
            <li class="b-2 btn btn-secondary btn-sm"><a href="contact.php">Contacto</a></li>
          </ul>

          <a href="clases/cerrarSesion.php" class="btn-book btn btn-secondary btn-sm menu-absolute">Cerrar sección</a>

        </div>