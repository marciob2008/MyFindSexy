<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	function __contruct(){
		parent::__contruct;
	}
	public function index()
	{
		$this->load->view('usuarios/index');
	}
}
