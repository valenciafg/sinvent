<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" method="POST">
            <div class="form-group col-md-6">
                <label for="username">Identificador</label>
                <input type="text" class="form-control" id="username" placeholder="Usuario LDAP" required>
            </div>            
            <div class="form-group col-md-6">
                <label for="cedula">Cédula</label>
                <input type="text" class="form-control" id="cedula" placeholder="v-xxxxxxxx" value="V-11111111" disabled>
            </div>                
            <div class="form-group col-md-6">
                <label for="name">Nombre del Trabajador</label>
                <input type="text" class="form-control" id="name" value="Pedro Pérez" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="process">Proceso</label>
                <select class="form-control" id="process" required>
                    <option>-- Seleccione --</option>
                    <?php
                        foreach ($processes as $process) {
                            echo "<option value='".$process['id']."'>".$process['name']."</option>";
                        }
                    ?>
                </select>
            </div>                
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>           
                        </div>
                    </div>
                </div> 
            </div>
            <div id="cabecera">            
                <label class="col-xs-1 text-center">Código</label>
                <label class="col-xs-2 text-center">Item</label>
                <label class="col-xs-2 text-center">Cantidad</label>
                <label class="col-xs-2 text-center">Unidad</label>
                <label class="col-xs-2 text-center">Fecha</label>
                <label class="col-xs-2 text-center">Observaciones</label>
                <label class="col-xs-1 text-center">Eliminar</label>
            </div>
            <div class="input_fields_wrap" style="padding-left: 10px;">
                <div class="row">
                    <div class="col-xs-1">
                        <input type="text" class="form-control" placeholder="#" name="id[0]">
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" placeholder="ítem" name="item[0]">
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="Cantidad" name="cantidad[0]" min="0">
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" placeholder="Unidad" name="unidad[0]" disabled>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" placeholder="Fecha" name="fecha[0]" required>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" placeholder="Observaciones" name="observaciones[0]">
                    </div>
                    <div class="col-xs-1"></div>                        
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">              
                        <button class="add_field_button btn btn-success">+</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 
});
</script>
  <!-- END. NEW DELIVERY FORM -->
