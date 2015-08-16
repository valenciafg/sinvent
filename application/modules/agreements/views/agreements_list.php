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
<!--<table class="table table-striped table-hover table-bordered" id="sample_editable_1">-->
<table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>
                <?php echo $this->lang->line("agreement_number"); ?>
            </th>
            <th>
                <?php echo $this->lang->line("agreement_name"); ?>
            </th>
            <th>
                <?php echo $this->lang->line("agreement_contractor"); ?>
            </th>
            <th>
                <?php echo $this->lang->line('amount_awarded'); ?>
            </th>
            <th>
                <?php echo $this->lang->line('financial_progress'); ?>
            </th>
            <th>
                <?php echo $this->lang->line('physical_progress'); ?>
            </th>
            <th>
                <?php echo $this->lang->line('amount_per_run'); ?>
            </th>
            <?php
            if ($this->session->userdata('role') == 'admin' || ($this->session->userdata('role') == 'write' &&  $this->session->userdata('application') == 'Inventario/Servicios')) {
            ?>
            <th>
                <?php echo $this->lang->line('actions'); ?>
            </th>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($agreements as $agreement) {
        ?>
        <tr>
            <td>
                <?php echo $agreement['agreement_number'];?>
            </td>
            <td>
                <?php echo $agreement['name'];?>
            </td>
            <td>
                <?php echo $agreement['contractor'];?>
            </td>
            <td>
                <?php echo number_format($agreement['amount_awarded'],3,",",".");?>
            </td>
            <td>
                <?php echo number_format($agreement['financial_progress'],1)." %";?>
            </td>
            <td>
                <?php echo number_format($agreement['physical_progress'],1)." %";?>
            </td>
            <td>
                <?php echo number_format($agreement['amount_per_run'],3,",",".");?>
            </td>
            <?php
            if ($this->session->userdata('role') == 'admin' || ($this->session->userdata('role') == 'write' &&  $this->session->userdata('application') == 'Inventario/Servicios')) {
            ?>
            <td>
                <a href="" class="agreement_edit" data-id="<?php echo $agreement['agreement_number'];?>">
                 <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line("table_edit"); ?></button>
                </a>            
                <a class="agreement_delete" data-id="<?php echo $agreement['id'];?>" href="#">
                   <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line("table_delete"); ?></button>
                </a>
                <!--<a class="agreement_pdf" href="<?php echo base_url(); ?>">
                    <button type="button" class="btn btn-primary btn-xs"> PDF...</button>
                </a>
                <a class="agreement_csv" href="<?php echo base_url(); ?>">
                    <button type="button" class="btn btn-success btn-xs">CSV</button>
                </a>-->
            </td>
            <?php
            }
            ?>
        </tr>
        <?php } ?>

    </tbody>
</table>