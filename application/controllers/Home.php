<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

		public function __construct()
        {
             parent::__construct();
        }
	
	   public function index()
        {			
            $this->load->library('pagination');

            $config['base_url'] = site_url().'/home/index/';
            $config['total_rows'] = $this->db->count_all('products');
            $config['per_page'] = 5;
            $config['uri_segment']=3;

            
            $this->pagination->initialize($config);

           $page=($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           
           $lists['all']=$this->Data->getproducts($config['per_page'],$page);
              $lists['view']='home';
              $this->load->view('main',$lists); 
            
			 
        }
       
        public function detail($d){
            $send['detail']=$this->Data->detaildata($d);
            $send['view']='details';
            $this->load->view('main',$send);
        }
        public function catagories($pro){

        	 $this->load->library('pagination');
            
             $config['base_url'] = site_url().'/home/catagories/'.$pro;
             $config['total_rows'] = $this->Data->countrow($pro);
             $config['per_page'] = 3; 
             $config['uri_segment']=4; 
            $this->pagination->initialize($config);

             $page=($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
                   
           $send['pro']=$this->Data->mydata($pro,$config['per_page'],$page);
        	$send['view']='second';
        	$this->load->view('main',$send);
        }
        
       public function tonew(){
       	 if($this->session->has_userdata('logged_in')){	
       	 $send['list']=$this->Data->getlist();
         $send['view']='add';
         $this->load->view('main',$send);
    	 }
        else {
         	$this->session->set_flashdata('mes','You have to log in first');
         	redirect('home/admin');
 		 
     	 }
     }
    
        public function addnew(){
       if($this->session->has_userdata('logged_in')){	
         	$config['upload_path']          = './assets/image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                echo "<pre>";
                $n=$this->input->post();
                if ( ! $this->upload->do_upload('userfile'))
                {
                  print_r( $this->upload->display_errors());
                }
                else
                {
                 $data = $this->upload->data();
                 print_r($data);
                 $n['image']=$data['file_name'];
                }
                
                 print_r($n);
	 		 $bol=$this->Data->newrow($n);
	 		 if($bol==TRUE) {
	 		$this->session->set_flashdata('mes','Data added successfully');
	 		   redirect('home/tonew','refresh');
	 		}else {
	 			$this->session->set_flashdata('mes','no');
	 			redirect('home/tonew','refresh');
	 		}
          
      }
       else {
        	$this->session->set_flashdata('mes','You have to log in first');
       	redirect('home/admin');
 		 
      }
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
         $send['id']=$id;
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
 		public function updating(){
 			if($this->session->has_userdata('logged_in')){	
	 			$n=$this->input->post();
	 			$this->Data->uprow($n);
		 		return TRUE;
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
