<?php
/* * ***************************************************
  <copyright>
  Linux Solutions, C.A.
  Alfonso Santana
  Caracas - Venezuela
  Todos los derechos reservados 2015
  </copyright>
 * ************************* */
?>
<div class="row">
    <div class="col-lg-12">
        <?php $work_id = $get_work['id']; ?>	
        <div id="work_edit_error" style="padding-left: 220px;color: red;display:none;"></div>
        <form name="addinvenory" method="post" action="<?php echo base_url(); ?>inventory/edit_work" class="form-horizontal" onsubmit="return validateworkEditForm()" >
            <input type="hidden" name="work_id" value="<?php echo $work_id;?>">
            <div class="form-body table1">
                <div id="work_fields" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_building'); ?></label>
                                <div class="col-md-8">
                                    <select id="work_edit_building" name="works_building" class="form-control building-select">
                                        <?php
                                        echo '<option value="">--seleccione--</option>';
                                        foreach ($buildings as $building) {
                                            if ($building["id"] == $get_work['building_id']) {
                                                echo '<option value="' . $building["id"] . '" selected=selected>' . $building["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $building["id"] . '">' . $building["name"] . '</option>';
                                            }
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
                                    <select id="work_edit_floor" name="works_floor" class="form-control floor-select">
                                        <option value="">--seleccione--</option>
                                        <?php
                                        foreach ($first_floor as $floor) {
                                            if ($floor["id"] == $get_work['floor_id']) {
                                                echo '<option value="' . $floor["id"] . '" selected=selected>' . $floor["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                            }
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
                                    <select id="work_edit_office" name="works_office" class="form-control office-select">
                                        <option value="">--seleccione--</option>
                                        <?php
                                        foreach ($first_office as $first_offices) {
                                            if ($first_offices["id"] == $get_work['office_id']) {
                                                echo '<option value="' . $first_offices["id"] . '" selected=selected>' . $first_offices["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $first_offices["id"] . '">' . $first_offices["name"] . '</option>';
                                            }
                                        }
                                        ?>
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
                                    <?php echo $this->lang->line('dashboard_location_jobname'); ?>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="jobname" id="work_edit_jobname" value="<?php echo $get_work['jobname'];?>" class="form-control">
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
                                    <input name="engineername" id="work_edit_engineername" type="text" value="<?php echo $get_work['engineername'];?>" class="form-control">
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
                                    <input name="from"  id="datepicker_edit_from" type="text" value="<?php echo $get_work['from'];?>" class="form-control">

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
                                    <input name="to" id="datepicker_edit_to" type="text" value="<?php echo $get_work['to'];?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('contract_number'); ?></label>
                                <div class="col-md-8">
                                    <input name="edit_contract_number" id="contract_number" type="text" class="form-control">

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
                                    <input name="edit_engineername" id="engineername" type="text" class="form-control">
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
                                        <input name="edit_amount_awarded" id="amount_awarded" type="text" class="form-control">
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
                                        <input name="edit_amount_per_run" id="amount_per_run" type="text" class="form-control">
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
                                        <input name="edit_physical_progress" id="physical_progress" type="text" class="form-control">
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
                                        <input name="edit_financial_progress" id="financial_progress" type="text" class="form-control" disabled>
                                    <div class="input-group-addon">%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->

                <!--/row-->
            </div>
            <div class="modal-footer">
                <input type="submit" name="edit_submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn blue">
            </div>
        </form>

    </div>
</div>
  
