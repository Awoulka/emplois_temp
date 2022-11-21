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
                          $espace="";
                          $espace2="";
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
                              $mois_f = nice_date($row->fin, 'M');
                                if($mois_f == "Jan"){
                                  $intitule_f = "janvier";
                                }elseif($mois_f == "Feb"){
                                  $intitule_f = "février";
                                }elseif($mois_f == "Mar"){
                                  $intitule_f = "mars";
                                }elseif($mois_f == "Apr"){
                                  $intitule_f = "avril";
                                }elseif($mois_f == "May"){
                                  $intitule_f = "mai";
                                }elseif($mois_f == "Jun"){
                                  $intitule_f = "juin";
                                }elseif($mois_f == "Jul"){
                                  $intitule_f = "juillet";
                                }elseif($mois_f == "Aug"){
                                  $intitule_f = "août";
                                }elseif($mois_f == "Sep"){
                                  $intitule_f = "septembre";
                                }elseif($mois_f == "Oct"){
                                  $intitule_f = "octobre";
                                }elseif($mois_f == "Nov"){
                                  $intitule_f = "novembre";
                                }elseif($mois_f == "Dec"){
                                  $intitule_f = "décembre";
                                }

                                $mois_d = nice_date($row->debut, 'M');
                                if($mois_d == "Jan"){
                                  $intitule_d = "janvier";
                                }elseif($mois_d == "Feb"){
                                  $intitule_d = "février";
                                }elseif($mois_d == "Mar"){
                                  $intitule_d = "mars";
                                }elseif($mois_d == "Apr"){
                                  $intitule_d = "avril";
                                }elseif($mois_d == "May"){
                                  $intitule_d = "mai";
                                }elseif($mois_d == "Jun"){
                                  $intitule_d = "juin";
                                }elseif($mois_d == "Jul"){
                                  $intitule_d = "juillet";
                                }elseif($mois_d == "Aug"){
                                  $intitule_d = "août";
                                }elseif($mois_d == "Sep"){
                                  $intitule_d = "septembre";
                                }elseif($mois_d == "Oct"){
                                  $intitule_d = "octobre";
                                }elseif($mois_d == "Nov"){
                                  $intitule_d = "novembre";
                                }elseif($mois_d == "Dec"){
                                  $intitule_d = "décembre";
                                }
                              if(nice_date($row->debut,'m') == nice_date($row->fin, 'm')){
                                
                                
                                
                                
                                echo "du ".nice_date($row->debut,'d')." au ".nice_date($row->fin,'d')." ".$intitule_f;
                              }else{
                                echo "du ".nice_date($row->debut,'d')." ".$intitule_d." au ".nice_date($row->fin,'d')." ".$intitule_f;
                              }
                     /*$mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];

                if ($d[5].$d[6]==$f[5].$f[6]) {
                            $d=$d[8].$d[9];
                          }
                          else{
                                $d=$d[8]+$d[9]." ".$mois[(int)$d[5].$d[6]];
                              }
                          $f=$f[8].$f[9]." ".$mois[(int)$f[5].$f[6]];*/

                          //alert(d+" au "+$f);
             
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

                                               echo"<td>".$tableau[$i][1][0].$tableau[$i][1][1]."h".$tableau[$i][1][3].$tableau[$i][1][4]."<div align='right' style='float: right;'>".$tableau[$i][2][0].$tableau[$i][2][1]."h".$tableau[$i][2][3].$tableau[$i][2][4]."</div></td>";
                                   

                                            }
                                          else{
                                                 echo"<td>".$tableau[$i][1][0].$tableau[$i][1][1]."h".$tableau[$i][1][3].$tableau[$i][1][4]."</td>";
                                     

                                          }
                                        }
                                          else{
                                            echo"<td width='30px' style='width: 3%'></td>";
                                            
                                          }

                                  };
                                 

                     echo "</tr></table>";

                     echo "<table border='0' cellpadding='0px'  class='' style='table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse; padding:0px' id='table' align='center'>";
 

  for ( $i = 0; $i < 6 ; $i++) {


      echo"<tr style='table-layout: fixed; border: 0.1em solid '><th rowspan=2 style='height: 9%; width: 7%; border: 0.1em solid '' width='100px'><center>".$tableau_jour[$i]."</center></th>";

      for ( $j = 0; $j < count($tableau)-1 ; $j++) {
                                            
          if ($i==0) {
                                            if($tableau[$j][0]=="cour"){
                                            echo "<td class='td' style='table-layout:table-layout: fixed; border-top: 0.1em solid;border-right: 0.1em solid; padding-top:-10px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,' > <font size='1'><p align='center' style='font-size:8;line-height:13px; letter-spacing:0.75px;line-height:17px; font-familly: algerian;'>";
                        foreach ( $planifications as $value) {
                            if($value->jour_id==$i+1 && $value->plage_id==$j+1){

                              if ($value->type_planing =="BIBLIOTHEQUE" || $value->type_planing=="Congé" || $value->type_planing=="INVEST_HUMAIN" || $value->type_planing=="PROJET") {

                                  echo "<font size='3'>".$value->type_planing."<font size='1'>";
                              }
                              else{

                                  echo $value->ec_id[0]->code_ec."(".$value->ec_id[0]->intitule_ec.")<br>"; 
                           if ($value->type_planing=="Cour") {
                              if ($value->ens_prog) {
                              
                                  foreach ($value->enseignant as $ligne ) {
                                    
                                if ($ligne->id_personnel==$value->ens_prog){
                                  //  echo $ligne->nom_prenom;

                                    $nom = explode(" ", $ligne->nom_prenom);
                                    echo $nom[0]."&nbsp; ".$nom[1];
                                   
                                  
                                } 
                                
                                
                                } 
                            }
                            else{
                                  $f=1;
                                  foreach ($value->enseignant as $ligne ) {
                                    
                                if ($f==1){
                                   // echo $ligne->nom_prenom;
                                    $nom1 = explode(" ", $ligne->nom_prenom);
                                   echo $nom1[0]."&nbsp; ".$nom1[1];
                                   
                                }
                                else{

                                //  echo " / ".$ligne->nom_prenom;
                                  $nom = explode(" ", $ligne->nom_prenom);
                                  echo " / ".$nom[0]."&nbsp; ".$nom[1];
                                 
                                }
                                $f++;
                                
                                } 


                            }

                            
                           
                            
                           }
                           else{
                            if ($value->type_planing =="SYNTHESE" || $value->type_planing=="RATRAPAGE" ) {
                              echo $value->type_planing;
                            
                            }
                            else{
                              echo $value->type_planing;
                              

                          
                            }
                            
                           }
                                          }
                                        }


                                    }  
                                 echo "</p></font>
                                            </td>";
                                              }
                                            else{
                                              
                                              echo "<td style='table-layout: fixed; border: 0.1em solid ; width: 2%' rowspan='12' width='40px'></td>";
                                            }
          }
          else{

               

                                            if ($tableau[$j][0]!="pause") {                                            
                                            

                                               echo "<td class='td' style='table-layout:table-layout: fixed; border-top: 0.1em solid;border-right: 0.1em solid; padding-top:-10px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,' > <font size='1'><p align='center' style='font-size:8;line-height:13px; letter-spacing:0.75px;line-height:17px; font-familly: algerian;'>";


                                              foreach ( $planifications as $value) {
                            if($value->jour_id==$i+1 && $value->plage_id==$j+1){

                              if ($value->type_planing =="BIBLIOTHEQUE" || $value->type_planing=="Congé" || $value->type_planing=="INVEST_HUMAIN"|| $value->type_planing=="PROJET") {

                                  echo "<font size='3'><b>".$value->type_planing."</b><font size='1'>";
                              }
                              else{

                                  echo $value->ec_id[0]->code_ec."(".$value->ec_id[0]->intitule_ec.")<br>"; 
                           if ($value->type_planing=="Cour") {
                             if ($value->ens_prog) {
                              
                                  foreach ($value->enseignant as $ligne ) {
                                    
                                if ($ligne->id_personnel==$value->ens_prog){
                                  //  echo $ligne->nom_prenom;
                                    $nom = explode(" ", $ligne->nom_prenom);
                                   echo $nom[0]."&nbsp; ".$nom[1];
                                  
                                   
                                }
                                
                                
                                } 
                            }
                            else{
                                  $f=1;
                                  foreach ($value->enseignant as $ligne ) {
                                    
                                if ($f==1){
                                  //  echo $ligne->nom_prenom;
                                    $nom = explode(" ", $ligne->nom_prenom);
                                    echo $nom[0]."&nbsp; ".$nom[1];
                                   
                                }
                                else{

                                //  echo " / ".$ligne->nom_prenom;
                                  $nom = explode(" ", $ligne->nom_prenom);
                                  echo " / ".$nom[0]."&nbsp; ".$nom[1];
                                 
                                }
                                $f++;
                                
                                } 


                            }
                           
                          
                           }
                           else{
                            if ($value->type_planing =="SYNTHESE" || $value->type_planing=="RATRAPAGE" ) {
                              echo "<b>".$value->type_planing."</b>";
                           
                            }
                            else{
                              echo "<b>".$value->type_planing."</b>";

                              
                              
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
                                            
    echo "</tr>";
    echo "<tr style='table-layout: fixed; border-bottom: 0.1em solid ; ' height='20%'>";


    for ( $j = 0; $j < count($tableau)-1 ; $j++) {
                                            
          if ($i==0) {
                                            if($tableau[$j][0]=="cour"){
                                            echo "<td class='td'  style='table-layout:table-layout: fixed; border-bottom: 0.1em solid;border-right: 0.1em solid;padding-top:-10px; padding-bottom:0px; padding-left:2px; padding-right:2px; ,' > <font size='1'><p align='center' style='font-size:8;line-height:5px; letter-spacing:0.75px;line-height:17px; font-familly: algerian;'>";
                        foreach ( $planifications as $value) {
                            if($value->jour_id==$i+1 && $value->plage_id==$j+1){

                              if ($value->type_planing =="BIBLIOTHEQUE" || $value->type_planing=="Congé" || $value->type_planing=="INVEST_HUMAIN" || $value->type_planing=="PROJET") {

                                  
                              }
                              else{

                                   
                           if ($value->type_planing=="Cour") {
                              

                            
                            if ($value->groupe!=0) {
                           echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5>"."<font color='white'>-</font>"."</i></font>";
                            
                            if ($value->heure_definit==0) {
                             
                             echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }


                            
                             echo "<br><br><br><font size='2'><i size=5>Groupe ".$value->groupe."</i></font>";
                            
                          
                            
                          }
                            else{

                             
                              echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5> "."<font color='white'>-</font>"."</i></font>";

                              if ($value->heure_definit==0) {
                             
                            echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right;padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }


                             
                            }
                           }
                           else{
                            if ($value->type_planing =="SYNTHESE" || $value->type_planing=="RATRAPAGE" || $value->type_planing=="PROJET") {
                             
                            echo "<b>".$value->salle_id."</b>";
                            }
                            else{
                              
                            if ($value->groupe!=0) {
                           echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5>"."<font color='white'>-</font>"."</i></font>";
                            
                            if ($value->heure_definit==0) {
                             
                             echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }


                            
                             echo "<br><br><br><font size='2'><i size=5>Groupe ".$value->groupe."</i></font>";
                            
                          
                            
                          }
                            else{

                               
                              echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5> "."<font color='white'>-</font>"."</i></font>";

                              if ($value->heure_definit==0) {
                             
                            echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right;padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }

                             
                            }
                            }
                            
                           }
                                          }
                                        }


                                    }  
                                 echo "</p></font>
                                            </td>";
                                              }
                                            else{
                                              
                                              
                                            }
          }
          else{

               

                                            if ($tableau[$j][0]!="pause") {                                            
                                            

                                               echo "<td class='td' style='table-layout:table-layout: fixed;border-bottom: 0.1em solid;border-right: 0.1em solid;padding-top:-10px; padding-bottom:0px; padding-left:2px; padding-right:2px; ,' > <font size='1'><p align='center' style='font-size:8;line-height:5px; letter-spacing:0.75px;line-height:17px; font-familly: algerian;'>";


                                              foreach ( $planifications as $value) {
                            if($value->jour_id==$i+1 && $value->plage_id==$j+1){

                              if ($value->type_planing =="BIBLIOTHEQUE" || $value->type_planing=="Congé" || $value->type_planing=="INVEST_HUMAIN" || $value->type_planing=="PROJET") {

                                 
                              }
                              else{

                                   
                           if ($value->type_planing=="Cour") {
                              
                           if ($value->groupe!=0) {
                           echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5>"."<font color='white'>-</font>"."</i></font>";
                            
                            if ($value->heure_definit==0) {
                             
                             echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }


                            
                             echo "<br><br><br><font size='2'><i size=5>Groupe ".$value->groupe."</i></font>";
                            
                          
                            
                          }
                            else{

                              echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5> "."<font color='white'>-</font>"."</i></font>";

                              if ($value->heure_definit==0) {
                             
                            echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right;padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }

                             
                            }
                           }
                           else{
                            if ($value->type_planing =="SYNTHESE" || $value->type_planing=="RATRAPAGE" ) {
                              
                            echo "<b>".$value->salle_id."</b>";
                            }
                            else{
                              
                              if ($value->groupe!=0) {
                            echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5>"."<font color='white'>-</font>"."</i></font>";
                            
                            if ($value->heure_definit==0) {
                             
                            echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }


                            
                             echo "<br><br><br><font size='2'><i size=5>Groupe ".$value->groupe."</i></font>";
                            
                            
                          }
                            else{

                             
                              echo "<b style='float: left; padding-left:10px;'>".$value->salle_id."</b>
                          ";
                             echo "<font size='2'><i size=5> "."<font color='white'>-</font>"."</i></font>";

                              if ($value->heure_definit==0) {
                             
                            echo "<b style='float: right; padding-right:10px;'>".$value->evolution."/".$value->heure."</b>";

                            }
                            else{
                              echo "<b style='float: right;padding-right:10px;'>".$value->evolution."/".$value->heure_definit."</b>";
                            }

                             
                            }
                            

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
                                            
    echo "</tr>";




 }

                                          
                                      
                                      

                                  

                   echo "</table>";
?>
<table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"></th>
                        <td >Responsable pédagogique</td>
                        <td ><center>Chef de département</center></td>
                      </tr>
                      
                                    <!-- td class='td' style='table-layout:table-layout: fixed; border: 0.1em solid;height: %; padding-top:-15px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,'></td>
              <td td class='td' style='table-layout:table-layout: fixed; border: 0.1em solid;height: %; padding-top:-15px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,'></td>
              <td td class='td' style='table-layout:table-layout: fixed; border: 0.1em solid;height: %; padding-top:-15px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,'></td>
              <td td class='td' style='table-layout:table-layout: fixed; border: 0.1em solid;height: %; padding-top:-15px; padding-bottom:-15px; padding-left:2px; padding-right:2px; ,'></td-->
                  </table>
                  <table style="width: 100%; margin-top: 10px;">
                  <tr>
                        <th width="90px"><font style="color: gray;">by SIGI</font></th>
                        <td ></td>
                        
                      </tr>
                      
                  </table>
</body>