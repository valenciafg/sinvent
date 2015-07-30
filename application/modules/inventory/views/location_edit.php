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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Linux | Location Edit</title>
</head>

<body>
</body>
</html><!DOCTYPE html>

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
        
            <!-- BEGIN SIDEBAR -->

           
<!-- BEGIN HEADER -->

<div class="page-container">
	 <?php $this->load->view('dashboard/dashboard_left_menu'); ?>
	<div class="page-content-wrapper">
		<div class="page-content">
        
            
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<?php echo $this->lang->line('dashboard_location_locationedit');?>Details
					</h3>
					
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			
            
            <br>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
							<?php echo $this->lang->line('dashboard_location_menu');?>
							</div>
							
						</div>
                                            
						<div class="portlet-body">
						 <?php
                                                                            foreach ($get_location as $get_locations) {
							$good_location_id = $get_locations['id'];?>
                                                    <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
							<form action="<?php echo base_url(); ?>/inventory/get_location_edit/<?php echo  $good_location_id; ?>" class="form-horizontal" onsubmit="return validategoodlocationeditForm()" method="post">
											<div class="form-body">
                                                <div class="row ">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                           <?php echo $this->lang->line('dashboard_location_layer');?></label>
															<div class="col-md-8">
                                                                        <select name="layer_select" class="form-control building-select">

                                                                            
                                                                            
                                                                           <?php
                                                                            foreach ($layers as $layer){
                                                                            if($layer["id"] == $get_locations['layer_id'])
                                                                            {
                                                                                echo '<option selected  value="' . $layer["id"] . '">' . $layer["layer_name"] . '</option>';
                                                                            }
                                                                            else{
                                                                             echo '<option value="' . $layer["id"] . '">' . $layer["layer_name"] . '</option>';
                                                                            }
                                                                            }
                                                                            ?>
                                                                        </select>

                                                                    </div>														</div>
													</div>
													<!--/span-->
													
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3"><?php echo $this->lang->line('dashboard_location_menu');?></label>
															<div class="col-md-8">
                                                                        <select name="sub_layer_select" class="form-control building-select">

                                                                            
                                                                            
<?php
                                                                            foreach ($first_sublayer as $sub_layer){
                                                                            if($sub_layer["id"] == $get_locations['sub_layer_id'])
                                                                            {
                                                                                echo '<option selected  value="' . $sub_layer["id"] . '">' . $sub_layer["item_name"] . '</option>';
                                                                            }
                                                                            else{
                                                                             echo '<option value="' . $sub_layer["id"] . '">' . $sub_layer["item_name"] . '</option>';
                                                                            }
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
                                               
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															  <label class="control-label col-md-3"><?php echo $this->lang->line('dashboard_location_brand');?></label>
															<div class="col-md-9">
																<input type="text" id="addbrand" name="location_brand" class="form-control" value="<?php echo $get_locations['brand'];?>" >
															
															</div>
														</div>
													</div>
													
												</div>
												
												
												<!--/row-->
												
												<!--/row-->
											</div>
																				<!--/row-->
                                               						
                                                						 <div class="row">
													<div class="col-md-6">
														<div class="form-group">
						 <label class="control-label col-md-3"><?php echo $this->lang->line('dashboard_location_model');?></label>
															<div class="col-md-9">
																<input type="text" id="addmodel" class="form-control" name="location_model" value="<?php echo $get_locations['model'];?>">
															
															</div>
														</div>
													</div>
													<!--/span-->
													
												</div>
                     
																					<!--/row-->
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
                                                                     <label class="control-label col-md-3"><?php echo $this->lang->line('dashboard_location_serial');?></label>
                                                                    <div class="col-md-9">
                                                                        <input type="text"  name ="location_serial" id="addserial" class="form-control" value="<?php echo $get_locations['serial'];?>">

                                                                    </div>
                                                                </div>
 
													</div>
													<!--/span-->
													
												</div>
                     
                     									<!--/row-->
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
                                                                    <label class="control-label col-md-3"><p style="margin-left:-10px;"><?php echo$this->lang->line('dashboard_location_description');?></p></label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" name="location_description" id="addDescription" class="form-control" value="<?php echo $get_locations['description'];?>">
                                                                    </div>
                                                                </div>

													</div>
													<!--/span-->
													
												</div>
                     
                     <?php }?>
											
										
						<div class="row">
							<div class="col-md-12">
								<div class="btn-group pull-right">
									<button type="submit" class="btn btn-info">
                               <?php echo $this->lang->line('dashboard_location_save');?>
                              </button>
                               <a href="<?php echo base_url(); ?>inventory">                                     
                              <button type="button" class="btn">
                                  
                                <?php echo $this->lang->line('dashboard_location_cancel');?>
                              </button>
                               </a>
								</div>
						</div>
					</div>
                    </div>
                    </div></form>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
            
		</div>
	</div>
	<!-- END CONTENT -->
</div>






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
            function validategoodlocationeditForm() {
                                                   
                                                   
                                                   
                                                   if ($('#addbrand').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_goodbrand");?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if($("#addmodel").val()==='')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_goodmodel");?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if($('#addserial').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_goodserial");?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else if($('#addDescription').val() === '')
                                                    {
                                                        $('#error').html('<?php echo $this->lang->line("error_goodDescription");?>');
                                                        $('#error').show();
                                                        return false;
                                                    }
                                                    else
                                                    {
                                                        $('#error').hide();
                                                        return true;
                                                    }
                                                   
                                                    
                                                    
                                                }
        </script>

        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>