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



	public function footer()
	{
		$this->load->view('footer');
	}

}
