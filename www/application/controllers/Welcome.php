<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Curl\Curl;
	class Welcome extends CI_Controller {
		public function __construct() { 
			parent::__construct();
			
			$this->uid = $this->session->g_id;
			$this->apiKey =  'CODEX@12345';
			$this->apiUser = "admin";
			$this->apiPass = "1234";
			$this->urlApi = "http://192.168.0.3/rest_api/api/authentication/";
		}
		public function index()
		{
			// cek_session_login();
			if(isset($this->session->g_level)){
				$data['title'] ='Login';
				$this->template->load('theme',$this->session->g_level,$data);
				}else{
				redirect('index.php/login');
			}
			
		}
		
		public function desain()
		{
			cek_session_login();
			$data['title'] ='Desain';
			$this->template->load('theme','desain',$data);
		}
		public function dashboard()
		{
			cek_session_login();
			$data['title'] ='Desain';
			$this->template->load('theme','desain',$data);
		}
		
		public function login()
		{
			$curl = new Curl();
			$curl->setTimeout(30);
			$curl->setBasicAuthentication($this->apiUser, $this->apiPass);
			$curl->setHeader('X-API-KEY', $this->apiKey);
			$curl->setHeader('Content-Type', 'application/x-www-form-urlencoded');
			$curl->post($this->urlApi.'login/', [
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
			]);
			
			if ($curl->error) {
				echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>'.$curl->response->message.'</center></div>');
				$this->template->load('theme','login');
				} else {
				if($curl->response->status==true){
					$user_data = array(
					'g_user'    =>$curl->response->data->username,
					'g_nama' 	=>$curl->response->data->nama,
					'g_email'   =>$curl->response->data->email,
					'g_pass'    =>$curl->response->data->password,
					'g_sessid'  =>$curl->response->data->id_session,
					'g_level'   =>$curl->response->data->level,
					'g_id'      =>$curl->response->data->id_user
					);
					$this->session->set_userdata($user_data);
					if($this->session->g_level=='admin'){
						redirect('index.php/welcome/admin');
						}elseif($this->session->g_level=='fo'){
						redirect('index.php/welcome/fo');
						}elseif($this->session->g_level=='desain'){
						redirect('index.php/welcome/desain');
						}else{
						redirect('index.php/welcome/dashboard');
					}
				}
			}
		}
		
	}
