<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Choix_planification extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('Mentions');
		$this->load->model('Parcours');
		$this->load->model('Planification');
		
		if (empty($this->session->id_personnel)) {
			redirect('authentification/');
		}
		//$this ->load->library( 'Pdf' );
		//$this ->load->view( 'view_file' );
	}
	

	public function ch(){

		$id= $this->input->post('PN');
		$idS= $this->input->post('Semestre');
		$condition=array('niv_par_id'=> $id,
						 'semestre_id'=> $idS);
		$data['ue']=$this->Planification->select($condition);
		$data['salle']=$this->Planification->select_salle();
		//print_r($data) ;
		echo json_encode($data);

		
	}

	public function ch1(){
		$id= $this->input->post('UE');
		$condition=array('ue_id'=> $id);
		$data['ec']=$this->Planification->select_ec($condition);
		$data1=$this->Planification->select_ec($condition);
		$condition1=array('ec_id'=> $data1[0]->id_ec,'status'=>"en cours");
		$data['enseignant']=$this->Planification->select_enseignant($condition1);
		$condition1=array('ec_id'=> $data1[0]->id_ec,'status'=>"en cours",'semaine_status'=>4);
		$data1=$this->Planification->evolution_max($condition1);
		if ( is_null($data1[0]->evolution)) {
			$data['evolution']=0;
		}
		else{
			$data['evolution']=$data1[0]->evolution;
		}
		//print_r($data) ;
		echo json_encode($data);
	}

	public function ch1_td(){
		$id= $this->input->post('UE');
		$condition=array('ue_id'=> $id);
		$data['ec']=$this->Planification->select_ec($condition);
		$data1=$this->Planification->select_ec($condition);
		$condition1=array('ec_id'=> $this->input->post('EC'),'status'=>"en cours");
		$data['enseignant']=$this->Planification->select_enseignant($condition1);
		$condition1=array('ec_id'=> $this->input->post('EC'),'status'=>"en cours",'semaine_status'=>4);
		$data1=$this->Planification->evolution_max($condition1);
		if ( is_null($data1[0]->evolution)) {
			$data['evolution']=0;
		}
		else{
			$data['evolution']=$data1[0]->evolution;
		}
		//print_r($data) ;
		echo json_encode($data);
	}

	public function ch2(){
		$id= $this->input->post('EC');
		$condition=array('id_ec'=>$id);
		$data['ec']=$this->Planification->select_ec($condition);
		$condition=array('ec_id'=>$id,'status'=>"en cours",'semaine_status'=>4);
		$data1=$this->Planification->evolution_max($condition);
		if ( is_null($data1[0]->evolution)) {
			$data['evolution']=0;
		}
		else{
			$data['evolution']=$data1[0]->evolution;
		}
		
		$condition=array('ec_id'=>$id,'status'=>"en cours");
		$data['enseignant']=$this->Planification->select_enseignant($condition);
		//print_r($data) ;
		echo json_encode($data);	

		
	}  

	public function evolution(){
		$id= $this->input->post('EC');
		$condition=array('ec_id'=>$id,'status'=>"en cours",'semaine_status'=>4);
		$data1=$this->Planification->evolution_max($condition);

		echo json_encode($data1);
	} 
	
	
}

?>
