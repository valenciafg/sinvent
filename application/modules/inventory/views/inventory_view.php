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
        <title>Linux | Inventory</title>
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
        <!--calendar style-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /><!--
        <!--calendar style-->
        <!--search css-->
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <style>
            .btn1{
            }
            .btn11{
                margin-bottom:20px;
            }
            .box1{
            }
            .table1{
            }
            .btn2{
            }
            .txt1{
            }
            .btn3{
            }
            .txt2{
            }
            .btn21{
            }
            .txt11{
            }
            .btn31{
            }
            .txt21{
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
                                    <h4 class="modal-title">Goods/work</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <form name="addinvenory" method="post" action="<?php echo base_url(); ?>inventory/add_inventory" class="form-horizontal">
                                                <div class="form-body table1">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">

                                                                    Type</label>
                                                                <div class="col-md-9">
                                                                    <select id="type" name="type" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="goods" class="good-select">Goods</option>
                                                                        <option value="works" class="work-select">Works</option>

                                                                    </select>

                                                                </div>

                                                            </div>
                                                        </div>


                                                        <!--sub category-->

                                                        <div id="sub-cat-drop" class="col-md-4 txt3" style="display: none;">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">

                                                                    Sub</label>
                                                                <div class="col-md-9">
                                                                    <select name="sub-cat" id="sub-cat" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="location" class="btn4">Location</option>
                                                                        <option value="article" class="btn3">Article</option>

                                                                    </select>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--sub caegory-->

                                                    <!--/row-->
                                                    <div id="work_fields" style="display:none;">
                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-4">Building</label>
                                                                    <div class="col-md-8">
                                                                        <select name="works_building" class="form-control building-select">

                                                                            <?php
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
                                                                        <select name="works_floor" class="form-control floor-select">
                                                                            <option value="">--seleccione--</option>
                                                                             <?php
                                                                            foreach ($first_floor as $floor) {
                                                                                echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                                                            }
                                                                            ?>

                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group ">
                                                                    <label class="control-label col-md-3">Office</label>
                                                                    <div class="col-md-9">
                                                                        <select name="works_office" class="form-control office-select">
                                                                            <option value="">--seleccione--</option>
                                                                            <?php
                                                                            foreach ($first_office as $office) {
                                                                                echo '<option value="' . $office["id"] . '">' . $office["name"] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">
                                                                        Job Name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="jobname" class="form-control">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group ">
                                                                    <label class="control-label col-md-3">Engineer Name</label>
                                                                    <div class="col-md-9">
                                                                        <input name="engineername" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">From</label>
                                                                    <div class="col-md-9">
                                                                        <input name="from" id="datepicker_from" type="text" class="form-control">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">To</label>
                                                                    <div class="col-md-9">
                                                                        <input name="to" id="datepicker_to" type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                    </div>
                                                    <!--building drop down on article select -->
                                                    <div id="building_drop" style="display:none;">
                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-4">Building</label>
                                                                    <div class="col-md-8">
                                                                        <select name="goods_building" class="form-control building-select">

                                                                            <?php
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
                                                                        <select name="goods_floor" class="form-control floor-select">
                                                                            <option value="">--seleccione--</option>
                                                                            <?php
                                                                            foreach ($first_floor as $floor) {
                                                                                echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                                                            }
                                                                            ?>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group ">
                                                                    <label class="control-label col-md-3">Office</label>
                                                                    <div class="col-md-9">
                                                                        <select name="goods_office" class="form-control office-select">
                                                                        <option value="">--seleccione--</option>
                                                                            <?php
                                                                            foreach ($first_office as $office) {
                                                                                echo '<option value="' . $office["id"] . '">' . $office["name"] . '</option>';
                                                                            }
                                                                            ?>  
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
                                                                        <input type="text" name="article_brand" class="form-control" >

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group ">
                                                                    <label class="control-label col-md-3">Model</label>
                                                                    <div class="col-md-9">
                                                                        <input name="article_model" type="text" class="form-control">
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
                                                                        <input type="text" name="article_serial" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3"><p style="margin-left:-10px;">Description</p></label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="article_description" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->

                                                    </div>
                                                    <!--building drop down on article select end -->

                                                    <!--location fields on location select-->
                                                    <div id="location_fields" style="display:none;">
                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-4">Layer</label>
                                                                    <div class="col-md-8">
                                                                        <select id="layer_select" name="layer_select" class="form-control">

                                                                            <?php
                                                                            foreach ($layers as $layer) {
                                                                                echo '<option value="' . $layer["id"] . '">' . $layer["layer_name"] . '</option>';
                                                                            }
                                                                            ?>

                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-4">sub layer</label>
                                                                    <div class="col-md-8">
                                                                        <select id="sub_layer_select" name="sub_layer_select" class="form-control">

                                                                            <?php
                                                                            foreach ($first_sublayer as $sub_layer) {
                                                                                echo '<option value="' . $sub_layer["id"] . '">' . $sub_layer["item_name"] . '</option>';
                                                                            }
                                                                            ?>

                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">

                                                            </div>
                                                            <!--/span-->

                                                            <!--/span-->
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Brand</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="location_brand" class="form-control" >

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group ">
                                                                    <label class="control-label col-md-3">Model</label>
                                                                    <div class="col-md-9">
                                                                        <input name="location_model" type="text" class="form-control">
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
                                                                        <input type="text" name="location_serial" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3"><p style="margin-left:-10px;">Description</p></label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="location_description" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->

                                                    </div>
                                                    <!--location fields on location select end -->


                                                    <!--/row-->

                                                    <!--/row-->
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" value="Submit" class="btn blue">
                                    </form>
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
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Log Details</h4>
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
                    <div class="modal fade" id="portlet-config31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Advanced Search</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 ">

                                            <form name="searchinventory" action="<?php echo base_url(); ?>inventroy/search_inventroy" method="post" class="form-horizontal">
                                                <div class="form-body ">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">

                                                                    Type</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="" class="btn31">Goods</option>
                                                                        <option value="" class="btn21">Works</option>

                                                                    </select>

                                                                </div>

                                                            </div>
                                                        </div>


                                                        <!--/span-->

                                                        <!--/span-->
                                                    </div>

                                                    <!--/row-->
                                                    <div class="txt11">
                                                        <div class="row">

                                                            <div class="col-md-4">
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
                                                                    <label class="control-label col-md-3">
                                                                        Job Name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group ">
                                                                    <label class="control-label col-md-3">Engineer Name</label>
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
                                                                    <label class="control-label col-md-3">From</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">To</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                    </div>
                                                    <div class="txt21">
                                                        <div class="row">

                                                            <div class="col-md-4">
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
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Log Details</h4>
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
                                Goods / Work Inventory
                            </h3>
                        </div>
                    </div>


                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group pull-right">
                                <a href="#portlet-config31" data-toggle="modal" class="config"><button id="sample_editable_1_new" class="btn green " style="margin-bottom:20px;">
                                        Advanced Search
                                    </button></a>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Detail View
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="btn-group">
                                            <a href="#portlet-config" data-toggle="modal" class="config">
                                                <button id="sample_editable_1_new" class="btn green">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button></a>
                                        </div>
                                        <!--								<div class=" pull-right">
                                                                        
                                                                                                                <lable>Search <input type="text" class="form-control input-small input-inline"></lable>
                                                                                                        </div>-->
                                    </div>
                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Type
                                                </th>
                                                <th>
                                                    Date of Upload
                                                </th>
                                                <th COLSPAN=2> Actions
                                                </th>

                                            </tr>
                                        </thead>
                                        <?php
                                        foreach ($inventory as $inventory) {
                                                ?>
 
                                         <tbody>
                                         
                                                                              <?php  if( $inventory['sub_type']=='location') {?>
                                       
                                             
                                                <tr>
                                                    <td>
                                                        <?php
                                                        if ($inventory['type'] == 'goods')
                                                            echo $inventory['model'];
                                                        else
                                                            echo $inventory['jobname'];
                                                        ?>  
                                                    </td>
                                                    <td>
    <?php echo $inventory['type']; ?>
                                                    </td>
                                                    <td>
    <?php echo date('d-m-Y g:i A',strtotime($inventory['date_added'])); ?>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" class="img_upload" data-id="<?php echo $inventory['id']; ?>" title="img Upload"><i class="fa fa-upload"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $inventory['id']; ?>" title="logs"><i class="fa fa-archive"></i></a>
                                                    </td>

                                                </tr>
                                        
                                        
                                                                                <?php  }
                                                                                elseif($inventory['sub_type']=='article') 
                                        
                                             {
                                            
                                            
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        if ($inventory['type'] == 'goods')
                                                            echo $inventory['model'];
                                                        else
                                                            echo $inventory['jobname'];
                                                        ?>  
                                                    </td>
                                                    <td>
    <?php echo $inventory['type']; ?>
                                                    </td>
                                                    <td>
    <?php echo date('d-m-Y g:i A',strtotime($inventory['date_added'])); ?>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" class="img_upload" data-id="<?php echo $inventory['id']; ?>" title="img Upload"><i class="fa fa-upload"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $inventory['id']; ?>" title="logs"><i class="fa fa-archive"></i></a>
                                                    </td>

                                                </tr>
<?php }   else    {                                                        ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        if ($inventory['type'] == 'goods')
                                                            echo $inventory['model'];
                                                        else
                                                            echo $inventory['jobname'];
                                                        ?>  
                                                    </td>
                                                    <td>
    <?php echo $inventory['type']; ?>
                                                    </td>
                                                    <td>
    <?php echo date('d-m-Y g:i A',strtotime($inventory['date_added'])); ?>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" class="img_upload" data-id="<?php echo $inventory['id']; ?>" title="img Upload"><i class="fa fa-upload"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $inventory['id']; ?>" title="logs"><i class="fa fa-archive"></i></a>
                                                    </td>

                                                </tr>
<?php } ?>

                                        
                                        
                                        <?php }?>
 
 </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
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
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
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
        
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/core/app.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom/tasks.js" type="text/javascript"></script>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/js/custom/maps-google.js" type="text/javascript"></script>
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
                //populate floors on building select
                $(".building-select").change(function() {
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

                });

                //populate office on floor select
                $(".floor-select").change(function() {
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

                });



                $(".box1").hide();
                $(".btn11").click(function() {
                    $(".box1").toggle();
                });
                $(".txt1").hide();

                $(".btn2").click(function() {
                    $(".txt1").show();
                    $(".txt2").hide();
                    $(".txt3").hide();
                });
                $(".txt2").hide();

                $(".btn3").click(function() {
                    $(".txt2").show();
                    $(".txt1").hide();
                });
                $(".txt2").hide();
                $(".txt11").hide();
                $(".btn21").click(function() {
                    $(".txt11").show();
                    $(".txt21").hide();
                });
                $(".txt21").hide();

                $(".btn31").click(function() {
                    $(".txt21").show();
                    $(".txt11").hide();
                });
                $(".txt2").hide();

                $(".txt3").hide();

                $("#type").change(function() {

                    var selected_val = $('#type option:selected').val();
                    if (selected_val === 'goods')
                    {
                        $("#work_fields").hide();
                        $("#sub-cat-drop").show();
                        $("#location_fields").hide();
                        $("#building_drop").hide();
                    }
                    else
                    {
                        $("#sub-cat-drop").hide();
                        $("#work_fields").show();
                        $("#sub-cat-drop").hide();
                        $("#location_fields").hide();
                        $("#building_drop").hide();
                    }

                });
                $("#sub-cat-drop").change(function() {

                    var selected_val = $('#sub-cat-drop option:selected').val();
                    if (selected_val === 'article')
                    {
                        $("#building_drop").show();
                        $("#location_fields").hide();
                    }
                    else
                    {
                        $("#location_fields").show();
                        $("#building_drop").hide();
                    }

                });

                $("#layer_select").change(function() {
                    var selected_layer = $('#layer_select option:selected').val();
                    $.ajax({
                        url: "<?php echo base_url(); ?>inventory/get_layer_items",
                        type: "POST",
                        data: {"layer_id":selected_layer},
                        success: function(data)
                        {
                            console.log(data);
                            $("#sub_layer_select").html(data);
                        }
                    })

                });
                   $('#datepicker_from').datepicker();
                   $('#datepicker_to').datepicker();
                   
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
                   
                App.init(); // initlayout and core plugins
                TableEditable.init();
                Index.init();
                Index.initJQVMAP(); // init index page's custom scripts
                Index.initCalendar(); // init index page's custom scripts
                Index.initCharts(); // init index page's custom scripts
                Index.initChat();
                Index.initMiniCharts();
                //Index.initDashboardDaterange();
                Index.initIntro();
                Tasks.initDashboardWidget();
                MapsGoogle.init();
             
            });
        </script>

        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>