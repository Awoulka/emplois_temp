

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edition  <button  type='submit' class='btn  Retour' id="+ 
                              data[i][0].id_semaine +" style='border-color: blue; border-radius: : ' ><a href="<?php  echo base_url();?>Enregistrement/nouvelle_edition/<?php  echo $n;?>/<?php  echo $c;?>" style='color:blue'>Retour</a></button></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Emplois du Temps / Modification</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

            <div class="header_emploi breadcrumbs" style="margin-top:30px; margin-left: 0px;">
                                 <div class="row ">
                                         <div class="col-sm-1">
                                                    </div>
                                         <div class="col-sm-4">

                                                  <div style="margin-top: 20px;">IUT DE NGAOUNDERE</div>
                                                  <div>Année Academique <?php foreach ($annee as $row) {echo $row->annee;} ?></div>
                                                  <div>Mention: <?php 
                                                      echo  $this->session->abreviation_mention;
                                                     ?> 
                                                    <!--<select class="Mention" id="" >
                                                      <option id="nul"></option>
                                                    <?php foreach ($mentions as $row) {
                                                      echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                    } ?>
                                                    </select>-->
                                                      
                                                    </div>
                                                
                                                  <div class="form-group ">
                                                    <label for="sel1">Parcour et Niveau: <span class="pn_"></span></label>&nbsp;

                                                    <!--select class="form-control PN" id="PN" ></select-->
                                                  </div>
                                                   
                                              
                                                                                             </div>
                                            
                                           <div class="col-sm-3"> 

                                                      <div class="top"><p>   </p></div>
                                                      <div class="top">   <h4>EMPLOI DU TEMPS</h4>   </div>

                                                  
                                                     
                                           </div>
                                           <div class="col-sm-3">
                                                      <table   class="" style="table-layout: fixed; border: 0.1em  "    id="" width="87%" height="50%" cellpadding="1" cellspacing="-20">
                                                            
                                                             <tr>
                                                                
                                                                <td class="" id="" ><p align="right" style="padding-top: 10px">SEMESTRE:</p></td>
                                                                <td class="" id=""><select class="form-control semestre_modif" id="" style=" float: right;height: 35px ; width:100%" >
                                                                </select></td> 
                                              
                                                            </tr>
                                                            <!--tr>
                                                                <td class="" id="" ><p align="right" style="padding-top: 10px">Semaine</p></td>
                                                                <td class="" id=""> <select class="form-control semaine_modif" id="sel1" style=" float: right; height: 35px">
                                                                <option>1</option></select>
                                                                </td> 
                                                            </tr-->
                                                            <tr>
                                    <td class="" id="" ><p align="right" style="padding-top: 10px">Semaine:&nbsp;&nbsp;&nbsp;</p>
                                    </td>
                                    <td class="" id=""> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input num_sem" name="select_num_sem" value="auto" style=" float: right; height: 35px">
                                      <label for="sel1">Auto</label>

                                      <select class="form-control semaine_modif" id="sel1" style=" float: right; height: 35px">
                                                <option>1</option>
                                        </select>
                                    
                                        
                                        
                                    </td> 
                                    <td class="" id="" >
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input num_sem" name="select_num_sem" value="manuel" style=" float: right; height: 35px">
                                      <label for="sel1">Manuel</label>
                                        <input type="text"  class="form-control semaine_modif" id="sel1" style=" float: right; height: 35px">
                                              
                                    </td>
                                </tr>
                                                            <tr>
                                                                <td class="" id="" colspan="2"> <p align="center">Periode: </p></td>
                                                                <tr>
                                                                <td class="" id="" colspan="2" ><select class="form-control  period_modif" id="periode_modif" style=" float: right; height: 35px;width: 200px"></tr>
                                                                <option id=""></option>
                                          
                                                                </select></td> 
                                                            </tr>
                                                           
                                                        </table>
                                                  
                                           </div>
                                           <div class="col-sm-2">
                                           </div>
                      </div>



                <table class="" style="margin-top: 20px;table-layout: fixed; border:0px 0px 0px 0px solid black; " id="table_entete_modif" width="100%">
                                                       
                                                  </table>
                                              
                                
                                        <table   class="table table_" style="table-layout: fixed; border: 0.1em  " id="table_modif" width="100%">
                                          
                                          
                                        </table>

                        <button type="submit" class="btn btn-primary top" id="enreg_modif" style="float: right; ">Enregistrer les modifications
                        </button>


                        <div class="modal  choix_dt_modif" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true"  style="margin-right:  12% ;">
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="choix_date_non_modif">Annuler</button>
                                <button type="button" class="btn btn-primary" id="choix_date_ok_modif">Selectionner</button>
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
                          <input type="radio" class="form-check-input" name="optradio" value="INVEST_HUMAIN">Investissement Humain
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

                                                    <?php foreach ($semestre as $row) {
                                                      echo "<option id=".$row->id_semestre.">".$row->semestre."</option>";
                                                    } ?>
                                      </select>
                                      
                                      <label for="sel1">&nbsp; UE:</label>
                                      <select class=" UE" id="sel1" style="
                                        width: 65%;
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
                                      

                                      </br></br>

                                      
                                       &nbsp; 
                                       <span class="ens_absent" ></span>
                                       <label for="sel1">Enseignant:</label>
                                      <select class=" Enseignant" id="sel1" style="
                                        width: 50%;
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

                                       <label for="sel1">&nbsp; Groupe:</label>
                                      <select class=" groupe" id="sel1" style="
                                        width: 20%;
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
                                        <option value="0" >Pas de groupe
                                        </option>
                                        <option value="1" >1
                                        </option>
                                        <option value="2" >2
                                        </option>
                                        <option value="3" >3
                                        </option>
                                        <option value="4" >4
                                        </option>
                                        <option value="5" >5
                                        </option>
                                        <option value="6" >6
                                        </option>
                                        <option value="7" >7
                                        </option>
                                        <option value="8" >8
                                        </option>
                                        </select>
                                       &nbsp; 
                                     </br></br>
                                      &nbsp; &nbsp; <label for="sel1">Evolution:</label>
                                  </br>
                                  &nbsp; &nbsp; &nbsp; <input type="radio" class="form-check-input ev" name="select_ev" value="auto" >
                                      <label for="sel1">Auto</label>
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
                                      &nbsp; &nbsp; &nbsp; <input type="radio" class="form-check-input" name="select_ev" value="manuel">
                                      <label for="sel1"> Manuel</label>
                                      <input type="number"  min=0 class=" evolution" id="sel1" style="
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
                                      </input> &nbsp;<font size="5" >/</font>
                                    
                                      <input type="number" class=" heure" min=0 id="sel1"style="
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
                                        
                                      </input>
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
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/modif.js"></script>

    <script type="text/javascript">
        $n="<?php  echo $n;?>";
        $id_sem="<?php  echo $id_sem;?>";
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

            $id_annee="<?php foreach ($annee as $row) {echo $row->id_annee;} ?>";
    $(document).ready(
      function(){



planifications("<?php echo $id_sem ;?>","table_modif","table_entete_modif");

});
       



</script>
    
</body>

</html>
