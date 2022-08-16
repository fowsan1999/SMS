<?php


class Result_Model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
	}

	public function add($data)
	{
		$this->db->insert('result', $data);
	}

	public function fetch_data()
	{
		$query=$this->db->get('result');
		return $query;
	}

	public function delete_data($id)
	{
		$this->db->where("id",$id);
		$this->db->delete('result');
		return true;
	}

	public function fetch_single_data($id)
	{
		$this->db->where("id",$id);
		$query=$this->db->get('result');
		return $query;
	}

	public function update_data($id, $datas)
	{
		$this->db->where("id",$id);
		$this->db->update("result",$datas);
	}
}