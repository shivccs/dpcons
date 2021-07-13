<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->database();
        $this->load->model('MainModel', 'admin');  
	    $this->load->library('session');
    }

	public function index()
	{
		 
		$this->load->view('home');
		
}

}
