<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stat extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('Mentions');
		$this->load->model('Parcours');
		$this->load->library('Pdf');
		$this->load->model('Impression');
        $this->load->model('Impression_ens');
        $this->load->helper('url');

        if (empty($this->session->id_personnel)) {
      redirect('authentification/');
    }
		//$this ->load->library( 'Pdf' );
		//$this ->load->view( 'view_file' );
	}
	public function index(){
		
          $data['annee']=$this->Impression->annees();
          $data['mentions']=$this->Mentions->select();
          $data['niv_par']=$this->Impression->select_niv_par();
          $data['enseignants']=$this->Impression_ens->select_enseignants();
          $data['departement']=$this->Impression->select_departement();
           //$this->load->view('templates/home',$data);
		 //$this->load->view('templates/liste',$data);
       $this->load->view('templates/statistiques',$data);
	}
   public function select_ec(){
   	$id= $this->input->post('Niveau');
    $condition = array('id_niv_par' => $id );
    $data['ec']=$this->Impression->select_ec_stat($condition);  
    //print_r($data);
    $datax = array();
    $datay= array();

     $i=0;
    foreach ($data['ec'] as $value) {
        $datax[$i]= $value->code_ec;
        $condition = array('ec_id' => $value->id_ec );
        $a=$this->Impression_ens->select_evolution($condition);
        
            $datay[$i]=$a*100/(int)$value->heure;
        
        $i++;
   
   
   	
   }
    $Output = array('y' =>$datay,'x'=>$datax);
   echo json_encode($Output);
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
	public function niv(){
    $id= $this->input->post('id_niv');
    $condition = array('niv_par_id' => $id );
    $id_s=$this->Impression->select_emplois($condition);

         $i=0;
     	foreach ($id_s as $value) {
     		$id_s[$i] =$value->semaine_id;
     		$condition = array('id_semaine' => $id_s[$i],'semaine_status' => 4);
     		$data[$i]=$this->Impression->select_semaine($condition);
     		$i+=1;
     	}
     	// print_r($data,TRUE);
      echo json_encode($data);
       }
      
	
	public function ch(){
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data['semestre']=$this->db->get('semestres')->result();
	$data['mentions']=$this->Mentions->select();
	$this->load->view('templates/header');
 	$this->load->view('templates/contaner',$data);

    $this->load->view('templates/footer');
    //$this->mypdf->generate('templates/vue',$data);
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
	public function ch3()
	{   
		$id= $this->input->post('Niveau');
		$condition=array('id_niv_par'=>$id);
		  $id_niv=$this->Parcours->select_niv($condition);
        //print_r( $id_niv);
    
      //  die;
		$condition=array('niveau_id'=> $id_niv[0]->niveau_id);
		//echo $id ;die;
      
		$data['semestres']=$this->Parcours->select_semestre_($condition);
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

  public function select_ec_semestre(){
    $id= $this->input->post('Niveau');
    $id1= $this->input->post('sem');
    $condition = array('id_niv_par' => $id,'semestre_id'=>$id1 );
    $data['ec']=$this->Impression->select_ec_semestre($condition);  
    
    $datax = array();
    $datay= array();

     $i=0;
    foreach ($data['ec'] as $value) {
        $datax[$i]= $value->code_ec;
        $condition = array('ec_id' => $value->id_ec );
        $a=$this->Impression_ens->select_evolution($condition);
        
            $datay[$i]=$a*100/$value->heure;
        
        $i++;
   
   
    
   }
 }
	
}

?>
