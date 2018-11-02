<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {


	public function cari ($berdasarkan,$ygdicari){
		$this->db->from("data_obat");
		$this->db->like($berdasarkan,$ygdicari);
		return $this->db->get();
	}

	public function cari_1 ($berdasarkan_1,$ygdicari_1){
		$this->db->from("data_penyakit");
		$this->db->like($berdasarkan_1,$ygdicari_1);
		return $this->db->get();
	}

	public function cari_2 ($berdasarkan_2,$ygdicari_2){
		$this->db->from("rs");
		$this->db->like($berdasarkan_2,$ygdicari_2);
		return $this->db->get();
	}
}