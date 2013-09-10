<?php

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('login_model');
	}
	
	//Deault function that runs when controller calls 
	public function index()
	{
	  
		    $this->data['body']="login";
			$this->load->view("common/body",$this->data);
	}
	
	public function home($msg='')
	{
	  
	
	    if ($this->input->post('do_login')) {

				$user = $this->login_model->getname($this->input->post('username'));
				if ($user) {
          
					if ($this->input->post('password') == $user) {
						redirect(site_url('home'));
				
					} else {
						$msg = 'Invalid Username or Password';
						$this->session->set_flashdata('error', 'Invalid Username or Password');
				      	redirect('login/home');
					       
					}
				} else {
					$msg = 'Invalid Username or Password';
				    $this->session->set_flashdata('error', 'Invalid Username or Password');
					redirect('login/home'.$msg);
				}
			
			
		}
	  
	
	        $this->data['msg']=$msg;
		    $this->data['body']="login";
			$this->load->view("common/body",$this->data);
	}
	
	
	
	
	}
	
?>
