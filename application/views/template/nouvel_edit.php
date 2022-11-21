


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edition  <button  type='submit' class='btn  Retour' id="+ 
                              data[i][0].id_semaine +" style='border-color: blue; border-radius: : ' ><a href="<?php  echo base_url();?>choix/edition" style='color:blue'>Retour</a></button></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Emplois du Temps / Nouvelle Edition</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
&nbsp;&nbsp;&nbsp;NB: Pour L'édition des plages avec des groupes : l'entrée des valeurs de l'évolution du cours doit etre faite manuellement manuellement
        <div class="content mt-3 c">


             <div class=" col-sm-12  nn_edit showback breadcrumbs" style=" margin-top: 0px;">
                                            
                <div class="header_emploi" style="margin-top:0px; margin-left: 0px;">

                    <div class="row ">

                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-4">

                            <div style="margin-top: 20px;">IUT DE NGAOUNDERE
                            </div>
                            <div>Année Academique <?php foreach ($annee as $row) {echo $row->annee;} ?>
                            </div>
                            <div>Cycle:<?php foreach ($cycle as $row) {echo $row->abreviation_cycle;} ?> 
                                                      
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

                                <label for="sel1">Parcour et Niveau:<span class="pn">
                                            <?php foreach ($n as $row) {
                                                           echo $row->rendu;
                                                  } ?>
                                                                
                                </span>
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

                                                  
                            
                        </div>
                        <div class="col-sm-3">

                            <!-- <table   class="" style="table-layout: fixed; border: 0.1em  "    id="" width="87%" height="50%" cellpadding="1" cellspacing="-20">
                                                            
                                                             
                                <tr>
                                    <td class="" id="" ><p align="right" style="padding-top: 10px">SEMESTRE:</p>
                                    </td>
                                    <td class="" id="" colspan="2">
                                        <select class="form-control Semestre" id=""  style=" float: right; height: 35px; width: 100px;margin-left: -15px;">
                                        </select>
                                    </td> 
                                              
                                </tr>
                                <tr>
                                    <td class="" id="" ><p align="right" style="padding-top: 10px">Semaine:&nbsp;&nbsp;&nbsp;</p>
                                    </td>
                                    <td class="" id=""> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input num_sem" name="select_num_sem" value="auto" style=" float: right; height: 35px">
                                      <label for="sel1" style=" float: ; height: 35px">Auto</label>

                                      <select class="form-control sem" id="sel1" style=" float: right; height: 35px">
                                                <option>1</option>
                                        </select>
                                    
                                        
                                        
                                    </td> 
                                    <td class="" id="" >
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input num_sem" name="select_num_sem" value="manuel" style=" float: right; height: 35px">
                                      <label for="sel1" style=" float: right; height: 35px">Manuel</label>
                                        <input type="text"  class="form-control sem" id="sel1" style=" float: right; height: 35px">
                                              
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" id="" colspan="2"> <p align="center">Periode: </p>
                                    </td>

                                <tr> 
                                  <td colspan="2" class="period">
                                        <select class="form-control  periode" id="periode" style=" float: right; height: 35px;width: 200px">
                                            <option id=""></option>
                                        </select></td> 
                                </tr>    
                            </table> -->



                                                                
                                                       
                                <div class="col-sm-12" style="padding-top: 10px">
                                    <div class="row">
                                    <div class="col-sm-5"  align="left" style="padding-top: 0px">Semestre:</div>
                                    
                                    <div class="col-sm-5" class="" id="" >
                                        <select class="form-control Semestre" id=""  style=" float: left; height: 35px; width: px;margin-left: -15px;">
                                        </select>
                                    </div>
                                    <div class="col-sm-2" class="" id="" >
                                       
                                    </div>

                                    </div> 
                                              
                                </div>
                                <div class="col-sm-12" style="padding-top: 7px">
                                    <div class="row">
                                        <div class="col-sm-12" id="" >Semaine:&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>

                                        <div class="row">
                                        <div class="col-sm-12">
                                        <div class="col-sm-6" id=""> 
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input num_sem" name="select_num_sem" value="auto" style=" float: right; height: 35px">
                                          <label for="sel1" style=" float: ; height: 35px">Auto</label>

                                          <select class="form-control sem" id="sel1" style=" float: right; height: 35px">
                                                    <option>1</option>
                                            </select>
                                        
                                            
                                            
                                        </div> 
                                        <div class="col-sm-6" id="" >
                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" class="form-check-input num_sem" name="select_num_sem" value="manuel" style=" float: right; height: 35px">
                                          <label for="sel1" style=" float: right; height: 35px">Manuel</label>
                                            <input type="text"  class="form-control sem" id="sel1" style=" float: right; height: 35px">
                                                  
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="padding-top: 7px">
                                    <div class=""> Periode: 
                                    </div>

                                
                                  <div class="period">
                                        <select class="form-control  periode" id="periode" style=" float: right; height: 35px;width: 200px">
                                            <option id=""></option>
                                        </select></div> 
                                    
                            </div>
                                                  
                        

                        
                </div>

                <div class="col-sm-12" style="padding-top: 10px">

                        <table class="" style="table-layout: fixed; border:0px 0px 0px 0px solid black; " id="table_entete" width="100%">
                                                      
                        </table>
                                              
                        <table   class="table" style="table-layout: fixed; ; " id="table" width="100%">
                                          
                        </table>
                        
                        <button type="submit" class="btn btn-primary top" id="Imprimer" style="float: right; ">Enregistrer
                        </button>

                </div>


                <div class="col-sm-12 " style="top:15px;">

                        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 20px;" align=""> En attente</h6>
                        <table id="bootstrap-data-table-export" class="table  table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                                
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 15%;">N° Semaine
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Periode
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 35%;">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="tableau1"> 
                            </tbody>
                        </table>
                        


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



                    <div class="modal  choix" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true"  style="margin-right:  7% ;">
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

                                 <!--label for="sel1">&nbsp; Plannification:</label>
                                      <select class=" planning" id="sel1" style="
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
                                        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"  >
                                        <option id='nul'></option>
                                        
                                      </select-->
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
                                      
                                      <label for="sel1" style="margin-left:0%;">&nbsp; UE:</label>
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

                                       </br></br>
                                        &nbsp; &nbsp;
                                        <span class="ens_absent" ></span>
                                      <span for="sel1">&nbsp;Enseignant :</span>
                                      <span class="ens"></span>

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
                                      &nbsp; &nbsp; &nbsp; <input type="radio" class="form-check-input ev_m" name="select_ev" value="manuel">
                                      <label for="sel1"> Manuel</label>
                                      <input type="number"  class=" evolution" id="sel1" min=0 style="
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
                                    
                                      <input type="number" class=" heure" id="sel1" min=0 style="
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
    $id_niv="<?php foreach ($n as $row) {echo $row->id_niv_par;} ?>";


    id_annee="<?php foreach ($annee as $row) {echo $row->id_annee;} ?>";
    $id_cycle="<?php foreach ($cycle as $row) {echo $row->id_cycle;} ?>";



    

  </script>
 <script src="<?php  echo base_url('assets/');?>sufee/assets/js/n_edit.js"></script>



</body>

</html>
