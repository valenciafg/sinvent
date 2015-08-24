<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Inventario</title>
        <link href="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/sinvent/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/sinvent/assets/css/style.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/css/bootstrap-theme.min.css"/>-->
        <link rel="stylesheet" href="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/sinvent/assets/plugins/responsive-datatable/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/sinvent/assets/plugins/responsive-datatable/css/dataTables.bootstrap.css"/>
        <link rel="stylesheet" href="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/sinvent/assets/plugins/responsive-datatable/css/dataTables.responsive.css"/>
        <style type="text/css">
		.borde{
        	border: 1px solid;
      	}
      	h1 {
			color: #000;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: bold;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}
        </style>
    </head>
<body>
	<div class="container">
	    <div class="row">
	        <div>
				<img src="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/sinvent/assets/img/inventory_img/logorojo.png">
	        </div>
	        <div class="text-center">
	        	<h1>Nota de Entrega</h1>
	        </div>	        
	    </div>
	    <div class="row">
			<table>
			    <tbody>
			    	<tr>
				        <th><u>Nro. de Control: </u></th>
				        <td><?php echo $delivery['id'];?></td>				        
				    </tr>
				    <tr>
				        <th>Recibido por: </th>
				        <td><?php echo $delivery['received_by'];?></td>
				    </tr>
				    <tr>
				        <th>Entregado por: </th>
				        <td><?php echo $delivery['delivered_by'];?></td>				        
				    </tr>
				    <tr>
				        <th>Proceso: </th>
				        <td><?php echo $delivery['process'];?></td>				        
				    </tr>
				    <tr>
				        <th>Fecha de Entrega: </th>
				        <td><?php echo date("d/m/Y H:i:s", strtotime($delivery['registration_date']));?></td>				        
				    </tr>
				</tbody>
			</table>
	    </div>
	    <div class="row">
	    	<table class="table table-bordered table-striped borde">
				<thead>
        			<tr>
    					<th class="text-center"><?php echo $this->lang->line('code'); ?></th>
			            <th class="text-center"><?php echo $this->lang->line('concept_description'); ?></th>
			            <th class="text-center"><?php echo $this->lang->line('quantity_assigned'); ?></th>
			            <th class="text-center"><?php echo $this->lang->line('observations'); ?></th>  
					</tr>
    			</thead>
    			<tbody>
    				<?php
			        foreach ($items as $item) {
			        ?>
			        <tr>
			            <td><?php echo $item['item_id'];?></td>
			            <td><?php echo $item['good_equipment'];?></td>
			            <td><?php echo $item['given_amount'];?></td>
			            <td><?php echo $item['observations'];?></td>		            
			        <?php } ?>
			        </tr>
				</tbody>
			</table>
	    </div>
	</div>
</body>
</html>