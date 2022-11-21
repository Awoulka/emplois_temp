 
  <script type="text/javascript">
$(document).ready(
      function(){
      $(".consulter").click(function(){
        $(".b").hide();

      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/consult" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".a").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });
              });
      $(".plages").click(function(){
        $(".b").hide();

      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/plg" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".a").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });
              });
$(".notifications").click(function(){
        $(".b").hide();

      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/notif" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".a").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });
              });

      $(".statistiques").click(function(){
        $(".b").hide();

      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/stat" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".a").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });
              });

  $(".b").hide();
      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/consult" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".a").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });

      $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/edit" ,
                  type: "POST",
                  //async: false,

                  data : {},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".b").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });
 $(".edition").click(function(){ 
        $(".b").fadeIn("slow");
        $(".a").empty();
        
       });

  






       
       }); 
  </script>




<div class="container showback" style="margin-top: ;">
  
  <div class="a" style="margin: 20px;"></div>


        <div class="row b">
         
              
        </div>
</div>


        

  
        <div class=" modal" style="padding-top: 100px;" id="choix">
            <div class="modal-content animate" style="padding-top: 20px auto;">

          <form class="form-inline" action="/action_page.php">
                 
          
             <div style="background-color: white;"><h4 align="center">Enregitrement d'une plage</h4></div >
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

              </div>
                    </form>
              <div class="form-group " style="padding-top: 10px auto;">
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
                  <select class="form-control Salle" id="sel1">
                    
                  </select>
                  <select class="form-control evolution" id="sel1" >
                    
                  </select>
                  </select>
                  <select class="form-control heure" id="sel1">
                    
                  </select>
                   &nbsp; </br>
                  <button type="submit" class="btn btn-primary" id="enreg">Enregistrer</button>&nbsp;
                  <button type="submit" class="btn btn-primary " id="sortir" style="float: right; background-color: red; ">Sortir</button>
                  
                  <p class=" close" id="close">x</p>
                  
                  
          </div>
      </div>
      
