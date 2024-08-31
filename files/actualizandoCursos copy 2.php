<?php
include("../clases/Conexion.php");

$db = new Conexion();

// Obtener las variables de la función JS
$id_curso = htmlentities($_POST['idVideo'], ENT_NOQUOTES, "UTF-8");
$nombre = htmlentities($_POST['nombre'], ENT_NOQUOTES, "UTF-8");
$subcategoria = htmlentities($_POST['subcategoria'], ENT_NOQUOTES, "UTF-8");
$parent = htmlentities($_POST['parent'], ENT_NOQUOTES, "UTF-8");

// Obtener los nombres de video e imagen actuales del curso
$sql = $db->prepare("SELECT video_url, thumbnail FROM course_links WHERE id = :id");
$sql->bindParam(':id', $id_curso, PDO::PARAM_INT);
$sql->execute();
$curso = $sql->fetch(PDO::FETCH_ASSOC);

$video_url_actual = $curso['video_url'];
$imagen_url_actual = $curso['thumbnail'];

// Verificar si se envió un nuevo nombre de video
if (isset($_POST['nombreVideo']) && !empty($_POST['nombreVideo'])) {
    $video_url = htmlentities($_POST['nombreVideo'], ENT_NOQUOTES, "UTF-8");
} else {
    $video_url = $video_url_actual; // Mantener el nombre actual de video si no se proporciona uno nuevo
}

// Verificar si se envió un nuevo nombre de imagen
if (isset($_POST['nombreImagen']) && !empty($_POST['nombreImagen'])) {
    $imagen_url = htmlentities($_POST['nombreImagen'], ENT_NOQUOTES, "UTF-8");
} else {
    $imagen_url = $imagen_url_actual; // Mantener el nombre actual de imagen si no se proporciona uno nuevo
}

$db->beginTransaction();

// Actualizar el registro en la tabla 'course_links'
$sql = $db->prepare("UPDATE course_links SET title = :title, category_id = :category_id, sub_category_id = :sub_category_id, video_url = :video_url, thumbnail = :thumbnail WHERE id = :id");

$sql->bindParam(':id', $id_curso, PDO::PARAM_INT);
$sql->bindParam(':title', $nombre, PDO::PARAM_STR);
$sql->bindParam(':category_id', $subcategoria, PDO::PARAM_INT);
$sql->bindParam(':sub_category_id', $parent, PDO::PARAM_INT);
$sql->bindParam(':video_url', $video_url, PDO::PARAM_STR);
$sql->bindParam(':thumbnail', $imagen_url, PDO::PARAM_STR);

$sql->execute();

if ($sql) {
    $db->commit();
    $jsondata = array("success" => true, "mensaje" => "Actualización correcta :)");
} else {
    $db->rollBack();
    $jsondata = array("success" => false, "mensaje" => "Ocurrió un error al intentar actualizar los datos");
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>
