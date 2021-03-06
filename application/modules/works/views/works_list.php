<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            
            <th><?php echo $this->lang->line('name'); ?></th>
            <th><?php echo $this->lang->line('contractor'); ?></th>
            <th><?php echo $this->lang->line('table_building'); ?></th>
            <th><?php echo $this->lang->line('table_floor'); ?></th>
            <th><?php echo $this->lang->line('table_office'); ?></th>
            <?php
            if ($this->session->userdata('role') == 'admin' || ($this->session->userdata('role') == 'write' &&  $this->session->userdata('application') == 'Obras')) {
                ?>
            <th><?php echo $this->lang->line('actions'); ?></th>
            <?php } ?>            
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($works as $work) {
        ?>
        <tr>
            <td><?php echo $work['name'];?></td>
            <td><?php echo $work['contractor'];?></td>
            <td><?php echo $work['building'];?></td>
            <td><?php echo $work['floor'];?></td>
            <td><?php echo $work['office'];?></td>
            <?php
            if ($this->session->userdata('role') == 'admin' || ($this->session->userdata('role') == 'write' &&  $this->session->userdata('application') == 'Obras')) {
                ?>
            <td>
            <?php $work_id = $work['id']; ?>
                <a href="" class="work_edit" data-id="<?php echo $work['id']; ?>">
                    <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line("table_edit"); ?></button>
                </a>
            <?php if ($this->session->userdata('role') == 'admin') { ?>
                <a href="" class="work_delete" data-id="<?php echo $work['id']; ?>">
                    <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line("table_delete"); ?></button>
                </a>
            <?php } ?>
                <a href="#" data-toggle="modal" class="img_upload" data-id="<?php echo $work_id; ?>" title="img Upload">
                    <button type="button" class="btn btn-success btn-xs"><?php echo $this->lang->line('upload'); ?></button>
                </a>
                <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $work_id; ?>" title="logs">
                    <button type="button" class="btn btn-primary btn-xs"><?php echo $this->lang->line('view_log'); ?></button>
                </a>
            </td>
        <?php } ?>
        </tr>
        <?php
        }
        ?>         
    </tbody>
</table>