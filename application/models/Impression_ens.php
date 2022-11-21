<?php

class Impression_ens extends CI_Model {


      public function select_enseignants($condition=array())   
        {
           return $this->db->get('personnels')->result();
        }
		public function select_id_semaine($condition= array()){
            $this->db->select('id_semaine');
            $this->db->from('semaines');
            $this->db->where($condition);
            return $this->db->get()->result();
        }
        public function select_evolution($condition=array()){

             $this->db->select('evolution');
            $this->db->from('plannification');
            $this->db->where($condition);
              return $this->db->count_all_results();
        }

         public function select_personnels($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('personnels')->result();
            }
        
        public function select($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('semaines')->result();
            }
       public function select_emploi_ens($condition=array())   
        {   /*$this->db->distinct();
            $this->db->select('*');
            $this->db->from('plannification');
            $this->db->join('enseignes','plannification.ec_id=enseignes.ec_id');
        //$this->db->join('personnels','enseignes.personnel_id=personnels.id_personnel');    
            $this->db->where($condition);
             return $this->db->get()->result();*/

             $this->db->select('*');
              //$this->db->distinct('semaine_id');
            $this->db->from('plannification');
            $this->db->join('ec','ec.id_ec=plannification.ec_id');
            $this->db->join('enseignes','enseignes.ec_id=ec.id_ec');

            $this->db->join('personnels','enseignes.personnel_id=personnels.id_personnel');
            $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
            $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id');
            
            $this->db->where($condition);
            $this->db->order_by('semaines.numero','ASC');
            //$this->db->distinct('semaines.id_semaine');
            return $this->db->get()->result();
        }
     
         public function select_planification($condition=array())   
        {   
            $this->db->select('*');
            $this->db->from('plannification');
            $this->db->join('enseignes','enseignes.ec_id=plannification.ec_id');
            $this->db->join('personnels','enseignes.personnel_id=personnels.id_personnel');    
            $this->db->where($condition);
                return $this->db->get()->result();
        }
          public function select_jour($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('jours')->result();
        }  public function select_plage($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('plages')->result();
        }  public function select_salle($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('salles')->result();
        }
          public function select_ec($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('ec')->result();
        }
        public function select_enseignant($condition=array())   
        {   
            $this->db->select('*');
            $this->db->from('personnels');
            $this->db->join('enseignes','enseignes.personnel_id=personnels.id_personnel');
            $this->db->join('annee_academiques','annee_academiques.id_annee=enseignes.annee_id');    
           // $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function select_annee($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('annee_academiques')->result();
        }


        public function select_ue($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('ue')->result();
        }

        public function select_semestre($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('semestres')->result();
        }

        public function select_niv($condition=array())   
        {   $this->db->select('rendu,parcour_id');
            $this->db->from('niv_par');
            $this->db->join('associations','associations.niv_par_id=niv_par.id_niv_par');    
            $this->db->where($condition);
                return $this->db->get()->result();
        }
        public function select_personne($con=array()){
            $this->db->where($con);
          return  $this->db->get('personnels')->result();
        }




        public function select_semaine($condition= array()){
            $this->db->select('debut');
            $this->db->from('semaines');
            $this->db->where($condition);
            return $this->db->get()->result();
        }


        public function planification_enseignant($condition=array()){


            $this->db->select('*');
            $this->db->from('plannification');
            $this->db->join('ec','ec.id_ec=plannification.ec_id');
            $this->db->join('enseignes','enseignes.ec_id=ec.id_ec');
            //$this->db->join('annee_academiques','annee_academiques.id_annee=enseigne.annee_id');
            $this->db->join('personnels','enseignes.personnel_id=personnels.id_personnel');
            $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
            $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id AND annee_academiques.id_annee=enseignes.annee_id');
            $this->db->where($condition);
            
            return $this->db->get()->result();
         }
      
    }
   
?>