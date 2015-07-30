<?php
/* * ***************************************************
  <copyright>
  Linux Solutions, C.A.
  Alfonso Santana
  Caracas - Venezuela
  Todos los derechos reservados 2015
  </copyright>
 * ************************* */
?>
<div class="row">
    <div class="col-lg-12">
        <?php 
            $article_id = $get_article['id'];
            $selected_category="";
            // onsubmit="return validatearticleEditForm()"
        ?>	
        <div id="article_edit_error" style="padding-left: 220px;color: red;display:none;"></div>
        <form name="edit_inventory" method="post" action="<?php echo base_url(); ?>inventory/edit_article" class="form-horizontal">
            <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
            <div class="form-body table1">
                <!--building drop down on article select -->
                <div id="building_drop" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('categories') ?></label>
                                <div class="col-md-8">
                                    <select id="goods_edit_category" name="goods_edit_category" class="form-control category-select-edit">
                                        <?php
                                        echo '<option value="">--seleccione--</option>';
                                        foreach ($categories as $category) {
                                            if ($category["id"] == $get_article['category']) {
                                                $selected_category = $category["id"];
                                                echo '<option value="' . $category["id"] . '" selected=selected>' . $category["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $category["id"] . '">' . $category["name"] . '</option>';
                                            }
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('subcategories') ?></label>
                                <div class="col-md-8">
                                    <select id="goods_edit_subcategory" name="goods_edit_subcategory" class="form-control subcategory-select">
                                        <?php
                                        echo '<option value="">--seleccione--</option>';
                                        foreach ($subcategories as $subcategory) {
                                            if ($subcategory["id"] == $get_article['subcategory']) {
                                                echo '<option value="' . $subcategory["id"] . '" selected=selected>' . $subcategory["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $subcategory["id"] . '">' . $subcategory["name"] . '</option>';
                                            }
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        if($selected_category==3)
                            echo "<div id=\"type-edit\" style=\"display:block;\">";
                        else
                            echo "<div id=\"type-edit\" style=\"display:none;\">";
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_building') ?></label>
                                <div class="col-md-8">
                                    <select id="goods_edit_building" name="goods_building" class="form-control building-select">
                                        <?php
                                        echo '<option value="">--seleccione--</option>';
                                        foreach ($buildings as $building) {
                                            if ($building["id"] == $get_article['building_id']) {
                                                echo '<option value="' . $building["id"] . '" selected=selected>' . $building["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $building["id"] . '">' . $building["name"] . '</option>';
                                            }
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php 
                        if($selected_category==3)
                            echo "<div id=\"subtype-edit\" style=\"display:block;\">";
                        else
                            echo "<div id=\"subtype-edit\" style=\"display:none;\">";
                    ?>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_floor'); ?></label>
                                <div class="col-md-8">
                                    <select id="article_edit_floor" name="goods_floor" class="form-control floor-select">
                                        <option value="">--seleccione--</option>
                                        <?php
                                        foreach ($first_floor as $floor) {
                                            if ($floor["id"] == $get_article['floor_id']) {
                                                echo '<option value="' . $floor["id"] . '" selected=selected>' . $floor["name"] . '</option>';
                                            } else {
                                                echo '<option value="' . $floor["id"] . '">' . $floor["name"] . '</option>';
                                            }
                                        }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>                            
                        </div>
                        </div>
                        <?php 
                            if($selected_category==3)
                                echo "<div id=\"clasification-edit\" style=\"display:block;\">";
                            else
                                echo "<div id=\"clasification-edit\" style=\"display:none;\">";
                        ?>                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_office'); ?></label>
                                    <div class="col-md-8">
                                        <select id="article_edit_office" name="goods_office" class="form-control office-select">
                                            <option value="">--seleccione--</option>
                                            <?php
                                            foreach ($first_office as $first_offices) {
                                                if ($first_offices["id"] == $get_article['office_id']) {
                                                    echo '<option value="' . $first_offices["id"] . '" selected=selected>' . $first_offices["name"] . '</option>';
                                                } else {
                                                    echo '<option value="' . $first_offices["id"] . '">' . $first_offices["name"] . '</option>';
                                                }
                                            }
                                            ?>  
                                        </select>
                                    </div>
                                </div>
                            </div>                       
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><p style="margin-left:-10px;"><?php echo $this->lang->line('dashboard_location_description'); ?></p></label>
                                    <div class="col-md-8">
                                        <input type="text" id="article_edit_description" name="article_description" value="<?php echo $get_article['description'];?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_brand'); ?></label>
                                    <div class="col-md-8">
                                        <input type="text" id="article_edit_brand" name="article_brand" value="<?php echo $get_article['brand'];?>" class="form-control" >

                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_model'); ?></label>
                                    <div class="col-md-8">
                                        <input name="article_model" id="article_edit_model" type="text" value="<?php echo $get_article['model'];?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_serial'); ?></label>
                                    <div class="col-md-8">
                                        <input type="text" name="article_serial" id="article_edit_serial" value="<?php echo $get_article['serial'];?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>                        
                        <!--article divestiture -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_divestiture'); ?></label>
                                    <div class="col-md-8">
                                        <input name="article_divestiture"  id="article_edit_divestiture" type="text" value="<?php echo $get_article['divestiture'];?>" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--article divestiture -->
                        <!--article quantity -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('quantity'); ?></label>
                                    <div class="col-md-8">
                                        <input name="article_quantity"  id="article_edit_quantity" type="text" value="<?php echo $get_article['quantity'];?>" class="form-control">
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <!--article quantity type-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="control-label col-md-4"><?php echo $this->lang->line('dashboard_location_unit'); ?></label>
                                    <div class="col-md-8">
                                        <select id="article_edit_unit" name="article_unit" class="form-control">
                                            <option value="">--seleccione--</option>
                                            <?php
                                            foreach($measurings as $measuring) {
                                                if ($measuring["id"] == $get_article['quantity_id']) {
                                                    echo '<option value="' . $measuring["id"] . '" selected=selected>' . $measuring["description"] . '</option>';
                                                } else{
                                                    echo '<option value="' . $measuring["id"] . '">' . $measuring["description"] . '</option>';
                                                }
                                            }
                                            ?>  
                                        </select>
                                    </div>
                                </div>
                            </div>                       
                        </div>

                    </div>
                    <!--article quantity type-->
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" value="<?php echo $this->lang->line('submit'); ?>" class="btn blue">
            </div>
        </form>

    </div>
</div>
<script>
$(document).ready(function()
{
  $('#article_edit_divestiture').datepicker();
});  
</script>    
