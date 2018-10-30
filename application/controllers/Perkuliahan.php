<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkuliahan extends MY_Controller {

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

    public function tambahjadwalkuliah()
    {
        $this->load->view('tambahdosen');
    }
	public function index()
	{
	    $this->load->model('Mahasiswa_Model');

	    $this->data->hasilds = $this->Mahasiswa_Model->getMahasiswa('mahasiswa');
		$this->load->view('perkuliahan', $this->data);
	}

    public function edit_data($id){
        $this->load->model('Mahasiswa_Model');
        $this->data->datamhs = $this->Mahasiswa_Model->GetWhere('mahasiswa', array('Nim' => $id));
//        $datauser = array(
//            'Nim' => $mhs[0]['Nim'],
//            'Nama_Mhs' => $mhs[0]['Nama_Mhs'],
//            'Tgl_Lahir' => $mhs[0]['Tgl_Lahir'],
//            'Alamat' => $mhs[0]['Alamat'],
//            'Jenis_Kelamin' => $mhs[0]['Jenis_Kelamin']
//        );

//        $this->data->datamhs = $datauser;
        //get semua MK

       $this->data->datamk = $this->Mahasiswa_Model->getAllMK();
       $this->data->datadosen = $this->Mahasiswa_Model->getAlldosen();
       $this->data->datajadwal = $this->Mahasiswa_Model->getJadwal($id);

        $this->load->view('Editperkuliahan', $this->data);
    }

    public function tambah()
    {
        $kode = $this->input->post('kode_mhs');
        $pilihmk = $this->input->post('pilmk');
        $pilihhari = $this->input->post('hari');
        $pilihdosen = $this->input->post('dosen');
        $pilihruangan = $this->input->post('ruangan');


        $datajadwal = array(
            'NIM' => $kode,
            'Matkuliah' => $pilihmk,
            'Hari' => $pilihhari,
            'Dosen' => $pilihdosen,
            'Ruangan' => $pilihruangan
        );

        $this->load->model('Mahasiswa_Model');
        $this->Mahasiswa_Model->insert('jadwal', $datajadwal);
        redirect('perkuliahan');

    }

    public function hapusjadwal($id){

        $this->load->model('Mahasiswa_Model');
        $idun = array('Id_perkuliahan'=> $id);
        $this->Mahasiswa_Model->Delete('jadwal', $idun);
        redirect('perkuliahan');


    }

}
