<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
    <thead>
        <tr>
            <th>
                <?php echo $this->lang->line("table_group_name"); ?>
            </th>
            <th>
                <?php echo $this->lang->line("table_role"); ?>
            </th>
            <th>
                <?php echo $this->lang->line('table_applications'); ?>
            </th>
            <th>
                <?php echo $this->lang->line('dashboard_location_action'); ?>
            </th>            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($groups as $group) {?>
            <tr>
                <td>
                    <?php echo $group['name']; ?>
                </td>
                <td>
                    <?php echo $this->lang->line($group['role_name']); ?>
                </td>
                <td>
                    <?php echo $group['application_name']; ?>
                </td>
                <td>
                    <a href="" class="group_edit" data-id="<?php echo $group['id']; ?>">
                        <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line('table_edit'); ?></button>
                    </a>               
                    <a class="group_delete" data-id="<?php echo $group['id']; ?>" href="#">
                        <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line('table_delete'); ?></button>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>