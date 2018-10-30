<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends MY_Controller {

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
	    $this->load->model('Mahasiswa_Model');

	    $this->data->hasil = $this->Mahasiswa_Model->getMahasiswa('mahasiswa');
		$this->load->view('mahasiswa', $this->data);
	}
    public function tambahmahasiswa()
    {
        $this->load->view('tambahmahasiswa');
    }

    public function edit_data($id){
        $this->load->model('Mahasiswa_Model');
        $mhs = $this->Mahasiswa_Model->GetWhere('mahasiswa', array('Nim' => $id));
        $data = array(
            'Nim' => $mhs[0]['Nim'],
            'Nama_Mhs' => $mhs[0]['Nama_Mhs'],
            'Tgl_Lahir' => $mhs[0]['Tgl_Lahir'],
            'Alamat' => $mhs[0]['Alamat'],
            'Jenis_Kelamin' => $mhs[0]['Jenis_Kelamin']
        );
        $this->load->view('EditMahasiswa', $data);
    }

    public function update_data(){
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
        $where = array(
            'Nim' => $kode
        );
        $this->load->model('Mahasiswa_Model');
        $res = $this->Mahasiswa_Model->update($where, $datauser, 'mahasiswa');
        if ($res > 0) {

        }
        redirect('mahasiswa');
    }


	public function tambah() {

	    $kode = $this->input->post('kode_mhs');
	    $nama = $this->input->post('nama_mhs');
	    $tanggal = $this->input->post('tgl_mhs');
	    $alamat = $this->input->post('alamat_mhs');
	    $jk = $this->input->post('jk');

	    $this->load->model('Mahasiswa_Model');
	    $cek = $this->Mahasiswa_Model->cek_id('Nim', $kode);

	    if ( $cek > 0 ) {
	        redirect('mahasiswa');
        } else {
            $datauser = array(
                'Nim' => $kode,
                'Nama_mhs' => $nama,
                'Tgl_Lahir' => $tanggal,
                'Alamat' => $alamat,
                'Jenis_Kelamin' => $jk
            );

            $this->load->model('Mahasiswa_Model');
            $this->Mahasiswa_Model->insert('mahasiswa', $datauser);
            redirect('mahasiswa');
        }

    }

    public function hapus($id){

        $this->load->model('Mahasiswa_Model');
        $id = array('Nim' => $id);
        $this->Mahasiswa_Model->Delete('mahasiswa', $id);
        redirect('mahasiswa');


    }
}
