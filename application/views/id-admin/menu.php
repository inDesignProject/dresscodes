<?php
    // error_reporting(0);
    if($menu=='product'){
        $aktif_product = 'active';
    }
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('dist/backend/img/avatar.png');?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('fullname'); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a> <a href="<?php echo base_url('id-admin/logout');?>" class="label label-danger"><i class="fa fa-power-off"></i> Logout</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="<?php echo $aktif_product;?>">
                <a href="<?php echo base_url('id-admin/product');?>"><i class="fa fa-cube"></i> <span>Product</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>