<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title"><?php echo $this->lang->line('dashboard_location_article'); ?></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
                    <!-- AGREGAR BIEN/MATERIAL ** VENTANA EMERGENTE -->
                    <form name="addinvenory" method="post" action="<?php echo base_url(); ?>inventory/add_article" class="form-horizontal" onsubmit="return validategoodarticleForm()" >
                        <div class="form-body table1">                                                            
                            <div id="building_drop" >
                                <!--article category -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('categories'); ?></label>
                                            <div class="col-md-8">
                                                <select id="goods_category" name="goods_category" class="form-control category-select" required>
                                                    <?php                                                                                    
                                                    echo '<option value="">--seleccione--</option>';
                                                    foreach ($categories as $category) {
                                                        echo '<option value="' . $category["id"] . '">' . $category["name"] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END. article category -->
                                <!--article sub-category -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('subcategories'); ?></label>
                                            <div class="col-md-8">
                                                <select id="goods_subcategory" name="goods_subcategory" class="form-control subcategory-select" required>
                                                    <?php
                                                    echo '<option value="">--seleccione--</option>';
                                                    foreach ($subcategories as $subcategory) {
                                                        echo '<option value="' . $subcategory["id"] . '">' . $subcategory["name"] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END. article sub-category -->
                                <!--article TYPE/BUILDING -->
                                <div id="type" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_building') ?></label>
                                            <div class="col-md-8">
                                                <select id="goods_building" name="goods_building" class="form-control building-select">
                                                    <?php
                                                    echo '<option value="">--seleccione--</option>';
                                                    foreach ($buildings as $building) {
                                                        echo '<option value="' . $building["id"] . '">' . $building["name"] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!--END. article TYPE/BUILDING -->
                                <!--article SUB-TYPE/FLOOR -->
                                <div id="subtype" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_floor'); ?></label>
                                            <div class="col-md-8">
                                                <select name="goods_floor" class="form-control floor-select">
                                                    <option value="">--seleccione--</option>
                                                    <?php
                                                    foreach ($first_floor as $floor) {
                                                        echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>                                                                    
                                </div>
                                </div>
                                <!--END. article SUB-TYPE/FLOOR -->
                                <!--article clasification/office -->
                                <div id="clasification" style="display:none;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_office'); ?></label>
                                            <div class="col-md-8">
                                                <select name="goods_office" class="form-control office-select">
                                                    <option value="">--seleccione--</option>
                                                    <?php
                                                    foreach ($first_office as $office) {
                                                        echo '<option value="' . $office["id"] . '">' . $office["name"] . '</option>';
                                                    }
                                                    ?>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!--END. article clasification/office -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><p style="margin-left:-10px;"><?php echo $this->lang->line('dashboard_location_description'); ?></p></label>
                                            <div class="col-md-8">
                                                <input type="text" id="article_description" name="article_description" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_brand'); ?></label>
                                            <div class="col-md-8">
                                                <input type="text" id="article_brand" name="article_brand" class="form-control" >

                                            </div>
                                        </div>
                                    </div>                                                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_model'); ?></label>
                                            <div class="col-md-8">
                                                <input name="article_model" id="article_model" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_serial'); ?></label>
                                            <div class="col-md-8">
                                                <input type="text" name="article_serial" id="article_serial" class="form-control">
                                            </div>
                                        </div>
                                    </div>                                                                    
                                </div>                                
                                <!--article divestiture -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_divestiture'); ?></label>
                                            <div class="col-md-8">
                                                <input name="article_divestiture"  id="article_divestiture" type="text" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--article divestiture -->
                                <!--article Amount -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_amount'); ?></label>
                                            <div class="col-md-8">
                                                <input name="article_amount"  id="article_amount" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--article amount -->
                                <!--article unit -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_unit'); ?></label>
                                            <div class="col-md-8">                                                                                
                                                <select id="goods_unit" name="goods_unit" class="form-control unit-select" required>
                                                    <?php
                                                    echo '<option value="">--seleccione--</option>';
                                                    foreach ($measurings as $measuring) {
                                                        echo '<option value="' . $measuring["id"] . '">' . $measuring["description"] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--article unit -->
                            </div>                                                            
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="submit" value="<?php echo $this->lang->line('submit'); ?>" class="btn btn-success">                                            
                        </div>
                    </form>
                </div>
            </div>
        </div>                                        
    </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 
});
</script>