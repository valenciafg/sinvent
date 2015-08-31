
<form name="inventoryimage" action="<?php echo base_url(); ?>works/do_upload" method="post" enctype="multipart/form-data">
    <div class="fileuploadform">
        <div class="row">
            <div class="col-md-12">
                <div id="upload_error" style="padding-left: 220px;color: red;display:none;"></div>
                    <div class="form-group">
                        <label class="control-label col-md-4">
                            <?php echo $this->lang->line('dashboard_location_imglocation'); ?>
                        </label>
                        <div class="col-md-8">
                            <input type="hidden" name="work_id" id="work_id" value="<?php echo $id;?>">
                            <input type="file" id="work_img" name="work_img" required>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label col-md-4">
                        <?php echo $this->lang->line("table_description"); ?>
                    </label>
                    <div class="col-md-8">
                        <textarea id="img_description" name="img_description" value="" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" name="submit" value="<?php echo $this->lang->line('upload'); ?>" class="btn blue">
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function () {
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 
});
</script>                            
