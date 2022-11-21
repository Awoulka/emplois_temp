<?php

class Excel_export_model extends CI_Model {
     
   function test_excel(){
   	return $this->db->get('ec')->result();
   } 
     public function select_ec_stat($condition=array()){
            $this->db->select('*');
            $this->db->from('ec');
            $this->db->join('ue','ec.ue_id=ue.id_ue');
            $this->db->join('associations','ue.id_ue=associations.ue_id'); 
            $this->db->join('niv_par','associations.niv_par_id=niv_par.id_niv_par');
                // $this->db->group_by("semestre_id");
             $this->db->where($condition);
                return $this->db->get()->result();
        }
         public function select_niv($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('niv_par')->result();
        }
        // heure
         public function select_parcours($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('parcours')->result();
        }
         public function select($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('mentions')->result();
        }
        public function select_heure($condition=array()){
           //$this->db->sum('heure_cm,heure_tp,heure_td');
            $this->db->select('h_cours, h_tp, h_td');
            $this->db->from('ec');
            $this->db->where($condition);
            return $this->db->get()->result();
        }
       
         public function select_evolution($condition=array()){
              
             $this->db->select_max('evolution');
            $this->db->from('plannification');
            $this->db->join('semaines','plannification.semaine_id=semaines.id_semaine');
            $this->db->join('annee_academiques','semaines.annee_id=annee_academiques.id_annee'); 
            $this->db->where($condition);
              return $this->db->get()->result();
        }

        
         public function select_semestre($condition)        
        {     
            $query="SELECT * FROM semestres , semestre_niv , niv_par WHERE semestres.id_semestre=semestre_niv.semestre_id AND semestre_niv.niveau_id=niv_par.niveau_id AND niv_par.id_niv_par = ? ";
      $query=$this->db->query( $query ,  $condition);

        return $query->result();
          //$this->db->order_by('semestre', 'ASC');
          //$this->db->where($condition);
                //return $this->db->get('semestres')->result();
        }
         public function select_semestre__($condition=array())        
        {     
          $this->db->order_by('semestre', 'ASC');
          $this->db->where($condition);
                return $this->db->get('semestres')->result();
        }
         public function select_annee($condition=array())   
        {       $this->db->where($condition);
                return $this->db->get('annee_academiques')->result();
        }
         public function select_enseignant($condition=array())   
        {   
            $this->db->select('nom_prenom');
            $this->db->from('personnels');
            $this->db->join('enseignes','enseignes.personnel_id=personnels.id_personnel');
            $this->db->join('annee_academiques','annee_academiques.id_annee=enseignes.annee_id');    
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        
       
}?>