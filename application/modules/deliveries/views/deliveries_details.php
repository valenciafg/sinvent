<div class="row">
    <div class="col-lg-12">
		<table id="details_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
		    <thead>
		        <tr>		            
		            <th><?php echo $this->lang->line('code'); ?></th>
		            <th><?php echo $this->lang->line('good_equipment'); ?></th>
		            <th><?php echo $this->lang->line('quantity_assigned'); ?></th>
		            <th><?php echo $this->lang->line('observations'); ?></th>           
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

<script>
	jQuery(document).ready(function() {
		$('#details_table').DataTable({
            language: {
                url: "<?php echo base_url(); ?>assets/plugins/datatables/js/lang/Spanish.json"
            },
            aLengthMenu: [
                    [5, 15, 20, -1],
                    [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"]
                ],
            iDisplayLength: 5,            
            order: [[ 3, "desc" ]]
        });
    });
</script>