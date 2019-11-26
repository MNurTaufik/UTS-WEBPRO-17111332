<?php 

class MyAdmin extends CI_Controller {

	function __construct(){
		parent::__Construct();
		$this->load->database();
		$this->load->model("Admin_Model");
	}

	public function index(){
		$data ['title'] = "Boking tiket Bioskop di AnimeGaban.com";
		// $data ['tampil'] = $this->Modeladmin->tampilkan_data();		
		$this->load->view('header_admin',$data);
		$this->load->view('index_admin',$data);
		$this->load->view('footer_admin');
	}

	public function insert(){

		$data ['title'] = "Boking tiket Bioskop di AnimeGaban.com";
		// $data ['tampil'] = $this->Modeladmin->tampilkan_data();		
		$this->load->view('header_admin',$data);
		$this->load->view('insert',$data);
		$this->load->view('footer_admin');
	}



	/*public function tambahdata(){
		$data ['title'] = "Tambah Data Sewa";	
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('sewa');
		$this->load->view('footer');
	}
	public function tampil_data(){
		$data ['title'] = "Jadwal Futsal";
		$data ['tampil'] = $this->Modeladmin->tampilkan_data();
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
	}
	public function aksi_tambah_data(){
		$nama = $this->input->post('nama');
		$telpon =$this->input->post('telpon');
		$tanggal =$this->input->post('tanggal');
		$mulai =$this->input->post('mulai');
		$selesai =$this->input->post('selesai');
		$lapangan =$this->input->post('lapangan');

		$data = array(
			'nama'=> $nama, 
			'telpon'=> $telpon,
			'tanggal'=> $tanggal,
			'mulai'=> $mulai,
			'selesai'=> $selesai,
			'lapangan'=> $lapangan
		);	
		
		$this->Modeladmin->tambah_data($data,'data_sewa');	
		redirect('Myadmin/tambahdata');
	}

	function edit($id){
		$where = array('id' => $id);
		$data ['title'] = "Edit Data";
		$data['data_sewa'] = $this->Modeladmin->edit_data($where,'data_sewa')->result();	
		$this->load->view('header',$data);
		$this->load->view('sidebar');		
		$this->load->view('update_sewa',$data);
		$this->load->view('footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telpon = $this->input->post('telpon');
		$tanggal = $this->input->post('tanggal');
		$mulai = $this->input->post('mulai');
		$selesai = $this->input->post('selesai');
		$lapangan = $this->input->post('lapangan');

		$data = array( 
			'nama'=> $nama, 
			'telpon'=> $telpon,
			'tanggal'=> $tanggal,
			'mulai'=> $mulai,
			'selesai'=> $selesai,
			'lapangan'=> $lapangan
		);

		$where = array(
			'id' => $id
		);

		$this->Modeladmin->update_data($where,$data,'data_sewa');
		redirect('Myadmin/index');
	}


	function hapus($id){
		$where = array('id' => $id);
		$this->Modeladmin->hapus_data($where,'data_sewa');
		redirect('Myadmin/index');
	}*/
}
?>