<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GestEmploi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link href="<?php  echo base_url('assets/');?>sufee/vendors/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="<?php  echo base_url('assets/');?>sufee/favicon.ico">
    
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/jqvmap/dist/jqvmap.min.css">

    

    

    <script src="<?php  echo base_url('assets/');?>sweetalert/sweetalert.min.js"></script>



    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/assets/css/style.css">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script>var base_url = "<?php echo base_url();?>";</script>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">GestEmploi</a>
                <a class="navbar-brand hidden" href="./"><img src="<?php  echo base_url('assets/');?>sufee/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php  echo base_url();?>choix/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Consulter</h3><!-- /.menu-title -->
                    <li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Emplois du temps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-th"></i><a href="<?php  echo base_url();?>choix/consult_salle">Salles</a></li>
                            <li><i class="fa fa-th"></i><a href="<?php  echo base_url();?>choix/consult_Enseignant">Enseignants</a></li>
                        </ul>
                   
                    <li>
                        <a href="<?php  echo base_url();?>Excel_export/etat"> <i class="menu-icon fa fa-columns"></i>Etat des Heures</a>
                    </li>
                    
                    <h3 class="menu-title">Edition</h3><!-- /.menu-title -->
                    <li class="active">
                        <a  href="<?php  echo base_url();?>choix/edition"> <i class="menu-icon fa fa-edit"></i>Emplois du Temps</a>
                    </li>
                    

                   
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php  echo base_url('assets/');?>sufee/images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php  echo base_url('assets/');?>sufee/images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php  echo base_url('assets/');?>sufee/images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php  echo base_url('assets/');?>sufee/images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php  echo base_url('assets/');?>sufee/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edition</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Emplois du Temps</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

            <div class="container col-sm-12  preced showback breadcrumbs" style="margin-top: 0px;">


                    <div class="row ">
                          <div class="col-sm-12">

                          <div class="message">
                                                      </div>
                          <div class="header_empl" style="margin-top:10px; margin-left: 0px;">
                            <button type="submit" class="btn btn-primary " id="pr" style="float: left; height: 35px;"><==</button>
                                  <button type="submit" class="btn btn-primary " id="sv" style="float: right;height: 32px; ">==></button>
                                            <div class="row ">
                                                    <div class="col-sm-1">
                                                                </div>
                                                    <div class="col-sm-4">

                                                              <div style="margin-top: 20px;">IUT DE NGAOUNDERE</div>
                                                              <div>Année Academique <?php foreach ($annee as $row) {echo $row->annee;} ?></div>
                                                              <div>Mention: <?php 
                                                                  echo  $this->session->abreviation_mention;
                                                                ?> 
                                                                <!--<select class="Mention" id="" >
                                                                  <option id="nul"></option>
                                                                <?php foreach ($mentions as $row) {
                                                                  echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                                } ?>
                                                                </select>-->
                                                                  
                                                                </div>
                                                              
                                                              <div class="form-group ">
                                                                <label for="sel1">Parcour et Niveau: <span class="pn">
                                                                <?php foreach ($n as $row) {
                                                                  echo $row->rendu;
                                                                } ?>
                                                                </span></label>&nbsp;

                                                                <!--select class="form-control PN" id="PN" ></select-->
                                                              </div>
                                                                
                                                      </div>
                                                        
                                                      <div class="col-sm-4"> 

                                                                  <div class="top"><p>   </p></div>
                                                                  <div class="top">   <h4>EMPLOI DU TEMPS</h4>   </div>

                                                          </div>   
                                                                  
                                                      <div class="col-sm-2">
                                                                  <div style="margin-top: 20px;">SEMESTRE: <span class="semestre"></span></div>
                                                              <div>Semaine: <span class="semaine"></span></div>
                                                              <div><span class="period"></span></div>
                                                                            
                                                              
                                                      </div>
                                                      
                                  </div>

                                              

                                          
                                      
                                                  

                                                              <table class="" style="margin-top: 20px;table-layout: fixed; border:0px 0px 0px 0px solid black; " id="table_entete_" width="100%">
                                                                  
                                                              </table>
                                                          
                                            
                                                    <table   class="table" style="table-layout: fixed; border: 0.1em  " id="table_" width="100%">
                                                      
                                                      
                                                    </table>
                                  
                                          
                          </div>
                        
                          
                    </div>
                    </div>

  
            </div>


        </div> <!-- .content -->
        
    </div><!-- /#right-panel -->
   

    <!-- Right Panel -->
              

    <script src="<?php  echo base_url('assets/');?>cool/vendor/jquery-3.2.1.min.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/main.js"></script>


    <script src="<?php  echo base_url('assets/');?>sufee/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/dashboard.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/widgets.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

    <script src="<?php  echo base_url('assets/');?>public/js/script.js"></script>
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/emplois_preced.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);

       
    </script>
    



  <script type="text/javascript">

   
        $n="<?php foreach ($n as $row) {echo $row->id_niv_par;} ?>";
    

  </script>




</body>

</html>
