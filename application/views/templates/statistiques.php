


   
     
     <div style="position: absolute; left: 20%; top: 8%; right:20%; " >
          <!--label for="sel1" >Mention:</label>&nbsp;
          <select class=" Mention " id="sel1" >
            <option id="null"></option>
            <?php foreach ($mentions as $row) {
              echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
            } ?>
          </select>

            <label for="sel1">Parcour:</label>&nbsp;
            <select class="Parcour" id="sel1"></select>
            <label for="sel1">Niveau:</label>&nbsp;
            <select class="Niveau" id="sel1"></select>
            <label for="sel1">semestre:</label>&nbsp;
            <select class="semestre" id="sel1"></select-->
         </div>  
        



 <div class=" col-sm-12 form-group choixPN showback" style="display: flex;
                                                                  -webkit-box-orient: horizontal;
                                                                  -webkit-box-direction: normal;
                                                                  flex-flow: row wrap;
                                                                  -webkit-box-align: center;
                                                                  align-items: center;
                                                                  margin-top: 50px;
                                                                  margin-right: 70px;
                                                                  width: 100%;
                                                                  background-color: ">
                                                       <div class="card-header py-3" align="center">
              <CENTER><h6 class="m-0 font-weight-bold text-primary" style="font-size: 30px;" align="center"> STATISTIQUES</h6></CENTER> 
            </div>

                                                      </div>

 <div class=" col-sm-12 form-group choixPN showback" style="display: flex;
                                                                  -webkit-box-orient: horizontal;
                                                                  -webkit-box-direction: normal;
                                                                  flex-flow: row wrap;
                                                                  -webkit-box-align: center;
                                                                  align-items: center;
                                                                  margin-top: 50px;
                                                                  margin-right: 70px;
                                                                  width: 100%;
                                                                  background-color: black">
                                                      <label for="sel1" style="color: white">Mention: </label>&nbsp;&nbsp;
                                                      <select class=" form-control Mention " id="sel1" style="width:  10%;">
                                                         
                                                            <?php foreach ($mentions as $row) {
                                                              echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";
                                                               } ?>
                                                        </select>
                                                      
                                                   
                                                      
                                                      <label for="sel1" style="color: white">Parcour:</label>&nbsp;&nbsp;
                                                      <select class="form-control Parcour" id="sel1" style="width:  10%;"></select>&nbsp;&nbsp;
                                                      <label for="sel1" style="color: white">Niveau:</label>&nbsp;&nbsp;
                                                      <select class=" form-control Niveau" id="sel1"  style="width:  10%;"></select>&nbsp;
                                                      <label for="sel1" style="color: white">Semestre:</label>&nbsp;&nbsp;
                                                        <select class="form-control semestre" id="sel1" style="width:  10%;"></select>
                                                     

                                                   </div>
         <div class="col-sm-12 showback" style="margin-left: 15%; margin-right: 15%; width: 70%; height: 2%;">
              Taux heure
            <div class="chartjs-size-monitor" style=" left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                 <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <!-- <div style="position:absolute;width:1000px;height:1000px;left:0;top:0">
                            
                    </div> -->
                    </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    
            </div>
        </div>
                                  <canvas id="Chart-recent-report"class="chartjs-render-monitor" style="display: block; width: 90%; height: 85%;"></canvas>

       <p style="float: right; margin-top: -20px;">EC</p>
              </div>
   
  
  <div class="card-header py-3" align="center">
              <CENTER><h6 class="m-0 font-weight-bold text-primary" style="font-size: 30px;" align="center"> ETAT DES HEURES EFFECTUEES </h6></CENTER> 
            </div>

   <div class=" col-sm-12 form-group choixPN showback" style="display: flex;-webkit-box-orient: horizontal;-webkit-box-direction: normal;flex-flow: row wrap;-webkit-box-align: center;align-items: center; margin-top: 10px;margin-right: 70px;width: 100%;background-color: black"><label for="sel1" style="color: white">
   Mention: </label>&nbsp;&nbsp;
          <select class=" form-control Mentions " id="sel1" style="width:  10%;"> 
          <?php foreach ($mentions as $row) { 
            echo "<option id=".$row->id_mention.">".$row->abreviation_mention."</option>";}
           ?>
            
          </select> 
          <label for="sel1" style="color: white">
   Parcour:</label>&nbsp;&nbsp;
    <select class="form-control Parcours" id="sel1" style="width:  10%;"></select>&nbsp;&nbsp;<label for="sel1" style="color: white">
   Niveau:</label>&nbsp;&nbsp;
   <select class=" form-control Niveaux" id="sel1"  style="width:  10%;"></select>
 </div>

      <div class="contenaire box">
        <div class="table-responsive">
        
            <div class="tableau_excel">
              
            </div>
          <div class="" align="center">
            <form method="post" class="action">
              <input type="submit" name="export" class="btn btn-success" value="Export">
            </form>
            
          </div>
          <br>
          <br>
        </div>
          
      </div>

   <script type="text/javascript">

   $(document).ready(
      function(){
        

          $.post(
              "<?php  echo base_url();?>" + "Stat/ch1",
              { mention : $("select.Mention").children(".Mention option:selected").attr('id')},
              function(data){
              
           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
     $.post(
              "<?php  echo base_url();?>" + "Stat/ch3",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){
               
           $(".semestre option").remove();
           $("select.semestre").append("<option id=0>annuel</option>");
            for (var i = 0; i<data.semestres.length; i++) {
          $("select.semestre").append("<option id="+data.semestres[i].id_semestre+">"+ data.semestres[i].semestre+"</option>");
          }
            },
            "json"
            );
             $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){ 
              //alert(data);
                statistique(data.y,data.x);
              },
              "json"
              );
           }
             },
            "json"
             );

         $(".Mention").change(function(){
              if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
            $.post(
              "<?php  echo base_url();?>" + "Stat/ch1",
              { mention : $("select.Mention").children(".Mention option:selected").attr('id')},
              function(data){
              
           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
      $.post(
              "<?php  echo base_url();?>" + "Stat/ch3",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){
               
           $(".semestre option").remove();
           $("select.semestre").append("<option id=0>annuel</option>");
            for (var i = 0; i<data.semestres.length; i++) {
          $("select.semestre").append("<option id="+data.semestres[i].id_semestre+">"+ data.semestres[i].semestre+"</option>");
          }
                  $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){ 
                
                statistique(data.y,data.x);
              },
              "json"
              );
            },
            "json"
            );
             $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){ 
                
                statistique(data.y,data.x);
              },
              "json"
              );
           }
             },
            "json"
             );

            }
            else
              {
                $(".Parcour option").remove();
                $(".Niveau option").remove();
              }
            });

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "Stat/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
           
       $.post(
              "<?php  echo base_url();?>" + "Stat/ch3",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){
               
           $(".semestre option").remove();
           $("select.semestre").append("<option id=0>annuel</option>");
            for (var i = 0; i<data.semestres.length; i++) {
          $("select.semestre").append("<option id="+data.semestres[i].id_semestre+">"+ data.semestres[i].semestre+"</option>");
          }
                  $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){ 
                
                statistique(data.y,data.x);
              },
              "json"
              );
            },
            "json"
            );
       
           }

       },
            "json"
            );

            
          });
          $(".Niveau").change(function(){
         $.post(
              "<?php  echo base_url();?>" + "Stat/ch3",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){
               
           $(".semestre option").remove();
           $("select.semestre").append("<option id=0>annuel</option>");
            for (var i = 0; i<data.semestres.length; i++) {
          $("select.semestre").append("<option id="+data.semestres[i].id_semestre+">"+ data.semestres[i].semestre+"</option>");
          }
                  $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){ 
                alert("eee");
                statistique(data.y,data.x);
              },
              "json"
              );
            },
            "json"
            );
        
    });
       $(".semestre").change(function(){
        if ($("select.semestre").children(".semestre option:selected").attr('id')!=0) {
         $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec_semestre",
              { sem : $("select.semestre").children(".semestre option:selected").attr('id'),
                Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id') },
              function(data){
              //  alert(data.x);
               statistique(data.y,data.x);
            },
            "json"
            );
         }
         else{
                    $.post(
              "<?php  echo base_url();?>" + "Stat/select_ec",
              { Niveau : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){ 
                
                statistique(data.y,data.x);
              },
              "json"
              );
         }
        
    });
   


}); 

          
        function statistique(datay,datax){
             
              var ctx = document.getElementById("Chart-recent-report");
              if (ctx) {
                ctx.height =400;
                ctx.width=400;
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels:datax,
                    datasets: [
                      {
                        label: 'Taux evolution des ec',
                        backgroundColor:'rgba(0,181,233,0.8)',
                        borderColor: 'transparent',
                        pointHoverBackgroundColor: '#afa',
                       
                        data: datay

                      }
                    ]
                  },
          options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
              },
              ticks: {
                fontFamily: "Poppins",
                fontSize: 12
              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
               
                stepSize: 5,
                max: 100,

                fontFamily: "Poppins",
                fontSize: 12
              },
              gridLines: {
                display: true,
                color: '#f2f2f2'

              }
            }]
          },
          elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
            }
          }


        }
                });
              }
             }

 var barChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };




    $(document).ready(
      function(){
        
        // alert("ok");
          $.post(
              "<?php  echo base_url();?>" + "Choix/ch1",
              { mention : $("select.Mentions").children(".Mentions option:selected").attr('id')},
              function(data){
              
           $(".Parcours option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcours").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveaux option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveaux").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
             $.post(
              "<?php  echo base_url();?>" + "Excel_export/etat",
              { Niveau : $("select.Niveaux").children(".Niveaux option:selected").attr('id')},
              function(data){
                  // chargement etat heure
                 // alert(data);
                   $("div.tableau_excel").html(data);
                    $("form.action").prop("action","<?php  echo base_url();?>Excel_export/action/"+$("select.Niveaux").children(".Niveaux option:selected").attr('id'));
            },
            "text"
            );
    
           }
             },
            "json"
             );

         $(".Mentions").change(function(){
              if ($("select.Mentions").children(".Mentions option:selected").attr('id')!="nul") {
            $.post(
              "<?php  echo base_url();?>" + "Choix/ch1",
              { mention : $("select.Mentions").children(".Mentions option:selected").attr('id')},
              function(data){
              
           $(".Parcours option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcours").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveaux option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveaux").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
                      $.post(
              "<?php  echo base_url();?>" + "Excel_export/etat",
              { Niveau : $("select.Niveaux").children(".Niveaux option:selected").attr('id')},
              function(data){
                  // chargement etat heure
                 // alert(data);
                   $("div.tableau_excel").html(data);
                    $("form.action").prop("action","<?php  echo base_url();?>Excel_export/action/"+$("select.Niveaux").children(".Niveaux option:selected").attr('id'));
            },
            "text"
            );
           }
             },
            "json"
             );

            }
            else
              {
                $(".Parcours option").remove();
                $(".Niveaux option").remove();
              }
            });

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcours").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "Choix/ch2",
              { parcour : $("select.Parcours").children(".Parcours option:selected").attr('id')},
              function(data){
  
           $(".Niveaux option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveaux").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
           
           }
                           $.post(
              "<?php  echo base_url();?>" + "Excel_export/etat",
              { Niveau : $("select.Niveaux").children(".Niveaux option:selected").attr('id')},
              function(data){
                  // chargement etat heure
                 // alert(data);
                   $("div.tableau_excel").html(data);
                    $("form.action").prop("action","<?php  echo base_url();?>Excel_export/action/"+$("select.Niveaux").children(".Niveaux option:selected").attr('id'));
            },
            "text"
            );
       },
            "json"
            );

            
          });
          $(".Niveaux").change(function(){

                 $.post(
              "<?php  echo base_url();?>" + "Excel_export/etat",
              { Niveau : $("select.Niveaux").children(".Niveaux option:selected").attr('id')},
              function(data){
                  // chargement etat heure
                 // alert(data);
                   $("div.tableau_excel").html(data);
                    $("form.action").prop("action","<?php  echo base_url();?>Excel_export/action/"+$("select.Niveaux").children(".Niveaux option:selected").attr('id'));
            },
            "text"
            );
             });
    
});
   
</script>