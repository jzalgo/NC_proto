<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Nasty | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />

        <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">

    </head>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a  class="dropdown-toggle" data-toggle="dropdown">Log In<span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
          <div class="col-lg-12">
            <div class="text-center">

    <body class="login-page pull-right">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Nasty</b>Worldwide</a>
            </div><!-- /.login-logo -->
                <p class="login-box-msg">Sign in to start your session</p>
                <?php echo form_open('auth/validate_credentials'); ?>

                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

                            <?php echo form_close(); ?>
                        </div><!-- /.col -->
                    </div>
                        </form>
                            <a href="#">I forgot my password</a><br>
                        </div><!-- /.login-box-body -->
                    </div><!-- /.login-box -->
                </div>
            </div>
        </ul>
    </li>
</ul>
        <div class="row">
            <div class="col-md-3">
                <div class="">
                    <a href="#"="_blank">
                      <img src='assets/uploads/files/2800f-5b85c-inven.jpg'  style="width:75%" class="img-rounded">
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="">
                    <a href="#"="_blank">
                      <img src='assets/uploads/files/ddfd6-ordys.jpg'  style="width:50%" class="img-rounded">
                    </a>
                </div>
            </div>
        </div>

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
