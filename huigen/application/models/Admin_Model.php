<?php
header("Content-Type: text/html; charset=UTF-8");
defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin_Model extends CI_Model{
		
		function __construct(){  
        parent::__construct();  
    	}

    	public function get_all_pics(){ //查询图片
    		$query = $this->db->query('SELECT * FROM pictures');
    		return $query->result_array();
    	}
    	
		public function get_all_acts(){  //查询所有文章数据		
			$query = $this->db->query('SELECT * FROM atc');
			return $query->result_array();
		}
    	//删除轮播图片
    	public function deletepic_model(){
    		$ID = $this->uri->segment(3);
    		$this->db->delete('pictures',array('ID'=>$ID));
    	}

    	public function set_atcs($data){    //插入文章到数据库中 
    		$this->db->insert('atc',$data);   		 
		}



		public function check(){   //按序号查询单条数据
			$xuhao = $this->uri->segment(3);
			$data = $this->db->where(array('xuhao'=>$xuhao))->get('atc')->result_array();
			return $data;
		}

		public function delete_model(){  //删除文章数据
			$xuhao = $this->uri->segment(3);
			$this->db->delete('atc',array('xuhao'=>$xuhao));
		}

		public function edit(){   //修改文章
			$xuhao = $this->uri->segment(3);

		}

	}
?>