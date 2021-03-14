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
                <a class="navbar-brand" href="./">GestEmploi
                </a>
                <a class="navbar-brand hidden" href="./">GestEmploi</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
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
                    <li>
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
                        <h1>Consulter</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Emplois du temps / Salles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">


            <div class=" col-sm-12 form-group choixPN showback" style="display: flex;
                                                                  -webkit-box-orient: horizontal;
                                                                  -webkit-box-direction: normal;
                                                                  flex-flow: row wrap;
                                                                  -webkit-box-align: center;
                                                                  align-items: center;
                                                                  margin-top: 0px;
                                                                  margin-right: 70px;
                                                                  width: 100%;
                                                                  background-color: ">
                <label for="sel1" style="color: " >Annee: 
                </label>&nbsp;
                                
                    <select class=" form-control  annee" style="width:  14%;">
                                                        
                        <?php 

                                foreach ($annee as $row) {

                                    if ($row->status=="en cours") {

                                            echo "<option id=".$row->id_annee." value=".$row->id_annee." selected>".$row->annee."</option>";
                                    }
                                    else
                                            echo "<option id=".$row->id_annee.">".$row->annee."</option>";


                                } 
                        ?>
                    </select>&nbsp;&nbsp;
                    

                <label for="sel1" style="color: ">Mention: 
                </label>&nbsp;&nbsp;
                                                      
                    <select class=" form-control Mention " id="sel1" style="width:  10%;">
                                                         
                        <?php 
                                foreach ($mentions as $row) {
                                                              
                                        echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                } 
                        ?>

                    </select>&nbsp;&nbsp;
                                                      
                                                    <!--<select class="Mention" id="" >
                                                      <option id="nul"></option>
                                                    <?php foreach ($mentions as $row) {
                                                      echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                    } ?>
                                                    </select>-->
                                                      
                <label for="sel1" style="color: ">Parcour:
                </label>&nbsp;&nbsp;
                                                      
                    <select class="form-control Parcour" id="sel1" style="width:  10%;">
                        
                    </select>&nbsp;&nbsp;
                                                      
                <label for="sel1" style="color: ">Niveau:
                </label>&nbsp;&nbsp;
                                                      
                    <select class=" form-control Niveau" id="sel1"  style="width:  10%;">
                        
                    </select>&nbsp;
                                                      
                                                     

            </div>
               
            <div class="col-sm-3"  >
                         
            </div>
            

          
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
                                    
                <tbody class="tableau"> 
                </tbody>
                      



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
     <script>
        
        
    </script>
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

  $(document).ready(
      function(){
        
//$(".Mention").click(function(){alert("ok")});

  $("select.Consultation").change(function(){



      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/enseignant" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".a").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });
  })

            $.post(
              "<?php  echo base_url();?>" + "Stat/ch1",
              { mention : $("select.Mention").children(".Mention option:selected").attr('id')},
              function(data){
              
           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
            $('tbody.tableau').empty();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
                    $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                              if (data.length) {


                             // alert(data);
                             $('tbody.tableau').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;</td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }
                                  }
                                      }
                                      else
                                      {

                                      }
                          },
                          "json"
                    );
       
           } 
             },
            "json"
             );



         $(".Mention").change(function(){
         // alert("ok");
              if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
                //alert($("select.Mention").children(".Mention option:selected").attr('id'));
            $.post(
              "<?php  echo base_url();?>" + "Stat/ch1",
              { mention : $("select.Mention").children(".Mention option:selected").attr('id')},
              function(data){
              
           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
            $('tbody.tableau').empty();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
                    $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                              if (data.length) {


                             // alert(data);
                             $('tbody.tableau').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;</td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }
                                  }
                                   }
                                      else
                                      {

                                      }
                          },
                          "json"
                    );
       
           } 
             },
            "json"
             );
                
            }
            else
              {
                $(".Parcour option").remove();
                $(".Niveau option").remove();
              }

              $(".Consultation").change(function(){
          //alert($('select.Consultation').children(".Consultation option:selected").attr("id"));
          if ($('select.Consultation').children(".Consultation option:selected").attr("id")==='salle') {
            /*
              $('.filtre').empty();
              $('.filtres').append("<div class='row col-sm-1 col-md-5 filtre' style='margin-left: 30%;  margin-top: -10%;'><div class='col-sm-3'><label class='form-control' for='sel1' >Mention:</label>&nbsp;<select class='form-control au-input au-input--fulls  Mention ' id='sel1' ><option id='null'></option><?php foreach ($mentions as $row){echo '<option id='.$row->id_mention.'>'.$row->abreviation_mention.'</option>';} ?></select></div><div class='col-sm-3'><label class='form-control' for='sel1'>Parcour:</label>&nbsp;<select class='form-control Parcour' id='sel1'></select></div><div class='col-sm-3'><label class='form-control' for='sel1'>Niveau:</label>&nbsp;<select class='form-control Niveau' id='sel1'></select></div></div>");*/
                 
            }
          else{
           $('.filtres').empty();
                
          }

          });

            });
                           //alert($("select.Niveau").children(".Niveau option:selected").attr('id'));
         $(".Niveau").change(function(){

         $('tbody.tableau').empty();
                                  $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                             

                             $('tbody.tableau').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;</td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }
                                  }
                                      
                          },
                          "json"
                    );
       
           
    });

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "Stat/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){

  
           $(".Niveau option").remove();
            $('tbody.tableau').empty();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
                         $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                             // alert(data);
                            $('tbody.tableau').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;</td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }
                                  }

                                      
                          },
                          "json"
                    );
       
           }

       },
            "json"
            );

            
          });


          $(".Consultation").change(function(){
          //alert($('select.Consultation').children(".Consultation option:selected").attr("id"));
          if ($('select.Consultation').children(".Consultation option:selected").attr("id")==='salle') {
              $('.filtre').empty();
              $('.filtres').append("<div class='row col-sm-1 col-md-5 filtre' style='margin-left: 30%;  margin-top: -10%;'><div class='col-sm-3'><label class='form-control' for='sel1' >Mention:</label>&nbsp;<select class='form-control au-input au-input--fulls  Mention ' id='sel1' ><option id='null'></option><?php foreach ($mentions as $row){echo '<option id='.$row->id_mention.'>'.$row->abreviation_mention.'</option>';} ?></select></div><div class='col-sm-3'><label class='form-control' for='sel1'>Parcour:</label>&nbsp;<select class='form-control Parcour' id='sel1'></select></div><div class='col-sm-3'><label class='form-control' for='sel1'>Niveau:</label>&nbsp;<select class='form-control Niveau' id='sel1'></select></div></div>");
                 
            }
          else{
           $('.filtres').empty();
                
          }
          
          });

          $(".departement").change(function(){
           // alert($("select.departement").children(".departement option:selected").attr("id"));
           $('tbody.tableau').empty();
                                $.post(
              
                                
                    "<?php  echo base_url();?>" + "Stat/ens",
                    { dep : $("select.departement").children(".departement option:selected").attr("id") },
               function(data){
                            // alert(data);

                          
                              for (var i = 0; data.personnels.length - 1 >= i; i++) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data.personnels[i].id_personnel +"><td class='sorting_1'>"+ data.personnels[i].nom_prenom +"</td><td> du  "+ data.personnels[i].debut + "   au  "+ data.personnels[i].fin + "</td><td><a href='#' target='_blank' id=f"+ data.personnels[i].id_personnel +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data.personnels[i].id_personnel +">Imprimer</a></td></tr>");
                                     //$("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine);
                                    }
                                      
                          },
                     "text"
                   ); 

          });

        
}); 


</script>

</body>

</html>
