 <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
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
               // alert(data);
                $('tbody.tableau').empty();
               for (var i = data.length - 1; i >= 0; i--) {
                
                  $('tbody.tableau').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du"+ data[i][0].debut + "au"+ data[i][0].fin + ".pdf</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</td></tr>");
                    $("#f"+ data[i][0].id_semaine).prop("href","<?php  echo base_url();?>" + "imprimer_ens/index/"+data[i][0].id_semaine+"/"+$("select.Enseignants").children(".Enseignants option:selected").attr("id"));
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
                                          <select class=" form-control   Consultation" style="width:  10%;" >
                                            <option id="salle">Salles</option>
                                            <option id="enseignant">Enseignants</option>
                                          </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label for="sel1" style="color: white">Departement:</label> &nbsp;&nbsp;<select  class=" form-control col-sm-2 departement" id='dep' ><option id='null'></option><?php foreach ($departement as $row){echo '<option id='.$row->id_departement.'>'.$row->nom_departement.'</option>';} ?></select>

                                            &nbsp;&nbsp;<label for="sel1" style="color: white">Enseignant:</label> &nbsp;&nbsp;<select  class=" form-control col-sm-2 Enseignants" id='ens' ></select>

                                                     

                                                      </div>
               
        <div class="col-sm-3"  >
                         
                    </div>
            

           <table id="bootstrap-data-table-export" class="table  table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
    <thead>
    <tr role="row"> <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 20%;">N° Semaine</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Periode</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 30%;">Action</th> </tr> </thead>
    <tbody class="tableau"></tbody>
  </body>
  </html>
