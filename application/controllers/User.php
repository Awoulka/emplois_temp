é+éé²<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('UserM');
		
	}
	public function validation(){
		
		$this->form_validation->set_rules('nom','required');
		//$this->form_validation->set_rules('prenom','required');
		$this->form_validation->set_rules('email','required');
		$this->form_validation->set_rules('pwd','required');
		if ( $this->form_validation->run()) {
			echo "enregistrement reussit!!!!!!!!!";
		}
		else{
			echo "echec de l'enregistrement!!!!!!";
		}
		$this->UserM->insert($_POST['nom'],$_POST['email'],$_POST['pwd']);
		$result=$this->UserM->select();
	$data= array('list' => $result );	
	$this->load->view('page1',$data);
	$this->load->view('page1');
	}
}
//$this->UserM->insert('nom','prenom','email','pwd')
?>
