<?php

class Organization extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function addOrganization(){
		
			$data = [

				'org_name' => $this->input->post('org_name'),			
				'owner_name' => $this->input->post('owner_name'),			
				'owner_phone' => $this->input->post('owner_phone'),			
				'org_add' => $this->input->post('org_add'),			
				'org_logo' => $this->input->post('org_logo'),			
				'spokeperson_name' => $this->input->post('spokeperson_name'),			
				'spokeperson_phone' => $this->input->post('spokeperson_phone')			

			];
			var_dump($data);
		}
	
}

?>