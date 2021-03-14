
  
  <div class="" style="margin: 0px;"></div>


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
                                                    <label for="sel1">Parcour et Niveau: <span class="pn"></span></label>&nbsp;

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
var tableau_nbh_=[];
var tableau_d_=[];

var tableau_s=[];
var tableau_id_plage= [];
var tableau_id_jour= [];

 $(document).ready(
      function(){





function planifications_(id_semaine,table,table_entete){


  $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/planifications",
                  type: "POST",
                  async: false,

                  data : {id_s:id_semaine,niv: "<?php echo $n; ?>"},
                  dataType: "json",
                  success:function(data){
                    
for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id[i].length=0;

             tableau_valeurs[i].length=0;
           }


                      for (var i = 0; data.plages.length - 1 >= i; i++) {

                    tableau_d_[data.plages[i].num_plage-1]= [data.plages[i].intitule_plage,data.plages[i].heure_debut,data.plages[i].heure_fin,data.plages[i].id_plage,data.plages[i].num_group];
                   tableau_nbh_[data.plages[i].num_plage]=data.plages[i].duree;

                  }

                  
                          

                              creer_tableau_(tableau_d_,table_entete,table);

                    
                   
                      $(".semestre").html(data.semaine[0].semestre[0]
                        .semestre);

             $(".semaine").html(data.semaine[0].numero);
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

                          //alert(d+" au "+f);
             $(".period").html("du "+d+" au "+f);




            for (var i = 0; data.planifications.length - 1 >= i; i++) {

              if (data.planifications[i].enseignant[1]!=null) {
                ens=data.planifications[i].enseignant[1].nom_prenom;

              }
              else{

                ens="";

              }
              
              
             tableau_id[data.planifications[i].num_jour][data.planifications[i].num_plage]=[tableau_id_jour[data.planifications[i].num_jour-1],tableau_d_[data.planifications[i].num_plage-1][3],data.planifications[i].salle_id,data.planifications[i].ec_id,data.planifications[i].evolution,data.planifications[i].ue[0].id_ue,data.planifications[i].type_planing,tableau_d_[0][4]];

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
             tableau_valeurs[data.planifications[i].num_jour][data.planifications[i].num_plage]=[tableau_id_jour[data.planifications [i].num_jour-1],tableau_d_[data.planifications[i].num_plage-1][3],data.planifications[i].salle,ec,data.planifications[i].evolution,ensei,ens,data.planifications[i].heure,data.planifications[i].ue[0].intitule_ue,data.planifications[i].type_planing,data.planifications[i].semestre[0].id_semestre];
           }


           for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <= tableau_nbh_.length ; j++) {
                      //alert("j="+j);
                      if (tableau_valeurs[i][j]!=null) {

                           
                        Remplir(tableau_valeurs,i,j,"pp"+i+j);
                      }
                      
                     }
                   }
                   

                  },
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });

};

$.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/semaines" ,
                  type: "POST",
                  async: false,

                  data : {niv: "<?php echo $n; ?>"},
                  dataType: "json",
                  success:function (data){
                        tableau_d_.length=0;

                        if(data.length!=0){
                          for ( i = 0; i < data.length; i++) {

                            tableau_s[i]=[data[i].numero,data[i].id_semaine];
                          }
                      tableau_d
                         planifications_(tableau_s[tableau_s.length-1][1],"table_","table_entete_");

                      $(".message").empty();
                      $(".header_empl").show();

                      $("#pr").click(function(){

                      //alert(tableau_s.length);
                      for ( i = 0; i < tableau_s.length; i++) {


                            if ($(".semaine").html()==tableau_s[i][0]) {

                              planifications_(tableau_s[i-1][1],"table_","table_entete_");
                              

                            }
                                
                      }
                        
                          
                      });

                      $("#sv").click(function(){

                      for ( i = 0; i < tableau_s.length; i++) {


                            if ($(".semaine").html()==tableau_s[i][0]) {
                              planifications_(tableau_s[i+1][1],"table_","table_entete_");
                              i=tableau_s.length;
                            }
                                
                      }
                        
                          
                      });

                        }

                      else{
                        $(".message").html("Aucun emploi du temps enregistré pour le compte de l'année actuel");
                        $(".header_empl").hide();
                      $("#table_entete_").html("");
                      $("#table_").html("");

                      }

                      },
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });


});


</script>