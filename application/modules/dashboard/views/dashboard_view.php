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
<!--article start-->
            <div class="col-md-10 col-sm-9 col-lg-10">
                <br>
                <div class="page-container">

                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                <div class="page-contents">
                    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title"><?php echo $this->lang->line('dashboard_location_article');?></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
                                            <form name="addinvenory" method="post" action="<?php echo base_url(); ?>inventory/add_article" class="form-horizontal" onsubmit="return validategoodarticleForm()" >
                                                <div class="form-body table1">
                                                    <!--building drop down on article select -->
                                                    

                                                   

                                                    <!--/row-->

                                                    <!--/row-->
                                                </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submit" value="<?php echo $this->lang->line('submit');?>" class="btn blue">
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    
<?php
    if($this->session->userdata('application') == 'Todas' || $this->session->userdata('application') == 'Inventario/Servicios'){
?>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                                                               <?php echo $this->lang->line('dashboard_location_articlelist'); ?>
                                    </div>

                                </div>
                                <div class="portlet-body">
<!--                                    <div class="table-toolbar">
                                        <div class="btn-group">
                                            <a href="#portlet-config" data-toggle="modal" class="config">
                                                <button id="sample_editable_1_new" class="btn green">
                                                    <?php echo $this->lang->line('dashboard_location_addnew');?> <i class="fa fa-plus"></i>
                                                </button></a>
                                        </div>
                                        								<div class=" pull-right">
                                                                        
                                                                                                                <lable>Search <input type="text" class="form-control input-small input-inline"></lable>
                                                                                                        </div>
                                    </div>-->
                                    <table class="table table-striped table-hover table-bordered sample_editable_1">
                                                                               <thead>
                                            <tr>
                                                <th>
                                                  <?php echo $this->lang->line('dashboard_location_brand');?>
                                                </th>
<!--                                                <th>
                                              <?php //echo $this->lang->line('dashboard_location_type');?>
                                                </th>-->
                                                     <th>
                                              <?php echo $this->lang->line('dashboard_location_model') ;?>
                                                </th>
                                                <th>
                                              <?php echo $this->lang->line('dashboard_location_serial') ;?>
                                                </th>
                                                <th>
                                              <?php echo $this->lang->line('dashboard_location_description') ;?>
                                                </th>
                                                
                                                <th>
                                              <?php echo $this->lang->line('table_building') ;?>
                                                </th>
                                                 <th>
                                              <?php echo $this->lang->line('table_floor') ;?>
                                                </th>
                                                 <th>
                                              <?php echo $this->lang->line('table_office') ;?>
                                                </th>
                                                <th>
                                              <?php echo $this->lang->line('dashboard_location_divestiture') ;?>
                                                </th>
<!--                                                <th>
                                               <?php echo $this->lang->line('dashboard_location_dou');?>
                                                </th>-->
                                                 <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                 ?>
                                                     <th>
                                               <?php echo $this->lang->line('dashboard_location_action');?>
                                                </th>
                                                 <?php } ?>
                                              
                                            </tr>
                                        </thead>  <tbody>

                                            <?php 
                                            
                                            foreach ($good_articles as $good_article) {
                                                ?>
                                            <tr>
                                                 <td>
                                                     <?php echo wordwrap($good_article['brand'], 20, "<br>\n");?>
                                                </td>

                                                <td>
                                                     <?php echo wordwrap($good_article['model'], 20, "<br>\n");?>
                                                </td>
                                                <td>
                                                    <?php echo wordwrap($good_article['serial'], 20, "<br>\n");?>
                                                </td>
                                                <td>
                                                    <?php echo wordwrap($good_article['description'], 20, "<br>\n"); ?>
                                                </td>
                                                
                                                
                                                <td>
                                                    <?php echo wordwrap($good_article['building'], 15, "<br>\n"); ?>
                                                </td>
                                                <td>
                                                    <?php echo wordwrap($good_article['floor'], 15, "<br>\n"); ?>
                                                </td>
                                                <td>
                                                    <?php echo wordwrap($good_article['office'], 15, "<br>\n"); ?>
                                                </td>
                                                <td>
                                                    <?php echo $good_article['divestiture'];?>
                                                </td>
                                                 <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                  ?>
                                                     <td>
                                                  <?php $good_articles_id=$good_article['id'];?>
                                                      <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $good_article['id']; ?>" title="logs"><button type="button" class="btn btn-primary btn-xs"><?php echo $this->lang->line('view_log');?></button></a>
                                                  </td>
                                                 <?php } ?>
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                                                       </table>                               </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
<?php
}
?>
                </div>
            </div>
                    <!-- END CONTENT -->
                </div>
                <!--user edit modal end-->
            </div>
<!--article end-->
<!--work inventory start-->

<div class="col-md-10 col-sm-9 col-lg-10">
                <div class="page-container">

                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <div class="page-contents">
                            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title"><?php echo $this->lang->line('dashboard_location_work'); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
                                                    <form name="addinvenory" method="post" action="<?php echo base_url(); ?>inventory/add_work" class="form-horizontal" onsubmit="return validateworkForm()" >
                                                        <div class="form-body table1">


                                                            <div id="work_fields" >
                                                                <div class="row">

                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_building'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <select id="works_building" name="works_building" class="form-control building-select">
                                                                                    <!--                                                                            <option value="">--seleccione--</option>-->
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
                                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_floor'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <select id="sub_works_building" name="works_floor" class="form-control floor-select">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_office'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <select name="works_office" class="form-control office-select">
                                                                                    <option value="">--seleccione--</option>
                                                                                    <?php
//                                                                            foreach ($first_office as $office) {
//                                                                                echo '<option value="' . $office["id"] . '">' . $office["name"] . '</option>';
//                                                                            }
                                                                                    ?>
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
                                                                                <?php echo $this->lang->line('dashboard_location_jobname'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="jobname" id="jobname" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_enginner_name'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <input name="engineername" id="engineername" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_from'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <input name="from"  id="datepicker_from" type="text" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_to'); ?></label>
                                                                            <div class="col-md-8">
                                                                                <input name="to"   id="datepicker_to" type="text" class="form-control">
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

                                                                    <div class="col-md-12">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Floor</label>
                                                                            <div class="col-md-8">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4">Office</label>
                                                                            <div class="col-md-8">
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
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Brand</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="article_brand" class="form-control" >

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4">Model</label>
                                                                            <div class="col-md-8">
                                                                                <input name="article_model" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Serial</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="article_serial" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4"><p style="margin-left:-10px;">Description</p></label>
                                                                            <div class="col-md-8">
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

                                                                    <div class="col-md-12">
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
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
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

                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Brand</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="location_brand" class="form-control" >

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group ">
                                                                            <label class="control-label col-md-4">Model</label>
                                                                            <div class="col-md-8">
                                                                                <input name="location_model" type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4">Serial</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="location_serial" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/span-->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-4"><p style="margin-left:-10px;">Description</p></label>
                                                                            <div class="col-md-8">
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
                                            <input type="submit" name="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn blue">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
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
                                        <!--<div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
        
        
                                                </div>
                                            </div>
                                        </div> -->
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
<!--                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="page-title">
                                        <?php echo $this->lang->line('work_inventory'); ?>
                                    </h3>
                                </div>
                            </div>-->


                            <div class="row">
                                <div class="col-lg-12">

                                </div>
                            </div>
                            <?php
                            if($this->session->userdata('application') == 'Todas' || $this->session->userdata('application') == 'Obras') {
                                ?>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <?php echo $this->lang->line('dashboard_location_worklist'); ?>
                                                </div>

                                            </div>
                                            <div class="portlet-body">
                                                <!--                                            <div class="table-toolbar">
                                                <div class="btn-group">
                                                    <a href="#portlet-config" data-toggle="modal" class="config">
                                                        <button id="sample_editable_1_new" class="btn green">
                                                            <?php echo $this->lang->line('add_new_button'); ?> <i class="fa fa-plus"></i>
                                                        </button></a>
                                                </div>
                                                								<div class=" pull-right">
                                                                                
                                                                                                                        <lable>Search <input type="text" class="form-control input-small input-inline"></lable>
                                                                                                                </div>
                                            </div>-->
                                                <table
                                                    class="table table-striped table-hover table-bordered sample_editable_1">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_name'); ?>
                                                        </th>
                                                        <!--                                                <th>
                                                        <?php echo $this->lang->line('dashboard_location_type'); ?> 
                                                        </th>-->
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_engineer'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('table_building'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('table_floor'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('table_office'); ?>
                                                        </th>
                                                        <!--                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_dou'); ?>
                                                        </th>-->
                                                        <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                            ?>
                                                            <th>
                                                                <?php echo $this->lang->line('dashboard_location_action'); ?>
                                                            </th>
                                                        <?php } ?>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($works as $work) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo wordwrap($work['jobname'], 40, "<br>\n"); ?>
                                                            </td>
                                                            <!--                                                    <td>
                                                            <?php echo $work['type']; ?>
                                                            </td>-->
                                                            <td>
                                                                <?php echo wordwrap($work['engineername'], 25, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($work['building'], 25, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($work['floor'], 25, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($work['office'], 25, "<br>\n"); ?>
                                                            </td>
                                                            <!--                                                            <td>
                                                                <?php echo date('d-m-Y g:i A', strtotime($work['date_added'])); ?>
                                                            </td>-->
                                                            <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                            ?>
                                                            <td>
                                                                <?php $work_id = $work['id']; ?>

                                                                <a href="#" data-toggle="modal" class="log_view"
                                                                   data-id="<?php echo $work_id; ?>" title="logs">
                                                                    <button type="button"
                                                                            class="btn btn-primary btn-xs"><?php echo $this->lang->line('view_log'); ?></button>
                                                                </a>
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
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- END CONTENT -->
                </div>
                <!--user edit modal end-->
            </div>
<!--work inventory end-->
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<!--date picker-->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <!--date picker end-->
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
<!--datepicker-->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<!--datepicker end -->
<!--        <link href="<?php echo base_url();?>assets/css/datepicker.css" rel="stylesheet" />
        <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>-->
        <!--datepicker-->
<!--linux files-->
<script>
           jQuery(document).ready(function() {
               App.init();
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
                                                        );
                                                    //search and pagination language conversion end
                                                       //search and pagination language conversion start
                                                $('.sample_editable_1').dataTable({
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

                                                        $('.articles_delete').click(function(e) {
                                                        e.preventDefault();
                                                        var inventory_id = $(this).attr('data-id');
                                                        if (confirm("Are you sure to delete this Article?") == false) {
                                                            return;
                                                        }
                                                        var element = this; 
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>inventory/delete_inventory",
                                                            type: "POST",
                                                            data: {"inventory_id": inventory_id},
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


                
                   $('#article_divestiture').datepicker();
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
                   
                $( window ).unload(function() {
                  alert("Bye now!");
                });
            });
            
    function validategoodarticleForm() {

       if ($('#article_brand').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_ariclebrand");?>');
            $('#error').show();
            return false;
        }
        else if($("#article_model").val()==='')
        {
            $('#error').html('<?php echo $this->lang->line("error_ariclemodel");?>');
            $('#error').show();
            return false;
        }
        else if($('#article_serial').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_aricleserial");?>');
            $('#error').show();
            return false;
        }
        else if($('#article_description').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_aricledescription");?>');
            $('#error').show();
            return false;
        }
        else if ($('#article_divestiture').val() === '')
        {
            $('#error').html('<?php echo $this->lang->line("error_articledivestiture"); ?>');
            $('#error').show();
            return false;
        }
        else
        {
            $('#error').hide();
            return true;
        }
       
        
        
    }
    //validate  upload form
    function validateUploadForm() {
        if($('#inventory_img').val() === ''){
            $('#upload_error').html("<?php echo $this->lang->line('error_file_upload');?>");
            $('#upload_error').show();
            return false;
        }else if($('#inventory_img_description').val() === ''){
            $('#upload_error').html("<?php echo $this->lang->line('error_description');?>");
            $('#upload_error').show();
            return false;
        }else{
                $('#upload_error').hide();
                return true;
            }
    }
    //validate upload form end            
        </script>
</body>
</html>