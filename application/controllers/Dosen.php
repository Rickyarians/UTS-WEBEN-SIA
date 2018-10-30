<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends MY_Controller {

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

    public function tambahdosen()
    {
        $this->load->view('tambahdosen');
    }
	public function index()
	{
	    $this->load->model('Dosen_Model');

	    $this->data->hasilds = $this->Dosen_Model->getDosen('dosen');
		$this->load->view('dosen', $this->data);
	}

    public function edit_data($id){
        $this->load->model('Dosen_Model');
        $mhs = $this->Dosen_Model->GetWhere('dosen', array('Nip' => $id));
        $data = array(
            'Nip' => $mhs[0]['Nip'],
            'Nama_Dosen' => $mhs[0]['Nama_Dosen']
        );
        $this->load->view('EditMahasiswa', $data);
    }

    public function update_data(){
        $kode = $this->input->post('kode_nip');
        $nama = $this->input->post('nama_dosen');


        $datauser = array(
            'Nip' => $kode,
            'Nama_Dosen' => $nama
        );
        $where = array(
            'Nip' => $kode
        );
        $this->load->model('Dosen_Modal');
        $res = $this->Dosen_Model->update($where, $datauser, 'dosen');
        if ($res > 0) {

        }
        redirect('dosen');
    }


	public function tambah() {

        $kode = $this->input->post('kode_nip');
        $nama = $this->input->post('nama_dosen');


	    $this->load->model('Dosen_Model');
	    $cek = $this->Dosen_Model->cek_id('Nip', $kode);

	    if ( $cek > 0 ) {
	        redirect('dosen');
        } else {
            $datauser = array(
                'Nip' => $kode,
                'Nama_Dosen' => $nama
            );

            $this->load->model('Dosen_Model');
            $this->Dosen_Model->insert('dosen', $datauser);
            redirect('dosen');
        }

    }

    public function hapus($id){

        $this->load->model('Dosen_Model');
        $id = array('Nip' => $id);
        $this->Dosen_Model->Delete('dosen', $id);
        redirect('dosen');


    }


}
