<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>ADMIN PANEL</title>
        <link rel="shortcut icon" href="<?php echo base_url('dist/favicon.ico');?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url('dist/favicon.ico');?>" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="<?php echo base_url('dist/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('dist/backend/css/AdminLTE.min.css');?>">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Dress</b>Codes</a>
            </div><!-- /.login-logo -->
            <?php if ($this->session->flashdata('msg')=='failed-1') { ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Login Failed!</strong><br/>Username or password is incorrect
                </div>
            <?php }elseif ($this->session->flashdata('msg')=='error') { ?>
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Session Expired!</strong><br/>To access this page you need to logged in
                </div>
            <?php } ?>
            <div class="login-box-body">
                <p class="login-box-msg">Logged in to start your session</p>
                <?php echo form_open('id-admin/login/ceklogin'); ?>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" autofocus name="username" placeholder="Username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                        </div><!-- /.col -->
                    </div>
                <?php echo form_close();?>
            </div><!-- /.login-box-body --><br/>
            <p class="footer text-center">&copy; <?php echo date('Y');?> <a href="http://indesign.co.id" target="_blank">inDesign Project</a></p>          
        </div><!-- /.login-box -->
        <script src="<?php echo base_url('dist/jquery-2.1.4.min.js');?>"></script>
        <script src="<?php echo base_url('dist/bootstrap/js/bootstrap.min.js');?>"></script>
    </body>
</html>