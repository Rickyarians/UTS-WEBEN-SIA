<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $data;
    function __construct()
    {
        parent::__construct();

        $this->data = new stdClass();
        $this->load->database();
        $this->load->model('Mahasiswa_Model', 'mhs');
    }
}
