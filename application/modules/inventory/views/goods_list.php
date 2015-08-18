<div class="portlet-body">
    <?php
    if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
        ?>
        <div class="table-toolbar">
            <div class="btn-group">
                <a href="#portlet-config" data-toggle="modal" class="config">
                    <button id="sample_editable_1_new" class="btn btn-success">
                        <?php echo $this->lang->line('dashboard_location_addnew'); ?> <i class="fa fa-plus"></i>
                    </button></a>
            </div>
        </div>
    <?php } ?>
    <table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>
                    <?php echo $this->lang->line('id'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('dashboard_location_description'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('dashboard_location_model'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('dashboard_location_brand'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('quantity'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('quantity_available'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('dashboard_location_serial'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('categories'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('subcategories'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('table_building'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('table_floor'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('table_office'); ?>
                </th>
                <th>
                    <?php echo $this->lang->line('dashboard_location_divestiture'); ?>
                </th>
                <?php
                if ($this->session->userdata('role') == 'admin' || ($this->session->userdata('role') == 'write' &&  $this->session->userdata('application') == 'Inventario/Servicios')) {
                ?>
                <th>
                <?php echo $this->lang->line('dashboard_location_action'); ?>
                </th>
                <?php } ?>
            </tr>
        </thead>  
        <tbody>
        <?php
        foreach ($good_articles as $good_article) {
            ?>
                <tr>
                    <td>
                    <?php echo wordwrap($good_article['id'], 15, "<br>\n"); ?>
                    </td>
                    <td>
                    <?php echo wordwrap($good_article['description'], 15, "<br>\n"); ?>
                    </td>
                    <td>
                    <?php echo wordwrap($good_article['model'], 15, "<br>\n"); ?>
                    </td>
                    <td>
                    <?php echo wordwrap($good_article['brand'], 10, "<br>\n"); ?>
                    </td>
                    <td>
                    <?php echo wordwrap($good_article['quantity']." ".$good_article['quantity_type'], 10, "<br>\n"); ?>
                    </td>
                    <td>
                    <?php echo wordwrap($good_article['quantity_available']." ".$good_article['quantity_type'], 10, "<br>\n"); ?>
                    </td>
                    <td>
                    <?php echo wordwrap($good_article['serial'], 15, "<br>\n"); ?>
                    </td>
                    <td>
                        <?php echo wordwrap($good_article['category'], 10, "<br>\n"); ?>
                    </td>
                    <td>
                        <?php echo wordwrap($good_article['subcategory'], 10, "<br>\n"); ?>
                    </td>
                    <td>
                        <?php echo wordwrap($good_article['building'], 15, "<br>\n"); ?>
                    </td>
                    <td>
                        <?php echo wordwrap($good_article['floor'], 10, "<br>\n"); ?>
                    </td>
                    <td>
                        <?php echo wordwrap($good_article['office'], 15, "<br>\n"); ?>
                    </td>
                    <td>
                        <?php echo $good_article['divestiture']; ?>
                    </td>
                        <?php
                        if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'write') {
                            ?>
                        <td>
                        <?php $good_articles_id = $good_article['id']; ?>
                            <a href="" class="article_edit" data-id="<?php echo $good_articles_id; ?>">              
                                <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line("table_edit"); ?></button>
                            </a>
                            <?php
                                if ($this->session->userdata('role') == 'admin') {
                            ?>
                                <a href="" class="articles_delete" data-id="<?php echo $good_articles_id; ?>">
                                    <button type="button" class="btn btn-danger btn-xs"><?php echo $this->lang->line("table_delete"); ?></button>
                                </a>
                            <?php } ?>
                            <a href="#" data-toggle="modal" class="img_upload" data-id="<?php echo $good_article['id']; ?>" title="img Upload">
                                <button type="button" class="btn btn-success btn-xs"><?php echo $this->lang->line('upload'); ?></button>
                            </a>
                            <a href="#" data-toggle="modal" class="log_view" data-id="<?php echo $good_article['id']; ?>" title="logs">
                                <button type="button" class="btn btn-info btn-xs"><?php echo $this->lang->line('view_log'); ?></button>
                            </a>
                        </td>
                        <?php } ?>
                </tr>
        <?php } ?>
        </tbody>
    </table>                               
</div>