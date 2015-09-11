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
<table class="table table-striped table-hover table-bordered sample_editable_1">
                                        <thead>
                                            <tr>
<!--                                                <th>
                                                <?php //echo $this->lang->line('image');?>
                                                </th>-->
                                                <th>
                                                <?php echo $this->lang->line('table_description');?>
                                                </th>
                                                <th>
                                                    <?php echo $this->lang->line('table_date_of_upload');?>
                                                </th>
                                                <th>
                                                    <?php echo $this->lang->line('action');?>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($logs as $log)
                                            {
                                                ?>
                                            <tr>
<!--                                                <td>
                                                 <img height="50" width="50" src="<?php echo base_url().'assets/img/inventory_uploads/'.$log['image'];?>">
                                                </td>-->
                                                <td>
                                                 <?php echo $log['description'];?>
                                                </td>
                                                <td>
                                                 <?php echo date('d-m-Y g:i A',strtotime($log['date_uploaded']));?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url().'assets/img/inventory_uploads/'.$log['image'];?>" title="<?php echo $log['image'];?> " target="_blank"><?php echo $this->lang->line('download');?></a>
                                                <a class="log_delete" data-id="<?php echo $log['id']; ?>" href="#">
                                                 <?php echo $this->lang->line("table_delete"); ?>
                                                        </a>
                                                </td>

                                            </tr>
                                            <?php } ?> 
                                        </tbody>
                                    </table>
        <script src="<?php echo base_url(); ?>assets/js/custom/table-editable1.js"></script>
<script>
    jQuery(document).ready(function() {
                                                    //App.init();
                                                    $('.sample_editable_1').dataTable(
                                                            {
                                                        "aLengthMenu": [
                                                            [5, 15, 20, -1],
                                                            [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
                                                        ],
                                                        // set the initial value
                                                        "iDisplayLength": 5,
                                                        "sPaginationType": "bootstrap",
                                                        "oLanguage": {
                                                            "sUrl": "<?php echo base_url(); ?>assets/datatable_lan/<?php echo $language; ?>.txt"
                                                        },
                                                        "bDestroy": true,        
                                                        "aoColumnDefs": [{
                                                                'bSortable': false,
                                                                'aTargets': [0]
                                                            }
                                                        ]
                                                    }
                                                        );
//                                                                                                        $(".sample_editable_1").dataTable().fnDestroy();

                                                                                                        //search and pagination language conversion end
                                                   //log delete start
                                                    $('.log_delete').click(function(e) {
                                                        e.preventDefault();
                                                        var log_id = $(this).attr('data-id');
                                                        if (confirm("Are you sure to delete this File?") == false) {
                                                            return;
                                                        }
                                                        var element = this;
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>inventory/delete_log",
                                                            type: "POST",
                                                            data: {"log_id": log_id},
                                                            success: function(data)
                                                            {
                                                                $(element).parents('tr')[0].remove();
                                                                
                                                                return false;
                                                            },
                                                            error: function()
                                                            {
                                                                console.log('error');
                                                                return false;
                                                            },
                                                        });

                                                    });
                                                    //delete user end                                                   
                                                    });
    </script>