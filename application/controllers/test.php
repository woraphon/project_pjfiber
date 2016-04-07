<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home/test');
	}
}
// <?php
// class home extends CI_Controller{
	
// 	function __construct(){
		
// 		parent::__construct();
// 	}
	
// 	function index(){
		
// 		$this->load->view('home/home');
// 	}
	
// }
