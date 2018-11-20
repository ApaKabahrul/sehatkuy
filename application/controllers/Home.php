<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('search_model');
	}

	/*public function agadmigin(){
		$this->load->view('crud/login');
		$this->footer();
	}*/


	public function index()
	{
		$this->load->view('isi');
		$this->footer();
	}

	public function sehat()
	{
		$this->load->view('sehat');
		$this->footer();
	}

		public function manfaat_olahraga()
		{
			$this->load->view('posting1');
			$this->footer();
		}

		public function kebiasaan_hidup_sehat()
		{
			$this->load->view('posting3');
			$this->footer();
		}

		public function tips_pola_sehat()
		{
			$this->load->view('posting2');
			$this->footer();
		}

		public function memelihara_ginjal()
		{
			$this->load->view('posting4');
			$this->footer();
		}		

		public function cegah_penyakit_jantung()
		{
			$this->load->view('posting4');
			$this->footer();
		}

	public function data_obat( $offset = 0)
	{

		$data['content'] = $this->db->get("data_obat");
		$this->load->view('data_obat', $data);
		$this->footer();
	}


		public function cari(){
		
			$data['cariberdasarkan']=$this->input->post('cariberdasarkan');
			$data['ygdicari']=$this->input->post('ygdicari');
			$data['data_obat']=$this->search_model->cari($data['cariberdasarkan'],$data['ygdicari']);
			$this->load->view("data_obat",$data);
			$this->footer();
		}

		public function cari_1(){
		
			$data['cariberdasarkan_1']=$this->input->post('cariberdasarkan_1');
			$data['ygdicari_1']=$this->input->post('ygdicari_1');
			$data['data_penyakit']=$this->search_model->cari_1($data['cariberdasarkan_1'],$data['ygdicari_1']);
			$this->load->view("penyakit",$data);
			$this->footer();
		}

		public function cari_2(){
		
			$data['cariberdasarkan_2']=$this->input->post('cariberdasarkan_2');
			$data['ygdicari_2']=$this->input->post('ygdicari_2');
			$data['rs']=$this->search_model->cari_2($data['cariberdasarkan_2'],$data['ygdicari_2']);
			$this->load->view("RS",$data);
			$this->footer();
		}


	public function penyakit( $offset = 0)
	{
		$data['content'] = $this->db->get('data_penyakit');
		$this->load->view('penyakit', $data);
		$this->footer();
	}

	public function lokasi( $offset = 0)
	{
		$data['content'] = $this->db->get('rs');
		$this->load->view('RS', $data);
		$this->footer();
	}

	public function tentang()
	{
		$this->load->view('tentang');
		$this->footer();
	}



	public function footer()
	{
		$this->load->view('footer');
	}
}
?>