<!DOCTYPE html>
<!-- saved from url=(0081)http://localhost/2/Online_Learning_Management_System/admin/course_form/add_course -->
<html class="translated-ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- all the meta tags -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- all the css files -->
    <!-- third party css -->
    <link href="./add_couses_files/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/responsive.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/buttons.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/select.bootstrap4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/summernote-bs4.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/fullcalendar.min.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/dropzone.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->
    <!-- App css -->
    <link href="./add_couses_files/app.min.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/icons.min.css" rel="stylesheet" type="text/css">

    <link href="./add_couses_files/main.css" rel="stylesheet" type="text/css">

    <!-- font awesome 5 -->
    <link href="./add_couses_files/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="./add_couses_files/fontawesome-iconpicker.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./add_couses_files/bootstrap-tagsinput.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="./add_couses_files/jquery-3.3.1.min.js.descarga" charset="utf-8"></script>
    <script src="./add_couses_files/onDomChange.js.descarga"></script>
    <!--Alertas-->
    <link href="../../alertifyjs/css/alertify.css" rel="stylesheet">
    <link href="c../../c:\laragon\www\E\E\css c:\laragon\www\E\E\css\sb-admin-2.min.cssc:\laragon\www\E\E\css c:\laragon\www\E\E\css\sb-admin-2.min.cssss/sb-admin-2.min.css" rel="stylesheet">

<!--Alertas-->
<link href="alertifyjs/css/alertify.css" rel="stylesheet">   
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./add_couses_files/m=el_main_css">
</head>

<body>

                            <form class="user" name="registroUsuario">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="apellidos" name="apellidos" placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Correo electrónico">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" id="password1" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" id="password2" placeholder="Repetir contraseña">
                                    </div>
                                </div>
                                    <input type="button" value="Registrar cuenta" onclick="camposAgregarCursos()" class="btn btn-light btn-user btn-block">
                                <hr>
                                
                            </form>
                               <div id="registrandoCurso"></div>
                            <hr>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>


    <!-- 


 -->




    <script src="../../scripts/ajax.js"></script>
    <script src="../../scripts/validacionCursos.js"></script>
    <script src="../../alertifyjs/alertify.min.js"></script>


</body>

</html>