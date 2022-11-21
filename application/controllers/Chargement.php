<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chargement extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('Mentions');
		$this->load->model('Emploi');
		$this->load->model('Planification');
		$this->load->library('Pdf');

		if (empty($this->session->id_personnel)) {
			redirect('authentification/');
		}

		//$this ->load->library( 'Pdf' );
		//$this ->load->view( 'view_file' );
	}
	public function charge(){
		/*$debut= $this->input->post('debut');
		$fin= $this->input->post('fin');
		$numero= $this->input->post('numero');
		$annee= $this->input->post('annee');
		$data0=array('debut'=> $debut,'fin'=> $fin,'numero'=> $numero,'annee_id'=> $annee);

		if ($this->Emploi->insert_semaine($data0)) {
			$data['message']="Enregisrement reussit!!!";
			$data['id_s']=$this->Emploi->select_semaine_max();
			$c=array('id_semaine'=>$data['id_s'][0]->id_semaine);
			$data['semaine']=$this->Emploi->select_semaine($c);

		}
		else
		{
			$data['message']="Erreur d'enregistrement!!!!";
		}
		echo json_encode($data);*/
		echo "string";

	}
	public function evolution(){
		$id= $this->input->post('EC');
		$condition=array('ec_id'=>$id);
		$data1=$this->Emploi->evolution($condition);
		$c=array('id_plannification'=>$data1[0]->id_plannification);
			$data['evolution']=$this->Planification->select_planification($c);
		//print_r($data) ;
		echo json_encode($data);	

		
	} 
	public function plage(){
		$semaine= $this->input->post('semaine');
		$ec= $this->input->post('EC');
		$salle= $this->input->post('Salle');
		$jour= $this->input->post('jour');
		$plage= $this->input->post('plage');
		$evolution= $this->input->post('evolution');
		$c=array('id_plage'=>$plage);
		$data1=$this->Emploi->select_plage($c);
		$c=array('id_jour'=>$jour);
		$data2=$this->Emploi->select_jour($c);
		$data0=array('semaine_id'=> $semaine,'jour_id'=> $data2[0]->id_jour,'plage_id'=> $data1[0]->id_plage 'salle_id'=> $salle,'ec_id'=> $ec,'evolution'=> $evolution);

		if ($this->Emploi->insert_planification($data0)) {
			$data="Enregisrement reussit!!!";

		}
		else
		{
			$data="Erreur d'enregistrement!!!!";
		}
		echo $data;

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
	public function test(){
		
		$this->load->view('templates\header');
    $this->load->view('templates\footer');
	}  
	
	
}

?>
