<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enregistrement extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();

		$this->load->model('Mentions');
		$this->load->model('Parcours');
		$this->load->model('Emploi');
		$this->load->model('Planification');
		$this->load->model('Impression');
		$this->load->model('Impression_ens');
		$this->load->library('Pdf');

		if (empty($this->session->id_personnel)) {
			redirect('authentification/');
		}
		//$this ->load->library( 'Pdf' );
		//$this ->load->view( 'view_file' );
	}
	public function enreg(){
		$tableau_plages= $this->input->post('tableau_plages');
		$tableau_semaine= $this->input->post('tableau_semaine');
		$data0=array('debut'=>$tableau_semaine[1],'fin'=> $tableau_semaine[2],'numero'=> $tableau_semaine[0],'annee_id'=>$tableau_semaine[3],'semestre_id'=>$tableau_semaine[6]);
		$ens=null;
		
		
		/*echo "<pre>";
		print_r($tableau_plages);
		print_r($tableau_semaine);
		echo "</pre>";
		die();
		*/
		
		//$data1=array('semaine_id'=> $tableau_plages[][][],'jour_id'=> $data2[0]->id_jour,'plage_id'=> $data1[0]->id_plage, 'salle_id'=> $salle,'ec_id'=> $ec,'evolution'=> $evolution);
		if ($this->Emploi->insert_semaine($data0)) {
			$data['message1']="Enregisrement de la semaine reussit!!!";
			$data['id_s']=$this->Emploi->select_semaine_max();
			$c=array('id_semaine'=>$data['id_s'][0]->id_semaine);
			//$data['semaine']=$this->Emploi->select_semaine($c);

		}
		else
		{
			$data['message1']="Erreur d'enregistrement de la semaine!!!!";
		}
		
			//$data['s']=count($tableau_plages[1]);
				
			for ($i=1; $i < 7 ; $i++) { 


			
				for ($j=1; $j < $tableau_semaine[4] ; $j++) { 

					

					if ($tableau_plages[$i][$j]!=-1) {
						if ($tableau_plages[$i][$j][6]=="BIBLIOTHEQUE" || $tableau_plages[$i][$j][6]=="Congé" || $tableau_plages[$i][$j][6]=="INVEST_HUMAIN" || $tableau_plages[$i][$j][6]=="PROJET" ) {
							$c1=array('id_niv_par'=>$this->input->post('niv'));
							$d=$this->Emploi->select_ec($c1);
							
							$data1=array('semaine_id'=> $data['id_s'][0]->id_semaine,'jour_id'=> $tableau_plages[$i][$j][0],'plage_id'=> $tableau_plages[$i][$j][1],'salle_id'=> $tableau_plages[$i][$j][2],'ec_id'=> $d[0]->id_ec,'evolution'=> $tableau_plages[$i][$j][4],'n_groupe'=> $tableau_plages[$i][$j][7],'type_planing'=> $tableau_plages[$i][$j][6],'groupe'=> $tableau_plages[$i][$j][8],'heure_definit'=> $tableau_plages[$i][$j][9],'ens_prog'=> $ens);

						}
						else{

							if ($tableau_plages[$i][$j][10]!= null && $tableau_plages[$i][$j][10]!=-1) {

							$ens=$tableau_plages[$i][$j][10];
						}
							//echo $ens;
							//die();

						$data1=array('semaine_id'=> $data['id_s'][0]->id_semaine,'jour_id'=> $tableau_plages[$i][$j][0],'plage_id'=> $tableau_plages[$i][$j][1], 'salle_id'=> $tableau_plages[$i][$j][2],'ec_id'=> $tableau_plages[$i][$j][3],'evolution'=> $tableau_plages[$i][$j][4],'n_groupe'=> $tableau_plages[$i][$j][7],'type_planing'=> $tableau_plages[$i][$j][6],'groupe'=> $tableau_plages[$i][$j][8],'heure_definit'=> $tableau_plages[$i][$j][9],'ens_prog'=> $ens);

							}
								if ($this->Emploi->insert_planification($data1)) {
										$data['message2'][$i][$j]="Enregisrement de la plage reussit!!!";
										$data['id_s']=$this->Emploi->select_semaine_max();
										$c=array('id_semaine'=>$data['id_s'][0]->id_semaine);
										$data['semaine']=$this->Emploi->select_semaine($c);

									}
									else
									{
										$data['message2'][$i][$j]="Erreur d'enregistrement de la plage ".$i.$j."!!!!";
									}

					}
					$ens=null;
						
					}	
			}
			
		echo json_encode($data);
		//print_r($tableau_plages);
		//echo $tableau[2][4][3];
	}

	public function modif_emploi(){

		$tableau_plages= $this->input->post('tableau_plages');
		$tableau_semaine= $this->input->post('tableau_semaine');

		$id_sem= $this->input->post('id_sem');
		$condition=array('semaine_id'=>$id_sem);
		$ens=null;
		


		$this->db->where(array('id_semaine'=>$id_sem));
        $this->db->update('semaines',array('debut'=>$tableau_semaine[1],'fin'=>$tableau_semaine[2],'numero'=> $tableau_semaine[0],'semestre_id'=>$tableau_semaine[6]));
		
		if ($this->Planification->delete_plannification($condition)) {


			for ($i=1; $i < 7 ; $i++) { 

			
				for ($j=1; $j < $tableau_semaine[4] ; $j++) { 

					

					if ($tableau_plages[$i][$j]!=-1) {

						
						if ($tableau_plages[$i][$j][6]=="BIBLIOTHEQUE" || $tableau_plages[$i][$j][6]=="Congé" || $tableau_plages[$i][$j][6]=="INVEST_HUMAIN" || $tableau_plages[$i][$j][6]=="PROJET" ) {
							$c1=array('id_niv_par'=>$this->input->post('niv'));
							$d=$this->Emploi->select_ec($c1);
							
							$data1=array('semaine_id'=> $id_sem,'jour_id'=> $tableau_plages[$i][$j][0],'plage_id'=> $tableau_plages[$i][$j][1],'salle_id'=> $tableau_plages[$i][$j][2],'ec_id'=> $d[0]->id_ec,'evolution'=> $tableau_plages[$i][$j][4],'n_groupe'=> $tableau_plages[$i][$j][7],'type_planing'=> $tableau_plages[$i][$j][6],'groupe'=> $tableau_plages[$i][$j][8],'heure_definit'=> $tableau_plages[$i][$j][9],'ens_prog'=> $ens);

						}
						else{
							if ( $tableau_plages[$i][$j][10]!=-1) {

							$ens=$tableau_plages[$i][$j][10];
						}

						$data1=array('semaine_id'=> $id_sem,'jour_id'=> $tableau_plages[$i][$j][0],'plage_id'=> $tableau_plages[$i][$j][1], 'salle_id'=> $tableau_plages[$i][$j][2],'ec_id'=> $tableau_plages[$i][$j][3],'evolution'=> $tableau_plages[$i][$j][4],'n_groupe'=> $tableau_plages[$i][$j][7],'type_planing'=> $tableau_plages[$i][$j][6],'groupe'=> $tableau_plages[$i][$j][8],'heure_definit'=> $tableau_plages[$i][$j][9],'ens_prog'=> $ens);

							}
								if ($this->Emploi->insert_planification($data1)) {
										$data['message2'][$i][$j]="Enregisrement de la plage reussit!!!";
										//$data['id_s']=$this->Emploi->select_semaine_max();
							//$data1=array('semaine_id'=> ,'jour_id'=> $tableau_plages[$i][$j][0],'plage_id'=> $tableau_plages[$i][$j][1],'salle_id'=> $tableau_plages[$i][$j][2],'ec_id'=> $d[0]->id_ec,'evolution'=> $tableau_plages[$i][$j][4],'n_groupe'=> $tableau_plages[$i][$j][7],'type_planing'=> $tableau_plages[$i][$j][6]);
										//$c=array('id_semaine'=>$id_sem);
										//$data['semaine']=$this->Emploi->select_semaine($c);

									}
									else
									{
										$data['message2'][$i][$j]="Erreur d'enregistrement de la plage ".$i.$j."!!!!";
									}

					}

					$ens=null;
						
					}	
			}

		}
		else
		{
			echo "noooooooo!!!";
			die();
		}

	}

	public function evolution(){
		$id= $this->input->post('EC');
		$condition=array('ec_id'=>$id);
		$data1=$this->Emploi->evolution_max($condition);
		
		//print_r($data1) ;
		echo $data1[0]->evolution;	

		
	}
	 public function a(){
		echo "string";
		
	} 

	public function consult(){

		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
          $data['niv_par']=$this->Impression->select_niv_par();
          $data['enseignants']=$this->Impression_ens->select_enseignants();
          $data['departement']=$this->Impression->select_departement();
		 $this->load->view('templates/consultation',$data);

	
			}

			public function plg(){
		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
          $data['niv_par']=$this->Impression->select_niv_par();
          $data['enseignants']=$this->Impression_ens->select_enseignants();
          $data['departement']=$this->Impression->select_departement();
          $this->load->view('template/header.php',$data);
		 $this->load->view('template/plages',$data);
		 $this->load->view('template/footer.php',$data);
	
			}

			public function enseignant(){
		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
          $data['niv_par']=$this->Impression->select_niv_par();
          $data['enseignants']=$this->Impression_ens->select_enseignants();
          $data['departement']=$this->Impression->select_departement();
		 $this->load->view('templates/Enseignant',$data);
	
			}

	public function stat(){
		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
         $data['niv_par']=$this->Impression->select_niv_par();
         $data['departement']=$this->Impression->select_departement();
		 $this->load->view('templates/statistiques',$data);
	
			}
public function notif(){
		$data['annee']=$this->Impression->annees();
		$data['cycles']=$this->Mentions->select_cycle();
          $data['mentions']=$this->Mentions->select();
         $data['niv_par']=$this->Impression->select_niv_par();
         $data['departement']=$this->Impression->select_departement();
		 $this->load->view('templates/Notification',$data);
	
			}
	public function edit(){
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
		 $this->load->view('templates/edition',$data);
	
			}
public function precedent($id_niv){
	$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
		$data['n']=$this->Emploi->select_niv(array('id_niv_par'=> $id_niv));
		$this->load->view('template/header.php',$data);
		 $this->load->view('template/emplois_preced',$data);
		 $this->load->view('template/footer.php',$data);
		}

		public function nouvelle_edition($id_niv,$cycle){
			//$data['mentions']=$this->Mentions->select();
		$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
		$data['n']=$this->Emploi->select_niv(array('id_niv_par'=> $id_niv));
		$this->db->where(array('id_cycle'=> $cycle));
        
		$data['cycle']=$this->db->get('cycles')->result();
		
			$this->load->view('template/header.php',$data);
			$this->load->view('template/nouvel_edit.php',$data);
			$this->load->view('template/footer.php',$data);
		} 

public function modification(){
	$id= $this->input->post('niv');
	$this->db->where(array('status'=> 'en cours'));
        $data['annee']=$this->db->get('annee_academiques')->result();
        $data1=$this->db->get('annee_academiques')->result();
        $condition=array('annee_id'=> $data1[0]->id_annee);
        $data['num_semaine']=$this->Mentions->select_semaine($condition);
        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
		$data['mentions']=$this->Mentions->select();
		$data['n']=$id;
		$data['id_sem']=$this->input->post('id');
		$this->load->view('template/header.php',$data);
		$this->load->view('templates/modification',$data);
		$this->load->view('template/footer.php',$data);
	
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
		$data0=array('semaine_id'=> $semaine,'jour_id'=> $data2[0]->id_jour,'plage_id'=> $data1[0]->id_plage, 'salle_id'=> $salle,'ec_id'=> $ec,'evolution'=> $evolution);

		if ($this->Emploi->insert_planification($data0)) {
			$data="Enregisrement reussit!!!";

		}
		else
		{
			$data="Erreur d'enregistrement!!!!";
		}
		echo $data;

	} 

	public function plages(){
		$tableau=$this->input->post('tableau');
		$id_niv_par=$this->input->post('tab');
		//echo "<pre>";
		//print_r($tableau);
		//echo "</pre>";
		//echo count($id_niv_par);
		for ($j=0; $j <count($id_niv_par) ; $j++) { 
			if ($id_niv_par[$j]!=-1) {
			
		$id_niv=$this->Emploi->select_niv(array('id_niv_par'=> $id_niv_par[$j]));

					$num_group=$this->Emploi->num_group_max(array('niv_par_id'=> $id_niv_par[$j]));
					if (is_null($num_group[0]->num_group)) {
							$n=1;
						}
						else{
							$n=$num_group[0]->num_group+1;
						}
		for ($i=0; $i < count($tableau) ; $i++) { 

				$data0=array('heure_debut'=> $tableau[$i][0],'heure_fin'=> $tableau[$i][1], 'duree'=> $tableau[$i][3],'num_plage'=> $tableau[$i][4],'rendu'=> $tableau[$i][5],'intitule_plage'=> $tableau[$i][2]);

				
			if ($this->Emploi->verifier_plage($data0)<1) {

				$id_type=$this->Emploi->select_type_plage(array('intitule_plage'=> $tableau[$i][2]));
				$data0=array('heure_debut'=> $tableau[$i][0],'heure_fin'=> $tableau[$i][1], 'duree'=> $tableau[$i][3],'num_plage'=> $tableau[$i][4],'rendu'=> $tableau[$i][5], 'type_plage_id'=> $id_type[0]->id_type_plage);

				if($this->Emploi->insert_plage($data0))
				{
					$id_plage=$this->Emploi->plage_max();

					if($this->Emploi->insert_plage_niv(array('plage_id'=> $id_plage[0]->id_plage,'niv_par_id'=> $id_niv_par[$j],'num_group'=> $n,'niveau_id'=> $id_niv[0]->niveau_id) )){
						
							//echo  $n;
						
					}	
					
				}
				
			}
			else{

					$id_plage=$this->Emploi->select_plage($data0);
					
					if($this->Emploi->insert_plage_niv(array('plage_id'=> $id_plage[0]->id_plage,'niv_par_id'=> $id_niv_par[$j],'num_group'=> $n,'niveau_id'=> $id_niv[0]->niveau_id) )){
						
							//echo  $n;
							//echo $i."n'est pas nouveau ,";
						
					}

				
					}
				}

			}
		}
	}
	
	function plage_niv_supp(){

		$num=$this->input->post('num');
		$id_niv_par=$this->input->post('niv');

			
		echo $this->Emploi->delete_plage_niv(array('niv_par_id'=> $id_niv_par,'num_group'=> $num));
						
					
	

	}

	function supprimer_emploi(){

		$num=$this->input->post('semaine');
		

			
		echo $this->Emploi->delete_semaine(array('id_semaine'=> $num));


	}
	
	public function semaines(){

			$id= $this->input->post('niv');
		$condition=array('niv_par_id'=>$id,'semaine_status'=>4,'status'=>'en cours');
		$data=$this->Emploi->select_sem($condition);

			echo json_encode($data);

	}

	public function planifications(){

		$id= array('id_semaine' =>  $this->input->post('id_s'));	
        $data['semaine']=$this->Impression->select($id);
        
        foreach ($data['semaine'] as $key) {
        	$id=array('id_semestre'=> $key->semestre_id);
        	$key->semestre=$this->Impression->select_semestre_($id);
        }
		$id= array('semaine_id' => $data['semaine'][0]->id_semaine,'annee_academiques.status'=> 'en cours');
		$data['planifications']=$this->Impression->select_planification_m($id);
        $n_group=$data['planifications'][0]->n_groupe;
        $id= array('id_annee' => $data['semaine'][0]->annee_id );
        $data_a=$this->Impression->select_annee($id);
        //$condition=array('niv_par_id'=>$this->input->post('niv'),'plage_id'=>$data['planifications'][0]->plage_id);
		//$data1=$this->Emploi->select_plage_niv($condition);
		//$id=$data1[0]->num_group;
		$condition=array('niv_par_id'=>$this->input->post('niv'),'num_group'=>$n_group);
		$data['plages']=$this->Emploi->select_plage_n($condition);
		$data0=$this->Emploi->select_plage_n($condition);

		

			       foreach ($data['planifications'] as $value) {
        	$ec=$value->ec_id;
        	$id= array('id_jour' => $value->jour_id);
        	$data1=$this->Impression->select_jour($id);
        	 $value->num_jour=$data1[0]->num_jour;

        	 $id= array('id_plage' => $value->plage_id);
        	$data1=$this->Impression->select_plage($id);
        	 $value->num_plage=$data1[0]->num_plage;
 
			$id= array('id_salle' => $value->salle_id);
        	$data1=$this->Impression->select_salle($id);
        	 $value->salle=$data1[0]->nom_salle."(". $data1[0]->intitule_salle.")";
 

			$id= array('id_ec' => $value->ec_id);
        	$data1=$this->Impression->select_ec($id);
        	 $value->ec=$data1;
        	 $value->heure=$data1[0]->heure;

 		$id=array('ec_id'=> $data1[0]->id_ec,'annee_academiques.status'=> 'en cours');
 		$value->enseignant=$this->Impression->select_enseignant($id);

 		$id=array('id_ue'=> $data1[0]->ue_id);
 		$value->ue=$this->Impression->select_ue($id);

 		$d=$this->Impression->select_ue($id);
 		$id=array('id_semestre'=> $d[0]->semestre_id);
 		$value->semestre=$this->Impression->select_semestre_($id);

        }
       		$id= array('id_ec' => $ec);
        	$data1=$this->Impression->select_ec($id);
        	$ue=$data1[0]->ue_id;

        	$id= array('id_ue' => $ue);
        	$data1=$this->Impression->select_ue($id);


        	$id= array('ue_id' => $ue);
        	$data['niv']=$this->Impression->select_niv($id);

        	$id= array('id_parcour' => $data['niv'][0]->parcour_id);
        	$data1=$this->Parcours->select($id);
        	$m=$data1[0]->mention_id;

        	$id= array('id_mention' => $m);
        	$data['mention']=$this->Mentions->select($id);

        	$id= array('id_annee' => $data['semaine'][0]->annee_id );
        	$data['annee']=$this->Impression->select_annee($id);

        	$data['jour']=$this->Emploi->select_jour();

		$id= array('id_niv_par'=>$this->input->post('niv'));
	    $data['semestre']=$this->Impression->select_semestre($id);
		
			echo json_encode($data);

	}
public function sem(){


	$id= array('id_niv_par'=>$this->input->post('niv'));
	    $data_st=$this->Impression->select_semestre($id);
		$data['semestre']=$data_st;
	$id= array('id_ue'=>$this->input->post('UE'));
	    $data_st=$this->Impression->select_sem_($id);
		$data['sem']=$data_st;

		echo json_encode($data);

}

public function sem_(){


	$id= array('id_niv_par'=>$this->input->post('niv'));
	    $data_st=$this->Impression->select_semestre($id);
		$data['semestre']=$data_st;
	

		echo json_encode($data);

}
public function charge(){

		$id= $this->input->post('niv');
		$condition=array('niv_par_id'=>$id,'semaine_status'=>4);
		$data1=$this->Emploi->select_p($condition);
		$id_s= $data1[0]->semaine_id;

		$data['jour']=$this->Emploi->select_jour();

		$id= array('id_niv_par'=>$this->input->post('niv'));
	    $data_st=$this->Impression->select_semestre($id);
		$data['semestre']=$data_st;
		
		//$condition=array('niv_par_id'=>$this->input->post('niv'),'plage_id'=>$data1[0]->plage_id);
		//$data1=$this->Emploi->select_plage_niv($condition);
		//$id=$data1[0]->num_group;
		//$condition=array('plage_niv.num_group'=>$id);
		//$data['plages']=$this->Emploi->select_plage_n($id);


		//$condition=array('id_niv_par'=>$id);
		//$data['semestre']=$this->Impression->select_semestre($condition);
		
		if (is_null($data1[0]->semaine_id)) {
			$data['message']="Aucun emploie de temp enregistré";
			
		}
		else{

		$id= array('id_semaine' => $id_s );	
        $data_s=$this->Impression->select($id);
        
        foreach ($data_s as $key) {
        	$id=array('id_semestre'=> $key->semestre_id);
        	$key->semestre=$this->Impression->select_semestre_($id);
        }
 		
        $id= array('semaine_id' => $data1[0]->semaine_id );
        $data['planifications']=$this->Impression->select_planification($id);
        $n_group=$data['planifications'][0]->n_groupe;
        $id= array('id_annee' => $data_s[0]->annee_id );
        $data_a=$this->Impression->select_annee($id);
        //$condition=array('niv_par_id'=>$this->input->post('niv'),'plage_id'=>$data['planifications'][0]->plage_id);
		//$data1=$this->Emploi->select_plage_niv($condition);
		//$id=$data1[0]->num_group;
		$condition=array('niv_par_id'=>$this->input->post('niv'),'num_group'=>$n_group);
		$data['plages']=$this->Emploi->select_plage_n($condition);
		$data0=$this->Emploi->select_plage_n($condition);

		

			       foreach ($data['planifications'] as $value) {
        	$ec=$value->ec_id;
        	$id= array('id_jour' => $value->jour_id);
        	$data1=$this->Impression->select_jour($id);
        	 $value->num_jour=$data1[0]->num_jour;

        	 $id= array('id_plage' => $value->plage_id);
        	$data1=$this->Impression->select_plage($id);
        	 $value->num_plage=$data1[0]->num_plage;
 
			$id= array('id_salle' => $value->salle_id);
        	$data1=$this->Impression->select_salle($id);
        	 $value->salle=$data1[0]->nom_salle."(". $data1[0]->intitule_salle.")";
 

			$id= array('id_ec' => $value->ec_id);
        	$data1=$this->Impression->select_ec($id);
        	 $value->ec=$data1;
        	 $value->heure=$data1[0]->heure;

 		$id=array('ec_id'=> $data1[0]->id_ec);
 		$value->enseignant=$this->Impression->select_enseignant($id);

 		$id=array('id_ue'=> $data1[0]->ue_id);
 		$value->ue=$this->Impression->select_ue($id);

 		$d=$this->Impression->select_ue($id);
 		$id=array('id_semestre'=> $d[0]->semestre_id);
 		$value->semestre=$this->Impression->select_semestre_($id);

        }
        	$id= array('id_ec' => $ec);
        	$data1=$this->Impression->select_ec($id);
        	$ue=$data1[0]->ue_id;

        	$id= array('id_ue' => $ue);
        	$data1=$this->Impression->select_ue($id);


        	$id= array('ue_id' => $ue);
        	$data_niv=$this->Impression->select_niv($id);

        	$id= array('id_parcour' => $data_niv[0]->parcour_id);
        	$data1=$this->Parcours->select($id);
        	$m=$data1[0]->mention_id;

        	$id= array('id_mention' => $m);
        	$data_m=$this->Mentions->select($id);
        	$data['semaine']=$data_s;
        	$data['annee']=$data_a;
        	$data['niv']=$data_niv;
        	$data['mention']=$data_m;
        	
	
		
 
		}
		
		
		//print_r($data) ;
		//print_r($data1);	
			//echo $id_s;

				echo json_encode($data);
			
			
		
	} 


	public function charge_(){
		$id= $this->input->post('niv');
		$condition=array('niv_par_id'=>$id,'semaine_status'=>4);
		$data1=$this->Emploi->select_p($condition);
		$id_s= $data1[0]->semaine_id;

		$data['jour']=$this->Emploi->select_jour();

		$id= array('id_niv_par'=>$this->input->post('niv'));
	    $data_st=$this->Emploi->fetch_sem_($this->input->post('niv'));
	    //print_r($data_st);
	    //die();
		$data['semestre']=$data_st;
		
		
		if (is_null($data1[0]->semaine_id)) {
			$data['message']="Aucun emploie de temp enregistré";
			$condition=array('niv_par_id'=>$this->input->post('niv'),'etat'=>1);
			$data['plages']=$this->Emploi->select_plage_n($condition);


		}
		else{

		$id= array('id_semaine' => $id_s );	
        $data_s=$this->Impression->select($id);
        $id= array('semaine_id' => $data_s[0]->id_semaine );
        $data['planifications']=$this->Impression->select_planification($id);
        $n_group=$data['planifications'][0]->n_groupe;
        $id= array('id_annee' => $data_s[0]->annee_id );
        $data_a=$this->Impression->select_annee($id);
       
		$condition=array('niv_par_id'=>$this->input->post('niv'),'num_group'=>$n_group);
		$data['plages']=$this->Emploi->select_plage_n($condition);
		$data0=$this->Emploi->select_plage_n($condition);

		$data['semaine']=$data_s;
        	$data['annee']=$data_a;

		if ( $data0[0]->etat==1) {

        	
	
		}

		else{
			$condition=array('niv_par_id'=>$this->input->post('niv'),'etat'=>1);
			$data['plages']=$this->Emploi->select_plage_n($condition);

			
		}
 
		}
		
		
		//print_r($data) ;
		//print_r($data1);	
			//echo $id_s;

				echo json_encode($data);
			
			
		
	} 

	public function charge__(){
		$id= $this->input->post('sem');
		

		$id= array('id_semaine' => $id );	
        $data_s=$this->Impression->select($id);
        $id= array('semaine_id' => $data_s[0]->id_semaine );
        $data['planifications']=$this->Impression->select_planification($id);
        $n_group=$data['planifications'][0]->n_groupe;
        $id= array('id_annee' => $data_s[0]->annee_id );
        $data_a=$this->Impression->select_annee($id);
        //$condition=array('niv_par_id'=>$this->input->post('niv'),'plage_id'=>$data['planifications'][0]->plage_id);
		//$data1=$this->Emploi->select_plage_niv($condition);
		//$id=$data1[0]->num_group;
		$condition=array('niv_par_id'=>$this->input->post('niv'),'num_group'=>$n_group);
		$data['plages']=$this->Emploi->select_plage_n($condition);
		$data0=$this->Emploi->select_plage_n($condition);

		$data['semaine']=$data_s;
        	$data['annee']=$data_a;

		if ( $data0[0]->etat==1) {
			

			       foreach ($data['planifications'] as $value) {
        	$ec=$value->ec_id;
        	$id= array('id_jour' => $value->jour_id);
        	$data1=$this->Impression->select_jour($id);
        	 $value->num_jour=$data1[0]->num_jour;

        	 $id= array('id_plage' => $value->plage_id);
        	$data1=$this->Impression->select_plage($id);
        	 $value->num_plage=$data1[0]->num_plage;
 
			$id= array('id_salle' => $value->salle_id);
        	$data1=$this->Impression->select_salle($id);
        	 $value->salle=$data1[0]->nom_salle."(". $data1[0]->intitule_salle.")";
 

			$id= array('id_ec' => $value->ec_id);
        	$data1=$this->Impression->select_ec($id);
        	 $value->ec=$data1;
        	 $value->heure=$data1[0]->heure;

 		$id=array('ec_id'=> $data1[0]->id_ec);
 		$value->enseignant=$this->Impression->select_enseignant($id);

 		$id=array('id_ue'=> $data1[0]->ue_id);
 		$value->ue=$this->Impression->select_ue($id);

        }
        	$id= array('id_ec' => $ec);
        	$data1=$this->Impression->select_ec($id);
        	$ue=$data1[0]->ue_id;

        	$id= array('id_ue' => $ue);
        	$data1=$this->Impression->select_ue($id);


        	$id= array('ue_id' => $ue);
        	$data_niv=$this->Impression->select_niv($id);

        	$id= array('id_parcour' => $data_niv[0]->parcour_id);
        	$data1=$this->Parcours->select($id);
        	$m=$data1[0]->mention_id;

        	$id= array('id_mention' => $m);
        	$data_m=$this->Mentions->select($id);
        	$data['semaine']=$data_s;
        	$data['annee']=$data_a;
        	$data['niv']=$data_niv;
        	$data['mention']=$data_m;
        	
	
		}

		else{
			$condition=array('niv_par_id'=>$this->input->post('niv'),'etat'=>1);
			$data['plages']=$this->Emploi->select_plage_n($condition);

			
		}
 
		
		
		
		//print_r($data) ;
		//print_r($data1);	
			//echo $id_s;

				echo json_encode($data);
			
			
		
	} 
	public function plage_(){
		$id= $this->input->post('niv');
		$n_group=$this->input->post('num');
		$condition=array('niv_par_id'=>$id,'num_group'=>$n_group);
		$data['plages']=$this->Emploi->select_plage_n($condition);

		$id= array('id_niv_par'=>$this->input->post('niv'));
        $data['semestre']=$this->Impression->select_semestre($id);
        $data['jour']=$this->Emploi->select_jour();

        $condition=array('niv_par_id'=> $this->input->post('niv'));
		$data1=$this->Emploi->select_p($condition);
		$id_s= $data1[0]->semaine_id;
		if (is_null($id_s)) {
			$data['semaine']=1;
		}
		else{

        $data['semaine']=$this->Impression->select($id);

		}
		
        echo json_encode($data);

	}
	public function verification(){

			$id= $this->input->post('EC');

			$condition=array('ec_id'=>$id);
 			$data1=$this->Impression->select_enseignant($condition);

 			$id= array('semaines.debut' => $this->input->post('debut'),'personnel_id' => $data1[0]->id_personnel, 'jour_id' => $this->input->post('jour'),'status' =>'en cours');
 			$h=array('heure_fin >' => $this->input->post('plage'),'heure_debut <' => $this->input->post('plage1'));
       		$data['planifications']=$this->Emploi->select_planification_($id,$h);
 			 echo json_encode($data);

	}
	public function niv(){
    $id= $this->input->post('id_niv');
    $condition = array('niv_par_id' => $id ,'status'=> 'en cours');
    $id_s=$this->Impression->select_emplois($condition);

         $i=0;
     	foreach ($id_s as $value) {
     		$id_s[$i] =$value->semaine_id;
     		$condition = array('id_semaine' => $id_s[$i]);
     		$data[$i]=$this->Impression->select_semaine($condition);
     		$i+=1;
     	}
     	// print_r($data,TRUE);
      echo json_encode($data);
       }

       public function niv1(){
    $id= $this->input->post('id_mention');
    $condition = array('id_mention' => $id );
    $id_s=$this->Impression->select_emplois1($condition);
   
         $i=0;
     	foreach ($id_s as $value) {
     		$id_s[$i] =$value->semaine_id;
     		$condition = array('id_semaine' => $id_s[$i]);
    		$c = array('semaine_id' => $id_s[$i]);
 		    $d=$this->Emploi->select_planification_($c);
     		$data[$i]=$this->Impression->select_semaine($condition);
     		foreach($data[$i] as $key)
     		{
     		$key->niv_par=$d[0]->rendu;
     		$key->id_niv_par=$d[0]->id_niv_par;	
     		}
     		$i+=1;
     	}
     	// print_r($data,TRUE);
      echo json_encode($data);
       }

       public function status_semaine($status){

		$id= $this->input->post('semaine');
		
		$condition=array('id_semaine'=>$id);
		$dat=array('semaine_status'=>$status);
		if ($this->Emploi->status_semaine($dat,$condition)) {
			$data['2']="reussit";
			
			echo json_encode($data);
		}
	}

	 public function select_n(){

		
			$data=$this->Emploi->select_niv();
			
			echo json_encode($data);
		}
	
}

?>

