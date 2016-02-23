<?php
    if(!$this->session->userdata('id_admin')){
        $this->session->set_flashdata('msg', 'error');
        header('location: '.base_url('id-admin'));
    }
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>ADMIN PANEL</title>
        <link rel="shortcut icon" href="<?php echo base_url('dist/favicon.ico');?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url('dist/favicon.ico');?>" type="image/x-icon">
        <link href="<?php echo base_url('dist/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/backend/css/skin-blue.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/backend/plugins/select2/select2.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/backend/plugins/datatables/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/backend/plugins/datetimepicker/jquery.datetimepicker.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('dist/backend/css/AdminLTE.min.css');?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini fixed">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>DC</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Dress</b>Codes</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-fixed-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li><a href="<?php echo base_url();?>" target="_blank"><i class="fa fa-desktop"></i> View Site</a></li>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url('dist/backend/img/avatar.png');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $this->session->userdata('fullname');?></strong></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url('dist/backend/img/avatar.png')?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $this->session->userdata('fullname');?><br/><span class="label label-default">Super Administrator</span>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('id-admin/user/profil/'.$this->session->userdata('id_user'));?>" class="btn btn-info btn-flat"><i class="fa fa-user"></i> Profil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('id-admin/logout');?>" class="btn btn-danger btn-flat"><i class="fa fa-power-off"></i> Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>