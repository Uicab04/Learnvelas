<!-- LISTA DE CURSOS -->
                        <?php
                        // Consulta SQL para obtener los videos del tema actual
                        // $db = new Conexion();
                        $videos_sql = "SELECT * FROM course_links WHERE sub_category_id = 21 AND section = $tema";
                        $videos_result = $db->query($videos_sql);

                        // Mostrar los videos del tema actual
                        foreach ($videos_result as $video) :
                        ?>




                        <tbody class="add-courses-section3">

                            <tr>
                                <td>

                                </td>
                                <td>
                                    <strong><a href="#"><?php echo $video['title']; ?></a></strong><br>
                                    <small class="text-white">
                                        Instructor: <b>Nombre del Instructor Ejemplo</b>
                                    </small>
                                </td>
                                <?php
                                // Consulta SQL para obtener los videos del tema actual
                                // $db = new Conexion();
                                $sqlc = "SELECT * FROM category WHERE id = $subCategory";
                                $tiulocurso = $db->query($sqlc);

                                // Mostrar los videos del tema actual
                                foreach ($tiulocurso as $cat) :
                                ?>
                                <td>
                                    <span class="badge badge-dark-lighten">
                                        Nombre <?php echo $cat['name']; ?>
                                    </span>
                                </td>
                                <?php endforeach; ?>
                                <!--  -->
                                <!--  -->
                                <!--  -->
