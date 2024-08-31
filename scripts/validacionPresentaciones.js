const enviarDatosPresentacion = (nombreImagen) => {
  // Obtener los valores de los campos del formulario
  const titulo = document.getElementById("titulo").value;
  const descripcion = document.getElementById("descripcion").value;
  const objetivos = document.getElementById("objetivos").value;
  let link = document.getElementById("link").value;
  // alert("nombreImagen");
  // alertify.success("El curso se ha agregado correctamente3")
  // Encontrar la posición de "/edit"
  const indiceEdit = link.indexOf("/edit");
  
  // Obtener el enlace sin la parte después de "/edit"
  if (indiceEdit !== -1) {
      link = link.substring(0, indiceEdit);
  }
  
  // Crear un objeto con los datos a enviar
  const datos = {
    titulo,
    descripcion,
    objetivos,
    link,
    nombreImagen
  };

  // Definir la URL del archivo PHP que procesará los datos
  const url = "../registroPresentaciones.php";

  // Mensaje a mostrar al usuario en caso de éxito
  const mensaje = alertify.success("El curso se ha agregado correctamente");

  // Función a ejecutar después de enviar los datos
  const ejecutar = "";

  // Enviar los datos al servidor usando una función ajaxPostControl (debes definirla o usar una alternativa como fetch)
  ajaxPostControl(url, "agregandoPresentaciones", datos, mensaje, ejecutar);
};
