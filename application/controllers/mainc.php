<?php

class mainc extends CI_Controller{

public function __construct(){

  parent::__construct();

   if(!$this->session->userdata('logged_in')){
       
       $this->session->set_flashdata('not loggin');
        redirect('home/index');
   }

}


  public function index()

  {

  	 $data['news']= $this->main_model->get_News();
     
  	 $data['main_view']="news/news_view";
     $this->load->view('layouts/main',$data);

     // $data['test']="test";
     //foreach($data['news'] as $object) {
		//	echo $object->id_news;
  //}

  }


  public function insert(){

       $this->load->model('main_model');
       $data= array(

       'description' => $this->input->post('description'),
        'image'=> $this->input->post('image'),
        'link' => $this->input->post('link')

        );
    	 
    	$this->main_model->create_news($data);
      $this->index();
    }


 public function Edit_news($id_news){
        
       $this->load->model('main_model');

       $data['news'] = $this->main_model->get_New($id_news);
       
       $data['main_view']="news/Edit_news";
       $this->load->view('layouts/main', $data);
      
        
    }



public function update(){

      $this->load->model('main_model');
    	
     $data = array(

      'id_news' => $this->input->post('id_news'),
      'description' => $this->input->post('description'), 
      'image' => $this->input->post('image'),
      'link' => $this->input->post('link')
      );
   
     $id_news=$data['id_news'];
    
      $this->main_model->update_news($data,$id_news);
       $this->index();
    }


 public function delete($id){
      
      $this->load->model('main_model');

   	  $this->main_model->delete_news($id);
      $this->index();
   }

}
?>