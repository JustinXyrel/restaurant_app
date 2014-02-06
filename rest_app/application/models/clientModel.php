<?php
class clientModel extends CI_Model {
	
	function __construct(){
		$this->load->database();
	}	
	
    function registration($data){
		// print_r($data);
		$data = array(
			'user_type_id' => '3',
			'fname' => $data['first_name'],
			'lname' => $data['last_name'],
			'mname' => $data['middle_name'],
			'birth_date' => strtotime($data['dob']),
			'gender' => $data['gender'],
			'unit_no' => $data['unit_no'],
			'building_name' => $data['building_no'],
			'street' => $data['street'],
			'town_city' => $data['city/town'],
			'country' => $data['country'],
			'state_province' => $data['state/province'],
			'email_add' => $data['email'],
			'username' => $data['username'],
			'password' => md5($data['password']),
			'ins_date' => strtotime(date('d/m/Y H:i:s'))
		);
		// print_r($data);
		// die();
		try {
			return $this->db->insert('tbl_user', $data); 
		}
		catch (Exception $e) {
            echo $e->getMessage();
            // return;
        }
	}
}