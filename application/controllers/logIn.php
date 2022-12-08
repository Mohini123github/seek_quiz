<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		$type=$this->input->post('type');
		$this->load->model(array('User_model'));
		if($this->User_model->isvaliduser($email,$password,$type))
		{
			if($type=='student'){
				return redirect('welcome/studentDashboard');
			}
			else if($type=='teacher'){
				return redirect('welcome/teacherDashboard');
			}
			else if($type=='admin'){
				return redirect('welcome/adminDashboard');
			}
			else if($type=='superadmin'){
				return redirect('welcome/super_adminDashboard');
			}


		}
		else{
			echo"details mismatched";
		}
	}
	}


?>  