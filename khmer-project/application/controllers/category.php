<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function  Category(){
		parent::__construct();
		$this->load->model('dao_model/category_dao_model');
		$this->load->model('dto_model/category_dto_model');
	}
	public function load_form_add_category(){
		$this->load->view('form_add_category');
	}
	
	public function list_category(){
		$data['title']="list category";
		$data['header']="list category";
		$data=array();
		$data['result']= $this->category_dao_model->get_category();
		if($data){
			$this->load->view('admin/php/all-categories',$data);
		}else {
			echo " data not found";
		}
	}
	public function list_category_by_id(){
		$data['title']="list category by id";
		$data['header']="list category by id";
		$data=array();
		$category_id=$this->input->get("category_id");
		$category=new Category_dto_model();
		$category->set_category_id($category_id);
		$data['result']= $this->category_dao_model->get_category_by_id($category);
		if($data){
			$this->load->view('admin/php/edit-category',$data);
		}else {
			echo " data not found";
		}
	}
	
	public function add_category(){
		$data['title']="add category";
		$data['method']="add_category";
		$category_name=$this->input->post('category_name');
		$category=new Category_dto_model();
		$category->set_category_name($category_name);
		echo "GET".$category->get_category_name();
		$data= $this->category_dao_model->add_new_category($category);
			if ($data==true){
				echo "successfully added";
			}else{
				echo 'unsuccessfully added';
			}	
	}
	
	public function update_category(){
		$data['title']="update category";
		$data['header']="update category";
		$category_id=$this->input->post('category_id');
		$category_name=$this->input->post('category_name');
		$category =new Category_dto_model();
		$category->set_category_id($category_id);
		$category->set_category_name($category_name);
		$data= $this->category_dao_model->edit_category($category);
		if ($data==true){
			$this->list_category();
		}else{
			echo 'unsuccessfully update';
		}
	}
}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */