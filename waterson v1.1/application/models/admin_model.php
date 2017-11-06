<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include(dirname(__FILE__).'\base_model.php');

class Admin_Model extends Base_Model {

	public function login($data)
	{
		
		$query=$this->db->get_where('admin',array(
			'adminname'=> $data['adminname'],
			'adminpwd'=>$data['adminpwd'],
		),1);
		return $query->row_array();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
