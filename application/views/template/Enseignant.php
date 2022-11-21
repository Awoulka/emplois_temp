

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
                            <li class="active">Emplois du temps / Enseignants</li>
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
                <label for="sel1" style="color: " >Annee: </label>&nbsp;
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
                    
                <label for="sel1" style="color: ">Departement:
                </label> &nbsp;&nbsp;

                    <select  class=" form-control col-sm-2 departement" id='dep' >

                        <option id='null'></option>

                            <?php 
                                    foreach ($departement as $row){

                                        echo '<option id='.$row->id_departement.'>'.$row->nom_departement.'</option>';
                                    } 
                            ?>

                    </select>&nbsp;&nbsp;

                <label for="sel1" style="color: ">Enseignant:
                </label> &nbsp;&nbsp;

                    <select  class=" form-control col-sm-2 Enseignants" id='ens' >
                        
                    </select>

                                                     

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

                <tbody class="tableau"></tbody>


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
        
        $("select.Consultation").change(function(){


      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/consult" ,
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

          $(".departement").change(function(){
         $('tbody.tableau').empty();
             $.post(
              
                                
                    "<?php  echo base_url();?>" + "Imprimer/ens",
                    { dep : $("select.departement").children(".departement option:selected").attr("id") },
               function(data){
                            // alert(data);

                          $("select.Enseignants").empty();
                  for (var i = 0; data.personnels.length - 1 >= i; i++) {
                             
                               $("select.Enseignants").append("<option id="+data.personnels[i].id_personnel+">"+ data.personnels[i].nom_prenom+"</option>");


                             }
               $.post(           
                    "<?php  echo base_url();?>" + "Imprimer/emp",
                    { id_ens : $("select.Enseignants").children(".Enseignants option:selected").attr("id") },
               function(data){
               // alert(data);
                $('tbody.tableau').empty();
               for (var i = data.length - 1; i >= 0; i--) {
                
                  $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du"+ data[i][0].debut + "au"+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</td></tr>");
                    $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer_ens/index/"+data[i][0].id_semaine+"/"+$("select.Enseignants").children(".Enseignants option:selected").attr("id"));
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
                    "<?php  echo base_url();?>" + "Imprimer/emp",
                    { id_ens : $("select.Enseignants").children(".Enseignants option:selected").attr("id") },
               function(data){
                a=0
                
                tb=[]
               
                $('tbody.tableau').empty();
               for (var i = data.length - 1; i >= 0; i--) {
                
                /*t=false

                for (var j = 0; j < tb.length; j++) {

                    if (tb[j]==data[i][0].debut) {
                        t=true

                    }
                }*/

               // if (1) {
                    //a++

                    //tb[a]=data[i][0].debut
                    //alert(tb[a]+'--'+a);
                    
                    //alert(tb)

                    $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du"+ data[i][0].debut + "au"+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</td></tr>");
                    $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer_ens/index/"+data[i][0].id_semaine+"/"+$("select.Enseignants").children(".Enseignants option:selected").attr("id"));

               // }

                
                
                  /*$('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du"+ data[i][0].debut + "au"+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</td></tr>");
                    $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer_ens/index/"+data[i][0].id_semaine+"/"+$("select.Enseignants").children(".Enseignants option:selected").attr("id"));*/
    }
               
               },
               "json");
                        
           });
      
        
}); 

/*  


*/
</script>
</body>

</html>
