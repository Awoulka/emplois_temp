
  <script type="text/javascript">
    var tableau_id= new Array(4);
              tableau_id[1]= new Array(7);
              tableau_id[2]= new Array(7);
              tableau_id[3]= new Array(7);
              tableau_id[4]= new Array(7);
              tableau_id[5]= new Array(7);
              tableau_id[6]= new Array(7);
var tableau_valeurs= new Array(4);
              tableau_valeurs[1]= new Array(7);
              tableau_valeurs[2]= new Array(7);
              tableau_valeurs[3]= new Array(7);
              tableau_valeurs[4]= new Array(7);
              tableau_valeurs[5]= new Array(7);
              tableau_valeurs[6]= new Array(7);

    
    $(document).ready(
      function(){

      //chargement des parcours et niveau a la selection d'une mention
          //$(".Mention").change(function(){
              //if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
      $.post(
               "<?php  echo base_url();?>" + "index.php/choix/ch1",
              {mention : "<?php  echo $this->session->id_mention;?>"},
              function(data){

           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
           }
             },
             "json"
    
            );
            //}
            /*else
              {
                $(".Parcour option").remove();
                $(".Niveau option").remove();
              }*/
            //});

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "index.php/choix/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
           }
           
            },
            "json"
            );

            
          });

    //chargement du dernier emploi du temps

    $("#choix_ok").click(function(){
      $("td").empty(".td");
      for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id[i].length=0;

             tableau_valeurs[i].length=0;
         }

      $.post(
              "<?php  echo base_url();?>" + "index.php/enregistrement/charge",
              {niv: $("select#PN").children("#PN option:selected").attr('id')},
              function(data){
  
                  
                  //$(".b").html(data);
                  
                

                $(".sem option:selected").remove();
                $(".periode option:selected").remove();
                if (data!= null) {
             $("select.sem").append("<option id=''>"+data.semaine[0].numero+"</option>");
             $("select.periode").append("<option id=>"+"du "+data.semaine[0].debut+" au "+data.semaine[0].fin+"</option>");
            
            for (var i = 0; data.planifications.length - 1 >= i; i++) {
             tableau_id[data.planifications[i].num_jour][data.planifications[i].num_plage]=[data.planifications[i].num_jour,data.planifications[i].num_plage,data.planifications[i].salle_id,data.planifications[i].ec_id,data.planifications[i].evolution,data.planifications[i].ue[0].id_ue];

             tableau_valeurs[data.planifications[i].num_jour][data.planifications[i].num_plage]=[data.planifications[i].num_jour,data.planifications[i].num_plage,data.planifications[i].salle,data.planifications[i].ec,data.planifications[i].evolution,data.planifications[i].enseignant[0].nom_prenom,data.planifications[i].heure,data.planifications[i].ue[0].intitule_ue];
           }
           }
           else{
            alert("ok");
            $("select.sem").append("<option id=''></option>");
             $("select.periode").append("<option id=></option>");
           }
           for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <4 ; j++) {
                      //alert("j="+j);
                      if (tableau_valeurs[i][j]!=null) {
                        $("#"+i+j).html("<center>"+"<div>"+"<font size=2>"+tableau_valeurs[i][j][3]+"</font>"+"</div>"
                                  +"<div >"+"<font size=2>"+tableau_valeurs[i][j][5]+"</font>"+"</div>"
                          +"<center>"
                                  +"<div>"+"<font size=2>"+tableau_valeurs[i][j][2]+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+tableau_valeurs[i][j][4]+"/"+tableau_valeurs[i][j][6]+"</font>"+"</div>");
                      }
                      
                     }
                   }
           

            },
            "json"
            );
      });

    $("#choix_date_ok").click(
          function(){
            
      });

      //chargement des UE lorsqu'on clique sur une plage
          $("td.td").click(function(){
            aaa=$(this).attr('id');
            //alert(tableau_valeurs[aaa[0]][aaa[1]]);
            $(".Enseignant option").remove();
                $(".EC option").remove();
            
            $.post(
              "<?php  echo base_url();?>" + "index.php/choix_planification/ch",
              { PN : $("select.PN").children(".PN option:selected").attr('id'),
                Semestre : $("select.Semestre").children(".Semestre option:selected").attr('id')},
              function(data){
                  //alert(data);
           $(".UE option").remove();
           if (tableau_valeurs[aaa[0]][aaa[1]]!=null) {
           $("select.UE").append("<option id="+tableau_id[aaa[0]][aaa[1]][5]+">"+tableau_valeurs[aaa[0]][aaa[1]][7]+"</option>");
          }
           else{
            $("select.UE").append("<option id='nul'></option>");
           }
           for (var i = 0; data.ue.length - 1 >= i; i++) {
             $("select.UE").append("<option id="+data.ue[i].id_ue+">"+ data.ue[i].intitule_ue+"</option>");
           }
           for (var i = 0; data.salle.length - 1 >= i; i++) {
             $("select.Salle").append("<option id="+data.salle[i].id_salle+">"+data.salle[i].nom_salle+"("+data.salle[i].intitule_salle+")</option>");
           }
           
             },
            "json"
            );
              $(".evolution option").remove();
              $(".heure option").remove();
              if (tableau_valeurs[aaa[0]][aaa[1]]!=null) {
                $("select.EC").append("<option id="+0+">"+tableau_valeurs[aaa[0]][aaa[1]][3]+"</option>");
                $("select.Enseignant").append("<option id="+0+">"+tableau_valeurs[aaa[0]][aaa[1]][5]+"</option>");
                $("select.Salle").append("<option id="+0+">"+tableau_valeurs[aaa[0]][aaa[1]][2]+"</option>");
                //$("select.evolution").append("<option id="+0+">"+tableau_valeurs[aaa[0]][aaa[1]][4]+"</option>");
                $("select.heure").append("<option id="+0+">"+tableau_valeurs[aaa[0]][aaa[1]][6]+"</option>");}
                    //if (select_niv==1 && select_periode==1) {
                      index=$(this).attr('id');
                                  $("#choix").css("display","block");
                                  $("td.td").css("background-color","white");
                                 $(this).css("background-color","#b3d9ff");
                    //}
                    //else
                    //{
                      //alert("Les champs Parcour et niveau ainsi que la periode doivent etre renseignés.");
                   // }
          
         });
    //chargement des EC etdes enseignant a la selection de l'UE

        $(".UE").change(function(){
              if ($("select.UE").children(".UE option:selected").attr('id')!="nul") {
            $.post(
              "<?php  echo base_url();?>" + "index.php/choix_planification/ch1",
              { UE : $("select.UE").children(".UE option:selected").attr('id')},
              function(data){

           $(".EC option").remove();
           for (var i = 0; data.ec.length - 1 >= i; i++) {
             $("select.EC").append("<option id="+data.ec[i].id_ec+">"+ data.ec[i].intitule_ec+"</option>");
           }
           $(".Enseignant option").remove();
            $(".evolution option").remove();
            $(".heure option").remove();
           for (var i = 0; data.enseignant.length - 1 >= i; i++) {
             $("select.Enseignant").append("<option id="+data.enseignant[i].id_personnel+">"+ data.enseignant[i].nom_prenom+"</option>");
           }
           $("select.heure").append("<option>"+data.ec[0].heure+"</option>");
          if (data.evolution[0]!=null) {
             $("select.evolution").append("<option>"+data.evolution[0]+"</option>");
           }
           else{
             $("select.evolution").append("<option>"+0+"</option>");
           }
           
             },
            "json"
            );
            }
            else
              {
                $(".UE option").remove();
                $(".EC option").remove();
              }
            }); 
      // chargement des enseignant au changement de l'EC

        $(".EC").change(function(){
              
            $.post(
              "<?php  echo base_url();?>" + "index.php/choix_planification/ch2",
              { EC : $("select.EC").children(".EC option:selected").attr('id')},
              function(data){

           $(".Enseignant option").remove();
           $(".evolution option").remove();
           $(".heure option").remove();
           for (var i = 0; data.enseignant.length - 1 >= i; i++) {
             $("select.Enseignant").append("<option id="+data.enseignant[i].id_personnel+">"+ data.enseignant[i].nom_prenom+"</option>");
           }
           $("select.heure").append("<option>"+data.ec[0].heure+"</option>");
           if (data.evolution[0]!=null) {
             $("select.evolution").append("<option>"+data.evolution[0]+"</option>");
           }
           else{
             $("select.evolution").append("<option>"+0+"</option>");
           }
          
             },
            "json"
            );
            }); 

    //enregistrement d'une plage

         
         
    });


$(document).ready(
      function(){


        deja=0;
      $("#enreg").click(
          function(){
            
           EC_id=$("select.EC").children(".EC option:selected").attr("id");
           Enseignant_id=$("select.Enseignant").children(".Enseignant option:selected").attr("id");
           Salle_id=$("select.Salle").children(".Salle option:selected").attr("id");
           num_jour=aaa[0];
           num_plage=aaa[1];

           debut="<?php 
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


              num_semaine=$("select.sem").children(".sem option:selected").val();


             
             /*$.post(
              "<?php  echo base_url();?>" + "index.php/enregistrement/evolution",
              {EC : $("select.EC").children(".EC option:selected").attr("id")},
              function(data){
            $(".evolution option").remove();
             $("select.evolution").append("<option id="+data.evolution[0].evolution+">"+data.evolution[0].evolution+"</option>");
             alert($("select.evolution").children(".evolution option:selected").attr("id"));
             },
            "json"
            );*/
             
           
           annee_id="<?php foreach ($annee as $row) {echo $row->id_annee;} ?>";
            //alert("id_ec:"+EC_id+",  id_ens:"+Enseignant_id+",   id_salle:"+Salle_id+",   num_jour:"+num_jour+",   num_plage:"+num_plage+",   date_debut:"+deb_s+",   date_fin:"+fin_s+" id_annee:"+annee_id+"  num_semaine:"+num_semaine);
            val=$("select.evolution").children(".evolution option:selected").val();
            //int(val);
            if (val!=null) {
              if (aaa[1]==2) {
            Evolution=parseInt(val,10)+2;
          }
          else{
            Evolution=parseInt(val,10)+3;
          }
         
            }
            else{
              Evolution=tableau_valeurs[num_jour][num_plage][4];
            }
          

              tableau_id[num_jour][num_plage]=[
                  num_jour,
                  num_plage,
                  $("select.Salle").children(".Salle option:selected").attr('id'),
                  $("select.EC").children(".EC option:selected").attr('id'),
                  Evolution,
                  $("select.UE").children(".UE option:selected").attr('id')
                  ];

              tableau_valeurs[num_jour][num_plage]=[
              num_jour,
              num_plage,
              $("select.Salle").children(".Salle option:selected").val(),
              $("select.EC").children(".EC option:selected").val(),
              Evolution,
              $("select.Enseignant").children(".Enseignant option:selected").val(),
              $("select.heure").children(".heure option:selected").val(),
              $("select.UE").children(".UE option:selected").val()
              ];


             /*$.post(
              "<?php  echo base_url();?>" + "index.php/enregistrement/enreg",
              {
                debut: deb_s, 
                fin: fin_s, 
                annee: annee_id,
                numero:num_semaine,
                tableau:tableau_id},
              function(data){
                //$(".sem option").remove();
             //$("select.sem").append("<option id=''>"+3+"</option>");
             //$(".b").html(data);
             },
            "text"
            ); */
  
              if (deja==0) {

a=1;


              
            //var t=JSON.stringfy(tableau);
              
              //alert(a);
              //alert(a);
              //alert($("select.sem").children(".sem option:selected").attr("id"));

             /*$.post(
              "<?php  echo base_url();?>" + "index.php/enregistrement/plage",
              {
                semaine : $("select.sem").children(".sem option:selected").attr("id"),
                EC: EC_id,
                Salle:Salle_id,
                jour:num_jour,
                plage:num_plage,
                evolution:Evolution,},
              function(data){
                alert(data);
                
             },
            "text"
            );*/


            }
            else
            {

              //alert("deja");
            }

                 $("#choix").css("display","none");
                                        $("#"+index).html("<center>"
                                          +"<div >"+"<font size=2>"+$("select.EC").children(".EC option:selected").val()+"</font>"
                                          +"</div>"+
                                         "<div >"+"<font size=2>"+$("select.Enseignant").children(".Enseignant option:selected").val()+"</font>"
                                         +"</div>"
                                         +"<div >"+"<font size=2>"+$("select.Salle").children(".Salle option:selected").val()+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+Evolution+"/"+$("select.heure").children(".heure option:selected").val()+"</font>"+"</div>"
                                        +"<center>");
                                   



deja=1;
                                    });
       
       }); 
  </script>