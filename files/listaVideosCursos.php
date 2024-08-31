
<?php
include("clases/Conexion.php");
?>

<nav id="menu-derecho">
      <?php 
      $db = new Conexion();
// Consultar solo el primer elemento de la lista
$sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . ""; 

$result = $db->query($sql);
 ?>
<!-- <div id="descripcion-video"></div> -->

  
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