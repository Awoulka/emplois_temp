

        <!--div class="breadcrumbs">
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
                            <li class="active">Tableau</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

    

            

      </div>
      

      <div class="contenaire box">
        <div class="table-responsive">
        
            <div class="tableau_excel">
              
            </div>
          <div class="" align="center">

            <h4 align="center" style="font-weight: bold;font-family: algerian; color: dodgerblue; "> <a href="<?php echo base_url('Excel_export/etat')?>" class="btn btn-default" style="color: black; ">
                       <SPAN class="fa fa-reply" style="color: black;"></SPAN> Retour
                    </a>
                    <br><br></h4>

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

            <table border="1" style="width: 100%; ">
                
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
                
                <tr style="font-weight: bold; font-size: 4;">
                    <td align="center">Code</td>
                    <td align="center">Intitule EC </td>
                    <td>Nom de l'enseignant</td>
                    <td align="center">CM</td>
                    <td align="center">TD</td>
                    <td align="center" colspan="2">TP</td>
                    <td align="center">Total des heures effectuees</td>
                </tr>
                <tr style="font-weight: bold;font-size: 4;">
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
                                     if ($n==0) {
                                         
                                         echo "<td align='center'></td>
                                        <td align='center'>".$value->h_cours."</td>
                                        <td align='center'>".$value->h_td."</td>
                                        <td align='center'>/</td>
                                        <td align='center'>".$value->h_tp."</td>";
                                    
                                        

                                            echo" <td align='center'rowspan='".($n+1)."'>".$value->evolution."/".$value->heure."</td>";
                                            $trouve=1;
                                        
                                    
                                       
                                            echo "<tr></tr>";
                                        
                                     }
                                     else{
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
                                            echo "<tr></tr>";
                                        }
                                              
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
                            
                            if ($n==0) {
                                         
                                         echo "<td align='center'></td>
                                        <td align='center'>".$value->h_cours."</td>
                                        <td align='center'>".$value->h_td."</td>
                                        <td align='center'>/</td>
                                        <td align='center'>".$value->h_tp."</td>";
                                    
                                        

                                            echo" <td align='center'rowspan='".($n+1)."'>".$value->evolution."/".$value->heure."</td>";
                                            $trouve=1;
                                        
                                    
                                       
                                            echo "<tr></tr>";
                                        
                                     }
                                     else{
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
    
    

</body>

</html>
