<?php

class user_model extends CI_Model{
    // get all of  users
	 public function get_users(){

	 	//$config['hostname']="localhost";
	 	//$config['hostname']="localhost"
	 	//$query = $this->db->get('user');
	 	//return $query->result();
	 	$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result_array();
	 }
     // get only one user
	  public function get_user($id_user){

	 	//$config['hostname']="localhost";
	 	//$config['hostname']="localhost"
	 	//$query = $this->db->get('user');
	 	//return $query->result();
	 	$this->db->where('id_user',$id_user);
		$this->db->from('user');
		return $this->db->get()->result_array();
	 }

	public function create_users($data){
        

        	$insert_data=$this->db->insert('user',$data);
		     return $insert_data;
	}


	public function update_users($data,$id_user){

       //$id_user=$data[];
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
	}

	public function delete_users($id){

		$this->db->where(['id_user'=>$id]);
		$this->db->delete('user');
	}


	public function login_user($username, $password) {


		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$result = $this->db->get('user');

		//$db_password = $result->row(3)->password;


		if($result->num_rows()==1) {

			return $result->row(0)->id_user;

		} else {

			return false;

		}}

}
?>