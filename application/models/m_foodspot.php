<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
* 
*/
class m_foodspot extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	//Add FoodSpot
	function addFs($data)
	{
		$k1 = "";
		$k2 = $this->input->post('category');
		foreach ($k2 as $key => $value) {
			if($k1 == ""){
				$k1 .= $value;
			}else{
				$k1 .= ",".$value;
			}
		}
		$open_day = "";
		$day = $this->input->post('day_open');
		foreach ($day as $key => $value) {
			if($open_day == ""){
				$open_day .= $value;
			}else{
				$open_day .= ",".$value;
			}
		}
		$open_time = "";
		$time = $this->input->post('time_open');
		foreach ($time as $key => $value) {
			if($value!=""){
				if($open_time == ""){
					$open_time .= $value;
				}else{
					$open_time .= "|".$value;
				}
			}
		}
		$price = $this->input->post('price_min').",".$this->input->post('price_max');
		$id = date('YmdHis');
		$data = array(
			'id_resto'		=> $id,
			'nm_resto'		=> $this->input->post('fs_name'),
			'desc_resto'	=> $this->input->post('fs_desc'),
			'lat_resto'		=> $this->input->post('fs_lat'),
			'lng_resto'		=> $this->input->post('fs_lng'),
			'foto_resto'	=> $data['upload_data']['file_name'],
			'address'		=> $this->input->post('address'),
			'notes'			=> $this->input->post('notes'),
			'price_range'	=> $price,
			'id_kat'		=> $k1,
			'day_open'		=> $open_day,
			'time_open'		=> $open_time,
			'updated'		=> '0');
		$this->db->insert('t_data_resto', $data);
		echo $k1;
	}
	
	function addFsGold($data,$user_id)
	{
		$k1 = "";
		$k2 = $this->input->post('category');
		foreach ($k2 as $key => $value) {
			if($k1 == ""){
				$k1 .= $value;
			}else{
				$k1 .= ",".$value;
			}
		}
		$open_day = "";
		$day = $this->input->post('day_open');
		foreach ($day as $key => $value) {
			if($open_day == ""){
				$open_day .= $value;
			}else{
				$open_day .= ",".$value;
			}
		}
		$open_time = "";
		$time = $this->input->post('time_open');
		foreach ($time as $key => $value) {
			if($value!=""){
				if($open_time == ""){
					$open_time .= $value;
				}else{
					$open_time .= "|".$value;
				}
			}
		}
		$price = $this->input->post('price_min').",".$this->input->post('price_max');
		$id = date('YmdHis');
		$isi = "";
		foreach($data as $key => $value){
			if($isi == ""){
				$isi = $value;
			}else{
				$isi .= ",".$value;
			}
		}
		echo $isi;
		$data = array(
			'id_resto'		=> $id,
			'nm_resto'		=> $this->input->post('fs_name'),
			'desc_resto'	=> $this->input->post('fs_desc'),
			'lat_resto'		=> $this->input->post('fs_lat'),
			'lng_resto'		=> $this->input->post('fs_lng'),
			'foto_resto'	=> $isi,
			'address'		=> $this->input->post('address'),
			'notes'			=> $this->input->post('notes'),
			'price_range'	=> $price,
			'id_kat'		=> $k1,
			'day_open'		=> $open_day,
			'time_open'		=> $open_time,
			'updated'		=> '0');
		$this->db->insert('t_data_resto', $data);
		$update = $this->db->where('id_user',$user_id)->get('t_user')->row()->updated;
		$this->db->where('id_user',$user_id)->update('t_user', array('resto_id' => $id, 'updated' => $update + 1));
		//echo $data_foto;
	}
	
	function updateFsWithoutPhoto($data)
	{
		$id = $data['id'];
		$up = $this->getFsById($id);
		foreach ($up as $key => $value) {
			$updated = $value->updated;
		}
		$k1 = "";
		$k2 = $this->input->post('category');
		foreach ($k2 as $key => $value) {
			if($k1 == ""){
				$k1 .= $value;
			}else{
				$k1 .= ",".$value;
			}
		}
		$open_day = "";
		$day = $this->input->post('day_open');
		foreach ($day as $key => $value) {
			if($open_day == ""){
				$open_day .= $value;
			}else{
				$open_day .= ",".$value;
			}
		}
		$open_time = "";
		$time = $this->input->post('time_open');
		foreach ($time as $key => $value) {
			if($value!=""){
				if($open_time == ""){
					$open_time .= $value;
				}else{
					$open_time .= "|".$value;
				}
			}
		}
		$price = $this->input->post('price_min').",".$this->input->post('price_max');
		$data = array(
			'nm_resto'		=> $this->input->post('fs_name'),
			'desc_resto'	=> $this->input->post('fs_desc'),
			'lat_resto'		=> $this->input->post('fs_lat'),
			'lng_resto'		=> $this->input->post('fs_lng'),
			'address'		=> $this->input->post('address'),
			'notes'			=> $this->input->post('notes'),
			'price_range'	=> $price,
			'id_kat'		=> $k1,
			'day_open'		=> $open_day,
			'time_open'		=> $open_time,
			'updated'		=> $updated+1);
		return $this->db->where('id_resto', $id)->update('t_data_resto', $data);
	}

	//Delete FoodSpot
	function delFs($id)
	{
		$this->db->where('id_resto', $id)->delete('t_data_resto');
	}
	//Get FoodSpot
	function getFs()
	{
		return $this->db->get('t_data_resto')->result();
	}
	
	function getUserByFs($id){
		return $this->db->where('resto_id',$id)->get('t_user')->result();
	}
	

	//Get FoodSpot By Id
	function getFsById($id)
	{
		return $this->db->where('id_resto', $id)->get('t_data_resto')->result();
	}

	//Update FoodSpot
	function updateFs($data)
	{
		$id = $data['id'];
		$up = $this->getFsById($id);
		foreach ($up as $key => $value) {
			$updated = $value->updated;
		}
		$k1 = "";
		$k2 = $this->input->post('category');
		foreach ($k2 as $key => $value) {
			if($k1 == ""){
				$k1 .= $value;
			}else{
				$k1 .= ",".$value;
			}
		}
		$open_day = "";
		$day = $this->input->post('day_open');
		foreach ($day as $key => $value) {
			if($open_day == ""){
				$open_day .= $value;
			}else{
				$open_day .= ",".$value;
			}
		}
		$open_time = "";
		$time = $this->input->post('time_open');
		foreach ($time as $key => $value) {
			if($value!=""){
				if($open_time == ""){
					$open_time .= $value;
				}else{
					$open_time .= "|".$value;
				}
			}
		}
		$price = $this->input->post('price_min').",".$this->input->post('price_max');
		$data = array(
			'nm_resto'		=> $this->input->post('fs_name'),
			'desc_resto'	=> $this->input->post('fs_desc'),
			'lat_resto'		=> $this->input->post('fs_lat'),
			'lng_resto'		=> $this->input->post('fs_lng'),
			'address'		=> $this->input->post('address'),
			'notes'			=> $this->input->post('notes'),
			'price_range'	=> $price,
			'id_kat'		=> $k1,
			'day_open'		=> $open_day,
			'time_open'		=> $open_time,
			'foto_resto'	=> $data['upload_data']['file_name'],
			'updated'		=> $updated+1);
		return $this->db->where('id_resto', $id)->update('t_data_resto', $data);
	}
	
	function updateFsGold($data,$id)
	{
		//$id = $data['id'];
		$up = $this->getFsById($id);
		foreach ($up as $key => $value) {
			$updated = $value->updated;
		}
		$k1 = "";
		$k2 = $this->input->post('category');
		foreach ($k2 as $key => $value) {
			if($k1 == ""){
				$k1 .= $value;
			}else{
				$k1 .= ",".$value;
			}
		}
		$open_day = "";
		$day = $this->input->post('day_open');
		foreach ($day as $key => $value) {
			if($open_day == ""){
				$open_day .= $value;
			}else{
				$open_day .= ",".$value;
			}
		}
		$open_time = "";
		$time = $this->input->post('time_open');
		foreach ($time as $key => $value) {
			if($value!=""){
				if($open_time == ""){
					$open_time .= $value;
				}else{
					$open_time .= "|".$value;
				}
			}
		}
		$price = $this->input->post('price_min').",".$this->input->post('price_max');
		$cur_foto = $this->db->where('id_resto',$id)->get('t_data_resto')->row()->foto_resto;
		$cfoto_arr = explode(",",$cur_foto);
		$isi = "";
		for($i=0;$i<5;$i++){
			if($i<count($data)){
				if($i<count($cfoto_arr)){
					if($data[$i] == null){
						if($isi == ""){
							$isi = $cfoto_arr[$i];
						}else{
							$isi .= ",".$cfoto_arr[$i];
						}
					}else{
						if($isi == ""){
							$isi = $data[$i];
							unlink("./uploads/".$cfoto_arr[$i]);
						}else{
							$isi .= ",".$data[$i];
							unlink("./uploads/".$cfoto_arr[$i]);
						}
					}
				}else{
					if($isi == ""){
						$isi = $data[$i];
					}else{
						$isi .= ",".$data[$i];
					}
				}
			}else{
				if($i<count($cfoto_arr)){
					if($isi == ""){
						$isi = $cfoto_arr[$i];
					}else{
						$isi .= ",".$cfoto_arr[$i];
					}
				}
			}
			
		}
		if($data == null){
			$isi = $cur_foto;
		}
		echo $isi;
		$data = array(
			'id_resto'		=> $id,
			'nm_resto'		=> $this->input->post('fs_name'),
			'desc_resto'	=> $this->input->post('fs_desc'),
			'lat_resto'		=> $this->input->post('fs_lat'),
			'lng_resto'		=> $this->input->post('fs_lng'),
			'foto_resto'	=> $isi,
			'address'		=> $this->input->post('address'),
			'notes'			=> $this->input->post('notes'),
			'price_range'	=> $price,
			'id_kat'		=> $k1,
			'day_open'		=> $open_day,
			'time_open'		=> $open_time,
			'updated'		=> $updated+1);
		echo json_encode($data);
		return $this->db->where('id_resto', $id)->update('t_data_resto', $data);
	}

	
}