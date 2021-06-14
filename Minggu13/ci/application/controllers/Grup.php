<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {
    function __construct(){  //fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
        parent::__construct(); 
        $this->load->model('Grup_model'); //berfungsi untuk memuat model 

    }
    public function index(){ //merupakan pendeklarasian function dalam class 
        $data['grup'] = $this->Grup_model->getGrup()->result(); //merupakan pengolahan data yang terdapat pada model
        $this->template->views('crud/home_grup', $data); 
    }

    public function tambah(){ 
        $this->template->views('crud/tambah_grup'); //untuk menampilkan view tambah_grup
        }
        public function input(){ 
            $grup = $this->input->post('grup'); //untuk menambahkan data ke field grup
        
            $data = array( //tipe data yang berguna untuk menyimpan sejumlah data 
                'grup' => $grup
            );
            $this->Grup_model->input_data($data,'tm_grup'); //memproses data melalui file mahasiswa_model di method input_data
            redirect('Grup'); //kembali ke tampilan home_mahasiswa
        }

        public function edit($id)
        {
            $where = array('id_grup' => $id);
            $data['grup'] = $this->Grup_model->edit_data($where,'tm_grup')->result();
            $this->template->views('crud/edit_grup', $data);
        }

        public function update(){
            $id = $this->input->post('id');
            $grup = $this->input->post('grup');

            $data = array(
                'grup' => $grup
            );

            $where = array(
                'id_grup' => $id
            );

            $this->Grup_model->update_data($where, $data, 'tm_grup');
            redirect('Grup');
        }

        public function hapus($id)
        {
            $where = array('id_grup' => $id);
            $this->Grup_model->hapus_data($where, 'tm_grup');
            redirect('Grup');
        }

        }
        ?>