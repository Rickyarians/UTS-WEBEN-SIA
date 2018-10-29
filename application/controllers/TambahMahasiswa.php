<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahMahasiswa extends MY_Controller {

    function __construct()
    {
        parent::__construct();

    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('tambahmahasiswa', $this->data);
	}


	public function tambah() {

	    $kode = $this->input->post('kode_mhs');
	    $nama = $this->input->post('nama_mhs');
	    $tanggal = $this->input->post('tgl_mhs');
	    $alamat = $this->input->post('alamat_mhs');
	    $jk = $this->input->post('jk');

	    $datauser = array(
	        'Nim' => $kode,
            'Nama_mhs' => $nama,
            'Tgl_Lahir' => $tanggal,
            'Alamat' => $alamat,
            'Jenis_Kelamin' => $jk
        );

	    $this->load->model('Mahasiswa_Model');
	    $this->Mahasiswa_Model->insert('mahasiswa', $datauser);
        redirect('/');
    }
}
