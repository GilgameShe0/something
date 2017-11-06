<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include(dirname(__FILE__).'\admin\base_controller.php');
class Gb extends Base_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gb_model');
	}
	public function index()
	{
		
		if(!empty($_POST))
		{
		  $_POST['textime']=time();
		  $msg=$this->gb_model->insert('gb',$_POST);
		  if(isset($msg))
		  	echo '<script>alert("插入成功")</script>';
		  	
		}
		
		$this->load->view('gb');
	}
	
	
	
	
}
