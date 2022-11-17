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


             <div class=" col-sm-12  nn_edit showback breadcrumbs" style=" margin-top: 0px;">
                                            
                <div class="header_emploi" style="margin-top:0px; margin-left: 0px;">

                    <div class="row ">

                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-4">

                            <div style="margin-top: 20px;">IUT DE NGAOUNDERE
                            </div>
                            <div>Année Academique <?php foreach ($annee as $row) {echo $row->annee;} ?>
                            </div>
                            <div>Mention:<?php echo  $this->session->abreviation_mention;?> 
                                                    <!--<select class="Mention" id="" >
                                                      <option id="nul"></option>
                                                    <?php foreach ($mentions as $row) {
                                                      echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                    } ?>
                                                    </select>-->
                                                      
                            </div>
                                                
                            <div class="form-group ">

                                <label for="sel1">Parcour et Niveau:<span class="pn"></span>
                                </label>&nbsp;

                                                    <!--select class="form-control PN" id="PN" ></select-->
                            </div>
                                                     <!--/form>
                                                  
                                              
                                                  <div class="form-group choixPN" style="display: flex;
                                                                  -webkit-box-orient: horizontal;
                                                                  -webkit-box-direction: normal;
                                                                  flex-flow: row wrap;
                                                                  -webkit-box-align: center;
                                                                  align-items: center;">
                                                      <label for="sel1">Parcour:</label>&nbsp;
                                                      <select class="form-control Parcour" id="sel1" style="width:  27%;"></select>
                                                      <label for="sel1">Niveau:</label>&nbsp;
                                                      <select class=" form-control Niveau" id="sel1"  style="width:  27%;"></select>&nbsp;
                                                      <button type="submit" class="btn" id="choix_ok" style=" background-color: green;">OK</button>&nbsp;
                                                      <button type="submit" class="btn" id="choix_non" style="background-color: red;">X</button>
                                                      </div-->
                        </div>
                                            
                        <div class="col-sm-3"> 

                            <div class="top"><p>   </p>
                            </div>
                            <div class="top">   <h4>EMPLOI DU TEMPS</h4>   
                            </div>

                                                  
                            <!--div class="choix_date">
                                <label for="sel1">Debut:</label>&nbsp;
                                    <select class=" jour_d" id="sel1">

                                        <?php for ($j=1; $j <32 ; $j++) { 

                                                    if ($j<10) {

                                                        echo "<option class="."0".$j.">".$j."</option>";
                                                    }
                                                    else{

                                                        echo "<option class=".$j.">".$j."</option>"; 
                                                    }
                                                                  
                                                                  
                                                }
                                                                //echo $row->nom_mention."</br>";
                                                                
                                        ?>
                                    </select>
                                    <select class="moi_d" id="sel1">

                                        <?php 

                                            $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];

                                                    for ($j=1; $j <13 ; $j++) { 

                                                            if ($j<10) {

                                                                echo "<option class="."0".$j.">".$mois[$j]."</option>";
                                                            }
                                                            else{ 

                                                                echo "<option class=".$j.">".$mois[$j]."</option>";
                                                            }
                                                                  
                                                                  
                                                        }
                                            ?>
                                    </select>
                                    <select class="annee_d" id="">

                                            <?php 

                                                    foreach ($annee as $row) {

                                                            echo "<option id=".$row->id_annee.">".$row->debut."</option>";
                                                            echo "<option id=".$row->id_annee.">".$row->fin."</option>";
                                                    } 
                                            ?>
                                    </select></br>
                                <label for="sel1">Fin:</label>&nbsp;

                                    <select class="jour_f" id="sel1">

                                            <?php for ($j=1; $j <32 ; $j++) {


                                                        if ($j<10) {

                                                                echo "<option class="."0".$j.">".$j."</option>";
                                                        }
                                                        else{

                                                                echo "<option class=".$j.">".$j."</option>"; 
                                                        }
                                                                  
                                                    }
                                                                //echo $row->nom_mention."</br>";
                                                                
                                            ?>
                                    </select>
                                    <select class="moi_f" id="sel1">

                                            <?php 
                                                    $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
                                                    for ($j=1; $j <13 ; $j++) { 

                                                            if ($j<10) {

                                                                echo "<option class="."0".$j.">".$mois[$j]."</option>";
                                                            }
                                                            else{

                                                                echo "<option class=".$j.">".$mois[$j]."</option>";
                                                            }
                                                                  
                                                    }
                                            ?>
                                    </select>
                                    <select class="annee_f" id="">

                                            <?php 

                                                    foreach ($annee as $row) {
                                                        
                                                        echo "<option id=".$row->id_annee.">".$row->debut."</option>";
                                                        echo "<option id=".$row->id_annee.">".$row->fin."</option>";
                                                    } 
                                            ?>
                                    </select>
                                        

                                        <button type="submit" class="btn" id="choix_date_ok">Selectionner</button>
                                        <button type="submit" class="btn" id="choix_date_non">Annuler</button>
                                </div-->
                        </div>
                        <div class="col-sm-3">

                            <table   class="" style="table-layout: fixed; border: 0.1em  "    id="" width="87%" height="50%" cellpadding="1" cellspacing="-20">
                                                            
                                                             
                                <tr>
                                    <td class="" id="" ><p align="right" style="padding-top: 10px">SEMESTRE:</p>
                                    </td>
                                    <td class="" id="">
                                        <select class="form-control Semestre" id="" style=" float: right;height: 35px ; width:100%" >
                                        </select>
                                    </td> 
                                              
                                </tr>
                                <tr>
                                    <td class="" id="" ><p align="right" style="padding-top: 10px">Semaine</p>
                                    </td>
                                    <td class="" id=""> 
                                        <select class="form-control sem" id="sel1" style=" float: right; height: 35px">
                                                <option>1</option>
                                        </select>
                                    </td> 
                                </tr>
                                <tr>
                                    <td class="" id="" colspan="2"> <p align="center">Periode: </p>
                                    </td>
                                <tr> 
                                  <td colspan="2" >
                                        <select class="form-control  periode" id="periode" style=" float: right; height: 35px;width: 200px">
                                            <option id=""></option>
                                        </select></td> 
                                </tr>    
                            </table>
                                                  
                        </div>

                        <div class="col-sm-2">
                        </div>
                </div>


                        <table class="" style="table-layout: fixed; border:0px 0px 0px 0px solid black; " id="table_entete" width="100%">
                                                      
                        </table>
                                              
                        <table   class="table" style="table-layout: fixed; ; " id="table" width="100%">
                                          
                        </table>
                        
                        <button type="submit" class="btn btn-primary top" id="Imprimer" style="float: right; ">Enregistrer
                        </button>

                <div class="col-sm-12 " style="top:15px;">

                        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 20px;" align=""> En attente</h6>
                        <table id="bootstrap-data-table-export" class="table  table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20%;">N° Semaine
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Periode
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 30%;">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="tableau1"> 
                            </tbody>
                        </table>
                        


              </div>
                

         



                <div class="modal  choix_dt" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true"  style="margin-right:  12% ;">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content" style="padding-top: 0px auto;width: 120%">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Selection de la periode</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" id="close0">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    
                                    <label for="sel1">Debut:</label>&nbsp;
                                    <select class=" jour_d" id="sel1">

                                        <?php for ($j=1; $j <32 ; $j++) { 

                                                    if ($j<10) {

                                                        echo "<option class="."0".$j.">".$j."</option>";
                                                    }
                                                    else{

                                                        echo "<option class=".$j.">".$j."</option>"; 
                                                    }
                                                                  
                                                                  
                                                }
                                                                //echo $row->nom_mention."</br>";
                                                                
                                        ?>
                                    </select>
                                    <select class="moi_d" id="sel1">

                                        <?php 

                                            $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];

                                                    for ($j=1; $j <13 ; $j++) { 

                                                            if ($j<10) {

                                                                echo "<option class="."0".$j.">".$mois[$j]."</option>";
                                                            }
                                                            else{ 

                                                                echo "<option class=".$j.">".$mois[$j]."</option>";
                                                            }
                                                                  
                                                                  
                                                        }
                                            ?>
                                    </select>
                                    <select class="annee_d" id="">

                                            <?php 

                                                    foreach ($annee as $row) {

                                                            echo "<option id=".$row->id_annee.">".$row->debut."</option>";
                                                            echo "<option id=".$row->id_annee.">".$row->fin."</option>";
                                                    } 
                                            ?>
                                    </select></br>
                                <label for="sel1">Fin:</label>&nbsp;

                                    <select class="jour_f" id="sel1">

                                            <?php for ($j=1; $j <32 ; $j++) {


                                                        if ($j<10) {

                                                                echo "<option class="."0".$j.">".$j."</option>";
                                                        }
                                                        else{

                                                                echo "<option class=".$j.">".$j."</option>"; 
                                                        }
                                                                  
                                                    }
                                                                //echo $row->nom_mention."</br>";
                                                                
                                            ?>
                                    </select>
                                    <select class="moi_f" id="sel1">

                                            <?php 
                                                    $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
                                                    for ($j=1; $j <13 ; $j++) { 

                                                            if ($j<10) {

                                                                echo "<option class="."0".$j.">".$mois[$j]."</option>";
                                                            }
                                                            else{

                                                                echo "<option class=".$j.">".$mois[$j]."</option>";
                                                            }
                                                                  
                                                    }
                                            ?>
                                    </select>
                                    <select class="annee_f" id="">

                                            <?php 

                                                    foreach ($annee as $row) {
                                                        
                                                        echo "<option id=".$row->id_annee.">".$row->debut."</option>";
                                                        echo "<option id=".$row->id_annee.">".$row->fin."</option>";
                                                    } 
                                            ?>
                                    </select>
                                        

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="choix_date_non">Annuler</button>
                                <button type="button" class="btn btn-primary" id="choix_date_ok">Selectionner</button>
                            </div>
                        </div>
                    </div>
                </div>



                    <div class="modal  choix" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true"  style="margin-right:  12% ;">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content" style="padding-top: 0px auto;width: 245%">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Enregitrement d'une plage</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" id="close">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
              <form class="form-inline" action="/action_page.php">
                 
                <div style="margin-top: 0px; " class="radio">
                  <div class="form-check-inline">

                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="Cour">Cour
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input radio" name="optradio" value="TD" >TD
                        </label>
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="TP">TP
                        </label>
                        
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="TPE">TPE
                        </label>
                      </div>
                      
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="CC">CC
                        </label>
                      </div>
                      
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="PROJET">Projet
                        </label>
                      </div>
                      
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="SYNTHESE">Synthèse
                        </label>
                      </div>
                    
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="RATRAPAGE">Ratrapage
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="BIBLIOTHEQUE">Bibliothèque
                        </label>
                      </div>
                      
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="Congé">Congé
                        </label>
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="INVESTISSEMENT HUMAIN">Investissement Humain
                        </label>
                      </div>
                      
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="Vider">Vider
                        </label>
                      </div>

                    </div>
                </form>
                </div>

                            <div class="form-group " style="padding-top: 10px auto;">
                                    <label for="sel1">&nbsp; Semestre:</label>
                                      <select class=" Semestres" id="sel1" style="
                                        width: 15%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" >
                                      </select>
                                      
                                      <label for="sel1">&nbsp; UE:</label>
                                      <select class=" UE" id="sel1" style="
                                        width: 60%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"  >
                                        <option id='nul'></option>
                                        
                                      </select>
                                       
                                   </br></br>
                                       <label for="sel1">&nbsp; EC:</label>
                                      <select class=" EC" id="sel1" style="
                                        width: 55%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                        
                                      </select>
                                     &nbsp;
                                      <label for="sel1">Enseignant:</label>
                                      <select class=" Enseignant" id="sel1" style="
                                        width: 25%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                        
                                      </select>

                                      </br></br>

                                      <label for="sel1">&nbsp; Salle:</label>
                                      <select class=" Salle" id="sel1" style="
                                        width: 30%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                      </select>
                                       &nbsp; 
                                      <label for="sel1">Evolution:</label>
                                      <select class=" evolution" id="sel1" style="
                                        width: 10%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                      </select> &nbsp;<font size="5" >/</font>
                                      </select>
                                      <select class=" heure" id="sel1"style="
                                        width: 10%;
                                        height: calc(2.25rem + 2px);
                                        padding: .375rem .75rem;
                                        font-size: 1rem;
                                        line-height: 1.5;
                                        color: #495057;
                                        background-color: #fff;
                                        background-clip: padding-box;
                                        border: 1px solid #ced4da;
                                        border-radius: .25rem;
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                        
                                      </select>
                                      </br></br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="sortir">Sortir</button>
                                <button type="button" class="btn btn-primary" id="enreg">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>

        </div> <!-- .content -->
        
    </div><!-- /#right-panel -->
   

    <!-- Right Panel -->


    <div class=" modal" style="padding-top: 0px;" id="choix1">


        <div class="modal-content animate" style="padding-top: 20px auto;width: 30%">

          <form class="form-inline" action="/action_page.php">
                 
          
             <div style="background-color: ;border: 1px"><h4 align="center">Enregitrement d'une plage</h4></div >
                <div style="margin-top: 20px; " class="radio">
                  <div class="form-check-inline">

                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="Cour">Cour
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input radio" name="optradio" value="TD" >TD
                        </label>
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="TP">TP
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="TPE">TPE
                        </label>
                      </div>
                      &nbsp;
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="CC">CC
                        </label>
                      </div>
                      
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="PROJET">Projet
                        </label>
                      </div>
                      
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="SYNTHESE">Synthèse
                        </label>
                      </div>
                      &nbsp;&nbsp;
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="RATRAPAGE">Ratrapage
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="BIBLIOTHEQUE">Bibliothèque
                        </label>
                      </div>
                      
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="Congé">Congé
                        </label>
                      </div>
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="INVESTISSEMENT HUMAIN">INVESTISSEMENT HUMAIN
                        </label>
                      </div>
                      
                      <div class="form-check-inline disabled">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="optradio" value="Vider">Vider
                        </label>
                      </div>

                                  </div>
                                        </form>
                                  <div class="form-group " style="padding-top: 10px auto;">
                                    <label for="sel1">&nbsp; Semestre:</label>
                                      <select class="form-control Semestres" id="sel1" >
                                      </select>
                                      &nbsp;
                                      <label for="sel1">&nbsp; UE:</label>
                                      <select class="form-control UE" id="sel1" >
                                        <option id='nul'></option>
                                        
                                      </select>
                                       &nbsp; 
                                       <label for="sel1">EC:</label>
                                      <select class="form-control EC" id="sel1" >
                                        
                                      </select>
                                       &nbsp; 
                                      <label for="sel1">Enseignant:</label>
                                      <select class="form-control Enseignant" id="sel1">
                                        
                                      </select>
                                       &nbsp;
                                      <label for="sel1">Salle:</label>
                                      <select class="form-control Salle" id="sel1" >
                                      </select>
                                       &nbsp; 
                                      <label for="sel1">Evolution:</label>
                                      <select class=" evolution" id="sel1" style="width: 52px; ">
                                      </select> &nbsp;<font size="5" >/</font>
                                      </select>
                                      <select class=" heure" id="sel1"style="width: 52px;  ">
                                        
                                      </select>
                                       &nbsp; </br>
                                      <button type="submit" class="btn btn-primary" id="enreg1">Enregistrer</button>&nbsp;
                                      <button type="submit" class="btn btn-primary " id="sortir1" style="float: right; background-color: red; ">Sortir</button>
                                      
                                      <p class=" close" id="close1">x</p>
                                      
                                      
                              </div>
      </div>
      

                        

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
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/edition.js"></script>
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

        

 
    $debut="<?php 
                  $j=0;
              foreach ($num_semaine as $row) {
                    //echo $row->nom_mention."</br>";
                    $j++;
                  }
                  $i=0;
                  foreach ($num_semaine as $row) {
                    $i++;
                    if ($j==$i) {
                      echo $row->debut;
                    }
                  }
                   
                   ?>";
    $id_mention="<?php  echo $this->session->id_mention;?>";
    

    

  </script>




</body>

</html>
