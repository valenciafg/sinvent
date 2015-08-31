<?php
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
$this->load->view('dashboard/header'); 
$tab = (isset($_GET['tab'])) ? $_GET['tab'] : 'tab_0';
?>
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
                                            <h4 class="modal-title"><?php echo $this->lang->line("add_building"); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                                    <form id="building_add" name="building_add" method="post"  onsubmit="return validateForm()" action="<?php echo base_url(); ?>location/add_building" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3"><?php echo $this->lang->line("name"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" id="building_name" name="name" value="" class="form-control">

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
                                                                            <textarea id="building_address" name="address" class="form-control" rows="3"></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--/span-->
                                                                <div class="col-md-3"></div>
                                                                <!--/span-->
                                                            </div>                                     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input id="building_add_submit" type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn btn-success">
                                            </div>  
                                        </form>
                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade" id="portlet-config1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line("add_floor"); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="floor_error" style="padding-left: 220px;color: red;display:none;">All Fields are Required*</div>
                                                    <form name="floor_add" method="post"  onsubmit="return validatefloorForm()" action="<?php echo base_url(); ?>location/add_floor" class="form-horizontal">
                                                        <div class="form-body">


                                                            <!--/row-->


                                                            <!--/row-->

                                                            <div class="row">
                                                                <div class="col-md-3"></div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3"><?php echo $this->lang->line("table_building"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <select id="floor_building_id" name="building_id" class="form-control">
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
                                                                <!--/span-->
                                                                <div class="col-md-3"></div>
                                                                <!--/span-->
                                                            </div>

                                                            <!--/row-->
                                                            <div class="row">
                                                                <div class="col-md-3"></div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3"><?php echo $this->lang->line("table_floor"); ?></label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" id="floor" name="floor" value="" class="form-control">
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

                                            <input type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn btn-success">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade" id="portlet-config2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line("add_office"); ?></h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="office_error" style="padding-left: 239px;color: red;display:none;">All Fields are Required*</div>
                                                <form method="post"  onsubmit="return validateofficeForm()" action="<?php echo base_url(); ?>location/add_office" class="form-horizontal">
                                                    <div class="form-body">

                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3"><?php echo $this->lang->line("table_building"); ?></label>
                                                                    <div class="col-md-9">
                                                                        <select name="building_id" id="building_select" class="form-control">
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
                                                            <!--/span-->
                                                            <div class="col-md-3"></div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3"><?php echo $this->lang->line("table_floor"); ?></label>
                                                                    <div class="col-md-9">
                                                                        <select name="floor_id" id="floor_select" class="form-control">
                                                                            <?php
                                                                            echo '<option value="">--seleccione--</option>';
//                                                                            foreach ($first_floors as $floor) {
//                                                                                echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
//                                                                            }
                                                                            ?>

                                                                        </select>

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
                                                                    <label class="control-label col-md-3"><?php echo $this->lang->line("table_office"); ?></label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="office" id="office" class="form-control">

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
                                        <div class="modal-footer">
                                            <input type="submit" name="submit" value="<?php echo $this->lang->line('save'); ?>" class="btn btn-success">
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                                    <h3 class="page-title">
                                        <?php echo $this->lang->line("location"); ?>
                                    </h3>


                                </div>
                            </div>
                            <!-- END PAGE HEADER-->
                            <!-- BEGIN PAGE CONTENT-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tabbable tabbable-custom boxless tabbable-reversed">
                                        <ul class="nav nav-tabs">
                                            <li class="<?php echo ($tab == 'tab_0') ? 'active' : ''; ?>">
                                                <a href="#tab_0" data-toggle="tab">
                                                    <?php echo $this->lang->line("table_building"); ?>
                                                </a>
                                            </li>
                                            <li class="<?php echo ($tab == 'tab_1') ? 'active' : ''; ?>">
                                                <a href="#tab_1" data-toggle="tab">
                                                    <?php echo $this->lang->line("table_floor"); ?>
                                                </a>
                                            </li>
                                            <li class="<?php echo ($tab == 'tab_2') ? 'active' : ''; ?>">
                                                <a href="#tab_2" data-toggle="tab">
                                                    <?php echo $this->lang->line("table_office"); ?>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane <?php echo ($tab == 'tab_0') ? 'active' : ''; ?>" id="tab_0">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet box blue">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <?php echo $this->lang->line("table_building"); ?>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body">
                                                                <?php
                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                    ?>
                                                                    <div class="table-toolbar">
                                                                        <div class="btn-group">
                                                                            <a href="#portlet-config" data-toggle="modal" class="config">
                                                                                <button id="sample_editable_1_new" class="btn btn-success">
                                                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                                </button></a>
                                                                        </div>

                                                                    </div>
                                                                <?php } ?>
                                                                <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_building"); ?>
                                                                            </th>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_address"); ?>
                                                                            </th>
                                                                            <?php
                                                                            if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                                ?>
                                                                                <th>
                                                            <?php echo $this->lang->line('dashboard_location_action'); ?>
                                                        </th>
                                                                            <?php } ?>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($buildings as $building) {
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo wordwrap($building['name'], 80, "<br>\n");?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo wordwrap($building['address'], 80, "<br>\n"); ?>
                                                                                </td>
                                                                                <?php
                                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                                    ?>
                                                                                    <td>
                                                                                     <a href="" class="building_edit" data-id="<?php echo $building['id'];?>">
                                                                                     <button  type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line('table_edit'); ?></button>
                                                                                     </a>
                                                                                        
<!--                                                                                        <a href="<?php echo base_url() . 'location/building/edit/' . $building['id']; ?>"><button><?php echo $this->lang->line('table_edit'); ?></button></a>-->
                                                                                    
                                                                                    <?php
                                                                                    if ($this->session->userdata('role') == 'admin') {
                                                                                        ?>       
                                                                                        <a class="building_item_delete" data-id="<?php echo $building['id']; ?>" href="javascript:;"><button  type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line('table_delete'); ?></button></a>
                                                                                        <?php } ?>
                                                                                    </td>
                                                                                <?php } ?>

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
                                            <div class="tab-pane <?php echo ($tab == 'tab_1') ? 'active' : ''; ?>" id="tab_1">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet box blue">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <?php echo $this->lang->line("table_floor"); ?>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body">
                                                                <?php
                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                    ?>
                                                                    <div class="table-toolbar">
                                                                        <div class="btn-group">
                                                                            <a href="#portlet-config1" data-toggle="modal" class="config">
                                                                                <button id="sample_editable_1_new" class="btn btn-success">
                                                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                                </button></a>
                                                                        </div>

                                                                    </div>
                                                                <?php } ?>
                                                                <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_building"); ?>
                                                                            </th>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_address"); ?>
                                                                            </th>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_floor"); ?>
                                                                            </th>
                                                                            <?php
                                                                            if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                                ?>
                                                                                <th>
                                                            <?php echo $this->lang->line('dashboard_location_action'); ?>
                                                        </th>
                                                                   <?php
                                                                            }
                                                                            ?>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        foreach ($buildings_floors as $buildings_floors) {
//                                                                    echo '<pre>';
//                                                                    print_r($buildings_floors);
                                                                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo wordwrap($buildings_floors['building'], 50, "<br>\n");?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo wordwrap($buildings_floors['address'], 55, "<br>\n"); ?>
                                                                                </td>
                                                                                <td>
                                                                                   <?php echo wordwrap($buildings_floors['floor'], 55, "<br>\n");?> 
                                                                                </td>
                                                                                <?php
                                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                                    ?>
                                                                                    <td>
                                                                                        <a href="" class="floor_edit" data-id="<?php echo $buildings_floors['floor_id'];?>">
                                                                                            <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line("table_edit"); ?></button>
                                                                                    </a>
                                                                                    
                                                                                    <?php
                                                                                    if ($this->session->userdata('role') == 'admin') {
                                                                                        ?>
                                                                                       
                                                                                        <a class="floor_delete" data-id="<?php echo $buildings_floors['floor_id']; ?>" href="javascript:;"><button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line('table_delete'); ?></button></a>
                                                                                        
                                                                                        <?php
                                                                                    } ?>
                                                                                    </td>
                                                                               <?php }
                                                                                ?>

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
                                            <div class="tab-pane <?php echo ($tab == 'tab_2') ? 'active' : ''; ?>" id="tab_2">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet box blue">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <?php echo $this->lang->line("table_office"); ?>
                                                                </div>

                                                            </div>
                                                            <div class="portlet-body">
                                                                <?php
                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                    ?>
                                                                    <div class="table-toolbar">
                                                                        <div class="btn-group">
                                                                            <a href="#portlet-config2" data-toggle="modal" class="config">
                                                                                <button id="sample_editable_1_new" class="btn btn-success">
                                                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                                                </button></a>
                                                                        </div>

                                                                    </div>
                                                                <?php } ?>
                                                                <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_building"); ?>
                                                                            </th>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_address"); ?>
                                                                            </th>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_floor"); ?>
                                                                            </th>
                                                                            <th>
                                                                                <?php echo $this->lang->line("table_office"); ?>
                                                                            </th>
                                                                            <?php
                                                                            if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                                ?>
                                                                                <th>
                                                            <?php echo $this->lang->line('dashboard_location_action'); ?>
                                                        </th>
                                                                                <?php
                                                                            } ?>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        foreach ($office_floors_buildings as $office_details) {
//                                                                    echo '<pre>';
//                                                                    print_r($office_details);
                                                                            ?>

                                                                            <tr>
                                                                                <td>
                                                                                     <?php echo wordwrap($office_details['building'], 38, "<br>\n");?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo wordwrap($office_details['address'], 38, "<br>\n"); ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo wordwrap($office_details['floor'], 38, "<br>\n");?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo wordwrap($office_details['office'], 38, "<br>\n");?>
                                                                                </td>
                                                                                <?php
                                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                                    ?>
                                                                                    <td>
                                                                                    <a href="" class="office_edit" data-id="<?php echo $office_details['office_id'];?>">
                                                                                        <button type="button" class="btn btn-warning btn-xs"> <?php echo $this->lang->line("table_edit"); ?></button>
                                                                                    </a>                                                                                    
                                                                                    
                                                                                    
                                                                                    <?php
                                                                                    if ($this->session->userdata('role') == 'admin') {
                                                                                        ?>
                                                                                        
                                                                                            <a class="office_delete" data-id="<?php echo $office_details['office_id']; ?>" href="javascript:;">
                                                                                                <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line('table_delete'); ?></button>
                                                                                            </a>
                                                                                       
                                                                                        <?php
                                                                                    }?>
                                                                                         </td>
                                                                                         <?php
                                                                                }
                                                                                ?>
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
                <!--building edit modal start-->
                <div class="modal fade" id="building_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_building'); ?></h4>
                            </div>
                            <div id="building_edit_form" class="modal-body">

                            </div>

                        </div>
                    </div>
                </div>
                <!--building edit modal end-->
                <!--floor edit modal start-->
                <div class="modal fade" id="floor_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_floor'); ?></h4>
                            </div>
                            <div id="floor_edit_form" class="modal-body">

                            </div>

                        </div>
                    </div>
                </div>
                <!--floor edit modal end-->
                <!--office edit modal start-->
                <div class="modal fade" id="office_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_office'); ?></h4>
                            </div>
                            <div id="office_edit_form" class="modal-body">

                            </div>

                        </div>
                    </div>
                </div>
                <!--office edit modal end-->
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
    var inFormOrLink;
    $('a[href]:not([target]), a[href][target=_self]').on('click', function() { inFormOrLink = true; });
    $('form').bind('submit', function() { inFormOrLink = true; });
    $(window).unload(function(){
        if(!inFormOrLink){
            $.ajax({
                url: '<?php echo base_url(); ?>users/on_close_logout',
                async:false
            });
        }
    });
        App.init();
        //TableEditable.init();
        //SearchPagination.init();
        //search and pagination language conversion start
        $('.sample_editable_1').dataTable({
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

    });
    function validateForm() {
        if ($('#building_name').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_name"); ?>');
            $('#error').show();
            return false;
        }
        else if ($('#building_address').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_address"); ?>');
            $('#error').show();
            return false;
        }
//                                                
        else
        {
            $('#error').hide();
            return true;
        }
    }
    //building edit form validation
    function validateEditForm() {
        if ($('#building_edit_name').val() === '')
        {
            $('#building_edit_error').html('<?php echo $this->lang->line("error_name"); ?>');
            $('#building_edit_error').show();
            return false;
        }
        else if ($('#building_edit_address').val() === '')
        {
            $('#building_edit_error').html('<?php echo $this->lang->line("error_address"); ?>');
            $('#building_edit_error').show();
            return false;
        }
//                                                
        else
        {
            $('#building_edit_error').hide();
            return true;
        }
    }
    function validatefloorForm() {
        if ($('#floor_building_id').val() === '')
        {
            $('#floor_error').html('<?php echo $this->lang->line("error_building"); ?>');
            $('#floor_error').show();
            return false;
        }
        else if ($('#floor').val() === '')
        {
            $('#floor_error').html('<?php echo $this->lang->line("error_floor"); ?>');
            $('#floor_error').show();
            return false;
        }
        else
        {
            $('#floor_error').hide();
            return true;
        }
    }
    function validatefloorEditForm() {
        if ($('#floor_building_edit_id').val() === '')
        {
            $('#floor_edit_error').html('<?php echo $this->lang->line("error_building"); ?>');
            $('#floor_edit_error').show();
            return false;
        }
        else if ($('#floor_edit').val() === '')
        {
            $('#floor_edit_error').html('<?php echo $this->lang->line("error_floor"); ?>');
            $('#floor_edit_error').show();
            return false;
        }
        else
        {
            $('#floor_edit_error').hide();
            return true;
        }
    }
    function validateofficeForm()
    {
     if ($('#building_select').val() === '')
        {
            $('#office_error').html('<?php echo $this->lang->line("error_building"); ?>');
            $('#office_error').show();
            return false;
        }  
    else if ($('#office').val() === '')
        {
            $('#office_error').html('<?php echo $this->lang->line("error_office"); ?>');
            $('#office_error').show();
            return false;
        }
        else
        {
            $('#office_error').hide();
            return true;
        }
    }
    function validateofficeEditForm()
    {
      if ($('#building_edit_select').val() === '')
        {
            $('#office_edit_error').html('<?php echo $this->lang->line("error_building"); ?>');
            $('#office_edit_error').show();
            return false;
        }    
    else if ($('#edit_office').val() === '')
        {
            $('#office_edit_error').html('<?php echo $this->lang->line("error_office"); ?>');
            $('#office_edit_error').show();
            return false;
        }
        else
        {
            $('#office_edit_error').hide();
            return true;
        }  
    }
    //update floors on building choose
    $("#building_select").change(function() {
    
       if($(this).val() != '')
       {
        $.ajax({
            url: '<?php echo base_url(); ?>location/get_content',
            type: 'POST',
            data: {
                'main_cat': 'buildings',
                'data': $(this).val()
            },
            //dataType:'json',
            success: function(data) {
                $("#floor_select").html(data);
            },
            error: function(request, error)
            {
                alert("Request: " + JSON.stringify(request));
            }
        });
        }

    });
    //office edit building select
    $(document).on("change", "#building_edit_select", function(){
       if($(this).val() != '')
       {
        $.ajax({
            url: '<?php echo base_url(); ?>location/get_content',
            type: 'POST',
            data: {
                'main_cat': 'buildings',
                'data': $(this).val()
            },
            //dataType:'json',
            success: function(data) {
                $("#floor_edit_select").html(data);
            },
            error: function(request, error)
            {
                alert("Request: " + JSON.stringify(request));
            }
        });
        }

    });
    //update floors on building choose end
    //delte layer start
    $('.building_item_delete').click(function(e) {
        e.preventDefault();
        var item_id = $(this).attr('data-id');
        if (confirm("Se eliminarán todos los archivos relacionados y registros. Está seguro de eliminar este Edificio?") == false) {
            return;
        }
        var element = this;
        $.ajax({
            url: "<?php echo base_url(); ?>location/delete_building_item",
            type: "POST",
            data: {"building_item_id": item_id},
            success: function(data)
            {
                $(element).parents('tr')[0].remove();
                window.location = "<?php echo base_url();?>location";
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
    //delte floor start
    $('.floor_delete').click(function(e) {
        e.preventDefault();
        var floor_id = $(this).attr('data-id');
        if (confirm("Se eliminarán todos los archivos relacionados y registros. Está seguro de eliminar este Piso?") == false) {
            return;
        }
        var element = this;
        $.ajax({
            url: "<?php echo base_url(); ?>location/delete_floor",
            type: "POST",
            data: {"floor_id": floor_id},
            success: function(data)
            {
                $(element).parents('tr')[0].remove();
                window.location = "<?php echo base_url();?>location?tab=tab_1";
                return false;
            },
            error: function()
            {
                console.log('error');
                return false;
            },
        });

    });
    //delete floor end
    //delte office start
    $('.office_delete').click(function(e) {
        e.preventDefault();
        var office_id = $(this).attr('data-id');
        if (confirm("Se eliminarán todos los archivos relacionados y registros. Está seguro de eliminar este Officina?") == false) {
            return;
        }
        var element = this;
        $.ajax({
            url: "<?php echo base_url(); ?>location/delete_office",
            type: "POST",
            data: {"office_id": office_id},
            success: function(data)
            {
                $(element).parents('tr')[0].remove();
                window.location = "<?php echo base_url();?>location?tab=tab_2";
                return false;
            },
            error: function()
            {
                console.log('error');
                return false;
            },
        });

    });
    //delete office end
    
    //edit functions
    //building edit
    $(".building_edit").click(function() {
    var building_id = $(this).attr('data-id');
    $.ajax({
        url: "<?php echo base_url(); ?>location/get_building_info",
        type: "POST",
        data: {"building_id": building_id},
        success: function(data)
        {
            console.log(data);
            $('#building_edit_form').html(data);
            $('#building_edit_modal').modal('show');
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
    //floor edit
    $(".floor_edit").click(function() {
    var floor_id = $(this).attr('data-id');
    $.ajax({
        url: "<?php echo base_url(); ?>location/get_floor_info",
        type: "POST",
        data: {"floor_id": floor_id},
        success: function(data)
        {
            console.log(data);
            $('#floor_edit_form').html(data);
            $('#floor_edit_modal').modal('show');
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
    //office edit function
$(".office_edit").click(function() {
    var office_id = $(this).attr('data-id');
    $.ajax({
        url: "<?php echo base_url(); ?>location/get_office_info",
        type: "POST",
        data: {"office_id": office_id},
        success: function(data)
        {
            console.log(data);
            $('#office_edit_form').html(data);
            $('#office_edit_modal').modal('show');
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


</script>
</body>
</html>