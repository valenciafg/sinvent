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
                                <h3 class="page-title"><?php echo $this->lang->line('users_menu'); ?></h3>

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
    <!--								<i class="fa fa-edit"></i>Editable Table-->
                                            <?php echo $this->lang->line('user_list'); ?>
                                        </div>

                                    </div>                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="btn-group">
    <!--                                                                    <a href="<?php echo base_url(); ?>users/add">-->
                                                <button id="add_user" class="btn btn-success">
                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                </button>
                                                <!--                                                            </a>-->
                                            </div>
                                            
                                        </div>
                                        <div id="users_list">
                                            <?php echo $this->load->view('users/users_list'); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT -->
                    </div>
                </div>

                <!--user add modal-->
                <div class="modal fade" id="newuser_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('add_new_user'); ?></h4>
                            </div>
                            <div class="modal-body">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
                                        <form name="newuser" method="post" onsubmit="return validateForm()" action="<?php echo base_url(); ?>users/add" class="form-horizontal">
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('name'); ?></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="username" class="form-control" name="username">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label col-md-4"><?php echo $this->lang->line('table_cargo'); ?></label>
                                                                                                    <div class="col-md-8">
                                                                                                        <input type="text" id="cargo" name="cargo" class="form-control">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            /span
                                                                                        </div>-->
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_email'); ?></label>
                                                            <div class="col-md-8">
                                                                <input type="text" id="email" name="email" class="form-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('password'); ?></label>
                                                            <div class="col-md-8">
                                                                <input type="password" id="password" name="password" value="" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('table_group'); ?></label>
                                                            <div class="col-md-8">
                                                                <select id="user-group" name="group" class="form-control">
                                                                    <?php
                                                                    echo '<option value="">--seleccione--</option>';
                                                                    foreach ($groups as $group) {
                                                                        echo '<option value="' . $group["id"] . '">' . $group["name"] . '</option>';
                                                                    }
                                                                    ?>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<!--                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4"><?php echo $this->lang->line("language"); ?> </label>
                                                            <div class="col-md-8">
                                                                <select name="language" class="form-control">
                                                                    <option value="english">English</option>
                                                                    <option value="spanish">Spanish</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>-->

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
                            <!--      <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>-->
                        </div>
                    </div>
                </div>
                <!--user add modal end-->

                <!--user edit modal start-->
                <div class="modal fade" id="user_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_user'); ?></h4>
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
<!--linux files-->
<script>
                                            jQuery(document).ready(function() {
                                                App.init();
                                                //TableEditable.init();
                                                //search and pagination language conversion start
                                                $('#sample_editable_1').dataTable({
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
                                                });
                                                //search and pagination language conversion end
                                                $("#add_user").click(function() {
                                                    $('#newuser_modal').modal('show');
                                                });
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