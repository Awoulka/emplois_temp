
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
                          $espace3="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
                          ";
                        ?>
        
            <table cellpadding="1px"  class="  " align="center" style="width: 100% ; ">
                    
                      <tr>
                        
                        <td class="td" id="L1" colspan="2">
                        <font size="2">
                        IUT DE NGAOUNDERE<br>

                        
                        Année Academique <?php foreach ( $annee as $row) {echo " ".$row->annee;}?>
                        </font>
                        </td>
                        <td class="td" id="L2" >
                        <center><h5>EMPLOI DU TEMPS DE <?php
                         foreach ( $enseignant as $row) {echo "<br>".$row->nom_prenom;}
                         ?>
                        
                        </h5></center>
                        </td> 
                        <td class="td" id="L3" colspan="2">
                        <font size="2"><center>
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
               <br>
               <br>
              
          <table  cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; border-collapse: collapse; margin-top: 0px;" id="table" align="center">

            <?php
            
               echo "<tr><td style='width: 6% ;'></td>";
                     for ($j=0; $j <($heure_fin-$heure_debut); $j++) { 
                      if ($j+1!=($heure_fin-$heure_debut)) {
                       echo "<td>".($heure_debut+$j)."h</td>";
                      }
                      else{
                        echo "<td>".($heure_debut+$j)."h<div style='float: right;'>".($heure_fin)."h</div></td>";
                      }
                          
                        }   
               echo "</tr>";
             

            ?>
          </table>
                  <table border="1" cellpadding="0px"  class="" style="table-layout:fixed; width: 100% ; height: 10%; border-collapse: collapse;" id="table" align="center">
                    
              <?php
          function  recherche($tab,$id)
                {
                  for ($i=0; $i <count($tab) ; $i++) { 
                   if ($id==$tab[$i]) {
                     return FALSE;
                   }
                  }
                  return TRUE ;
                }

                $tab1=[0];
                $f=0;
                $ff=1;
                foreach ($jour as $key) {
                  if ($ff==$key->num_jour) {
                   $tab1[$f]=$key->intitule_jour;
                 $f++;
                  }
                  $ff++;
                 
                }
                
                 $plag=[0];
               
                 foreach ($jour as$value) {
                    $f=0;
                    $chevaussement=1;
                 foreach ($planifications as $row) {
                          if ($row->jour_id==$value->id_jour ) {

                     $plag[$f]=[($row->plages[0]->heure_debut[0].$row->plages[0]->heure_debut[1]),($row->plages[0]->heure_fin[0].$row->plages[0]->heure_fin[1])];
                             $f++;    
                            }

                             }
                        for ($i=0; $i <count($plag) ; $i++) {
                           for ($j=1; $j <count($plag); $j++) { 
                              if ( $plag[$i][0]>$plag[$j][0]) {
                                  $plus_petit=$plag[$i][0];
                                  $plag[$i][0]=$plag[$j][0];
                                  $plag[$j][0]=$plus_petit;
                              }
                              
                            } 
                            
                          }
                          for ($i=0; $i <count($plag) ; $i++) { 
                            if ($i+1<count($plag)&&$plag[$i][1]>$plag[$i+1][0]) {
                                $chevaussement+=1;
                              }
                          }
                            
                           $value->c =$chevaussement;
                            $plag=[0];
                          }
                 
              for ($i=1; $i <=6 ; $i++) { 
               
          //    foreach ($planifications as $row) {
              foreach ($jour as $value) {
                $min_jour=$heure_debut;
                $id_planification=[0];
                $p=0;
                 if ($i==$value->num_jour) {
                 
                
                echo "<tr id='".$value->id_jour."'><th rowspan='".$value->c."' style='height: 5%; width: 7%' width='100px''><center><b>".$value->intitule_jour."</b></center></th>";
                      
                     for ($j=1; $j <=($heure_fin-$heure_debut) ; $j++) {
                     $trouve=0; 
                     $plage=0;
                     $salle_id=0;
                        foreach ($planifications as $row) {

                          if ($row->jour_id==$value->id_jour && $plage!=$row->plages[0]->id_plage && $salle_id!=$row->salle_id && ($row->plages[0]->heure_debut[0].$row->plages[0]->heure_debut[1])==$min_jour && recherche($id_planification,$row->id_plannification)) {
                             $trouve=1;
                             $id_planification[$p]=$row->id_plannification;
                             $p+=1;
                            echo "<td align='center' colspan='".$row->plages[0]->duree."'><font size='1'><b>".$row->ec[0]->intitule_ec."<br>".$row->evolution."/".$row->ec[0]->heure."<br>".$row->salle."</b></font></td>";
                            $j+=(int)$row->plages[0]->duree-1;
                            $min_jour+=$j;
                            $plage=$row->plages[0]->id_plage;
                            $salle_id=$row->salle_id;
                             
                          }
                        // else{$trouve=0;}
                         
                   }
                    if($trouve!=1){
                             echo"<td></td>";
                             $min_jour+=1;
                            }
                            
                          }
  
                         for ($k=1; $k <$value->c ; $k++) { 
                          $min_jour=$heure_debut;
                             echo "</tr><tr>";
                                   for ($j=1; $j <=($heure_fin-$heure_debut) ; $j++) {
                     //$trouve=0;   
                                    $trouve=0;
                                    $plage=0;
                                    $salle_id=0;
                        foreach ($planifications as $row) {
                           if ( $row->jour_id==$value->id_jour && $plage!=$row->plages[0]->id_plage && $salle_id!=$row->salle_id && ($row->plages[0]->heure_debut[0].$row->plages[0]->heure_debut[1])==$min_jour && recherche($id_planification,$row->id_plannification) ){

                             $trouve=1;
                              $id_planification[$p]=$row->id_plannification;
                             $p+=1;
                            echo "<td colspan='".$row->plages[0]->duree."' align='center'><font size='1'><b>".$row->ec[0]->intitule_ec."<br>".$row->evolution."/".$row->ec[0]->heure."<br>".$row->salle."</b></font></td>";
                            $j+=(int)$row->plages[0]->duree-1;
                             $min_jour+=$j;
                            $plage=$row->plages[0]->id_plage;
                            $salle_id=$row->salle_id;
                             
                          }
                   }
                    if($trouve!=1){
                             echo"<td></td>";
                               $min_jour+=1;
                            }
                            if ($j>($heure_fin-$heure_debut)) {
                            break;
                            }
                          }
                        
               echo "</tr>";
              }
            }}
          }
          
        ?>
      </table>
      </body>
</html>