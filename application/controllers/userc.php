<?php

class userc extends CI_Controller{



	public function show(){


		$this->load->model('user_model');


		$data['users'] = $this->user_model->get_users();

    $data['main_view']="admin_view";
     $this->load->view('layouts/main', $data);
		
	}


   // in admin page, to create user
   
   public function create(){

     $this->load->model('user_model');
   $data=array(

        'username' => $this->input->post('username'),
        'password'=> $this->input->post('password'),
        'email' => $this->input->post('email')
      );

     if($this->user_model->create_users($data)){

          $this->session->set_flashdata('create_success', 'Successfully!');
          redirect('userc/show');
          
       }

   }

   // edit user button, which access to Edit_user view
    public function Edit_user($id_user){
        
       $this->load->model('user_model');

       $data['user'] = $this->user_model->get_user($id_user);
       
       $data['main_view']="Edit_user";
       $this->load->view('layouts/main', $data);

        

    }

    public function update(){
      
    // echo $this->Edit_user($id_user);

      $this->load->model('user_model');

     
     $data = array(

      'id_user' => $this->input->post('id_user'),
      'username' => $this->input->post('username'), 
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email')
      );
    //  $data['username']=$this->input->post('username');
    //  $data['password']=$this->input->post('password');
    //  $data['email']=$this->input->post('email');
     $id_user=$data['id_user'];
    
      $this->user_model->update_users($data,$id_user);
      redirect('userc/show');

    }



   public function delete($id_user){
      
      $this->load->model('user_model');

   	  $this->user_model->delete_users($id_user);
      $this->show();
   }


   public function signup(){

     $data['main_view']='users/signup_view';
     $this->load->view('layouts/main',$data);

     $this->load->model('user_model');
      $data=array(

        'username' => $this->input->post('username'),
        'password'=> $this->input->post('password'),
        'email' => $this->input->post('email')
      );

     if(isset($_POST['submit'])){

          $this->user_model->create_users($data);
          $this->session->set_flashdata('signup_success', 'You can log in now');
        redirect('userc/signup');
       }
    
    
   }

   public function login(){
     
      $this->load->model('user_model');
      $username =$this->input->post('username');
     $password = $this->input->post('password');
// $this->session->set_userdata($data);
    $id_user = $this->user_model->login_user($username,$password);
    
    if($id_user){

      $user_data=array(

      'id_user'=>$id_user,
      'username'=>$username,
      'logged_in'=>true
       );

    $this->session->set_userdata($user_data);
    $this->session->set_flashdata('login_success', 'You are now logged in');


    if ($username=="admin"){
      redirect('userc/show');
       

    }else{
      redirect('home/index');

    }
    
   // add admin page

    //$data['admin_view']="admin_view";
    //$this->load->view('layouts/main', $data);
   }else{
    $this->session->set_flashdata('login_failed', 'sorry wrong password or username');
    redirect('home/index');
   }}


public function logout() {

    $this->session->sess_destroy();
    redirect('home/index');

  }


}
?>