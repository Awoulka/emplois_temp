<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'assets/vendors/autoload.php';
//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call iofactory instead of xlsx writer
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Excel_export extends CI_Controller {
          
 

   public function index(){
    $this->load->model('Excel_export_model');

    $data['mentions']=$this->Excel_export_model->select();
    $this->load->view('templates/Excel',$data);
   }

	public function etat(){
         $this->load->model('Excel_export_model');
         $this->load->model('Mentions');
       
    $con = array('id_niv_par' => $this->input->post('Niveau'));
    $data['ec']=$this->Excel_export_model->select_ec_stat($con);  
    //print_r($data);
   $i=0;
    foreach ($data['ec'] as $value) {
     
        $value->evolution=$this->Excel_export_model->select_evolution(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        if ($value->evolution[0]->evolution=='') {
         $value->evolution=0;
        }
        else{
          $value->evolution=$value->evolution[0]->evolution;
        }
        $value->semestre=$this->Excel_export_model->select_semestre( array('niveau_id' => $value->niveau_id ));

        $annee=$this->Excel_export_model->select_annee( array('status' => "en cours"));
        $value->annee=$annee[0]->annee;
        $value->enseignant=$this->Excel_export_model->select_enseignant(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        $value->heures=$this->Excel_export_model->select_heure(array('id_ec' => $value->id_ec ));

   }  
   $con = array('id_niv_par' => $this->input->post('Niveau'));
    $data_niv_par=$this->Excel_export_model->select_niv($con);
    $data['niv_par']= $data_niv_par;
    foreach ($data['niv_par'] as $value) {
    $con = array('niveau_id' =>$data_niv_par[0]->niveau_id);
    $data['semestre']=$this->Excel_export_model->select_semestre($con);
    $value->semestre=$data['semestre']; 
    
     }
     $data['annees']=$this->Excel_export_model->select_annee(array('status' => "en cours"));

        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
        $data['mentions']=$this->Mentions->select();
  //echo "<pre>";
   //print_r($data);
   //echo "</pre>";
      $this->load->view('template/header.php',$data);
      $this->load->view('template/Etat_heure',$data);
      $this->load->view('template/footer.php',$data);
 
	}

    public function etat_tableau(){
         $this->load->model('Excel_export_model');
         $this->load->model('Mentions');
       
    $con = array('id_niv_par' => $this->input->post('id_niveau'));
    $data['ec']=$this->Excel_export_model->select_ec_stat($con);  
    //print_r($data);
   $i=0;
    foreach ($data['ec'] as $value) {
     
        $value->evolution=$this->Excel_export_model->select_evolution(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        if ($value->evolution[0]->evolution=='') {
         $value->evolution=0;
        }
        else{
          $value->evolution=$value->evolution[0]->evolution;
        }
        $value->semestre=$this->Excel_export_model->select_semestre( $value->niv_par_id );

        $annee=$this->Excel_export_model->select_annee( array('status' => "en cours"));
        $value->annee=$annee[0]->annee;
        $value->enseignant=$this->Excel_export_model->select_enseignant(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        $value->heures=$this->Excel_export_model->select_heure(array('id_ec' => $value->id_ec ));

   }  
   $con = array('id_niv_par' => $this->input->post('id_niveau'));
    $data_niv_par=$this->Excel_export_model->select_niv($con);
    $data['niv_par']= $data_niv_par;
    foreach ($data['niv_par'] as $value) {
    //$con = array('niveau_id' =>$data_niv_par[0]->niveau_id);
        $con=$this->input->post('id_niveau');
    $data['semestre']=$this->Excel_export_model->select_semestre($con);
    $value->semestre=$data['semestre']; 
    
     }
     $data['annees']=$this->Excel_export_model->select_annee(array('status' => "en cours"));

        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
        $data['mentions']=$this->Mentions->select();
  //echo "<pre>";
   //print_r($data);
   //echo "</pre>";
     // $this->load->view('template/header.php',$data);
      //$this->load->view('template/Etat_heure',$data);
      $this->load->view('template/Etat_heure_select',$data);
      //$this->load->view('template/footer.php',$data);
 
    }

    public function etat_select(){
         $this->load->model('Excel_export_model');
         $this->load->model('Mentions');
         $this->load->library('Pdf');
       
    $con = array('id_niv_par' => $this->input->post('Niveau'));
    $data['ec']=$this->Excel_export_model->select_ec_stat($con);  
    //print_r($data);
   $i=0;
    foreach ($data['ec'] as $value) {
     
        $value->evolution=$this->Excel_export_model->select_evolution(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        if ($value->evolution[0]->evolution=='') {
         $value->evolution=0;
        }
        else{
          $value->evolution=$value->evolution[0]->evolution;
        }
        $value->semestre=$this->Excel_export_model->select_semestre( array('niveau_id' => $value->niveau_id ));

        $annee=$this->Excel_export_model->select_annee( array('status' => "en cours"));
        $value->annee=$annee[0]->annee;
        $value->enseignant=$this->Excel_export_model->select_enseignant(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        $value->heures=$this->Excel_export_model->select_heure(array('id_ec' => $value->id_ec ));

   }  
   $con = array('id_niv_par' => $this->input->post('Niveau'));
    $data_niv_par=$this->Excel_export_model->select_niv($con);
    $data['niv_par']= $data_niv_par;
    foreach ($data['niv_par'] as $value) {
    $con = array('niveau_id' =>$data_niv_par[0]->niveau_id);
    $data['semestre']=$this->Excel_export_model->select_semestre($con);
    $value->semestre=$data['semestre']; 
    
     }
     $data['annees']=$this->Excel_export_model->select_annee(array('status' => "en cours"));

        $data['semestre']=$this->db->get('semestres')->result();
        $data['cycles']=$this->Mentions->select_cycle();
        $data['mentions']=$this->Mentions->select();
  //echo "<pre>";
   //print_r($data);
   //echo "</pre>";

        $this->pdf->generate('template/Etat_heure_select',$data);
       $this->load->view('template/Etat_heure_select',$data);
      //$this->load->view('template/header.php',$data);
      //$this->load->view('template/Etat_heure_select',$data);
      //$this->load->view('template/footer.php',$data);
 
    }

  public function ch1(){
    $id= $this->input->post('mention');
    $condition=array('mention_id'=> $id);
    $data['parcours']=$this->Excel_export_model->select_parcours($condition);
    $data1=$this->Excel_export_model->select_parcours($condition);
    $condition1=array('parcour_id'=> $data1[0]->id_parcour);
    $data['niveau']=$this->Excel_export_model->select_niv($condition1);
    //print_r($data) ;
    echo json_encode($data); 
  }
  public function ch2(){
    $id= $this->input->post('parcour');
    $condition=array('parcour_id'=> $id);
    $data['niveau']=$this->Excel_export_model->select_niv($condition);
    //print_r($data) ;

    echo json_encode($data);

  } 
	public function action($id){
    
    $this->load->model('Excel_export_model');
       $this->load->library('Excel');

           $con = array('id_niv_par' => $id );
    $data['ec']=$this->Excel_export_model->select_ec_stat($con);  
    //print_r($data);
   $i=0;

    foreach ($data['ec'] as $value) {
     
        $value->evolution=$this->Excel_export_model->select_evolution(array('ec_id' => $value->id_ec ));
        $value->semestre=$this->Excel_export_model->select_semestre( array('niveau_id' => $value->niveau_id ));
        $annee=$this->Excel_export_model->select_annee( array('status' => "en cours"));
        $value->annee=$annee[0]->annee;
        $value->enseignant=$this->Excel_export_model->select_enseignant(array('ec_id' => $value->id_ec,'status' => "en cours" ));
        $value->heures=$this->Excel_export_model->select_heure(array('id_ec' => $value->id_ec ));
        $value->vide="   ";

   } 
      $objet = new PHPExcel();
      $objet->setActiveSheetIndex(0);

      $table_columns=array("","","","","","","","");

      $column=0;
      foreach ($table_columns as $value) {
      	$objet->getActiveSheet()->setCellValueByColumnAndRow($column, 1,$value);
      	$column++;
      }
       $ec=$data['ec'];
        
   if ($ec!= NULL) {
        
       foreach ($ec as $row) {
      // $objet->getActiveSheet()->mergeCells("A12:A13");
      $objet->getActiveSheet()->getColumnDimension('C')->setWidth(40);
      $objet->getActiveSheet()->getColumnDimension('D')->setWidth(30);
      $objet->getActiveSheet()->getColumnDimension('G')->setWidth(20);
      $objet->getActiveSheet()->mergeCells("B2:K2");
      $objet->getActiveSheet()->mergeCells("G3:H3");
      $objet->getActiveSheet()->mergeCells("B5:K5");
      $objet->getActiveSheet()->setCellValue('B2',"Etat des heures effectuees par des enseignants en ".$row->rendu." au semestre  ".$row->semestre[0]->semestre." et ".$row->semestre[1]->semestre." annees ".$row->annee);
      $objet ->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->getStyle('B2')->getFont()->setSize(17);
                   
                  
      $objet->getActiveSheet()->setCellValue('B3',"Code"); 
      $objet->getActiveSheet()->setCellValue('C3',"Intitule EC");
      $objet->getActiveSheet()->setCellValue('D3',"Nom de l'enseignant");
      $objet->getActiveSheet()->setCellValue('E3',"CM");
      $objet->getActiveSheet()->setCellValue('F3',"TD");
      $objet ->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
     // $objet->getActiveSheet()->getStyle('G3')->getFont()->setSize(17);
      $objet->getActiveSheet()->setCellValue('G3',"Travaux Pratique");
      $objet->getActiveSheet()->setCellValue('I3',"Total des heures effectuees");
      $objet ->getActiveSheet()->getStyle('G4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->setCellValue('G4',"Groupes");
      $objet->getActiveSheet()->setCellValue('H4',"heures");
      $objet->getActiveSheet()->setCellValue('B5',"Semestre  ".$row->semestre[0]->semestre);
       $objet ->getActiveSheet()->getStyle('B5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->getStyle('B5')->getFont()->setSize(15);
                    
            }      
                   
                   $j=6;
                    $a=0;
                    $b=0;
       foreach ($ec as $value) {
                    
        if ($value->semestre[0]->id_semestre==$value->semestre_id) {
                       $n=0;
                  foreach ($value->enseignant as $row) {
                            $n++;
                         }
                          $m=$j+$n-1;
          $objet->getActiveSheet()->mergeCells("B".$m.":B".$m);
          $objet->getActiveSheet()->mergeCells("C".$j.":C".$m);
          $objet ->getActiveSheet()->getStyle('B'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('B'.$j,$value->code_ec);
          $objet ->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
       $objet->getActiveSheet()->setCellValue('C'.$j,$value->intitule_ec);       
              
                       for ($i=0; $i < $n; $i++) { 
          $objet->getActiveSheet()->setCellValue('D'.$j,$value->enseignant[$i]->nom_prenom);
         $objet ->getActiveSheet()->getStyle('E'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('E'.$j,$value->heure_cm);
           $objet ->getActiveSheet()->getStyle('F'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('F'.$j,$value->heure_td);
           $objet ->getActiveSheet()->getStyle('H'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
           $objet->getActiveSheet()->setCellValue('H'.$j,$value->heure_tp);
            $objet ->getActiveSheet()->getStyle('G'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('G'.$j,"/");
          $objet ->getActiveSheet()->getStyle('I'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->mergeCells("I".$j.":k".$m);
          $objet->getActiveSheet()->setCellValue('I'.$j,($value->evolution[0]->evolution)."/".$value->heure);
                     $x=$j++;
          
                       }
                              
      }
       }

            $j=$x+2;
         
    $objet->getActiveSheet()->mergeCells("B".$j.":K".$j);
    $objet->getActiveSheet()->setCellValue("B".$j,"Semestre ".$value->semestre[1]->semestre);
      $objet ->getActiveSheet()->getStyle("B".$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->getStyle("B".$j)->getFont()->setSize(15);
       
         

          foreach ($ec as $value) {
         
        if ($value->semestre[1]->id_semestre==$value->semestre_id) {
                       $n=0;
             foreach ($value->enseignant as $row) {
                            $n++;
                         }
                         if ($a==0) {
            
                           $j=$j+1;
                           $a=1;
                         }
                          $m=$j+$n-1;
          $objet->getActiveSheet()->mergeCells("B".$j.":B".$m);
          $objet->getActiveSheet()->mergeCells("C".$j.":C".$m);
          $objet ->getActiveSheet()->getStyle('B'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('B'.$j,$value->code_ec);
          $objet ->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('C'.$j,$value->intitule_ec);       
              
                       for ($i=0; $i < $n; $i++) { 
          $objet->getActiveSheet()->setCellValue('D'.$j,$value->enseignant[$i]->nom_prenom);
          $objet ->getActiveSheet()->getStyle('E'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('E'.$j,$value->heure_cm);
          $objet ->getActiveSheet()->getStyle('F'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('F'.$j,$value->heure_td);
          $objet ->getActiveSheet()->getStyle('H'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('H'.$j,$value->heure_tp);
          $objet ->getActiveSheet()->getStyle('G'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->setCellValue('G'.$j,"/");
          $objet ->getActiveSheet()->getStyle('I'.$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
          $objet->getActiveSheet()->mergeCells("I".$j.":k".$m);
          $objet->getActiveSheet()->setCellValue('I'.$j,($value->evolution[0]->evolution)."/".$value->heure);
                  $j++;        
         }
                      
             
      }
    } 

}
  else{

    $con = array('id_niv_par' => $id);
    $data_niv_par=$this->Excel_export_model->select_niv($con);
    $data['niv_par']= $data_niv_par;
    foreach ($data['niv_par'] as $value) {
    $con = array('niveau_id' =>$data_niv_par[0]->niveau_id);
    $data['semestre']=$this->Excel_export_model->select_semestre($con);
    $value->semestre=$data['semestre']; 
    $data['annees']=$this->Excel_export_model->select_annee(array('status' => "en cours"));
     $niv_par=$data['niv_par'];
     $annees=$data['annees'];
               $objet = new PHPExcel();
      $objet->setActiveSheetIndex(0);

      $table_columns=array("","","","","","","","");

      $column=0;
      foreach ($table_columns as $value) {
        $objet->getActiveSheet()->setCellValueByColumnAndRow($column, 1,$value);
        $column++;
         foreach ($niv_par as $row) {
           
         
      $objet->getActiveSheet()->getColumnDimension('C')->setWidth(40);
      $objet->getActiveSheet()->getColumnDimension('D')->setWidth(30);
      $objet->getActiveSheet()->getColumnDimension('G')->setWidth(20);
      $objet->getActiveSheet()->mergeCells("B2:K2");
      $objet->getActiveSheet()->mergeCells("G3:H3");
      $objet->getActiveSheet()->mergeCells("B5:K5");
        foreach ($annees as $value) {
         
       
          $objet->getActiveSheet()->setCellValue('B2',"Etat des heures effectuees par des enseignants en ".$row->rendu." au semestre  ".$row->semestre[0]->semestre." et ".$row->semestre[1]->semestre." annees ".$value->annee);
 }
      $objet ->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->getStyle('B2')->getFont()->setSize(17);
                   
                  
      $objet->getActiveSheet()->setCellValue('B3',"Code"); 
      $objet->getActiveSheet()->setCellValue('C3',"Intitule EC");
      $objet->getActiveSheet()->setCellValue('D3',"Nom de l'enseignant");
      $objet->getActiveSheet()->setCellValue('E3',"CM");
      $objet->getActiveSheet()->setCellValue('F3',"TD");
      $objet ->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
     // $objet->getActiveSheet()->getStyle('G3')->getFont()->setSize(17);
      $objet->getActiveSheet()->setCellValue('G3',"Travaux Pratique");
      $objet->getActiveSheet()->setCellValue('I3',"Total des heures effectuees");
      $objet ->getActiveSheet()->getStyle('G4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->setCellValue('G4',"Groupes");
      $objet->getActiveSheet()->setCellValue('H4',"heures");
      $objet->getActiveSheet()->setCellValue('B5',"Semestre  ".$row->semestre[0]->semestre);
       $objet ->getActiveSheet()->getStyle('B5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->getStyle('B5')->getFont()->setSize(15);
                   
                           $j=6;
         
    $objet->getActiveSheet()->mergeCells("B".$j.":K".$j);
    $objet->getActiveSheet()->setCellValue("B".$j,"Semestre ".$row->semestre[1]->semestre);
      $objet ->getActiveSheet()->getStyle("B".$j)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
      $objet->getActiveSheet()->getStyle("B".$j)->getFont()->setSize(15);
       


      }}}
           }

       $objet_writer = PHPExcel_IOFactory::createWriter($objet, 'Excel5');
                   header("Content-Type: application/vnd.ms-excel");
                   header("Content-Disposition: attachment; fieldname='etat_heure.xls'");
                   $objet_writer->save('php://output');
	}

	}?>