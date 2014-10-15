<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function  Admin(){
		parent::__construct();
		$this->load->model('dao_model/authentication_dao_model');
		$this->load->model('dto_model/authentication_dto_model');
	}
	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	public function page_list_user(){
		$this->load->view('admin/header');
		require ('authentication.php');
		$user=new Authentication();
		$user->list_user();
		//$this->load->view('admin/php/all-users');
		$this->load->view('admin/footer');
		
	}
	public function page_edit_user(){
		$this->load->view('admin/header');
		require ('authentication.php');
		$user=new Authentication();
		$user->list_edit_user_by_id();
		$this->load->view('admin/footer');
	}
	public function page_add_user(){
		$this->load->view('admin/header');
		$this->load->view('admin/php/add-user');
		$this->load->view('admin/footer');
	}
	public function page_login(){
		$this->load->view('page-login');
	}
	/*loading page category*/
	public function page_add_category(){
		$this->load->view('admin/header');
		$this->load->view('admin/php/add-category');
		$this->load->view('admin/footer');
	}
	public function page_list_category(){
		$this->load->view('admin/header');
		require ('category.php');
		$category=new Category();
		$category->list_category();
		$this->load->view('admin/footer');

	}public function page_edit_category(){
		$this->load->view('admin/header');
		require ('category.php');
		$category=new Category();
		$category->list_category_by_id();
		$this->load->view('admin/footer');
	}

	public function add_new_post(){
		$this->load->view('admin/header');
		$this->load->view('admin/php/add-post');
		$this->load->view('admin/footer');
	}
	public function view_all_posts(){
		$this->load->view('admin/header');
		$this->load->view('admin/php/all-posts');
		$this->load->view('admin/footer');	
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */