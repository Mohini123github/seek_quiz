<?php
class User_model extends CI_model{
	
	public function insertData($data){
		return $this->db->insert('users',$data);
	}

	public function isvaliduser($email,$password,$type)
	{
		$q=$this->db->where(['email'=>$email,'password'=>$password,'type'=>$type])
 					->get('users');
 					if($q->num_rows())
 					{
 						return True;
 					}
 					else{
 						return false;
 					}
	}
}