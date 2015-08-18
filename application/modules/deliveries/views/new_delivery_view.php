<div class="row">
    <div class="col-md-12">
        
                                                
            
            <form class="form-horizontal">
                <div class="form-group col-md-6">
                    <label for="username">Identificador</label>
                    <input type="text" class="form-control" id="username" placeholder="usuario@pdvsa.com">
                </div>
                <div class="form-group col-md-6">
                    <label for="cedula">Cédula</label>
                    <input type="text" class="form-control" id="cedula" placeholder="v-xxxxxxxx">
                </div>                
                <div class="form-group col-md-6">
                    <label for="name">Nombre del Trabajador</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="process">Proceso</label>
                    <select class="form-control" id="process">
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
                                <button type="button" class="btn btn-primary">Guardar</button>           
                            </div>
                        </div>
                    </div> 
                </div>            
                <label class="col-xs-1 text-center">Código</label>
                <label class="col-xs-2 text-center">Item</label>
                <label class="col-xs-1 text-center">Cantidad</label>
                <label class="col-xs-2 text-center">Unidad</label>
                <label class="col-xs-2 text-center">Fecha</label>
                <label class="col-xs-3 text-center">Observaciones</label>
                <label class="col-xs-1 text-center">Eliminar</label>
                <div class="input_fields_wrap">
                    <div class="row">
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="Cod" name="id[0]">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" placeholder="ítem" name="item[0]">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" class="form-control" placeholder="Cantidad" name="cantidad[0]">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" placeholder="Unidad" name="unidad[0]" disabled>
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" placeholder="Fecha" name="fecha[0]">
                        </div>
                        <div class="col-xs-3">
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
  <!-- END. NEW DELIVERY FORM -->
