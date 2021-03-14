 <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
  <script type="text/javascript">

  $(document).ready(
      function(){
        
//$(".Mention").click(function(){alert("ok")});
/*
         $(".Mention").change(function(){
         // alert("ok");
              if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
                //alert($("select.Mention").children(".Mention option:selected").attr('id'));
            $.post(
              "<?php  echo base_url();?>" + "index.php/choix/ch1",
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
                                        "<?php  echo base_url();?>" + "index.php/choix/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                              if (data.length) {


                             // alert(data);
                             $('tbody.tableau').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Consulter</a><br><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "index.php/imprimer/index/"+data[i][0].id_semaine);
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

            });
                           //alert($("select.Niveau").children(".Niveau option:selected").attr('id'));
         $(".Niveau").change(function(){
         $.post(
              "<?php  echo base_url();?>" + "index.php/choix/ch3",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){
                    $.post(
                                      // chargement des emplois du temps des niv_par
                            "<?php  echo base_url();?>" + "index.php/choix/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                             // alert(data);
                             $('tbody.tableau').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Consulter</a><br><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
                                       $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "index.php/imprimer/index/"+data[i][0].id_semaine);
                                    }
                                      
                          },
                          "json"
                    );
       
            },
            "json"
            );
    });

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "index.php/choix/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
            $('tbody.tableau').empty();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
                         $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "index.php/choix/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                             // alert(data);
                            
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' id=f"+ data[i][0].id_semaine +">Consulter</a><br><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
                                       $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "index.php/imprimer/index/"+data[i][0].id_semaine);
                                    }
                                      
                          },
                          "json"
                    );
       
           }

       },
            "json"
            );

            
          });

/*
          $(".Consultation").change(function(){
          //alert($('select.Consultation').children(".Consultation option:selected").attr("id"));
          if ($('select.Consultation').children(".Consultation option:selected").attr("id")==='salle') {
              $('.ens').hide();
              $('.filtre').show();
               
                 
            }
          else{
           //$('.filtres').empty();
           $('.filtre').hide();
                $('.ens').show();
          }
          
          }); 
       */
          $(".departement").change(function(){
         $('tbody.tableau').empty();
             $.post(
              
                                
                    "<?php  echo base_url();?>" + "index.php/choix/ens",
                    { dep : $("select.departement").children(".departement option:selected").attr("id") },
               function(data){
                            // alert(data);

                          $("select.Enseignants").empty();
                  for (var i = 0; data.personnels.length - 1 >= i; i++) {
                             
                               $("select.Enseignants").append("<option id="+data.personnels[i].id_personnel+">"+ data.personnels[i].nom_prenom+"</option>");


                             }
               $.post(           
                    "<?php  echo base_url();?>" + "index.php/choix/emp",
                    { id_ens : $("select.Enseignants").children(".Enseignants option:selected").attr("id") },
               function(data){
               // alert(data);
                $('tbody.tableau').empty();
               for (var i = data.length - 1; i >= 0; i--) {
                
                  $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du"+ data[i][0].debut + "au"+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Consulter</a><br><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
                    $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "index.php/imprimer_ens/index/"+data[i][0].id_semaine+"/"+$("select.Enseignants").children(".Enseignants option:selected").attr("id"));
   }
               
               },
               "json");
                                   
                          },
                     "json"
                   ); 

          });

      $(".Enseignants").change(function(){
         $('tbody.tableau').empty();
                 $.post(           
                    "<?php  echo base_url();?>" + "index.php/choix/emp",
                    { id_ens : $("select.Enseignants").children(".Enseignants option:selected").attr("id") },
               function(data){
               // alert(data);
                $('tbody.tableau').empty();
               for (var i = data.length - 1; i >= 0; i--) {
                
                  $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du"+ data[i][0].debut + "au"+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Consulter</a><br><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
                    $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "index.php/imprimer_ens/index/"+data[i][0].id_semaine+"/"+$("select.Enseignants").children(".Enseignants option:selected").attr("id"));
    }
               
               },
               "json");
                        
           });
      
        
}); 

/*  


*/
</script>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  </head>
  <body>
    
            <div class="card-header py-3" align="center">
              <h6 class="m-0 font-weight-bold text-primary" style="font-size: 30px;"> EMPLOI DU TEMPS PROGRAMMES</h6>
            </div>
                    <div class=" col-sm-12 form-group choixPN showback" style="display: flex;-webkit-box-orient: horizontal;-webkit-box-direction: normal;flex-flow: row wrap;-webkit-box-align: center;align-items: center; margin-top: 10px;margin-right: 70px;width: 100%;background-color: black"><label for="sel1" style="color: white">
                           Annee</label>&nbsp;
                          <select class=" form-control col-sm-2 annee" >
                            <option id="null"></option>
                            <?php foreach ($annee as $row) {
                            if ($row->status=='en cours') {
                             echo "<option id=".$row->id_annee." value=".$row->id_annee." selected>".$row->annee."</option>";
                            }
                            else
                              echo "<option id=".$row->id_annee.">".$row->annee."</option>";


                            } ?>
                            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            

                    
           
                  &nbsp;&nbsp;<label for="sel1" style="color: white">Departement:</label> &nbsp;&nbsp;<select  class=" form-control col-sm-2 departement" id='dep' ><option id='null'></option><?php foreach ($departement as $row){echo '<option id='.$row->id_departement.'>'.$row->nom_departement.'</option>';} ?></select>

                   &nbsp;&nbsp;<label for="sel1" style="color: white">Enseignant:</label> &nbsp;&nbsp;<select  class=" form-control col-sm-2 Enseignants" id='ens' ></select>
                 
                </div>

   <table id="bootstrap-data-table-export" class="table  table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
    <thead>
    <tr role="row"> <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20%;">N° Semaine</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Periode</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 30%;">Action</th> </tr> </thead>
    <tbody class="tableau"></tbody>
  </body>
  </html>


    <!-- Bootstrap CSS-->
    <link href="<?php  echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php  echo base_url();?>public/css/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php  echo base_url();?>public/js/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php  echo base_url();?>public/js/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php  echo base_url();?>public/js/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php  echo base_url();?>public/js/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php  echo base_url();?>public/js/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php  echo base_url();?>public/js/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php  echo base_url();?>public/css/theme.css" rel="stylesheet" media="all">


</head>

   <!-- Jquery JS-->
    <script src="<?php  echo base_url();?>public/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php  echo base_url();?>public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php  echo base_url();?>public/vendor/slick/slick.min.js">
    </script>
    <script src="<?php  echo base_url();?>public/vendor/wow/wow.min.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/animsition/animsition.min.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php  echo base_url();?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php  echo base_url();?>public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php  echo base_url();?>public/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php  echo base_url();?>public/js/main.js"></script>

</html>
