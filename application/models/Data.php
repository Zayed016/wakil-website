<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {


		public function __construct()
        {
             parent::__construct();
        }

	  
        public function getlist(){

        	$list=$this->db->query("select * from types");

        	return $list;
        }

        public function mydata($here){

        	$get=$this->db->query("select id,name from products where type_id='$here'");

        	return $get;
        }

        function login($username, $password)
		 {
		   $this ->db-> select('id, username, password');
		   $this ->db-> from('admin');
		   $this ->db-> where('username', $username);
		   $this ->db-> where('password', $password);
		   $this ->db-> limit(1);
		 
		   $query = $this->db-> get();
		 
		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else return false;
		   
		 }
		

}