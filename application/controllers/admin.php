<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->view('crud/admin');
	}

	public function edit_obat( $offset = 0 ){
		$data['content'] = $this->db->get("data_obat");
		$this->load->view('crud/data_obat',$data);
		$this->footer();
	}

		public function add_obat(){
			$this->load->view('crud/add_obat');
			$this->footer();
		}

		public function aksi_add_obat(){
		 $data = array(
		 	'nama_obat' => $this->input->post('nama_obat'),
		 	'manfaat_obat' => $this->input->post('manfaat_obat'),
		 	'dosis_dewasa' => $this->input->post('dosis_dewasa'),
		 	'dosis_anak' => $this->input->post('dosis_anak'),
		 	'efek_samping' => $this->input->post('efek_samping'),
		 	'harga_obat' => $this->input->post('harga_obat')
		 	);
		 $this->db->insert("data_obat", $data);
		
		redirect(base_url("edit_obat"));
		}

		public function upd_obat( $id_obat = NULL){
			$this->db->where('id_obat',$id_obat);
			$data['content'] = $this->db->get("data_obat");
			$this->load->view('crud/upd_obat',$data);
			$this->footer();
			}


		public function aksi_upd_obat( $id_obat = ''){
		 $data = array(
		 	'nama_obat' => $this->input->post('nama_obat'),
		 	'manfaat_obat' => $this->input->post('manfaat_obat'),
		 	'dosis_dewasa' => $this->input->post('dosis_dewasa'),
		 	'dosis_anak' => $this->input->post('dosis_anak'),
		 	'efek_samping' => $this->input->post('efek_samping'),
		 	'harga_obat' => $this->input->post('harga_obat')
		 	);

		 	$this->db->where('id_obat',$id_obat);
		 	$this->db->update("data_obat", $data);
		
		redirect(base_url("edit_obat"));
		}

		public function del_obat( $id_obat = NULL){
			$this->db->where('id_obat',$id_obat);
			$this->db->delete('data_obat');
		
		redirect(base_url("edit_obat"));
		}




	public function edit_penyakit( $offset = 0 ){
		$data['content'] = $this->db->get("data_penyakit");
		$this->load->view('crud/data_penyakit',$data);
		$this->footer();
	}

		public function add_penyakit(){
			$this->load->view('crud/add_penyakit');
			$this->footer();
		}

		public function aksi_add_penyakit(){
		 $data = array(
		 	'nama_penyakit' => $this->input->post('nama_penyakit'),
		 	'penyebab' => $this->input->post('penyebab'),
		 	'nama_obat' => $this->input->post('nama_obat')
		 	);
		 $this->db->insert("data_penyakit", $data);
		
		redirect(base_url("edit_penyakit"));
		}

		public function upd_penyakit( $id_penyakit = NULL){
			$this->db->where('id_penyakit',$id_penyakit);
			$data['content'] = $this->db->get("data_penyakit");
			$this->load->view('crud/upd_penyakit',$data);
			$this->footer();
			}


		public function aksi_upd_penyakit( $id_penyakit = ''){
		 $data = array(
		 	'nama_penyakit' => $this->input->post('nama_penyakit'),
		 	'penyebab' => $this->input->post('penyebab'),
		 	'nama_obat' => $this->input->post('nama_obat')
		 	);

		 	$this->db->where('id_penyakit',$id_penyakit);
		 	$this->db->update("data_penyakit", $data);
		
		redirect(base_url("edit_penyakit"));
		}

		public function del_penyakit( $id_penyakit = NULL){
			$this->db->where('id_penyakit',$id_penyakit);
			$this->db->delete('data_penyakit');
		
		redirect(base_url("edit_penyakit"));
		}


		public function edit_lokasi( $offset = 0 ){
		$data['content'] = $this->db->get("rs");
		$this->load->view('crud/data_rs',$data);
		$this->footer();
	}

		public function add_lokasi(){
			$this->load->view('crud/add_lokasi');
			$this->footer();
		}

		public function aksi_add_lokasi(){
		 $data = array(
		 	'Nama_Rs' => $this->input->post('Nama_Rs'),
		 	'Alamat_Rs' => $this->input->post('Alamat_Rs'),
		 	'Telephon_Rs' => $this->input->post('Telephon_RS'),
		 	'Tempat_Terdekat_Rs' => $this->input->post('Tempat_Terdekat_Rs')
		 	);
		 $this->db->insert("rs", $data);
		
		redirect(base_url("edit_lokasi"));
		}

		public function upd_lokasi( $Nama_Rs = NULL){
			$this->db->where('Nama_Rs',$Nama_Rs);
			$data['content'] = $this->db->get("rs");
			$this->load->view('crud/upd_lokasi',$data);
			$this->footer();
			}


		public function aksi_upd_lokasi( $Nama_Rs = ''){
		 $data = array(
		 	'Nama_Rs' => $this->input->post('Nama_Rs'),
		 	'Alamat_Rs' => $this->input->post('Alamat_Rs'),
		 	'Telephon_Rs' => $this->input->post('Telephon_Rs'),
		 	'Tempat_Terdekat_Rs' => $this->input->post('Tempat_Terdekat_Rs')
		 	);

		 	$this->db->where('Nama_Rs',$Nama_Rs);
		 	$this->db->update("rs", $data);
		
		redirect(base_url("edit_lokasi"));
		}

		public function del_lokasi( $Nama_Rs = NULL){
			$this->db->where('Nama_Rs',$Nama_Rs);
			$this->db->delete('rs');
		
		redirect(base_url("edit_lokasi"));
		}



	public function footer()
	{
		$this->load->view('footer');
	}

}