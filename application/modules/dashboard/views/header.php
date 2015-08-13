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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Inventario</title>
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/css/bootstrap-theme.min.css"/>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/responsive-datatable/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/responsive-datatable/css/dataTables.bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/responsive-datatable/css/dataTables.responsive.css"/>
        <style>
            .title {
                font-size: larger;
                font-weight: bold;
            }

            .table th.centered-cell, .table td.centered-cell {
                text-align: center;
            }
        </style>

        <style>
            body{ margin-bottom:20px;}
            .header{ width:100%; border-bottom:#F00 solid 1px;}
            .top{ width:100%; background:#e6e6e6; padding:5px;}
            .content{  width:100%; border-bottom:#F00 solid 2px;}
            .sidebar{ background:url(<?php echo base_url(); ?>assets/img/inventory_img/degradacion.gif) repeat-x; border-right:#666 solid 1px; margin-left:0px; min-height:600px; margin-top:-3px;}
            .bg{background:url(<?php echo base_url(); ?>assets/img/inventory_img/header-gris-menu11.png); margin-left:-2px;}
            a:hover
            {
                cursor:pointer;
            }

            .Contenedor-Texto-Menu:hover, .Contenedor-Texto-sub-Menu:hover
            {  
                background-image:url(<?php echo base_url(); ?>assets/img/inventory_img/flecha.gif);
                background-repeat:no-repeat;
                background-position:left;
                padding-left:15px;
                color:#CC0000;
            }
            .Contenedor-Texto-sub-Menu:hover
            {  
                background-image:url(<?php echo base_url(); ?>assets/img/inventory_img/flechita.gif);

            }
            .Contenedor-Texto-sub-Menu{ margin-left:20px;}
            .btn{margin-bottom: 10px;}
        </style>
        <!--This is for show bootstrap datepicker on Chrome-->
        <style>.datepicker{z-index:1200 !important;}</style>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-2">
                            <img src="<?php echo base_url(); ?>assets/img/inventory_img/logorojxo.png" class="img-responsive">
                        </div>
                        <div class="col-lg-10">
                            <img src="<?php echo base_url(); ?>assets/img/inventory_img/degradacion_roja-aux12.png" style="margin-top:30px;" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8">
                            <p>Bienvenido</p>
                        </div>
                        <div class="col-lg-4 pull-right">
                            
                            <p>
                                <span style="margin-left:20px;"><?php echo $this->session->userdata('username');?></span>
                                <a href="<?php echo base_url();?>users/logout" style="margin-left:10px;">
							<i class="fa fa-key"></i> <?php echo $this->lang->line('log_out');?>
						</a> 
                                </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="bg" style="background:url(<?php echo base_url(); ?>assets/img/inventory_img/header-gris-menu14.png) no-repeat;">&nbsp;</div>