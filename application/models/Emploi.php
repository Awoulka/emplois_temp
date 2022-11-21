<?php

class Emploi extends CI_Model {

	


        public function insert_semaine($data=array())
        {

                $this->db->insert('semaines', $data);
                return TRUE;
        }
        public function insert_plage($data=array())
        {

                $this->db->insert('plages', $data);
                return TRUE;
        }
        public function insert_plage_niv($data=array())
        {
            $this->db->insert('plage_niv', $data);
                return TRUE;
        }
        public function insert_planification($data=array())
        {

                $this->db->insert('plannification', $data);
                return TRUE;
        }
        public function select_semaine_max()
        {

                 $this->db->select_max('id_semaine');
                 
                return $this->db->get('semaines')->result(); 
        }

       public function select_semaine($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('semaines')->result();
        }

        public function select_type_plage($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('type_plage')->result();
        }

        public function verifier_plage($condition = array()) {

        $this->db->from('plages');
        $this->db->join('type_plage','type_plage.id_type_plage=plages.type_plage_id');
        $this->db->where($condition);
        return $this->db->count_all_results();


    }

        public function select_plage($condition=array())
        {   $this->db->select('*');
            $this->db->from('plages');
            $this->db->join('type_plage','type_plage.id_type_plage=plages.type_plage_id');         
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function delete_plage_niv($condition=array())
        {       
             $this->db->where($condition);     
            $this->db->delete('plage_niv');
                return TRUE;
        }

        public function delete_semaine($condition=array())
        {       
             $this->db->where($condition);     
            $this->db->delete('semaines');
                return TRUE;
        }

        public function select_jour($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('jours')->result();
        }

        public function evolution($condition=array())
        {

                 $this->db->select_max('id_plannification');
                 $this->db->where($condition);
                return $this->db->get('plannification')->result(); 
        }

        public function select($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('parcours')->result();
        }
        public function select_niv($condition=array())
        {       $this->db->where($condition);
                return $this->db->get('niv_par')->result();
        }

         public function select_p($condition=array())   
        {   
            $this->db->select_max('semaine_id');
            $this->db->from('plannification');
            $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
            $this->db->join('ec','ec.id_ec=plannification.ec_id');
            $this->db->join('ue','ue.id_ue=ec.ue_id');
            $this->db->join('associations','associations.ue_id=ue.id_ue');
            $this->db->join('niv_par','niv_par.id_niv_par=associations.niv_par_id');        
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function select_sem($condition=array())
        {       
            $this->db->select('id_semaine,numero');
            $this->db->from('semaines');
            $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id');
            $this->db->join('plannification','plannification.semaine_id=semaines.id_semaine');
            $this->db->join('ec','ec.id_ec=plannification.ec_id');
            $this->db->join('ue','ue.id_ue=ec.ue_id');
            $this->db->join('associations','associations.ue_id=ue.id_ue');
            $this->db->join('niv_par','niv_par.id_niv_par=associations.niv_par_id');        
            $this->db->where($condition);
            $this->db->distinct('id_semaine');
                return $this->db->get()->result();
        }

        public function select_ec($condition=array())   
        {   
            $this->db->select('id_ec');
            $this->db->from('ec');
            $this->db->join('ue','ue.id_ue=ec.ue_id');
            $this->db->join('associations','associations.ue_id=ue.id_ue');
            $this->db->join('niv_par','niv_par.id_niv_par=associations.niv_par_id');        
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function select_plage_niv($condition=array())
        {       $this->db->where($condition);
                //$this->db->group_by('num_group');
                return $this->db->get('plage_niv')->result();
        }

         public function select_plage_n($condition=array())   
        {   
            $this->db->select('*');
            $this->db->from('plages');
            $this->db->join('plage_niv','plage_niv.plage_id=plages.id_plage');
            $this->db->join('type_plage','type_plage.id_type_plage=plages.type_plage_id');        
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        

        public function evolution_max($condition=array())
        {

                 $this->db->select_max('evolution');
                 $this->db->where($condition);
                return $this->db->get('plannification')->result(); 
        }

        public function plage_max($condition=array())
        {

                 $this->db->select_max('id_plage');
                 $this->db->where($condition);
                return $this->db->get('plages')->result(); 
        }
        
        public function num_group_max($condition=array())
        {

                 $this->db->select_max('num_group');
                 $this->db->where($condition);
                return $this->db->get('plage_niv')->result(); 
        }
        
        public function activation($data=array(),$condition=array())
        {
        $this->db->where($condition);
        $this->db->update('plage_niv', $data);
        return TRUE;
    }

    public function select_planification_($condition=array(),$having=array())   
        {      

            $this->db->select('*');
            $this->db->from('plannification');
            $this->db->join('jours','jours.id_jour=plannification.jour_id');
            $this->db->join('plages','plages.id_plage=plannification.plage_id');
            $this->db->join('semaines','semaines.id_semaine=plannification.semaine_id');
            $this->db->join('annee_academiques','annee_academiques.id_annee=semaines.annee_id');
            $this->db->join('ec','ec.id_ec=plannification.ec_id');
            $this->db->join('enseignes','enseignes.ec_id=ec.id_ec');
            $this->db->join('personnels','personnels.id_personnel=enseignes.personnel_id');
            $this->db->join('ue','ue.id_ue=ec.ue_id');
            $this->db->join('associations','associations.ue_id=ue.id_ue');
            $this->db->join('niv_par','niv_par.id_niv_par=associations.niv_par_id');
            $this->db->having($having);
            $this->db->where($condition);
            return $this->db->get()->result();
                
        }

        public function status_semaine($data=array(),$condition=array()){

            $this->db->where($condition);
        $this->db->update('semaines', $data);
        return TRUE;
        }

        public function select_cycle($condition=array())
        {   $this->db->select('*');
            $this->db->from('cycle_parcour');
            $this->db->join('parcours','parcours.id_parcour=cycle_parcour.parcour_id');
            $this->db->join('cycles','cycles.id_cycle=cycle_parcour.cycle_id');         
            $this->db->where($condition);
                return $this->db->get()->result();
        }

        public function select_cycle_($condition=array())
        {   $this->db->select('*');
            $this->db->from('cycles');
            $this->db->join('cycle_parcour','cycle_parcour.cycle_id=cycles.id_cycle');
            $this->db->join('parcours','parcours.id_parcour=cycle_parcour.parcour_id');
                     
            $this->db->where($condition);
                return $this->db->get()->result();
        }


        function fetch_sem($plage_id)
     {

      $this->db->select('*');
      $this->db->from('semestres ');
      $this->db->join('niveaux ','niveaux.id_niveau = semestres.niveau_id','LEFT');
      $this->db->join('niv_par ','niv_par.niveau_id = niveaux.id_niveau','LEFT');
      $this->db->where('id_niv_par', $plage_id);
      $query = $this->db->get();
      $output = '<option value="">Select un semestre</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_semestre.'">'.$row->semestre.'</option>';
      }
      return $output;
     }

     function fetch_sem_($plage_id)
     {

      $query="SELECT * FROM semestres , semestre_niv , niv_par WHERE semestres.id_semestre=semestre_niv.semestre_id AND semestre_niv.niveau_id=niv_par.niveau_id AND niv_par.id_niv_par = ? ";
      $query=$this->db->query( $query ,  $plage_id);

      if ($query->num_rows() > 0) {
            return $query->result();
        }else {
            return [];
        }
     }
    }
?>                                        