<?php

class Advertisement extends CI_Controller{


public function __construct(){

  parent::__construct();

   if(!$this->session->userdata('logged_in')){
       
       $this->session->set_flashdata('no access','sorry you are not allowed, log in please!');
        redirect('home/index');
   }
 }
	 public function index()

  {
      $this->load->model('Ad_model');
  	 $data['ad']= $this->Ad_model->get_ad();
  	 $data['main_view']="advertisement/ad_view";
     $this->load->view('layouts/main',$data);


  }
   public function ad_view()

  {
      $this->load->model('Ad_model');
  	 $data['ad']= $this->Ad_model->get_ad();
     $this->load->view('ad_view',$data);
    
  }

}
?>