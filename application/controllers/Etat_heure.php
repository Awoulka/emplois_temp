<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etat_heure extends CI_Controller {

	public function index(){
    $this->load->model('Impression');
        $this->load->model('Impression_ens');
    $con = array('id_niv_par' => 2 );
    $data['ec']=$this->Impression->select_ec_stat($con);  
    //print_r($data);
   $i=0;
    foreach ($data['ec'] as $value) {
     
        $value->evolution=$this->Impression_ens->select_evolution(array('ec_id' => $value->id_ec ));
        $value->semestre=$this->Impression->select_semestre( array('niveau_id' => $value->niveau_id ));
        $annee=$this->Impression->select_annee( array('status' => "en cours"));
        $value->annee=$annee[0]->annee;
        $value->enseignant=$this->Impression->select_enseignant(array('ec_id' => $value->id_ec ));
        $value->heures=$this->Impression->select_heure(array('id_ec' => $value->id_ec ));

   } 
    
   $this->load->view('templates/etat_heure',$data);
   echo "<pre>";
  // print_r($data);
   echo "</pre>";
}
  public function action(){
    $this->load->model('Impression');
        $this->load->model('Impression_ens');
    $this->load->model('Excel_export_model');
       $this->load->library('excel');
      $objet = new PHPExcel();
      $objet->setActiveSheetIndex(0);

      $table_columns=array("intitule_ec","code_ec","code_alpha_ec");

      $column=0;
      foreach ($table_columns as $value) {
        $objet->getActiveSheet()->setCellValueByColumnAndRow($column, 1,$value);
        $column++;
      }
      $con = array('id_niv_par' => 2 );
    $ec=$this->Impression->select_ec_stat($con); 

                // $ec=$this->Excel_export_model->test_excel();
                   $excel_row = 2;
                   foreach ($ec as $row) {
                  
                    $objet->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row->intitule_ec);
                    $objet->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row->code_ec);
                    $objet->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row->code_alpha_ec);
                    $excel_row++;
                   }

                   $objet_writer = PHPExcel_IOFactory::createWriter($objet, 'Excel5');
                   header("Content-Type: application/vnd.ms-excel");
                   header("Content-Disposition: attachment; fieldname='ecData.xls'");
                   $objet_writer->save('php://output');
  }

}

?>