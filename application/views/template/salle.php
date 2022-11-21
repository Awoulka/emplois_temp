
  
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
                                
                    <select class=" form-control  annee" style="width:  12%;">
                                                        
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
                    
                <label for="sel1" style="color: ">Cycle: 
                </label>&nbsp;&nbsp;
                                                      
                    <select class=" form-control Cycle " id="sel1" style="width:  15%;">
                           <option id="null">Choisir un cycle</option>                              
                        <?php 
                                foreach ($cycles as $row) {
                                                              
                                        echo "<option id=".$row->id_cycle.">".$row->abreviation_cycle."</option>";
                                } 
                        ?>

                    </select>&nbsp;&nbsp;

                <label for="sel1" style="color: ">Mention: 
                </label>&nbsp;&nbsp;
                                                      
                    <select class=" form-control Mention " id="sel1" style="width:  16%;">
                          <option id="null">Choisir une mention</option>                               
                        <!--?php 
                                foreach ($mentions as $row) {
                                                              
                                        echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                } 
                        ?-->

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
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                                id_annee : $("select.annee").children(".annee option:selected").attr('id')},
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

        $(".annee").change(function(){

            $('tbody.tableau').empty();
                                  $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                                id_annee : $("select.annee").children(".annee option:selected").attr('id')},
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

            $(".Cycle").change(function(){

          
          if ($("select.Cycle").children(".Cycle option:selected").attr('id')!="nul") {


                $(".Mention option").remove();
                $(".Parcour option").remove();
                $(".Niveau option").remove();
                
                
            $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Choix/list_mention" ,
                    type: "POST",
                    async: false,

                    data : {
                            cycle : $("select.Cycle").children(".Cycle option:selected").attr('id')
                        },
                    dataType: "json",
                    success: function(data){
                      

                             
                             $("select.Mention").append("<option id='nul' >Choisir la mention</option>");
                             for (var i = 0; data.mention.length - 1 >= i; i++) {
                                
                                
                                    $("select.Mention").append("<option id="+data.mention[i].id_mention+">"+ data.mention[i].abreviation_mention+"</option>");

                                 
                             }
                             
                            
                        
        }
                });
          }
          else{

            $(".Parcour option").remove();
            $(".Niveau option").remove();
            $(".liste_ajout").empty();
            $(".Mention option").remove();
            $("select.Mention").append("<option id='nul' >Choisir la mention</option>");
           
          }



          $('tbody.tableau').empty();
                                  $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                                id_annee : $("select.annee").children(".annee option:selected").attr('id')},
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



         $(".Mention").change(function(){
         // alert("ok");
              if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
                //alert($("select.Mention").children(".Mention option:selected").attr('id'));
            $.post(
              "<?php  echo base_url();?>" + "Stat/ch1",
              { mention : $("select.Mention").children(".Mention option:selected").attr('id'),cycle : $("select.Cycle").children(".Cycle option:selected").attr('id')},
              function(data){
              
           $(".Parcour option").remove();
           $(".Niveau option").remove();
            $('tbody.tableau').empty();

           
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
            
            if (data.parcours[i].mention_id == $("select.Mention").children(".Mention option:selected").attr('id')) {
             $("select.Parcour").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }

       }        

                 $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Choix/niveau_p" ,
                    type: "POST",
                    async: false,

                    data : {id_parcour: $("select.Parcour").children(".Parcour option:selected").attr('id'),
                            cycle:$("select.Cycle").children(".Cycle option:selected").attr('id')},
                    dataType: "json",
                    success: function(data){
                      
                        
                             for (var i = 0; data.niv.length - 1 >= i; i++) {
                               $("select.Niveau,select.N").append("<option id="+data.niv[i].id_niv_par+">"+ data.niv[i].rendu+"</option>");


                                $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                                id_annee : $("select.annee").children(".annee option:selected").attr('id')},
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
        

        }
                });
           
          
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
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                                id_annee : $("select.annee").children(".annee option:selected").attr('id')},
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
              "<?php  echo base_url();?>" + "Stat/niveau_p",
              { id_parcour: $("select.Parcour").children(".Parcour option:selected").attr('id'),
                            cycle:$("select.Cycle").children(".Cycle option:selected").attr('id')},
              function(data){

  
           $(".Niveau option").remove();
            $('tbody.tableau').empty();
           for (var i = 0; data.niv.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niv[i].id_niv_par+">"+ data.niv[i].rendu+"</option>");
                         $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Stat/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                                id_annee : $("select.annee").children(".annee option:selected").attr('id')},
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
