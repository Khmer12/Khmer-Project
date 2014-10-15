<?php
	Class Authentication_dao_model extends CI_Model{
		
		public function Authentication_dao_model(){
			parent::__construct();			
			$this->load->database();
			$this->load->model('dto_model/authentication_dto_model');
		}
		public function get_user_account(){
			$this->db->select('User_ID,User_Name,User_Password,Status');
			$this->db->from('Tbl_Users');
			$query=$this->db->get();
			$result=$query->result();
			if($result){
				return $result;
				return true;
			}else{
				return false;
			}
		}
		public function add_new_user_account(Authentication_dto_model $user){
			$user_name=$user->get_user_name();
			$user_password=$user->get_user_password();
			$data = array(
					'User_Name' =>$user_name,
					'User_Password' =>$user_password,
					'Status' =>1
			);
			$result=$this->db->insert('Tbl_Users', $data);
			if($result){
				return true;
			}else{
				return false;
			}
		}
		
		public function get_login_account(Authentication_dto_model $user){
			$this->db->select("User_ID,User_Name, User_Password,Status");
			$this->db->from('Tbl_Users');
			$array = array('User_Name' => $user->get_user_name(), 'User_Password' => $user->get_user_password(),'Status'=>1);
			$this->db->where($array);
			$query = $this->db->get();
			return $result=$query->result();
			if($result >0){
				return $result;
				return true;
			}else{
				return false;
			}
		}
		public function edit_user_account(Authentication_dto_model $user){
			$data = array(
					'User_Name' =>$user->get_user_name(),
					'User_Password' => $user->get_user_password(),
			);
			$this->db->where('User_ID', $user->get_user_id());
			$result=$this->db->update('Tbl_Users', $data);
			if($result){
				return true;
			}else{
				return false;
			}
		}
		public function enable_disable_user_account(Authentication_dto_model $user,$status){
			$data = array(
					'Status' =>1-$status,
			);
			$this->db->where('User_ID', $user->get_user_id());
			$result=$this->db->update('Tbl_Users', $data);
			if($result){
				return true;
			}else{
				return false;
			}
		}
		
	}
	?>