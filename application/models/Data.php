<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {


    	public function __construct()
        {
             parent::__construct();
        }

       public function getproducts($limit,$start){

        $all=$this->db->query("select * from products limit {$start},{$limit}");

        return $all->result();
       }

       public function detaildata($d){

        $de=$this->db->query("select * from products where id=$d");

        return $de->result();
       }

        public function getlist(){

        	$list=$this->db->query("select * from types");

        	return $list->result();
        }

        public function countrow($c){

            $get=$this->db->query("select * from products where type_id={$c}");

            return $get->num_rows();
        }
        public function newtype($into){

            $in=$this->db->query("insert into types ( `name` ) VALUES ( '$into' )");

            return $in;
        }
        public function mydata($here,$limit,$start){

        	$get=$this->db->query("select * from products where type_id='$here' limit {$start},{$limit}");

        	return $get;
        }

        public function uprow($which){

            $type=$which['type'];
            $name=$which['name'];
            $details=$which['details'];
            $id=$which['id'];
            
           $this->db->query("update products set type_id = '$type', name = '$name', details = '$details' where id='$id'");
        
        }

        public function newrow($which){

            $type=$which['type'];
            $name=$which['name'];
            $details=$which['details'];
            $image=$which['image'];
            
            $one=$this->db->query("select * from products");
            $o=$one->num_rows();
            $this->db->query("insert into products ( `type_id`, `name`, `details`, `image`) VALUES ( '$type', '$name', '$details', '$image')");
            $two=$this->db->query("select * from products");
            $t=$two->num_rows();
            if($t>$o) return TRUE;
            else return FALSE;

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