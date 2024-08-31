<?php
include("../clases/Conexion.php");

$db = new Conexion();

// Obtener las variables de la solicitud AJAX
$nombre = htmlentities($_POST['nombre'], ENT_NOQUOTES, "UTF-8");
$tema = htmlentities($_POST['tema'], ENT_NOQUOTES, "UTF-8");
$video_url = htmlentities($_POST['nombreVideo'], ENT_NOQUOTES, "UTF-8");
$imagen_url = htmlentities($_POST['nombreImagen'], ENT_NOQUOTES, "UTF-8");
$subcategoria = htmlentities($_POST['subcategoria'], ENT_NOQUOTES, "UTF-8");
$parent = htmlentities($_POST['parent'], ENT_NOQUOTES, "UTF-8");
$meta_keywords = htmlentities($_POST['meta_keywords'], ENT_NOQUOTES, "UTF-8");
$meta_description = htmlentities($_POST['meta_description'], ENT_NOQUOTES, "UTF-8");
$short_description = htmlentities($_POST['short_description'], ENT_NOQUOTES, "UTF-8");
$course_description = htmlentities($_POST['description'], ENT_NOQUOTES, "UTF-8");
$requirements = implode(", ", $_POST['requirements']); // Convertir array a cadena
$level = htmlentities($_POST['level'], ENT_NOQUOTES, "UTF-8");

// Validar que todos los campos requeridos estén presentes

// Indicar que se usarán transacciones
$db->beginTransaction();

// Insertar el nuevo registro en la tabla 'course_links'
$sql = $db->prepare("INSERT INTO course_links (title, video_url, category_id, sub_category_id, thumbnail, section, meta_keywords, meta_description, short_description, description, requirements, level) VALUES (:title, :video_url, :category_id, :sub_category_id, :thumbnail, :section, :meta_keywords, :meta_description, :short_description, :description, :requirements, :level)");
$sql->bindParam(':title', $nombre, PDO::PARAM_STR);
$sql->bindParam(':video_url', $video_url, PDO::PARAM_STR);
$sql->bindParam(':category_id', $subcategoria, PDO::PARAM_INT);
$sql->bindParam(':sub_category_id', $parent, PDO::PARAM_INT);
$sql->bindParam(':thumbnail', $imagen_url, PDO::PARAM_STR);
$sql->bindParam(':section', $tema, PDO::PARAM_INT);
$sql->bindParam(':meta_keywords', $meta_keywords, PDO::PARAM_STR);
$sql->bindParam(':meta_description', $meta_description, PDO::PARAM_STR);
$sql->bindParam(':short_description', $short_description, PDO::PARAM_STR);
$sql->bindParam(':description', $course_description, PDO::PARAM_STR);
$sql->bindParam(':requirements', $requirements, PDO::PARAM_STR);
$sql->bindParam(':level', $level, PDO::PARAM_STR);

$sql->execute();

if ($sql) {
    $db->commit();
    $jsondata = array("success" => true, "mensaje" => "Registro correcto :3");
} else {
    $db->rollBack();
    $jsondata = array("success" => false, "mensaje" => "Ocurrió un error al intentar guardar los datos");
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>
