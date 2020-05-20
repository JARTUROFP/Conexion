<?php
include_once 'app/Conexion.php';
include_once 'app/Usuario.php';
$titulo ='Secretaria de Finanzas';
/*include_once 'plantillas/documento-declaracion.inc.php';*/
/*include_once 'plantillas/navbar.inc.php';*/
?>



<div class="container">
    <div class="jumbotron">
        <h1 style="color: #00b140;">Secretaria de Finanzas</h1>
      
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Busqueda

                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="search" class="form-control " placeholder="¿Que buscas?">

                            </div>
                            <button class="form-control">Buscar </button>

                        </div>
                    </div>
                </div>

            </div>
            <div class=" row"> 
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>       Filtro

                        </div>
                        <div class="panel-body">
                            que hay
                        </div>


                    </div>


                </div>
            </div>

            <div class=" row"> 
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>    Fecha

                        </div>
                        <div class="panel-body">

                        </div>


                    </div>


                </div>
            </div>

        </div>
        <div class="col-md-8">

            <div class="panel panel-default"> 
                <div class="panel-heading">
                    <h8> <span class="glyphicon glyphicon-off" aria-hidden="true"></span>    Ultimas entradas
                    </h8>
                </div>
                <div class="panel-body"> 

                    <p> Todavia no hay entradas
                        </p> 
                </div>
            </div>


        </div>

    </div>

</div>
