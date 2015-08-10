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
        <div id="building_edit_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
        <form id="building_add" name="building_add" method="post"  onsubmit="return validateEditForm()" action="<?php echo base_url(); ?>location/edit_building" class="form-horizontal">
            <div class="form-body">

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                         <input type="hidden" class="form-control" value="<?php echo $building['id']; ?>" name="building_id">
                            <label class="control-label col-md-3"><?php echo $this->lang->line("name"); ?></label>
                            <div class="col-md-9">
                                <input type="text" id="building_edit_name" name="name" value="<?php echo $building['name'];?>" class="form-control">

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
                            <label class="control-label col-md-3"><?php echo $this->lang->line("table_address"); ?></label>
                            <div class="col-md-9">
                                <textarea id="building_edit_address" name="address" class="form-control" rows="3"><?php echo $building['address'];?></textarea>

                            </div>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-3"></div>
                    <!--/span-->
                </div>


            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn btn-success">
            </div>  
        </form>
    </div>
</div>
<!-- END PAGE CONTENT-->
