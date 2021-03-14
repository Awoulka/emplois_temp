

                <div class="header_emploi" style="margin-top:30px; margin-left: 0px;">
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
                                                    <label for="sel1">Parcour et Niveau: <span class="pn_"></span></label>&nbsp;

                                                    <!--select class="form-control PN" id="PN" ></select-->
                                                  </div>
                                                   
                                              
                                                                                             </div>
                                            
                                           <div class="col-sm-3"> 

                                                      <div class="top"><p>   </p></div>
                                                      <div class="top">   <h4>EMPLOI DU TEMPS</h4>   </div>

                                                  
                                                      <div class="choix_date_modif">
                                                          <label for="sel1">Debut:</label>&nbsp;
                                                            <select class=" jour_d_modif" id="sel1">
                                                                <?php for ($j=1; $j <32 ; $j++) { 

                                                                  if ($j<10) {
                                                                   echo "<option class="."0".$j.">".$j."</option>";
                                                                  }
                                                                  else
                                                                  {
                                                                   echo "<option class=".$j.">".$j."</option>"; 
                                                                  }
                                                                  
                                                                  
                                                                }
                                                                //echo $row->nom_mention."</br>";
                                                                
                                                               ?>
                                                           </select>
                                                           <select class="moi_d_modif" id="sel1">
                                                                <?php 
                                                                $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
                                                                for ($j=1; $j <13 ; $j++) { 
                                                                     if ($j<10) {
                                                                   echo "<option class="."0".$j.">".$mois[$j]."</option>";
                                                                  }
                                                                  else
                                                                  {       
                                                                   echo "<option class=".$j.">".$mois[$j]."</option>";
                                                                  }
                                                                  
                                                                  
                                                                }?>
                                                          </select>
                                                            <select class="annee_d_modif" id="">
                                                                  <?php 

                                                                  foreach ($annee as $row) {
                                                                    echo "<option id=".$row->id_annee.">".$row->debut."</option>";
                                                                    echo "<option id=".$row->id_annee.">".$row->fin."</option>";} ?>
                                                            </select>
                                                          </br>
                                                        <label for="sel1">Fin:</label>&nbsp;
                                                           <select class="jour_f_modif" id="sel1">
                                                                <?php for ($j=1; $j <32 ; $j++) { 

                                                                  if ($j<10) {
                                                                   echo "<option class="."0".$j.">".$j."</option>";
                                                                  }
                                                                  else
                                                                  {
                                                                   echo "<option class=".$j.">".$j."</option>"; 
                                                                  }
                                                                  
                                                                }
                                                                //echo $row->nom_mention."</br>";
                                                                
                                                               ?>
                                                           </select>
                                                           <select class="moi_f_modif" id="sel1">
                                                                <?php 
                                                                $mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
                                                                for ($j=1; $j <13 ; $j++) { 

                                                                  if ($j<10) {
                                                                   echo "<option class="."0".$j.">".$mois[$j]."</option>";
                                                                  }
                                                                  else
                                                                  {
                                                                   echo "<option class=".$j.">".$mois[$j]."</option>";
                                                                  }
                                                                  
                                                                }?>
                                                          </select>
                                                          <select class="annee_f_modif" id="">
                                                                  <?php 

                                                                  foreach ($annee as $row) {
                                                                    echo "<option id=".$row->id_annee.">".$row->debut."</option>";
                                                                    echo "<option id=".$row->id_annee.">".$row->fin."</option>";} ?>
                                                           </select>
                                                            <button type="submit" class="btn" id="choix_date_ok_modif">Selectionner</button>
                                                            <button type="submit" class="btn" id="choix_date_non_modif">Annuler</button>
                                                        </div>
                                           </div>
                                           <div class="col-sm-3">
                                                      <table   class="" style="table-layout: fixed; border: 0.1em  "    id="" width="87%" height="50%" cellpadding="1" cellspacing="-20">
                                                            
                                                             <tr>
                                                                
                                                                <td class="" id="" ><p align="right" style="padding-top: 10px">SEMESTRE:</p></td>
                                                                <td class="" id=""><select class="form-control semestre_modif" id="" style=" float: right;height: 35px ; width:100%" >
                                                                </select></td> 
                                              
                                                            </tr>
                                                            <tr>
                                                                <td class="" id="" ><p align="right" style="padding-top: 10px">Semaine</p></td>
                                                                <td class="" id=""> <select class="form-control semaine_modif" id="sel1" style=" float: right; height: 35px">
                                                                <option>1</option></select>
                                                                </td> 
                                                            </tr>
                                                            <tr>
                                                                <td class="" id="" colspan="2"> <p align="center">Periode: </p></td>
                                                                <tr>
                                                                <td class="" id="" colspan="2" ><select class="form-control  period_modif" id="periode" style=" float: right; height: 35px;width: 200px"></tr>
                                                                <option id=""></option>
                                          
                                                                </select></td> 
                                                            </tr>
                                                           
                                                        </table>
                                                  
                                           </div>
                                           <div class="col-sm-2">
                                           </div>
                      </div>



                <table class="" style="margin-top: 20px;table-layout: fixed; border:0px 0px 0px 0px solid black; " id="table_entete_modif" width="100%">
                                                       
                                                  </table>
                                              
                                
                                        <table   class="table_" style="table-layout: fixed; border: 0.1em  " id="table_modif" width="100%">
                                          
                                          
                                        </table>
             
        <script type="text/javascript">


  var tableau_id_modif= new Array(4);
              tableau_id_modif[1]= new Array(7);
              tableau_id_modif[2]= new Array(7);
              tableau_id_modif[3]= new Array(7);
              tableau_id_modif[4]= new Array(7);
              tableau_id_modif[5]= new Array(7);
              tableau_id_modif[6]= new Array(7);
var tableau_valeurs_modif= new Array(4);
              tableau_valeurs_modif[1]= new Array(7);

             tableau_valeurs_modif[2]= new Array(7);
              tableau_valeurs_modif[3]= new Array(7);
              tableau_valeurs_modif[4]= new Array(7);
              tableau_valeurs_modif[5]= new Array(7);
              tableau_valeurs_modif[6]= new Array(7);
var tableau_nbh_modif=[];
var tableau_d_modif=[];

var tableau_s=[];
var tableau_id_plage= [];
var tableau_id_jour_modif= [];

 $(document).ready(
      function(){



function creer_tableau_modif(tableau,tableau_entete,tableau_emploie){
  
  var tableau_jour=["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];

       celulle="<tr><th style='' width='100px'></th>";

                                  for (var i = 0; i < tableau.length ; i++) {

                                          if(tableau[i][0]=="cour"){

                      
                                            if((tableau[i+1]!=null && tableau[i+1][0]=="pause") || tableau[i+1]==null){

                                               celulle+="<td>"+tableau[i][1][0]+tableau[i][1][1]+"h<div align='right' style='float: right;'>"+tableau[i][2][0]+tableau[i][2][1]+"h</div></td>";
                                    //            alert(tableau_d[i][1][0]+tableau_d[i][1][1]);

                                            }
                                          else{
                                                 celulle+="<td>"+tableau[i][1][0]+tableau[i][1][1]+"h</td>";
                                      //          alert(tableau_d[i][1][0]+tableau_d[i][1][1]);

                                          }
                                        }
                                          else{
                                            celulle+="<td width='40px'></td>";
                                            
                                          }

                                  };
                                  celulle+="</tr>";

                                  $("#"+tableau_entete).html(celulle);

                                  

                                  

                                   celulle="";
                                   
                                  for (var i = 0; i < 6 ; i++) {


                                     celulle+="<tr style='table-layout: fixed; border: 0.1em solid '><th style='table-layout: fixed' width='100px'><center>"+tableau_jour[i]+"</center></th>";
                                        for (var j = 0; j < tableau.length ; j++) {
                                            
                                          if (i==0) {
                                            if(tableau[j][0]=="cour"){
                                            celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid ' id=ppp"+(i+1)+(j+1)+"></td>";
                                              }
                                            else{
                                              
                                              celulle+="<td style='table-layout: fixed; border: 0.1em solid ' rowspan='6' width='40px'></td>";
                                            }
                                          }
                                          else{

                                            if (tableau[j][0]!="pause") {                                            
                                            

                                                celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid '  id=ppp"+(i+1)+(j+1)+"></td>";
                                            

                                          }
                                            
                                          }

                                          
                                      }
                                      celulle+="</tr>";


                                  $("#"+tableau_emploie).html(celulle);


                                  };
                            $("#"+tableau_entete).fadeIn(1000);
                             $("#"+tableau_emploie).fadeIn(1000);

            $("td.td").click(function(){


                aaa=$(this).attr('id');
                index=$(this).attr('id');
                nbh=tableau_nbh_modif[aaa[4]];
                //alert(nbh);
                  
                 $(".Enseignant option").remove();
                   $(".EC option").remove();
                    $("input[name=optradio]").removeAttr('checked'); 
                    $(".Salle option").remove();
                    
                                                      //$("select.Semestres").children(".Semestres option[id="+tableau_valeurs_modif[aaa[3]][aaa[4]][10]+"]").attr("selected","selected");
                                                     
                $.post(
                          "<?php  echo base_url();?>" + "Choix_planification/ch",
                          { PN : nivv,
                            Semestre : $("select.Semestres").children(".Semestres option:selected").attr('id')},
                          function(data){

                                                 //alert(data);
                                          $(".UE option").remove();

                                          $("select.UE").append("<option id='nul'></option>");
                                           
                                          for (var i = 0; data.ue.length - 1 >= i; i++) {
                                               $("select.UE").append("<option id="+data.ue[i].id_ue+">"+ data.ue[i].intitule_ue+"</option>");
                                             }

                                          for (var i = 0; data.salle.length - 1 >= i; i++) {
                                               $("select.Salle").append(
                                                                          "<option id="+data.salle[i].id_salle+">"+data.salle[i].nom_salle+"("+data.salle[i].intitule_salle+")</option>"
                                                                          );
                                           }

                                           if (tableau_valeurs_modif[aaa[3]][aaa[4]][0]!=null) {
                                            

                                                      $("select.UE").children(".UE option[id="+tableau_id_modif[aaa[3]][aaa[4]][5]+"]").attr("selected","selected");
                                                      
            $.post(
                                    "<?php  echo base_url();?>" + "Choix_planification/ch1",
                                    { UE : $("select.UE").children(".UE option:selected").attr('id')},
                                    function(data){
                                      //alert(aaa[3]);
                                           $(".EC option").remove();
                                           for (var i = 0; data.ec.length - 1 >= i; i++) {
                                               $("select.EC").append("<option id="+data.ec[i].id_ec+">"+data.ec[i].code_ec+"("+data.ec[i].intitule_ec+")"+"</option>");
                                              }

                                              $("select.EC").children(".EC option[id="+tableau_id_modif[aaa[3]][aaa[4]][3]+"]").attr("selected","selected");      
                                           
                                           
                         },
                        "json"
            );


                                                  //$("select.EC").append("<option id="+tableau_id[aaa[3]][aaa[4]][3]+">"+tableau_valeurs[aaa[3]][aaa[4]][3]+"</option>");

                                                  

                                              
                                                       
                                                       $("select.Enseignant").append("<option id=>"+tableau_valeurs_modif[aaa[3]][aaa[4]][5]+"</option>");
                                                       
                                          if (tableau_valeurs_modif[aaa[3]][aaa[4]][6]!=tableau_valeurs_modif[aaa[3]][aaa[4]][5]) {

                                                    $("select.Enseignant").append("<option id=>"+tableau_valeurs_modif[aaa[3]][aaa[4]][6]+"</option>");
                                                  }

                                                   $("select.heure").append("<option id=>"+tableau_valeurs_modif[aaa[3]][aaa[4]][7]+"</option>");

                                                   $("select.Salle").children(".Salle option[id="+tableau_id_modif[aaa[3]][aaa[4]][2]+"]").attr("selected","selected");

                                                            //alert("aaaaa");
                                                            $(".evolution option").remove();
                                                              d=parseInt(tableau_id_modif[aaa[3]][aaa[4]][4],10)-parseInt(nbh[0]+nbh[1]);
                                                              if (d<0) {d=0;}
                                                                //alert(parseInt(nbh[0]+nbh[1]));
                                                            
                                                                $("select.evolution").append("<option>"+d+"</option>");
                                                  /*$(".evolution option").remove();
                                                  $("select.evolution").append("<option>"+tableau_id[aaa[3]][aaa[4]][4]+"</option>");*/
                                             
                                                       
                                                        
                                              
                                             

                                                   
                                          }

                                          


                       
                         },
                        "json"
                );
              
                   

                if (tableau_valeurs_modif[aaa[3]][aaa[4]]!=null) {
                      
                         $("input[name=optradio][value="+tableau_valeurs_modif[aaa[3]][aaa[4]][9]+"]").trigger('click');
                        
              }
               else{
                //$("select.UE").append("<option id='nul'></option>");
               }
                  $(".evolution option").remove();
                  $(".heure option").remove();
        
                                      $("#choix").css("display","block");
                                      $("td.td").css("background-color","white");
                                      $(this).css("background-color","#b3d9ff");
                                     
          
         });

}

function planifications(id_semaine,table,table_entete){
  


  $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/planifications",
                  type: "POST",
                  async: false,

                  data : {id_s:id_semaine,niv: nivv},
                  dataType: "json",
                  success:function(data){
                    
tableau_d_modif.length=0;
for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id_modif[i].length=0;

             tableau_valeurs_modif[i].length=0;
           }


                      for (var i = 0; data.plages.length - 1 >= i; i++) {

                    tableau_d_modif[data.plages[i].num_plage-1]= [data.plages[i].intitule_plage,data.plages[i].heure_debut,data.plages[i].heure_fin,data.plages[i].id_plage,data.plages[i].num_group];
                   tableau_nbh_modif[data.plages[i].num_plage]=data.plages[i].duree;

                  }

                  
                          

                              creer_tableau_modif(tableau_d_modif,table_entete,table);

                for (var i = 0; data.niv.length - 1 >= i; i++) {
                    
                      $(".pn_").html(data.niv[i].rendu);
                      
                  }
                    
                   
               $(".semestre_modif option").remove();
              
               $(".semaine_modif option").remove();

                  for (var i = 0; data.semestre.length - 1 >= i; i++) {
                    
                   
                      $("select.semestre_modif").append("<option id="+data.semestre[i].id_semestre+">"+ data.semestre[i].semestre+"</option>");
                      
                  }

                  
                  
 for (var i = 0; data.jour.length - 1 >= i; i++) {
                    
                   
                     tableau_id_jour_modif[data.jour[i].num_jour-1]=data.jour[i].id_jour;
                     //alert(tableau_id_jour_modif);
                      
                  }

                $(".semaine_modif option").remove();
                $(".period_modif option:selected").remove();

                if (data!= null) {
                  //alert(data.semaine[0].numero);
             $("select.semaine_modif").append("<option id=''>"+(parseInt(data.semaine[0].numero,10)+1)+"</option>");
                d=data.semaine[0].debut;
                f=data.semaine[0].fin;
                     mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
                if (d[5]+d[6]==f[5]+f[6]) {
                            d=d[8]+d[9];
                          }
                          else{
                                d=d[8]+d[9]+" "+mois[parseInt(d[5],10)+parseInt(d[6],10)];
                              }
                          f=f[8]+f[9]+" "+mois[parseInt(f[5],10)+parseInt(f[6],10)];

                          $("select.period_modif").append("<option id=>"+"du "+d+" au "+f+"</option>")

                          
             tableau_semaine[0]=data.semaine[0].numero;
             tableau_semaine[1]=data.semaine[0].debut;
             tableau_semaine[2]=data.semaine[0].fin;
             tableau_semaine[3]=data.annee[0].id_annee;

             tableau_semaine[4]=tableau_nbh_modif.length;
             
              tableau_semaine[5]=data.semaine[0].semaine_status;
              tableau_semaine[6]=data.semaine[0].semestre_id;




            for (var i = 0; data.planifications.length - 1 >= i; i++) {

              if (data.planifications[i].enseignant[1]!=null) {

                ens=data.planifications[i].enseignant[1].nom_prenom;


                    }
              else{

                ens="";

              }
              
              
             tableau_id_modif[data.planifications[i].num_jour][data.planifications[i].num_plage]=[tableau_id_jour_modif[data.planifications[i].num_jour-1],tableau_d_modif[data.planifications[i].num_plage-1][3],data.planifications[i].salle_id,data.planifications[i].ec_id,data.planifications[i].evolution,data.planifications[i].ue[0].id_ue,data.planifications[i].type_planing,tableau_d_modif[0][4]];

              ec=data.planifications[i].ec[0].code_ec+"("+data.planifications[i].ec[0].intitule_ec+")";


          if (data.planifications[i].type_planing=="BIBLIOTHEQUE" ||
              data.planifications[i].type_planing=="Congé" ||
              data.planifications[i].type_planing=="INVESTISSEMENT HUMAIN") {

              ensei="";
              ens="";
            }
          else{
            ensei=data.planifications[i].enseignant[0].nom_prenom;
          }
            tableau_valeurs_modif[data.planifications[i].num_jour][data.planifications[i].num_plage]=[tableau_id_jour_modif[data.planifications [i].num_jour-1],tableau_d_modif[data.planifications[i].num_plage-1][3],data.planifications[i].salle,ec,data.planifications[i].evolution,ensei,ens,data.planifications[i].heure,data.planifications[i].ue[0].intitule_ue,data.planifications[i].type_planing,data.planifications[i].semestre[0].id_semestre];
           }


           for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <= tableau_nbh_modif.length ; j++) {
                      //alert("j="+j);
                      if (tableau_valeurs_modif[i][j]!=null) {

                           
                        Remplir(tableau_valeurs_modif,i,j,"ppp"+i+j);
                      }
                      
                     }
                   }
                   }
                   

                  },
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });

};
planifications("<?php echo $id_sem ;?>","table_modif","table_entete_modif");

});


</script>