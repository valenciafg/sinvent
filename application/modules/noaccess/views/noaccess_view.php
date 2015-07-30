<?php $this->load->view('dashboard/header'); ?>
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
                <div class="page-content">
                    <p><?php echo $this->lang->line('permission_denied');?> </p>
                </div>
            </div>
                    <!-- END CONTENT -->
                </div>
                <!--user edit modal end-->
            </div>
<!--article end-->

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
                   
//                App.init(); // initlayout and core plugins
//                TableEditable.init();
//                Index.init();
//                Index.initJQVMAP(); // init index page's custom scripts
//                Index.initCalendar(); // init index page's custom scripts
//                Index.initCharts(); // init index page's custom scripts
//                Index.initChat();
//                Index.initMiniCharts();
//                //Index.initDashboardDaterange();
//                Index.initIntro();
//                Tasks.initDashboardWidget();
//                MapsGoogle.init();
//             
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
                                                if($('#inventory_img').val() === '')
                                                    {
                                                        $('#upload_error').html("<?php echo $this->lang->line('error_file_upload');?>");
                                                        $('#upload_error').show();
                                                        return false;
                                                    }
                                                    else if($('#inventory_img_description').val() === '')
                                                    {
                                                        $('#upload_error').html("<?php echo $this->lang->line('error_description');?>");
                                                        $('#upload_error').show();
                                                        return false;
                                                    }
                                                    
                                                    else
                                                    {
                                                        $('#upload_error').hide();
                                                        return true;
                                                    }
                                                }
                                                //validate upload form end

            
            
        </script>
</body>
</html>