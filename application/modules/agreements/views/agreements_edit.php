<!--EDIT AGREEMENT FORM-->
<?php
$number = $agreement['agreement_number'];
?>
<div class="row">
    <div class="col-md-12">
        <div id="error" style="padding-left: 220px;color: red;display:none;"></div>
        <!-- onsubmit="return validateForm()" -->
        <form name="newuser" method="post" action="<?php echo base_url(); ?>agreements/edit_agreement" class="form-horizontal">
            <div class="form-body">
        	<!--FORM BODY -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_number'); ?></label>
                            <div class="col-md-8">
                                <input class="form-control" id="agreement_number" name="agreement_number" type="text" placeholder="<?php echo $agreement['agreement_number']; ?>">
                                <input type="hidden" class="form-control" value="<?php echo $agreement['agreement_number']; ?>" name="agreement_id">                                
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_name'); ?></label>
                            <div class="col-md-8">
                                <input type="text" id="agreement_name" name="agreement_name" class="form-control" value="<?php echo $agreement['name'];?>">

                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('agreement_contractor'); ?></label>
                            <div class="col-md-8">
                                <input type="text" id="agreement_contractor" name="agreement_contractor" class="form-control" value="<?php echo $agreement['contractor'];?>">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('amount_awarded'); ?></label>
                            <div class="col-md-8">
                            	<div class="input-group">
                                <input type="text" id="amount_awarded" name="amount_awarded" class="form-control" value="<?php echo $agreement['amount_awarded'];?>">
                                <div class="input-group-addon">Bs.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('amount_per_run'); ?></label>
                            <div class="col-md-8">
                            	<div class="input-group">
                                <input type="text" id="amount_per_run" name="amount_per_run" class="form-control" value="<?php echo $agreement['amount_per_run'];?>">
                                <div class="input-group-addon">Bs.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('physical_progress'); ?></label>
                            <div class="col-md-8">
                            	<div class="input-group">
                                <input type="text" id="physical_progress" name="physical_progress" class="form-control" value="<?php echo number_format($agreement['physical_progress'],1);?>">
                                <div class="input-group-addon">%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label col-md-4"><?php echo $this->lang->line('financial_progress'); ?></label>
                            <div class="col-md-8">
                            	<div class="input-group">
                                <input type="text" id="financial_progress" name="financial_progress" class="form-control" value="<?php echo number_format($agreement['financial_progress'],1);?>">
                                <div class="input-group-addon">%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>

            <!--END. FORM BODY -->
            </div>

            <div class="fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5"></div>
                        <div class="col-md-5">
                            <input type="submit" name="submit" value="<?php echo $this->lang->line("submit"); ?>" class="btn btn-success" style="margin-top:30px;margin-left:226px;">
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<!--END. EDIT AGREEMENT-->