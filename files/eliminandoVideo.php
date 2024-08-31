<?php
include("../clases/Conexion.php");

$db = new Conexion();

$idUsuario3 = $_POST["idUsuario3"];

//indicar que se usaran transacciones
$db->beginTransaction();

$sql = $db->query("DELETE FROM course_links WHERE id = ".$idUsuario3." LIMIT 1");

if($sql){
    $db->commit();
    $jsondata = array("success" => true, 
                        "mensaje" => "Usuario eliminado correctamente");
}
else{
    $db->rollBack();
    $jsondata = array("success" => false, 
                        "mensaje" => "Ocurrió un error al intentar eliminar al usuario");
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>