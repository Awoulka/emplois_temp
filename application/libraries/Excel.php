<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  require_once("PHPExcel.php");

	class Excel extends PHPExcel
	{
		
		function __construct()
		{
			parent:: __construct();

		//$this->load->library('excel');
		}
	}
	?>