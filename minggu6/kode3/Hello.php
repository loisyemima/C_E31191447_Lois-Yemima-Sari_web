<?php
class Hello extends CI_Controller{
    public function index(){
        //c3 - memuat model 'Hello_model'
        $this->load->model('Hello_model');
    
        //penagmbilan objek dari kelas Hello_model dan dimuat di var $model
        $model = $this->Hello_model;

        //menagambil data dari model
        $a = $model->txt;

        //membuat data yang akan dikirim ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('helloview',$data);//file view
    }
}
?>