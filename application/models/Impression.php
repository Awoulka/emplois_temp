
<?php

class Impression extends CI_Model {

		public function select_id_semaine($condition= array()){
            $this->db->select('id_semaine');
            $this->db->from('semaines');
            $this->db->where($condition);
            return $this->db->get()->result();
        }
         public function select_departement()   
        {      // $this->db->where($condition);
                return $this->db->get('departements')->result();
        } 
        public function select_ec_stat($condition=array()){
              $this->db->select('*');
              $this->db->from('ec');
               $this->db->join('ue','ec.ue_id=ue.id_ue');
                $this->db->join('associations','ue.id_ue=associations.ue_id'); 
                 $this->db->join('niv_par','associations.niv_par_id=niv_par.id_niv_par');
             $this->db->where($condition);
                return $this->db->get()->result();
        }

         public function select_count_planification($condition=array())
        {   
            
             $this->db->select('count(*) as count_rows')->from('plannification');
             $this->db->join('ec','plannification.ec_id=ec.id_ec');
             $this->db->join('ue','ec.ue_id=ue.id_ue');
             $this->db->join('associations','ue.id_ue=associations.ue_id');     
             $this->db->where($condition);
                return $this->db->count_all_results();
        }
        //select_planifications
        public function select_planifications($condition=array())
        {   
             $this->db->select('*');
             $this->db->from('plannification');
             $this->db->join('ec','plannification.ec_id=ec.id_ec');
             $this->db->join('ue','ec.ue_id=ue.id_ue');
             $this->db->join('associations','ue.id_ue=associations.ue_id');     
             $this->db->where($condition);
                return $this->db->get()->result();
        }
        public function annees(){
                $this->db->select('*');
                $this->db->from('annee_academiques');
             return $this->db->get()->result();
             }
         public function select_niv_par($condition=array())   
        {   $this->db->select('rendu,id_niv_par');
            $this->db->from('niv_par'); 
                return $this->db->get()->result();
        }
        public function niv_par($condition=array())   
        {   $this->db->select('rendu');
            $this->db->from('niv_par'); 
           $this->db-> where($condition);
            return $this->db->get()->result();
        }
        public function select_emplois($condition=array())
        {  $this->db->distinct();
           $this->db->select('semaine_id');
           $this->db->from('plannification');
           $this->db->join('ec','plannification.ec_id=ec.id_ec');
           $this->db->join('ue','ec.ue_id=ue.id_ue');
           $this->db->join('associations','ue.id_ue=associations.ue_id');
           $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
           $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id');  
           $this->db->where($condition);
           $this->db->order_by('semaines.numero','DESC');
                return $this->db->get()->result();
        }

        public function select_emplois1($condition=array())
        {  $this->db->distinct();
           $this->db->select('semaine_id');
           $this->db->from('plannification');
           $this->db->join('ec','plannification.ec_id=ec.id_ec');
           $this->db->join('ue','ec.ue_id=ue.id_ue');
           $this->db->join('associations','ue.id_ue=associations.ue_id'); 
           $this->db->join('niv_par','associations.niv_par_id=niv_par.id_niv_par');
           $this->db->join('parcours','parcours.id_parcour=niv_par.parcour_id');
            $this->db->join('mentions','mentions.id_mention=parcours.mention_id');   
           $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function select_semaine($condition=array())
        {
            $this->db->select('*');
            $this->db->from('semaines');
            $this->db->where($condition);
            $this->db->order_by('numero','DESK');
             return $this->db->get()->result();
        }





        public function select($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('semaines')->result();
        }
         public function select_planification($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('plannification')->result();
        }
        public function select_planification_m($condition=array())   
        {      
                $this->db->select('*');
           $this->db->from('plannification');
           $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
           $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id'); 
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
            $this->db->where($condition);
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
// select_semestre_
        public function select_semestre_($condition=array())   
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

       public function select_semestre($condition=array())   
        {   
            $this->db->select('id_semestre,semestre');
            $this->db->distinct();
            $this->db->from('semestres');
            $this->db->join('ue','ue.semestre_id=semestres.id_semestre');
            $this->db->join('associations','associations.ue_id=ue.id_ue');
            $this->db->join('niv_par','niv_par.id_niv_par=associations.niv_par_id');        
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function select_sem_($condition=array())   
        {   
            $this->db->select('id_semestre');
            $this->db->distinct();
            $this->db->from('semestres');
            $this->db->join('ue','ue.semestre_id=semestres.id_semestre');
                    
            $this->db->where($condition);
                return $this->db->get()->row();
        }



        public function select_ec_semestre($condition=array()){
              $this->db->select('*');
              $this->db->from('ec');
               $this->db->join('ue','ec.ue_id=ue.id_ue');
                $this->db->join('association','ue.id_ue=association.ue_id'); 
                 $this->db->join('niv_par','association.niv_par_id=niv_par.id_niv_par');
                  
             $this->db->where($condition);
                return $this->db->get()->result();
        }

    }
?>