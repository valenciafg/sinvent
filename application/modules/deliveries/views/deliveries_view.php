<?php 
/*****************************************************
<copyright>
Linux Solutions, C.A.
Alfonso Santana
Caracas - Venezuela
Todos los derechos reservados 2015
</copyright>
***************************/
$this->load->view('dashboard/header'); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('dashboard/left_menu'); ?>
            <div class="col-md-10 col-sm-9 col-lg-10">
                <br>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                        <!-- END STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="page-title"><?php echo $this->lang->line('deliveries_title'); ?></h3>
                                <!-- END PAGE TITLE & BREADCRUMB-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">                                
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <?php echo $this->lang->line('deliveries_list'); ?>
                                        </div>
                                    </div>                                    
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="btn-group">
                                                <button id="add_delivery" class="btn btn-success">
                                                    <?php echo $this->lang->line("add_new_button"); ?> <i class="fa fa-plus"></i>
                                                </button>
                                            </div>                                            
                                        </div>
                                        <!--DELIVERIES LIST-->
                                        <div id="users_list">
                                            <!-- AQUI CAMBIAR POR LISTAS DE ENTREGAS-->                                                    
                                            <?php echo $this->load->view('deliveries/deliveries_list'); ?>
                                        </div>
                                        <!--END. DELIVERIES LIST-->                                                
                                    </div>
                                </div>                    
                            </div>  
                        </div>                            
                    </div>
                </div>
                <!--DELIVERIES DETAILS-->
                <div class="modal fade" id="delivery_detail_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('deliveries_details'); ?></h4>
                            </div>
                            <div id="delivery_detail" class="modal-body">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END. DELIVERIES DETAILS-->
                <!-- NEW DELIVERY FORM -->
                <div class="modal fade" id="new_delivery_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <!--<div class="modal fade" id="new_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('add_new_delivery'); ?></h4>
                            </div>
                            <div class="modal-body">
                                <!--<div role="tabpanel" class="tab-pane" id="new_delivery">-->
                                    <?php $this->load->view('new_delivery_view'); ?>
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END. NEW DELIVERY FORM -->
                <!-- EDIT DELIVERY-->
                <div class="modal fade" id="edit_delivery_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('edit_delivery'); ?></h4>
                                <div id="delivery_edit" class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END. EDIT DELIVERY-->
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/jquery-1.11.1.min.js"></script>
<!--search scripts-->
<script src="<?php echo base_url(); ?>assets/js/core/app.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/custom/table-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--datatables scripts-->
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/responsive-datatable/js/dataTables.responsive.min.js"></script>
<!--datepicker-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
<!--jqBootstrapValidation-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jsbootstrapvalidation/jqBootstrapValidation.js"></script> 
<script>

    jQuery(document).ready(function() {
        var inFormOrLink;
        $('a[href]:not([target]), a[href][target=_self]').on('click', function() { inFormOrLink = true; });
        $('form').bind('submit', function() { inFormOrLink = true; });
        $(window).unload(function(){
            if(!inFormOrLink){
                $.ajax({
                    url: '<?php echo base_url(); ?>users/on_close_logout',
                    async:false
                });
            }
        });
        
        App.init();
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID    
        var inputs = ""
        var idx = 1;
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            //console.log("aquiiii"+idx);
            inputs = '<div class="row">'
            inputs = inputs + '<div class="col-xs-1"><input type="text" class="form-control" placeholder="#" name="id['+idx+']" required/></div>'
            inputs = inputs + '<div class="col-xs-3"><input type="text" class="form-control" placeholder="ítem" name="item['+idx+']"/></div>'
            inputs = inputs + '<div class="col-xs-2"><input type="number" class="form-control" placeholder="Cantidad" name="cantidad['+idx+']" min="0"/></div>'
            inputs = inputs + '<div class="col-xs-2"><input type="text" class="form-control" placeholder="Unidad" name="unidad['+idx+']" disabled></div>'
            inputs = inputs + '<div class="col-xs-3"><input type="text" class="form-control" placeholder="Observaciones" name="observaciones['+idx+']"/></div>'
            inputs = inputs + '<a href="#" class="remove_field"><button class="btn btn-danger">X</button></a>'
            inputs = inputs + '</div>'
            $(wrapper).append(inputs);
            item_search($('input[name^="id['+idx+']"]'),$('input[name^="item['+idx+']"]'),$('input[name^="cantidad['+idx+']"]'),$('input[name^="unidad['+idx+']"]'));
            create_datepicker($('input[name^="fecha['+idx+']"]'));
            idx++;
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault();             
             $(this).closest("div").remove();    
        });

        function create_datepicker($date){
                $date.datepicker({
                autoclose: true,
                format: 'dd/mm/yyyy',
                isRTL: false,
                language: 'es'
            });    
        }
        //create_datepicker($('input[name^="fecha[0]"]'));
        //search and pagination language conversion start
        $('#example').DataTable({
            //responsive: true;
            language: {
                url: "<?php echo base_url(); ?>assets/plugins/datatables/js/lang/Spanish.json"
            },
            aLengthMenu: [
                    [5, 15, 20, -1],
                    [5, 15, 20, "<?php echo $this->lang->line('all'); ?>"] // change per page values here
                ],
            iDisplayLength: 5,            
            order: [[ 3, "desc" ]]
        });
        //search and pagination language conversion end
        $("#add_delivery").click(function() {
            $('#new_delivery_modal').modal('show');
        });

        /*
        Item search
        */
        function item_search($id,$item,$cantidad,$unidad){
        $id.keyup(function(){
            $id.each(function(){
                var code = $id.val();
                $.ajax({
                    url: "<?php echo base_url(); ?>inventory/get_good_info_json",
                    type: "POST",
                    dataType:'json',
                    data: {"id": code},
                    success: function(response){
                        console.log(response);     
                        $item.val(response['description']);
                        $cantidad.val(response['quantity_available']);
                        $cantidad.attr('max', response['quantity_available']);
                        $unidad.val(response['unidad']);                 
                    },
                    error: function(jqxhr,textStatus,errorThrown){
                        console.log(jqxhr);
                        console.log(textStatus);
                        console.log(errorThrown);
                        $item.val('');
                        $cantidad.val('');
                        $unidad.val('');
                    },
                });
            });
        });
        }
        item_search($('input[name^="id[0]"]'),$('input[name^="item[0]"]'),$('input[name^="cantidad[0]"]'),$('input[name^="unidad[0]"]'));
        //user edit function
        /*$(".user_edit").click(function() {
            var user_id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo base_url(); ?>users/get_user_info",
                type: "POST",
                data: {"user_id": user_id},
                success: function(data)
                {
                    console.log(data);
                    $('#edit_modal').html(data);
                    $('#user_edit_modal').modal('show');
                    return false;
                },
                error: function()
                {
                    console.log('error');
                    return false;
                },
            });
            return false;

        });*/
        $(".delivery_edit").click(function() {
            //$('#edit_delivery_modal').modal('show');
            var delivery_id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo base_url(); ?>deliveries/edit_delivery",
                type: "POST",
                data: {"delivery_id": delivery_id},
                success: function(data){
                    console.log(data);
                    $('#delivery_edit').html(data);
                    $('#edit_delivery_modal').modal('show');
                    return false;
                },
                error: function(jqxhr,textStatus,errorThrown){
                    console.log(jqxhr);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            return false;
        });
        $(".details_view").click(function() {
            //$('#delivery_detail_modal').modal('show');
            var delivery_id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo base_url(); ?>deliveries/get_delivery_info",
                type: "POST",
                data: {"delivery_id": delivery_id},
                success: function(data){
                    console.log(data);
                    $('#delivery_detail').html(data);
                    $('#delivery_detail_modal').modal('show');
                    return false;
                },
                error: function(jqxhr,textStatus,errorThrown){
                    console.log(jqxhr);
                    console.log(textStatus);
                    console.log(errorThrown);
                }
            });
            return false;
        });
        //user delete start
        $('.user_delete').click(function(e) {
            e.preventDefault();
            var user_id = $(this).attr('data-id');
            if (confirm("Are you sure to delete this user?") == false) {
                return;
            }
            var element = this;
            $.ajax({
                url: "<?php echo base_url(); ?>users/delete_user",
                type: "POST",
                data: {"user_id": user_id},
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
</body>
</html>