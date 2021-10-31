<?php
class ModelSepatu extends CI_Model
{
	public $harga;
	public function proses($data)
	{
		if($data = "Nike"){
			$this->harga = 375000;
		}
		elseif($data = "Adidas"){
			$this->harga = 3000000;
		}
		elseif($data = "Kickers"){
			$this->harga = 250000;
		}
		elseif($data = "Eiger"){
			$this->harga = 2750000;
		}
		else{
			$this->harga = 4000000;
		}
	return $this->harga;
	}
}