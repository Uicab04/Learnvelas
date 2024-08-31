<?php
// Incluir la clase de conexión a la base de datos
include("../clases/Conexion.php");

// Crear una nueva instancia de la clase Conexion
$db = new Conexion();

// Obtener las variab les enviadas por la función JavaScript
$nombre = htmlentities($_POST['nombre'], ENT_NOQUOTES, "UTF-8");
$codigo = htmlentities($_POST['codigo'], ENT_NOQUOTES, "UTF-8");
$subCategoryId = htmlentities($_POST['subCategoryId'], ENT_NOQUOTES, "UTF-8");
$nombreImagen = htmlentities($_POST['nombreImagen'], ENT_NOQUOTES, "UTF-8");


// Iniciar una transacción
$db->beginTransaction();

// Preparar la consulta SQL para insertar la categoría
$sql = $db->prepare("INSERT INTO category (code, name, parent, thumbnail) VALUES (:code, :name, :parent, :thumbnail)");

// Vincular los parámetros a las variables
$sql->bindParam(':code', $codigo, PDO::PARAM_STR);
$sql->bindParam(':name', $nombre, PDO::PARAM_STR);
$sql->bindParam(':parent', $subCategoryId, PDO::PARAM_STR);
$sql->bindParam(':thumbnail', $nombreImagen, PDO::PARAM_STR);

// Ejecutar la consulta
$sql->execute();

if ($sql) {
  // Registrar la transacción
  $db->commit();
  $jsondata = array("success" => true, "mensaje" => "Categoría creada correctamente");
} else {
  // Error al insertar la categoría
  $db->rollBack();
  $jsondata = array("success" => false, "mensaje" => "Error al crear la categoría");
}

// Enviar la respuesta al cliente en formato JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>
