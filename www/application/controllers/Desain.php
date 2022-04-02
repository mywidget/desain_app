<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Curl\Curl;
	class Desain extends CI_Controller {
		
		public function __construct() { 
			parent::__construct();
			cek_session_login();
			$this->uid = $this->session->g_id;
			$this->apiKey =  'CODEX@12345';
			$this->apiUser = "admin";
			$this->apiPass = "1234";
			$this->urlApi = "http://192.168.0.3/rest_api/api/authentication/";
		}
		public function index()
		{
		cek_input('GET');
			// $curl = new Curl();
			// $curl->setTimeout(60);
			// $curl->setBasicAuthentication($this->apiUser, $this->apiPass);
			// $curl->setHeader('X-API-KEY', $this->apiKey);
			// $curl->setHeader('Content-Type', 'application/json');
			// $curl->setHeader('Accept', 'application/json');
			// $curl->get($this->urlApi.'desain/'.$this->uid);
			
			// if ($curl->error) {
				// echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
				// } else {
				
				// echo json_encode($curl->response);
			// }
			$headers = array('Accept' => 'application/json','X-API-KEY'=>$this->apiKey);
			$options = array('auth' => array($this->apiUser, $this->apiPass));
			$request = WpOrg\Requests\Requests::get($this->urlApi.'desain/'.$this->uid, $headers, $options);
			print($request->body);
			// exit;
			// $url = array(
			// 'url' => $this->urlApi.'desain',
			// 'apiKey' => $this->apiKey,
			// 'apiUser' => $this->apiUser,
			// 'apiPass' => $this->apiPass,
			// );
			
			// $userData = array(
			// 'id' => $this->uid
			// );
			
			// $data = curl_get($url,$userData);
			// // $data = json_decode($data);
			// print_r($data);
			 
		}
		
		public function cari(){
			$invoice = $this->input->post('invoice');
			
			$headers = array('Accept' => 'application/json','X-API-KEY'=>$this->apiKey);
			$options = array('auth' => array($this->apiUser, $this->apiPass),array('X-Requests' => 'Is Awesome!'));
			
			$request = WpOrg\Requests\Requests::get($this->urlApi.'cari/'.$invoice, $headers, $options);
			
			print($request->body);
		}
		
		public function detail(){
			$invoice = $this->input->post('invoice');
			
			$headers = array('Accept' => 'application/json','X-API-KEY'=>$this->apiKey);
			$options = array('auth' => array($this->apiUser, $this->apiPass));
			
			$request = WpOrg\Requests\Requests::get($this->urlApi.'detail/'.$invoice, $headers, $options);
			
			print($request->body);
		}
		
		public function update_desain(){
			$invoice = $this->input->post('invoice');
			$user = $this->input->post('user');
			
			$curl = new Curl();
			$curl->setTimeout(30);
			$curl->setBasicAuthentication($this->apiUser, $this->apiPass);
			$curl->setHeader('X-API-KEY', $this->apiKey);
			$curl->setHeader('Content-Type', 'application/x-www-form-urlencoded');
			$curl->put($this->urlApi.'desainup/', [
			'invoice' => $invoice,
			'user' => $user,
			]);
			
			if ($curl->error) {
				echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
				} else {
				echo json_encode($curl->response);
			}
			
		}
		
		public function cek_folder(){
			$folder = $this->input->post('folder');
			$subfolder = substr($folder,0,10);
			
			if ($folder == ''){
				$pesan = "Isi dulu nama foldernya";
				}else{	
				if (file_exists($folder)) {
					$pesan = "Folder sudah ada";
					} else {
					if (file_exists($subfolder)) {
						$pesan = "Folder sudah dibuat";
						mkdir($folder,0777);
						}else{
						$pesan = "Folder tidak dapat dibuat, cek jaringan komputer";
						
					}
				}
			}
			//		$data = array();
			$data = array($pesan);	
			echo json_encode($data);
			
		}
		
		public function open_folder(){
			$folder = $this->input->post('folder');
			$subfolder = substr($folder,10);
			$subfolder2 = substr($folder,7,1);
			if ($subfolder2 == 'A'){
				$pesan = "Folder sedang dibuka";
				// $pesan = $folder;
				}else{
				$pesan = "Folder sedang dibuka";
				// $pesan = $folder;
			}
			$explorer = $_ENV["SYSTEMROOT"] . '\\explorer.exe';
			shell_exec("$explorer /n,/e,$folder");
			$data = array($pesan);	
			echo json_encode($data);
		}
		
		public function page()
		{
			$page = $this->input->post('page');
			
			$curl = new Curl();
			$curl->setTimeout(30);
			$curl->setBasicAuthentication($this->apiUser, $this->apiPass);
			$curl->setHeader('X-API-KEY', $this->apiKey);
			$curl->setHeader('Content-Type', 'application/x-www-form-urlencoded');
			$curl->post($this->urlApi.'page/', [
			'id' => $this->uid,
			'page' => $page,
			]);
			
			if ($curl->error) {
				echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
				} else {
				echo json_encode($curl->response);
			}
		}
		
	}
