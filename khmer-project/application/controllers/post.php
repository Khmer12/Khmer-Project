<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {
	
	public function Post(){
		parent::__construct();
		$this->load->model('dao_model/post_dao_model');
		$this->load->model('dto_model/post_dto_model');
		$this->load->helper(array('form', 'url'));
	}

	public function add_new_post(){
		$config = array(
			'upload_path' => 'upload',
			'allowed_types' =>'gif|jpg|png',
			'max_size' => 250,
			'max_width' => 1920,
			'max_height' => 1080,
		);
		$this->load->library('upload',$config);

  		if(!$this->upload->do_upload('post_image'))
		{
			echo $this->upload->display_errors();
		}
		else
		{
  			$this->post_dto_model->set_post_title($this->input->post('post_title'));
			$this->post_dto_model->set_post_content($this->input->post('post_content'));
		
			$this->post_dto_model->set_post_created($this->input->post('post_created'));
  			$upload_data = $this->upload->data();
  			if(isset($upload_data['file_name'])){
  				$this->post_dto_model->set_post_image($upload_data['file_name']);
  			}
  			$this->post_dto_model->set_category_id(1);
			$this->post_dto_model->set_user_id(1);
			$this->post_dto_model->set_post_view_count(0);
			$this->post_dao_model->add_new_post($this->post_dto_model);
  		}
  		$this->view_all_posts();
	}

	public function view_all_posts(){
		$this->load->view('admin/header');
		$data=array();
		$data['result']= $this->post_dao_model->get_all_posts();
		if($data){
			$this->load->view('admin/php/all-posts',$data);
		}else {
			echo " data not found";
		}
		$this->load->view('admin/footer');			
	}
	public function test(){
	
	}
}
