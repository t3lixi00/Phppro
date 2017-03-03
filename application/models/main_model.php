<?php

 class main_model extends CI_Model{

    public function get_News(){

    	$query= $this->db->get('main');
    	return $query->result();
    	//$query=$this->db->query("SELECT * FROM main");
    	//return $query->num_rows();
    }
    

    public function get_New($id){

        $this->db->where('id_news',$id);
        $this->db->from('main');
        return $this->db->get()->result_array();
        //$query=$this->db->query("SELECT * FROM main");
        //return $query->num_rows();
    }

	public function create_news($data){
		$this->db->insert('main',$data);
	}
     
     public function update_news($data,$id_news){

     	$this->db->where(['id_news'=>$id_news]);
		$this->db->update('main',$data);
	}
  

     public function delete_news($id){

		$this->db->where(['id_news'=>$id]);
		$this->db->delete('main');
	}  
 }
?>