
<?php

 class Ad_model extends CI_Model{

public function get_ad(){

    	$query= $this->db->get('advertisement');
    	return $query->result();
    	
    }



   }

   ?>