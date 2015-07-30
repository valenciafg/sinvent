<?php
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
?>
<div class="row">
                                                <div class="col-md-12">
                                                    <div id="floor_edit_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                                    <form name="floor_add" method="post"  onsubmit="return validatefloorEditForm()" action="<?php echo base_url(); ?>location/edit_floor" class="form-horizontal">
                                                        <div class="form-body">


                                                            <!--/row-->


                                                            <!--/row-->

                                                            <div class="row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="hidden" class="form-control" value="<?php echo $floor['id']; ?>" name="floor_id">
                                                                        <label class="control-label col-md-3"><?php echo $this->lang->line("table_building"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <select id="floor_building_edit_id" name="building_id" class="form-control">
                                                                                <?php
                                                                                echo '<option value="">--seleccione--</option>';
                                                                                foreach ($buildings as $building) {
                                                                                    if($floor['building_id'] == $building["id"])
                                                                                    echo '<option value="' . $building["id"] . '" selected=selected>' . $building["name"] . '</option>';
                                                                                    else
                                                                                    echo '<option value="' . $building["id"] . '">' . $building["name"] . '</option>';    
                                                                                }
                                                                                ?>

                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-3"></div>
                                                                <!--/span-->
                                                            </div>

                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-3"></div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3"><?php echo $this->lang->line("table_floor"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" id="floor_edit" name="floor" value="<?php echo $floor['name'];?>" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-3"></div>
                                                                <!--/span-->
                                                            </div>

                                                            <!--/row-->
                                                        </div>
                                                        <div class="modal-footer">

                                            <input type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn blue">
                                            </form>
                                        </div>
                                                            
                                                </div>
                                            </div>
<!-- END PAGE CONTENT-->
