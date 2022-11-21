<!DOCTYPE html>
<html lang="en">
<head>
  <title>IUT Emploi du temp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/bootstrap.min.css">
  <script src="<?php  echo base_url();?>public/js/bootstrap.min.js"></script>

  <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url();?>public/js/jquery-ui.min.js"></script>
  <script src="<?php  echo base_url();?>public/js/script.js"></script>
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/style.css">
  
</head>
<body>

                      <?php
                          $espace="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                          $espace2="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        ?>
        
            <table cellpadding="1px"  class="  " align="center" style="width: 100% ; ">
                    
                      <tr>
                        
                        <td class="td" id="L1" colspan="2">
                        <font size="2">
                        IUT DE NGAOUNDERE<br>
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?><br>
                        Mention:<?php foreach ( $mention as $row) {echo " ".$row->abreviation_mention;}?><br>
                        Parcour et Niveau:<?php foreach ( $niv as $row) {echo " ".$row->rendu;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <center><h5>EMPLOI DU TEMPS</h5></center>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
                          SEMESTRE N°:<?php foreach ( $semestre as $row) {echo " ".$row->semestre;}?><br>
                          Semaine<?php foreach ( $semaine as $row) {foreach ( $semaine as $row) {echo " ".$row->numero."<br>";

                              $d=$row->debut;
                $f=$row->fin;
                     $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];

                if ($d[5].$d[6]==$f[5].$f[6]) {
                            $d=$d[8].$d[9];
                          }
                          else{
                                $d=$d[8]+$d[9]+" "+$mois[(int)$d[5]+(int)$d[6]];
                              }
                          $f=$f[8].$f[9]." ".$mois[(int)$f[5]+(int)$f[6]];

                          //alert(d+" au "+$f);
             echo "du ".$d." au ".$f;
                        }?>
                          
                        </center></font>
                          
                        </td>
                      </tr>
                      <tr>
                        <th width="90px"></th>
                        <td ></td>
                        <td ></td> 
                        <td width="50px"></td>
                        <td ></td>
                      </tr>

                      <tr>
                        <th width="90px"></th>
                        <td >8h</td>
                        <td >11h<?php echo $espace.$espace2."&nbsp;&nbsp;"; ?>13h</td> 
                        <td width="50px"></td>
                        <td >14h<?php echo $espace.$espace2; ?>17h</td>
                      </tr>
                      
                  </table>
      
          
                  <table border="1" cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse;" id="table" align="center">
                    
                      <tr style=" height: 50%;">
                        <th style="height: 7%; width: 10%"><center>Lundi</center></th>
                        <td class="td" id="L1" >
                        <font size="2"><p align="center">
                          <?php 

                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                        <td class="td" id="L2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td> 

                        <th rowspan=6 width="30px" style="width: 7%"></th>

                        <td class="td" id="L3">
                          
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                      </tr>

                      <tr>

                        <th><center>Mardi</center></th>

                        <td class="td" id="Ma1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                      </tr>
                      <tr>
                        <th ><center>Mercredi</center></th>

                        <td class="td" id="Me1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Me2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td>
                        </td>

                      </tr>
                      <tr>
                        <th><center>Jeudi</center></th>

                        <td class="td" id="J1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J2">

                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th style="height: 20px; width: 10%"><center>Vendredi</center></th>

                        <td class="td" id="V1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V3">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th><center>Samedi</center></th>

                        <td class="td" id="S1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="S2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                        <td></td>
                      </tr>


                  <table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pedagogique</td>
                        <td ><center>Chef de departement</center></td>
                      </tr>
                      
                  </table>
          

      


</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_template1 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2019 06:23:00 GMT -->

</html><!DOCTYPE html>
<html lang="en">
<head>
  <title>IUT Emploi du temp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/bootstrap.min.css">
  <script src="<?php  echo base_url();?>public/js/bootstrap.min.js"></script>

  <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url();?>public/js/jquery-ui.min.js"></script>
  <script src="<?php  echo base_url();?>public/js/script.js"></script>
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/style.css">
  
</head>
<body>

                      <?php
                          $espace="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                          $espace2="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        ?>
        
            <table cellpadding="1px"  class="  " align="center" style="width: 100% ; ">
                    
                      <tr>
                        
                        <td class="td" id="L1" colspan="2">
                        <font size="2">
                        IUT DE NGAOUNDERE<br>
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?><br>
                        Mention:<?php foreach ( $mention as $row) {echo " ".$row->abreviation_mention;}?><br>
                        Parcour et Niveau:<?php foreach ( $niv as $row) {echo " ".$row->rendu;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <center><h5>EMPLOI DU TEMPS</h5></center>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
                          SEMESTRE N°:<?php foreach ( $semestre as $row) {echo " ".$row->semestre;}?><br>
                          Semaine<?php foreach ( $semaine as $row) {echo " ".$row->numero;}?><br>
                          Du 08 au 13 juin
                        </center></font>
                          
                        </td>
                      </tr>
                      <tr>
                        <th width="90px"></th>
                        <td ></td>
                        <td ></td> 
                        <td width="50px"></td>
                        <td ></td>
                      </tr>

                      <tr>
                        <th width="90px"></th>
                        <td >8h</td>
                        <td >11h<?php echo $espace.$espace2."&nbsp;&nbsp;"; ?>13h</td> 
                        <td width="50px"></td>
                        <td >14h<?php echo $espace.$espace2; ?>17h</td>
                      </tr>
                      
                  </table>
      
          
                  <table border="1" cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse;" id="table" align="center">
                    
                      <tr style=" height: 50%;">
                        <th style="height: 7%; width: 10%"><center>Lundi</center></th>
                        <td class="td" id="L1" >
                        <font size="2"><p align="center">
                          <?php 

                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                        <td class="td" id="L2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td> 

                        <th rowspan=6 width="30px" style="width: 7%"></th>

                        <td class="td" id="L3">
                          
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                      </tr>

                      <tr>

                        <th><center>Mardi</center></th>

                        <td class="td" id="Ma1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                      </tr>
                      <tr>
                        <th ><center>Mercredi</center></th>

                        <td class="td" id="Me1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Me2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td>
                        </td>

                      </tr>
                      <tr>
                        <th><center>Jeudi</center></th>

                        <td class="td" id="J1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J2">

                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th style="height: 20px; width: 10%"><center>Vendredi</center></th>

                        <td class="td" id="V1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V3">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th><center>Samedi</center></th>

                        <td class="td" id="S1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="S2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                        <td></td>
                      </tr>


                  <table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pedagogique</td>
                        <td ><center>Chef de departement</center></td>
                      </tr>
                      
                  </table>
          

      


</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_template1 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2019 06:23:00 GMT -->

</html><!DOCTYPE html>
<html lang="en">
<head>
  <title>IUT Emploi du temp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/bootstrap.min.css">
  <script src="<?php  echo base_url();?>public/js/bootstrap.min.js"></script>

  <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url();?>public/js/jquery-ui.min.js"></script>
  <script src="<?php  echo base_url();?>public/js/script.js"></script>
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/style.css">
  
</head>
<body>

                      <?php
                          $espace="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                          $espace2="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        ?>
        
            <table cellpadding="1px"  class="  " align="center" style="width: 100% ; ">
                    
                      <tr>
                        
                        <td class="td" id="L1" colspan="2">
                        <font size="2">
                        IUT DE NGAOUNDERE<br>
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?><br>
                        Mention:<?php foreach ( $mention as $row) {echo " ".$row->abreviation_mention;}?><br>
                        Parcour et Niveau:<?php foreach ( $niv as $row) {echo " ".$row->rendu;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <center><h5>EMPLOI DU TEMPS</h5></center>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
                          SEMESTRE N°:<?php foreach ( $semestre as $row) {echo " ".$row->semestre;}?><br>
                          Semaine<?php foreach ( $semaine as $row) {echo " ".$row->numero;}?><br>
                          Du 08 au 13 juin
                        </center></font>
                          
                        </td>
                      </tr>
                      <tr>
                        <th width="90px"></th>
                        <td ></td>
                        <td ></td> 
                        <td width="50px"></td>
                        <td ></td>
                      </tr>

                      <tr>
                        <th width="90px"></th>
                        <td >8h</td>
                        <td >11h<?php echo $espace.$espace2."&nbsp;&nbsp;"; ?>13h</td> 
                        <td width="50px"></td>
                        <td >14h<?php echo $espace.$espace2; ?>17h</td>
                      </tr>
                      
                  </table>
      
          
                  <table border="1" cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse;" id="table" align="center">
                    
                      <tr style=" height: 50%;">
                        <th style="height: 7%; width: 10%"><center>Lundi</center></th>
                        <td class="td" id="L1" >
                        <font size="2"><p align="center">
                          <?php 

                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                        <td class="td" id="L2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td> 

                        <th rowspan=6 width="30px" style="width: 7%"></th>

                        <td class="td" id="L3">
                          
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                      </tr>

                      <tr>

                        <th><center>Mardi</center></th>

                        <td class="td" id="Ma1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                      </tr>
                      <tr>
                        <th ><center>Mercredi</center></th>

                        <td class="td" id="Me1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Me2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td>
                        </td>

                      </tr>
                      <tr>
                        <th><center>Jeudi</center></th>

                        <td class="td" id="J1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J2">

                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th style="height: 20px; width: 10%"><center>Vendredi</center></th>

                        <td class="td" id="V1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V3">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th><center>Samedi</center></th>

                        <td class="td" id="S1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="S2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                        <td></td>
                      </tr>


                  <table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pedagogique</td>
                        <td ><center>Chef de departement</center></td>
                      </tr>
                      
                  </table>
          

      


</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_template1 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2019 06:23:00 GMT -->

</html><!DOCTYPE html>
<html lang="en">
<head>
  <title>IUT Emploi du temp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/bootstrap.min.css">
  <script src="<?php  echo base_url();?>public/js/bootstrap.min.js"></script>

  <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url();?>public/js/jquery-ui.min.js"></script>
  <script src="<?php  echo base_url();?>public/js/script.js"></script>
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/style.css">
  
</head>
<body>

                      <?php
                          $espace="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                          $espace2="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        ?>
        
            <table cellpadding="1px"  class="  " align="center" style="width: 100% ; ">
                    
                      <tr>
                        
                        <td class="td" id="L1" colspan="2">
                        <font size="2">
                        IUT DE NGAOUNDERE<br>
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?><br>
                        Mention:<?php foreach ( $mention as $row) {echo " ".$row->abreviation_mention;}?><br>
                        Parcour et Niveau:<?php foreach ( $niv as $row) {echo " ".$row->rendu;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <center><h5>EMPLOI DU TEMPS</h5></center>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
                          SEMESTRE N°:<?php foreach ( $semestre as $row) {echo " ".$row->semestre;}?><br>
                          Semaine<?php foreach ( $semaine as $row) {echo " ".$row->numero;}?><br>
                          Du 08 au 13 juin
                        </center></font>
                          
                        </td>
                      </tr>
                      <tr>
                        <th width="90px"></th>
                        <td ></td>
                        <td ></td> 
                        <td width="50px"></td>
                        <td ></td>
                      </tr>

                      <tr>
                        <th width="90px"></th>
                        <td >8h</td>
                        <td >11h<?php echo $espace.$espace2."&nbsp;&nbsp;"; ?>13h</td> 
                        <td width="50px"></td>
                        <td >14h<?php echo $espace.$espace2; ?>17h</td>
                      </tr>
                      
                  </table>
      
          
                  <table border="1" cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse;" id="table" align="center">
                    
                      <tr style=" height: 50%;">
                        <th style="height: 7%; width: 10%"><center>Lundi</center></th>
                        <td class="td" id="L1" >
                        <font size="2"><p align="center">
                          <?php 

                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                        <td class="td" id="L2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td> 

                        <th rowspan=6 width="30px" style="width: 7%"></th>

                        <td class="td" id="L3">
                          
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                      </tr>

                      <tr>

                        <th><center>Mardi</center></th>

                        <td class="td" id="Ma1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                      </tr>
                      <tr>
                        <th ><center>Mercredi</center></th>

                        <td class="td" id="Me1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Me2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td>
                        </td>

                      </tr>
                      <tr>
                        <th><center>Jeudi</center></th>

                        <td class="td" id="J1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J2">

                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th style="height: 20px; width: 10%"><center>Vendredi</center></th>

                        <td class="td" id="V1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V3">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th><center>Samedi</center></th>

                        <td class="td" id="S1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="S2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                        <td></td>
                      </tr>


                  <table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pedagogique</td>
                        <td ><center>Chef de departement</center></td>
                      </tr>
                      
                  </table>
          

      


</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_template1 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2019 06:23:00 GMT -->

</html><!DOCTYPE html>
<html lang="en">
<head>
  <title>IUT Emploi du temp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/bootstrap.min.css">
  <script src="<?php  echo base_url();?>public/js/bootstrap.min.js"></script>

  <script src="<?php  echo base_url();?>public/js/jquery.min.js" text="text/javascript"></script>
  <script src="<?php  echo base_url();?>public/js/jquery-ui.min.js"></script>
  <script src="<?php  echo base_url();?>public/js/script.js"></script>
  <link rel="stylesheet" href="<?php  echo base_url();?>public/css/style.css">
  
</head>
<body>

                      <?php
                          $espace="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                          $espace2="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        ?>
        
            <table cellpadding="1px"  class="  " align="center" style="width: 100% ; ">
                    
                      <tr>
                        
                        <td class="td" id="L1" colspan="2">
                        <font size="2">
                        IUT DE NGAOUNDERE<br>
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?><br>
                        Mention:<?php foreach ( $mention as $row) {echo " ".$row->abreviation_mention;}?><br>
                        Parcour et Niveau:<?php foreach ( $niv as $row) {echo " ".$row->rendu;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <center><h5>EMPLOI DU TEMPS</h5></center>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
                          SEMESTRE N°:<?php foreach ( $semestre as $row) {echo " ".$row->semestre;}?><br>
                          Semaine<?php foreach ( $semaine as $row) {echo " ".$row->numero;}?><br>
                          Du 08 au 13 juin
                        </center></font>
                          
                        </td>
                      </tr>
                      <tr>
                        <th width="90px"></th>
                        <td ></td>
                        <td ></td> 
                        <td width="50px"></td>
                        <td ></td>
                      </tr>

                      <tr>
                        <th width="90px"></th>
                        <td >8h</td>
                        <td >11h<?php echo $espace.$espace2."&nbsp;&nbsp;"; ?>13h</td> 
                        <td width="50px"></td>
                        <td >14h<?php echo $espace.$espace2; ?>17h</td>
                      </tr>
                      
                  </table>
      
          
                  <table border="1" cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse;" id="table" align="center">
                    
                      <tr style=" height: 50%;">
                        <th style="height: 7%; width: 10%"><center>Lundi</center></th>
                        <td class="td" id="L1" >
                        <font size="2"><p align="center">
                          <?php 

                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                        <td class="td" id="L2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td> 

                        <th rowspan=6 width="30px" style="width: 7%"></th>

                        <td class="td" id="L3">
                          
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==1 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                        </p></font>
                        </td>

                      </tr>

                      <tr>

                        <th><center>Mardi</center></th>

                        <td class="td" id="Ma1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Ma3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==2 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                      </tr>
                      <tr>
                        <th ><center>Mercredi</center></th>

                        <td class="td" id="Me1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="Me2">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==3 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td>
                        </td>

                      </tr>
                      <tr>
                        <th><center>Jeudi</center></th>

                        <td class="td" id="J1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J2">

                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="J3">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==4 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th style="height: 20px; width: 10%"><center>Vendredi</center></th>

                        <td class="td" id="V1" style="height: 50px">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="V3">
                          <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==5 && $row->plage_id==3){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                      </tr>
                      <tr>
                        <th><center>Samedi</center></th>

                        <td class="td" id="S1" style="height: 50px">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==1){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>

                        <td class="td" id="S2">
                        <font size="2"><p align="center">
                          <?php 
                          foreach ( $planifications as $row) {
                            if($row->jour_id==6 && $row->plage_id==2){
                              echo $row->ec_id."<br>"; 
                           
                              foreach ($row->enseignant as $ligne ) {
                          echo $ligne->nom_prenom."/";
                          } 
                          echo "<br>".$row->salle_id.$espace.$row->evolution."/".$row->heure;  
                                
                            }} 
                            ?>
                            </p></font>
                        </td>
                        <td></td>
                      </tr>


                  <table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pedagogique</td>
                        <td ><center>Chef de departement</center></td>
                      </tr>
                      
                  </table>
          
</body>
</html>