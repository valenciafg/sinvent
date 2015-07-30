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
<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->

<link href="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url();?>assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<style>
.btn1{
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
</style>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<?php $this->load->view('dashboard/header');?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php $this->load->view('dashboard/dashboard_left_menu');?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
<div class="page-content">
			<div class="row">
<!--				<div class="col-md-12">
					 BEGIN PAGE TITLE & BREADCRUMB
					<h3 class="page-title">
					Logs
					</h3>
					
					 END PAGE TITLE & BREADCRUMB
				</div>-->
			</div>
			
            <div class="row">
				<div class="col-md-12">
                
					<form action="#" class="form-horizontal">
											<div class="form-body table1">
												<h3 class="form-section"> Logs</h3>
												<div class="row">
													<div class="col-md-2">
														<div class="form-group">
															<label class="control-label col-md-3">
                                                            
                                                            Type</label>
															<div class="col-md-9">
																<select class="form-control">
                                                                <option value="" >Select</option>
																	<option value="" class="btn3">Goods</option>
                                                                    <option value="" class="btn2">Works</option>
																	
																</select>
																
															</div>
                                                            
														</div>
													</div>
                                                    
													<!--/span-->
												</div>
                                                
												<!--/row-->
                                                <div class="txt1">
                                                <div class="row ">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Building</label>
															<div class="col-md-9">
																<select class="form-control">
																	
                                                                    <option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Floor</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
                                                        </div>
                                                        <div class="col-md-4">
														<div class="form-group ">
															<label class="control-label col-md-3">Office</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
															</div>
														</div>
													</div>
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
															<label class="control-label col-md-3">Description</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">From</label>
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
															<label class="control-label col-md-3">To</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												</div>
											<div class="txt2">
                                            	 <div class="row ">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Building</label>
															<div class="col-md-9">
																<select class="form-control">
																	
                                                                    <option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label col-md-3">Floor</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
																
															</div>
														</div>
                                                        </div>
                                                        <div class="col-md-4">
														<div class="form-group ">
															<label class="control-label col-md-3">Office</label>
															<div class="col-md-9">
																<select class="form-control">
																	<option value="">Test</option>
																	
																</select>
															</div>
														</div>
													</div>
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
															<label class="control-label col-md-3">Description</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
                                                <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Another field</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														
													</div>
													<!--/span-->
												</div>
												</div>
												<div class="row">
													<div class="col-md-12">
                                                  
														<div class=" pull-right">
															<button type="submit" class="btn green btn-sm" style="margin-top:30px;">Submit</button>
															
														</div>
													</div>
													
												</div>
												<!--/row-->
												
												<!--/row-->
											</div>
											
										</form>
				</div>
			</div>
            <br>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
							Detail View
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								
								
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 Description
								</th>
								<th>
									 Type
								</th>
								<th>
									 Date of Upload
								</th>
								
								
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 alex
								</td>
								<td>
									 Alex Nilson
								</td>
								<td>
									 1234
								</td>
							
								
							</tr>
							<tr>
								<td>
									 lisa
								</td>
								<td>
									 Lisa Wong
								</td>
								<td>
									 434
								</td>
								
								
							</tr>
							<tr>
								<td>
									 nick12
								</td>
								<td>
									 Nick Roberts
								</td>
								<td>
									 232
								</td>
								
								
							</tr>
							<tr>
								<td>
									 goldweb
								</td>
								<td>
									 Sergio Jackson
								</td>
								<td>
									 132
								</td>
								
							</tr>
							<tr>
								<td>
									 webriver
								</td>
								<td>
									 Antonio Sanches
								</td>
								<td>
									 462
								</td>
								
							</tr>
							<tr>
								<td>
									 gist124
								</td>
								<td>
									 Nick Roberts
								</td>
								<td>
									 62
								</td>
								
							</tr>
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
<?php $this->load->view('dashboard/footer');?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url();?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>

<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo base_url();?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/core/app.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/custom/index.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/custom/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   Index.initIntro();
   Tasks.initDashboardWidget();
   
    $(".txt1").hide();
  $(".btn2").click(function(){
    $(".txt1").show();
	 $(".txt2").hide();
  });
  $(".txt2").hide();
  
  $(".btn3").click(function(){
    $(".txt2").show();
	 $(".txt1").hide();
  });
  $(".txt2").hide();
   
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>