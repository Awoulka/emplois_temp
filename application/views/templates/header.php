<!DOCTYPE html>
<html lang="en">
<head>
  <title>IUT Emploi du temp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo base_url('assets/');?>public/css/bootstrap.min.css">
  <script src="<?php  echo base_url('assets/');?>public/js/base_url.js"></script>
  <script src="<?php  echo base_url('assets/');?>public/js/bootstrap.min.js"></script>

  <script src="<?php  echo base_url('assets/');?>public/js/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url('assets/');?>public/js/jquery/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url('assets/');?>public/js/jquery-ui.min.js"></script>
  <script src="<?php  echo base_url('assets/');?>public/js/script.js"></script>
  <script src="<?php  echo base_url('assets/');?>public/js/ajax.js"></script>
    <script src="<?php  echo base_url('assets/');?>public/js/script_.js"></script>
  <link rel="stylesheet" href="<?php  echo base_url('assets/');?>public/css/style.css">
  <link rel="stylesheet" href="<?php  echo base_url('assets/');?>public/css/style_.css">
  <script src="<?php  echo base_url('assets/');?>sweetalert/sweetalert.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="<?php  echo base_url('assets/');?>tamplate/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php  echo base_url('assets/');?>tamplate/css/shop-item.css" rel="stylesheet">


  
</head>
<body>


<!--header>
    <span class="toggle-button">
          <div class="menu-bar menu-bar-top"></div>
          <div class="menu-bar menu-bar-middle"></div>
          <div class="menu-bar menu-bar-bottom"></div>
        </span>
    <div class="menu-wrap">
      <div class="menu-sidebar">
        <ul class="menu">
          <li><a href="#" class="edition">Edition</a></li>
          <li><a href="#" class="consulter">Consulter</a></li>
          <li><a href="#" class="statistiques">Statistiques</a></li>
          <li><a href="<?php  echo base_url();?>/authentification/deconnexion">Deconexion</a>

      </li>
        </ul>     
      </div>
    </div>
  </header-->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Gestion des emploies du temp
IUT Ndere 2019/2020</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link consulter" href="#">Consulter
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link statistiques" href="#">Statistiques</a>
          </li>

          <?php 

         if ($this->session->poste=="RP"){

                  echo " <li class='nav-item'>
        <a href='#'' class='nav-link edition' ><font >Edition</font></a>
      </li>";

            }
      ?>
     
      <?php 

         if ($this->session->poste=="CD"){

                  echo " <li class='nav-item'>
        <a href='#'' class='nav-link notifications' ><font>Notifications</font></a>
      </li>";

            }
      ?>
      <?php 

         if ($this->session->role==1){

                  echo " <li class='nav-item'>
        <a href='#'' class='nav-link plages' ><font >Plages</font></a>
      </li>";

            }
      ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php  echo base_url();?>index.php/authentification/deconnexion">Deconexion</a>
          </li>
        </ul>
        
      </div>
    </div>
    <a class="navbar-brand" href="#" style="margin-right: "><?php  echo $this->session->nom_personnel;?></a>
  </nav>

 