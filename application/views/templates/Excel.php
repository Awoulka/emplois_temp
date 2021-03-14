 

 
 
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
