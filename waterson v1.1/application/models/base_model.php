<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Model extends CI_Model
{
	public function insert($table,$data)
	{

		if(!empty($table) && !empty($data))
			return $this->db->insert($table, $data);
		else
			exit('插入不成功'); 
	}
	
	public function delete($table,$id)
	{
		if(!empty($table) && !empty($id))
		    return $this->db->delete($table, array('id' => $id));
		else
			exit('删除不成功');
	}
	
	public function getList($table,$limit,$offset)
	{
		
		
	    if(!empty($table) && !empty($limit))
			$this->db->order_by('id','desc');
			$query=$this->db->get($table,$limit,$offset);
			
			return $query->result_array();
		
	}
	
	public function getOne($table,$id)
	{
		
	 if(!empty($table) && !empty($id))
		$query=$this->db->get_where($table, $id, 1);
	   
	    return $query->result_array();
	 
	 
	}
	
    public function update($table,$data)
	{
		if(!empty($table) && !empty($data))
			return $this->db->update($table, $data, "id = $data[id]");
		else 
			exit('更新不成功');	
	}
	
	
	public function pages($table,$limit,$url)
	{
		//分页
		$this->load->library('pagination');
		$config['base_url'] = site_url($url);
		$config['total_rows'] = $this->db->count_all($table);;
		$config['per_page'] = $limit;
		$config['uri_segment'] = 5;
		$config['anchor_class'] = "class='number'";
		$config['cur_tag_open'] = '<a class="number current">';
		$config['cur_tag_close'] = '</a>';
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	
	}
	
	
	
}
