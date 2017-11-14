<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mymodel');
    }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	public function about(){
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	
	public function agents(){
		$this->load->view('header');
		$this->load->view('agents');
		$this->load->view('footer');
	}
	
	public function blog(){
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
	
	public function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	public function property_detail(){
		//$this->load->view('header');
		$this->load->view('property-detail');
		//$this->load->view('footer');
	}
	
	public function buysalerent(){
		$this->load->view('buysalerent');
	}
	
	public function buy(){
		$this->load->view('buy');
	}
	
	public function rent(){
		$this->load->view('rent');
	}
	
	public function sell(){
		$this->load->view('sell');
	}
	
	public function login()
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
				
					'name' => strip_tags($this->input->post('name')),
					'email' => strip_tags($this->input->post('email')),
					'password' => md5($this->input->post('password')),
					//'gender' => $this->input->post('gender'),
					'phone' => strip_tags($this->input->post('phone'))
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
		$this->load->view('register');
	}
	
}
