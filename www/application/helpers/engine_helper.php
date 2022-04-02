<?php 
	if ( ! function_exists('cek_input'))
	{
		function cek_input($method='')
		{
			$ci = & get_instance();
			if ($ci->input->server('REQUEST_METHOD') === $method) {
				$data = ['status'=>400,'msg'=>'Bad Request'];
				$ci->output
				->set_status_header(400)
				->set_content_type('application/json', 'utf-8')
				->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
				->_display();
				exit;
			}
		}
	}
	
	if ( ! function_exists('curl_get'))
	{
		function curl_get($params = array(),$userData){
			$ch = curl_init($params['url']);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $params['apiKey']));
			curl_setopt($ch, CURLOPT_USERPWD, "$params[apiUser]:$params[apiPass]");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);
			
			$result = curl_exec($ch);
			return $result;
			
			// Close cURL resource
			curl_close($ch);
		}
	}
	
	if ( ! function_exists('curl_post'))
	{
		function curl_post($params = array(),$userData){
			$ch = curl_init($params['url']);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $params['apiKey']));
			curl_setopt($ch, CURLOPT_USERPWD, "$params[apiUser]:$params[apiPass]");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);
			
			$result = curl_exec($ch);
			return $result;
			
		// Close cURL resource
		curl_close($ch);
		}
	}
	if ( ! function_exists('cek_menu_akses'))
	{
		function cek_menu_akses(){
			$ci = & get_instance();
			$session = $ci->session->g_sessid;
			$link_menu = $ci->uri->uri_string();
			if(isset($session)){
				$menu = $ci->db->query("SELECT * FROM menuadmin WHERE link='$link_menu'")->row_array();
				$user = $ci->db->query("SELECT * FROM gtbl_user WHERE id_session='$session'")->row_array();
				$people = explode(",",$user['idmenu']);
				if (!in_array($menu['idmenu'], $people)){;
					redirect(base_url().'my404');
				}
				}else{
				redirect(base_url());
			}
		}
	}
	
	if ( ! function_exists('cek_session_admin'))
	{
		function cek_session_admin(){
			$ci = & get_instance();
			$session = $ci->session->g_level;
			if ($session != 'admin'){
				redirect(base_url());
			}
		}
	}
	if ( ! function_exists('cek_session_login'))
	{
		function cek_session_login(){
			$ci = & get_instance();
			$session = $ci->session->g_level;
			if (!isset($session)){
				redirect(site_url('index.php/login'));
			}
			
		}    								
	}    													