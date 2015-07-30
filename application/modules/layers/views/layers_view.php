<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Linux | Layers</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
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
                                    <h4 class="modal-title"><?php echo $this->lang->line("add_layer"); ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                            <form id="layer_add" name="layer_add" method="post"  enctype="multipart/form-data"onsubmit="return validateForm()" action="<?php echo base_url(); ?>layers/add_layer" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line("name"); ?></label>
                                                                <div class="col-md-8">
                                                                    <input type="text" id="layer_name" name="name" value="" class="form-control">

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
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line("table_description"); ?></label>
                                                                <div class="col-md-8">
                                                                    <textarea id="layer_description" name="description" value="" class="form-control" rows="3"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                       
                                                        <!--/span-->
                                                    </div>
                                                    <!--layer icon upload-->
                                                    <div class="row">
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line('icon');?></label>
                                                                <div class="col-md-8">
                                                                    <input type="file" id="layer_icon" name="icon" value="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                       
                                                        <!--/span-->
                                                    </div>
                                                    <!--layer icon upload-->

                                                    <!--/row-->

                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input id="layer_add_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save');?>" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>

                    <!--edit layer-->
                    <div class="modal fade" id="edit-layer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title"><?php echo $this->lang->line('edit_layer');?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="edit_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                            <form id="layer_edit" name="layer_edit" method="post"  onsubmit="return validateEditForm()" action="<?php echo base_url(); ?>layers/edit_layer" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                      
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line("name"); ?></label>
                                                                <div class="col-md-8">
                                                                    <input type="hidden" id="layer_id" name="layer_id" value="" class="form-control">

                                                                    <input type="text" id="layer_edit_name" name="name" value="" class="form-control">

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
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line("table_description"); ?></label>
                                                                <div class="col-md-8">
                                                                    <textarea id="layer_edit_description" name="description" value="" class="form-control" rows="3"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                       
                                                        <!--/span-->
                                                    </div>
                                                    <!--layer icon upload-->
                                                    <div class="row">
                                                      
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line('new_icon');?></label>
                                                                <div class="col-md-8">
                                                                    <input type="file" id="layer_icon" name="new_icon" value="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                       
                                                        <!--/span-->
                                                    </div>
                                                    <!--layer icon upload-->

                                                    <!--previous layer icon-->
                                                    <div class="row">
                                                       
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-4"><?php echo $this->lang->line('previous_icon');?></label>
                                                                <input type="hidden" name="pre_image" id="pre_image">
                                                                <div id="pre_icon" class="col-md-8">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                       
                                                        <!--/span-->
                                                    </div>
                                                    <!--previous layer icon-->
                                                    <!--/row-->

                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input id="layer_add_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save');?>" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!--edit layer-->

                    <!--add layer-item model-->

                    <!--add layer item model end-->

                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                                <?php echo $this->lang->line('layers_menu'); ?>
                            </h3>


                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable tabbable-custom boxless tabbable-reversed">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                <div class="portlet box blue">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <?php echo $this->lang->line('layers_list'); ?>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#portlet-config" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>
                                                            <!--                                                            <div class=" pull-right">
                                                                                                                            <lable><?php echo $this->lang->line("table_search"); ?> <input type="text" class="form-control input-small input-inline"></lable>
                                                                                                                        </div>-->
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
                                                                   <?php echo $this->lang->line('action');?>
                                                                    </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($layers as $layer) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
    <!--                                                                            <a href=""  data-toggle="modal" data-id="<?php echo $layer['id']; ?>" class="layer_click"><?php echo $layer['layer_name']; ?></a>-->
                                                                            <?php 
                                                                            if ($layer['layer_name'] == 'building' && $layer['id'] == 1)
                                                                            echo $this->lang->line('dashboard_location_building');
                                                                            else
                                                                            echo $layer['layer_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php 
                                                                            if ($layer['layer_name'] == 'building' && $layer['id'] == 1)
                                                                            echo $this->lang->line('dashboard_location_building');
                                                                            else
                                                                            echo $layer['layer_description']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($layer['layer_name'] == 'building' && $layer['id'] == 1) {
                                                                                ?>
                                                                                <a href="<?php echo base_url(); ?>location/"><input type="button" name="" value="<?php echo $this->lang->line('dashboard_location_list');?>"></a>
                                                                                <?php
                                                                            } else {
                                                                                ?>
                                                                                <a href="<?php echo base_url(); ?>layer/<?php echo $layer['layer_name']; ?>"><input type="button" name="" value="<?php echo $this->lang->line('dashboard_location_list');?>"></a>    
                                                                                <a class="layer_edit" data-id="<?php echo $layer['id']; ?>" data-layer="<?php echo $layer['layer_name']; ?>" data-description="<?php echo $layer['layer_description']; ?>" data-icon="<?php echo $layer['layer_icon']; ?>" href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line('table_edit');?>"></a>
                                                                                <a class="layer_delete" data-id="<?php echo $layer['id']; ?>" href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line('table_delete');?>"></a>

                                                                         <?php } ?>
                                                                        </td>

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


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE CONTENT-->

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
        <script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?><?php echo base_url(); ?>assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<!--        <script src="<?php echo base_url(); ?>assets/js/core/app.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/custom/maps-google.js" type="text/javascript"></script>

        <!--search scripts-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/jquery.dataTables.js"></script> 
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
        <!--search scripts-->

        <script>



                                                $(document).ready(function() {
                                                    App.init();
                                                    //TableEditable.init();
                                                    //layer click
                                                    //search and pagination language conversion start
                                                $('#sample_editable_1').dataTable(
//                                                        {
//                                                    "aLengthMenu": [
//                                                        [5, 15, 20, -1],
//                                                        [5, 15, 20, "<?php echo $this->lang->line('all');?>"] // change per page values here
//                                                    ],
//                                                    // set the initial value
//                                                    "iDisplayLength": 5,
//                                                    "sPaginationType": "bootstrap",
//                                                    "oLanguage": {
//                                                         "sUrl": "<?php echo base_url();?>assets/datatable_lan/<?php echo $language;?>.txt"
//                                                    },
//                                                    "aoColumnDefs": [{
//                                                            'bSortable': false,
//                                                            'aTargets': [0]
//                                                        }
//                                                    ]
//                                                }
                                                    );
                                                //search and pagination language conversion end
                                                                                                    MapsGoogle.init();


                                                });
                                                $(".layer_edit").click(function() {
                                                    //e.preventdefault();
                                                    var layer_id = $(this).attr("data-id");
                                                    var layer_name = $(this).attr("data-layer");
                                                    var layer_description = $(this).attr("data-description");
                                                    var layer_icon = $(this).attr("data-icon");
                                                    //console.log(layer_id);
                                                    $('#layer_id').val(layer_id);
                                                    $('#layer_edit_name').val(layer_name);
                                                    $('#layer_edit_description').val(layer_description);
                                                    $('#pre_image').val(layer_icon);
                                                    $('#pre_icon').html('<img height="70" width="70" src="<?php echo base_url(); ?>assets/img/map_icons/' + layer_icon + '">');
                                                    $("#edit-layer").modal('show');
                                                });
                                                //delte layer start
                                                 $('.layer_delete').click(function(e) {
                                                        e.preventDefault();
                                                        var layer_id = $(this).attr('data-id');
                                                        if (confirm("Are you sure to delete this user?") == false) {
                                                            return;
                                                        }
                                                        var element = this; 
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>layers/delete_layer",
                                                            type: "POST",
                                                            data: {"layer_id": layer_id},
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
                                                    //delete layer end
                                                function validateForm() {
                                                    if ($('#layer_name').val() === '')
                                                    {
                                                        $('#error').html("<?php echo $this->lang->line('error_layername');?>");
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if($('#layer_description').val() === '')
                                                    {
                                                        $('#error').html("<?php echo $this->lang->line('error_description');?>");
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if($('#layer_icon').val() === '')
                                                    {
                                                        $('#error').html("<?php echo $this->lang->line('error_layericon');?>");
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        $('#error').hide();
                                                        return true;
                                                    }
                                                }
                                                function validateEditForm()
                                                {
                                                    if ($('#layer_edit_name').val() === '')
                                                    {
                                                         $('#edit_error').html("<?php echo $this->lang->line('error_layername');?>");
                                                        $('#edit_error').show();
                                                        return false;
                                                    }
                                                    else if($('#layer_edit_description').val() === '')
                                                    {
                                                         $('#edit_error').html("<?php echo $this->lang->line('error_description');?>");
                                                         $('#edit_error').show();
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