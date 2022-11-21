<?php

class Depot extends CI_Model {

	


        public function insert_auteur($data=array())
        {

                $this->db->insert('auteur', $data);
                return TRUE;
        }
        public function insert_membre($data=array())
        {

                $this->db->insert('membre', $data);
                return TRUE;
        }
        public function insert_reference($data=array())
        {
            $this->db->insert('reference', $data);
                return TRUE;
        }
        public function insert_domaine($data=array())
        {

                $this->db->insert('domaine', $data);
                return TRUE;
        }

         public function insert_depot($data=array())
        {

                $this->db->insert('depot', $data);
                return TRUE;
        }

         public function insert_fichier($data=array())
        {

                $this->db->insert('fichier', $data);
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
    }
?>                                        