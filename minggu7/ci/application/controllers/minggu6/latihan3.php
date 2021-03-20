<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihan3 extends CI_Controller {
	public function index() {
        //c3 - memuat model 'Hello_model'
		$this->load->model('latihan3_model');

        //pengambilan objekdari kelas Hello_model dan dimuat di var $model
        $model = $this->latihan3_model;

        //mengambil data dari model
        $a = $model->txt;

        //membuat data yang akan dikirimkan ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('latihan3view', $data); //file view
	}
}