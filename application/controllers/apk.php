<?php if (! defined('BASEPATH')) exit('No script direct access allowed');
/**
* 
*/
class Apk extends Ci_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_foodspot');
		$this->load->model('m_category');
		$this->load->model('m_user');
	}

	//FoodSpot
	function getFs()
	{
		$data = $this->m_foodspot->getFs();
		if ($data != null) {
			$respon['spots'] = array();
			foreach ($data as $key => $value) {
				$spot 	= array();
				$spot['id_resto']	= $value->id_resto;
				$spot['nm_resto']	= $value->nm_resto;
				$spot['desc_resto']	= $value->desc_resto;
				$spot['lat_resto']	= $value->lat_resto;
				$spot['lng_resto']	= $value->lng_resto;
				$spot['foto_resto']	= base_url().'uploads/'.$value->foto_resto;
				$spot['kategori']	= $value->id_kat;
				$spot['price_range']= $value->price_range;
				$spot['address']	= $value->address;
				$spot['day_open']	= $value->day_open;
				$spot['time_open']	= $value->time_open;
				$spot['notes']		= $value->notes;
				$spot['updated']	= $value->updated;
				array_push($respon['spots'], $spot);
			}
			$dk = $this->m_category->getCat();
				$respon['cats'] = array();
				foreach ($dk as $key => $value) {
					$cat	= array();
					$cat['id_kat']	= $value->id_kat;
					$cat['nama_kat'] = $value->nama_kat;
					$cat['updated'] = $value->updated;
					array_push($respon['cats'], $cat);
				}
			$du = $this->m_user->getUser();
			$respon['users'] = array();
			foreach($du as $key => $value){
				$usr			= array();
				$usr["id_user"]	= $value->id_user;
				$usr["type"]	= $value->type;
				$usr["resto_id"]= $value->resto_id;
				$usr["expired"]	= $value->expired;
				$usr["updated"]	= $value->updated;
				array_push($respon["users"], $usr);
			}
			$respon['success'] = 1;
			echo json_encode($respon, JSON_UNESCAPED_SLASHES);
			//echo htmlspecialchars(json_encode($value->desc_resto, JSON_UNESCAPED_SLASHES));
		}
		else{
			$respon['success'] = 0;
			$respon['msg']	= "No data inserted";
			echo "No Data";
		}
	}
	function getFsById()
	{
		$id = $this->input->get($id);
		$data = $this->m_foodspot->getFsById($id);
		if ($data != null) {
			foreach ($data as $key => $value) {
				$spotbid	= array();
				$spotbid['id_resto']	= $value->id_resto;
				$spotbid['nm_resto']	= $value->nm_resto;
				$spotbid['desc_resto']	= $value->desc_resto;
				$spotbid['lat_resto']	= $value->lat_resto;
				$spotbid['lng_resto']	= $value->lng_resto;
				$spotbid['foto_resto']	= '<img src="'.base_url().'uploads/'.$value->foto_resto.'">';
				$k = $value->id_kat;
				$k1 = $this->m_category->getCatById($k);
				foreach ($k1 as $key => $kat) {
					$spotbid['kategori'] = ucwords($kat->nama_kat);
				}
				$spotbid['updated'] = $value->updated;

			}

			$respon['success'] = 1;
			$respon['spotbids'] = array();
			array_push($respon['spotbids'], $spotbid);
			echo json_encode($respon);
		}
		else{
			$respon['success'] = 0;
			$respon['msg'] = "No data inserted";
			echo json_encode($respon);
		}
	}

	//Category
	function getCat()
	{
		$data = $this->m_category->getCat();
		if ($data != null) {
			$respon['cats'] = array();
			foreach ($data as $key => $value) {
				$cat	= array();
				$cat['id_kat']	= $value->id_kat;
				$cat['nama_kat'] = $value->nama_kat;
				$cat['updated'] = $value->updated;
				array_push($respon['cats'], $cat);
			}
			$respon['success'] = 1;
			echo json_encode($respon);
		}
	}
}