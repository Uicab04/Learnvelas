const validarRegistroUsuario = () => {
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let email = document.getElementById('email').value;
    let password1 = document.getElementById('password1').value;
    let password2 = document.getElementById('password2').value;

    if (nombre.length == 0) {
        alertify.error('sssEscriba el nombre del usuario');
        return false;
    }
    if (apellidos.length == 0) {
        alertify.error('ssEscriba los apellidos del usuario');
        return false;
    }
    if (email.length == 0) {
        alertify.error("Escriba el email del usuario");
        return false;
    }
    if (!validarEmail(email)) {
        alertify.error("Escriba un correo electronico válido");
        return false;
    }

    if (password1.length == 0) {
        alertify.error("Escriba la contraseña del usuario");
        return false;
    }
    if (password2.length == 0) {
        alertify.error("Repita la contraseña del usuario");
        return false;
    }

    if (password1 != password2) {
        alertify.error("Las contraseñas no coinciden");
        return false;
    }

    let send = {
        nombre,
        apellidos,
        email,
        password1
    }
    let url = "files/registroUsuario.php";
    let mensaje = "Los datos se guardaron correctamente";
    let ejecutar = "verInicio()";

    ajaxPostControl(url, "registrando", send, mensaje, ejecutar);
}

const verInicio = () => {
    location.href = 'login.html';
}

function verIndex() {
    location.href = 'index.php';
}

const iniciarSesion = () => {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let recordarme = 0;

    if (email.length == 0) {
        alertify.error("Escriba el email");
        return false;
    }
    if (password.length == 0) {
        alertify.error("Escriba la contraseña");
        return false;
    }
    if (document.getElementById('recordarmeCheck').checked == true) {
        recordarme = 1;
    }

    let send = {
        email,
        password,
        recordarme
    }
    let url = "files/validarInicio.php";
    let mensaje = "";
    let ejecutar = "verIndex()";

    console.table(send);

    ajaxPostControl(url, "iniciando", send, mensaje, ejecutar);
}

//const validarEmail = email

const validarEmail = valor => {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(valor)) {
        return true;
    } else {
        return false;
    }
}

const editarUsuario = (idUsuario) => {

    let url = "files/editarUsuario.php";
    let send = {
        idUsuario
    }
    let mensaje = '';
    let ejecutar = '';

    ajaxPostControl(url, "informacion", send, mensaje, ejecutar);
}

const guardarEdicionUsuario = (idUsuario) => {
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let email = document.getElementById('email').value;

    if (nombre.length == 0) {
        alertify.error('aEscriba el nombre del usuario');
        return false;
    }
    if (apellidos.length == 0) {
        alertify.error('Escriba los apellidos del usuario');
        return false;
    }
    if (email.length == 0) {
        alertify.error("Escriba el email del usuario");
        return false;
    }
    if (!validarEmail(email)) {
        alertify.error("Escriba un correo electronico válido");
        return false;
    }

    let url = "files/actualizandoUsuario.php";
    let send = {
        nombre,
        apellidos,
        email,
        idUsuario
    }
    let mensaje = '';
    let ejecutar = '';

    ajaxPostControl(url, "registrando", send, mensaje, ejecutar);
}

const verUsuario = () => {
    let url = "files/verUsuarios.php";
    let send = {

    }
    let mensaje = '';
    let ejecutar = '';

    ajaxPostControl(url, "informacion", send, mensaje, ejecutar);
}



const eliminandoUsuario = idUsuario => {

    alertify.confirm("¿Está seguro de eliminar el usuario?", function(e) {
        if (e) {
            let url = "files/eliminandoUsuario.php";
            let send = {
                idUsuario
            }
            let mensaje = '';
            let ejecutar = 'verUsuarios()';

            ajaxPostControl(url, "informacion", send, mensaje, ejecutar);
        }
    });

}


const eliminandoVideo = (idUsuario3, idCurso) => {
    alertify.confirm("¿Está seguro de eliminar el video?", function(e) {
        if (e) {
            let url = "../../files/eliminandoVideo.php";
            let send = {
                idUsuario3,
                idCurso
            };
            let mensaje = '';
            let ejecutar = `actualizandovideo(${idCurso})`;

            ajaxPostControl(url, "informacion", send, mensaje, ejecutar);
        }




    });
}

function actualizandovideo(idCurso) {
    // Realizar la eliminación del video en segundo plano mediante AJAX
    $.ajax({
        url: "", // Cambia la URL al script que realiza la eliminación del video y redirige
        type: "POST",
        data: { idCurso: idCurso },
        success: function(response) {
            // Una vez que se completa la eliminación del video, recargar la página actual
            location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Manejar errores si la eliminación del video falla
            alert("Error al eliminar el video: " + errorThrown);
        }
    });
}





const verIndexAdmin = () => {
    let url = "files/add_Curse.php";
    let send = {

    }
    let mensaje = '';
    let ejecutar = '';

    ajaxPostControl(url, "admin", send, mensaje, ejecutar);
}


const anadirCursos = () => {
    let url = "files/add/add_couses.php";
    let send = {

    }
    let mensaje = '';
    let ejecutar = '';

    ajaxPostControl(url, "anadircursos", send, mensaje, ejecutar);
}





function validarFormularioProducto() {

    //1
    let nombreProducto = document.getElementById("nombreProducto").value;
   
    //nombre producto es del campo a ver
    if (nombreProducto.length == 0) {
        alert("escriba el nombre del producto");
        return false;
    } 
    //2
    let precio = document.getElementById("precio").value;
    //nombre producto es del campo a ver
    if (precio.length == 0) {
        alert("escriba el precio del producto");
        return false;
    }

     //3
     let descripcion_producto = document.getElementById("descripcion_producto").value;
     //nombre producto es del campo a ver
     if (descripcion_producto.length == 0) {
         alert("escriba descripcion del producto");
         return false;
     }

  //metodo ajax
  let url = "files/guardarProducto.php";
  let mensaje = "";
  let send = {
      nombreProducto,
      precio,
      
  }
  ajaxPostControl(url, "registrado", send, mensaje);
  
}

//valida a informacion 

const eliminarProducto = id => {

    alertify.confirm("¿Está seguro de eliminar el usuario?", function(e) {
        if (e) {
            let url = "files/eliminarProd.php";
            let send = {
                id
            }
            let mensaje = 'sad';
  

            ajaxPostControl(url, "informacion", send, mensaje, ejecutar);
        }
    });

}


// solo hace que aparezca el desplegable
// Agrega este script al final de tu archivo JavaScript
const actualizandoVideo = (idVideo) => {
    // alert(idVideo);
    

    // Abre el modal
    const modal = document.getElementById('myModal');
    modal.style.display = "block";

    // Crea un iframe
    const iframe = document.createElement('iframe');
    iframe.setAttribute('id', 'modalIframe');
    iframe.style.width = '100%';
    iframe.style.height = '100%';
    iframe.style.border = 'none';

    // Agrega el iframe al modal
    modal.appendChild(iframe);

    // Carga el contenido en el iframe
    const iframeDocument = iframe.contentDocument;
    const url = "update_couses.php?id=" + idVideo;
    iframeDocument.open();
    iframeDocument.write('<!DOCTYPE html><html><head><title>Modal Content</title></head><body></body></html>');
    iframeDocument.close();
    iframeDocument.body.innerHTML = 'Cargando...'; // Mensaje de carga opcional
    iframeDocument.body.onload = function() {
        // Contenido cargado, oculta el mensaje de carga si es necesario
        iframeDocument.body.innerHTML = '';
    };
    iframeDocument.body.setAttribute('style', 'margin: 0;'); // Asegura que no haya margen interior en el iframe

    iframe.src = url;

    // Agregar botón de cerrar al modal
    const closeButton = document.createElement('span');
    closeButton.classList.add('close');
    closeButton.innerHTML = '&times;';
    closeButton.onclick = function() {
        modal.style.display = 'none';
    };
    modal.appendChild(closeButton);
};
// Cierra el modal cuando se hace clic fuera de él
window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('myModal')) {
        document.getElementById('myModal').style.display = "none";
    }
});






// const edixtarUsuario = (idUsuario) => {

//     let url = "files/editarUsuario.php";
//     let send = {
//         idUsuario
//     }
//     let mensaje = '';
//     let ejecutar = '';

//     ajaxPostControl(url, "informacion", send, mensaje, ejecutar);
// }




//   const camposAgregarCursos = (nombreVideo, nombreImagen) => {
//     let nombre = document.getElementById('nombre').value;
//     let subcategoriaSelect = document.getElementById('sub_category_id');
//     let subcategoria = subcategoriaSelect.value; // Obtener el valor seleccionado de la subcategoría
//     let parent = subcategoriaSelect.options[subcategoriaSelect.selectedIndex].getAttribute('data-parent'); // Obtener el ID del padre de la subcategoría seleccionada

// // alert(nombreImagen);
//     // alert(nombreImagen);
// // alertyfy.confirm(nombreImagen);
//     let send = {
//         nombre,
//         nombreVideo,
//         nombreImagen,
//         subcategoria,
//         parent
//     }

//     let url = "../../files/registroCursos.php";
//     let mensaje = "Los datos se guardaron correctamente";
//     let ejecutar = "verIndex2()";
//     ajaxPostControl(url, "registrandoCurso", send, mensaje, ejecutar);
// }




function verIndex2() {
    location.href = '../../files/add/add_couses.php';
}

// VER CURSOS DE LOS SUBCURSOSO PARA EDITAR
const ver_curso_temas = (idCurso2) => {
    let url = "files/add/update_couses2.php";
    let send = {
        idCurso2
    };
    let mensaje = '';
    let ejecutar = 'vertemas()';

    ajaxPostControl(url, "vertemas", send, mensaje, ejecutar);
}

function vertemas() {
    location.href = '../files/add/update_couses2.php';
}

// Función para manejar la respuesta de la solicitud AJAX
function handleAjaxResponse(response) {
    var content = JSON.parse(JSON.stringify(response));
    if (content.success == true) {
        // Operación exitosa
        alertify.success("Operación exitosa.");
    } else {
        // La operación falló
        alertify.error(content.mensaje);
    }
}


// VER CURSOS DE LOS SUBCURSOSO PARA EDITAR
const listaVideosCurso = (idCurso3) => {
    // alert(idCurso3)
    let url = "files/listaVideosCursos.php";
    let send = {
        // idCurso3
    };
    let mensaje = '';
    let ejecutar = 'abrirVideosCurso()';

    ajaxPostControl(url, "vervideos", send, mensaje, ejecutar);
}
function abrirVideosCurso() {
    location.href = 'CURSO_videoplayer.php';
}





// 
// comentarios
user_id
const validarRegistroComentario = () => {
    let comment = document.getElementById('comment').value;
    let user_id = document.getElementById('user_id').value;
    let video_id = document.getElementById('video_id').value;
   alert(video_id);

    if (comment.length == 0) {
      alertify.error('Por favor, escribe un comentario');
      return false;
    }
  
    if (user_id.length == 0) {
      alertify.error('Por favor, proporciona el ID de usuario');
      return false;
    }
  
    if (video_id.length == 0) {
      alertify.error('Por favor, proporciona el ID del video');
      return false;
    }
  
    let commentData = {
      comment,
      user_id,
      video_id,
      commentable_type: 'video', // Puedes ajustarlo según tus necesidades
      date_added: new Date().toISOString(),
      last_modified: new Date().toISOString()
    };
  
    let url = "files/registroComentario.php";
    let mensaje = "El comentario se ha guardado correctamente";
    let ejecutar = "resetearComentario()";
  
    ajaxPostControl(url, "guardandoComentario", commentData, mensaje, ejecutar);
  };
  
  const resetearComentario = () => {
    document.getElementById('comment').value = '';
  };