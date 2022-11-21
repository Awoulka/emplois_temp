<?php

class Parcours extends CI_Model {

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
        {       $this->db->where($condition);
                return $this->db->get('parcours')->result();
        }

        public function select_niv($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('niv_par')->result();
        }

//----Selection du parcour d'un cycle donné----\\
         public function select_cycle_parcour($condition=array())
                {       
                    $this->db->select('*');
                    $this->db->from('cycle_parcour');
                    $this->db->join('parcours','parcours.id_parcour=cycle_parcour.parcour_id');
                    $this->db->join('cycles','cycles.id_cycle=cycle_parcour.cycle_id');        
                    $this->db->where($condition);
                        return $this->db->get()->result();
                }

//----\\
         public function select_semestre_($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('semestres')->result();
        }
    }
?>