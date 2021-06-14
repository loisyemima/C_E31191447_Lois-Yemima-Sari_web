<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//sebagai perantara antara Model, View dan berbagai resources yang dibutuhkan untuk diproses
class Mahasiswa extends CI_Controller {
    function __construct(){  //fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
        parent::__construct(); //untuk menjalankan construct pada parent nya
        $this->load->model('Mahasiswa_model'); //berfungsi untuk memuat model yang akan kita gunakan
        $this->load->library('session');
    }
    public function index(){ //merupakan pendeklarasian function dalam class 
        $data['user'] = $this->Mahasiswa_model->getAll()->result(); //merupakan pengolahan data yang terdapat pada model
        $this->template->views('crud/home_mahasiswa', $data); //untuk menampilkan view home_mahasiswa 
    }

    public function tambah(){ //merupakan pendeklarasian function dalam class
        $this->template->views('crud/tambah_mahasiswa'); //untuk menampilkan view tambah_mahasiswa
        }
        public function input(){ //merupakan pendeklarasian function dalam class
            $username = $this->input->post('username'); //untuk menambahkan data ke field username
            $password = $this->input->post('pass'); //untuk menambahkan data ke field password
            $nama = $this->input->post('nama'); //untuk menambahkan data ke field nama
            $grup = $this->input->post('grup'); //untuk menambahkan data ke field grup
        
            $data = array( //tipe data terstruktur yang berguna untuk menyimpan sejumlah data yang bertipe sama
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'grup' => $grup
            );
            $this->Mahasiswa_model->input_data($data,'tm_user'); //memproses data melalui file mahasiswa_model di method input_data
            redirect('Mahasiswa/index'); //kembali ke tampilan home_mahasiswa
        }

        public function edit($id){
            $where = array('id' => $id);
            $data['user'] = $this->Mahasiswa_model->edit_data($where,'tm_user')->result();
            $this->template->views('crud/edit_mahasiswa',$data);
        }

        public function update(){
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            $nama = $this->input->post('nama');
            $grup = $this->input->post('grup');

            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'grup' => $grup
            );

            $where = array(
                'id' => $id
            );

            $this->Mahasiswa_model->update_data($where,$data,'tm_user');
            redirect('Mahasiswa');
        }

        public function hapus($id){
            $where = array('id' => $id);
            $this->Mahasiswa_model->hapus_data($where,'tm_user');
            redirect('Mahasiswa/index');
        }

        function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function Api(){
            $data = $this->Mahasiswa_model->getAll();
            echo json_encode($data->result_array());
        }

        public function ApiInsert(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $grup = $this->input->post('grup');

            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'grup' => $grup
            );
            $this->Mahasiswa_model->input_data($data, 'tm_user');
            echo json_encode($array);
        }

        public function ApiDelete(){
            if ($this->input->post('username')) {
                $where = array('username' => $this->input->post('username'));
                if ($this->Mahasiswa_model->hapus_data($where, 'tm_user')){
                    $array = array('success' => true);
                }else {
                    $array = array('error' => true);
                }
                echo json_encode($array);
            }
        }
        public function ApiUpdate()
        {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            $nama = $this->input->post('nama');
            $grup = $this->input->post('grup');

            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'grup' => $grup
            );
            $where = array(
                'id' => $id
            );
            
            $this->Mahasiswa_model->update_data($where, $data, 'tm_user');
            echo json_encode($array);
        }


        function logout(){
            $this->session->unset_userdata(array('username' => ''));
            redirect('login/index');
        }
        }
        ?>