<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>Linux | Layers List</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!--search css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/data-tables/DT_bootstrap.css"/>

        <!--search css-->
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                            <h3 class="page-title">
                                <?php echo ucfirst(trim(urldecode($layer_name))) . ' ' . $this->lang->line('dashboard_location_list'); ?>
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
                                                            <?php //echo $this->lang->line("layer_items"); ?>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-toolbar">
                                                            <div class="btn-group">
                                                                <a href="#add-layer-item" data-toggle="modal" class="config">
                                                                    <button id="sample_editable_1_new" class="btn green">
                                                                        <?php echo $this->lang->line('add') . ' ' . ucfirst(trim(urldecode($layer_name))); ?> <i class="fa fa-plus"></i>
                                                                    </button></a>
                                                            </div>

                                                            <div class=" pull-right">
                                                                <a href="<?php echo base_url(); ?>layers"><button id="sample_editable_1_new" class="btn green"><?php echo $this->lang->line("back"); ?>
                                                                    </button></a>                                               </div>
                                                        </div>
                                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <?php echo $this->lang->line("name"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("layer"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_address"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("label_latitude"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("table_longitude"); ?>
                                                                    </th>
                                                                    <th>
                                                                        <?php echo $this->lang->line("action"); ?>
                                                                    </th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($layers_items as $item) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $item['item_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $item['layer_name']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $item['item_address']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $item['item_latitude']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $item['item_longitude']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <a class="list_edit" data-layer="<?php echo $item['layer_id']; ?>"  data-item-id="<?php echo $item['id']; ?>"  data-item-name="<?php echo $item['item_name']; ?>" data-item-address="<?php echo $item['item_address']; ?>" data-item-latitude="<?php echo $item['item_latitude']; ?>" data-item-longitude="<?php echo $item['item_longitude']; ?>" href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line("table_edit"); ?>"></a>
                                                                            <a class="list_delete" data-item-id="<?php echo $item['id']; ?>"  href="javascript:;"><input type="button" name="" value="<?php echo $this->lang->line("table_delete"); ?>"></a>
                                                                        </td>
                                                                        <?php $layer_id = $item['layer_id']; ?>
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
                    <div class="modal fade" id="add-layer-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title"><?php echo $this->lang->line("add_layer_item"); ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="item_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                            <form id="building_add" name="layer_item_add" method="post"  onsubmit="return validateItem()" action="<?php echo base_url(); ?>layers/add_layer_item" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("name"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="hidden" id="layer_hidden_id" name="layer_hidden_id" value="<?php echo $layer_id; ?>">
                                                                    <input type="text" id="item_name" name="item_name" value="" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("table_address"); ?></label>
                                                                <div class="col-md-9">
                                                                    <textarea id="item_address" name="item_address" value="" class="form-control" rows="3"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("label_latitude"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="item_latitude" name="item_latitude" value="" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("label_longitude"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="item_longitude" name="item_longitude" value="" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input id="item_add_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>


                    <!--layer item edit-->
                    <div class="modal fade" id="edit-layer-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title"><?php echo $this->lang->line('table_edit'); ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="item_edit_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                            <form id=layer_item_edit" name="layer_item_edit" method="post"  onsubmit="return validateItemEdit()" action="<?php echo base_url(); ?>layers/edit_layer_item" class="form-horizontal">
                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("name"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="hidden" id="item_id" name="item_id" value="">

                                                                    <input type="hidden" id="layer_edit_hidden_id" name="layer_id" value="<?php echo $layer_id; ?>">
                                                                    <input type="text" id="item_edit_name" name="item_name" value="" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->

                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("table_address"); ?></label>
                                                                <div class="col-md-9">
                                                                    <textarea id="item_edit_address" name="item_address" value="" class="form-control" rows="3"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("label_latitude"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="item_edit_latitude" name="item_latitude" value="" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"><?php echo $this->lang->line("label_longitude"); ?></label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="item_edit_longitude" name="item_longitude" value="" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-3"></div>
                                                        <!--/span-->
                                                    </div>
                                                    <!--/row-->
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input id="item_edit_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!--layer item edit -->
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
                                                $('#sample_editable_1').dataTable({
                                                    "aLengthMenu": [
                                                        [5, 15, 20, -1],
                                                        [5, 15, 20, "<?php echo $this->lang->line('all');?>"] // change per page values here
                                                    ],
                                                    // set the initial value
                                                    "iDisplayLength": 5,
                                                    "sPaginationType": "bootstrap",
                                                    "oLanguage": {
                                                         "sUrl": "<?php echo base_url();?>assets/datatable_lan/<?php echo $language;?>.txt"
                                                    },
                                                    "aoColumnDefs": [{
                                                            'bSortable': false,
                                                            'aTargets': [0]
                                                        }
                                                    ]
                                                });
                                                //search and pagination language conversion end


                                                });
                                                $(".list_edit").click(function() {
                                                    //e.preventdefault();
                                                    var layer_id = $(this).attr("data-layer");
                                                    var item_id = $(this).attr("data-item-id");
                                                    var item_name = $(this).attr("data-item-name");
                                                    var item_address = $(this).attr("data-item-address");
                                                    var item_latitude = $(this).attr("data-item-latitude");
                                                    var item_longitude = $(this).attr("data-item-longitude");
                                                    //console.log(layer_id);
                                                    $('#item_id').val(item_id);
                                                    $('#layer_edit_hidden_id').val(layer_id);
                                                    $('#item_edit_name').val(item_name);
                                                    $('#item_edit_address').val(item_address);
                                                    $('#item_edit_latitude').val(item_latitude);
                                                    $('#item_edit_longitude').val(item_longitude);
                                                    $("#edit-layer-item").modal('show');
                                                });
                                                //delete layer item start
                                                $('.list_delete').click(function(e) {
                                                    e.preventDefault();
                                                    var layer_item_id = $(this).attr('data-item-id');
                                                    if (confirm("Are you sure to delete this item?") == false) {
                                                        return;
                                                    }
                                                    var element = this;
                                                    $.ajax({
                                                        url: "<?php echo base_url(); ?>layers/delete_layer_item",
                                                        type: "POST",
                                                        data: {"layer_item_id": layer_item_id},
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
                                                //delete layer item end

                                                function validateItem() {
                                                    if ($('#item_name').val() === '')
                                                    {
                                                        $('#item_error').html('<?php echo $this->lang->line("error_name");?>');
                                                        $('#item_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#item_address').val() === '')
                                                    {
                                                        $('#item_error').html('<?php echo $this->lang->line("error_address");?>');
                                                        $('#item_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#item_latitude').val() === '')
                                                    {
                                                        $('#item_error').html('<?php echo $this->lang->line("error_latitude");?>');
                                                        $('#item_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#item_longitude').val() === '')
                                                    {
                                                        $('#item_error').html('<?php echo $this->lang->line("error_longitude");?>');
                                                        $('#item_error').show();
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        $('#item_error').hide()
                                                        return true;
                                                    }
                                                }
                                                function validateItemEdit() {
                                                    if ($('#item_edit_name').val() === '')
                                                    {
                                                        $('#item_edit_error').html('<?php echo $this->lang->line("error_name");?>');
                                                        $('#item_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#item_edit_address').val() === '')
                                                    {
                                                        $('#item_edit_error').html('<?php echo $this->lang->line("error_address");?>');
                                                        $('#item_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#item_edit_latitude').val() === '')
                                                    {
                                                        $('#item_edit_error').html('<?php echo $this->lang->line("error_latitude");?>');
                                                        $('#item_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#item_edit_longitude').val() === '')
                                                    {
                                                        $('#item_edit_error').html('<?php echo $this->lang->line("error_longitude");?>');
                                                        $('#item_edit_error').show();
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        $('#item_edit_error').hide()
                                                        return true;
                                                    }
                                                }


        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>