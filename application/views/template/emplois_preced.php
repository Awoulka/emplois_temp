   

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
                            <li class="active">Emplois du Temps / Precedents</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

            <div class="container col-sm-12  preced showback breadcrumbs" style="margin-top: 0px;">


                    <div class="row ">
                          <div class="col-sm-12">

                          <div class="message">
                                                      </div>
                          <div class="header_empl" style="margin-top:10px; margin-left: 0px;">
                            <button type="submit" class="btn btn-primary " id="pr" style="float: left; height: 35px;"><==</button>
                                  <button type="submit" class="btn btn-primary " id="sv" style="float: right;height: 32px; ">==></button>
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
                                                                <label for="sel1">Parcour et Niveau: <span class="pn">
                                                                <?php foreach ($n as $row) {
                                                                  echo $row->rendu;
                                                                } ?>
                                                                </span></label>&nbsp;

                                                                <!--select class="form-control PN" id="PN" ></select-->
                                                              </div>
                                                                
                                                      </div>
                                                        
                                                      <div class="col-sm-4"> 

                                                                  <div class="top"><p>   </p></div>
                                                                  <div class="top">   <h4>EMPLOI DU TEMPS</h4>   </div>

                                                          </div>   
                                                                  
                                                      <div class="col-sm-2">
                                                                  <div style="margin-top: 20px;">SEMESTRE: <span class="semestre"></span></div>
                                                              <div>Semaine: <span class="semaine"></span></div>
                                                              <div><span class="period"></span></div>
                                                                            
                                                              
                                                      </div>
                                                      
                                  </div>

                                              

                                          
                                      
                                                  

                                                              <table class="" style="margin-top: 20px;table-layout: fixed; border:0px 0px 0px 0px solid black; " id="table_entete_" width="100%">
                                                                  
                                                              </table>
                                                          
                                            
                                                    <table   class="table" style="table-layout: fixed; border: 0.1em  " id="table_" width="100%">
                                                      
                                                      
                                                    </table>
                                  
                                          
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
    <script src="<?php  echo base_url('assets/');?>sufee/assets/js/emplois_preced.js"></script>
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

   
        $n="<?php foreach ($n as $row) {echo $row->id_niv_par;} ?>";
    

  </script>




</body>

</html>
