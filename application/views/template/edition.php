

   

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edition</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Emplois du Temps</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 c">

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
                        <select class="form-control Cycle" id=""  style="width:  10%;">

                            <?php 
                                    foreach ($cycles as $row) {

                                        echo "<option id=".$row->id_cycle.">".$row->abreviation_cycle."</option>"; 

                                        } 
                            ?>

                        </select>&nbsp;&nbsp;
                    <label for="sel1" style="color: ">Parcour:</label>&nbsp;
                        <select class="form-control Parcour" id="sel1" style="width:  10%;"></select>&nbsp;&nbsp;
                    <label for="sel1" size="20"style="color:;   ">Niveau:</label>&nbsp;
                        <select class=" form-control Niveau" id="sel1"  style="width:  10%;"></select>&nbsp;
                            <!--button type="submit" class="btn" id="choix_ok" style=" background-color: green;">
                                <span style="color: white">OK</span>
                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                            <button type="submit" class="btn" id="pre" style=" background-color: green;">
                                <span style="color: white"><a style="color: white" class="bouton_precedent" href="">Precedente Editions</a></span>
                            </button>&nbsp;
                            <button type="submit" class="btn" id="edit" style=" background-color: green;">
                                <span style="color: white"><a style="color: white" class="bouton_n_edit" href="">Nouvel edttion</a></span>
                            </button>&nbsp;
                                                       
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
    $id_cycle=$("select.Cycle").children(".Cycle option:selected").attr('id');
    

    

  </script>

  <script src="<?php  echo base_url('assets/');?>sufee/assets/js/edition.js"></script>




</body>

</html>
