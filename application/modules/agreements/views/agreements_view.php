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
                                <h3 class="page-title"><?php echo $this->lang->line('agreements_title'); ?></h3>

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
                                            <?php echo $this->lang->line('agreements_list'); ?>
                                        </div>

                                    </div>                                    
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="btn-group">
                                                <button id="add_user" class="btn btn-success">
                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                </button>
                                            </div>                                            
                                        </div>
                                        <!--AGREEMENTS LIST-->
                                        <div id="users_list">
                                            <?php echo $this->load->view('agreements/agreements_list'); ?>
                                        </div>
                                        <!--END. AGREEMENTS LIST-->
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT -->
                    </div>
                </div>

                <!--ADD NEW AGREEMENT FORM-->
                <div class="modal fade" id="newuser_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('add_new_agreement'); ?></h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
                                        <!-- onsubmit="return validateForm()" -->
                                        <form name="newuser" method="post" action="<?php echo base_url(); ?>agreements/add_agreement" class="form-horizontal">
                                            <div class="form-body">
                                        	<!--FORM BODY -->
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
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_name'); ?></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="agreement_name" name="agreement_name" class="form-control">

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
                                                                <input type="text" id="agreement_contractor" name="agreement_contractor" value="" class="form-control">
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
                                                                <input type="text" id="amount_awarded" name="amount_awarded" value="" class="form-control">
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
                                                                <input type="text" id="amount_per_run" name="amount_per_run" value="" class="form-control">
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
                                                                <input type="text" id="physical_progress" name="physical_progress" value="" class="form-control">
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
                                                                <input type="text" id="financial_progress" name="financial_progress" value="" class="form-control">
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
                                                            <input type="submit" name="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn btn-success" style="margin-top:30px;margin-left:226px;">

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
                    </div>
                </div>
                <!--END. ADD NEW AGREEMENT-->

                <!--user edit modal start-->
                <div class="modal fade" id="agreement_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_agreement'); ?></h4>
                            </div>
                            <div id="edit_modal" class="modal-body">

                            </div>

                        </div>
                    </div>
                </div>
                <!--user edit modal end-->
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/jquery-1.11.1.min.js"></script>
<!--search scripts-->
<script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--datatables scripts-->
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/dataTables.responsive.min.js"></script>
<!--datepicker-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
<script>
$(document).ready(function () {
        $('#example').DataTable({
            //responsive: true;
            language: {
                url: "<?php echo base_url(); ?>assets/plugins/datatables/js/lang/Spanish.json"
            },
            aLengthMenu: [
                    [5, 15, 20, -1],
                    [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
                ],
            iDisplayLength: 5,
        });
    /*var responsiveHelper = undefined;
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
    });*/

    $("#add_user").click(function() {
        $('#newuser_modal').modal('show');
    });
    //user edit function
    $(".agreement_edit").click(function() {
        var agreement_number = $(this).attr('data-id');
        $.ajax({
            url: "<?php echo base_url(); ?>agreements/get_agreement_info",
            type: "POST",
            data: {"agreement_id": agreement_number},
            success: function(data){
                console.log(data);
                $('#edit_modal').html(data);
                $('#agreement_edit_modal').modal('show');
                return false;
            },
            error: function(){
                console.log('error');
                return false;
            },
        });
        return false;
    });
    $('.agreement_delete').click(function(e) {
        e.preventDefault();
        var agreement_id = $(this).attr('data-id');
        if (confirm("Está seguro que desea eliminar este contrato?") == false) {
            return;
        }
        var element = this;
        $.ajax({
            url: "<?php echo base_url(); ?>agreements/delete_agreement",
            type: "POST",
            data: {"agreement_id": agreement_id},
            success: function(data)
            {
                $(element).parents('tr')[0].remove();

                return false;
            },
            error: function()
            {
                console.log('error');
                return false;
            },
        });

    });
    $('.agreement_pdf').click(function(e) {
            e.preventDefault();
            alert("No disponible");
        });
    $('.agreement_csv').click(function(e) {
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

</script>
</body>
</html>