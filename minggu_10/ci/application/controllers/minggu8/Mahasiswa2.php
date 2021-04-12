<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa2 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index(){
        $data['Mahasiswa'] = [
        ["nama"=>"Kim Jefry","prodi"=>"MIF"],
        ["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
        ["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
        ];
        $this->load->view('view_mahasiswa2',$data);
    }
        
    public function profil(){
    echo "ini adalah method profil pada controller Mahasiswa";
    }
}