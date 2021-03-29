<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa1 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index(){
        $data['nama'] = "Kim Jefry";
        $data['prodi'] = "MIF";
        $this->load->view('view_mahasiswa1',$data);
    }
        
    public function profil(){
    echo "ini adalah method profil pada controller Mahasiswa";
    }
}