<?php
require 'header.php';
?>
<style type="text/css">
.material-icons{
     font-size: 125%;
 }                    
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<div class="content-wrapper">
 <section class="content">
    <div class="row">
     <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Productos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped">
                          <thead>
                            <tr style='background:#383B37; color:#FFF;'>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            </tr>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                          </tfoot>
                        </table>
                    </div>
                   <div class="panel-body" id="formularioregistros">
                       <form  name="formulario" id="formulario" method="POST">
                             <div  class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <label>Nombre:</label>
                                 <input type="hidden" name="id_producto" id="id_producto">
                                 <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                             </div>
                             <div  class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <label>Descripción:</label>       
                                 <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripción" >
                             </div>
                             <div  class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <label>Tipo:</label>
                                 <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
                             </div>   
                             <div  class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <label>Marca:</label>
                                 <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
                             </div>  
                             <div  class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <label>Precio:</label>
                                 <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                 <label>Imagen:</label>
                                 <input type="file" class="form-control" name="imagen" id="imagen">
                                 <input type="hidden" name="imagenactual" id="imagenactual">
                                 <img src="" width="150px" height="120px" id="imagenmuestra">
                             </div>
                             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                                 <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                            </div>              
                        </form>
                    </div>
                </div>
            </div>
        </div>
 </section><!-- /.content -->
</div>    
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/app.min.js"></script>
    <script src="../public/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/datatables/datatables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script>
    <script src="../public/js/bootbox.min.js"></script>
    <script src="../public/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="scripts/productos.js"></script>