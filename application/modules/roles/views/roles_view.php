<?php
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
?>
<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Linux | Admin Dashboard Template</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!--search css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.css"/>
          <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2-metronic.css"/>
        <!--search css-->
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <style>
            #portlet-config1{
            }
            #portlet-config2{
            }
        </style>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('dashboard/header'); ?>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('dashboard/dashboard_left_menu'); ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Add Role</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>

                                            <form id="role_add" name="role_add" method="post"  onsubmit="return validateroleForm()" action="<?php echo base_url(); ?>roles/add_role" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">
                    				 <?php echo $this->lang->line("table_role"); ?>
                                                                </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" id="role" name="role" value="" class="form-control" placeholder="Enter role">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">
                                                                <?php echo $this->lang->line("table_description"); ?>
                                                                </label>

                                                                <div class="col-md-8">
                                                                    <textarea id="description" name="description" value="" class="form-control" rows="3"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
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

                    <!--role edit -->
                    <div class="modal fade" id="role_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Edit Role</h4>
                                </div>
                                <div id="role_edit_modal_body" class="modal-body">
                                    
                                </div>
                                
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!--role edit -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                                <?php echo $this->lang->line("table_role"); ?>
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
                                                Roles list    
                                                </div>

                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="btn-role">
                                                    <a href="#portlet-config" data-toggle="modal" class="config">
                                                        <button id="" class="btn green">
                                                            <?php echo $this->lang->line("add_new_button"); ?><i class="fa fa-plus"></i>
                                                        </button></a>
                                                </div>

                                            </div>
                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                     <?php echo $this->lang->line("name"); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line("table_description"); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line("table_edit"); ?>
                                                        </th>
<!--                                                        <th>
                                                            Delete
                                                        </th>-->

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($roles as $role) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $role['name']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $role['description']; ?>
                                                            </td>
                                                            <td>
                                                                <a href="" class="role_edit" data-id="<?php echo $role['id']; ?>">
                                                                    <?php echo $this->lang->line("table_edit"); ?>
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
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('dashboard/footer'); ?>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>assets/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<!--        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
         END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<!--        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        
         IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support 
        <script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
         END PAGE LEVEL PLUGINS 
         BEGIN PAGE LEVEL SCRIPTS 
        <script src="<?php echo base_url(); ?>assets/js/custom/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/tasks.js" type="text/javascript"></script>-->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

<!--        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
         END PAGE LEVEL PLUGINS 
         BEGIN PAGE LEVEL SCRIPTS 
        <script src="<?php echo base_url(); ?>assets/js/custom/maps-google.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!--search scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/jquery.dataTables.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
        <!--search scripts-->
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
                                                jQuery(document).ready(function() {
                                                    App.init();
                                                    TableEditable.init();
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
                                                    $(".role_edit").click(function() {
                   
                                                        var role_id = $(this).attr('data-id');
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>roles/get_role_info",
                                                            type: "POST",
                                                            data: {"role_id": role_id},
                                                            success: function(data)
                                                            {
                                                                console.log(data);
                                                                $('#role_edit_modal_body').html(data);
                                                                $('#role_edit_modal').modal('show');
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
                                                function validateroleForm() {
                                                    if ($('#role').val() === '' || $('#roles').val() === '')
                                                    {
                                                        $('#error').show()
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        $('#error').hide()
                                                        return true;
                                                    }
                                                }
                                                function validateroleEditForm()
                                                {
                                                    
                                                       if ($('#edit_role').val() === '' || $('#edit_description').val() === '')
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

        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>