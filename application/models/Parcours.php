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

         public function select_semestre_($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('semestres')->result();
        }
    }
?>