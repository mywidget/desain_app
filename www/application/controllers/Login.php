<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller {
		public function __construct() { 
			parent::__construct();
			
			// $this->uid = $this->session->g_id;
			// $this->apiKey =  'CODEX@12345';
			// $this->apiUser = "admin";
			// $this->apiPass = "1234";
			// $this->urlApi = "http://192.168.0.3/rest_api/api/authentication/";
		}
		public function index()
		{
			// echo 1;exit;
			$data['title'] ='Login';
			$this->load->view('login',$data);
		}
		
		public function logout()
		{
			session_destroy();
			redirect('index.php/login');
		}
	}
