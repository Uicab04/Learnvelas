const camposAgregarCursos = () => {
    let nombre = document.getElementById('nombre').value;


 

    alert("Mensaje de prueba");

    let send = {
        nombre
    }
    let url = "../../registroCursos.php";
    let mensaje = "Los datos se guardaron correctamente";
    let ejecutar = "verInicio()";

    ajaxPostControl(url, "registrandoCurso", send, mensaje, ejecutar);
}
const verInicio = () => {
    location.href = 'login.html';
}

function verIndex() {
    location.href = 'index.php';
}
// email
const validarEmail = valor => {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(valor)) {
        return true;
    } else {
        return false;
    }
}

