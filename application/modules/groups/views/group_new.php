<div class="row">
    <div class="col-md-12">
        <div id="error" style="padding-left: 220px;color: red;display:none;"><?php echo $this->lang->line('error_groupname'); ?></div>
        <form id="group_add" name="group_add" method="post"  onsubmit="return validategroupForm()" action="<?php echo base_url(); ?>groups/add_group" class="form-horizontal">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line("table_group_name"); ?></label>
                            <div class="col-md-8">
                                <input type="text" id="group" name="group" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_role'); ?></label>
                            <div class="col-md-8">
                                <select id="roles" name="role" class="form-control role-select">
                                    <?php
                                    echo '<option value="">--seleccione--</option>';
                                    foreach ($roles as $role) {
                                        echo '<option value="' . $role["id"] . '">' . $this->lang->line($role["name"]). '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('application'); ?></label>
                            <div class="col-md-8">
                                <select id="application" name="application" class="form-control role-select">
                                    <?php
                                    echo '<option value="">--seleccione--</option>';
                                    foreach ($applications as $application) {
                                        echo '<option value="' . $application["id"] . '">' . $application["name"]. '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" value="<?php echo $this->lang->line("save"); ?>" class="btn btn-success">
            </div>
        </form>
    </div>
</div>