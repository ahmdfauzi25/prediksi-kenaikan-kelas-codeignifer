<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->library('form_validation');  // Load the Form Validation library
		$this->load->helper('form');
	}
	public function index()
		{
			$data['title'] = 'Import Excel';
			$data['siswa'] = $this->db->get('siswa')->result();
			$this->load->view('import/index', $data);
		}

	public function tambah_siswa()
		{
			$data['title'] = "Tambah Data Siswa";
			$this->load->view('siswa/tambah_siswa', $data);
		}

	public function tambah_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == false ) {
			$this->tambah_siswa();
		} else {
			$data = array(
				'tugas' => $this->input->post('tugas'),
				'uts' => $this->input->post('uts'),
				'uas' => $this->input->post('uas'),
				'ketidakhadiran' => $this->input->post('ketidakhadiran'),
				'ekskul' => $this->input->post('ekskul'),
				'class' => $this->input->post('class'),
			);
			$this->siswa_model->insert_data($data, 'siswa');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Anda Berhasil Menambahkan.
          </div>');
            redirect('import');
		}
	}

	public function edit($id) 
	{
		$this->_rules();
		if ($this->form_validation->run() == false ) {
			$this->index();
		} else {
			$data = array(
				'id' => $this->input->post('id'),
				'tugas' => $this->input->post('tugas'),
				'uts' => $this->input->post('uts'),
				'uas' => $this->input->post('uas'),
				'ketidakhadiran' => $this->input->post('ketidakhadiran'),
				'ekskul' => $this->input->post('ekskul'),
				'class' => $this->input->post('class'),
			);
			$this->siswa_model->update_data($data, 'siswa');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Anda Berhasil Memperbarui Data.
          </div>');
            redirect('import');
		}
	}
	public function _rules() 
	{
		$this->form_validation->set_rules('tugas', 'Tugas', 'required', array('required' => '%s Harusd diisi !!'));
		$this->form_validation->set_rules('uts', 'Uts', 'required', array('required' => '%s Harusd diisi !!'));
		$this->form_validation->set_rules('uas', 'Uas', 'required', array('required' => '%s Harusd diisi !!'));
		$this->form_validation->set_rules('ketidakhadiran', 'Ketidakhadiran', 'required', array('required' => '%s Harusd diisi !!'));
		$this->form_validation->set_rules('ekskul', 'Ekskul', 'required', array('required' => '%s Harusd diisi !!'));
		$this->form_validation->set_rules('class', 'Class', 'required', array('required' => '%s Harusd diisi !!'));
	}


	public function delete($id)
	{
		$where = array('id' => $id);
		$this->siswa_model->delete($where, 'siswa');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Anda Berhasil Menghapus Data.
          </div>');
            redirect('import');
	}
}
