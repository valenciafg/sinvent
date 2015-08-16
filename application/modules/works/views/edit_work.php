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
        <?php $work_id = $work['id']; ?>	
        <div id="work_edit_error" style="padding-left: 220px;color: red;display:none;"></div>
        <form name="edit_work_form" method="post" action="<?php echo base_url(); ?>works/edit_work" class="form-horizontal" onsubmit="return validateworkEditForm()" >
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
                                            if ($building["id"] == $work['type']) {
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
                                        foreach ($floors as $floor) {
                                            if ($floor["id"] == $work['subtype']) {
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
                                        foreach ($offices as $office) {
                                            if ($office["id"] == $work['clasification']) {
                                                echo '<option value="' . $office["id"] . '" selected=selected>' . $office["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $office["id"] . '">' . $office["name"] . '</option>';
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
                                    <input type="text" name="jobname" id="work_edit_jobname" value="<?php echo $work['name'];?>" class="form-control">
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
                                    <input name="since"  id="datepicker_since_edit" type="text" value="<?php echo date('d/m/Y',strtotime(str_replace('-','/',$work['since'])));?>" class="form-control">
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
                                    <input name="until"   id="datepicker_until_edit" type="text" value="<?php echo date('d/m/Y',strtotime(str_replace('-','/',$work['until'])));?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_number'); ?></label>
                                <div class="col-md-8">
                                    <input name="edit_agreement_number" id="edit_agreement_number" type="text" value="<?php echo $agreement['agreement_number'];?>" class="form-control">

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
                                    <input name="edit_contractor" id="edit_contractor" type="text" value="<?php echo $agreement['contractor'];?>" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <!--/span-->                                        
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
                <input type="submit" name="edit_submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn blue">
            </div>
        </form>

    </div>
</div>
  
<script type="text/javascript">
$(document).ready(function () {
    var edit_search = $("#edit_agreement_number");
    edit_search.keyup(function() {
        //alert("asdasda");
        if (edit_search.val() != '') {
            /*$('#edit_physical_progress').val('Ingrese un número de contrato válido');
            $('#edit_financial_progress').val('Ingrese un número de contrato válido');
            $('#edit_contractor').val('Ingrese un número de contrato válido');
            $('#edit_agreement_name').val('Ingrese un número de contrato válido');
            $('#edit_amount_per_run').val('Ingrese un número de contrato válido');
            $('#edit_amount_awarded').val('Ingrese un número de contrato válido');*/
            $.ajax({
                url: "<?php echo base_url(); ?>agreements/get_agreement_info_json",
                type: "POST",
                dataType:'json',
                data: {"agreement_number": edit_search.val()},                    
                success : function(response){ 
                    console.log(response); 
                    if(response){
                        $('#edit_financial_progress').val(response['physical_progress']);
                        $('#edit_physical_progress').val(response['financial_progress']);
                        $('#edit_contractor').val(response['contractor']);                        
                        $('#edit_agreement_name').val(response['name']);
                        $('#edit_amount_per_run').val(response['amount_per_run']);
                        $('#edit_amount_awarded').val(response['amount_awarded']);
                    }else{
                        $('#edit_physical_progress').val('Ingrese un número de contrato válido');
                        $('#edit_financial_progress').val('Ingrese un número de contrato válido');
                        $('#edit_contractor').val('Ingrese un número de contrato válido');
                        $('#edit_agreement_name').val('Ingrese un número de contrato válido');
                        $('#edit_amount_per_run').val('Ingrese un número de contrato válido');
                        $('#edit_amount_awarded').val('Ingrese un número de contrato válido');
                    }
                },
                error: function(){
                    console.log('error');
                    return false;
                },
            });
        }else{
            $('#edit_physical_progress').val('');
            $('#edit_financial_progress').val('');
            $('#edit_contractor').val('');
            $('#edit_agreement_name').val('');
            $('#edit_amount_per_run').val('');
            $('#edit_amount_awarded').val('');
        }
    });
    $(document).on("change", ".building-select", function(){
        if ($(this).val() !== ''){
            $.ajax({
                url: '<?php echo base_url(); ?>inventory/get_content',
                type: 'POST',
                data: {
                    'main_cat': 'buildings',
                    'data': $(this).val()
                },
                //dataType:'json',
                success: function(data){
                    $(".floor-select").html(data);
                    $(".office-select").html('<option value="">-select-</option>');
                },
                error: function(request, error){
                    alert("Request: " + JSON.stringify(request));
                }
            });
        }

    });

    //floor select
     $(document).on("change", ".floor-select", function(){
       if ($(this).val() !== ''){
            $.ajax({
                url: '<?php echo base_url(); ?>inventory/get_content',
                type: 'POST',
                data: {
                    'main_cat': 'office',
                    'data': $(this).val()
                },
                //dataType:'json',
                success: function(data){
                    $(".office-select").html(data);
                },
                error: function(request, error){
                    alert("Request: " + JSON.stringify(request));
                }
            });
        }
    });
     $('#datepicker_since_edit').datepicker({
            format: 'dd/mm/yyyy',
            //startView: 'year',
            isRTL: false,
            language: 'es'
        });
        $('#datepicker_until_edit').datepicker({
            format: 'dd/mm/yyyy',
            //startView: 'year',
            isRTL: false,
            language: 'es'
        });
});
</script>