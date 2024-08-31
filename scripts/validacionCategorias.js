
const checkRequiredFields = (nombreImagen) => {
    // Obtener los valores de los campos del formulario
    const nombre = document.getElementById("name").value;
    const codigo = document.getElementById("code").value;
    const subCategoryId = document.getElementById("sub_category_id").value; // Obtener el valor de la categoría seleccionada
    alert(nombreImagen);
    // const parent = document.getElementById("parent").value;
    // const thumbnail = document.getElementById("category_thumbnail").files[0];
  
    // Validar que los campos obligatorios no estén vacíos
    // if (!nombre || !codigo) {
    //   // Mostrar mensaje de error
    //   alert("Los campos 'Nombre' y 'Código' son obligatorios");
    //   return;
    // }
  
    // Si se seleccionó una miniatura, validar que sea una imagen
    // if (thumbnail && !/\.(jpg|jpeg|png|gif)$/i.test(thumbnail)) {
    //   alert("La miniatura debe ser una imagen en formato JPG, JPEG, PNG o GIF");
    //   return;
    // }
  
    // Preparar los datos para enviar
    const send = {
      nombre,
      codigo,
      subCategoryId,
      nombreImagen
      // parent,
      // thumbnail
    };
  
    // Definir la URL del archivo PHP que procesará el formulario
    const url = "../../files/registroCategorias.php";
  
    // Mensaje a mostrar al usuario en caso de éxito
    const mensaje = "La categoría se ha creado correctamente";
  
    // Función a ejecutar después de enviar el formulario
    const ejecutar = "";
  
    // Enviar los datos al servidor usando la función ajaxPostControl
    ajaxPostControl(url, "registrandoCategoria", send, mensaje, ejecutar);
  }
  





