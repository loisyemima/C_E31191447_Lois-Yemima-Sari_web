<?php
class Hello3 extends CI_Controller{
    public function index(){
        //c3 - memuat model 'Hello_model'
        $this->load->model('Hello3_model');
    
        //penagmbilan objek dari kelas Hello_model dan dimuat di var $model
        $model = $this->Hello3_model;

        //menagambil data dari model
        $a = $model->txt;

        //membuat data yang akan dikirim ke view
        $data['teks'] = $a;

        //memanggil file view
        $this->load->view('hello3view',$data);//file view
    }
}
?>