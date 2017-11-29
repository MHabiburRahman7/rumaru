<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('Mymodel');
		$head['name']="home";
    }
	
	public function index()
	{
		$head['name'] = "home";
		$this->load->view('header',$head);
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	public function about(){
		$head['name'] = "about";
//		var_dump($head);
//		die();
		$this->load->view('header',$head);
		$this->load->view('about');
		$this->load->view('footer');
	}
	
	public function agents(){
		$head['name'] = "agent";
		$this->load->view('header',$head);
		$this->load->view('agents');
		$this->load->view('footer');
	}
	
	public function blog(){
		$this->load->view('header', $head);
		$this->load->view('blog');
		$this->load->view('footer');
	}
	
	public function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	public function property_detail(){
		$head['name'] = "buy";
		//$this->load->view('header');
		$this->load->view('property-detail', $head);
		//$this->load->view('footer');
	}
	
	public function property_rent(){
		$head['name'] = "rent";
		//$this->load->view('header');
		$this->load->view('property_rent', $head);
		//$this->load->view('footer');
	}
	
	public function buysalerent(){
		$this->load->view('buysalerent');
	}
	
	public function buy(){
		$head['name'] = "buy";
		$this->load->view('new_buy',$head);
	}
	
	public function rent(){
		$head['name'] = "rent";
		$this->load->view('rent',$head);
	}
	
	public function sale(){
		$head['name'] = "sale";
		$this->load->view('header',$head);
		$this->load->view('sell');
		$this->load->view('footer');
	}
	
	public function bidding(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_bidding');
		$this->load->view('footer');
	}
	
	public function ongoing(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_ongoing');
		$this->load->view('footer');
	}
	public function schedule(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_schedule');
		$this->load->view('footer');
	}
	public function messaging(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_message');
		$this->load->view('footer');
	}
	public function friends(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_friend');
		$this->load->view('footer');
	}
	
	public function logs(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_logs');
		$this->load->view('footer');
	}
	public function profile(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_dashboard');
		$this->load->view('footer');
	}
	//
	public function addfriend(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_addfriend');
		$this->load->view('footer');
	}
	
	public function addhouse(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_addhouse');
		$this->load->view('footer');
	}
	public function morehouses(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('ad_morehouses');
		$this->load->view('footer');
	}
	
	public function announce(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('sys_announce');
		$this->load->view('footer');
	}
	public function usermanage(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('sys_usermanage');
		$this->load->view('footer');
	}
	
	public function adsmanage(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('sys_adsmanage');
		$this->load->view('footer');
	}
	public function transmanage(){
		$head['name']="home";
		$this->load->view('header', $head);
		$this->load->view('sys_transmanage');
		$this->load->view('footer');
	}
	
	// public function profile(){
		
		// $hasil = $this->session->userdata('logged_in');		
		//var_dump($this->session->userdata('id_user'));
		
		// $this->load->view('header');
		// if($hasil){
			// $this->load->view('ad_dashboard');
		// }
		// else{
			// redirect('auth/login');
		// }
		// $this->load->view('footer');
	// }
	
	public function login(){
		$head['name'] = "login";
		$data = array();
        $userData = array();
        
		if($this->input->post('loginSubmit')){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			
			if($this->form_validation->run() == true){
				$name = $this->input->post('name');
				$password = md5($this->input->post('password'));
				$check = $this->Mymodel->check_login($name, $password);
				//var_dump($password);
				//die();
				
				$result = count($check);
				
				if($result > 0){
					$get_data = $this->db->get_where('user', array('username' => $name, 'password' => $password))->row();
					$data = array('logged_in' => true, 'id_user' => $get_data->id, 'logged_name' => $get_data->username);
					//var_dump($data);
					//die();
					$this->session->set_userdata($data);
					redirect('auth/profile');
				}
				else{
					$this->session->set_flashdata("error","Not logged in, something wrong");
				}
			}			
		}	
		
		$data['user'] = $userData;
		$this->load->view('login', $head);
	}
	
	public function logout(){
		$user_data = $this->session->all_userdata();	
			foreach ($user_data as $key => $value) {
				if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
					$this->session->unset_userdata($key);
				}
			}
		$this->session->sess_destroy();
		redirect('auth/');
	}
	
	public function read_friend(){
		$this->load->view('header', $head);
        $friendData = array();
		
		$datas = $this->Mymodel->get_friend();
		foreach($datas as $row){
			$friendData['wkwkwk'][] = $row;
		};
		//var_dump($friendData["wkwkwk"]);
		//die();
				
		$this->load->view('user_list', $friendData);
		$this->load->view('footer');
	}
	
	// public function profile(){
		
		// $hasil = $this->session->userdata('logged_in');		
		//var_dump($this->session->userdata('id_user'));
		
		// $this->load->view('header');
		// if($hasil){
			// $this->load->view('ad_dashboard');
		// }
		// else{
			// redirect('auth/login');
		// }
		// $this->load->view('footer');
	// }
	
	
	
	public function login_old()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
		
		if($this->form_validation->run() == true){
		
		}
		
		$name = strip_tags($this->input->post('name'));
		$password = md5($this->input->post('password'));
		
		/*
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('name' => $name, 'password' => $password));
		*/
		
		//$query = $this->db->get('users');
		
		$query = $this->db->query("SELECT * FROM users WHERE ");
		
		$user = $query->row();
		
		if($user->row['email']){
			$this->session->set_flashdata("success", "Successfully login");
			
			$_SESSION['user_log'] = TRUE;
			$_SESSION['name'] = $user->name;
			
			redirect('Auth/profile', 'refresh');
		}
		else{
			$this->session->set_flashdata("error", "Failed to login");
			redirect('Auth/login', 'refresh');
		}
		/*
		$temp_data = array(
			'name' => strip_tags($this->input->post('name')),
			'password' => md5($this->input->post('password'))
		);
		*/
		
		$get_profile = $this->Mymodel->getRow(array('id'=>$this->session->userdata('userId')));
		
		$this->load->view('login');
	}
	
	public function register(){
		$head['name'] = "register";
		$data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
			//echo "Posted";
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            if($this->form_validation->run() == true){
				echo "<br> insideRun ";
				
				$userData = array(
				
					'username' => strip_tags($this->input->post('name')),
					'email' => strip_tags($this->input->post('email')),
					'password' => md5($this->input->post('password')),
					//'gender' => $this->input->post('gender'),
					'phoneno' => strip_tags($this->input->post('phone')),
					'usertype' => '0'
					/*
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'phone' => $_POST['phone']
					*/
				);
				
				//$this->db->insert('users', $userData);
				
				$insert = $this->Mymodel->insert($userData);
                if($insert){
                    /*
					$this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('Auth/register');
					*/
					$this->session->set_flashdata("success", "Your account has been created, you can login");
					redirect('Auth/register', "refresh");
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }				
            }
        }
        $data['user'] = $userData;
        //load the view
        //$this->load->view('users/registration', $data);
		$this->load->view('register', $head);
	}
	
}
