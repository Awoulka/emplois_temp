
<?php

class Planification extends CI_Model {

		public $nom;
        public $prenom;
        public $email;
        public $psw;


        public function insert($n,$em,$ps)
        {
				$data= array(
				'name' => $n,
				'email' => $em,
				'password' => $ps
				);

                //$this->db->insert('users', $data);
        }
        public function select($condition=array())   
        {   $this->db->select('*');
            $this->db->from('ue');
            $this->db->join('associations','associations.ue_id=ue.id_ue');    
            $this->db->where($condition);
                return $this->db->get()->result();
        }
        public function select_salle($condition=array())   
        {   $this->db->where($condition);
                return $this->db->get('salles')->result();
        }

        public function select_ec($condition=array())   
        {   $this->db->where($condition);
                return $this->db->get('ec')->result();
        }

        public function select_enseignant($condition=array())   
        {   
            $this->db->select('*');
            $this->db->from('personnels');
            $this->db->join('enseignes','enseignes.personnel_id=personnels.id_personnel');
            $this->db->join('annee_academiques','annee_academiques.id_annee=enseignes.annee_id');    
            $this->db->where($condition);
                return $this->db->get()->result();
        }
        public function select_planification($condition=array())   
        {   
             $this->db->where($condition);
                return $this->db->get('plannification')->result();
        }

        public function select_p($condition=array())   
        {   
            $this->db->select_max('*');
            $this->db->from('plannification');
            $this->db->join('ec','ec.id_ec=plannification.ec_id');
            $this->db->join('ue','ue.id_ue=ec.ue_id');
            $this->db->join('associations','associations.ue_id=ue.id_ue');        
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function evolution_max($condition=array())
        {

                 $this->db->select_max('evolution');
                 $this->db->from('plannification');
                $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
                $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id'); 
                 $this->db->where($condition);
                return $this->db->get()->result(); 
        }

        public function delete_plannification($condition=array())
        {       
             $this->db->where($condition);     
            $this->db->delete('plannification');
                return TRUE;
        }


    }
?>