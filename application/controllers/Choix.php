<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Choix extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('Mentions');
		$this->load->model('Parcours');
		$this->load->model('Emploi');
		$this->load->model('Impression');
		$this->load->model('Impression_ens');
		$this->load->library('Pdf');
		if (empty($this->session->id_personnel)) {
			redirect('authentification/');
		}

		//$this ->load->library( 'Pdf' );
		//$this ->load->view( 'view_file' );
	}
	public function ch(){
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
$data['mentions']=$this->Mentions->select();
$data['cycles']=$this->Mentions->select_cycle();
	$this->load->view('template/index',$data);
	//$this->load->view('templates/header');
	//$this->load->view('templates/contaner',$data);
    //$this->load->view('templates/footer');
    //$this->mypdf->generate('dompdf',$data);
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

	public function ch_p(){
		$id= $this->input->post('niv');
		$condition=array('niv_par_id'=>$id);
		$data1=$this->Emploi->select_plage_niv($condition);
		$a=$data1[0]->num_group;
		$i=0;
		$j=0;
		foreach ($data1 as $value) {
			
				
				$data2=$this->Emploi->select_plage(array('id_plage'=>$value->plage_id));
			
				foreach ($data2 as $value2) {
			
				$value2->num_group=$value->num_group;
				$value2->etat=$value->etat;
				
		}

				$data['plages'][$i]=$data2;
				$data['plages'][$i][count($data['plages'][$i])]=$value->num_group;
				$i++;
				
		}
		echo json_encode($data);


		
	}  
	
	public function ch_plage(){
		$data['mentions']=$this->Mentions->select();
		$this->load->view('templates/header');
		$this->load->view('templates/plages',$data);
	} 
	public function dashboard(){
			//$data['mentions']=$this->Mentions->select();
			$this->load->view('template/index.php');
		} 

	public function edition(){
			//$data['mentions']=$this->Mentions->select();
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
			$this->load->view('template/edition.php',$data);
		} 

	public function nouvelle_edition(){
			//$data['mentions']=$this->Mentions->select();
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
			$this->load->view('template/nouvel_edit.php',$data);
		} 

	public function modification($sem,$niv){
	//$id= $this->input->post('niv');
		$id= $niv;
	$this->db->where(array('id_niv_par'=> $niv));
	$n=$this->db->get('niv_par')->result();

	$this->db->where(array('niveau_id'=> $n[0]->niveau_id));
        $data['semestre']=$this->db->get('semestres')->result();

	$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
		$data['n']=$id;
		$data['id_sem']=$sem;
		 $this->load->view('template/modif',$data);
	
			}

	public function consult_salle(){
			//$data['mentions']=$this->Mentions->select();
		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
          $data['niv_par']=$this->Impression->select_niv_par();
          $data['enseignants']=$this->Impression_ens->select_enseignants();
          $data['departement']=$this->Impression->select_departement();
			$this->load->view('template/salle.php',$data);
		} 

	public function consult_Enseignant(){
			//$data['mentions']=$this->Mentions->select();
		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
          $data['niv_par']=$this->Impression->select_niv_par();
          $data['enseignants']=$this->Impression_ens->select_enseignants();
          $data['departement']=$this->Impression->select_departement();
			$this->load->view('template/Enseignant.php',$data);
		} 
	

	public function activ_plage(){

		$id= $this->input->post('niv');
		$n_group=$this->input->post('num');
		$condition=array('niv_par_id'=>$id);
		$dat=array('etat'=>0);
		if ($this->Emploi->activation($dat,$condition)) {
			$data['1']="reussit1";
		
		}
		$condition=array('niv_par_id'=>$id,'num_group'=>$n_group);
		$dat=array('etat'=>1);
		if ($this->Emploi->activation($dat,$condition)) {
			$data['2']="reussit";
			
			echo json_encode($data);
		}
	}

	public function desactiv_plage(){

		$id= $this->input->post('niv');
		$n_group=$this->input->post('num');
		
		$condition=array('niv_par_id'=>$id,'num_group'=>$n_group);
		$dat=array('etat'=>0);
		if ($this->Emploi->activation($dat,$condition)) {
			$data['2']="reussit";
			
			echo json_encode($data);
		}
	}

	
	
}

?>
	