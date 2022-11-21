<?php

class Authentification extends CI_Controller
{


	public function __construct(){

		parent::__construct();
		$this->load->helpers('url');
		$this->load->model('compte');
		$this->load->library('session');

		$this->encryption->initialize(array('driver' => 'mcrypt'));
	}	
	
	public function index(){

		$this->load->helpers('url');
		$this->load->view('templates/Authentification');
		
	

	}
	public function poste() {

		$this->load->helpers('url');

		$this->load->view('poste');
	}
	public function connexion(){
		$login=$this->input->post('login');
		$password=$this->input->post('password');

		
		$parametre=array('speudo'=>$login);
		$v=$this->compte->verifier($parametre);
		//$v=$this->departements->select_mention($parametre);
		//echo $this->encryption->encrypt("yaoudam");
		//die();
		if($v==1){

				$p=$this->compte->select_id(array('speudo'=>$login));
				if ( $password == $this->encryption->decrypt($p[0]->pass)) {

							$resultat=$this->compte->select_id($parametre);
							if (!empty($resultat)) {
								$this->session->set_userdata('id_personnel',$resultat[0]->personnel_id) ;
							}else{
								$this->session->set_userdata('id_personnel','') ;
							}
							
							$c=array('id_personnel'=> $this->session->id_personnel);

							$resultat1=$this->compte->select_personnel($c);
							$this->session->set_userdata('nom_personnel',$resultat1[0]->nom_prenom) ;
							//echo $this->session->nom_personnel;

							$c=array('parcours.departement_id'=> $resultat1[0]->departement_id);

							$resultat1=$this->compte->select_mention($c);
							if (!empty($resultat1)) {
								$this->session->set_userdata('id_mention',$resultat1[0]->id_mention);
								$this->session->set_userdata('abreviation_mention',$resultat1[0]->abreviation_mention);
								$this->session->set_userdata('id_mention',$resultat1[0]->id_mention);
							}else{
								$this->session->set_userdata('id_mention','');
								$this->session->set_userdata('abreviation_mention','');
								$this->session->set_userdata('id_mention','');
							}
							
							$c=array('id_personnel'=> $this->session->id_personnel);

							$resultat1=$this->compte->select_poste($c);
							$this->session->set_userdata('poste',$resultat1);


							$resultat1=$this->compte->select_role($c);
							$this->session->set_userdata('role',$resultat1[0]->role_id);
							
							//echo $this->session->poste;
							//die();
							redirect('choix/ch');
				}
				else{
						$this->session->set_flashdata('message',"le mot de passe de l'utilisateur est faux");
	                	redirect('');
				}

			
			
		}
		else {
			 $this->session->set_flashdata("message","le Pseudo n'est pas valide");
                redirect('');
		
			//$data['message']=1;
			//$this->load->view('templates/Authentification',$data);
			
		}
	}
	public function deconnexion(){
		$this->session->sess_destroy();


		redirect('authentification/');
		
	

	}

}