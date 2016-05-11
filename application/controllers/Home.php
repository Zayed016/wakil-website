<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

		public function __construct()
        {
             parent::__construct();
        }
	
	   public function index()
        {			
             $lists['list']=$this->Data->getlist();

			 $lists['view']='home';
			 $this->load->view('main',$lists);
			 
        }

        public function catagories($pro){
        	
        	$get['pro']=$this->Data->mydata($pro);
        	$get['view']='second';
        	$this->load->view('main',$get);
        }

        public function admin(){

        if($this->session->has_userdata('logged_in')){	
       	 $send['list']=$this->Data->getlist();
         $send['view']='success';
         $this->load->view('main',$send);
    	 }
         else {
         	
        	$ad['view']='login';
        	$this->load->view('main',$ad);
        }

        }

       public function valid(){

        if($this->session->has_userdata('logged_in')){	

         redirect('home/admin');
    	 }
         else {

         $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_check_database');
		 $this->form_validation->set_rules('password', 'Password', 'trim|required');
		 
		 if($this->form_validation->run() == FALSE) {
		     
		  $send['view']='login';
          $this->load->view('main',$send);
		 }
		   else
		 {
	      $ses = array(
	       'username'  => $this->input->post('username'),
	       'logged_in' => TRUE    );
	      	$this->session->set_userdata($ses);
	      	redirect('home/admin','refresh');
		   }
		 
		 }
		 
		 }
		
 		public function edit($id){

 		if($this->session->has_userdata('logged_in')){	
         $send['edit']=$this->Data->getrow($id);
         $tid=$this->Data->whatype($id);
         foreach ($tid as $key ) {}
   
   		 $send['list']=$this->Data->getlist();

 		 $send['tid']=$this->Data->getype($key->type_id);
 		 $send['view']='edit';
         $this->load->view('main',$send);
    	 }
         else {
         	$this->session->set_flashdata('mes','You have to log in first');
         	redirect('home/admin');
 		 
     	 }
 		}

 		public function delete($id){

 			$conf=$this->Data->delrow($id);

 			if($conf==TRUE) {	
 			$this->session->set_flashdata('mes','Data successfully deleted');
 			} else{
 			$this->session->set_flashdata('mes','Data deletetation unsuccessful');
 			}

 			redirect('home/admin');
 		}

 		public function logout(){
 			$this->session->unset_userdata('username');
 			$this->session->unset_userdata('logged_in');
 			$this->session->sess_destroy();
 			redirect('home/admin','refresh');
 		}

		 public function check_database($username)
		 {
		   
		   $password = $this->input->post('password');
		 
		   if($password!=''){

		   $result = $this->Data->login($username, $password);
		 
		   if($result)
		   {
		    return TRUE;
		   }
		   else
		   {
		     $this->form_validation->set_message('check_database', 'Invalid username or password');
		     return false;
		   }
		 } else {
		 	$this->form_validation->set_message('check_database', '');
		 	return false;}
		} 

}
