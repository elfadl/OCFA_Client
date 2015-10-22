<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class M_Category extends Ci_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	//saveCategory
	function addCat()
	{
		$id = date('YmdHis');
		$data = array(
			'id_kat'	=> $id,
			'nama_kat'	=> $this->input->post('cat_name'),
			'updated'	=> 0);
		$this->db->insert('t_kategori', $data);
	}

	//Delete FoodSpot
	function delCat($id)
	{
		$this->db->where('id_kat', $id)->delete('t_kategori');
	}

	//Get FodSpot
	function getCat()
	{
		return $this->db->get('t_kategori')->result();
	}

	//Get FoodSpot By Id
	function getCatById($id)
	{
		return $this->db->where('id_kat', $id)->get('t_kategori')->result();
	}

	//Update FoodSpot
	function updateCat($id)
	{
		$up = $this->getCatById($id);
		foreach ($up as $key => $value) {
			$updated = $value->updated;
		}
		$data = array(
			'nama_kat'	=> $this->input->post('cat_name'),
			'updated'	=> $updated+1);
		return $this->db->where('id_kat', $id)->update('t_kategori', $data);
	}

}