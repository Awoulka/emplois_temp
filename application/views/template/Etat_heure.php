

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Etat des Heures</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Selection</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

            <!--div class=" col-sm-12 form-group choixPN showback" style="display: flex;-webkit-box-orient: horizontal;-webkit-box-direction: normal;flex-flow: row wrap;-webkit-box-align: center;align-items: center; margin-top: 0px;margin-right: 70px;width: 100%;background-color: "><label for="sel1" style="color: ">
   Mention: </label>&nbsp;&nbsp;
          <select class=" form-control Mentions " id="sel1" style="width:  10%;"> 
          <?php foreach ($mentions as $row) { 
            echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";}
           ?>
            
          </select> 
          <label for="sel1" style="color: ">
   Parcour:</label>&nbsp;&nbsp;
    <select class="form-control Parcours" id="sel1" style="width:  10%;"></select>&nbsp;&nbsp;<label for="sel1" style="color: ">
   Niveau:</label>&nbsp;&nbsp;
   <select class=" form-control Niveaux" id="sel1"  style="width:  10%;"></select>
 </div-->
     
<form action="<?php echo base_url('Excel_export/etat_select');?>" method="POST">
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
                        <select class="form-control Cycle" id="" name="Cycle" style="width:  10%;">
                            <option id='nul'>Choisir le cycle</option>


                            <?php 
                                    foreach ($cycles as $row) {

                                        echo "<option id=".$row->id_cycle." value='".$row->id_cycle."'>".$row->abreviation_cycle."</option>"; 

                                        } 
                            ?>

                        </select>&nbsp;&nbsp;

                        <label for="sel1" style="color: ">Mention:</label>&nbsp;
                          
                             <select class="form-control Mention" name="Mention" id="sel1" style="width:  10%; float: "><option id='nul' >Choisir la mention</option>
                              <!--?php foreach ($mentions as $value) {
                                echo "<option id='".$value->id_mention."'>".$value->abreviation_mention."</option>";
                              } ?-->

                             </select>&nbsp;&nbsp;
                    <label for="sel1" style="color: ">Parcour:</label>&nbsp;
                        <select class="form-control Parcour"  name="Parcour" id="sel1" style="width:  10%;" required></select>&nbsp;&nbsp;
                    <label for="sel1" size="20"style="color:;   ">Niveau:</label>&nbsp;
                        <select class=" form-control Niveau" name="Niveau" id="sel1"  style="width:  10%;" required></select>&nbsp;
                        <!--label for="sel1" size="20"style="color:;   ">Semestre:</label>&nbsp;
                        <select class=" form-control Semestre" name="Semestre" id="sel1"  style="width:  10%;"></select-->&nbsp;
                            <!--button type="submit" class="btn" id="choix_ok" style=" background-color: green;">
                                <span style="color: white">OK</span>
                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                           
                            <!--button type="submit" class="btn" style=" background-color: green;" target="blank_">
                                <span style="color: white">Imprimer</span>
                            </button-->&nbsp;

                        </form>
                                                       
            </div>

    

            

      </div>

      <div class="tableau">
        </div>
      

      <!--div class="contenaire box">
        <div class="table-responsive">
        
            <div class="tableau_excel">
              
            </div>
          <div class="" align="center">
            <form method="post" class="action">
              <input type="submit" name="export" class="btn btn-success" value="Export">
            </form>
            
          </div>
          <br>
          <br>
        </div>
          
      </div-->

      <?php 

                            if(isset($annees)) {
                                
                            
                        ?> 

            <!--table border="1" style="width: 100%; ">
                
                <tr >
                    
                    <td colspan="8"  align="center">
                        Etat des heures effectuees par des enseignants en 
                        <?php 

                            foreach ($niv_par as $value) {
                                echo $value->rendu; break;
                            }
                        ?> 
                        au semestre 
                        <?php 

                            foreach ($niv_par as $value) {
                                echo $value->semestre[0]->semestre;break;
                            }
                        ?>  
                        et 

                        <?php 

                            foreach ($niv_par as $value) {

                                echo  $value->semestre[1]->semestre;break;
                            }
                        ?> 
                        annees 

                        <?php 

                            foreach ($annees as $value) {

                                echo  $value->annee;
                
                                break;
                            }
                        ?> 
                    
                    </td>
                </tr>
                
                <tr>
                    <td align="center">Code</td>
                    <td align="center">Intitule EC </td>
                    <td>Nom de l'enseignant</td>
                    <td align="center">CM</td>
                    <td align="center">TD</td>
                    <td align="center" colspan="2">TP</td>
                    <td align="center">Total des heures effectuees</td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center"></td>
                    <td align="center">
                    <td align="center">groupes</td>
                    <td align="center">heures</td>
                    <td align="center"></td>
                </tr>
                <tr>
                <td colspan="8" align="center">Semestre 

                    <?php 

                        foreach ($niv_par as $value) {

                            echo  $value->semestre[0]->semestre;break;
                        }
                    ?>
                        
                </td>
                </tr>
                
                    <?php 

                        foreach ($ec as $value) {
                
                            if ($value->semestre[0]->id_semestre==$value->semestre_id) {

                                     $n=0;
                                    
                                    foreach ($value->enseignant as $row) {

                                        $n++;
                                    }
                                    
                                    echo "
                                    <tr>
                                        <td align='center' rowspan='".($n+1)."'>".$value->code_ec."</td>
                                        <td align='center' rowspan='".($n+1)."'>".$value->intitule_ec."</td>";
                                    
                                    $trouve=0;
                                    
                                    for ($i=0; $i < $n; $i++) { 
                                
                                        echo "<td align='center'>".$value->enseignant[$i]->nom_prenom."</td>
                                        <td align='center'>".$value->h_cours."</td>
                                        <td align='center'>".$value->h_td."</td>
                                        <td align='center'>/</td>
                                        <td align='center'>".$value->h_tp."</td>";
                                    
                                        if ($trouve==0) {
                                            echo" <td align='center'rowspan='".($n+1)."'>".$value->evolution."/".$value->heure."</td>";
                                            $trouve=1;
                                        }
                                    
                                        if ($i<$n) {
                                            echo "</tr><tr>";
                                        }
                                              
                                    }            

                                echo "</tr>";
                        
                            }
                        } 
                    ?>
                <tr>
                    
                    <td colspan="8" align="center">Semestre 

                        <?php 

                            foreach ($niv_par as $value) {

                                echo  $value->semestre[1]->semestre;break;
                            }
                        ?>
                            
                    </td>
                </tr>
            
                <?php 

                    foreach ($ec as $value) {
                        
                        if ($value->semestre[1]->id_semestre==$value->semestre_id) {
                        
                             $n=0;
                            foreach ($value->enseignant as $row) {
                                    $n++;
                            }
                        
                            echo "<tr>
                                  <td align='center' rowspan='".($n+1)."'>".$value->code_ec."</td>
                                  <td align='center' rowspan='".($n+1)."'>".$value->intitule_ec."</td>";
                            $trouve=0;
                            
                            for ($i=0; $i < $n; $i++) { 
                                
                                echo "<td align='center'>".$value->enseignant[$i]->nom_prenom."</td>
                                      <td align='center'>".$value->h_cours."</td>
                                      <td align='center'>".$value->h_td."</td>
                                      <td align='center'>/</td>
                                      <td align='center'>".$value->h_tp."</td>";
                                
                                if ($trouve==0) {
                                         
                                    echo" <td align='center'rowspan='".($n+1)."'>".$value->evolution."/".$value->heure."</td>";
                                    $trouve=1;
                                }
                                    

                                if ($i<$n) {
                                        
                                    echo "</tr><tr>";
                                }
                                              
                            }
                                            

                            echo "</tr>";
                        
                        }
                    } 
                ?>
            
        </table-->

         <?php  
                                
                            }
                        ?> 

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

       //base_url="<?php echo base_url();?>";

       $id_mention="<?php  echo $this->session->id_mention;?>";
    $id_cycle=$("select.Cycle").children(".Cycle option:selected").attr('id');
       $(document).ready(
      function(){

 
                

                $(".Cycle").change(function(){

          
          if ($("select.Cycle").children(".Cycle option:selected").attr('id')!="nul") {


                $(".Mention option").remove();
                $(".Parcour option").remove();
                $(".Niveau option").remove();
                $(".pp").empty();
                $(".liste_ajout").empty();
                
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
                                
                                
                                    $("select.Mention").append("<option id="+data.mention[i].id_mention+" value='"+data.mention[i].id_mention+"'>"+ data.mention[i].abreviation_mention+"</option>");

                                 
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

           var id_niveau = $("select.Niveau").children(".Niveau option:selected").attr('id');
                  // alert(id_niveau);

                    if(id_niveau != null)
                    {

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"Excel_export/etat_tableau",
                            method:"POST",
                            data:{id_niveau:$("select.Niveau").children(".Niveau option:selected").attr('id')},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.tableau').html(data);
                            }
                        });

                       $.ajax({
                            url:"<?php echo base_url(); ?>"+"Choix/fetch_sem",
                            method:"POST",
                            data:{id_niveau:id_niveau},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.Semestre').html(data);
                            }
                        });
                    }
                    else
                    {
                         $('.tableau').html('<div></div>');
                       $('.Semestre').html('<option value="">Selectionner un semestre</option>');
                    }
                


               });


                


        $(".Mention").change(function(){
          
          if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
                $(".Parcour option").remove();
                $(".Niveau option").remove();
                $(".pp").empty();
                $(".liste_ajout").empty();
                
            $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Choix/ch1" ,
                    type: "POST",
                    async: false,

                    data : {mention :  $("select.Mention").children(".Mention option:selected").attr('id'),
                            cycle : $("select.Cycle").children(".Cycle option:selected").attr('id')
                        },
                    dataType: "json",
                    success: function(data){
                      

                             
                             for (var i = 0; data.parcours.length - 1 >= i; i++) {
                                
                                if (data.parcours[i].mention_id == $("select.Mention").children(".Mention option:selected").attr('id')) {

                                    $("select.Parcour,select.P").append("<option id="+data.parcours[i].id_parcour+" value='"+data.parcours[i].id_parcour+"'>"+ data.parcours[i].abreviation_parcour+"</option>");

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
                               $("select.Niveau,select.N").append("<option id="+data.niv[i].id_niv_par+" value='"+data.niv[i].id_niv_par+"'>"+ data.niv[i].rendu+"</option>");
                              
           } 
        

        }
                });
                             

           
                        

        }
                });
          }
          else{

            $(".Parcour option").remove();
            $(".Niveau option").remove();
            $(".liste_ajout").empty();
            systeme_plage();
            tableau_niv.length=0;
           
          }


                           $('.Semestre').empty();
                     var id_niveau = $("select.Niveau").children(".Niveau option:selected").attr('id');
                  // alert(id_niveau);

                    if(id_niveau != null)
                    {

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"Excel_export/etat_tableau",
                            method:"POST",
                            data:{id_niveau:$("select.Niveau").children(".Niveau option:selected").attr('id')},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.tableau').html(data);
                            }
                        });

                       $.ajax({
                            url:"<?php echo base_url(); ?>"+"Choix/fetch_sem",
                            method:"POST",
                            data:{id_niveau:id_niveau},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.Semestre').html(data);
                            }
                        });
                    }
                    else
                    {
                         $('.tableau').html('<div></div>');
                       $('.Semestre').html('<option value="">Selectionner un semestre</option>');
                    }
                
             

               });


                
      

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "Choix/niveau_p",
              { id_parcour: $("select.Parcour").children(".Parcour option:selected").attr('id'),
                            cycle:$("select.Cycle").children(".Cycle option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
           for (var i = 0; data.niv.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niv[i].id_niv_par+" value='"+data.niv[i].id_niv_par+"'>"+ data.niv[i].rendu+"</option>");
             
           
           }
            

            },
            "json"
            );

             $('.Semestre').empty();
                     var id_niveau = $("select.Niveau").children(".Niveau option:selected").attr('id');
                  // alert(id_niveau);

                    if(id_niveau != null)
                    {

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"Excel_export/etat_tableau",
                            method:"POST",
                            data:{id_niveau:$("select.Niveau").children(".Niveau option:selected").attr('id')},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.tableau').html(data);
                            }
                        });

                       $.ajax({
                            url:"<?php echo base_url(); ?>"+"Choix/fetch_sem",
                            method:"POST",
                            data:{id_niveau:id_niveau},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.Semestre').html(data);
                            }
                        });
                    }
                    else
                    {
                        $('.tableau').html('<div></div>');
                       $('.Semestre').html('<option value="">Selectionner un semestre</option>');
                    }



                
//alert("id_niveau");
            
          });

          
          //systeme_plage();
      $(".Niveau").change(function(){
      

                         

                           $('.Semestre').empty();
                     var id_niveau = $("select.Niveau").children(".Niveau option:selected").attr('id');
                  // alert(id_niveau);

                    if(id_niveau != null)
                    {

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"Excel_export/etat_tableau",
                            method:"POST",
                            data:{id_niveau:$("select.Niveau").children(".Niveau option:selected").attr('id')},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.tableau').html(data);
                            }
                        });

                       $.ajax({
                            url:"<?php echo base_url(); ?>"+"Choix/fetch_sem",
                            method:"POST",
                            data:{id_niveau:id_niveau},
                            success:function(data)
                            {
                                
                               // alert(data);
                                $('.Semestre').html(data);
                            }
                        });
                    }
                    else
                    {
                        $('.tableau').html('<div></div>');
                       $('.Semestre').html('<option value="">Selectionner un semestre</option>');
                    }
          });

      


  });
    </script>
    
    

</body>

</html>
