<?php
include("../../clases/Conexion.php");

$db = new Conexion();

$targetDirectory = "../../videos/"; // Carpeta donde se guardarán los videos
$targetFile = $targetDirectory . basename($_FILES["videoS"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Verificar si el archivo ya existe
if (file_exists($targetFile)) {
    echo "El archivo ya existe.";
    $uploadOk = 0;
}

// Limitar el tamaño del archivo si es necesario
if ($_FILES["videoS"]["size"] > 500000000) { // Cambiar el límite según tus necesidades
    echo "El archivo es demasiado grande.";
    $uploadOk = 0;
}

// Permitir ciertos formatos de archivo
if($videoFileType != "mp4" && $videoFileType != "avi" && $videoFileType != "mov"
&& $videoFileType != "mpeg" && $videoFileType != "wmv" ) {
    echo "Solo se permiten videos en formato MP4, AVI, MOV, MPEG, y WMV.";
    $uploadOk = 0;
}

// Verificar si $uploadOk está establecido en 0 por algún error
if ($uploadOk == 0) {
    echo "Tu archivo no fue cargado.";
// Si todo está bien, intenta cargar el archivo
} else {
    if (move_uploaded_file($_FILES["videoS"]["tmp_name"], $targetFile)) {
        echo htmlspecialchars(basename($_FILES["videoS"]["name"]));
    } else {
        echo "Lo sentimos, hubo un error al cargar tu video.";
    }
}
?>
