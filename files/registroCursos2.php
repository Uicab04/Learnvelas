<?php
include("../clases/Conexion.php");

$db = new Conexion();

// Obtener las variables de la función JS
$nombre = htmlentities($_POST['nombre'], ENT_NOQUOTES, "UTF-8");
$tema = htmlentities($_POST['tema'], ENT_NOQUOTES, "UTF-8");

$video_url = htmlentities($_POST['nombreVideo'], ENT_NOQUOTES, "UTF-8"); // Obtener el nombre del video desde la solicitud AJAX
$imagen_url = htmlentities($_POST['nombreImagen'], ENT_NOQUOTES, "UTF-8");

$subcategoria = htmlentities($_POST['subcategoria'], ENT_NOQUOTES, "UTF-8"); // Obtener el nombre del video desde la solicitud AJAX
$parent = htmlentities($_POST['parent'], ENT_NOQUOTES, "UTF-8"); // Obtener el nombre del video desde la solicitud AJAX

// Validar el nombre del video
// if (empty($video_url)) {
//     $jsondata = array("success" => false, "mensaje" => "El nombre del video no puede estar vacío");
//     header('Content-type: application/json; charset=utf-8');
//     echo json_encode($jsondata);
//     exit();
// }

// Indicar que se usarán transacciones
$db->beginTransaction();

// Insertar el nuevo registro en la tabla 'course_links'
$sql = $db->prepare("INSERT INTO course_links (title, video_url, category_id, sub_category_id, thumbnail, section) VALUES (:title, :video_url, :category_id, :sub_category_id, :thumbnail, :section)");
$sql->bindParam(':category_id', $subcategoria, PDO::PARAM_INT);
$sql->bindParam(':sub_category_id', $parent, PDO::PARAM_INT);
$sql->bindParam(':title', $nombre, PDO::PARAM_STR);
$sql->bindParam(':section', $tema, PDO::PARAM_INT);
$sql->bindParam(':video_url', $video_url, PDO::PARAM_STR);
$sql->bindParam(':thumbnail', $imagen_url, PDO::PARAM_STR);


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
