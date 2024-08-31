<?php
include("../clases/Conexion.php");

$db = new Conexion();

//obtener las variables del formulario
$idUsuario= htmlentities($_POST['idUsuario'],ENT_NOQUOTES,"UTF-8");
$nombre = htmlentities($_POST['nombre'],ENT_NOQUOTES,"UTF-8");
$apellidos = htmlentities($_POST['apellidos'],ENT_NOQUOTES,"UTF-8");
$edad = htmlentities($_POST['edad'],ENT_NOQUOTES,"UTF-8");
$genero = htmlentities($_POST['genero'],ENT_NOQUOTES,"UTF-8");
$diagnostico = htmlentities($_POST['diagnostico'],ENT_NOQUOTES,"UTF-8");
$tratamiento = htmlentities($_POST['tratamiento'],ENT_NOQUOTES,"UTF-8");
$alergias = htmlentities($_POST['alergias'],ENT_NOQUOTES,"UTF-8");
$medicamentosActuales = htmlentities($_POST['medicamentosActuales'],ENT_NOQUOTES,"UTF-8");
$fechaRegistro = date("Y-m-d");

// $idUsuario = $_SESSION['usuario_id'];
//indicar que se usaran transacciones
$db->beginTransaction();

//preparar la consulta
$sql = $db->prepare("INSERT INTO expedientes_medicos (usuario, nombre, apellidos, edad, genero, diagnostico, tratamiento, alergias, medicamentos_actuales, fecha_creacion) VALUES (:idUsuario, :nombre, :apellidos, :edad, :genero, :diagnostico, :tratamiento, :alergias, :medicamentosActuales, :fechaRegistro)");
$sql->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
$sql->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$sql->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
$sql->bindParam(':edad', $edad, PDO::PARAM_STR);
$sql->bindParam(':genero', $genero, PDO::PARAM_STR);
$sql->bindParam(':diagnostico', $diagnostico, PDO::PARAM_STR);
$sql->bindParam(':tratamiento', $tratamiento, PDO::PARAM_STR);
$sql->bindParam(':alergias', $alergias, PDO::PARAM_STR);
$sql->bindParam(':medicamentosActuales', $medicamentosActuales, PDO::PARAM_STR);
$sql->bindParam(':fechaRegistro', $fechaRegistro, PDO::PARAM_STR);


$sql->execute();

if($sql){
    $db->commit();
    $jsondata = array("success" => true,
    "mensaje" => "Los datos se guardaron correctamente");
    }
    else{
    $db->rollBack();
    $jsondata = array("success" => false,
    "mensaje" => "Ocurrió un error al intentar guardar los datos");
    }
    
    // enviar respuesta en formato JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata); 
exit();
          

