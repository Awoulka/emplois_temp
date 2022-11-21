
        

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
                            <li class="active">Notifications</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

                  
                                                  <table id="bootstrap-data-table-export" class="table  table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                                        <thead>
                                                         <tr role="row">
                                                          <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10%;">Salles</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20%;">N° Semaine</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30%;">Periode</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 35%;">Action</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="tableau2"> 
                                                        </tbody>
                                                     </table>
                                          
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
     
     <script type="text/javascript">
    function notif1(){

      $('tbody.tableau2').empty();
          $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/niv1",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id'),
                              id_mention:"<?php  echo $this->session->id_mention;?>"},
                            function(data){
                             

                             $('tbody.tableau2').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null && (data[i][0].semaine_status==0 || data[i][0].semaine_status==1 || data[i][0].semaine_status==2 || data[i][0].semaine_status==3 )) {

                                        
                                     if (data[i][0].semaine_status==1 ) {
                                      $('tbody.tableau2').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].niv_par +"</td><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "</td><td><a href='#'  target='_blank'  style='color:blue' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'  style='color:green' class= 'fa fa-file valider' id="+ data[i][0].id_semaine +" style='background-color: ;'>Valider</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' style='color:red' class= 'fa fa-file rejeter' id="+ data[i][0].id_semaine +" style='background-color: ;'>Rejeter</a></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+data[i][0].id_niv_par);
                                    }

                                    
                                     

                                     if (data[i][0].semaine_status==3 ) {
                                      $('tbody.tableau2').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].niv_par +"</td><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + "(Validé mais non Publié)</td><td><a href='#' target='_blank' style='color:blue' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a  href='#'  style='color:orange' class= 'fa fa-file publier' id="+ data[i][0].id_semaine +" style='background-color: ;'>Publier</a></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer/index/"+data[i][0].id_semaine+"/"+data[i][0].id_niv_par);
                                    }

                                    }
                                  }


                              $('.valider').click(function(){

                                $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/status_semaine/3",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                swal('','Emploi du temp valider avec success','success');
                                                notif1();
                                          },
                                          "json"
                                    );
 
                                 
                              });


                              $('.rejeter').click(function(){

                                 swal({

                                        title:"",
                                        text:"le rejet de l'emploi du temp sera directement suivi de son renvoi au niveau du RP pour modification. Confirmez-vous le Rejet ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        "<?php  echo base_url();?>" + "Enregistrement/status_semaine/2",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','Emploi du temp renvoyé pou modification','success');
     
                                          },
                                          "text"
                                    );
                                        notif1();

                                        
                                      }
                                      else{

                                        }
                    });

                              });


                              $('.publier').click(function(){

                                 swal({

                                        title:"",
                                        text:"Emploi du temp pret a être Publié. Confirmez-vous la publication ?",
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
                                             
                                                 swal('','Emploi du temp publier avec success','success');
     
                                          },
                                          "text"
                                    );

                                          notif1();
                                        
                                      }
                                      else{

                                        }
                    });

                              });
                   
                                      
                          },
                          "json"
                    );

    };

     $(document).ready(
      function(){

        notif1();

        

  });
  </script>

</body>

</html>
