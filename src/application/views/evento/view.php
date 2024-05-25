<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.css">
    <meta charset="utf-8" />
    <title>Vista Evento</title>
</head>

<body>
    <section class="content-header">
        <h1>
            Modulo Evento
        </h1>
        <ol class="breadcrumb">
            <!--<li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>-->
            <li class="active">Evento</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class='box-header with-border'>
                        <h3 class='box-title'><i class="fa fa-briefcase"></i> Lista de Evento</h3>
                        <a class="btn btn-sm btn-primary pull-right" href="<?=base_url("evento/create");?>">Registrar Evento</a>
                    </div>
                    <div class="box-body box-body_table">
                  	<table id="TablaEntidad" class="table table-bordered table-hover dataTable no-footer" width="100%">
	                    <thead>
	                      	<tr>                      
		                    	<th>ID</th>                    
			                    <th style="vertical-align: middle;">Titulo</th>
								<th style="vertical-align: middle;">Descripcion</th>
								<th style="vertical-align: middle;">Fecha Inicio</th>
                                <th style="vertical-align: middle;">Fecha Fin</th>
                                <th style="vertical-align: middle;">Acciones</th>
	                     	</tr>
	                    </thead>
	                    <tbody>
	                    	<?php foreach ($ver as $fila): ?>
	                    	<tr>
	                    		<td><?= $fila->id; ?></td>
	                    		<td><?= $fila->titulo; ?></td>
                                <td><?= $fila->descripcion; ?></td>
                                <td><?= $fila->fecha_inicio; ?></td>
                                <td><?= $fila->fecha_fin; ?></td>
                                <td class="a_center">
                                    <a class="btn btn-primary btn-xs" href="<?=base_url("evento/mod/$fila->id")?>">
                                   		<i class="fa fa-pencil"></i>   
                               		</a>
                               		<a class="btn btn-danger btn-xs" href="<?=base_url("evento/eliminar/$fila->id"); ?>">
                                   		<i class="fa fa-trash"></i>   
                               		</a>
                                </td>
	                    	</tr>
	                    	<?php endforeach; ?>
	                    </tbody>
                	</table>                    
                </div>         
                </div>
            </div>
    </section>
</body>
</html>