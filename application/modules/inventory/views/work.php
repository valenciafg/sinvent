<?php
/* * ***************************************************
  <copyright>
  Linux Solutions, C.A.
  Alfonso Santana
  Caracas - Venezuela
  Todos los derechos reservados 2015
  </copyright>
 * ************************* */
$this->load->view('dashboard/header');?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('dashboard/left_menu'); ?>
            <div class="col-md-10 col-sm-9 col-lg-10">
                <br>
                <div class="page-container">
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <div class="page-content">
                            <!-- NEW WORK/SERVICE WINDOW-->
                            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line('dashboard_location_work'); ?></h4>
                                        </div>
                                        <!--NEW WORK FORM-->
                                        <div class="modal-body">
                                            <?php $this->load->view("new_work"); ?>
                                        </div>                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- END. NEW WORK/SERVICE WINDOW-->
                            <div class="modal fade" id="img_upload_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line('upload_image'); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form name="inventoryimage" onsubmit="return validateUploadForm()" action="<?php echo base_url(); ?>inventory/do_upload" method="post" enctype="multipart/form-data">
                                                <div class="fileuploadform">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="upload_error" style="padding-left: 220px;color: red;display:none;"></div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">

<?php echo $this->lang->line('dashboard_location_imglocation'); ?></label>
                                                                <div class="col-md-8">
                                                                    <input type="hidden" name="inventory_id" id="inventory_id">
                                                                    <input type="file" id="inventory_img" name="inventory_img">
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4">
<?php echo $this->lang->line("table_description"); ?>
                                                                </label>
                                                                <div class="col-md-8">
                                                                    <textarea id="inventory_img_description" name="inventory_img_description" value="" class="form-control" rows="3"></textarea>
                                                                </div>


                                                            </div>
                                                        </div>


                                                        <!--/span-->

                                                        <!--/span-->
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" name="submit" value="<?php echo $this->lang->line('upload'); ?>" 
                                                   class="btn blue">
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade" id="portlet-config31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12 ">

                                                    <form name="searchinventory" action="<?php echo base_url(); ?>inventroy/search_inventroy" method="post" class="form-horizontal">
                                                        <div class="form-body ">


                                                            <!--/row-->
                                                            <div class="txt11">
                                                                <div class="row">

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Building</label>
                                                                            <div class="col-md-8">
                                                                                <select name="building" class="form-control building-select">

                                                                                    <?php
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
                                                                            <label class="control-label col-md-4">Floor</label>
                                                                            <div class="col-md-8">
                                                                                <select name="floor" class="form-control floor-select">
                                                                                    <option value="">-select-</option>

                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4">Office</label>
                                                                            <div class="col-md-8">
                                                                                <select name="office" class="form-control office-select">
                                                                                    <option value="">-select-</option>    
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
                                                                                Job Name</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4">Engineer Name</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">From</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">

                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">To</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <!--/row-->
                                                            </div>
                                                            <div class="txt211">
                                                                <div class="row">

                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Building</label>
                                                                            <div class="col-md-8">
                                                                                <select name="building" class="form-control building-select">

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
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Floor</label>
                                                                            <div class="col-md-9">
                                                                                <select name="floor" class="form-control floor-select">
                                                                                    <option value="">-select-</option>

                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                    <div class="col-md-4">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-3">Office</label>
                                                                            <div class="col-md-9">
                                                                                <select name="office" class="form-control office-select">
                                                                                    <option value="">-select-</option>    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Brand</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control" >

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-3">Model</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Serial</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3"><p style="margin-left:-10px;">Description</p></label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <!--/row-->

                                                            </div>

                                                            <!--/row-->

                                                            <!--/row-->
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn blue">Submit</button>

                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade" id="log_details_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line('log_details'); ?></h4>
                                        </div>
                                        <div id="log_info" class="modal-body">


                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="page-title">
                                    <?php echo $this->lang->line('work_inventory'); ?>
                                    </h3>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <?php echo $this->lang->line('dashboard_location_worklist'); ?>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <?php
                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                            ?>
                                                <div class="table-toolbar">
                                                    <div class="btn-group">
                                                        <a href="#portlet-config" data-toggle="modal" class="config">
                                                            <button id="sample_editable_1_new" class="btn green">
                                                                <?php echo $this->lang->line('add_new_button'); ?> <i class="fa fa-plus"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php } 
                                            
                                            ?>
                                            <!--WORK LIST-->
                                            <div id="users_list">
                                                <?php $this->load->view('inventory/work_list');?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END CONTENT -->
                </div>                
                <!--user edit modal end-->

                <!--work edit modal start-->
                <div class="modal fade" id="work_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_service'); ?></h4>
                            </div>
                            <div id="work_edit_form" class="modal-body">

                            </div>
                        </div>
                    </div>
                </div>
                <!--work edit modal end-->
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
<script>
    jQuery(document).ready(function() {
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
        /*App.init();
        $('#sample_editable_1').dataTable(
                {
                    "aLengthMenu": [
                        [5, 15, 20, -1],
                        [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
                    ],
                    // set the initial value
                    "iDisplayLength": 5,
                    "sPaginationType": "bootstrap",
                    "oLanguage": {
                        "sUrl": "<?php echo base_url(); ?>assets/datatable_lan/<?php echo $language; ?>.txt"
                    },
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [0]
                        }
                    ]
                }
        );    */    
        //search and pagination language conversion end
        //populate floors on building select
        $(document).on("change", ".building-select", function(){
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
                        $(".floor-select").html(data);
                        $(".office-select").html('<option value="">-select-</option>');
                    },
                    error: function(request, error)
                    {
                        alert("Request: " + JSON.stringify(request));
                    }
                });
            }

        });

        //populate office on floor select
         $(document).on("change", ".floor-select", function(){
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
                    $(".office-select").html(data);
                },
                error: function(request, error)
                {
                    alert("Request: " + JSON.stringify(request));
                }
            });
            }

        });


        $('.work_delete').click(function(e) {
            e.preventDefault();
            var work_id = $(this).attr('data-id');
            if (confirm("Se eliminarán todos los archivos relacionados y registros. Está seguro de eliminar este obra?") == false) {
                return;
            }
            var element = this;
            $.ajax({
                url: "<?php echo base_url(); ?>inventory/delete_work",
                type: "POST",
                data: {"work_id": work_id},
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

        //delete user end

        $('#datepicker_from').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
            isRTL: false,
            language: 'es'
        });
        $('#datepicker_to').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',        
            startDate: $('#datepicker_from').val(),
            isRTL: false,
            language: 'es'
        });
        $('.datepicker_from').datepicker()
        .on('changeDate', function(e){
            console.log($('#datepicker_from').val());
            var startDate = new Date();        
            $('#datepicker_to').datepicker('update', $('#datepicker_from').val());                 
            $('#datepicker_to').datepicker('setStartDate', $('#datepicker_from').val());                 
        });
        //inventory image upload
        $(".img_upload").click(function() {
            inventory_id = $(this).attr('data-id');
            $("#inventory_id").val(inventory_id);
            $("#img_upload_modal").modal('show');
        });
        $(".log_view").click(function() {
            inventory_id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo base_url(); ?>inventory/get_inventory_logs",
                type: "POST",
                data: {"inventory_id": inventory_id},
                success: function(data)
                {
                    console.log(data);
                    $("#log_info").html(data);
                }
            })


            $("#inventory_id").val(inventory_id);
            $("#log_details_modal").modal('show');
        });
        //inventory image upload end
//                

    });


    function validateworkForm() {


        if ($('#works_building').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_building"); ?>');
            $('#error').show();
            return false;
        }
        else if ($('#jobname').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_jobname"); ?>');
            $('#error').show();
            return false;
        }
        else if ($("#engineername").val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_engineername"); ?>');
            $('#error').show();
            return false;
        }
        else if ($('#datepicker_from').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_datepicker_from"); ?>');
            $('#error').show();
            return false;
        }
        else if ($('#datepicker_to').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_datepicker_to"); ?>');
            $('#error').show();
            return false;
        }
        else
        {
            $('#error').hide();
            return true;
        }



    }

    //validate work edit form
    function validateworkEditForm() {


        if ($('#work_edit_building').val() === '')
        {
            $('#work_edit_error').html('<?php echo $this->lang->line("error_building"); ?>');
            $('#work_edit_error').show();
            return false;
        }
        else if ($('#work_edit_jobname').val() === '')
        {
            $('#work_edit_error').html('<?php echo $this->lang->line("error_jobname"); ?>');
            $('#work_edit_error').show();
            return false;
        }
        else if ($("#work_edit_engineername").val() === '')
        {
            $('#work_edit_error').html('<?php echo $this->lang->line("error_engineername"); ?>');
            $('#work_edit_error').show();
            return false;
        }
        else if ($('#datepicker_edit_from').val() === '')
        {
            $('#work_edit_error').html('<?php echo $this->lang->line("error_datepicker_from"); ?>');
            $('#work_edit_error').show();
            return false;
        }
        else if ($('#datepicker_edit_to').val() === '')
        {
            $('#work_edit_error').html('<?php echo $this->lang->line("error_datepicker_to"); ?>');
            $('#work_edit_error').show();
            return false;
        }
        else
        {
            $('#work_edit_error').hide();
            return true;
        }



    }

    //validate  upload form
    function validateUploadForm() {
        if ($('#inventory_img').val() === '')
        {
            $('#upload_error').html("<?php echo $this->lang->line('error_file_upload'); ?>");
            $('#upload_error').show();
            return false;
        }
        else if ($('#inventory_img_description').val() === '')
        {
            $('#upload_error').html("<?php echo $this->lang->line('error_description'); ?>");
            $('#upload_error').show();
            return false;
        }

        else
        {
            $('#upload_error').hide();
            return true;
        }
    }
var search = $("#contract_number");
search.keyup(function() {
    if (search.val() != '') {
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
                    $('#engineername').val(response['contractor']);
                    $('#amount_per_run').val(response['amount_per_run']);
                    $('#amount_awarded').val(response['amount_awarded']);
                }else{
                    $('#physical_progress').val('Ingrese un número de contrato válido');
                    $('#financial_progress').val('Ingrese un número de contrato válido');
                    $('#engineername').val('Ingrese un número de contrato válido');
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
        $('#engineername').val('');
        $('#amount_per_run').val('');
        $('#amount_awarded').val('');
    }
});

$(".work_edit").click(function() {
    
    var work_id = $(this).attr('data-id');
    $.ajax({
        url: "<?php echo base_url(); ?>inventory/get_work_info",
        type: "POST",
        data: {"work_id": work_id},
        success: function(data){
            console.log(data);
            $('#work_edit_form').html(data);
            $('#work_edit_modal').modal('show');
            return false;
        },
        error: function(){
            console.log('error');
            return false;
        },
    });
    return false;
});
</script>
</body>
</html>