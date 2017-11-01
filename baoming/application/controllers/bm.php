<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zhuli extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('common_helper');
		$this->user_table = 'user';
    }
	
	//报名验证
	public function AjaxBaoming(){
		$mobile = $this->input->post('mobile');
		$name = $this->input->post('name');
		
		if(!make_name($name)){
			$data = array(
				'state' => '0',
				'msg' => '姓名只能为数字、字母或汉字'
			);
			echo json_encode($data);
			exit;
		}
		
		if(!make_mobile($mobile)){
			$data = array(
				'state' => '0',
				'msg' => '手机号格式不正确'
			);
			echo json_encode($data);
			exit;
		}
		

		$this->db->set('mobile',$mobile);
		$this->db->set('name',$name);
		if($this->db->update($this->user_table)){
			$data = array(
				'state' => '1',
				'msg' => '操作成功'
			);
		}else{
			$data = array(
				'state' => '0',
				'msg' => '错误代码:1006'.$this->db->last_query()
			);
		}
		echo json_encode($data);
		exit;
	}
?>