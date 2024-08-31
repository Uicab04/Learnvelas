<?php
include("../../clases/Conexion.php");


$db = new Conexion();


// Verifica si se proporcionó el parámetro 'id' en la URL
if (isset($_GET['id'])) {
    // Obtiene el valor del parámetro 'id'
    $idCurso = $_GET['id'];
    
    // Utiliza el ID del curso como necesites
    echo "ID del curso: " . $idCurso;
} else {
    // Si no se proporcionó el parámetro 'id', muestra un mensaje de error o redirige a otra página
    echo "Error: No se proporcionó el ID del curso.";
}




?>



     
<div class="row">
    <div class="col-xl-12">
        <div class="">
            <?php 
            $sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " GROUP BY section ORDER BY section"; 
            $result = $db->query($sql);
            ?>

            <?php foreach ($result as $m) : 
                $tema = $m['section'];
                $category = $m['sub_category_id'];
                $subCategory = $m['category_id'];
                
                // Consulta SQL para obtener los videos del tema actual
                $videos_sql = "SELECT * FROM course_links WHERE category_id = " . $idCurso . " AND section = '$tema'";
                $videos_result = $db->query($videos_sql);

                // Verificar si hay resultados para este tema
                if ($videos_result && $videos_result->rowCount() > 0) {
            ?>
            <div class="add-courses-section2">
                <h4 class="mb-3 header-title">
                    TEMA <a href="#"><?php echo $tema; ?></a>
                </h4>

                <div class="table-responsive-sm mt-4">
                    <table id="course-datatable" class="table table-striped dt-responsive nowrap" width="100%" data-page-length='25'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Subcategoría</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <?php foreach ($videos_result as $video) : ?>
                        <tbody class="add-courses-section3">
                            <tr>
                                <td></td>
                                <td>
                                    <strong><a href="#"><?php echo $video['title']; ?></a></strong><br>
                                    <small class="text-white">
                                        Instructor: <b>Nombre del Instructor Ejemplo</b>
                                    </small>
                                </td>
                                <?php
                                // Consulta SQL para obtener la categoría del curso actual
                                $sqlc = "SELECT * FROM category WHERE id = $subCategory";
                                $tiulocurso = $db->query($sqlc);

                                // Mostrar la categoría del curso actual
                                foreach ($tiulocurso as $cat) :
                                ?>
                                <td>
                                    <span class="badge badge-dark-lighten">
                                        Nombre <?php echo $cat['name']; ?>
                                    </span>
                                </td>
                                <td>
                                   descripcion
                                </td>
                                <?php endforeach; ?>
                                <!-- Aquí van las otras columnas -->
                                <td>
                                    <div class="dropright dropright">
                                        
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        
                                        <ul class="dropdown-menu">
                                            
                                            <li><a class="dropdown-item" href="#">Ver Curso en el Frontend</a></li>
                                            <li><a class="dropdown-item" href="javascript:actualizandoVideo(<?php echo $video["id"]; ?>, <?php echo $idCurso; ?>)">Editar Este Curso</a></li>
     
                                            <li><a class="dropdown-item" href="javascript:eliminandoVideo(<?php echo $video["id"]; ?>)">Eliminar
                                                    Curso</a></li>
                                                    <hr class="sidebar-divider" style="display: none;">
                                            <div class="row" id="editarPerfil">
                                            <div id="informacion"></div>
                    
                                                    
                                    
                                            
                                        </ul>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <?php 
                } // Fin del if
            endforeach; 
            ?>
        </div>
    </div>
</div>

<!-- FIN DEL CONTENIDO -->


        
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Agrega Bootstrap si aún no lo has hecho -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script src="../../scripts/ajax.js"></script>
<script src="../../scripts/validacion.js"></script>
<script src="../../alertifyjs/alertify.min.js"></script>
                                                     
<!-- <script src="../../scripts/validacionCursos.js"></script> -->




</body>
</html>