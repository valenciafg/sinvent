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
        <form name="edit_work_form" method="post" action="<?php echo base_url(); ?>inventory/edit_work" class="form-horizontal" onsubmit="return validateworkEditForm()" >
            <input type="hidden" name="work_id" value="<?php echo $work_id;?>">
            <div class="form-body table1">
                <div id="work_fields" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_building'); ?></label>
                                <div class="col-md-8">
                                    <select id="work_edit_building" name="works_building" class="form-control work_edit_building">
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
                                    <select id="work_edit_floor" name="works_floor" class="form-control work_edit_floor">
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
                                    <select id="work_edit_office" name="works_office" class="form-control work_edit_office">
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
                                    <input type="text" name="work_edit_jobname" id="work_edit_jobname" value="<?php echo $get_work['jobname'];?>" class="form-control">
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
                                    <input name="datepicker_edit_from"  id="datepicker_edit_from" type="text" value="<?php echo date('d/m/Y',strtotime(str_replace('-','/',$get_work['from'])));?>" class="form-control datepicker_edit_from">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_to'); ?></label>
                                <div class="col-md-8"><!--value="<?php //echo date('d/m/Y',strtotime(str_replace('-','/',$get_work['to'])));?>"-->
                                    <input name="datepicker_edit_to" id="datepicker_edit_to" type="text"  value="<?php echo date('d/m/Y',strtotime(str_replace('-','/',$get_work['to'])));?>" class="form-control datepicker_edit_to">
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
                                    <input name="edit_contract_number" id="edit_contract_number" type="text" value="<?php echo $get_work['agreement_id'];?>" class="form-control edit_contract_number">

                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_name'); ?></label>
                                <div class="col-md-8">
                                    <input name="edit_agreement_name" id="edit_agreement_name" type="text" value="<?php echo $agreement['name'];?>" class="form-control" disabled>
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
                                    <input name="edit_engineername" id="edit_engineername" type="text" value="<?php echo $agreement['contractor'];?>" class="form-control" disabled>
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
                                        <input name="edit_amount_awarded" id="edit_amount_awarded" type="text" value="<?php echo $agreement['amount_awarded'];?>" class="form-control" disabled>
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
                                        <input name="edit_amount_per_run" id="edit_amount_per_run" type="text" value="<?php echo $agreement['amount_per_run'];?>" class="form-control" disabled>
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
                                        <input name="edit_physical_progress" id="edit_physical_progress" type="text" value="<?php echo $agreement['physical_progress'];?>" class="form-control" disabled>
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
                                        <input name="edit_financial_progress" id="edit_financial_progress" type="text" value="<?php echo $agreement['financial_progress'];?>" class="form-control" disabled>
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
                <input type="submit" name="edit_submitxxx" value="<?php echo $this->lang->line("submit"); ?>" class="btn blue">
            </div>
        </form>

    </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    $('#datepicker_edit_from').datepicker({
        format: 'dd/mm/yyyy',
        isRTL: false,
        language: 'es'
    });
    $('#datepicker_edit_to').datepicker({
        format: 'dd/mm/yyyy',        
        startDate: $('#datepicker_edit_from').val(),
        isRTL: false,
        language: 'es'
    }); 
    $('.datepicker_edit_from').datepicker()
    .on('changeDate', function(e){
        console.log($('#datepicker_edit_from').val());
        var startDate = new Date();        
        $('#datepicker_edit_to').datepicker('update', $('#datepicker_edit_from').val());                 
        $('#datepicker_edit_to').datepicker('setStartDate', $('#datepicker_edit_from').val());                 
    });
    
    var search = $("#edit_contract_number");
    search.keyup(function() {
        if (search.val() != '') {
            $.ajax({
                url: "<?php echo base_url(); ?>agreements/get_agreement_info_json",
                type: "POST",
                dataType:'json',
                data: {"agreement_id": search.val()},
                success : function(response){ 
                    console.log(response); 
                    if(response){
                        $('#edit_physical_progress').val(response['physical_progress']);
                        $('#edit_financial_progress').val(response['financial_progress']);
                        $('#edit_engineername').val(response['contractor']);
                        $('#edit_amount_per_run').val(response['amount_per_run']);
                        $('#edit_amount_awarded').val(response['amount_awarded']);
                    }else{
                        $('#edit_physical_progress').val('Ingrese un número de contrato válido');
                        $('#edit_financial_progress').val('Ingrese un número de contrato válido');
                        $('#edit_engineername').val('Ingrese un número de contrato válido');
                        $('#edit_amount_per_run').val('Ingrese un número de contrato válido');
                        $('#edit_amount_awarded').val('Ingrese un número de contrato válido');
                    }
                },
                error: function(){
                    console.log('error');
                    $('#edit_physical_progress').val('Ingrese un número de contrato válido');
                    $('#edit_financial_progress').val('Ingrese un número de contrato válido');
                    $('#edit_engineername').val('Ingrese un número de contrato válido');
                    $('#edit_amount_per_run').val('Ingrese un número de contrato válido');
                    $('#edit_amount_awarded').val('Ingrese un número de contrato válido');
                    return false;
                },
            });
        }else{
            $('#edit_physical_progress').val('');
            $('#edit_financial_progress').val('');
            $('#edit_engineername').val('');
            $('#edit_amount_per_run').val('');
            $('#edit_amount_awarded').val('');
        }
    });
        //populate floors on building select
    $(document).on("change", ".work_edit_building", function(){
        if ($(this).val() !== '')
        {
            $.ajax({
                url: '<?php echo base_url(); ?>inventory/get_content',
                type: 'POST',
                data: {
                    'main_cat': 'buildings',
                    'data': $(this).val()
                },
                //dataType:'json',
                success: function(data) {
                    $(".work_edit_floor").html(data);
                    $(".work_edit_office").html('<option value="">-select-</option>');
                },
                error: function(request, error)
                {
                    alert("Request: " + JSON.stringify(request));
                }
            });
        }

    });

    //populate office on floor select
     $(document).on("change", ".work_edit_floor", function(){
       if ($(this).val() !== '')
        {
        $.ajax({
            url: '<?php echo base_url(); ?>inventory/get_content',
            type: 'POST',
            data: {
                'main_cat': 'office',
                'data': $(this).val()
            },
            //dataType:'json',
            success: function(data) {
                $(".work_edit_office").html(data);
            },
            error: function(request, error)
            {
                alert("Request: " + JSON.stringify(request));
            }
        });
        }

    });
});
</script>
