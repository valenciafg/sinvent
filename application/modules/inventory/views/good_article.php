<?php $this->load->view('dashboard/header'); ?>
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
                            <!-- NEW article form -->    
                             <?php $this->load->view('new_good_article');?>
                            <!-- END. NEW article form -->    
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

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12 ">

                                                    <form name="searchinventory" action="<?php echo base_url(); ?>inventroy/search_inventroy" method="post" class="form-horizontal">
                                                        <div class="form-body ">

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <!--  <div class="form-group">
                                                                          <label class="control-label col-md-3">
          
                                                                              Type</label>
                                                                          <div class="col-md-9">
                                                                              <select class="form-control">
                                                                                  <option value="">Select</option>
                                                                                  <option value="" class="btn31">Goods</option>
                                                                                  <option value="" class="btn21">Works</option>
          
                                                                              </select>
          
                                                                          </div>
          
                                                                      </div>-->
                                                                </div>


                                                                <!--/span-->

                                                                <!--/span-->
                                                            </div>

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
                                                                            <label class="control-label col-md-4">Brand</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" class="form-control" >

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
                                                                                <input type="text" class="form-control">
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
                                                                                <input type="text" class="form-control">
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
                                            <button type="button" class="btn blue"><?php echo $this->lang->line('submit'); ?></button>

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
                                        <?php echo $this->lang->line('dashboard_location_article'); ?>                           </h3>
                                </div>
                            </div>


                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="btn-group pull-right">

                                    </div>
                                </div>
                            </div>
<!--

LISTADO DE BIENES Y MATERIALES

-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <?php echo $this->lang->line('dashboard_location_articlelist'); ?>
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
                                                                <?php echo $this->lang->line('dashboard_location_addnew'); ?> <i class="fa fa-plus"></i>
                                                            </button></a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_description'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_model'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_brand'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('quantity'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_serial'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('categories'); ?>
                                                        </th>
                                                        <th>
                                                            <?php echo $this->lang->line('subcategories'); ?>
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
                                                        <th>
                                                            <?php echo $this->lang->line('dashboard_location_divestiture'); ?>
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
                                                <?php
                                                foreach ($good_articles as $good_article) {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                            <?php echo wordwrap($good_article['description'], 15, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                            <?php echo wordwrap($good_article['model'], 15, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                            <?php echo wordwrap($good_article['brand'], 10, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                            <?php echo wordwrap($good_article['quantity']." ".$good_article['quantity_type'], 10, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                            <?php echo wordwrap($good_article['serial'], 15, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($good_article['category'], 10, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($good_article['subcategory'], 10, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($good_article['building'], 15, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($good_article['floor'], 10, "<br>\n"); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($good_article['office'], 15, "<br>\n"); ?>
                                                            </td>
<!--                                                            <td>
                                                                <?php echo date('d-m-Y g:i A', strtotime($good_article['date_added'])); ?>
                                                            </td>-->
                                                            <td>
                                                                <?php echo $good_article['divestiture']; ?>
                                                            </td>
                                                                <?php
                                                                if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                                                                    ?>
                                                                <td>
                                                                <?php $good_articles_id = $good_article['id']; ?>
                                                                    <a href="" class="article_edit" data-id="<?php echo $good_articles_id; ?>">
              <!--                                                    <a href="<?php echo base_url(); ?>inventory/get_articles_info/<?php echo $good_articles_id; ?>" class="user_edit" data-id="<?php echo $good_article['id']; ?>">-->
                                                                        <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line("table_edit"); ?></button>
                                                                    </a>
                                                                    <?php
                                                                        if ($this->session->userdata('role') == 'admin') {
                                                                    ?>
                                                                        <a href="" class="articles_delete" data-id="<?php echo $good_articles_id; ?>">
                                                                            <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line("table_delete"); ?></button>
                                                                        </a>
                                                                    <?php } ?>
                                                                    <a href="#" data-toggle="modal" class="img_upload" data-id="<?php echo $good_article['id']; ?>" title="img Upload">
                                                                        <button type="button" class="btn btn-success btn-xs"><?php echo $this->lang->line('upload'); ?></button>
                                                                    </a>
                                                                    <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $good_article['id']; ?>" title="logs">
                                                                        <button type="button" class="btn btn-info btn-xs"><?php echo $this->lang->line('view_log'); ?></button>
                                                                    </a>
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
                    </div>
                    <!-- END CONTENT -->
                </div>
                <!--user edit modal end-->
                <!--article edit modal start-->
                <div class="modal fade" id="article_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_article'); ?></h4>
                            </div>
                            <div id="article_edit_form" class="modal-body">

                            </div>

                        </div>
                    </div>
                </div>
                <!--article edit modal end-->
            </div>
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
<!--        <link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>-->
<!--datepicker-->
<!--linux files-->
<script>
                                                jQuery(document).ready(function() {
                                                    App.init();
                                                    $('#sample_editable_1').dataTable({
                                                        "aLengthMenu": [
                                                            [5, 15, 20, -1],
                                                            [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
                                                        ],
                                                        // set the initial value
                                                        "iDisplayLength": 10,
                                                        "sPaginationType": "bootstrap",
                                                        "oLanguage": {
                                                            "sUrl": "<?php echo base_url(); ?>assets/datatable_lan/<?php echo $language; ?>.txt"
                                                        },
                                                        "aoColumnDefs": [{
                                                                'bSortable': false,
                                                                'aTargets': [0],
                                                        }]
                                                    });

                                                    //search and pagination language conversion end
                                                    //populate floors on building select
                                                    $(document).on("change", ".building-select", function() {

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
                                                    

                                                    $(document).on("change", ".category-select", function() {
                                                        if ($(this).val() !== ''){
                                                            if($(this).val() == "3"){
                                                                $('#type').css('display', 'block');
                                                                $('#subtype').css('display', 'block');
                                                                $('#clasification').css('display', 'block');
                                                            }else{
                                                                $('#type').css('display', 'none');
                                                                $('#subtype').css('display', 'none');
                                                                $('#clasification').css('display', 'none');
                                                            }
                                                            $.ajax({
                                                                url: '<?php echo base_url(); ?>categories/get_subcategories',
                                                                type: 'POST',
                                                                data: {
                                                                    'data': $(this).val()
                                                                },
                                                                success: function(data) {
                                                                    $(".subcategory-select").html(data);
                                                                },
                                                                error: function(request, error)
                                                                {
                                                                    alert("Request: " + JSON.stringify(request));
                                                                }
                                                            });
                                                        }else{
                                                            $('#type').css('display', 'none');
                                                            $('#subtype').css('display', 'none');
                                                            $('#clasification').css('display', 'none');
                                                        }
                                                    });
                                                    $(document).on("change", ".category-select-edit", function() {
                                                        
                                                            if($(this).val() == "3"){
                                                                $('#type-edit').css('display', 'block');
                                                                $('#subtype-edit').css('display', 'block');
                                                                $('#clasification-edit').css('display', 'block');
                                                            }else{
                                                                $('#type-edit').css('display', 'none');
                                                                $('#subtype-edit').css('display', 'none');
                                                                $('#clasification-edit').css('display', 'none');
                                                            }
                                                            $.ajax({
                                                                url: '<?php echo base_url(); ?>categories/get_subcategories',
                                                                type: 'POST',
                                                                data: {
                                                                    'data': $(this).val()
                                                                },
                                                                success: function(data) {
                                                                    $(".subcategory-select").html(data);
                                                                },
                                                                error: function(request, error)
                                                                {
                                                                    alert("Request: " + JSON.stringify(request));
                                                                }
                                                            });                                                        
                                                    });
                                                    //populate office on floor select
                                                    $(document).on("change", ".floor-select", function() {
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

                                                    $('.articles_delete').click(function(e) {
                                                        e.preventDefault();
                                                        var inventory_id = $(this).attr('data-id');
                                                        if (confirm("Se eliminarán todos los archivos relacionados y registros. Está seguro de eliminar este Bien/Material?") === false) {
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

//             
                                                });

                                                function validategoodarticleForm() {



                                                    /*if ($('#goods_building').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_building"); ?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_brand').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_ariclebrand"); ?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                   /* else if ($("#article_model").val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_ariclemodel"); ?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_serial').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_aricleserial"); ?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_description').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_aricledescription"); ?>');
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
*/


                                                }

                                                //validate article edit form
                                                function validatearticleEditForm() {
                                                    if ($('#goods_edit_building').val() === '')
                                                    {
                                                        $('#article_edit_error').html('<?php echo $this->lang->line("error_building"); ?>');
                                                        $('#artilce_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_edit_brand').val() === '')
                                                    {
                                                        $('#article_edit_error').html('<?php echo $this->lang->line("error_ariclebrand"); ?>');
                                                        $('#article_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($("#article_edit_model").val() === '')
                                                    {
                                                        $('#article_edit_error').html('<?php echo $this->lang->line("error_ariclemodel"); ?>');
                                                        $('#article_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_edit_serial').val() === '')
                                                    {
                                                        $('#article_edit_error').html('<?php echo $this->lang->line("error_aricleserial"); ?>');
                                                        $('#article_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_edit_description').val() === '')
                                                    {
                                                        $('#article_edit_error').html('<?php echo $this->lang->line("error_aricledescription"); ?>');
                                                        $('#article_edit_error').show();
                                                        return false;
                                                    }
                                                    else if ($('#article_edit_divestiture').val() === '')
                                                    {
                                                        $('#article_edit_error').html('<?php echo $this->lang->line("error_articledivestiture"); ?>');
                                                        $('#article_edit_error').show();
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        $('#article_edit_error').hide();
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
                                                //floor edit
                                                $(".article_edit").click(function() {
                                                    var article_id = $(this).attr('data-id');
                                                    $.ajax({
                                                        url: "<?php echo base_url(); ?>inventory/get_articles_info",
                                                        type: "POST",
                                                        data: {"article_id": article_id},
                                                        success: function(data)
                                                        {
                                                            console.log(data);
                                                            $('#article_edit_form').html(data);
                                                            $('#article_edit_modal').modal('show');
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
                                                //validate upload form end



</script>
</body>
</html>