<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
    <link rel="icon" type="image/png" href="./asset/img/favicon-96x96.png"/>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/js/jqwidgets/styles/jqx.base.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <script src="./asset/js/jqwidgets/jqx-all.js"></script>
    <script src="./asset/js/modulos/alumnos.js"></script>
</head>
<body>
    <div class="col-lg-12">
        <center>Listado de Alumnos</center>
        <div id="listadoalumnos"></div>


    </div>


    <!-- modal para mostrar detalles del alumno-->
    <div class="modal fade" id="detallealumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar alumno <span id="mnombrealumno"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <span>Nombre</span> 
                    </div>
                    <div class="col-lg-8">
                        <input type="text" id="minputnombre"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <span>Apellido Paterno</span> 
                    </div>
                    <div class="col-lg-8">
                        <input type="text" id="minputapellidopaterno"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <span>Apellido Paterno</span> 
                    </div>
                    <div class="col-lg-8">
                        <input type="text" id="minputapellidomaterno"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <span>Fecha Nacimiento</span> 
                    </div>
                    <div class="col-lg-8">
                        <div id='minputfecha'></div>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <span>Dirreción</span> 
                    </div>
                    <div class="col-lg-8">
                        <input type="text" id="minputdirrecion"/>
                    </div>
                </div>
                




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="guardar">Guardar</button>
            </div>
            </div>
        </div>
    </div>


</body>
</html>