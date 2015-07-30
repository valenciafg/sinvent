<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('add_new_work'); ?></h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
                <!-- onsubmit="return validateForm()" -->
                <form name="newuser" method="post" action="<?php echo base_url(); ?>works/add_work" class="form-horizontal">
                    <div class="form-body">
                	<!--FORM BODY -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('type'); ?></label>
                                    <div class="col-md-8">
                                        <select id="work_type" name="work_type" class="form-control type-select">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('subtype'); ?></label>
                                    <div class="col-md-8">
                                        <select id="work_subtype" name="work_subtype" class="form-control subtype-select">
                                            <option value="">--seleccione--</option>
                                            <?php
                                            /*foreach ($first_floor as $floor) {
                                                echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                            }*/
                                            ?>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('clasification'); ?></label>
                                    <div class="col-md-8">
                                        <select id="work_clasification" name="work_clasification" class="form-control clasification-select">
                                            <option value="">--seleccione--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4">
                                    <?php echo $this->lang->line('work_description'); ?></label>
                                    <div class="col-md-8">
                                        <input type="text" name="work_name" id="work_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('since'); ?></label>
                                    <div class="col-md-8">
                                        <input name="since"  id="datepicker_since" type="text" class="form-control">
                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('until'); ?></label>
                                    <div class="col-md-8">
                                        <input name="until"   id="datepicker_until" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_number'); ?></label>
                                    <div class="col-md-8">
                                        <input type="text" id="agreement_number" name="agreement_number" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_name'); ?></label>
                                    <div class="col-md-8">
                                        <input type="text" id="agreement_name" name="agreement_name" value="" class="form-control" disabled>

                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_contractor'); ?></label>
                                    <div class="col-md-8">
                                        <input type="text" id="agreement_contractor" name="agreement_contractor" value="" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('amount_awarded'); ?></label>
                                    <div class="col-md-8">
                                    	<div class="input-group">
                                        <input type="text" id="amount_awarded" name="amount_awarded" value="" class="form-control" disabled>
                                        <div class="input-group-addon">Bs.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('amount_per_run'); ?></label>
                                    <div class="col-md-8">
                                    	<div class="input-group">
                                        <input type="text" id="amount_per_run" name="amount_per_run" value="" class="form-control" disabled>
                                        <div class="input-group-addon">Bs.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('physical_progress'); ?></label>
                                    <div class="col-md-8">
                                    	<div class="input-group">
                                        <input type="text" id="physical_progress" name="physical_progress" value="" class="form-control" disabled>
                                        <div class="input-group-addon">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('financial_progress'); ?></label>
                                    <div class="col-md-8">
                                    	<div class="input-group">
                                        <input type="text" id="financial_progress" name="financial_progress" value="" class="form-control" disabled>
                                        <div class="input-group-addon">%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                    <!--END. FORM BODY -->
                    </div>

                    <div class="fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-5"></div>
                                <div class="col-md-5">
                                    <input type="submit" name="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn blue" style="margin-top:30px;margin-left:226px;">

                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END PAGE CONTENT-->


        <!-- END CONTENT -->

    </div>
</div>