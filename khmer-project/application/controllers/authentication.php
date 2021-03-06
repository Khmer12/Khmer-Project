<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function  Authentication(){
		parent::__construct();
		$this->load->model('dao_model/authentication_dao_model');
		$this->load->model('dto_model/authentication_dto_model');
// 		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('index');
	}
	public function page_login(){
		$this->load->view('page-login');
	}	
	public function list_user(){
		$data['title']="list user";
		$data['header']="list_user";
		$data=array();
		$data['result']= $this->authentication_dao_model->get_user_account();
		if($data){
			
			$this->load->view('admin/php/all-users',$data);

		}else {
			echo " data not found";
		}
	}
	
	public function add_user(){
		$data['title']="add user";
		$data['header']="add_user";
		$user_name=$this->input->post('user_name');
		$user_password=$this->input->post('user_password');
		$user=new Authentication_dto_model();
		$user->set_user_name($user_name);
		$user->set_user_password($user_password);
		$data= $this->authentication_dao_model->add_new_user_account($user);
		if($this->input->post('add_user')){
			if ($data==true){
				$this->load->view('admin/php/add-user');
			}
		}
	}
	
	public function list_edit_user_by_id(){
		$data['title']="list user";
		$data['header']="list_user";
		$data=array();
		$user=new Authentication_dto_model();
		$user_id=$this->input->get('user_id');
		$user->set_user_id($user_id);
		$data['result']= $this->authentication_dao_model->get_user_account_by_id($user);
		if($data){

			$this->load->view('admin/php/edit-user',$data);
		}
	}
	
	/**
	 * Login user account
	 * 	If success 
	 * 		return true;
	 *  else 
	 *		return false;
	 */
	public function login_user_account(){
		$data['title']="login";
		$data['header']="login_account";
		$user_name=$this->input->post('user_name');
		$user_password=$this->input->post('user_password');
		$user=new Authentication_dto_model();
		$user->set_user_name($user_name);
		$user->set_user_password($user_password);	
		$data= $this->authentication_dao_model->get_login_account($user);
		if ($data==true){
			$this->session->set_userdata('username',$user->get_user_name());
			redirect("admin/page_dashboard");
		}else{
			redirect("admin/page_login");
		}	
	}
	public function log_out(){
		$this->session->unset_userdata('username');
		redirect("authentication/index");
	}
	public function update_user_account(){
		$data['title']="update user";
		$data['header']="update user ";
		$user_id=$this->input->get('user_id');
		$user_name=$this->input->post('user_name');
		$user_password=$this->input->post('user_password');
		$user =new Authentication_dto_model();
		$user->set_user_id($user_id);
		$user->set_user_name($user_name);
		$user->set_user_password($user_password);
		$data= $this->authentication_dao_model->edit_user_account($user);
		if ($data==true){
			$this->list_user();
		}else{
			echo 'unsuccessfully update';
		}
	}
	
	public function enable_disable_user(){
		$data['title']=" enable and disable user";
		$data['header']="enable_disable_user";
		$status=$this->input->get('status');
		$user_id=$this->input->get('user_id');
		$user =new Authentication_dto_model();
		$user->set_user_id($user_id);
		$data= $this->authentication_dao_model->enable_disable_user_account($user,$status);
		if ($data==true){
			$this->load->view("admin/header");
			$this->list_user();
			$this->load->view("admin/footer");
		}
	}
}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */