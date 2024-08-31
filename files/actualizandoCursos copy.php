<?php
include("../clases/Conexion.php");

$db = new Conexion();

// Obtener las variables de la función JS
$id_curso = htmlentities($_POST['idVideo'], ENT_NOQUOTES, "UTF-8");
$nombre = htmlentities($_POST['nombre'], ENT_NOQUOTES, "UTF-8");
$video_url = htmlentities($_POST['nombreVideo'], ENT_NOQUOTES, "UTF-8");
$imagen_url = htmlentities($_POST['nombreImagen'], ENT_NOQUOTES, "UTF-8");
$subcategoria = htmlentities($_POST['subcategoria'], ENT_NOQUOTES, "UTF-8");
$parent = htmlentities($_POST['parent'], ENT_NOQUOTES, "UTF-8");

// Indicar que se usarán transacciones
$db->beginTransaction();

// Actualizar el registro en la tabla 'course_links'
$sql = $db->prepare("UPDATE course_links SET title = :title, category_id = :category_id, sub_category_id = :sub_category_id, thumbnail = :thumbnail, video_url = :video_url WHERE id = :id");

$sql->bindParam(':id', $id_curso, PDO::PARAM_INT);
$sql->bindParam(':title', $nombre, PDO::PARAM_STR);
$sql->bindParam(':video_url', $video_url, PDO::PARAM_STR);
$sql->bindParam(':category_id', $subcategoria, PDO::PARAM_INT);
$sql->bindParam(':sub_category_id', $parent, PDO::PARAM_INT);
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
                                                        