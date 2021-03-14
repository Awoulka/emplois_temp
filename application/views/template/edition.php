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

            <div class=" col-sm-12 form-group choixPN showback " style="display: flex;
                                                                  -webkit-box-orient: horizontal;
                                                                  -webkit-box-direction: normal;
                                                                  flex-flow: row wrap;
                                                                  -webkit-box-align: center;
                                                                  align-items: center;
                                                                  top: 0px;
                                                                  margin-right: 0px;
                                                                  width: 100%;
                                                                  background-color: ">
                                                     
                    <label for="sel1" style="color: ">Cycle:</label>&nbsp;
                        <select class="form-control Cycle" id=""  style="width:  10%;">

                            <?php 
                                    foreach ($cycles as $row) {

                                        echo "<option id=".$row->id_cycle.">".$row->abreviation_cycle."</option>"; 

                                        } 
                            ?>nivv

                        </select>&nbsp;&nbsp;
                    <label for="sel1" style="color: ">Parcour:</label>&nbsp;
                        <select class="form-control Parcour" id="sel1" style="width:  10%;"></select>&nbsp;&nbsp;
                    <label for="sel1" size="20"style="color:;   ">Niveau:</label>&nbsp;
                        <select class=" form-control Niveau" id="sel1"  style="width:  10%;"></select>&nbsp;
                            <button type="submit" class="btn" id="choix_ok" style=" background-color: green;">
                                <span style="color: white">OK</span>
                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn" id="pre" style=" background-color: green;">
                                <span style="color: white">Precedent</span>
                            </button>&nbsp;
                            <button type="submit" class="btn" id="edit" style=" background-color: green;">
                                <span style="color: white">Nouvel edttion</span>
                            </button>&nbsp;
                                                       
            </div>

            <div class="container col-sm-12  preced showback breadcrumbs" style="margin-top: 0px;">
  
  
            </div>

             <div class=" col-sm-12  n_edit showback breadcrumbs" style=" margin-top: 0px;">
                                            
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
                                    <td class="" id="" colspan="2" >
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
                
                <div class="container  modif" style="margin-top: 0px;">
  
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
    

    
/*
     var tableau_id_= new Array(4);
              tableau_id_[1]= new Array(7);
              tableau_id_[2]= new Array(7);
              tableau_id_[3]= new Array(7);
              tableau_id_[4]= new Array(7);
              tableau_id_[5]= new Array(7);
              tableau_id_[6]= new Array(7);


var tableau_valeurs_= new Array(4);
              tableau_valeurs_[1]= new Array(7);

              tableau_valeurs_[2]= new Array(7);
              tableau_valeurs_[3]= new Array(7);
              tableau_valeurs_[4]= new Array(7);
              tableau_valeurs_[5]= new Array(7);
              tableau_valeurs_[6]= new Array(7);
var tableau_nbh=[];
 var tableau_nbh_=[];
var tableau_d=[];
var tableau_d_=[];
var tableau_s=[];



              //tableau_d[0]= ["cour",8,11];
              //tableau_d[1]= ["pause",11,13];
              //tableau_d[2]= ["cour",13,14];
              //tableau_d[3]= ["pause",14,17];
              //tableau_d[4]= ["cour",14,17];
var tableau_id_plage= [];
var tableau_id_jour= [];
var tableau_semaine= new Array(4);  
              
              
              //tableau_d[4]= [];
              //tableau_d[5]= [];


var celulle;
var nivv;

for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <= 50 ; j++) {
                     

                           
                        tableau_id_[i][j]=-1;
                      
                      
                     }
                   }

function notif(){

  $('tbody.tableau1').empty();
          $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                             

                             $('tbody.tableau1').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null && (data[i][0].semaine_status==0 || data[i][0].semaine_status==1 || data[i][0].semaine_status==2 || data[i][0].semaine_status==3 )) {

                                        if (data[i][0].semaine_status==0 ) {

                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (Non Envoyé)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi envoyer' id="+data[i][0].id_semaine+" style='background-color: green;'><span style='color:white'>Envoyer</span></button>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button><button class='item' data-toggle='tooltip' data-placement='top' title='' data-original-title='Send'><i class='zmdi zmdi-mail-send'></i></button>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi ' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'><a href='<?php  echo base_url();?>choix/modification/"+data[i][0].id_semaine+"/"+nivv+"' >Modifier</a></span></button></td></tr></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));

                                      
                                    }
                                     if (data[i][0].semaine_status==1 ) {
                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (En attente de validation par le CD)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +"></a>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }

                                    if (data[i][0].semaine_status==2 ) {
                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (Rejeté par le CD)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));

                                      
                                    }
                                     

                                     if (data[i][0].semaine_status==3 ) {
                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (Validé mais non Publié)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi publier' id="+ data[i][0].id_semaine +" style='background-color: green;'><span style='color:white'>Publier</span></button>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }

                                    }
                                  }


                              $('.envoyer').click(function(){

                                 swal({

                                        title:"",
                                        text:"Emploi du temps pret à être envoyer. Confirmez-vous l'envoi ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/status_semaine/1",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','Emploi du temps envoyé avec success','success');
                                                notif();
                                          },
                                          "text"
                                    );


                                        
                                      }
                                      else{

                                        }
                    });

                              });

                                $('.renvoyer').click(function(){

                                   swal({

                                        title:"",
                                        text:"Confirmez-vous la suppression de cet emploi du temps ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/supprimer_emploi",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','suppression reussi','success');
                                                notif();
                                          },
                                          "text"
                                    );


                                        
                                      }
                                      else{

                                        }
                    });
                                 
                              });


                              $('.publier').click(function(){

                                 swal({

                                        title:"",
                                        text:"Emploi du temps pret a être Publié. Confirmez-vous la publication ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/status_semaine/4",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','Emploi du temps Publié avec success','success');
                                                  notif();
                                          },
                                          "text"
                                    );


                                        
                                      }
                                      else{

                                        }
                    });

                              });
                   

                   $('.modifier').click(function(){


                                        $(".n_edit").empty();

                                            $.ajax({

                                                        
                                                        url: "<?php  echo base_url();?>" + "choix/modification" ,
                                                        type: "POST",
                                                        //async: false,

                                                        data : {id:$(this).attr("id")},
                                                        dataType: "text",
                                                        success: function(data){

                                                          //alert(data);
                                                          $(".n_edit").html(data);
                                                        },
                                                        error:function(){
                                                          alert("erreur de requetes ");
                                                        }
                                                      });



                              });
                              $('.publier').click(function(){

                                      swal({

                                            title:"",
                                            text:"Vous etes sur le point de modifier cet emplois du temps. Voulez-vous continuer ?",
                                            icon:"warning",
                                            buttons:['Non','Oui'],
                                            dangerMode:false
                                          
                                        }).then((oui)=>{
                                          if (oui) {

                                            $.post(
                                          // chargement des emplois du temps des niv_par
                                            "<?php  echo base_url();?>" + "Enregistrement/status_semaine/4",
                                            
                                                { semaine : $(this).attr('id')},
                                                function(data){
                                                  
                                                      swal('','Emploi du temps Publié avec success','success');
                                                      notif();
                                              },
                                              "text"
                                        );


                                            
                                          }
                                          else{

                                            }
                                      });

                                      });     
                          },
                          "json"
                    );
   


}
function evolution(tableau,matiere){
       ev=0;
       v=0;
      
              $.ajax({

                  
                  url:"<?php  echo base_url();?>" + "Choix_planification/evolution",
                  type: "POST",
                  async: false,

                  data : {EC : matiere},
                  dataType: "json",
                  success:function(data){

                               //alert(data+"aaa");

                                          if (data[0].evolution!=null ) {
                                                ev=parseInt(data[0].evolution,10);
                                              }
                                           else{
                                                ev=0;
                                                }
                           },
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });
    for (var i = 1; i <7 ; i++) {
                          
                     for (var j = 1; j < tableau_nbh.length ; j++) {
                      
                      
                      if ((tableau[i][j] !=null && tableau[i][j][3]==matiere)  && tableau[i][j][4]!=0 ) {
                       
                            
                                  
                                   
                                   tableau_id_[i][j][4]=ev+parseInt(tableau_nbh[j][0]+tableau_nbh[j][1])
                                   tableau_valeurs_[i][j][4]=ev+parseInt(tableau_nbh[j][0]+tableau_nbh[j][1])
                                   ev=ev+parseInt(tableau_nbh[j][0]+tableau_nbh[j][1]); 
                                   if (tableau_valeurs_[i][j][9]!=null) { 
                                    Remplir(tableau_valeurs_,i,j,"p"+i+j);
                                  }
                                    
                   }
                   }
        }
}

    function creer_tableau_(tableau,tableau_entete,tableau_emploie){
  
  var tableau_jour=["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];

       celulle="<tr><th style='' width='100px'></th>";

                                  for (var i = 0; i < tableau.length ; i++) {

                                          if(tableau[i][0]=="cour"){

                      
                                            if((tableau[i+1]!=null && tableau[i+1][0]=="pause") || tableau[i+1]==null){

                                               celulle+="<td>"+tableau[i][1][0]+tableau[i][1][1]+"h<div align='right' style='float: right;'>"+tableau[i][2][0]+tableau[i][2][1]+"h</div></td>";
                                    //            alert(tableau_d[i][1][0]+tableau_d[i][1][1]);

                                            }
                                          else{
                                                 celulle+="<td>"+tableau[i][1][0]+tableau[i][1][1]+"h</td>";
                                      //          alert(tableau_d[i][1][0]+tableau_d[i][1][1]);

                                          }
                                        }
                                          else{
                                            celulle+="<td width='40px'></td>";
                                            
                                          }

                                  };
                                  celulle+="</tr>";

                                  $("#"+tableau_entete).html(celulle);

                                  

                                  

                                   celulle="";
                                   
                                  for (var i = 0; i < 6 ; i++) {


                                     celulle+="<tr style='table-layout: fixed; border: 0.1em solid '><th style='border-top: 1px solid black' width='100px'><center>"+tableau_jour[i]+"</center></th>";
                                        for (var j = 0; j < tableau.length ; j++) {
                                            
                                          if (i==0) {
                                            if(tableau[j][0]=="cour"){
                                            celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid ' id=pp"+(i+1)+(j+1)+"></td>";
                                              }
                                            else{
                                              
                                              celulle+="<td style='table-layout: fixed; border: 0.1em solid ' rowspan='6' width='40px'></td>";
                                            }
                                          }
                                          else{

                                            if (tableau[j][0]!="pause") {                                            
                                            

                                                celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid '  id=pp"+(i+1)+(j+1)+"></td>";
                                            

                                          }
                                            
                                          }

                                          
                                      }
                                      celulle+="</tr>";


                                  $("#"+tableau_emploie).html(celulle);


                                  };
                            $("#"+tableau_entete).fadeIn(1000);
                             $("#"+tableau_emploie).fadeIn(1000);
};




function creer_tableau(tableau,tableau_entete,tableau_emploie){
  
  var tableau_jour=["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];

       celulle="<tr><th style='' width='100px'></th>";

                                  for (var i = 0; i < tableau.length ; i++) {

                                          if(tableau[i][0]=="cour"){

                      
                                            if((tableau[i+1]!=null && tableau[i+1][0]=="pause") || tableau[i+1]==null){

                                               celulle+="<td>"+tableau[i][1][0]+tableau[i][1][1]+"h<div align='right' style='float: right;'>"+tableau[i][2][0]+tableau[i][2][1]+"h</div></td>";
                                    //            alert(tableau_d[i][1][0]+tableau_d[i][1][1]);

                                            }
                                          else{
                                                 celulle+="<td>"+tableau[i][1][0]+tableau[i][1][1]+"h</td>";
                                      //          alert(tableau_d[i][1][0]+tableau_d[i][1][1]);

                                          }
                                        }
                                          else{
                                            celulle+="<td width='40px'></td>";
                                            
                                          }

                                  };
                                  celulle+="</tr>";

                                  $("#"+tableau_entete).html(celulle);

                                  

                                  

                                   celulle="";
                                   
                                  for (var i = 0; i < 6 ; i++) {


                                     celulle+="<tr style='table-layout: fixed; border: 0.1em solid '><th style='border-top: 1px solid black' width='100px'><center>"+tableau_jour[i]+"</center></th>";
                                        for (var j = 0; j < tableau.length ; j++) {
                                            
                                          if (i==0) {
                                            if(tableau[j][0]=="cour"){
                                            celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid ' id=p"+(i+1)+(j+1)+"></td>";
                                              }
                                            else{
                                              
                                              celulle+="<td style='table-layout: fixed; border: 0.1em solid ' rowspan='6' width='40px'></td>";
                                            }
                                          }
                                          else{

                                            if (tableau[j][0]!="pause") {                                            
                                            

                                                celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid '  id=p"+(i+1)+(j+1)+"></td>";
                                            

                                          }
                                            
                                          }

                                          
                                      }
                                      celulle+="</tr>";


                                  $("#"+tableau_emploie).html(celulle);


                                  };
                            $("#"+tableau_entete).fadeIn(1000);
                             $("#"+tableau_emploie).fadeIn(1000);

            $("td.td").click(function(){

                aaa=$(this).attr('id');
                index=$(this).attr('id');
                nbh=tableau_nbh[aaa[2]];
                //alert(nbh);
                  
                 $(".Enseignant option").remove();
                   $(".EC option").remove();
                    $("input[name=optradio]").removeAttr('checked'); 
                    $(".Salle option").remove();
                    
                                                      //$("select.Semestres").children(".Semestres option[id="+tableau_valeurs_[aaa[1]][aaa[2]][10]+"]").attr("selected","selected");
                                                     
                $.post(
                          "<?php  echo base_url();?>" + "Choix_planification/ch",
                          { PN : nivv,
                            Semestre : $("select.Semestres").children(".Semestres option:selected").attr('id')},
                          function(data){
                                                 //alert(data);
                                          $(".UE option").remove();

                                          $("select.UE").append("<option id='nul'></option>");
                                           
                                          for (var i = 0; data.ue.length - 1 >= i; i++) {
                                               $("select.UE").append("<option id="+data.ue[i].id_ue+">"+ data.ue[i].intitule_ue+"</option>");
                                             }
                                          for (var i = 0; data.salle.length - 1 >= i; i++) {
                                               $("select.Salle").append(
                                                                          "<option id="+data.salle[i].id_salle+">"+data.salle[i].nom_salle+"("+data.salle[i].intitule_salle+")</option>"
                                                                          );
                                           }

                                           if (tableau_valeurs_[aaa[1]][aaa[2]][0]!=null) {
                                            

                                                      $("select.UE").children(".UE option[id="+tableau_id_[aaa[1]][aaa[2]][5]+"]").attr("selected","selected");
                                                      
            $.post(
                                    "<?php  echo base_url();?>" + "Choix_planification/ch1",
                                    { UE : $("select.UE").children(".UE option:selected").attr('id')},
                                    function(data){
                                      //alert(aaa[1]);
                                           $(".EC option").remove();
                                           for (var i = 0; data.ec.length - 1 >= i; i++) {
                                               $("select.EC").append("<option id="+data.ec[i].id_ec+">"+data.ec[i].code_ec+"("+data.ec[i].intitule_ec+")"+"</option>");
                                              }

                                              $("select.EC").children(".EC option[id="+tableau_id_[aaa[1]][aaa[2]][3]+"]").attr("selected","selected");      
                                           
                                           
                         },
                        "json"
            );


                                                  //$("select.EC").append("<option id="+tableau_id[aaa[1]][aaa[2]][3]+">"+tableau_valeurs[aaa[1]][aaa[2]][3]+"</option>");

                                                  

                                              
                                                       
                                                       $("select.Enseignant").append("<option id=>"+tableau_valeurs_[aaa[1]][aaa[2]][5]+"</option>");
                                                       
                                          if (tableau_valeurs_[aaa[1]][aaa[2]][6]!=tableau_valeurs_[aaa[1]][aaa[2]][5]) {

                                                    $("select.Enseignant").append("<option id=>"+tableau_valeurs_[aaa[1]][aaa[2]][6]+"</option>");
                                                  }

                                                   $("select.heure").append("<option id=>"+tableau_valeurs_[aaa[1]][aaa[2]][7]+"</option>");

                                                   $("select.Salle").children(".Salle option[id="+tableau_id_[aaa[1]][aaa[2]][2]+"]").attr("selected","selected");

                                                            //alert("aaaaa");
                                                            $(".evolution option").remove();
                                                              d=parseInt(tableau_id_[aaa[1]][aaa[2]][4],10)-parseInt(nbh[0]+nbh[1]);
                                                              if (d<0) {d=0;}
                                                                //alert(parseInt(nbh[0]+nbh[1]));
                                                            
                                                                $("select.evolution").append("<option>"+d+"</option>");
                                                  /*$(".evolution option").remove();
                                                  $("select.evolution").append("<option>"+tableau_id[aaa[1]][aaa[2]][4]+"</option>");
                                             
                                                       
                                                        
                                              
                                             

                                                   
                                          }

                                          


                       
                         },
                        "json"
                );
              
                   

                if (tableau_valeurs_[aaa[1]][aaa[2]]!=null) {
                      
                         $("input[name=optradio][value="+tableau_valeurs_[aaa[1]][aaa[2]][9]+"]").trigger('click');
                        
              }
               else{
                //$("select.UE").append("<option id='nul'></option>");
               }
                  $(".evolution option").remove();
                  $(".heure option").remove();
        
                                      $(".choix").css("display","block");
                                      $("td.td").css("background-color","white");
                                      $(this).css("background-color","#b3d9ff");
                                     
          
         });

}


    function Remplir(tableau,ligne,colonne,index0){


                                if (tableau[ligne][colonne][9]=="BIBLIOTHEQUE" || 
                                    tableau[ligne][colonne][9]=="Congé" || 
                                    tableau[ligne][colonne][9]=="INVESTISSEMENT HUMAIN") {
                                            $("#"+index0).html("<center>"+"<font size=5 >"+tableau[ligne][colonne][9]+"</font>"+"</center>");
                                          }
                                else{ 
                                            if (tableau[ligne][colonne][6]!='' && tableau[ligne][colonne][6]!=tableau[ligne][colonne][5] ) {
                                                ens2=" / "+tableau[ligne][colonne][6];
                                            }
                                            else{
                                              ens2="";

                                            }

                                              if (tableau[ligne][colonne][9]=="Cour") {

                                                $("#"+index0).html("<center>"
                                                  +"<div >"+"<font size=2>"+tableau[ligne][colonne][3]+"</font>"
                                                  +"</div>"+
                                                 "<div >"+"<font size=2>"+tableau[ligne][colonne][5]+ens2+"</font>"
                                                 +"</div>"
                                                 +"<div style='float: left;'>"+"<font size=2>"+tableau[ligne][colonne][2]+"</div>"+"<div style='float: right;'>"+tableau[ligne][colonne][4]+"/"+tableau[ligne][colonne][7]+"</font>"+"</div>"
                                                +"</center>");
                                                //alert(index0);
                                              }

                                              else{
                                                if (tableau[ligne][colonne][9]=="TP"      || 
                                                    tableau[ligne][colonne][9]=="TPE"     ||
                                                    tableau[ligne][colonne][9]=="TD"      || 
                                                    tableau[ligne][colonne][9]=="CC"      
                                                      ) {
                                                $("#"+index0).html("<center>"
                                                  +"<div >"+"<font size=2>"+tableau[ligne][colonne][3]+"</font>"
                                                  +"</div>"+
                                                 "<div >"+"<font size=2>"+tableau[ligne][colonne][9]+"</font>"
                                                 +"</div>"
                                                +"<div style='float: left;''>"+"<font size=2>"+tableau[ligne][colonne][2]+"</div>"+"<div style='float: right;'>"+tableau[ligne][colonne][4]+"/"+tableau[ligne][colonne][7]+"</font>"+"</div>"
                                                +"</center>");
                                                }

                                                else{
                                                  $("#"+index0).html("<center>"
                                                  +"<div >"+"<font size=2>"+tableau[ligne][colonne][3]+"</font>"
                                                  +"</div>"+
                                                 "<div >"+"<font size=2>"+tableau[ligne][colonne][9]+"</font>"
                                                 +"</div>"
                                                 +"<div >"+"<font size=2>"+tableau[ligne][colonne][2]+"</div>"
                                                +"</center>");

                                                }


                                              }
                                            
                                          }

                                        
        }; 
    $(document).ready(
      function(){

 $("#sortir,#close,#close0").click(function(){
          $(".choix").css("display","none");
          $(".choix_dt").css("display","none");
          $("select.EC,select.UE,select.Enseignant").css("border-color","white");
           $(".radio").css("border","none");
      });

notif();
function ajax(url,fonction){

        $.ajax({

                  
                  url: "<?php  echo base_url();?>" + url ,
                  type: "POST",
                  async: false,

                  data : {niv: $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "json",
                  success:fonction,
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });

};


function table(data){
  
tableau_d.length=0;

for (var i = 0; data.plages.length - 1 >= i; i++) {

                    tableau_d[data.plages[i].num_plage-1]= [data.plages[i].intitule_plage,data.plages[i].heure_debut,data.plages[i].heure_fin,data.plages[i].id_plage,data.plages[i].num_group];
                    tableau_nbh[data.plages[i].num_plage]=data.plages[i].duree;
                   //alert("entre "+data.plages[i].rendu+" = "+data.plages[i].duree);

                  }

                  
                          //alert(tableau_d);

                             
                              creer_tableau(tableau_d,"table_entete","table");


               $(".Semestre option").remove();
               $(".Semestres option").remove();
               $(".sem option").remove();

                  for (var i = 0; data.semestre.length - 1 >= i; i++) {
                    
                   
                      $("select.Semestre").append("<option id="+data.semestre[i].id_semestre+">"+ data.semestre[i].semestre+"</option>");
                      
                  }

                  for (var i = 0; data.semestre.length - 1 >= i; i++) {
                  $("select.Semestres").append("<option id="+data.semestre[i].id_semestre+">"+ data.semestre[i].semestre+"</option>");
                      
                  }
                  
 for (var i = 0; data.jour.length - 1 >= i; i++) {
                    
                   
                     tableau_id_jour[data.jour[i].num_jour-1]=data.jour[i].id_jour;
                     //alert(tableau_id_jour);
                      
                  }
                  $("select.sem").append("<option id=''>1</option>");
//alert("eee");
if (data.message==null) {

                $(".sem option").remove();
                $(".periode option:selected").remove();

                if (data!= null) {
                  //alert(data.semaine[0].numero);
             $("select.sem").append("<option id=''>"+(parseInt(data.semaine[0].numero,10)+1)+"</option>");
                d=data.semaine[0].debut;
                f=data.semaine[0].fin;
                     mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
                if (d[5]+d[6]==f[5]+f[6]) {
                            d=d[8]+d[9];
                          }
                          else{
                                d=d[8]+d[9]+" "+mois[parseInt(d[5],10)+parseInt(d[6],10)];
                              }
                          f=f[8]+f[9]+" "+mois[parseInt(f[5],10)+parseInt(f[6],10)];

                          //alert(d+" au "+f);
             //$("select.periode").append("<option id=>"+"du "+d+" au "+f+"</option>");

             tableau_semaine[0]=data.semaine[0].numero;
             tableau_semaine[1]=data.semaine[0].debut;
             tableau_semaine[2]=data.semaine[0].fin;
             tableau_semaine[3]=data.annee[0].id_annee;

             tableau_semaine[4]=tableau_nbh.length;
             
              tableau_semaine[5]=data.semaine[0].semaine_status;
              tableau_semaine[6]=data.semaine[0].semestre_id;
            //alert(tableau_semaine);
            
           }
           else{
            //alert("ok");
            $("select.sem").append("<option id=''>1</option>");
             $("select.periode").append("<option id=></option>");
           }

        
                   
                     //$("#choix_ok").trigger("click");
}
else{
  //alert("la magie");
  //$(".message").html(data.message);

}
            notif();
            //planifications(9,"table","table_entete");
};

      //chargement des parcours et niveau a la selection d'une mention
          //$(".Mention").change(function(){
              //if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {

                

                $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "choix/ch1" ,
                  type: "POST",
                  async: false,

                  data : {mention : "<?php  echo $this->session->id_mention;?>"},
                  dataType: "json",
                  success: function(data){
                    

           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour,select.P").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
             //$("select.PN").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");


           }
            $(".pn").html($("select.Niveau").children(".Niveau option:selected").val());
            nivv=$("select.Niveau").children(".Niveau option:selected").attr('id');
           
           ajax("Enregistrement/charge_",table);

           $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/precedent" ,
                  type: "POST",
                  async: false,

                  data : {niv: $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".preced").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });

           //ajax("Enregistrement/semaines",table_);
           //ajax_("Enregistrement/charge",table__);
           
           
           



           
           
        }
                });


                
      

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "choix/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
          
        
           }

            //systeme_plage();

            },
            "json"
            );

            
          });
          //alert($("select.P").children(".P option:selected").attr('id'));

          






    //chargement du dernier emploi du TEMPS 

//ajax(table);
    $("#choix_ok").click(function(){

     

$(".pn").html($("select.Niveau").children(".Niveau option:selected").val());
nivv=$("select.Niveau").children(".Niveau option:selected").attr('id');      //$("td.td").empty();

      for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id[i].length=0;

             tableau_valeurs[i].length=0;


         }

      for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id_[i].length=0;

             tableau_valeurs_[i].length=0;


         }

         tableau_d.length=0;
         $("#table_entete").hide();
          $("#table").hide();

$.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/precedent" ,
                  type: "POST",
                  async: false,

                  data : {niv: $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".preced").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });


ajax("Enregistrement/charge_",table);

 $(".n_edit").hide();
       $(".preced").fadeIn(1000);
        $("#edit").css('background-color','green');
  $("#pre").css('background-color','blue');

 for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <= 50 ; j++) {
                     

                           
                        tableau_id_[i][j]=-1;
                      
                      
                     }
                   }
      });


     $("#choix_date_ok").click(
          function(){
            $(".choix_dt").css("display","none");
          mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
            //select_periode=1;
            //$(".choix_date").hide();

          deb_s=$("select.annee_d").children(".annee_d option:selected").val()+
          "-"+$("select.moi_d").children(".moi_d option:selected").attr('class')+
          "-"+$("select.jour_d").children(".jour_d option:selected").attr('class');

          
          fin_s=$("select.annee_f").children(".annee_f option:selected").val()+
          "-"+$("select.moi_f").children(".moi_f option:selected").attr('class')+
          "-"+$("select.jour_f").children(".jour_f option:selected").attr('class');
          
          //alert("du "+deb_s+" au"+fin_s);
          
          if ($("select.moi_d").children(".moi_d option:selected").attr('class') == $("select.moi_f").children(".moi_f option:selected").attr('class')) {
            deb=$("select.jour_d").children(".jour_d option:selected").attr('class');
          }
          else{
          deb=$("select.jour_d").children(".jour_d option:selected").attr('class')+" "+$("select.moi_d").children(".moi_d option:selected").val();
              }
          fin=$("select.jour_f").children(".jour_f option:selected").attr('class')+" "+$("select.moi_f").children(".moi_f option:selected").val();

          $("select.periode").append("<option id=>"+"du "+deb+" au "+fin+"</option>");
           // alert(fin_s);

            if (tableau_semaine[1]!=deb_s) {
            //alert($("select.sem").children(".sem option:selected").val());
              tableau_semaine[0]=$("select.sem").children(".sem option:selected").val();
              tableau_semaine[1]=deb_s;
              tableau_semaine[2]=fin_s;
              tableau_semaine[3]="<?php foreach ($annee as $row) {echo $row->id_annee;} ?>";
              tableau_semaine[4]=tableau_nbh.length;
              tableau_semaine[5]=0;
              tableau_semaine[6]=$("select.Semestre").children(".Semestre option:selected").attr('id');

             
            }
            
      });

$("#periode").change(
          function(){

            
            
      });


        
            $("select.Semestres").change(function(){


              $(".Enseignant option").remove();
                   $(".EC option").remove();
                    $("input[name=optradio]").removeAttr('checked'); 
                    $(".Salle option").remove();
                    $(".heure option").remove();
                    $(".evolution option").remove();
                    
                $.post(
                          "<?php  echo base_url();?>" + "Choix_planification/ch",
                          { PN : nivv,
                            Semestre : $("select.Semestres").children(".Semestres option:selected").attr('id')},
                          function(data){
                                                 //alert(data);
                                          $(".UE option").remove();

                                          $("select.UE").append("<option id='nul'></option>");
                                           
                                          for (var i = 0; data.ue.length - 1 >= i; i++) {
                                               $("select.UE").append("<option id="+data.ue[i].id_ue+">"+ data.ue[i].intitule_ue+"</option>");
                                             }
                                          for (var i = 0; data.salle.length - 1 >= i; i++) {
                                               $("select.Salle").append(
                                                                          "<option id="+data.salle[i].id_salle+">"+data.salle[i].nom_salle+"("+data.salle[i].intitule_salle+")</option>"
                                                                          );
                                           }

                       
                         },
                        "json"
                );
              
                   
              
            })

      //chargement des UE lorsqu'on clique sur une plage
          
    //chargement des EC etdes enseignant a la selection de l'UE

        $(".UE").change(function(){
              if ($("select.UE").children(".UE option:selected").attr('id')!="nul") {
                      $.post(
                                    "<?php  echo base_url();?>" + "Choix_planification/ch1",
                                    { UE : $("select.UE").children(".UE option:selected").attr('id')},
                                    function(data){
                                      //alert(aaa[1]);
                                           $(".EC option").remove();
                                           for (var i = 0; data.ec.length - 1 >= i; i++) {
                                               $("select.EC").append("<option id="+data.ec[i].id_ec+">"+data.ec[i].code_ec+"("+data.ec[i].intitule_ec+")"+"</option>");
                                              }

                                              //alert('hbcvksjdghisufgiwsdu');
                                           $(".Enseignant option").remove();
                                           $(".heure option").remove();


                                           for (var i = 0; data.enseignant.length - 1 >= i; i++) {
                                       //alert(data);
                    //$(".b").html(data); 
                            $("select.Enseignant").append("<option id="+data.enseignant[i].id_personnel+">"+ data.enseignant[i].nom_prenom+"</option>");
                                             }


                                           $("select.heure").append("<option>"+data.ec[0].heure+"</option>");

                                           $(".evolution option").remove();

                                            if (data.evolution[0]!=null ) {
                                                d=data.evolution;
                                              }
                                           else{
                                                d=0;
                                                }

                                       for (var i =1; aaa[1] >=i ; i++) {
                                                                
                                          k=tableau_d.length; 
                                          if (i==aaa[1]) {  
                                           k=aaa[2]-1;
                                          }
                                              for (var j =1; k >=j ; j++) {
                                               //alert(j);
                                                    if (tableau_valeurs_[i][j]!=null) {
                                                        if (tableau_id_[i][j][3]==$("select.EC").children(".EC option:selected").attr('id')) {
                                                                if (parseInt(tableau_id_[i][j][4],10)!=0) {

                                                                d=parseInt(tableau_id_[i][j][4],10);
                                                                
                                                              }
                                                    
                                              }
                                                                              
                                           }
                                                                              
                                   }
                                 }
                                                      
                       $("select.evolution").append("<option>"+d+"</option>");
                                            
                                            
                                 
                                           
                                           
                         },
                        "json"
            );

                    $("select.EC,select.UE,select.Enseignant").css("border-color","white");
            }

            else
              {
                    //$(".UE option").remove();
                    $(".EC option").remove();
                     $(".Enseignant option").remove();
              }
            }); 
      // chargement des enseignant au changement de l'EC

        $(".EC").change(function(){

              
                      $.post(
                            "<?php  echo base_url();?>" + "Choix_planification/ch2",
                            { EC : $("select.EC").children(".EC option:selected").attr('id')},
                            function(data){

                                     $(".Enseignant option").remove();
                                     $(".heure option").remove();

                                     for (var i = 0; data.enseignant.length - 1 >= i; i++) {
                                            $("select.Enseignant").append("<option id="+data.enseignant[i].id_personnel+">"+ data.enseignant[i].nom_prenom+"</option>");
                                     }

                                     $("select.heure").append("<option>"+data.ec[0].heure+"</option>");

                                    

                                      $(".evolution option").remove();

                                          if (data.evolution[0]!=null ) {
                                                d=data.evolution;
                                                
                                              }
                                           else{
                                                d=0;
                                                }

                                     
                                       for (var i =1; aaa[1] >=i ; i++) {
                                                                
                                          k=tableau_d.length; 
                                          if (i==aaa[1]) {
                                           k=aaa[2]-1;
                                          }
                                              for (var j =1; k >=j ; j++) {
                                               //alert(j);
                                                    if (tableau_valeurs_[i][j]!=null) {
                                                        if (tableau_id_[i][j][3]==$("select.EC").children(".EC option:selected").attr('id')) {
                                                                if (parseInt(tableau_id_[i][j][4],10)!=0) {

                                                                d=parseInt(tableau_id_[i][j][4],10);
                                                                
                                                              }
                                                    
                                              }
                                                                              
                                           }
                                                                              
                                   }
                                 }
                                      

                                                            
                       $("select.evolution").append("<option>"+d+"</option>");
                                            
                           },
                          "json"
                );
            }); 
     //Gestion des radio sur le formilaire d'enregistrement d'une plage
     $("input[name=optradio]").change(
          function(){
                          $(".radio").css("border","none");
                           $("select.EC,select.UE,select.Enseignant").css("border-color","white");
                          if ($("input[name=optradio]:checked").val()=="BIBLIOTHEQUE"  || $("input[name=optradio]:checked").val()=="Congé" || $("input[name=optradio]:checked").val()=="INVESTISSEMENT HUMAIN" || $("input[name=optradio]:checked").val()=="Vider") {

                                  $("select.EC").attr("disabled","true");
                                  $("select.UE").attr("disabled","true");
                                  $("select.Enseignant").attr("disabled","true");
                                  $("select.Salle").attr("disabled","true");

                                  if ($("select.UE").children(".UE option:selected").attr('id')!="nul" ) {
                                          //$(".UE option").remove();
                                        $("select.UE").children(".UE option[id=nul]").attr("selected","selected");
                                        //$("select.UE").prepend("<option id='nul' >2</option>");
                                       // $("select.UE").trigger('change');
                                        //$("select.UE").children(".UE option:selected").remove();
                                }
                            
                          }
                          else if ( $("input[name=optradio]:checked").val()=="Cour"    || 
                                    $("input[name=optradio]:checked").val()=="TP"      || 
                                    $("input[name=optradio]:checked").val()=="TPE"     ||
                                    $("input[name=optradio]:checked").val()=="TD"      || 
                                    $("input[name=optradio]:checked").val()=="CC"      ||
                                    $("input[name=optradio]:checked").val()=="SYNTHESE"|| 
                                    $("input[name=optradio]:checked").val()=="PROJET"  ||
                                    $("input[name=optradio]:checked").val()=="RATRAPAGE"
                            ) {
                           
                                  $("select.EC").removeAttr("disabled","false");
                                  $("select.UE").removeAttr("disabled","false");
                                  $("select.Enseignant").removeAttr("disabled","false");
                                  $("select.Salle").removeAttr("disabled","false");

                                  if ($("input[name=optradio]:checked").val()!="Cour") {

                                      $("select.Enseignant").attr("disabled","true");

                                  }
                            

                          }

                     //   $(".evolution option").remove();

                                         

                                     /*for (var i =1; aaa[1] >=i ; i++) {

                                                            
                                          k=3; 
                                          if (i==aaa[1]) {
                                           k=aaa[2]-1;
                                          }
                                              for (var j =1; k >=j ; j++) {
                                               
                                                    if (tableau_valeurs[i][j]!=null) {
                                                        if (tableau_id[i][j][3]==$("select.EC").children(".EC option:selected").attr('id')) {
                                                            if (parseInt(tableau_id[i][j][4],10)!=0) {

                                                                d=parseInt(tableau_id[i][j][4],10);
                                                              }
                                                                    
                                              }
                                                                              
                                           }
                                                                              
                                   }
                                 }
                                                            
                       $("select.evolution").append("<option>"+d+"</option>");
            
          });



    //enregistrement d'une plage

         
         
    });


$(document).ready(
      function(){


        
      $("#enreg").click(
          function(){

            if  ($("input[name=optradio]:checked").val()!="BIBLIOTHEQUE"  && $("input[name=optradio]:checked").val()!="Congé" && $("input[name=optradio]:checked").val()!="Vider" && $("input[name=optradio]:checked").val()!="PROJET" && $("input[name=optradio]:checked").val()!="SYNTHESE" && $("input[name=optradio]:checked").val()!="INVESTISSEMENT HUMAIN" && $("input[name=optradio]:checked").val()!="RATRAPAGE") {

             $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "enregistrement/verification" ,
                  type: "POST",
                  //async: false,

                  data : {EC:$("select.EC").children(".EC option:selected").attr('id'),
                          debut:tableau_semaine[1],
                          jour:tableau_id_jour[aaa[1]-1],
                          plage:tableau_d[aaa[2]-1][1],
                          plage1:tableau_d[aaa[2]-1][2]},
                  dataType: "json",
                  success: function(data){
                    if (data.planifications.length!=0) {
                    info='';
            for (var i = 0; data.planifications.length - 1 >= i; i++) {

              info+="   "+(i+1)+"- "+data.planifications[i].nom_prenom+" est programmé en "+data.planifications[i].rendu+" de "+data.planifications[i].heure_debut[0]+data.planifications[i].heure_debut[1]+"h à "+data.planifications[i].heure_fin[0]+data.planifications[i].heure_fin[1]+"h pour un "+data.planifications[i].type_planing+'" de "'+data.planifications[i].intitule_ec+'" dans la meme journée"\n';
             

           }

                    swal('ATENTION!!!',info,'info');

                  }
                    //alert(data);
                    //$(".b").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes d:!jyhqmh");
                  }
                });
           }



            mat=0;
            //alert($("input[name=optradio]:checked").val());
            val=$("select.EC").children(".EC option:selected").val();
            $("select.EC,select.UE,select.Enseignant").css("border-color","white");
            $(".radio").css("border","none");
            if ($("input[name=optradio]:checked").val()==null) {
                $(".radio").css("border","1px solid red");

            }
            else{
                  if (val==null && ($("input[name=optradio]:checked").val()!="BIBLIOTHEQUE"  && $("input[name=optradio]:checked").val()!="Congé" && $("input[name=optradio]:checked").val()!="Vider" && $("input[name=optradio]:checked").val()!="INVESTISSEMENT HUMAIN") ) {

                    $("select.EC,select.UE,select.Enseignant").css("border-color","red");
                    if ($("input[name=optradio]:checked").val()=="TP"      || 
                    $("input[name=optradio]:checked").val()=="TPE"     ||
                    $("input[name=optradio]:checked").val()=="TD"      || 
                    $("input[name=optradio]:checked").val()=="CC"      ||
                    $("input[name=optradio]:checked").val()=="SYNTHESE"|| 
                    $("input[name=optradio]:checked").val()=="PROJET"  ||
                    $("input[name=optradio]:checked").val()=="RATRAPAGE"
                      ) {
                     $("select.Enseignant").css("border-color","white");

                    }
                    
                  }
                  else{

        
                 num_jour=aaa[1];
                 num_plage=aaa[2];

                 debut="<?php 
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


                   
                                   

                                      

                       
                
                if (tableau_valeurs_[num_jour][num_plage]!=null){
                          mat=tableau_id_[num_jour][num_plage][3];
                }
                  val=$("select.evolution").children(".evolution option:selected").val();
          


                            if (val!=null) {

                             Evolution=parseInt(val,10)+parseInt(nbh,10);
                             //alert(Evolution);
                        }

                        else{                                                                
                              if (tableau_valeurs_[num_jour][num_plage]!=null) {
                                Evolution=tableau_valeurs_[num_jour][num_plage][4];
                              }
                              else{
                                Evolution=0;
                              }
                          
                        }
                  
               

                         
              
                if ( $("input[name=optradio]:checked").val()=="BIBLIOTHEQUE"  || $("input[name=optradio]:checked").val()=="Congé" || $("input[name=optradio]:checked").val()=="INVESTISSEMENT HUMAIN") {

                        Salle_id=$("select.Salle").children(".Salle option:selected").attr('id');
                        EC_id=null;
                        UE_id=0;
                        Evolution=0;
                        Salle=0;
                        EC=0;
                        Enseignant1=0;
                        Enseignant2=0;
                        heure=0;
                        UE=0;


                  }  
                  else{     
                  if (                $("input[name=optradio]:checked").val()=="TP"      || 
                                      $("input[name=optradio]:checked").val()=="TPE"     ||
                                      $("input[name=optradio]:checked").val()=="TD"      || 
                                      $("input[name=optradio]:checked").val()=="CC"      || 
                                      $("input[name=optradio]:checked").val()=="Cour" ) 
                                     {

                        Salle_id=$("select.Salle").children(".Salle option:selected").attr('id');
                        EC_id=$("select.EC").children(".EC option:selected").attr('id');
                        UE_id=$("select.UE").children(".UE option:selected").attr('id');
                        Salle=$("select.Salle").children(".Salle option:selected").val();
                        EC=$("select.EC").children(".EC option:selected").val();
                        Enseignant1=$("select.Enseignant").children(".Enseignant option:selected").val();
                        Enseignant2=$("select.Enseignant").children(".Enseignant option:eq(1)").val();
                        heure=$("select.heure").children(".heure option:selected").val();
                        UE=$("select.UE").children(".UE option:selected").val();

                    
                  }
                  else{

                        Salle_id=$("select.Salle").children(".Salle option:selected").attr('id');
                        EC_id=$("select.EC").children(".EC option:selected").attr('id');
                        UE_id=$("select.UE").children(".UE option:selected").attr('id');
                        Evolution=0;
                        Salle=$("select.Salle").children(".Salle option:selected").val();
                        EC=$("select.EC").children(".EC option:selected").val();
                        Enseignant1=$("select.Enseignant").children(".Enseignant option:selected").val();
                        Enseignant2=$("select.Enseignant").children(".Enseignant option:eq(1)").val();
                        heure=$("select.heure").children(".heure option:selected").val();
                        UE=$("select.UE").children(".UE option:selected").val();
                  }

                }


                        //alert(Evolution);  
                     if ( $("input[name=optradio]:checked").val()!="Vider"  ) {
                       tableau_id_[num_jour][num_plage]=[
                            tableau_id_jour[num_jour-1],
                            tableau_d[num_plage-1][3],
                            Salle_id,
                            EC_id,
                            Evolution,
                            UE_id,
                            $("input[name=optradio]:checked").val(),
                            tableau_d[0][4]
                            ];

                            tableau_valeurs_[num_jour][num_plage]=[
                            tableau_id_jour[num_jour-1],
                            tableau_d[num_plage-1][3],
                            Salle,
                            EC,
                            Evolution,
                            Enseignant1,
                            Enseignant2,
                            heure,
                            UE,
                            $("input[name=optradio]:checked").val()
                            ];



                  
                   // alert(index);

                       

                   $(".choix").css("display","none");
                      s=$("select.Semestre").children(".Semestre option:selected").attr('id');
                       Remplir(tableau_valeurs_,aaa[1],aaa[2],index);

                      evolution(tableau_id_,tableau_id_[num_jour][num_plage][3]);
                      
                      if (mat!=0 && mat!=null) {
                        evolution(tableau_id_,mat);

                      }
                     // alert(tableau_valeurs[num_jour][num_plage]);
                      }
                      else{
                        if (tableau_valeurs_[num_jour][num_plage]!=null) {
                        tableau_valeurs_[num_jour][num_plage].length=0;
                            tableau_id_[num_jour][num_plage].length=0;
                            $("#"+index).empty();
                      if (mat!=0 && mat!=null) {

                        evolution(tableau_id_,mat);
                      }
                          
                          }

                      }
                     // alert(tableau_valeurs_);

                      $(".choix").css("display","none");
                      s=$("select.Semestre").children(".Semestre option:selected").attr('id');

                              }


                                   
             
            }
           
                                    });


      $("#Imprimer").click(function(){
//alert(tableau_id_jour);
              $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "enregistrement/enreg" ,
                  type: "POST",
                  //async: false,

                  data : {tableau_plages:tableau_id_,tableau_semaine:tableau_semaine,niv:$("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "text",
                  success: function(data){
                   swal('','Emploi du temps Enregistré avec success','success');


                  
                   notif();
                    //alert(data);
                    //$(".b").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });


      });


$("#pre").css('background-color','blue');
$(".n_edit").hide();
$("#edit").click(function(){
 
$(".preced").hide();
$("#edit").css('background-color','blue');
  $("#pre").css('background-color','green');
$(".n_edit").fadeIn(1000);


                });
$("#pre").click(function(){
      $(".n_edit").hide();
       $(".preced").fadeIn(1000);
        $("#edit").css('background-color','green');
  $("#pre").css('background-color','blue');

                });


       }); */
  </script>




</body>

</html>
