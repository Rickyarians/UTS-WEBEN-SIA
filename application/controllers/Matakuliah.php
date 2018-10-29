<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends MY_Controller {

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
	    $this->load->model('Matakuliah_Model');

	    $this->data->hasilmk = $this->Matakuliah_Model->getMatakuliah('matakuliah');
		$this->load->view('matakuliah', $this->data);
	}

    public function tambahmatakuliah()
    {
        $this->load->view('tambahmatakuliah');
    }

    public function edit_data($id){
        $this->load->model('Matakuliah_Model');
        $mk = $this->Matakuliah_Model->GetWhere('matakuliah', array('Kode_MK' => $id));
        $data = array(
            'Kode_MK' => $mk[0]['Kode_MK'],
            'Nama_MK' => $mk[0]['Nama_MK'],
            'Sks' => $mk[0]['Sks']
        );
        $this->load->view('EditMatakuliah', $data);
    }

    public function update_data(){

        $kodemk = $this->input->post('kode_mk');
        $namamk = $this->input->post('nama_mk');
        $sksmk = $this->input->post('sks');

        $datamk = array(
            'Kode_MK' => $kodemk,
            'Nama_MK' => $namamk,
            'Sks' => $sksmk
        );

        $where = array(
            'Kode_MK' => $kodemk
        );
        $this->load->model('Matakuliah_Model');
        $res = $this->Matakuliah_Model->update($where, $datamk, 'matakuliah');
        if ($res > 0) {

        }
        redirect('matakuliah');
    }


	public function tambah() {

	    $kodemk = $this->input->post('kode_mk');
	    $namamk = $this->input->post('nama_mk');
	    $sksmk = $this->input->post('sks');

        $this->load->model('Matakuliah_Model');
        $cek = $this->Matakuliah_Model->cek_id('Kode_MK', $kodemk);

        if ($cek > 0 ){

            redirect('matakuliah');
        } else {
            $datamk = array(
                'Kode_MK' => $kodemk,
                'Nama_MK' => $namamk,
                'Sks' => $sksmk
            );

            $this->load->model('Matakuliah_Model');
            $this->Matakuliah_Model->insert('matakuliah', $datamk);
            redirect('matakuliah');
        }

    }

    public function hapus($id){

        $this->load->model('Matakuliah_Model');
        $id = array('Kode_MK' => $id);
        $this->Matakuliah_Model->Delete('matakuliah', $id);
        redirect('matakuliah');


    }
}
