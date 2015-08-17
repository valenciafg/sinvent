<?php 
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
$this->load->view('dashboard/header'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('dashboard/left_menu'); ?>
            <div class="col-md-10 col-sm-9 col-lg-10">
                <br>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                        <!-- END STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="page-title"><?php echo $this->lang->line('work_title'); ?></h3>
                                <!-- END PAGE TITLE & BREADCRUMB-->
                            </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <?php echo $this->lang->line('work_list'); ?>
                                        </div>

                                    </div>                                    
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="btn-group">
                                                <button id="add_work" class="btn btn-success">
                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                </button>
                                            </div>                                            
                                        </div>
                                        <!--WORK LIST-->
                                        <div id="users_list">
                                            <?php $this->load->view("works_list");?>
                                        </div>
                                        <!--END. WORK LIST-->
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT -->
                    </div>
                </div>

                <!--ADD NEW WORK FORM-->
                <div class="modal fade" id="new_work_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <?php $this->load->view('new_work');?>
                    </div>
                </div>
                <!--END. ADD NEW AGREEMENT-->

                <!--user edit modal start-->
                <div class="modal fade" id="work_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_work'); ?></h4>
                            </div>
                            <div id="work_edit_form" class="modal-body">

                            </div>
                        </div>
                    </div>
                </div>
                <!--user edit modal end-->
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<!--search scripts-->
<script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--datatables scripts-->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/datatables.responsive.js"></script>
<!--datepicker-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
<!--END datepicker-->
<script>
$(document).ready(function () {
    var responsiveHelper = undefined;
    var breakpointDefinition = {
        tablet: 1024,
        phone : 480
    };
    var tableElement = $('#example');
    tableElement.dataTable({
        autoWidth        : false,
        language: {
            url: "<?php echo base_url(); ?>assets/plugins/datatables/js/lang/Spanish.json"
        },
        aLengthMenu: [
                [5, 15, 20, -1],
                [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
            ],
        iDisplayLength: 5,
        preDrawCallback: function () {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
            }
        },
        rowCallback    : function (nRow) {
            responsiveHelper.createExpandIcon(nRow);
        },
        drawCallback   : function (oSettings) {
            responsiveHelper.respond();
        }
    });

        $('#datepicker_since').datepicker({
            format: 'dd/mm/yyyy',
            startView: 'year',
            isRTL: false,
            language: 'es'
        });
        $('#datepicker_until').datepicker({
            format: 'dd/mm/yyyy',
            startView: 'year',
            isRTL: false,
            language: 'es'
        });

        var search = $("#agreement_number");
        search.keyup(function() {
            if (search.val() != '' && search.val().length>0) {
                $.ajax({
                    url: "<?php echo base_url(); ?>agreements/get_agreement_info_json",
                    type: "POST",
                    dataType:'json',
                    data: {"agreement_number": search.val()},
                    success : function(response){ 
                        console.log(response); 
                        if(response){
                            $('#physical_progress').val(response['physical_progress']);
                            $('#financial_progress').val(response['financial_progress']);
                            $('#agreement_contractor').val(response['contractor']);                        
                            $('#agreement_name').val(response['name']);
                            $('#amount_per_run').val(response['amount_per_run']);
                            $('#amount_awarded').val(response['amount_awarded']);
                        }else{
                            $('#physical_progress').val('Ingrese un número de contrato válido');
                            $('#financial_progress').val('Ingrese un número de contrato válido');
                            $('#agreement_contractor').val('Ingrese un número de contrato válido');
                            $('#agreement_name').val('Ingrese un número de contrato válido');
                            $('#amount_per_run').val('Ingrese un número de contrato válido');
                            $('#amount_awarded').val('Ingrese un número de contrato válido');
                        }
                    },
                    error: function(){
                        console.log('error');
                        return false;
                    },
                });
            }else{
                $('#physical_progress').val('');
                $('#financial_progress').val('');
                $('#agreement_contractor').val('');
                $('#agreement_name').val('');
                $('#amount_per_run').val('');
                $('#amount_awarded').val('');
            } 
        });
        //On click add_work show new work form
        $("#add_work").click(function() {
            $('#new_work_modal').modal('show');
        });
        //On select type get subtype
        $(document).on("change", ".type-select", function(){
            if ($(this).val() !== ''){
                $.ajax({
                    url: '<?php echo base_url(); ?>inventory/get_content',
                    type: 'POST',
                    data: {
                        'main_cat': 'buildings',
                        'data': $(this).val()
                    },
                    beforeSend:function(){
                         $(".subtype-select").html('<option value="">--Cargando--</option>');
                    },
                    success: function(data) {
                        console.log(data);
                        $(".subtype-select").html(data);
                        $(".clasification-select").html('<option value="">-select-</option>');
                    },
                    error: function(request, error){
                        alert("Request: " + JSON.stringify(request));
                    }
                });
            }
        });
        //On select subtype get clasification
        $(document).on("change", ".subtype-select", function(){
            if ($(this).val() !== ''){
                $.ajax({
                    url: '<?php echo base_url(); ?>inventory/get_content',
                    type: 'POST',
                    data: {
                        'main_cat': 'office',
                        'data': $(this).val()
                    },
                    beforeSend:function(){
                         $(".clasification-select").html('<option value="">--Cargando--</option>');
                    },
                    success: function(data) {
                        console.log(data);
                        $(".clasification-select").html(data);                        
                    },
                    error: function(request, error){
                        alert("Request: " + JSON.stringify(request));
                    }
                });
            }
        });

        
        //Edit Work
        $(".work_edit").click(function() {
            var work_id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo base_url(); ?>works/get_work_info",
                type: "POST",
                data: {"work_id": work_id},
                success: function(data){
                    console.log(data);
                    $('#work_edit_form').html(data);
                    $('#work_edit_modal').modal('show');
                    return false;
                },
                error: function(jqxhr,textStatus,errorThrown){
                    console.log(jqxhr);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            return false;

        });
        //Delete Work
        $('.work_delete').click(function(e) {
            e.preventDefault();
            var work_id = $(this).attr('data-id');
            if (confirm("<?php echo $this->lang->line('confirm_delete_work'); ?>") == false) {
                return;
            }
            var element = this;
            $.ajax({
                url: "<?php echo base_url(); ?>works/delete_work",
                type: "POST",
                data: {"work_id": work_id},
                success: function(data){
                    console.log(data);
                    $(element).parents('tr')[0].remove();
                    return false;
                },
                error: function(){
                    console.log('error');
                    return false;
                },
            });

        });
        //img_upload
        $('.img_upload').click(function(e) {
            e.preventDefault();
            alert("No disponible");
        });
        //log_view
        $('.log_view').click(function(e) {
            e.preventDefault();
            alert("No disponible");
        });
    });
    

    function validateForm() {

        if ($('#username').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_username"); ?>');
            $('#error').show();
            return false;
        }
        else if (!ValidateEmail($("#email").val()))
        {
            $('#error').html('<?php echo $this->lang->line("error_validemail"); ?>');
            $('#error').show();
            return false;
        }
        else if ($('#user-group').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_group"); ?>');
            $('#error').show();
            return false;
        }
        else if ($('#password').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_password"); ?>');
            $('#error').show();
            return false;
        }
        else
        {
            $('#error').hide();
            return true;
        }
    }
    function validateEditForm() {
// 
        if ($('#edit_username').val() === '')
        {
            $('#edit_error').html('<?php echo $this->lang->line("error_username"); ?>');
            $('#edit_error').show();
            return false;
        }
        else if (!ValidateEmail($("#edit_email").val()))
        {
            $('#edit_error').html('<?php echo $this->lang->line("error_validemail"); ?>');
            $('#edit_error').show();
            return false;
        }
        else if ($('#edit-user-group').val() === '')
        {
            $('#edit_error').html('<?php echo $this->lang->line("error_group"); ?>');
            $('#edit_error').show();
            return false;
        }
        else if ($('#edit_password').val() === '')
        {
            $('#edit_error').html('<?php echo $this->lang->line("error_password"); ?>');
            $('#edit_error').show();
            return false;
        }
        else
        {
            $('#edit_error').hide();
            return true;
        }
    }
    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    }
    ;

</script>
</body>
</html>