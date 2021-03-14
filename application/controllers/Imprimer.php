<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class imprimer extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('Mentions');
		$this->load->model('Parcours');
		$this->load->library('Pdf');
		$this->load->model('Impression');
		$this->load->model('Impression_ens');
			$this->load->model('Emploi');

			if (empty($this->session->id_personnel)) {
			redirect('authentification/');
		}
	}
	public function index($id1, $id2){
        //$id_niv_par=$this->input->post('id_salle');
       // $date_debut=$this->input->post('debut');
       // $id_niv = array('id_niv_par' => $id_niv_par );
       // $rendu= $this->Impression->niv_par($id_niv);
        //$debut_semaine = array('debut' => $date_debut);
		//$id_semaine=$this->Impression->select_id_semaine($debut_semaine);
		//$id= array('id_semaine' => $id_semaine[0]->id_semaine);	
        //$id= array('semaine_id' => $id);
       // $existe=$this->Impression->select_count_planification($id);
       //  if ($existe>0) {
       	$id = array('id_semaine' => $id1);
		$data_s=$this->Impression->select($id);
		foreach ($data_s as $key) {
        	$id=array('id_semestre'=> $key->semestre_id);
        	$key->semestre=$this->Impression->select_semestre_($id);
        }
        $id = array('semaine_id' => $id1);
        $data['planifications']=$this->Impression->select_planification($id);
     
        $id= array('id_annee' => $data_s[0]->annee_id );
        $data_a=$this->Impression->select_annee($id);

        $n_group=$data['planifications'][0]->n_groupe;
		$condition=array('niv_par_id'=>$id2,'num_group'=>$n_group);
		$data['plages']=$this->Emploi->select_plage_n($condition);

        foreach ($data['planifications'] as $value) {
        	
        	$ec=$value->ec_id;
        	$id= array('id_jour' => $value->jour_id);
        	$data1=$this->Impression->select_jour($id);
        	$value->jour_id=$data1[0]->num_jour;

        	$id= array('id_plage' => $value->plage_id);
        	$data1=$this->Impression->select_plage($id);
        	$value->plage_id=$data1[0]->num_plage;
 
			$id= array('id_salle' => $value->salle_id);
        	$data1=$this->Impression->select_salle($id);
        	$value->salle_id=$data1[0]->nom_salle."(". $data1[0]->intitule_salle.")";
 

			$id= array('id_ec' => $value->ec_id);
			$data1=$this->Impression->select_ec($id);
        	$value->ec_id=$this->Impression->select_ec($id);
        	$value->heure=$data1[0]->heure;

 		    $id=array('ec_id'=> $data1[0]->id_ec);
 		    $value->enseignant=$this->Impression->select_enseignant($id);


       }
        	$id= array('id_ec' => $ec);
        	$data1=$this->Impression->select_ec($id);
        	$ue=$data1[0]->ue_id;

        	$id= array('id_ue' => $ue);
        	$data1=$this->Impression->select_ue($id);
        	$s=$data1[0]->semestre_id;

        	$id= array('id_semestre' => $s);
        	$data_st=$this->Impression->select_semestre($id);

        	$id= array('ue_id' => $ue);
        	$data_niv=$this->Impression->select_niv($id);

        	$id= array('id_parcour' => $data_niv[0]->parcour_id);
        	$data1=$this->Parcours->select($id);
        	$m=$data1[0]->mention_id;

        	$id= array('id_mention' => $m);
        	$data_m=$this->Mentions->select($id);
        	$data['semaine']=$data_s;
        	$data['annee']=$data_a;
        	$data['semestre']=$data_st;
        	$data['niv']=$data_niv;
        	$data['mention']=$data_m;
           //je ne comprend pas pourquoi petit (p)
	 $this->pdf->generate('templates/imprimer',$data);

        	//echo "<pre>";
		//print_r($data) ;
		//echo "</pre>";
     $this->load->view('templates/imprimer',$data);
	}
	
 public function ch(){
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data['semestre']=$this->db->get('semestres')->result();
		$data['mentions']=$this->Mentions->select();
		$this->load->view('templates/header');
		$this->load->view('templates/contaner',$data);

	    $this->load->view('templates/footer');
	    $this->Pdf->generate('templates/vue',$data);
		 //site_url('projet/acceuil');	
		//$this->load->view('template/contaner',$data);
	}

	public function ch1(){
		$id= $this->input->post('mention');
		$condition=array('mention_id'=> $id);
		$data['parcours']=$this->Parcours->select($condition);
		$data1=$this->Parcours->select($condition);
		$condition1=array('parcour_id'=> $data1[0]->id_parcour);
		$data['niveau']=$this->Parcours->select_niv($condition1);
		//print_r($data) ;
		echo json_encode($data);

		
	}
	public function ch2(){
		$id= $this->input->post('parcour');
		$condition=array('parcour_id'=> $id);
		$data['niveau']=$this->Parcours->select_niv($condition);
		//print_r($data) ;

		echo json_encode($data);

		
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

	public function emp(){
		$id= $this->input->post('id_ens');
    $condition = array('personnel_id' => $id );
    $data=$this->Impression_ens->select_emploi_ens($condition);                                                  
   
         $i=0;
     	foreach ($data as $value) {
     		$id_s[$i] =$value->semaine_id;
     		$condition = array('id_semaine' => $id_s[$i]);
     		$data[$i]=$this->Impression->select_semaine($condition);
     		$i+=1;
     	}
     	 //print_r($data);
      echo json_encode($data);
	}
	
	public function ens(){ 
	
     	$id= $this->input->post('dep');
         $condition = array('departement_id' => $id );
     	$data['personnels']=$this->Impression_ens->select_personnels($condition);
      //print_r($data);
      echo json_encode($data);
	}
	
	
}

?>
