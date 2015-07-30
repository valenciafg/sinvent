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
        <div id="edit_error" style="padding-left: 220px;color: red;display:none;"><?php echo $this->lang->line('error_groupname');?></div>

        <form id="group_edit" name="group_edit" method="post"  onsubmit="return validategroupEditForm()" action="<?php echo base_url(); ?>groups/update_group" class="form-horizontal">
            <div class="form-body">

                <div class="row">
                  
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line("table_group_name"); ?></label>
                            <div class="col-md-8">
                                <input type="hidden" name="edit_group_id" value="<?php echo $group['id']; ?>" class="form-control">
                                <input type="text" id="edit_group" name="edit_group" value="<?php echo $group['name']; ?>" class="form-control">

                            </div>
                        </div>
                    </div>
                    <!--/span-->
                
                    <!--/span-->
                </div>
                <!--/row-->

                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line("table_role"); ?></label>
                            <div class="col-md-8">
                                <select name="edit_role" class="form-control role-select">
                                    <?php
                                    foreach ($roles as $role) {
                                    if($role["id"] == $group['role_id'])
                                    echo '<option value="' . $role["id"] . '" selected="selected">' . $this->lang->line($role["name"]) . '</option>';
                                    else
                                    echo '<option value="' . $role["id"] . '">' . $this->lang->line($role["name"]) . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                
                    <!--/span-->
                </div>

                <!--/row-->


                <!--/row-->
            </div>
                                    <input style="float:right;"type="submit" name="submit" value="<?php echo $this->lang->line("save"); ?>" class="btn blue">
                                    
                                </form>


    </div>
</div>