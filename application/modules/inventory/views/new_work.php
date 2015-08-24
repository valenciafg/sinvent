<div class="row">
    <div class="col-lg-12">
        <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
        <form name="addinvenory" method="post" action="<?php echo base_url(); ?>inventory/add_work" class="form-horizontal" onsubmit="return validateworkForm()" >
            <div class="form-body table1">
                <div id="work_fields" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_building'); ?></label>
                                <div class="col-md-8">
                                    <select id="works_building" name="works_building" class="form-control building-select">
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
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_floor'); ?></label>
                                <div class="col-md-8">
                                    <select id="sub_works_building" name="works_floor" class="form-control floor-select">
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
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_office'); ?></label>
                                <div class="col-md-8">
                                    <select name="works_office" class="form-control office-select">
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
                                <?php echo $this->lang->line('dashboard_location_jobname'); ?></label>
                                <div class="col-md-8">
                                    <input type="text" name="jobname" id="jobname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_from'); ?></label>
                                <div class="col-md-8">
                                    <input name="from"  id="datepicker_from" type="text" class="form-control">

                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_to'); ?></label>
                                <div class="col-md-8">
                                    <input name="to"   id="datepicker_to" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('contract_number'); ?></label>
                                <div class="col-md-8">
                                    <input name="contract_number" id="contract_number" type="text" class="form-control">

                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_enginner_name'); ?></label>
                                <div class="col-md-8">
                                    <input name="engineername" id="engineername" type="text" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('amount_awarded'); ?></label>
                                <div class="col-md-8">
                                    <div class="input-group">                                                                                
                                    <input name="amount_awarded" id="amount_awarded" type="text" class="form-control" disabled>
                                    <div class="input-group-addon">Bs.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('amount_per_run'); ?></label>
                                <div class="col-md-8">
                                    <div class="input-group">                                                                                
                                    <input name="amount_per_run" id="amount_per_run" type="text" class="form-control" disabled>
                                    <div class="input-group-addon">Bs.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('physical_progress')." (%)"; ?></label>
                                <div class="col-md-8">
                                    <div class="input-group">                                                                                
                                    <input name="physical_progress" id="physical_progress" type="text" class="form-control" disabled>
                                    <div class="input-group-addon">%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('financial_progress')." (%)"; ?></label>
                                <div class="col-md-8">
                                    <div class="input-group">                                                                                
                                        <input name="financial_progress" id="financial_progress" type="text" class="form-control" disabled>
                                    <div class="input-group-addon">%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn btn-success">                                            
            </div>
        </form>
    </div>
</div>