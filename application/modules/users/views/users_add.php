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
<title>Linux | User List</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
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
				<div class="col-md-12">
					<form name="newuser" method="post" action="<?php echo base_url();?>users/add" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section"> Add New User</h3>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="username">
																
															</div>
														</div>
													</div>
													<!--/span-->
                                                    </div>
                                                    <div class="row">
													<div class="col-md-12">
														<div class="form-group ">
															<label class="control-label col-md-3">Cargo</label>
															<div class="col-md-9">
																<input type="text" name="cargo" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
                                                    
												</div>
												<!--/row-->
                                                <div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Email</label>
															<div class="col-md-9">
																<input type="text" name="email" class="form-control">
																
															</div>
														</div>
													</div>
                                                    </div>
													<!--/span-->
                                                    <div class="row">
													<div class="col-md-12">
														<div class="form-group ">
															<label class="control-label col-md-3">Password</label>
															<div class="col-md-9">
																<input type="text" name="password" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Group</label>
															<div class="col-md-9">
																<select name="group" class="form-control">
																	<option value="">Test</option>
																	
																</select>
															
															</div>
														</div>
													</div>
													<!--/span-->
<!--													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Password</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>-->
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
<!--													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Cargo</label>
															<div class="col-md-9">
																<input type="text" class="form-control">
															</div>
														</div>
													</div>-->
													<!--/span-->
<!--													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3"></label>
															<div class="col-md-9">
																<img src="u68.png"  height="150">
															</div>
														</div>
													</div>-->
													<!--/span-->
												</div>
												
												<!--/row-->
												
												<!--/row-->
											</div>
											<div class="fluid">
												<div class="row">
													<div class="col-md-12">
                                                    <div class="col-md-5"></div>
														<div class="col-md-5">
															<input type="submit" name="submit" value="Submit" class="btn green btn-lg" style="margin-top:30px;">
															
														</div>
													</div>
													
												</div>
											</div>
										</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
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
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/js/core/app.js"></script>
<!--<script src="<?php echo base_url();?>assets/js/custom/table-editable.js"></script>-->
<script>
jQuery(document).ready(function() {       
   App.init();
   TableEditable.init();
});
</script>
</body>
<!-- END BODY -->
</html>