<?php
header("Content-Type: text/html; charset=UTF-8");
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->helper('url_helper');	
	}

	public function ht(){  //显示数据库信息
		$data['pictures'] = $this->admin_model->get_all_pics();
		$data['atc'] = $this->admin_model->get_all_acts();	
		var_dump($data);
		$this->load->view('index.php',$data);
	}

	public function submitpic(){ //提交轮播图片
		// $time = date('ym',time());
	
		$data = array(
				'pic_name' => $this->input->post('title'),
				'thumb' => $this->input->post('pic'),
			);
		var_dump($data);
	 	exit;
		// if(empty($data)){
		// 	$tips = array(
		// 		'state' => '0',
		// 		'msg' => '数据载入失败'
		// 	);
		// 	echo json_encode($tips);
		// 	exit;
		// }else{
	
		// }
		// die();
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['file_name'] = time() . mt_rand(1000,9999);

		$this->load->library('upload',$config);
		$status = $this->upload->do_upload('file');

		echo($status);
		if(!$status){
			echo'必须上传图片';
		}
		$wrong = $this->upload->display_errors();
		echo($wrong);
		if($wrong){
			echo($wrong);
		}
		die;

		//返回信息
		$info = $this->upload->data();

		var_dump($info);die;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','文章标题','required|min_length[5]');//文章标题长度不小于5
		$status = $this->form_validation->run();

		if($status)
		{
			
			$data = array(
				'pic_name' => $this->input->post('pic_name'),
				'thumb' => $this->input->post('thumb'),
			);
			$this->admin_model->set_pic($data);
			echo "插入成功！";  
			var_dump($data);		
		}else{
			echo form_error('title');
		}


	}
	public function index()  //显示
	{
		$data['atc'] = $this->admin_model->get_all_acts();
		var_dump($data);
	}

	public function deletepic($ID){  //删除轮播图片
		$this->admin_model->deletepic_model();

		redirect(HOST_NAME.'/admin/ht/', 'refresh');
	}


	public function delete($xuhao){  //删除
		$this->admin_model->delete_model();
		$data = $this->admin_model->check();
		if(empty($data)){
			echo "删除成功！";
		}else echo "删除失败！";
		$data['atc'] = $this->admin_model->get_all_acts();
		var_dump($data);

	}

	public function edit()  //编辑
	{
		$xuhao = $this->uri->segment(4);
		$this->load->view('edit.html');
	}

	public function add(){     //显示添加文章视图
		$this->load->helper('form');
		$this->load->view('submit');
	}

	public function submit(){  //插入文章到数据库

		//预览图配置要求
		$time = date('ym',time());
		$config['upload_path'] = './images/'.$time;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '10000';
		$config['file_name'] = time() . mt_rand(1000,9999);

		//载入上传类
		$this->load->library('upload',$config);
		$status = $this->upload->do_upload('thumb');

		echo($status);
		if(!$status){
			echo'必须上传图片';
		}
		$wrong = $this->upload->display_errors();
		if($wrong){
			echo($wrong);
		}

		//返回信息
		$info = $this->upload->data();

		var_dump($info);die;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','文章标题','required|min_length[5]');//文章标题长度不小于5
		$status = $this->form_validation->run();

		if($status)
		{
			
			$data = array(
				'title' => $this->input->post('title'),
				'info' => $this->input->post('info'),
				'type' => $this->input->post('type'),
				'thumb' => $this->input->post('thumb'),
				'content' => $this->input->post('content')
			);
			$this->admin_model->set_atcs($data);
			echo "插入成功！";  
			var_dump($data);		
		}else{
			echo form_error('title');
		}
	} 


}
