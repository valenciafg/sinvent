<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Codigo</th>            
            <th><?php echo $this->lang->line('received_by'); ?></th>
            <th><?php echo $this->lang->line('delivered_by'); ?></th>
            <th><?php echo $this->lang->line('registration_date'); ?></th>
            <th><?php echo $this->lang->line('process'); ?></th>            
            <th><?php echo $this->lang->line('actions'); ?></th>
           
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($deliveries as $delivery) {
        ?>
        <tr>
            <td><?php echo $delivery['id'];?></td>
            <td><?php echo $delivery['received_by'];?></td>
            <td><?php echo $delivery['delivered_by'];?></td>
            <td><?php echo date("d/m/Y H:i:s", strtotime($delivery['registration_date']));?></td>
            <td><?php echo $delivery['process'];?></td>
            <td>
            <?php
            if ($this->session->userdata('role') == 'admin' || ($this->session->userdata('role') == 'write' &&  $this->session->userdata('application') == 'Obras')) {
            ?>
                <a href="" class="delivery_edit" data-id="<?php echo $delivery['id']; ?>">
                    <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line("table_edit"); ?></button>
                </a>
            <?php if ($this->session->userdata('role') == 'admin') { ?>
                <a href="" class="delivery_delete" data-id="<?php echo $delivery['id']; ?>">
                    <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line("table_delete"); ?></button>
                </a>
            <?php } 
            } 
            ?>            
                <a href="#" class="details_view" data-id="<?php echo $delivery['id']; ?>">
                    <button type="button" class="btn btn-primary btn-xs"><?php echo $this->lang->line('details'); ?></button>
                </a>
                <a href="<?php echo base_url().'deliveries/delivery_pdf_report';?>" class="btn btn-default btn-xs" target="_blank">
                    <span class="glyphicon glyphicon-file"></span> PDF
                </a>
            </td>    
        </tr>
        <?php
        }
        ?>         
    </tbody>
</table>