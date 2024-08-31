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
      <a href="CURSOS_todos.php" class="w-inline-block">
        <div class="wf_mark w-embed"></div>
      </a>
      <a href="CURSOS_todos.php" class="wf_wordmark w-inline-block">
        <div class="wm_wf w-embed icon icon-wordmark">🎓</div>
      </a>
    </div>
  </div>
  <div class="sidebar__links-wrap">
    <div class="sidebar_group">
      <!-- Iconos de la primera sección -->
      <a data-logged-in-display="none" data-tooltip="Inicio" href="index.php" class="sidebar_link-group hide-mobile-p w-inline-block">
        <div class="icon icon-home"></div>
        <div class="sidebar_link-text">Inicio</div>
      </a>
      <!-- <a data-logged-in-display="flex" data-tooltip="Panel" href="https://universidad.com/panel" class="sidebar_link-group hide-logged-out w-inline-block">
        <div class="icon icon-dashboard"></div>
        <div class="sidebar_link-text">Panel</div>
      </a>
      <a data-tooltip="Buscar" href="https://universidad.com/buscar" class="sidebar_link-group open-search w-inline-block">
        <div class="icon icon-search"></div>
        <div class="sidebar_link-text">Buscar</div>
      </a> -->
    </div>
    <div class="sidebar_group">
      <!-- Iconos de la segunda sección -->
      <div class="sidebar_title">Aprender</div>
      <a data-tooltip="Cursos" href="CURSOS_todos.php" class="sidebar_link-group w-inline-block">
        <div class="icon icon-books">📚</div>
        <div class="sidebar_link-text">Cursos</div>
      </a>
      <!-- <a data-tooltip="Calendario" href="https://universidad.com/calendario" class="sidebar_link-group w-inline-block">
        <div class="icon icon-calendar"></div>
        <div class="sidebar_link-text">Calendario</div>
      </a> -->
    </div>
    <div class="sidebar_group">
      <!-- Iconos de la tercera sección -->
      <div class="sidebar_title">Otros</div>
      <a data-tooltip="Soporte" href="contact.php" class="sidebar_link-group w-inline-block">
        <div class="icon icon-support"></div>
        <div class="sidebar_link-text">Soporte</div>
      </a>
      <a data-tooltip="Cerrar sesión" href="#" class="sidebar_link-group w-inline-block">
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

/* mediacuerys responsive2 */

</style>