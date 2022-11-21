
<?php

class Mentions extends CI_Model {

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
                return $this->db->get('mentions')->result();
        }

        public function select_cycle_mention($condition=array())   
        {         
            $this->db->select('*');
            $this->db->from('cycle_mention');
            $this->db->join('mentions','mentions.id_mention = cycle_mention.mention_id');
            $this->db->where($condition);
                return $this->db->get()->result();
     
        }

        public function select_cycle($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('cycles')->result();
        }

         public function select_semaine($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('semaines')->result();
        }



    }
?>