const camposAgregarCursos = (nombreVideo, nombreImagen) => {
    let nombre = document.getElementById('nombre').value;
    let tema = document.getElementById('theme_selector').value;

    let subcategoriaSelect = document.getElementById('sub_category_id');
    let subcategoria = subcategoriaSelect.value;
    let parent = subcategoriaSelect.options[subcategoriaSelect.selectedIndex].getAttribute('data-parent');

    let meta_keywords = document.getElementById('meta_keywords');
    let meta_description = document.getElementsByName('meta_description')[0]; // Utiliza getElementsByName para obtener el primer elemento con ese nombre
    
    let short_description = document.getElementById('short_description').value;
    let description = document.getElementById('description').value;

    // Obtener los valores de los requisitos
    let requirementInputs = document.querySelectorAll('[name="requirements[]"]');
    let requirements = Array.from(requirementInputs).map(input => input.value);

    let level = document.getElementById('level').value;

    // Verifica si los elementos existen antes de acceder a sus valores
    if (nombre && tema && nombreVideo && nombreImagen && subcategoria && parent && meta_keywords && meta_description && short_description && description && requirements && level) {
        let send = {
            nombre,
            tema,
            nombreVideo,
            nombreImagen,
            subcategoria,
            parent,
            meta_keywords: meta_keywords.value,
            meta_description: meta_description.value,
            short_description,
            description,
            requirements,
            level
        };

        let url = "../../files/registroCursos.php";
        let mensaje = "Los datos se guardaron correctamente";
        let ejecutar = "verIndex2()";
        ajaxPostControl(url, "registrandoCurso", send, mensaje, ejecutar);
    } else {
        // Encuentra los campos que faltan y muestra un mensaje de error
        let camposFaltantes = [];
        if (!nombre) camposFaltantes.push("Nombre");
        if (!tema) camposFaltantes.push("Tema");
        if (!nombreVideo) camposFaltantes.push("Nombre del Video");
        if (!nombreImagen) camposFaltantes.push("Nombre de la Imagen");
        if (!subcategoria) camposFaltantes.push("Subcategoría");
        if (!parent) camposFaltantes.push("Parent");
        if (!meta_keywords) camposFaltantes.push("Meta Keywords");
        if (!meta_description) camposFaltantes.push("Meta Description");
        if (!short_description) camposFaltantes.push("Short Description");
        if (!description) camposFaltantes.push("Description");
        if (!requirements) camposFaltantes.push("Requirements");
        if (!level) camposFaltantes.push("Level");

        console.error('Error: No se encontraron todos los elementos necesarios');
        console.error('Campos faltantes:', camposFaltantes.join(', '));
    }
}



const camposAgregarCursos2 = (nombreVideo, nombreImagen) => {
    let nombre = document.getElementById('nombre').value;
    let tema = document.getElementById('theme_selector').value;

    let subcategoriaSelect = document.getElementById('sub_category_id');
    let subcategoria = subcategoriaSelect.value; // Obtener el valor seleccionado de la subcategoría
    let parent = subcategoriaSelect.options[subcategoriaSelect.selectedIndex].getAttribute('data-parent'); // Obtener el ID del padre de la subcategoría seleccionada

// agregado depues para guradar el resto de los datos :_3
// short_description
// course_description
// level
// website_keywords




// alert(tema);
    // alert(nombreImagen);
// alertyfy.confirm(nombreImagen);
    let send = {
        nombre,
        tema,
        
        nombreVideo,
        nombreImagen,
        subcategoria,
        parent
    }

    let url = "../../files/registroCursos.php";
    let mensaje = "Los datos se guardaron correctamente";
    let ejecutar = "verIndex2()";
    ajaxPostControl(url, "registrandoCurso", send, mensaje, ejecutar);
}



const verInicio = () => {
    location.href = '../../index.php';
}

function verIndex() {
    location.href = 'index.php';
}

function verIndex2() {
    location.href = '../../files/add/add_couses.php';
}

// email
const validarEmail = valor => {
    if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(valor)) {
        return true;
    } else {
        return false;
    }
}

// agregar
// const camposAgregarCursos = (nombreVideo, nombreImagen) => {
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


// actualizar usuario

// const camposActualizarCursos = (nombreVideo, nombreImagen) => {
//     let nombre = document.getElementById('nombre').value;
//     let apellidos = document.getElementById('apellidos').value;
//     let email = document.getElementById('email').value;

//     if (nombre.length == 0) {
//         alertify.error('Escriba el nombre del usuario');
//         return false;
//     }
//     if (apellidos.length == 0) {
//         alertify.error('Escriba los apellidos del usuario');
//         return false;
//     }
//     if (email.length == 0) {
//         alertify.error("Escriba el email del usuario");
//         return false;
//     }
//     if (!validarEmail(email)) {
//         alertify.error("Escriba un correo electronico válido");
//         return false;
//     }

//     let url = "files/actualizandoUsuario.php";
//     let send = {
//         nombre,
//         apellidos,
//         email,
//         idUsuario
//     }
//     let mensaje = '';
//     let ejecutar = '';

//     ajaxPostControl(url, "registrando", send, mensaje, ejecutar);
// }


const camposActualizarCursos = (nombreVideo, nombreImagen, idVideo) => {
    // alert(idVideo);
    let nombre = document.getElementById('nombre').value;
    let subcategoriaSelect = document.getElementById('sub_category_id');
    let subcategoria = subcategoriaSelect.value; // Obtener el valor seleccionado de la subcategoría
    let parent = subcategoriaSelect.options[subcategoriaSelect.selectedIndex].getAttribute('data-parent'); // Obtener el ID del padre de la subcategoría seleccionada
    // alert(nombreVideo);
    // alert(parent)
    // alert(nombreImagen);
    // alert(nombreImagen);
// alertyfy.confirm(nombreImagen);
    let send = {
        idVideo,
        nombre,
        nombreVideo,
        nombreImagen,
        subcategoria,
        parent
    }

    let url = "../../files/actualizandoCursos.php";
    let mensaje = "Los datos se guardaron correctamente";
    let ejecutar = "verIndex2()";
    ajaxPostControl(url, "registrandoCurso", send, mensaje, ejecutar);
}





