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
                                                <div id="office_edit_error" style="padding-left: 239px;color: red;display:none;">All Fields are Required*</div>
                                                <form method="post"  onsubmit="return validateofficeEditForm()" action="<?php echo base_url(); ?>location/edit_office" class="form-horizontal">
                                                    <div class="form-body">

                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="hidden" class="form-control" value="<?php echo $office['id']; ?>" name="office_id">
                                                                    <label class="control-label col-md-3"><?php echo $this->lang->line("table_building"); ?></label>
                                                                    <div class="col-md-9">
                                                                        <?php
//                                                                        echo '<pre>';
//                                                                        print_r($office);
//                                                                        exit; ?>
                                                                        <select name="building_id" id="building_edit_select" class="form-control">
                                                                            <?php
                                                                            echo '<option value="">--seleccione--</option>';
                                                                            foreach ($buildings as $building) {
                                                                                if($office['building_id'] == $building["id"])
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
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3"><?php echo $this->lang->line("table_floor"); ?></label>
                                                                    <div class="col-md-9">
                                                                        <select name="floor_id" id="floor_edit_select" class="form-control">
                                                                            <?php
//                                                                            print_r($floors);
//                                                                            exit;
                                                                            echo '<option value="">--seleccione--</option>';
                                                                            foreach ($floors as $floor) {
                                                                                if($office['floor_id'] == $floor['id'])
                                                                                {
                                                                                echo '<option value="' . $floor['id'] . '" selected=selected>' . $floor['name'] . '</option>';
                                                                                }
                                                                                else
                                                                                {
                                                                                    echo '<option value="' . $floor['id'] . '">' . $floor['name'] . '</option>';  
                                                                            
                                                                                }
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
                                                                    <label class="control-label col-md-3"><?php echo $this->lang->line("table_office"); ?></label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="office" id="edit_office" value="<?php echo $office['name'];?>" class="form-control">

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
                                        </div>
                                                </form>


                                            </div>
                                        </div>
<!-- END PAGE CONTENT-->
