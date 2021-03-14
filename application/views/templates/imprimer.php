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
                        <font size="3"style='padding: 0px'>
                        IUT DE NGAOUNDERE<br>
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?><br>
                        Mention:<?php foreach ( $mention as $row) {echo " ".$row->abreviation_mention;}?><br>
                        Parcour et Niveau:<?php foreach ( $niv as $row) {echo " ".$row->rendu;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <h2>EMPLOI DU TEMPS</h2>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
                          SEMESTRE N°:<?php foreach ( $semaine as $row) {echo " ".$row->semestre[0]->semestre;}?><br>
                          Semaine<?php 

                          foreach ( $semaine as $row) {echo " ".$row->numero."<br>";

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
                        }

                        ?>
                          

                        
                        </center></font>
                          
                        </td>
                      </tr>
                      
                  </table>


                  <?php
                  $t=0;
                  $tableau_jour=["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
 
                foreach ( $plages as $row) {
                 $t++;
              }
              foreach ( $plages as $row) {
                  $tableau[$row->num_plage-1]= [$row->intitule_plage,$row->heure_debut,$row->heure_fin,$row->id_plage,$row->num_group];
              }
               $tableau[$t]=null;   
                  
                  echo "<table cellpadding='1px'   align='center' style='width: 100% ; table-layout: fixed; border:0px 0px 0px 0px solid black; margin-top:10px;'><tr><th style=' width: 7%' width='100px'></th>";
                  

                                  for ( $i = 0; $i < count($tableau)-1 ; $i++) {

                                          if($tableau[$i][0]=="cour"){

                      
                                            if(($tableau[$i+1]!=null && $tableau[$i+1][0]=="pause") || $tableau[$i+1]==null){

                                               echo"<td>".$tableau[$i][1][0].$tableau[$i][1][1]."h<div align='right' style='float: right;'>".$tableau[$i][2][0].$tableau[$i][2][1]."h</div></td>";
                                   

                                            }
                                          else{
                                                 echo"<td>".$tableau[$i][1][0].$tableau[$i][1][1]."h</td>";
                                     

                                          }
                                        }
                                          else{
                                            echo"<td width='30px' style='width: 3%'></td>";
                                            
                                          }

                                  };
                                 

                     echo "</tr></table>";

                     echo "<table border='1' cellpadding='0px'  class='' style='table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse; padding:0px' id='table' align='center'>";
 

                     for ( $i = 0; $i < 6 ; $i++) {


                                     echo"<tr style='table-layout: fixed; border: 0.1em solid '><th style='height: 9%; width: 7%' width='100px'><center>".$tableau_jour[$i]."</center></th>";

                                     for ( $j = 0; $j < count($tableau)-1 ; $j++) {
                                            
                                          if ($i==0) {
                                            if($tableau[$j][0]=="cour"){
                                            echo "<td class='td' style='table-layout:table-layout: fixed; border: 0.1em solid; padding-top:-15px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,' > <font size='1'><p align='center' style='font-size:8;line-height:13px; letter-spacing:0.75px; font-familly: algerian;'>";
                        foreach ( $planifications as $value) {
                            if($value->jour_id==$i+1 && $value->plage_id==$j+1){

                              if ($value->type_planing =="BIBLIOTHEQUE" || $value->type_planing=="Congé" || $value->type_planing=="INVESTISSEMENT HUMAIN") {

                                  echo "<font size='3'>".$value->type_planing."<font size='1'>";
                              }
                              else{

                                  echo $value->ec_id[0]->code_ec."(".$value->ec_id[0]->intitule_ec.")<br>"; 
                           if ($value->type_planing=="Cour") {
                              foreach ($value->enseignant as $ligne ) {
                                echo $ligne->nom_prenom;
                            if ($ligne->nom_prenom==$value->enseignant[0]->nom_prenom && !is_null($value->enseignant[0]->nom_prenom) ){
                             echo " / ";
                            }
                            
                            
                            } 
                            echo "<br>".$value->salle_id.$espace.$value->evolution."/".$value->heure;
                           }
                           else{
                            if ($value->type_planing =="SYNTHESE" || $value->type_planing=="RATRAPAGE" || $value->type_planing=="PROJET") {
                              echo $value->type_planing;
                            echo "<br>".$value->salle_id;
                            }
                            else{
                              echo $value->type_planing;
                            echo "<br>".$value->salle_id.$espace.$value->evolution."/".$value->heure;
                            }
                            
                           }
                                          }
                                        }


                                    }  
                                 echo "</p></font>
                                            </td>";
                                              }
                                            else{
                                              
                                              echo "<td style='table-layout: fixed; border: 0.1em solid ; width: 2%' rowspan='6' width='40px'></td>";
                                            }
                                          }
                                          else{

                                            if ($tableau[$j][0]!="pause") {                                            
                                            

                                               echo "<td class='td' style='table-layout:table-layout: fixed; border: 0.1em solid; padding-top:-15px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,' > <font size='1'><p align='center' style='font-size:8;line-height:13px; letter-spacing:0.75px; font-familly: algerian;'>";


                                              foreach ( $planifications as $value) {
                            if($value->jour_id==$i+1 && $value->plage_id==$j+1){

                              if ($value->type_planing =="BIBLIOTHEQUE" || $value->type_planing=="Congé" || $value->type_planing=="INVESTISSEMENT HUMAIN") {

                                  echo "<font size='3'>".$value->type_planing."<font size='1'>";
                              }
                              else{

                                  echo $value->ec_id[0]->code_ec."(".$value->ec_id[0]->intitule_ec.")<br>"; 
                           if ($value->type_planing=="Cour") {
                              foreach ($value->enseignant as $ligne ) {
                            echo $ligne->nom_prenom;
                            if ($ligne->nom_prenom==$value->enseignant[0]->nom_prenom && !is_null($value->enseignant[0]->nom_prenom) ){
                             echo " / ";
                            }
                            } 
                            echo "<br>".$value->salle_id.$espace.$value->evolution."/".$value->heure;
                           }
                           else{
                            if ($value->type_planing =="SYNTHESE" || $value->type_planing=="RATRAPAGE" || $value->type_planing=="PROJET") {
                              echo $value->type_planing;
                            echo "<br>".$value->salle_id;
                            }
                            else{
                              echo $value->type_planing;
                            echo "<br>".$value->salle_id.$espace.$value->evolution."/".$value->heure;
                            }
                            
                           }
                                          }
                                        }


                                    } 
                            echo "</p></font>
                                            </td>";
                                              }
                                            

                                          }
                                            
                                          }

                                          
                                      }
                                      echo "</tr>";

                                  

                   echo "</table>";
?>
<table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pedagogique</td>
                        <td ><center>Chef de departement</center></td>
                      </tr>
                      
                  </table>
</body>