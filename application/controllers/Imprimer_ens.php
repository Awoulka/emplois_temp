<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimer_ens extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
        $this->load->model('Mentions');
		$this->load->model('Parcours');
		$this->load->library('Pdf');
		$this->load->model('Impression');
		$this->load->model('Impression_ens');

    if (empty($this->session->id_personnel)) {
      redirect('authentification/');
    }
       // $this->load->library('session');

	}
      

    public function index($id_semaine,$id_personnel){
      
         
           $debut_semaine=$this->Impression_ens->select_semaine(array("id_semaine"=> $id_semaine));
           $date=$debut_semaine[0]->debut;
          $data['planifications']=$this->Impression_ens->planification_enseignant(array("debut"=> $date,"id_personnel"=>$id_personnel));

  $data['jour']=$this->Impression_ens->select_jour();
  $i=0;
  foreach ($data['jour'] as $value) {
     $tableau[$value->id_jour]=0;
     $fin_jour[$value->id_jour]=0;
     $debut_jour[$value->id_jour]=0;
     $indice[$i]=$value->id_jour;
     $i++;
  }
 
   $h=0;
    foreach ($data['planifications'] as $value) {
            $value->plages=$this->Impression_ens->select_plage(array("id_plage"=> $value->plage_id));
            $i=$value->jour_id;
           // somme heure par jour
         $tableau[$i]=(int)$value->plages[0]->duree+$tableau[$i];
         $heure_debut[$h]=$value->plages[0]->heure_debut[0].$value->plages[0]->heure_debut[1];
         $heure_fin[$h]=$value->plages[0]->heure_fin[0].$value->plages[0]->heure_fin[1];
         $h++;
              


                /// le minimum heure de la journee
            if ($debut_jour[$i]==0) {
                  $debut_jour[$i]=$value->plages[0]->heure_debut[0].$value->plages[0]->heure_debut[1];
                  $a=$i;
              }             
            else{
                if ($debut_jour[$a]>$value->plages[0]->heure_debut[0].$value->plages[0]->heure_debut[1]) {
                   $debut_jour[$a]=$value->plages[0]->heure_debut[0].$value->plages[0]->heure_debut[1];
                    $a=$i;
                }
              }
           
            /// le max heure de la journee
     
              if ( $fin_jour[$i]==0) {
                   $fin_jour[$i]=$value->plages[0]->heure_fin[0].$value->plages[0]->heure_fin[1];
                  $b=$i;
              }             
            else{
                if ( $fin_jour[$b]< $value->plages[0]->heure_fin[0].$value->plages[0]->heure_fin[1]) {
                    $fin_jour[$b]=$value->plages[0]->heure_fin[0].$value->plages[0]->heure_fin[1];
                    $b=$i;
                }
            }

     }
         foreach ($data['jour'] as $row) {
           $row->max_heure=$fin_jour[$row->id_jour];
           $row->min_heure=$debut_jour[$row->id_jour];
           $row->somme_duree=$tableau[$row->id_jour];
          
         }

        // min et max heure de la semaine

            $fin=0;
           for ($i=0; $i <$h ; $i++) { 
             if ($fin<$heure_fin[$i]) {
                $fin=$heure_fin[$i];
             }
           }
         
           $debut=$heure_debut[0];
           for ($i=0; $i <$h ; $i++) { 
             if ($debut>$heure_debut[$i]) {
                 $debut=$heure_debut[$i];
             }
           }
         
          // $data["taille"]=$taille;
           $data["heure_debut"]=$debut;
           $data["heure_fin"]=$fin;

         

        $condition=array('id_personnel' =>  $id_personnel );
           
        $data['enseignant']=$this->Impression_ens->select_personne($condition);
            $id= array('id_semaine' => $id_semaine);	
            $data_s=$this->Impression_ens->select($id);
          
            $id= array('id_annee' => $data_s[0]->annee_id );
            $data_a=$this->Impression_ens->select_annee($id);
     foreach ($data['planifications'] as $value) {
        	$ec=$value->ec_id;
        	$id= array('id_jour' => $value->jour_id);
        	$data1=$this->Impression_ens->select_jour($id);
        	 $value->jour_id=$data1[0]->num_jour;

			$id= array('id_salle' => $value->salle_id);
        	$data1=$this->Impression_ens->select_salle($id);
        	 $value->salle=$data1[0]->nom_salle."(". $data1[0]->intitule_salle.")";
 

			$id= array('id_ec' => $value->ec_id);
        	$value->ec=$this->Impression_ens->select_ec($id);
        	
        	$id= array('id_ec' => $ec);
        	$data1=$this->Impression_ens->select_ec($id);
        	$ue=$data1[0]->ue_id;

        	$id= array('ue_id' => $ue);
        	$data_niv=$this->Impression_ens->select_niv($id);

        	$id= array('id_parcour' => $data_niv[0]->parcour_id);
        	$data1=$this->Parcours->select($id);
        	$m=$data1[0]->mention_id;

        	$id= array('id_mention' => $m);
        	$data_m=$this->Mentions->select($id);

          $value->mension=$data_m;
        	$data['semaine']=$data_s;
        	$data['annee']=$data_a;
        	$data['niv']=$data_niv;
        	$data['mention']=$data_m;
    
     //die;
    //
	}
  
   // echo "<pre>";      
   //  print_r($data);
   //  echo "</pre>";
    $this->pdf->generate('templates/vue_ens',$data);
       $this->load->view('templates/vue_ens',$data);
       

   }
	
	function pdf(){
		$this->load->view('welcome_message');
		$html = $this->output->get_output();
        		// Load pdf library
		$this->load->library('pdf');
		$this->pdf->loadHtml($html);
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->render();
		// Output the generated PDF (1 = download and 0 = preview)
		$this->pdf->stream("html_contents.pdf", array("Attachment"=> 0));		
	}
  
}


/*

echo "<tr><td rowspan='".$value->c."' style='width: 6% ;' id='".$value->id_jour."'><b>".$value->intitule_jour."</b></td>";
              
                     for ($j=1; $j <=($heure_fin-$heure_debut) ; $j++) { 
                       echo "<td></td>";
                         }
                           
                         for ($k=1; $k <$value->c ; $k++) { 
                             echo "</tr><tr>";
                             for ($j=1; $j <=($heure_fin-$heure_debut) ; $j++) { 
                                  echo "<td></td>";
                              } 
                           
                          }
                     
                        
               echo "</tr>";

*/
?>
