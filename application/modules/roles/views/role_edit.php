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
                                            <div id="edit_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>

                                            <form id="role_edit" name="role_edit" method="post"  onsubmit="return validateroleEditForm()" action="<?php echo base_url(); ?>roles/update_role" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line('name');?></label>
                                                                <div class="col-md-8">
                                                                    <input type="hidden" name="edit_role_id" value="<?php echo $role['id'];?>" class="form-control">
                                                                    <input type="text" id="edit_role" name="edit_role" value="<?php echo $role['name'];?>" class="form-control" placeholder="Enter role">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line('table_description');?></label>
                                                                <div class="col-md-8">
                                                                    <textarea id="edit_description" name="edit_description" value="" class="form-control" rows="3"><?php echo $role['description'];?></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->


                                                    <!--/row-->
                                                </div>
                                                
                                    <input style="float:right;" type="submit" name="submit" value="<?php echo $this->lang->line("save"); ?>" class="btn blue">
                                </form>


                                        </div>
                                    </div>