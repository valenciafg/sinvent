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
<div class="col-sm-3 col-md-2 col-lg-2 sidebar">
    <ul class="nav nav-sidebar">
        <?php
        if ($page == 'dashboard') {
            echo '<li class="start menuactive">';
        }else {
            echo '<li class="start">';
        }
        ?>
        <a href="<?php echo base_url(); ?>dashboard" class="Contenedor-Texto-Menu">
            <span class="Text-menu" > <?php echo $this->lang->line("dashboard_menu"); ?></span>
        </a>
        </li>
        <!-- Usuarios -->
        <?php
        if($this->session->userdata('role') == 'admin' && $this->session->userdata('application') == 'Todas'){        
            if ($page == 'user') {
                echo '<li class="start menuactive">';
            } else {
                echo '<li class="start">';
            }
        ?>            
        <a href="<?php echo base_url(); ?>users" class="Contenedor-Texto-Menu">
            <span class="Text-menu" ><?php echo $this->lang->line("users_menu"); ?></span>
        </a>
        </li>
        <!-- Grupos -->
        <?php
            if ($page == 'group') {
                echo '<li class="start menuactive">';
            } else {
                echo '<li class="start">';
            }
            ?>            
            <a href="<?php echo base_url(); ?>groups" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("group_menu"); ?>
                </span>
            </a>
        </li>
        <!-- Áreas -->
        <?php
        if ($page == 'location') {
            echo '<li class="start menuactive">';
        } else {
            echo '<li class="start">';
        }
        ?>
            <a href="<?php echo base_url(); ?>location" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("dashboard_location_menu"); ?>
                </span>
            </a>
        </li>
        <?php 
        }             
        ?>
        <!-- Obras -->
        <?php
        if($this->session->userdata('application') == 'Todas' || $this->session->userdata('application') == 'Obras'){
            if ($page == 'works') {
                echo '<li class="start menuactive">';
            } else {
                echo '<li class="start">';
            }
            ?>            
            <a href="<?php echo base_url(); ?>works" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("works"); ?>
                </span>
            </a>
        </li>
            
        <!-- Servicios -->
        <?php
        }
        if($this->session->userdata('application') == 'Todas' || $this->session->userdata('application') == 'Inventario/Servicios'){
            if ($page == 'inventory_works') {
                echo '<li class="start menuactive">';
            } else {
                echo '<li class="start">';
            }
            ?>            
            <a href="<?php echo base_url(); ?>inventory/works" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("dashboard_location_work"); ?>
                </span>
            </a>
        </li>
        <!-- Bienes/Materiales -->
        <?php
            if ($page == 'inventory_articles') {
                echo '<li class="start menuactive">';
            }else {
                echo '<li class="start">';
            }
            ?>            
            <a href="<?php echo base_url(); ?>inventory/goods" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("dashboard_location_article"); ?>
                </span>
            </a>
        </li>
        <!-- Contrataciones -->
        <?php        
            if ($page == 'agreements') {
                echo '<li class="start menuactive">';
            } else {
                echo '<li class="start">';
            }
            ?>            
            <a href="<?php echo base_url(); ?>agreements" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("dashboard_agreements"); ?>
                </span>
            </a>
        </li>
        <!-- Notas de entrega -->
        <?php
        if ($page == 'deliveries') {
            echo '<li class="start menuactive">';
        } else {
            echo '<li class="start">';
        }
        ?>            
            <a href="<?php echo base_url(); ?>deliveries" class="Contenedor-Texto-Menu">
                <span class="Text-menu" >
                    <?php echo $this->lang->line("dashboard_deliveries"); ?>
                </span>
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
</div>