<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
	function __contruct(){
		parent::__contruct;
	}
	public function index()
	{
		$this->load->view('contato/index');
	}
}
