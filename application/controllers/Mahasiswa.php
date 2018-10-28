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
        $data['kodeunik'] = $this->Mahasiswa_Model->buat_kode(); // variable $kodeunik merujuk ke file model_user.php pada function buat_kode. paham kan ya? harus paham dong
		$this->load->view('mahasiswa', $data);
	}
}
