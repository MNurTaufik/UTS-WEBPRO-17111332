<?php 
	
	/**
	 * 
	 */
	class admin_model extends CI_Model
	{
		public function tampilkanDataAnime(){
			return $this->db->get("17111332_film")->result();
		}
	}

 ?>