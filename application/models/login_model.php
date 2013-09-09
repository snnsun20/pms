<?php
	class login_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
			//Load Database
		}
	
		//Function to get only brand name via id
		public function getname($name) {
		
	        $this->db->select('*');
			$this->db->from('login');
			$this->db->where('username',$name);
			$query = $this->db->get();
			$query = $query->row();
			if($query){
				return $query->password;
			} else {
				return false;
			}
			
	    }
		
	  public  function add_info($db){
		  $this->db->insert('data',$db);
	  }	
	   public  function get_info(){
		$res=$this->db->get('data');
		if($res->num_rows()>0){
		 	return $res->result();
		}else{
		  return false;
		}
	  }		
	
	 public  function get_info_for_edit($id){
	         $this->db->where('id',$id);
		$res=$this->db->get('data');
		if($res->num_rows()>0){
		 	return $res->row();
		}else{
		  return false;
		}
	  }	
	public function update($id,$data) {
	  $this->db->where('id',$id);
	  $this->db->update('data',$data);
	}
	
	
	}
?>