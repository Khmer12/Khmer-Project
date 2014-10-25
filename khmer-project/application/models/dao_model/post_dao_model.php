<?php

class Post_dao_model extends CI_Model{
	public function Post_dao_model(){
			parent::__construct();			
			$this->load->database();
			$this->load->model('dto_model/post_dto_model');
	}

	public function add_new_post(Post_dto_model $post){
		$data = array(
			"post_title" => $post->get_post_title(),
			"post_content" => $post->get_post_content(),
			"post_image" => $post->get_post_image(),
			"post_created" => $post->get_post_created(),
			"category_id" => $post->get_category_id(),
			"post_view_count" => $post->get_post_view_count(),
			"user_id" => $post->get_user_id()
		);
		$result=$this->db->insert('tbl_posts', $data); 
		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function edit_post(Post_dao_model $post){
		$data = array(
			"post_title" => $post->get_post_title(),
			"post_content" => $post->get_post_content(),
			"post_image" => $post->get_post_image(),
			"post_created" => $post->get_post_created(),
			"category_id" => $post->get_category_id(),
			"post_view_count" => $post->get_post_view_count(),
			"user_id" => $post->get_user_id()
		);
		$this->db->where('post_id',$post->get_post_id());
		$result=$this->db->update('tbl_posts', $data); 
		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function delete_post_by_id($post_id){

	}

	public function get_all_posts(){
		$this->db->select('post_id,post_title,post_content,post_created');                
        $this->db->from('tbl_posts');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function get_post_by_id($id){

	}

}

?>