<?php
// Incluir la clase de conexión a la base de datos
include("../clases/Conexion.php");

// Crear una nueva instancia de la clase Conexion
$db = new Conexion();

// Obtener los valores enviados por la función JavaScript
$titulo = htmlentities($_POST['titulo'], ENT_QUOTES, "UTF-8");
$descripcion = htmlentities($_POST['descripcion'], ENT_QUOTES, "UTF-8");
$objetivos = htmlentities($_POST['objetivos'], ENT_QUOTES, "UTF-8");
$link = htmlentities($_POST['link'], ENT_QUOTES, "UTF-8");
$nombreImagen = htmlentities($_POST['nombreImagen'], ENT_QUOTES, "UTF-8");

// Iniciar una transacción
$db->beginTransaction();

try {
    // Preparar la consulta SQL para insertar el curso
    $sql = $db->prepare("INSERT INTO presentaciones (titulo, descripcion, objetivos, link, nombre_imagen) VALUES (:titulo, :descripcion, :objetivos, :link, :nombreImagen)");

    // Vincular los parámetros a las variables
    $sql->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $sql->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $sql->bindParam(':objetivos', $objetivos, PDO::PARAM_STR);
    $sql->bindParam(':link', $link, PDO::PARAM_STR);
    $sql->bindParam(':nombreImagen', $nombreImagen, PDO::PARAM_STR);
// alertify("La presentación se ha agregado correctamente");
    // Ejecutar la consulta
    $sql->execute();

    // Verificar si se insertó correctamente
    if ($sql) {
        // Confirmar la transacción
        $db->commit();
        $jsondata = array("success" => true, "mensaje" => "La presentación se ha agregado correctamente");
    } else {
        // Error al insertar el curso
        $db->rollBack();
        $jsondata = array("success" => false, "mensaje" => "Error al agregar el curso");
    }
} catch (PDOException $e) {
    // Error en la transacción
    $db->rollBack();
    $jsondata = array("success" => false, "mensaje" => "Error en la transacción: " . $e->getMessage());
}

// Enviar la respuesta al cliente en formato JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata);
exit();
?>
