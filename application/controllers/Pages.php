<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function photo()
	{
		
		$this->load->view('photo');
	}

	function web()
	{
		$this->load->view('web');
	}

	function brand()
	{
		$this->load->view('brand');
	}

   


  



}
