<?php
	Class Category_dao_model extends CI_Model{
		
		public function Category_dao_model(){
			parent::__construct();			
			$this->load->database();
			$this->load->model('dto_model/category_dto_model');
		}
		
		public function get_category(){
			$this->db->select('Category_ID,Category_Name');
			$this->db->from('Tbl_Categories');
			$query=$this->db->get();
			$result=$query->result();
			if($result){
				return $result;
				return true;
			}else{
				return false;
			}
		}
		public function get_category_by_id(Category_dto_model $category){
			$this->db->select('Category_ID,Category_Name');
			$this->db->from('Tbl_Categories');
			$this->db->where("Category_ID",$category->get_category_id());
			$query=$this->db->get();
			$result=$query->result();
			if($result){
				return $result;
				return true;
			}else{
				return false;
			}
		}
		
		public function add_new_category(Category_dto_model $category){
			echo "CategoryName". $category_name;
			$data = array(
					'Category_Name' =>$category->get_category_name()
			);
			$result=$this->db->insert('Tbl_Categories', $data); 
			if($result){
				return true;
			}else{
				return false;
			}
		}
		
		public function edit_category(Category_dto_model $category){
			$data = array(
					'Category_Name' =>$category->get_category_name()
			);
			$this->db->where('Category_ID', $category->get_category_id());
			$result=$this->db->update('Tbl_Categories', $data);
			if($result){
				return true;
			}else{
				return false;
			}
		}
	}
	?>