<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GestEmploi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?php  echo base_url('assets/');?>sufee/favicon.ico">

    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/');?>sufee/vendors/jqvmap/dist/jqvmap.min.css">
    


   

   
    

</head>

<body>



     <?php 

                            if(isset($annees)) {
                                
                            
                        ?> 

            <table border="1" class="table table-bordered" style="width: 100%; border-collapse: collapse;">
                
                <tr >
                    
                    <td colspan="8"  align="center">
                        <font size="5" style="font-weight: bold;">
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
                    </font >
                    </td>
                </tr>
                
                <tr style="font-weight: bold;">
                    <td align="center">Code</td>
                    <td align="center">Intitule EC </td>
                    <td>Nom de l'enseignant</td>
                    <td align="center">CM</td>
                    <td align="center">TD</td>
                    <td align="center" colspan="2">TP</td>
                    <td align="center">Total des heures effectuees</td>
                </tr>
                <tr style="font-weight: bold;">
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
                <td colspan="8" align="center">
                    <font size="4" style="font-weight: bold;">
                    Semestre 

                    <?php 

                        foreach ($niv_par as $value) {

                            echo  $value->semestre[0]->semestre;break;
                        }
                    ?>
                </font>  
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
                    
                    <td colspan="8" align="center">
                        <font size="4" style="font-weight: bold;">
                            Semestre 

                        <?php 

                            foreach ($niv_par as $value) {

                                echo  $value->semestre[1]->semestre;break;
                            }
                        ?>
                         </font>   
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
            
        </table>

         <?php  
                                
                            }
                        ?> 

        </div> <!-- .content -->
        
    </div><!-- /#right-panel -->
   

    
    
    

</body>

</html>
