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

// Verificar si se recibió un ID de video
if (isset($_GET['video_id'])) {
    // Suponiendo que tienes una conexión a la base de datos
    $db = new Conexion();

    // Obtener el ID del video desde la solicitud AJAX
    $videoId = $_GET['video_id'];

    // Consulta para obtener comentarios del video seleccionado
    $sql = "SELECT * FROM comment WHERE video_id = :video_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':video_id', $videoId);
    $stmt->execute();
    echo '<div class="comments-section">';
    echo '<h2>Comentarios</h2>';
    echo '<form action="" method="post" class="comments-form">';
    echo '<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Escribe tu comentario aquí..."></textarea>';
    echo '<input type="hidden" id="user_id" value="' .$idUsuario. ' ">';
    echo '<input type="hidden" id="video_id" value="' . $videoId . '">';
    echo '<button type="button" onclick="validarRegistroComentario()" name="submit-comment"></button>';
    echo '</form>';
    echo '<hr class="sidebar-divider" style="display: none;">';
    echo '<div class="row" id="anadirCursos">';
    echo '<div id="guardandoComentario"></div>';
    echo '</div>';
    // Construir el HTML de los comentarios
      $commentsHTML = '';
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          // Obtener el nombre de usuario del comentario actual
          $usuario = new Usuario($row['user_id']);
          $username = $usuario->nombre; // Suponiendo que el nombre de usuario se almacena en la propiedad 'nombre'
  
          // Agregar cada comentario a $commentsHTML
          $commentsHTML .= '<div class="comment">';
          $commentsHTML .= '<div class="comment-header">';
          // Mostrar el nombre de usuario en el comentario
          $commentsHTML .= '<p>' . $username . '</p>';
          $commentsHTML .= '</div>';
          $commentsHTML .= '<p>' . $row['body'] . '</p>';
          $commentsHTML .= '</div>';
      }
  
      // Enviar el HTML de los comentarios como respuesta
      echo $commentsHTML;
} else {
    // Si no se recibió un ID de video, enviar un mensaje de error
    echo 'ID de video inválido';
}
?>
