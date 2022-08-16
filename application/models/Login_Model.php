<?php


class Login_Model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
	}

	public function login_user($where)
	{
		$query=$this->db->where($where)
		->get('user'); 
		if ($query->num_rows() > 0) 
			return $query->row('id');
		else
			return false;
	}

	public function admin_data($id,$datas)
	{
		$this->db->where("id",$id);
		$this->db->update("user",$datas);
	}
}