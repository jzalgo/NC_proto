<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nasty Center Prototype</title>


  	  <link href="<?= base_url(); ?>assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<style>

body   {

    background-color:  #a3a3c2;

}

#odbox {
    margin-top: 150px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 55px;
}

#btjbox {
    margin-top: 150px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 55px;
}

#oembox {
    margin-top: 150px;
    margin-bottom: 0px;
    margin-right: 0px;
    margin-left: 55px;
}

.hidden {
    visibility: hidden;
    over-flow: hidden;
    width: 0px;
    height: 0px;
}

.mySlides {
  display:none;
  height: 300px;

}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.w3-left, .w3-right, .w3-badge {
    cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<div class="wrapper">
  <div class="container">

<div class="row">
  <div class="w3-content w3-display-container" style="max-width:500px">
      <div class="mySlides" style="width:100%">
            <div class="col-md-12">


                        <div style="height: 150px">

                                <input type="image" src="<?= base_url(); ?>/assets/uploads/files/od.png"
                                    alt="logo" class="goright img-responsive center-block" width="152" height="144"/>



                                    <div class="login-box" id="odbox">
                                        <div class="login-logo">
                                            <a href="#"><b>Or</b>dys</a>
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

                        </div>
                        <div class="clearfix" style="height: 20px"></div>
                        <div class="row">

                        </div>

            </div>
      </div>
      <div class="mySlides" style="width:100%">
            <div class="col-md-12">
                <div style="height: 150px">

                        <input type="image" src="<?= base_url(); ?>/assets/uploads/files/btj.png"
                            alt="logo" class="goleft img-responsive center-block"  width="152" height="144"/>


                                        <div class="login-box" id="btjbox">
                                            <div class="login-logo">
                                                <a href="#"><b>Big</b>TimeJuice</a>
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


                    </div>
                        <div class="clearfix" style="height: 20px"></div>
                      <div class="row">

                      </div>
                  </div>
      </div>
      <div class="mySlides" style="width:100%">
            <div class="col-md-12">
                <div style="height: 150px">

                        <input type="image" src="<?= base_url(); ?>/assets/uploads/files/oem.png"
                            alt="logo" class="gobott img-responsive center-block"  width="152" height="144"/>


                                        <div class="login-box" id="oembox">
                                            <div class="login-logo">
                                                <a href="#"><b>OE</b>M</a>
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
                    </div>
                    <div class="clearfix" style="height: 20px"></div>
                      <div class="row">

                      </div>
            </div>
      </div>

      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:60%">
        <div class="w3-left w3-grey w3-hover-text-black" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-grey w3-hover-text-black" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-purple w3-hover-black" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-purple w3-hover-black" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-purple w3-hover-black" onclick="currentDiv(3)"></span>
      </div>
  </div>
</div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="<?= base_url(); ?>assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
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

  <script>

  $(document).ready(function() {
      var odbox = $('p');
      $('#odbox').hide();

  $('.goright').click(function(e) {
      $('#odbox').toggle('fast');
      e.preventDefault();
  });
  });

  $(document).ready(function() {
      var btjbox = $('p');
      $('#btjbox').hide();

  $('.goleft').click(function(e) {
      $("#btjbox").toggle('fast');
      e.preventDefault();
    });
    });

    $(document).ready(function() {
        var oembox = $('p');
        $('#oembox').hide();

  $('.gobott').click(function(e) {
    $("#oembox").toggle('fast');
    e.preventDefault();
    });
    });

  </script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>
</body>
</html>
