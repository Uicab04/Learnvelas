<?php
include("../clases/Conexion.php");
$db = new Conexion();

// Obtener las variables de la función JavaScript
$body = htmlentities($_POST['comment'], ENT_NOQUOTES, "UTF-8");
$user_id = $_POST['user_id'];
$video_id = $_POST['video_id'];
$commentable_type = $_POST['commentable_type'];
$date_added = $_POST['date_added'];
$last_modified = $_POST['last_modified'];

// console.log($body, $user_id, $video_id, $commentable_type, $date_added, $last_modified);
// Iniciar transacción
$db->beginTransaction();

// Preparar y ejecutar la consulta de inserción
$sql = $db->prepare("INSERT INTO comment (body, user_id, video_id, commentable_type, date_added, last_modified) 
                    VALUES (:body, :user_id, :video_id, :commentable_type, :date_added, :last_modified)");
$sql->bindParam(':body', $body, PDO::PARAM_STR);
$sql->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$sql->bindParam(':video_id', $video_id, PDO::PARAM_INT);
$sql->bindParam(':commentable_type', $commentable_type, PDO::PARAM_STR);
$sql->bindParam(':date_added', $date_added, PDO::PARAM_STR);
$sql->bindParam(':last_modified', $last_modified, PDO::PARAM_STR);

if ($sql->execute()) {
    $db->commit();
    $jsondata = array("success" => true, "mensaje" => "Comentario guardado correctamente");
} else {
    $db->rollBack();
    $jsondata = array("success" => false, "mensaje" => "Ocurrió un error al intentar guardar el comentario");
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>