<?php
//defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	
	   public function index()
        {			
        	$this->load->model('Data');
			
			$lists['list']=$this->Data->getlist();

			$lists['view']='first';
			$this->load->view('main',$lists);
        }

        public function getdata($pro){

        	$this->load->model('Data');
        	$get['pro']=$this->Data->mydata($pro);
        	$get['view']='second';
        	$this->load->view('main',$get);
        }

}