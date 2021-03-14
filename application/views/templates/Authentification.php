<!DOCTYPE html>
<html lang="en">
<head>
  <title>connexion</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <?= icone('logoU.png');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/vendor/bootstrap/css/bootstrap.min');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/fonts/font-awesome-4.7.0/css/font-awesome.min');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/fonts/iconic/css/material-design-iconic-font.min');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/vendor/animate/animate');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/vendor/css-hamburgers/hamburgers.min');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/vendor/animsition/css/animsition.min');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/vendor/select2/select2.min');?>
<!--===============================================================================================-->  
  <?= css_url_admin('connexion/vendor/daterangepicker/daterangepicker');?>
<!--===============================================================================================-->
  <?= css_url_admin('connexion/connexion2/css/util');?>
  <?= css_url_admin('connexion/connexion2/css/main');?>
<!--===============================================================================================-->
<style type="text/css">
  .bg-container{
    background-image: url('./assets/images/2.jpg');
  }
</style>

</head>
<body>
  <div class="limiter">
    <div class="container-login100 bg-container">
      <div class="wrap-login100">
            <a class="txt1" title="Accueil" href="http://iutgest.com/sigi/">
              <span class="fa fa-home" style="font-size: 20px"></span>
            </a>
        <form method="post" action="<?= base_url('authentification/connexion'); ?>" class="login100-form validate-form">
        <!--  <span class="login100-form-logo js-tilt">
            <!-<i class="zmdi zmdi-landscape"></i>
          </span>-->
          <div class="login100-pic js-tilt" data-tilt>
          <?= img_admin('logoU.png', 'logo Sigi');?>
        </div>

          <span class="login100-form-title p-b-34 p-t-27">
            Connexion
          </span>
        

          <?php
                        if($this->session->flashdata('message') !== NULL)
                        {
                            echo (
                                '<div class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">'
                                          .$this->session->flashdata('message').
                                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                </div>'
                                );
                        }
                    ?> 

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="login" placeholder="Pseudo">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Mot de passe">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Se souvenir de moi
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
              Connexion
            </button>
          </div>
        
          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Mot de passe oubli&eacute;?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  


  <div id="dropDownSelect1"></div>

         
  
<!--===============================================================================================-->  
  <?= js_url_admin('connexion/vendor/jquery/jquery-3.2.1.min');?>
<!--===============================================================================================-->
  <?= js_url_admin('connexion/vendor/bootstrap/js/popper');?>
  <?= js_url_admin('connexion/vendor/bootstrap/js/bootstrap.min');?>
<!--===============================================================================================-->
  <?= js_url_admin('connexion/vendor/select2/select2.min');?>
<!--===============================================================================================-->
  <?= js_url_admin('connexion/vendor/tilt/tilt.jquery.min');?>
  <script >
    //$(document).ready(function(){
      $('.js-tilt').tilt({ 
        scale: 1.1
      });
    //});
    
  </script>
<!--===============================================================================================-->
  <?= js_url_admin('connexion/js/main');?>
