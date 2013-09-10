<?php

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('login_model');
	}
	
	//Deault function that runs when controller calls 
	public function index()
	{
	       
	        $this->data['data'] = $this->login_model->get_info();
		    $this->data['body']="home";
			$this->load->view("common/body",$this->data);
	}
	
	function add()
    {
        if ($this->input->post('do_save_info')) {
        
                $db = array();
                $db['date_assign'] = $this->input->post('da');
			    $db['date_deadline'] = $this->input->post('dd');
                $db['project_name'] = $this->input->post('pn');
                $db['desc'] = $this->input->post('desc');
                $db['status'] = $this->input->post('sts');
                $db['comment'] = $this->input->post('comments');
			    $db['tag'] = $this->input->post('tag');
                $db['keyword'] = $this->input->post('keyword');
                $db['person_name_assign'] = $this->input->post('pna');
                $db['person_name_update'] = $this->input->post('pnu');
         
                $id = $this->login_model->add_info($db);
                $this->session->set_flashdata('success', 'Information Added successfully ');
				
           
			 redirect('home');
        }
     
        $this->data['body'] = 'add';
        $this->load->view('common/body', $this->data);
    }

    function edit($id=0)
     {
	       $this->data['data'] = $this->login_model->get_info_for_edit($id);
	
        if ($this->input->post('do_edit_info')) {
        
                $db = array();
                $db['date_assign'] = $this->input->post('da');
			    $db['date_deadline'] = $this->input->post('dd');
                $db['project_name'] = $this->input->post('pn');
                $db['desc'] = $this->input->post('desc');
                $db['status'] = $this->input->post('sts');
                $db['comment'] = $this->input->post('comments');
			    $db['tag'] = $this->input->post('tag');
                $db['keyword'] = $this->input->post('keyword');
                $db['person_name_assign'] = $this->input->post('pna');
                $db['person_name_update'] = $this->input->post('pnu');
				$db['comments'] = $this->input->post('comments');
         
                $id = $this->login_model->update($id,$db);
                $this->session->set_flashdata('success', 'Information Added successfully ');
				
           
			 redirect('home');
        }
     
        $this->data['body'] = 'edit';
        $this->load->view('common/body', $this->data);
    }

 public function view($id=0)
    {
	
	    $this->data['viewdata'] = $this->login_model->get_info_for_edit($id);
        $this->data['body'] = 'view';
        $this->load->view('common/body', $this->data);

    }
	
	}
	
?>
