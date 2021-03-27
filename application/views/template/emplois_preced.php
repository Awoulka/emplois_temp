
     var tableau_id_= new Array(4);
              tableau_id_[1]= new Array(7);
              tableau_id_[2]= new Array(7);
              tableau_id_[3]= new Array(7);
              tableau_id_[4]= new Array(7);
              tableau_id_[5]= new Array(7);
              tableau_id_[6]= new Array(7);


var tableau_valeurs_= new Array(4);
              tableau_valeurs_[1]= new Array(7);

              tableau_valeurs_[2]= new Array(7);
              tableau_valeurs_[3]= new Array(7);
              tableau_valeurs_[4]= new Array(7);
              tableau_valeurs_[5]= new Array(7);
              tableau_valeurs_[6]= new Array(7);
var tableau_nbh=[];
 var tableau_nbh_=[];
var tableau_d=[];
var tableau_d_=[];
var tableau_s=[];



              //tableau_d[0]= ["cour",8,11];
              //tableau_d[1]= ["pause",11,13];
              //tableau_d[2]= ["cour",13,14];
              //tableau_d[3]= ["pause",14,17];
              //tableau_d[4]= ["cour",14,17];
var tableau_id_plage= [];
var tableau_id_jour= [];
var tableau_semaine= new Array(4);  
              
              
              //tableau_d[4]= [];
              //tableau_d[5]= [];


var celulle;
var nivv;

for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <= 50 ; j++) {
                     

                           
                        tableau_id_[i][j]=-1;
                      
                      
                     }
                   }

function notif(){

  $('tbody.tableau1').empty();
          $.post(
                                      // chargement des emplois du temps des niv_par
                                        base_url + "Enregistrement/niv",
                                       
                            { id_niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                            function(data){
                             

                             $('tbody.tableau1').empty();
                              for (var i = 0; data.length - 1 >= i; i++) {
                                      if (data[i][0]!=null && (data[i][0].semaine_status==0 || data[i][0].semaine_status==1 || data[i][0].semaine_status==2 || data[i][0].semaine_status==3 )) {

                                        if (data[i][0].semaine_status==0 ) {

                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (Non Envoyé)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi envoyer' id="+data[i][0].id_semaine+" style='background-color: green;'><span style='color:white'>Envoyer</span></button>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button><button class='item' data-toggle='tooltip' data-placement='top' title='' data-original-title='Send'><i class='zmdi zmdi-mail-send'></i></button>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi ' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'><a href='"+base_url+"choix/modification/"+data[i][0].id_semaine+"/"+nivv+"' >Modifier</a></span></button></td></tr></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href",base_url + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));

                                      
                                    }
                                     if (data[i][0].semaine_status==1 ) {
                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (En attente de validation par le CD)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +"></a>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href",base_url + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }

                                    if (data[i][0].semaine_status==2 ) {
                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (Rejeté par le CD)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href",base_url + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));

                                      
                                    }
                                     

                                     if (data[i][0].semaine_status==3 ) {
                                      $('tbody.tableau1').append("<tr role='row' class='odd' id="+ data[i][0].id_semaine +"><td class='sorting_1'>"+ data[i][0].numero +"</td><td> du  "+ data[i][0].debut + "   au  "+ data[i][0].fin + " (Validé mais non Publié)</td><td><a href='#' target='_blank' class= 'fa fa-file emploi' id=f"+ data[i][0].id_semaine +">Visualiser</a>&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi publier' id="+ data[i][0].id_semaine +" style='background-color: green;'><span style='color:white'>Publier</span></button>&nbsp;&nbsp;&nbsp;&nbsp;<button  type='submit' class='btn fa fa-file emploi renvoyer' id="+ data[i][0].id_semaine +" style='background-color: red;'><span style='color:white'>Supprimer</span></button></td></tr>");
                                      $("#f"+ data[i][0].id_semaine).prop("href",base_url + "imprimer/index/"+data[i][0].id_semaine+"/"+$("select.Niveau").children(".Niveau option:selected").attr('id'));
                                    }

                                    }
                                  }


                              $('.envoyer').click(function(){

                                 swal({

                                        title:"",
                                        text:"Emploi du temps pret à être envoyer. Confirmez-vous l'envoi ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        base_url + "Enregistrement/status_semaine/1",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','Emploi du temps envoyé avec success','success');
                                                notif();
                                          },
                                          "text"
                                    );


                                        
                                      }
                                      else{

                                        }
                    });

                              });

                                $('.renvoyer').click(function(){

                                   swal({

                                        title:"",
                                        text:"Confirmez-vous la suppression de cet emploi du temps ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        base_url + "Enregistrement/supprimer_emploi",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','suppression reussi','success');
                                                notif();
                                          },
                                          "text"
                                    );


                                        
                                      }
                                      else{

                                        }
                    });
                                 
                              });


                              $('.publier').click(function(){

                                 swal({

                                        title:"",
                                        text:"Emploi du temps pret a être Publié. Confirmez-vous la publication ?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {

                                        $.post(
                                      // chargement des emplois du temps des niv_par
                                        base_url + "Enregistrement/status_semaine/4",
                                       
                                            { semaine : $(this).attr('id')},
                                            function(data){
                                             
                                                 swal('','Emploi du temps Publié avec success','success');
                                                  notif();
                                          },
                                          "text"
                                    );


                                        
                                      }
                                      else{

                                        }
                    });

                              });
                   

                   $('.modifier').click(function(){


                                        $(".n_edit").empty();

                                            $.ajax({

                                                        
                                                        url: base_url + "choix/modification" ,
                                                        type: "POST",
                                                        //async: false,

                                                        data : {id:$(this).attr("id")},
                                                        dataType: "text",
                                                        success: function(data){

                                                          //alert(data);
                                                          $(".n_edit").html(data);
                                                        },
                                                        error:function(){
                                                          alert("erreur de requetes ");
                                                        }
                                                      });



                              });
                              $('.publier').click(function(){

                                      swal({

                                            title:"",
                                            text:"Vous etes sur le point de modifier cet emplois du temps. Voulez-vous continuer ?",
                                            icon:"warning",
                                            buttons:['Non','Oui'],
                                            dangerMode:false
                                          
                                        }).then((oui)=>{
                                          if (oui) {

                                            $.post(
                                          // chargement des emplois du temps des niv_par
                                            base_url + "Enregistrement/status_semaine/4",
                                            
                                                { semaine : $(this).attr('id')},
                                                function(data){
                                                  
                                                      swal('','Emploi du temps Publié avec success','success');
                                                      notif();
                                              },
                                              "text"
                                        );


                                            
                                          }
                                          else{

                                            }
                                      });

                                      });     
                          },
                          "json"
                    );
   


}
function evolution(tableau,matiere){
       ev=0;
       v=0;
      
              $.ajax({

                  
                  url:base_url + "Choix_planification/evolution",
                  type: "POST",
                  async: false,

                  data : {EC : matiere},
                  dataType: "json",
                  success:function(data){

                               //alert(data+"aaa");

                                          if (data[0].evolution!=null ) {
                                                ev=parseInt(data[0].evolution,10);
                                              }
                                           else{
                                                ev=0;
                                                }
                           },
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });
    for (var i = 1; i <7 ; i++) {
                          
                     for (var j = 1; j < tableau_nbh.length ; j++) {
                      
                      
                      if ((tableau[i][j] !=null && tableau[i][j][3]==matiere)  && tableau[i][j][4]!=0 ) {
                       
                            
                                  
                                   
                                   tableau_id_[i][j][4]=ev+parseInt(tableau_nbh[j][0]+tableau_nbh[j][1])
                                   tableau_valeurs_[i][j][4]=ev+parseInt(tableau_nbh[j][0]+tableau_nbh[j][1])
                                   ev=ev+parseInt(tableau_nbh[j][0]+tableau_nbh[j][1]); 
                                   if (tableau_valeurs_[i][j][9]!=null) { 
                                    Remplir(tableau_valeurs_,i,j,"p"+i+j);
                                  }
                                    
                   }
                   }
        }
}

    function creer_tableau_(tableau,tableau_entete,tableau_emploie){
  
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


                                     celulle+="<tr style='table-layout: fixed; border: 0.1em solid '><th style='border-top: 1px solid black' width='100px'><center>"+tableau_jour[i]+"</center></th>";
                                        for (var j = 0; j < tableau.length ; j++) {
                                            
                                          if (i==0) {
                                            if(tableau[j][0]=="cour"){
                                            celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid ' id=pp"+(i+1)+(j+1)+"></td>";
                                              }
                                            else{
                                              
                                              celulle+="<td style='table-layout: fixed; border: 0.1em solid ' rowspan='6' width='40px'></td>";
                                            }
                                          }
                                          else{

                                            if (tableau[j][0]!="pause") {                                            
                                            

                                                celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid '  id=pp"+(i+1)+(j+1)+"></td>";
                                            

                                          }
                                            
                                          }

                                          
                                      }
                                      celulle+="</tr>";


                                  $("#"+tableau_emploie).html(celulle);


                                  };
                            $("#"+tableau_entete).fadeIn(1000);
                             $("#"+tableau_emploie).fadeIn(1000);
};




function creer_tableau(tableau,tableau_entete,tableau_emploie){
  
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


                                     celulle+="<tr style='table-layout: fixed; border: 0.1em solid '><th style='border-top: 1px solid black' width='100px'><center>"+tableau_jour[i]+"</center></th>";
                                        for (var j = 0; j < tableau.length ; j++) {
                                            
                                          if (i==0) {
                                            if(tableau[j][0]=="cour"){
                                            celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid ' id=p"+(i+1)+(j+1)+"></td>";
                                              }
                                            else{
                                              
                                              celulle+="<td style='table-layout: fixed; border: 0.1em solid ' rowspan='6' width='40px'></td>";
                                            }
                                          }
                                          else{

                                            if (tableau[j][0]!="pause") {                                            
                                            

                                                celulle+="<td class='td' style='table-layout: fixed; border: 0.1em solid '  id=p"+(i+1)+(j+1)+"></td>";
                                            

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
                nbh=tableau_nbh[aaa[2]];
                //alert(nbh);
                  
                 $(".Enseignant option").remove();
                   $(".EC option").remove();
                    $("input[name=optradio]").removeAttr('checked'); 
                    $(".Salle option").remove();
                    
                                                      //$("select.Semestres").children(".Semestres option[id="+tableau_valeurs_[aaa[1]][aaa[2]][10]+"]").attr("selected","selected");
                                                     
                $.post(
                          base_url + "Choix_planification/ch",
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

                                           if (tableau_valeurs_[aaa[1]][aaa[2]][0]!=null) {
                                            

                                                      $("select.UE").children(".UE option[id="+tableau_id_[aaa[1]][aaa[2]][5]+"]").attr("selected","selected");
                                                      
            $.post(
                                    base_url + "Choix_planification/ch1",
                                    { UE : $("select.UE").children(".UE option:selected").attr('id')},
                                    function(data){
                                      //alert(aaa[1]);
                                           $(".EC option").remove();
                                           for (var i = 0; data.ec.length - 1 >= i; i++) {
                                               $("select.EC").append("<option id="+data.ec[i].id_ec+">"+data.ec[i].code_ec+"("+data.ec[i].intitule_ec+")"+"</option>");
                                              }

                                              $("select.EC").children(".EC option[id="+tableau_id_[aaa[1]][aaa[2]][3]+"]").attr("selected","selected");      
                                           
                                           
                         },
                        "json"
            );


                                                  //$("select.EC").append("<option id="+tableau_id[aaa[1]][aaa[2]][3]+">"+tableau_valeurs[aaa[1]][aaa[2]][3]+"</option>");

                                                  

                                              
                                                       
                                                       $("select.Enseignant").append("<option id=>"+tableau_valeurs_[aaa[1]][aaa[2]][5]+"</option>");
                                                       
                                          if (tableau_valeurs_[aaa[1]][aaa[2]][6]!=tableau_valeurs_[aaa[1]][aaa[2]][5]) {

                                                    $("select.Enseignant").append("<option id=>"+tableau_valeurs_[aaa[1]][aaa[2]][6]+"</option>");
                                                  }

                                                   $("select.heure").append("<option id=>"+tableau_valeurs_[aaa[1]][aaa[2]][7]+"</option>");

                                                   $("select.Salle").children(".Salle option[id="+tableau_id_[aaa[1]][aaa[2]][2]+"]").attr("selected","selected");

                                                            //alert("aaaaa");
                                                            $(".evolution option").remove();
                                                              d=parseInt(tableau_id_[aaa[1]][aaa[2]][4],10)-parseInt(nbh[0]+nbh[1]);
                                                              if (d<0) {d=0;}
                                                                //alert(parseInt(nbh[0]+nbh[1]));
                                                            
                                                                $("select.evolution").append("<option>"+d+"</option>");
                                                  /*$(".evolution option").remove();
                                                  $("select.evolution").append("<option>"+tableau_id[aaa[1]][aaa[2]][4]+"</option>");*/
                                             
                                                       
                                                        
                                              
                                             

                                                   
                                          }

                                          


                       
                         },
                        "json"
                );
              
                   

                if (tableau_valeurs_[aaa[1]][aaa[2]]!=null) {
                      
                         $("input[name=optradio][value="+tableau_valeurs_[aaa[1]][aaa[2]][9]+"]").trigger('click');
                        
              }
               else{
                //$("select.UE").append("<option id='nul'></option>");
               }
                  $(".evolution option").remove();
                  $(".heure option").remove();
        
                                      $(".choix").css("display","block");
                                      $("td.td").css("background-color","white");
                                      $(this).css("background-color","#b3d9ff");
                                     
          
         });

}


    function Remplir(tableau,ligne,colonne,index0){


                                if (tableau[ligne][colonne][9]=="BIBLIOTHEQUE" || 
                                    tableau[ligne][colonne][9]=="Congé" || 
                                    tableau[ligne][colonne][9]=="INVESTISSEMENT HUMAIN") {
                                            $("#"+index0).html("<center>"+"<font size=5 >"+tableau[ligne][colonne][9]+"</font>"+"</center>");
                                          }
                                else{ 
                                            if (tableau[ligne][colonne][6]!='' && tableau[ligne][colonne][6]!=tableau[ligne][colonne][5] ) {
                                                ens2=" / "+tableau[ligne][colonne][6];
                                            }
                                            else{
                                              ens2="";

                                            }

                                              if (tableau[ligne][colonne][9]=="Cour") {

                                                $("#"+index0).html("<center>"
                                                  +"<div >"+"<font size=2>"+tableau[ligne][colonne][3]+"</font>"
                                                  +"</div>"+
                                                 "<div >"+"<font size=2>"+tableau[ligne][colonne][5]+ens2+"</font>"
                                                 +"</div>"
                                                 +"<div style='float: left;'>"+"<font size=2>"+tableau[ligne][colonne][2]+"</div>"+"<div style='float: right;'>"+tableau[ligne][colonne][4]+"/"+tableau[ligne][colonne][7]+"</font>"+"</div>"
                                                +"</center>");
                                                //alert(index0);
                                              }

                                              else{
                                                if (tableau[ligne][colonne][9]=="TP"      || 
                                                    tableau[ligne][colonne][9]=="TPE"     ||
                                                    tableau[ligne][colonne][9]=="TD"      || 
                                                    tableau[ligne][colonne][9]=="CC"      
                                                      ) {
                                                $("#"+index0).html("<center>"
                                                  +"<div >"+"<font size=2>"+tableau[ligne][colonne][3]+"</font>"
                                                  +"</div>"+
                                                 "<div >"+"<font size=2>"+tableau[ligne][colonne][9]+"</font>"
                                                 +"</div>"
                                                +"<div style='float: left;''>"+"<font size=2>"+tableau[ligne][colonne][2]+"</div>"+"<div style='float: right;'>"+tableau[ligne][colonne][4]+"/"+tableau[ligne][colonne][7]+"</font>"+"</div>"
                                                +"</center>");
                                                }

                                                else{
                                                  $("#"+index0).html("<center>"
                                                  +"<div >"+"<font size=2>"+tableau[ligne][colonne][3]+"</font>"
                                                  +"</div>"+
                                                 "<div >"+"<font size=2>"+tableau[ligne][colonne][9]+"</font>"
                                                 +"</div>"
                                                 +"<div >"+"<font size=2>"+tableau[ligne][colonne][2]+"</div>"
                                                +"</center>");

                                                }


                                              }
                                            
                                          }

                                        
        }; 
    $(document).ready(
      function(){

 $("#sortir,#close,#close0").click(function(){
          $(".choix").css("display","none");
          $(".choix_dt").css("display","none");
          $("select.EC,select.UE,select.Enseignant").css("border-color","white");
           $(".radio").css("border","none");
      });

notif();
function ajax(url,fonction){

        $.ajax({

                  
                  url: base_url + url ,
                  type: "POST",
                  async: false,

                  data : {niv: $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "json",
                  success:fonction,
                  error:function(){
                    alert("erreur de serveur ;(");
                  }
                });

};


function table(data){
  
tableau_d.length=0;

for (var i = 0; data.plages.length - 1 >= i; i++) {

                    tableau_d[data.plages[i].num_plage-1]= [data.plages[i].intitule_plage,data.plages[i].heure_debut,data.plages[i].heure_fin,data.plages[i].id_plage,data.plages[i].num_group];
                    tableau_nbh[data.plages[i].num_plage]=data.plages[i].duree;
                   //alert("entre "+data.plages[i].rendu+" = "+data.plages[i].duree);

                  }

                  
                          //alert(tableau_d);

                             
                              creer_tableau(tableau_d,"table_entete","table");


               $(".Semestre option").remove();
               $(".Semestres option").remove();
               $(".sem option").remove();

                  for (var i = 0; data.semestre.length - 1 >= i; i++) {
                    
                   
                      $("select.Semestre").append("<option id="+data.semestre[i].id_semestre+">"+ data.semestre[i].semestre+"</option>");
                      
                  }

                  for (var i = 0; data.semestre.length - 1 >= i; i++) {
                  $("select.Semestres").append("<option id="+data.semestre[i].id_semestre+">"+ data.semestre[i].semestre+"</option>");
                      
                  }
                  
 for (var i = 0; data.jour.length - 1 >= i; i++) {
                    
                   
                     tableau_id_jour[data.jour[i].num_jour-1]=data.jour[i].id_jour;
                     //alert(tableau_id_jour);
                      
                  }
                  $("select.sem").append("<option id=''>1</option>");
//alert("eee");
if (data.message==null) {

                $(".sem option").remove();
                $(".periode option:selected").remove();

                if (data!= null) {
                  //alert(data.semaine[0].numero);
             $("select.sem").append("<option id=''>"+(parseInt(data.semaine[0].numero,10)+1)+"</option>");
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
             //$("select.periode").append("<option id=>"+"du "+d+" au "+f+"</option>");

             tableau_semaine[0]=data.semaine[0].numero;
             tableau_semaine[1]=data.semaine[0].debut;
             tableau_semaine[2]=data.semaine[0].fin;
             tableau_semaine[3]=data.annee[0].id_annee;

             tableau_semaine[4]=tableau_nbh.length;
             
              tableau_semaine[5]=data.semaine[0].semaine_status;
              tableau_semaine[6]=data.semaine[0].semestre_id;
            //alert(tableau_semaine);
            
           }
           else{
            //alert("ok");
            $("select.sem").append("<option id=''>1</option>");
             $("select.periode").append("<option id=></option>");
           }

        
                   
                     //$("#choix_ok").trigger("click");
}
else{
  //alert("la magie");
  //$(".message").html(data.message);

}
            notif();
            //planifications(9,"table","table_entete");
};

      //chargement des parcours et niveau a la selection d'une mention
          //$(".Mention").change(function(){
              //if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {

                

                $.ajax({

                  
                  url: base_url + "choix/ch1" ,
                  type: "POST",
                  async: false,

                  data : {mention : $id_mention},
                  dataType: "json",
                  success: function(data){
                    

           $(".Parcour option").remove();
           for (var i = 0; data.parcours.length - 1 >= i; i++) {
             $("select.Parcour,select.P").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
           }
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
             //$("select.PN").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");


           }
            $(".pn").html($("select.Niveau").children(".Niveau option:selected").val());
            nivv=$("select.Niveau").children(".Niveau option:selected").attr('id');
           
           ajax("Enregistrement/charge_",table);

           $.ajax({

                  
                  url: base_url + "Enregistrement/precedent" ,
                  type: "POST",
                  async: false,

                  data : {niv: $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "text",
                  success: function(data){
                   

                    //alert(data);
                    $(".preced").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });

           //ajax("Enregistrement/semaines",table_);
           //ajax_("Enregistrement/charge",table__);
           
           
           



           
           
        }
                });


                
      

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              base_url + "choix/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
          
        
           }

            //systeme_plage();

            },
            "json"
            );

            
          });
          //alert($("select.P").children(".P option:selected").attr('id'));

          






    //chargement du dernier emploi du TEMPS 

//ajax(table);
    $("#choix_ok").click(function(){

     

$(".pn").html($("select.Niveau").children(".Niveau option:selected").val());
nivv=$("select.Niveau").children(".Niveau option:selected").attr('id');      //$("td.td").empty();

      for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id[i].length=0;

             tableau_valeurs[i].length=0;


         }

      for (var i = 1; 7 - 1 >= i; i++) {
        
             tableau_id_[i].length=0;

             tableau_valeurs_[i].length=0;


         }

         tableau_d.length=0;
         $("#table_entete").hide();
          $("#table").hide();

$.ajax({

                  
                  url: base_url + "Enregistrement/precedent" ,
                  type: "POST",
                  async: false,

                  data : {niv: $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "text",
                  success: function(data){

                    //alert(data);
                    $(".preced").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });


ajax("Enregistrement/charge_",table);

 $(".n_edit").hide();
       $(".preced").fadeIn(1000);
        $("#edit").css('background-color','green');
  $("#pre").css('background-color','blue');

 for (var i = 1; i <7 ; i++) {
                     //alert("i="+i);
                     for (var j = 1; j <= 50 ; j++) {
                     

                           
                        tableau_id_[i][j]=-1;
                      
                      
                     }
                   }
      });


     $("#choix_date_ok").click(
          function(){
            $(".choix_dt").css("display","none");
          mois=[" ","janvier","fevrier","mars","avril","mai","juin","juillet","auout","septembre","octobre","novembre","decembre"];
            //select_periode=1;
            //$(".choix_date").hide();

          deb_s=$("select.annee_d").children(".annee_d option:selected").val()+
          "-"+$("select.moi_d").children(".moi_d option:selected").attr('class')+
          "-"+$("select.jour_d").children(".jour_d option:selected").attr('class');

          
          fin_s=$("select.annee_f").children(".annee_f option:selected").val()+
          "-"+$("select.moi_f").children(".moi_f option:selected").attr('class')+
          "-"+$("select.jour_f").children(".jour_f option:selected").attr('class');
          
          //alert("du "+deb_s+" au"+fin_s);
          
          if ($("select.moi_d").children(".moi_d option:selected").attr('class') == $("select.moi_f").children(".moi_f option:selected").attr('class')) {
            deb=$("select.jour_d").children(".jour_d option:selected").attr('class');
          }
          else{
          deb=$("select.jour_d").children(".jour_d option:selected").attr('class')+" "+$("select.moi_d").children(".moi_d option:selected").val();
              }
          fin=$("select.jour_f").children(".jour_f option:selected").attr('class')+" "+$("select.moi_f").children(".moi_f option:selected").val();

          $("select.periode").append("<option id=>"+"du "+deb+" au "+fin+"</option>");
           // alert(fin_s);

            if (tableau_semaine[1]!=deb_s) {
            //alert($("select.sem").children(".sem option:selected").val());
              tableau_semaine[0]=$("select.sem").children(".sem option:selected").val();
              tableau_semaine[1]=deb_s;
              tableau_semaine[2]=fin_s;
              tableau_semaine[3]="<?php foreach ($annee as $row) {echo $row->id_annee;} ?>";
              tableau_semaine[4]=tableau_nbh.length;
              tableau_semaine[5]=0;
              tableau_semaine[6]=$("select.Semestre").children(".Semestre option:selected").attr('id');

             
            }
            
      });

  $("#periode").change(
          function(){

            
            
      });


        
            $("select.Semestres").change(function(){


              $(".Enseignant option").remove();
                   $(".EC option").remove();
                    $("input[name=optradio]").removeAttr('checked'); 
                    $(".Salle option").remove();
                    $(".heure option").remove();
                    $(".evolution option").remove();
                    
                $.post(
                          base_url + "Choix_planification/ch",
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

                       
                         },
                        "json"
                );
              
                   
              
            })

      //chargement des UE lorsqu'on clique sur une plage
          
    //chargement des EC etdes enseignant a la selection de l'UE

        $(".UE").change(function(){
              if ($("select.UE").children(".UE option:selected").attr('id')!="nul") {
                      $.post(
                                    base_url + "Choix_planification/ch1",
                                    { UE : $("select.UE").children(".UE option:selected").attr('id')},
                                    function(data){
                                      //alert(aaa[1]);
                                           $(".EC option").remove();
                                           for (var i = 0; data.ec.length - 1 >= i; i++) {
                                               $("select.EC").append("<option id="+data.ec[i].id_ec+">"+data.ec[i].code_ec+"("+data.ec[i].intitule_ec+")"+"</option>");
                                              }

                                              //alert('hbcvksjdghisufgiwsdu');
                                           $(".Enseignant option").remove();
                                           $(".heure option").remove();


                                           for (var i = 0; data.enseignant.length - 1 >= i; i++) {
                                       //alert(data);
                    //$(".b").html(data); 
                            $("select.Enseignant").append("<option id="+data.enseignant[i].id_personnel+">"+ data.enseignant[i].nom_prenom+"</option>");
                                             }


                                           $("select.heure").append("<option>"+data.ec[0].heure+"</option>");

                                           $(".evolution option").remove();

                                            if (data.evolution[0]!=null ) {
                                                d=data.evolution;
                                              }
                                           else{
                                                d=0;
                                                }

                                       for (var i =1; aaa[1] >=i ; i++) {
                                                                
                                          k=tableau_d.length; 
                                          if (i==aaa[1]) {  
                                           k=aaa[2]-1;
                                          }
                                              for (var j =1; k >=j ; j++) {
                                               //alert(j);
                                                    if (tableau_valeurs_[i][j]!=null) {
                                                        if (tableau_id_[i][j][3]==$("select.EC").children(".EC option:selected").attr('id')) {
                                                                if (parseInt(tableau_id_[i][j][4],10)!=0) {

                                                                d=parseInt(tableau_id_[i][j][4],10);
                                                                
                                                              }
                                                    
                                              }
                                                                              
                                           }
                                                                              
                                   }
                                 }
                                                      
                       $("select.evolution").append("<option>"+d+"</option>");
                                            
                                            
                                 
                                           
                                           
                         },
                        "json"
            );

                    $("select.EC,select.UE,select.Enseignant").css("border-color","white");
            }

            else
              {
                    //$(".UE option").remove();
                    $(".EC option").remove();
                     $(".Enseignant option").remove();
              }
            }); 
      // chargement des enseignant au changement de l'EC

        $(".EC").change(function(){

              
                      $.post(
                            base_url + "Choix_planification/ch2",
                            { EC : $("select.EC").children(".EC option:selected").attr('id')},
                            function(data){

                                     $(".Enseignant option").remove();
                                     $(".heure option").remove();

                                     for (var i = 0; data.enseignant.length - 1 >= i; i++) {
                                            $("select.Enseignant").append("<option id="+data.enseignant[i].id_personnel+">"+ data.enseignant[i].nom_prenom+"</option>");
                                     }

                                     $("select.heure").append("<option>"+data.ec[0].heure+"</option>");

                                    

                                      $(".evolution option").remove();

                                          if (data.evolution[0]!=null ) {
                                                d=data.evolution;
                                                
                                              }
                                           else{
                                                d=0;
                                                }

                                     
                                       for (var i =1; aaa[1] >=i ; i++) {
                                                                
                                          k=tableau_d.length; 
                                          if (i==aaa[1]) {
                                           k=aaa[2]-1;
                                          }
                                              for (var j =1; k >=j ; j++) {
                                               //alert(j);
                                                    if (tableau_valeurs_[i][j]!=null) {
                                                        if (tableau_id_[i][j][3]==$("select.EC").children(".EC option:selected").attr('id')) {
                                                                if (parseInt(tableau_id_[i][j][4],10)!=0) {

                                                                d=parseInt(tableau_id_[i][j][4],10);
                                                                
                                                              }
                                                    
                                              }
                                                                              
                                           }
                                                                              
                                   }
                                 }
                                      

                                                            
                       $("select.evolution").append("<option>"+d+"</option>");
                                            
                           },
                          "json"
                );
            }); 
     //Gestion des radio sur le formilaire d'enregistrement d'une plage
     $("input[name=optradio]").change(
          function(){
                          $(".radio").css("border","none");
                           $("select.EC,select.UE,select.Enseignant").css("border-color","white");
                          if ($("input[name=optradio]:checked").val()=="BIBLIOTHEQUE"  || $("input[name=optradio]:checked").val()=="Congé" || $("input[name=optradio]:checked").val()=="INVESTISSEMENT HUMAIN" || $("input[name=optradio]:checked").val()=="Vider") {

                                  $("select.EC").attr("disabled","true");
                                  $("select.UE").attr("disabled","true");
                                  $("select.Enseignant").attr("disabled","true");
                                  $("select.Salle").attr("disabled","true");

                                  if ($("select.UE").children(".UE option:selected").attr('id')!="nul" ) {
                                          //$(".UE option").remove();
                                        $("select.UE").children(".UE option[id=nul]").attr("selected","selected");
                                        //$("select.UE").prepend("<option id='nul' >2</option>");
                                       // $("select.UE").trigger('change');
                                        //$("select.UE").children(".UE option:selected").remove();
                                }
                            
                          }
                          else if ( $("input[name=optradio]:checked").val()=="Cour"    || 
                                    $("input[name=optradio]:checked").val()=="TP"      || 
                                    $("input[name=optradio]:checked").val()=="TPE"     ||
                                    $("input[name=optradio]:checked").val()=="TD"      || 
                                    $("input[name=optradio]:checked").val()=="CC"      ||
                                    $("input[name=optradio]:checked").val()=="SYNTHESE"|| 
                                    $("input[name=optradio]:checked").val()=="PROJET"  ||
                                    $("input[name=optradio]:checked").val()=="RATRAPAGE"
                            ) {
                           
                                  $("select.EC").removeAttr("disabled","false");
                                  $("select.UE").removeAttr("disabled","false");
                                  $("select.Enseignant").removeAttr("disabled","false");
                                  $("select.Salle").removeAttr("disabled","false");

                                  if ($("input[name=optradio]:checked").val()!="Cour") {

                                      $("select.Enseignant").attr("disabled","true");

                                  }
                            

                          }

                     //   $(".evolution option").remove();

                                         

                                     /*for (var i =1; aaa[1] >=i ; i++) {

                                                            
                                          k=3; 
                                          if (i==aaa[1]) {
                                           k=aaa[2]-1;
                                          }
                                              for (var j =1; k >=j ; j++) {
                                               
                                                    if (tableau_valeurs[i][j]!=null) {
                                                        if (tableau_id[i][j][3]==$("select.EC").children(".EC option:selected").attr('id')) {
                                                            if (parseInt(tableau_id[i][j][4],10)!=0) {

                                                                d=parseInt(tableau_id[i][j][4],10);
                                                              }
                                                                    
                                              }
                                                                              
                                           }
                                                                              
                                   }
                                 }
                                                            
                       $("select.evolution").append("<option>"+d+"</option>");*/
            
          });



    //enregistrement d'une plage

         
         
    });




        
      $("#enreg").click(
          function(){

            if  ($("input[name=optradio]:checked").val()!="BIBLIOTHEQUE"  && $("input[name=optradio]:checked").val()!="Congé" && $("input[name=optradio]:checked").val()!="Vider" && $("input[name=optradio]:checked").val()!="PROJET" && $("input[name=optradio]:checked").val()!="SYNTHESE" && $("input[name=optradio]:checked").val()!="INVESTISSEMENT HUMAIN" && $("input[name=optradio]:checked").val()!="RATRAPAGE") {

             $.ajax({

                  
                  url: base_url + "enregistrement/verification" ,
                  type: "POST",
                  //async: false,

                  data : {EC:$("select.EC").children(".EC option:selected").attr('id'),
                          debut:tableau_semaine[1],
                          jour:tableau_id_jour[aaa[1]-1],
                          plage:tableau_d[aaa[2]-1][1],
                          plage1:tableau_d[aaa[2]-1][2]},
                  dataType: "json",
                  success: function(data){
                    if (data.planifications.length!=0) {
                    info='';
            for (var i = 0; data.planifications.length - 1 >= i; i++) {

              info+="   "+(i+1)+"- "+data.planifications[i].nom_prenom+" est programmé en "+data.planifications[i].rendu+" de "+data.planifications[i].heure_debut[0]+data.planifications[i].heure_debut[1]+"h à "+data.planifications[i].heure_fin[0]+data.planifications[i].heure_fin[1]+"h pour un "+data.planifications[i].type_planing+'" de "'+data.planifications[i].intitule_ec+'" dans la meme journée"\n';
             

           }

                    swal('ATENTION!!!',info,'info');

                  }
                    //alert(data);
                    //$(".b").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes d:!jyhqmh");
                  }
                });
           }



            mat=0;
            //alert($("input[name=optradio]:checked").val());
            val=$("select.EC").children(".EC option:selected").val();
            $("select.EC,select.UE,select.Enseignant").css("border-color","white");
            $(".radio").css("border","none");
            
            if ($("input[name=optradio]:checked").val()==null) {
                $(".radio").css("border","1px solid red");

            }
            else{
                  if (val==null && ($("input[name=optradio]:checked").val()!="BIBLIOTHEQUE"  && $("input[name=optradio]:checked").val()!="Congé" && $("input[name=optradio]:checked").val()!="Vider" && $("input[name=optradio]:checked").val()!="INVESTISSEMENT HUMAIN") ) {

                    $("select.EC,select.UE,select.Enseignant").css("border-color","red");
                    if ($("input[name=optradio]:checked").val()=="TP"      || 
                    $("input[name=optradio]:checked").val()=="TPE"     ||
                    $("input[name=optradio]:checked").val()=="TD"      || 
                    $("input[name=optradio]:checked").val()=="CC"      ||
                    $("input[name=optradio]:checked").val()=="SYNTHESE"|| 
                    $("input[name=optradio]:checked").val()=="PROJET"  ||
                    $("input[name=optradio]:checked").val()=="RATRAPAGE"
                      ) {
                     $("select.Enseignant").css("border-color","white");

                    }
                    
                  }
                  else{

        
                 num_jour=aaa[1];
                 num_plage=aaa[2];

                 debut=$debut;


                   
                                   

                                      

                       
                
                if (tableau_valeurs_[num_jour][num_plage]!=null){
                          mat=tableau_id_[num_jour][num_plage][3];
                }
                  val=$("select.evolution").children(".evolution option:selected").val();
          


                            if (val!=null) {

                             Evolution=parseInt(val,10)+parseInt(nbh,10);
                             //alert(Evolution);
                        }

                        else{                                                                
                              if (tableau_valeurs_[num_jour][num_plage]!=null) {
                                Evolution=tableau_valeurs_[num_jour][num_plage][4];
                              }
                              else{
                                Evolution=0;
                              }
                          
                        }
                  
               

                         
              
                if ( $("input[name=optradio]:checked").val()=="BIBLIOTHEQUE"  || $("input[name=optradio]:checked").val()=="Congé" || $("input[name=optradio]:checked").val()=="INVESTISSEMENT HUMAIN") {

                        Salle_id=$("select.Salle").children(".Salle option:selected").attr('id');
                        EC_id=null;
                        UE_id=0;
                        Evolution=0;
                        Salle=0;
                        EC=0;
                        Enseignant1=0;
                        Enseignant2=0;
                        heure=0;
                        UE=0;


                  }  
                  else{     
                  if (                $("input[name=optradio]:checked").val()=="TP"      || 
                                      $("input[name=optradio]:checked").val()=="TPE"     ||
                                      $("input[name=optradio]:checked").val()=="TD"      || 
                                      $("input[name=optradio]:checked").val()=="CC"      || 
                                      $("input[name=optradio]:checked").val()=="Cour" ) 
                                     {

                        Salle_id=$("select.Salle").children(".Salle option:selected").attr('id');
                        EC_id=$("select.EC").children(".EC option:selected").attr('id');
                        UE_id=$("select.UE").children(".UE option:selected").attr('id');
                        Salle=$("select.Salle").children(".Salle option:selected").val();
                        EC=$("select.EC").children(".EC option:selected").val();
                        Enseignant1=$("select.Enseignant").children(".Enseignant option:selected").val();
                        Enseignant2=$("select.Enseignant").children(".Enseignant option:eq(1)").val();
                        heure=$("select.heure").children(".heure option:selected").val();
                        UE=$("select.UE").children(".UE option:selected").val();

                    
                  }
                  else{

                        Salle_id=$("select.Salle").children(".Salle option:selected").attr('id');
                        EC_id=$("select.EC").children(".EC option:selected").attr('id');
                        UE_id=$("select.UE").children(".UE option:selected").attr('id');
                        Evolution=0;
                        Salle=$("select.Salle").children(".Salle option:selected").val();
                        EC=$("select.EC").children(".EC option:selected").val();
                        Enseignant1=$("select.Enseignant").children(".Enseignant option:selected").val();
                        Enseignant2=$("select.Enseignant").children(".Enseignant option:eq(1)").val();
                        heure=$("select.heure").children(".heure option:selected").val();
                        UE=$("select.UE").children(".UE option:selected").val();
                  }

                }


                        //alert(Evolution);  
                     if ( $("input[name=optradio]:checked").val()!="Vider"  ) {
                       tableau_id_[num_jour][num_plage]=[
                            tableau_id_jour[num_jour-1],
                            tableau_d[num_plage-1][3],
                            Salle_id,
                            EC_id,
                            Evolution,
                            UE_id,
                            $("input[name=optradio]:checked").val(),
                            tableau_d[0][4]
                            ];

                            tableau_valeurs_[num_jour][num_plage]=[
                            tableau_id_jour[num_jour-1],
                            tableau_d[num_plage-1][3],
                            Salle,
                            EC,
                            Evolution,
                            Enseignant1,
                            Enseignant2,
                            heure,
                            UE,
                            $("input[name=optradio]:checked").val()
                            ];



                  
                   // alert(index);

                       

                   $(".choix").css("display","none");
                      s=$("select.Semestre").children(".Semestre option:selected").attr('id');
                       Remplir(tableau_valeurs_,aaa[1],aaa[2],index);

                      evolution(tableau_id_,tableau_id_[num_jour][num_plage][3]);
                      
                      if (mat!=0 && mat!=null) {
                        evolution(tableau_id_,mat);

                      }
                     // alert(tableau_valeurs[num_jour][num_plage]);
                      }
                      else{
                        if (tableau_valeurs_[num_jour][num_plage]!=null) {
                        tableau_valeurs_[num_jour][num_plage]=-1;
                            tableau_id_[num_jour][num_plage]=-1;
                            $("#"+index).empty();
                      if (mat!=0 && mat!=null) {

                        evolution(tableau_id_,mat);
                      }
                          
                          }

                      }
                     // alert(tableau_valeurs_);

                      $(".choix").css("display","none");
                      s=$("select.Semestre").children(".Semestre option:selected").attr('id');

                              }


                                   
             
            }
           
                                    });


      $("#Imprimer").click(function(){
//alert(tableau_id_jour);
              $.ajax({

                  
                  url: base_url + "enregistrement/enreg" ,
                  type: "POST",
                  //async: false,

                  data : {tableau_plages:tableau_id_,tableau_semaine:tableau_semaine,niv:$("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "text",
                  success: function(data){
                   swal('','Emploi du temps Enregistré avec success','success');


                  
                   notif();
                    //alert(data);
                    //$(".b").html(data);
                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
                });


      });


$("#pre").css('background-color','blue');
$(".n_edit").hide();
$("#edit").click(function(){
 
$(".preced").hide();
$("#edit").css('background-color','blue');
  $("#pre").css('background-color','green');
$(".n_edit").fadeIn(1000);


                });
$("#pre").click(function(){
      $(".n_edit").hide();
       $(".preced").fadeIn(1000);
        $("#edit").css('background-color','green');
  $("#pre").css('background-color','blue');

                });


      