<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class projet extends CI_Controller {

	public function  __construct()
	{
		parent:: __construct();
		
	}
	public function acceuil($contaner="home")
	{

		$this->load->view('templates\header');
		$this->load->view('templates\\'.$contaner);
		//$this->load->view('templates\footer');
	}

	public function page1()
	{
		
		$this->load->view('page1');
	}


	public function adb()
	{
		
		$this->load->view('adb');
	}

	
}

?>