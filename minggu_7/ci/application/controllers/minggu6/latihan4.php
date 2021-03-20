
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihan4 extends CI_Controller {
	public function index() {
        $data = ['nama'=>'Lois Yemima Sari', 'nim'=>'E31191447', 'golongan'=>'C'];

        //c3 - memuat model 'Hello_model'
		$this->load->model('latihan4_model');

        //pengambilan objekdari kelas Hello_model dan dimuat di var $model
        $model = $this->latihan4_model;

        //mengambil data dari model
        $a = $model->txt;

        //membuat data yang akan dikirimkan ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('latihan4_view', $data); //file view
	}
}