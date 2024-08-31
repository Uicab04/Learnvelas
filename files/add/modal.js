
// modal.js

// Obtener el elemento contenedor donde se adjuntará el Shadow DOM
const modalContainer = document.getElementById('myModal');

// Crear un nuevo Shadow DOM para el contenedor
const shadowRoot = modalContainer.attachShadow({ mode: 'open' });

// Definir el contenido HTML dentro del Shadow DOM
shadowRoot.innerHTML = `
  <style>
    /* Estilos para el contenedor modal */
    .modal-content {
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
  </style>
  
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="informacionEditar" class="form-container">
      <!-- Contenido del formulario -->
    </div>
  </div>
`;

// Añadir comportamiento a los elementos si es necesario
const closeButton = shadowRoot.querySelector('.close');
closeButton.addEventListener('click', () => {
  modalContainer.style.display = 'none'; // O cualquier otro comportamiento que desees
});
