<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {


		public function __construct()
        {
             parent::__construct();
        }

	  
        public function getlist(){

        	$list=$this->db->query("select * from types");

        	return $list->result();
        }

        public function mydata($here){

        	$get=$this->db->query("select id,name from products where type_id='$here'");

        	return $get->result();
        }

        public function uprow($which){

        //	$sql=$this->db->query("UPDATE `products` SET `name` = 'dsfartrtr', `details` = 'asdfdfdasdsfdsfdsfrtrt' WHERE `products`.`id` = '';")
        }

        public function delrow($ok){

        	$one=$this->db->query("SELECT COUNT(*) FROM products");
        	$dql=$this->db->query("delete from products where id='$ok'");
        	$two=$this->db->query("SELECT COUNT(*) FROM products");
        	if($one->result()>$two->result()){
        	return TRUE;
        }else return FALSE;

        }
        public function whatype($f){
        	$wql=$this->db->query("select type_id from products where id='$f'");
        	return $wql->result();
        }
        public function getype($sure){
        	
        	$tql=$this->db->query("select * from types where id='$sure'");

        	return $tql->result();

        }
        public function getrow($which){

        	$eql=$this->db->query("select * from products where id='$which'");

        	return $eql->result();
        }

        public function login($username, $password)
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