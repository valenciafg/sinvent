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
                                <h3 class="page-title"><?php echo $this->lang->line('deliveries_title'); ?></h3>
                                <!-- END PAGE TITLE & BREADCRUMB-->
                            </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->
                        <!-- Nav tabs. PESTAÑAS-->
                        <!--TAB HEADERS-->
                          <!--<ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#delivery_list" aria-controls="delivery_list" role="tab" data-toggle="tab">
                                    <?php //echo $this->lang->line('deliveries_list'); ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#new_delivery" aria-controls="new_delivery" role="tab" data-toggle="tab">
                                    <?php //echo $this->lang->line('add_new_delivery'); ?>
                                </a>
                            </li>    
                          </ul>-->
                        <!--/END TAB HEADERS-->
                        <!-- TAB BODY-->
                        <!--<div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="delivery_list">
                        -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <?php echo $this->lang->line('deliveries_list'); ?>
                                                </div>
                                            </div>                                    
                                            <div class="portlet-body">
                                                <div class="table-toolbar">
                                                    <div class="btn-group">
                                                        <button id="add_delivery" class="btn btn-success">
                                                            <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>                                            
                                                </div>
                                                <!--AGREEMENTS LIST-->
                                                <div id="users_list">
                                                    <!-- AQUI CAMBIAR POR LISTAS DE ENTREGAS-->                                                    
                                                    <?php //echo $this->load->view('agreements/agreements_list'); ?>
                                                </div>
                                                <!--END. AGREEMENTS LIST-->                                                
                                            </div>
                                        </div>                    
                                    </div>  
                                </div>
                                    <!-- END PAGE CONTENT -->
                            <!--</div>-->                            
                            
                        <!---</div>-->
                        <!-- END. TAB BODY-->
                    </div>
                </div>
<!-- NEW DELIVERY FORM -->
<div class="modal fade" id="new_delivery_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<!--<div class="modal fade" id="new_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('add_new_delivery'); ?></h4>
            </div>
            <div class="modal-body">
                <!--<div role="tabpanel" class="tab-pane" id="new_delivery">-->
                    <?php $this->load->view('new_delivery_view'); ?>
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<!-- END. NEW DELIVERY FORM -->
                <!--user edit modal start-->
                <div class="modal fade" id="user_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_user'); ?></h4>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
<!--search scripts-->
<!--search css-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.css"/>

<!--search css-->
<!--extra js-->
<!--extra js-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--linux files-->
<!--search scripts-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/ajax-typehead/js/bootstrap-typeahead.js"></script>
<!--linux files-->
<script>

    jQuery(document).ready(function() {
        App.init();
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID    
        var inputs = ""

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();

            inputs = '<div class="row">'
            inputs = inputs + '<div class="col-xs-2"><input type="text" class="form-control" placeholder="Código" name="id[]"/></div>'
            inputs = inputs + '<div class="col-xs-2"><input type="text" class="form-control" placeholder="ítem" name="item[]"/></div>'
            inputs = inputs + '<div class="col-xs-1"><input type="text" class="form-control" placeholder="Cant" name="cantidad[]"/></div>'
            inputs = inputs + '<div class="col-xs-1"><input type="text" class="form-control" placeholder="Unid" name="unidad[]"/></div>'
            inputs = inputs + '<div class="col-xs-2"><input type="text" class="form-control" placeholder="Fecha" name="fecha[]"/></div>'
            inputs = inputs + '<div class="col-xs-3"><input type="text" class="form-control" placeholder="Observaciones" name="observaciones[]"/></div>'
            inputs = inputs + '<a href="#" class="remove_field"><button class="btn btn-danger">X</button></a>'
            inputs = inputs + '</div>'
            $(wrapper).append(inputs); //add input box
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault();             
             $(this).closest("div").remove();    
        });
        //search and pagination language conversion start
        $('#sample_editable_1').dataTable({
            "responsive": true,
            "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 8,
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sUrl": "<?php echo base_url(); ?>assets/datatable_lan/<?php echo $language; ?>.txt"
            },
            "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [0]
                }
            ]
        });
        //search and pagination language conversion end
        $("#add_delivery").click(function() {
            $('#new_delivery_modal').modal('show');
        });

        //Typeahead
        $('input[name^="id"]').each(function() {
            //alert($(this).val());
            var value = $(this).val(); 
            console.log(value);
            ($(this)).typeahead({
                source: [
                    { id: 1, full_name: 'Toronto', first_two_letters: 'To' },
                    { id: 2, full_name: 'Montreal', first_two_letters: 'Mo' },
                    { id: 3, full_name: 'New York', first_two_letters: 'Ne' },
                    { id: 4, full_name: 'Buffalo', first_two_letters: 'Bu' },
                    { id: 5, full_name: 'Boston', first_two_letters: 'Bo' },
                    { id: 6, full_name: 'Columbus', first_two_letters: 'Co' },
                    { id: 7, full_name: 'Dallas', first_two_letters: 'Da' },
                    { id: 8, full_name: 'Vancouver', first_two_letters: 'Va' },
                    { id: 9, full_name: 'Seattle', first_two_letters: 'Se' },
                    { id: 10, full_name: 'Los Angeles', first_two_letters: 'Lo' }
                ],
                displayField: 'full_name'
            });
        });
        /*$('input[name^="id"]').typeahead({
            source: [
                { id: 1, full_name: 'Toronto', first_two_letters: 'To' },
                { id: 2, full_name: 'Montreal', first_two_letters: 'Mo' },
                { id: 3, full_name: 'New York', first_two_letters: 'Ne' },
                { id: 4, full_name: 'Buffalo', first_two_letters: 'Bu' },
                { id: 5, full_name: 'Boston', first_two_letters: 'Bo' },
                { id: 6, full_name: 'Columbus', first_two_letters: 'Co' },
                { id: 7, full_name: 'Dallas', first_two_letters: 'Da' },
                { id: 8, full_name: 'Vancouver', first_two_letters: 'Va' },
                { id: 9, full_name: 'Seattle', first_two_letters: 'Se' },
                { id: 10, full_name: 'Los Angeles', first_two_letters: 'Lo' }
            ],
            displayField: 'full_name'
        });*/
        //user edit function
        $(".user_edit").click(function() {
            var user_id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo base_url(); ?>users/get_user_info",
                type: "POST",
                data: {"user_id": user_id},
                success: function(data)
                {
                    console.log(data);
                    $('#edit_modal').html(data);
                    $('#user_edit_modal').modal('show');
                    return false;
                },
                error: function()
                {
                    console.log('error');
                    return false;
                },
            });
            return false;

        });
        //user delete start
        $('.user_delete').click(function(e) {
            e.preventDefault();
            var user_id = $(this).attr('data-id');
            if (confirm("Are you sure to delete this user?") == false) {
                return;
            }
            var element = this;
            $.ajax({
                url: "<?php echo base_url(); ?>users/delete_user",
                type: "POST",
                data: {"user_id": user_id},
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