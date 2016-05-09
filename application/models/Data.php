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

        	$get=$this->db->query("select * from products where id='$here'");

        	return $get;
        }

}