<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home/home');
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
