<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Modificar evento</title>
</head>

<body>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Modulo Administracion
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="index.php?c=Categoria">Categoria</a></li>
            <li class="active">Actualizar</li>
        </ol>
    </section>
    <?php
    if (!isset($mod)==''){
    ?>
    <section class="content">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="box">
                    <div class='box-header with-border'>
                        <h3 class='box-title'><i class="fa fa-briefcase"></i> Actualizar CateEventogoria</h3>
                    </div>
                    <div class="box-body">
                        <form id="frmActualizarEvento" action="?c=Categoria&a=Actualizar" method="post"
                            enctype="multipart/form-data" role="form">
                            <input type="hidden" name="id"
                                value="<?=$mod->id?>" />
                            <div class="form-group col-md-12">
                                <label>Titulo</label>
                                <input type="text" name="titulo" value="<?=$mod->titulo?>"
                                    class="form-control" placeholder="" required />
                            </div>
                            <div class="form-group col-md-12">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" value="<?=$mod->descripcion?>"
                                    class="form-control" placeholder="" required />
                            </div>
                            <div class="form-group col-md-12">
                                <label>Fecha Inicio</label>
                                <input type="text" name="fecha_inicio" value="<?=$mod->fecha_inicio?>"
                                    class="form-control" placeholder="" required />
                            </div>
                            <div class="form-group col-md-12">
                                <label>Fecha Fin</label>
                                <input type="text" name="fecha_fin" value="<?=$mod->fecha_fin?>"
                                    class="form-control" placeholder="" required />
                            </div>
                            <div class="col-md-12" style="margin-top:2em;">
                                <div class="col-md-6 col-sm-12">
                                    <button type="button" id="btnSubmit" class="btn btn-primary col-md-12 col-xs-12"><i
                                            class="fa fa-save"></i> Actualizar</button>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <a href="index.php?c=Categoria" class="btn btn-danger col-md-12 col-xs-12 "><i
                                            class="fa fa-times-circle"></i> Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</body>
<script>
	
	$(document).ready(function() {
		
		$("#btnSubmit").click(function(event) {

			bootbox.dialog({
	            message: "¿Estas seguro de actualizar?",
	            title: "Actualizar Evento",
	            buttons: {
	                main: {
	                    label: "Actualizar",
	                    className: "btn-primary",
	                    callback: function() {
	                        //console.log('Eliminado al usuario');
	                              $( "#frmActualizarEvento" ).submit();                  
	                    }
	                },
	                danger: {
	                    label: "Cancelar",
	                    className: "btn-danger",
	                    callback: function() {
	                        bootbox.hideAll();
	                    }
	                }
	            }
        	}); 
		});	
	});


	
</script>
<?php }/*--- END REQUESt*/ ?>
</html>