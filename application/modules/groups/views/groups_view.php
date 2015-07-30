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
                <div class="page-container">

                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <div class="page-content">
                            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line("add_group"); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="error" style="padding-left: 220px;color: red;display:none;"><?php echo $this->lang->line('error_groupname'); ?></div>

                                                    <form id="group_add" name="group_add" method="post"  onsubmit="return validategroupForm()" action="<?php echo base_url(); ?>groups/add_group" class="form-horizontal">
                                                        <div class="form-body">

                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4"><?php echo $this->lang->line("table_group_name"); ?></label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" id="group" name="group" value="" class="form-control">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>
                                                            <!--/row-->

                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4"><?php echo $this->lang->line('table_role'); ?></label>
                                                                        <div class="col-md-8">
                                                                            <select id="roles" name="role" class="form-control role-select">
                                                                                <?php
                                                                                echo '<option value="">--seleccione--</option>';
                                                                                foreach ($roles as $role) {
                                                                                    echo '<option value="' . $role["id"] . '">' . $this->lang->line($role["name"]). '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>

                                                            <!--/row-->


                                                            <!--/row-->
                                                        </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" name="submit" value="<?php echo $this->lang->line("save"); ?>" class="btn blue">

                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <!--group edit -->
                            <div class="modal fade" id="group_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line('edit_group'); ?></h4>
                                        </div>
                                        <div id="group_edit_modal_body" class="modal-body">

                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!--group edit -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                                    <h3 class="page-title">
                                        <?php echo $this->lang->line("group_menu"); ?>
                                    </h3>


                                </div>
                            </div>
                            <!-- END PAGE HEADER-->
                            <!-- BEGIN PAGE CONTENT-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet box blue">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <?php echo $this->lang->line("group_list"); ?>
                                                    </div>

                                                </div>                                                <div class="portlet-body">
                                                    <div class="table-toolbar">
                                                        <div class="btn-group">
                                                            <a href="#portlet-config" data-toggle="modal" class="config">
                                                                <button id="" class="btn green">
                                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                </button></a>
                                                        </div>

                                                    </div>
                                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <?php echo $this->lang->line("table_group_name"); ?>
                                                                </th>
                                                                <th>
                                                                    <?php echo $this->lang->line("table_role"); ?>
                                                                </th>
                                                                <th>
                                                            <?php echo $this->lang->line('dashboard_location_action'); ?>
                                                        </th>
                                                                
                        <!--                                                        <th>
                                                                                    Delete
                                                                                </th>-->

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($groups as $group) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $group['name']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $this->lang->line($group['role_name']); ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="" class="group_edit" data-id="<?php echo $group['id']; ?>">
                                                                            <button><?php echo $this->lang->line('table_edit'); ?></button>
                                                                            </a>
                                                                   

                                                                        <a class="group_delete" data-id="<?php echo $group['id']; ?>" href="#">
                                                                            <button><?php echo $this->lang->line('table_delete'); ?></button>
                                                                            </a>
                                                                    </td>

        <!--                                                            <td>
                                                                        <a class="delete" href="javascript:;">
                                                                    <?php echo $this->lang->line("table_delete"); ?>
                                                                        </a>
                                                                    </td>-->

                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END EXAMPLE TABLE PORTLET-->
                                        </div>
                                    </div>
                                </div>
                                <!-- END CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT -->
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
//                                                    MapsGoogle.init();
//                                                    Index.init();
//                                                    Index.initJQVMAP(); // init index page's custom scripts
//                                                    Index.initCalendar(); // init index page's custom scripts
//                                                    Index.initCharts(); // init index page's custom scripts
//                                                    Index.initChat();
//                                                    Index.initMiniCharts();
//                                                    Index.initDashboardDaterange();
//                                                    Index.initIntro();
//                                                    Tasks.initDashboardWidget();
                                                            //   $('#building_add_submit').click(function(){
                                                            //    validateForm();   
                                                            //});
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
                                                            $(".group_edit").click(function() {

                                                                var group_id = $(this).attr('data-id');
                                                                $.ajax({
                                                                    url: "<?php echo base_url(); ?>groups/get_group_info",
                                                                    type: "POST",
                                                                    data: {"group_id": group_id},
                                                                    success: function(data)
                                                                    {
                                                                        console.log(data);
                                                                        $('#group_edit_modal_body').html(data);
                                                                        $('#group_edit_modal').modal('show');
                                                                        return false;
                                                                    },
                                                                    error: function()
                                                                    {
                                                                        console.log('error');
                                                                        return false;
//                                                                $('#edit_modal').html(data);
//                                                                $('#user_edit').modal('show');
//                                                                return false;
                                                                    },
                                                                });
                                                                return false;

                                                            });
                                                            return false;


                                                        });
                                                        function validategroupForm() {
                                                            if ($('#group').val() === '')
                                                            {
                                                                $('#error').show();
                                                                return false;
                                                            }
                                                            else if ($('#roles').val() === '')
                                                            {
                                                                $('#error').html('<?php echo $this->lang->line("error_role"); ?>');
                                                                $('#error').show();
                                                                return false;
                                                            }   
                                                            else
                                                            {
                                                                $('#error').hide();
                                                                return true;
                                                            }
                                                        }
                                                        function validategroupEditForm()
                                                        {
                                                            if ($('#edit_group').val() === '')
                                                            {
                                                                $('#edit_error').show()
                                                                return false;
                                                            }
                                                            else
                                                            {
                                                                $('#edit_error').hide()
                                                                return true;
                                                            }
                                                        }
                                                        //user delete start
                                                        $('.group_delete').click(function(e) {
                                                            e.preventDefault();
                                                            var group_id = $(this).attr('data-id');
                                                            if (confirm("Are you sure to delete this group?") == false) {
                                                                return;
                                                            }
                                                            var element = this;
                                                            $.ajax({
                                                                url: "<?php echo base_url(); ?>groups/delete_group",
                                                                type: "POST",
                                                                data: {"group_id": group_id},
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

</script>
</body>
</html>