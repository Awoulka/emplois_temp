
<div class="container top Masquer ">
  <div class="card-header py-3" align="center">
              <h6 class="m-0 font-weight-bold text-primary" style="font-size: 30px;">DEFINITION DES PLAGES</h6>
            </div>
     <div class="row ">

                <div class="col-sm-3">
                        <div class="form-group showback" whidth="100%" style="height:275px">
                          <label for="sel1" >Mention:</label>&nbsp;
                          
                             <select class="form-control Mention" id="sel1" style="width:  70%; float: "><option id='nul'></option>
                              <?php foreach ($mentions as $value) {
                                echo "<option id='".$value->id_mention."'>".$value->abreviation_mention."</option>";
                              } ?>

                             </select>
                          <br>
                          <label for="sel1">Parcour:</label>&nbsp;
                             <select class="form-control Parcour" id="sel1" style="width:  70%; float: "></select>
                          <label for="sel1">Niveau:</label>&nbsp;
                             <select class=" form-control Niveau" id="sel1"  style="width:  70%;"></select>

                          </div>                 
                     </div>
                                  
<div class="col-sm-9 ">
          <h6 class="m-0 font-weight-bold text-primary" style="font-size: 20px;" align="center">
           Liste des plages définis</h6>
           <div class="row ">
              <div class="col-sm-12 showback pp" style="height:250px">
                      
                        
                  
                              
                        </div>

                        </div>
                      </div>
                <div class="row ">
          
                
                  

         <div class="col-sm-12 ">
          <h6 class="m-0 font-weight-bold text-primary" style="font-size: 20px;">
           Liste additive</h6>
          <div class="col-sm-12 showback liste_ajout">
                     
                         </div>
                      
                         </div>
          
    


      <div class="row ">
          <div class="col-sm-12 ">
            <h6 class="m-0 font-weight-bold text-primary" style="font-size: 20px;">
            Espace de création des plages</h6>
          
               <div class="col-sm-12 showback">  

                
                   <input  type="time" style=" width: 70px;" id="d" >
                      <span style="padding:6px 12px; font-size:14px; font-weight:400; line-height:1; color:#555; text-align:center; background-color:#eee; border:0px solid #ccc; border-radius:0px;">à</span>
                   <input  type="time" style=" width: 70px" id="f">
                   <label for="sel1">type:</label>
                    <select class="type" ><option>cour</option><option>pause</option></select>
                    
                  <button type="submit" class="" id="plus" style=" background-color: green;color:white">+</button>
                  <table border="0" style="table-layout: fixed;" width="80%"><tr id="tab0"></tr></table>
                   <table border="1" style="table-layout: fixed;" width="80%"><tr id="tab"></tr></table>
                   <button type="submit" class="" id="ajout" style=" background-color:;">Ajouter</button>

                </div>
                </div>
                <div>
               
                </div>

     </div>                   
      


</div>


 <script type="text/javascript">
   var tableau_dp=[];
     var tableau_niv=[];
var tableau_plages=[];
var celulle;
function systeme_plage(){

    $(".pp").hide();    
    $(".pp").empty();
             $.post(
              "<?php  echo base_url();?>" + "Choix/ch_p",
              { niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
              function(data){
                              $(".pp").empty();
                    //-alert(data.plages[0][0].num_group);
                    celulle="";
                    n=0;
                    b=[];
                    tableau_dp.length=0;
                    b[n]= data.plages[0][0].num_group;
                    for (var i = 0; data.plages.length - 1 >= i; i++) {
                         a=data.plages[i][0].num_group;
                         if (b[n] != a) {
                          n++;
                          b[n]= data.plages[i][0].num_group;
                      
                     }
                    
                                         
                  };
                   // alert(b);
                    for (var j = 0; j <= b.length-1; j++) {
                     
                    for (var i = 0; data.plages.length - 1 >= i; i++) {

                     if (b[j]==data.plages[i][0].num_group) {
                     
                      tableau_dp[data.plages[i][0].num_plage-1]= [data.plages[i][0].intitule_plage,data.plages[i][0].heure_debut,data.plages[i][0].heure_fin,data.plages[i][0].id_plage,data.plages[i][0].num_group,data.plages[i][0].etat];
                     }

                    }
                     //alert(tableau_dp);
                   
                   
                       
                    celulle+="<table  class='' style='table-layout: fixed;' id='plg"+tableau_dp[0][4]+"' width='100%'><tr>";

                                  for (var i = 0; i < tableau_dp.length ; i++) {

                                          if(tableau_dp[i][0]=="cour"){

                      
                                            if((tableau_dp[i+1]!=null && tableau_dp[i+1][0]=="pause") || tableau_dp[i+1]==null){

                                                celulle+="<td>"+tableau_dp[i][1][0]+tableau_dp[i][1][1]+"h"+tableau_dp[i][1][3]+tableau_dp[i][1][4]+"<div align='right' style='float: right;'>"+tableau_dp[i][2][0]+tableau_dp[i][2][1]+"h"+tableau_dp[i][1][3]+tableau_dp[i][1][4]+"</div></td>";
                                  

                                            }
                                          else{
                                                celulle+="<td>"+tableau_dp[i][1][0]+tableau_dp[i][1][1]+"h"+tableau_dp[i][1][3]+tableau_dp[i][1][4]+"</td>";
                                   
                                          }
                                        }
                                          else{
                                            celulle+="<td width='40px'></td>";
                                            
                                          }

                                  };

                                    celulle+="</tr></table>";

                                     celulle+="<table border='1' class='' style='table-layout: fixed;' id='table_entete' width='100%' height='15px'><tr>";
                                  for (var i = 0; i < tableau_dp.length ; i++) {

                                          if(tableau_dp[i][0]=="cour"){

                      
                                            if((tableau_dp[i+1]!=null && tableau_dp[i+1][0]=="pause") || tableau_dp[i+1]==null){

                                                celulle+="<td><center>Cour</center></td>";
                                   
                                            }
                                          else{
                                                celulle+="<td><center>Cour</center></td>";
                                  
                                          }
                                        }
                                          else{
                                            celulle+="<td width='40px'><center>P</center></td>";
                                            
                                          }

                                  };
                                  if (tableau_dp[0][5]==1) {
                                  
                                  celulle+="</tr></table><button type='submit' class='Desactiver' id='"+tableau_dp[0][4]+"' style=' background-color: red;color:white'>Desactiver</button><!--button type='submit' class='' id='plus' style=' background-color: ;'>Modifier</button--><button type='submit' class='del' id='"+tableau_dp[0][4]+"' style=' background-color: ;'>Supprimer</button><br>";
                                  }
                                  else{

                                     celulle+="</tr></table><button type='submit' class='Activer' id='"+tableau_dp[0][4]+"' style=' background-color: green;color:white'>Activer</button><!--button type='submit' class='' id='plus' style=' background-color: ;'>Modifier</button--><button type='submit' class='del' id='"+tableau_dp[0][4]+"' style=' background-color: ;'>Supprimer</button><br>";

                                  }
                                  
                       tableau_dp.length=0;
                       
                  };
                  
                 $(".pp").append(celulle).fadeIn(500);
                

                     $(".del").click(function(){

          //alert($(this).attr('id'));

                     swal({

     
                                        title:"",
                                        text:"êtes vous sur de vouloir suprimer ces plages?",
                                        icon:"warning",
                                        buttons:['Non','Oui'],
                                        dangerMode:false
                                      
                                    }).then((oui)=>{
                                      if (oui) {
                                    $.ajax({

                                                      
                                                      url: "<?php  echo base_url();?>" + "Enregistrement/plage_niv_supp" ,
                                                      type: "POST",
                                                      //async: false,

                                                      data : {num:$(this).attr('id'), niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                                                      dataType: "text",
                                                      success: function(data){

                                                          swal('','plages supprimer avec success','success');

                                                          systeme_plage();   


                                                     //   alert(data);
                                                     if (tableau_d[0][4]==$(this).attr('id')) {
                                              $("#table_entete").empty();
                                              $("#table").empty();
                                             }
                                         
                                            



                                                      },
                                                      error:function(){
                                                        alert("erreur de requetes ");
                                                      }
                                          
                                                  });
                                                        
                                                      }
                                                      else{

                                                        }
                                    });

              

           });

                     $(".Activer").click(function(){

              $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Choix/activ_plage" ,
                  type: "POST",
                  //async: false,

                  data : {num:$(this).attr('id'), niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "json",
                  success: function(data){

                   // alert(data);
                  
                                

                          systeme_plage();

                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
      
              });

           });

                     $(".Desactiver").click(function(){

              $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Choix/desactiv_plage" ,
                  type: "POST",
                  //async: false,

                  data : {num:$(this).attr('id'), niv : $("select.Niveau").children(".Niveau option:selected").attr('id')},
                  dataType: "json",
                  success: function(data){

                    //alert(data);
                  
                                

                          systeme_plage();

                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
      
              });

           });

               
  

               },
              "json"
            );
$(".pp").fadeIn(500);
   

}

function td_supp(table){
   $("#tab0").empty();
           $("#tab"). empty();
        for (var i = 0; i <table.length; i++) {
           x="";
              if (i==table.length-1) {
                x="<div align='right' style='float: right; background-color:'><a href='#'style=' background-color:; whidth:5px;' class='X' id=''>X</a></div>"
              }
              if(table[i][2]=="cour"){

                  celulle0="<td>"+table[i][0]+"h"+"<div align='right' style='float: right;'>"+table[i][1]+"h</div></td>";
               }
           else{
                
               celulle0="<td width='40px'></td>";
                                            
                                          }

          if (table[i][2]=="cour") {
            celulle="<td><center>Cour"+x+"</center></td>";
          }
          else{
            celulle="<td width='40px' id=''><center>P"+x+"</center></td>";
          }
          
          $("#tab0").append(celulle0);
           $("#tab").append(celulle);

       
        }
  
       

        $(".X").click(function(){

            tableau_plages.length-=1;
            td_supp(tableau_plages);
            if (tableau_plages.length==0) {
              $("#ajout").hide();
              $("select.P").children(".P option[id="+$("select.Parcour").children(".Parcour option:selected").attr('id')+"]").attr("selected","selected");
            }

        });
};

   $(document).ready(
      function(){



        $(".Mention").change(function(){
          
          if ($("select.Mention").children(".Mention option:selected").attr('id')!="nul") {
            $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Choix/ch1" ,
                    type: "POST",
                    async: false,

                    data : {mention :  $("select.Mention").children(".Mention option:selected").attr('id')},
                    dataType: "json",
                    success: function(data){
                      

                             $(".Parcour option").remove();
                             for (var i = 0; data.parcours.length - 1 >= i; i++) {
                               $("select.Parcour,select.P").append("<option id="+data.parcours[i].id_parcour+">"+ data.parcours[i].abreviation_parcour+"</option>");
                             }
                             $(".Niveau option").remove();
                             for (var i = 0; data.niveau.length - 1 >= i; i++) {
                               $("select.Niveau,select.N").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
                              
           }
           systeme_plage();

           tableau_niv[0]=$("select.Niveau").children(".Niveau option:selected").attr('id');

                        $(".liste_ajout").empty();
                          $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Enregistrement/select_n" ,
                    type: "POST",
                    async: false,

                    data : {},
                    dataType: "json",
                    success: function(data){
                      
                     
                             for (var i = 0; data.length - 1 >= i; i++) {
                               if (data[i].id_niv_par!=$("select.Niveau").children(".Niveau option:selected").attr('id')) {
                               $(".liste_ajout").append("<label class='checkbox '><input type='checkbox' class='check' name='multiselect' value='"+data[i].id_niv_par+"'>"+data[i].rendu+"</label>&nbsp;&nbsp;");
                             }
                          }

                          $("input.check").click(function(){
                            ii=0;
                           for (var i = 1; i < tableau_niv.length; i++) {
                              if(tableau_niv[i]==$(this).val()){
                                ii=1;
                                 tableau_niv[i]=-1;
                              }
                            }

                            if (ii==0) {
                            tableau_niv[tableau_niv.length]=$(this).val();
                          }
                            //alert(tableau_niv);
                          });
        

        }
                });

        }
                });
          }
          else{

            $(".Parcour option").remove();
            $(".Niveau option").remove();
            $(".liste_ajout").empty();
            systeme_plage();
            tableau_niv.length=0;
           
          }

               });


                
      

     //chargement des niveaux lorsqu'on change la valeur du parcour selectionné
          $(".Parcour").change(function(){

            $.post(
              "<?php  echo base_url();?>" + "Choix/ch2",
              { parcour : $("select.Parcour").children(".Parcour option:selected").attr('id')},
              function(data){
  
           $(".Niveau option").remove();
           for (var i = 0; data.niveau.length - 1 >= i; i++) {
             $("select.Niveau").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
              $("select#PN").append("<option id="+data.niveau[i].id_niv_par+">"+ data.niveau[i].rendu+"</option>");
           
           }
            systeme_plage();

            tableau_niv[0]=$("select.Niveau").children(".Niveau option:selected").attr('id');

                        $(".liste_ajout").empty();
                          $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Enregistrement/select_n" ,
                    type: "POST",
                    async: false,

                    data : {},
                    dataType: "json",
                    success: function(data){
                      
                     
                             for (var i = 0; data.length - 1 >= i; i++) {
                               if (data[i].id_niv_par!=$("select.Niveau").children(".Niveau option:selected").attr('id')) {
                               $(".liste_ajout").append("<label class='checkbox '><input type='checkbox' class='check' name='multiselect' value='"+data[i].id_niv_par+"'>"+data[i].rendu+"</label>&nbsp;&nbsp;");
                              
                             }
                          }

                      $("input.check").click(function(){
                            ii=0;
                           for (var i = 1; i < tableau_niv.length; i++) {
                              if(tableau_niv[i]==$(this).val()){
                                ii=1;
                                 tableau_niv[i]=-1;
                              }
                            }

                            if (ii==0) {
                            tableau_niv[tableau_niv.length]=$(this).val();
                          }
                            //alert(tableau_niv);
                          });

        }
                });
            },
            "json"
            );

            
          });

          
          //systeme_plage();
      $(".Niveau").change(function(){
         systeme_plage();

         tableau_niv[0]=$("select.Niveau").children(".Niveau option:selected").attr('id');

         $(".liste_ajout").empty();
                          $.ajax({

                  
                    url: "<?php  echo base_url();?>" + "Enregistrement/select_n" ,
                    type: "POST",
                    async: false,

                    data : {},
                    dataType: "json",
                    success: function(data){
                      
                     
                             for (var i = 0; data.length - 1 >= i; i++) {
                               if (data[i].id_niv_par!=$("select.Niveau").children(".Niveau option:selected").attr('id')) {
                               $(".liste_ajout").append("<label class='checkbox '><input type='checkbox' class='check' name='multiselect' value='"+data[i].id_niv_par+"'>"+data[i].rendu+"</label>&nbsp;&nbsp;");
                              
                             }
                          }

                          $("input.check").click(function(){
                            ii=0;
                           for (var i = 1; i < tableau_niv.length; i++) {
                              if(tableau_niv[i]==$(this).val()){
                                ii=1;
                                 tableau_niv[i]=-1;
                              }
                            }

                            if (ii==0) {
                            tableau_niv[tableau_niv.length]=$(this).val();
                          }
                            //alert(tableau_niv);
                          });
        

        }
                });
          });


  //gestion de l'ajout d'un systeme de planing
      $("#ajout").hide();
        $("#plus").click(function(){ 
          $("#ajout").show();
          h_d=parseInt($("#d").val()[0]+$("#d").val()[1],10);
          m_d=parseInt($("#d").val()[3]+$("#d").val()[4],10);
          h_f=parseInt($("#f").val()[0]+$("#f").val()[1],10);
          m_f=parseInt($("#f").val()[3]+$("#f").val()[4],10);
          d=-((h_d*60)+m_d)+((h_f*60)+m_f);
          m=d%60;
          d=parseInt(d/60,10);
          //alert(d+":"+m);
          tableau_plages[tableau_plages.length]=[$("#d").val(),$("#f").val(),$("select.type").children(".type option:selected").val(),d,tableau_plages.length+1,$("#d").val()[0]+$("#d").val()[1]+"h"+"-"+$("#f").val()[0]+$("#f").val()[1]+"h"];
          //alert(tableau_plages);

            td_supp(tableau_plages);
          
       });

        
         $("#ajout").click(function(){
             //alert(tableau_plages);
            $.ajax({

                  
                  url: "<?php  echo base_url();?>" + "Enregistrement/plages" ,
                  type: "POST",
                  //async: false,

                  data : {tableau: tableau_plages , tab : tableau_niv},
                  dataType: "text",
                  success: function(data){

                   // alert(data);
                    //$(".a").html(data);
                    tableau_plages.length=0;

                    $("#tab0").empty();
                    $("#tab").empty();
                    
                    $("#ajout").hide();
                    systeme_plage();

                  },
                  error:function(){
                    alert("erreur de requetes ");
                  }
      
              });

           });

         






       
       }); 
 </script>
