<?php
// Incluir la clase de conexión a la base de datos
include("../../clases/Conexion.php");

// Crear una nueva instancia de la clase Conexion
$db = new Conexion();

// Ruta donde se guardarán las imágenes
$targetDirectory = "../../images/categorias/";

// Verificar si se ha enviado un archivo
if(isset($_FILES["category_thumbnail"])) {
    $file = $_FILES["category_thumbnail"];

    // Verificar si hay errores en la carga del archivo
    if ($file["error"] !== UPLOAD_ERR_OK) {
        echo "Error al cargar la imagen.";
        exit;
    }

    // Verificar si el archivo es una imagen
    $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        exit;
    }

    // Verificar el tamaño máximo del archivo (20 MB)
    $maxSize = 20 * 1024 * 1024; // 20 MB
    if ($file["size"] > $maxSize) {
        echo "Lo siento, la imagen es demasiado grande (máximo 20 MB).";
        exit;
    }

    // Generar un nombre único para el archivo
    $fileName = uniqid() . '.' . $imageFileType;

    // Ruta completa del archivo de destino
    $targetFile = $targetDirectory . $fileName;

    // Mover el archivo desde el directorio temporal al directorio de destino
    if(move_uploaded_file($file["tmp_name"], $targetFile)) {
        // Enviar el nombre del archivo al cliente con htmlspecialchars
        echo htmlspecialchars(basename($fileName));
    } else {
        echo "Lo siento, hubo un error al cargar la imagen.";
    }
} else {
    echo "Por favor, seleccione una imagen.";
}
?>
