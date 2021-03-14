 <script src="<?php  echo base_url('assets/');?>public/js/jquery.min.js" text="text/javascript"></script>
  <script type="text/javascript">

  $(document).ready(
      function(){
        
//$(".Mention").click(function(){alert("ok")});


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
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
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
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
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
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
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
                                      $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Imprimer</a></td></tr>");
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


      
            <div class="card-header py-3" align="center">
              <h6 class="m-0 font-weight-bold text-primary" style="font-size: 30px;"> EMPLOI DU TEMPS PROGRAMMES</h6>
            </div>
            <div class="card-body">
             
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">


                <div class=" col-sm-12 form-group choixPN showback" style="display: flex;
                                                                  -webkit-box-orient: horizontal;
                                                                  -webkit-box-direction: normal;
                                                                  flex-flow: row wrap;
                                                                  -webkit-box-align: center;
                                                                  align-items: center;
                                                                  margin-top: 50px;
                                                                  margin-right: 70px;
                                                                  width: 100%;
                                                                  background-color: black">
                                                       <label for="sel1" style="color: white" >Annee: </label>&nbsp;
							                          <select class=" form-control  annee" style="width:  14%;">
							                            
							                            <?php foreach ($annee as $row) {
							                            if ($row->status=="en cours") {
							                             echo "<option id=".$row->id_annee." value=".$row->id_annee." selected>".$row->annee."</option>";
							                            }
							                            else
							                              echo "<option id=".$row->id_annee.">".$row->annee."</option>";


							                            } ?>
							                            </select>&nbsp;&nbsp;
							                            <select class=" form-control  annee Consultation" style="width:  10%;" >
							                              <option id="salle">Salles</option>
							                              <option id="enseignant">Enseignants</option>
							                            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                      <label for="sel1" style="color: white">Mention: </label>&nbsp;&nbsp;
                                                      <select class=" form-control Mention " id="sel1" style="width:  10%;">
                                                         
                                                            <?php foreach ($mentions as $row) {
                                                              echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                               } ?>
                                                        </select>&nbsp;&nbsp;
                                                      
                                                    <!--<select class="Mention" id="" >
                                                      <option id="nul"></option>
                                                    <?php foreach ($mentions as $row) {
                                                      echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                    } ?>
                                                    </select>-->
                                                      
                                                      <label for="sel1" style="color: white">Parcour:</label>&nbsp;&nbsp;
                                                      <select class="form-control Parcour" id="sel1" style="width:  10%;"></select>&nbsp;&nbsp;
                                                      <label for="sel1" style="color: white">Niveau:</label>&nbsp;&nbsp;
                                                      <select class=" form-control Niveau" id="sel1"  style="width:  10%;"></select>&nbsp;
                                                      
                                                     

                                                      </div>
               
        <div class="col-sm-3"  >
                         
                    </div>
            <div class="filtres"><!--
                   <div class='row col-sm-1 col-md-8 fil' style='margin-left: 30%;  margin-top: -7%;'><div class='col-sm-3'><label class='form-control' for='sel1' >Departement:</label><select class='form-control au-input au-input--fulls  departement ' id='dep' ><option id='null'></option><?php foreach ($departement as $row){echo '<option id='.$row->id_departement.'>'.$row->abreviation.'</option>';} ?></select></div>>
                   <div class='row col-sm-1 col-md-5 filtre' style='margin-left: 30%;  margin-top: -10%;'><div class='col-sm-3'><label class='form-control' for='sel1' >Mention:</label>&nbsp;<select class='form-control au-input au-input--fulls  Mention ' id='sel1' ><option id='null'></option><?php foreach ($mentions as $row){echo '<option id='.$row->id_mention.'>'.$row->abreviation_mention.'</option>';} ?></select></div><div class='col-sm-3'><label class='form-control' for='sel1'>Parcour:</label>&nbsp;<select class='form-control Parcour' id='sel1'></select></div><div class='col-sm-3'><label class='form-control' for='sel1'>Niveau:</label>&nbsp;<select class='form-control Niveau' id='sel1'></select></div></div-->
                </div>

          
                                <table id="bootstrap-data-table-export" class="table  table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                    <thead>
                                     <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20%;">N° Semaine</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Periode</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 30%;">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody class="tableau"> 
                                    </tbody>
                      
