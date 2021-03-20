<?php
class Variabel extends CI_Controller{
    public function index(){
        $data =['variabel1'=>'Data variabel ke 1', 'Variabel2'=>'Data variabel ke 2'];

        $this->load->view('variabelview', $data);
    }
}

?>