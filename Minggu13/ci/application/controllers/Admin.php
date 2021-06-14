<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//sebagai perantara antara Model, View dan berbagai resources yang dibutuhkan untuk diproses
class Admin extends CI_Controller {
    public function __construct() //fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	{
		parent::__construct(); //untuk menjalankan construct pada parent nya
		$this->load->library('template'); //untuk membuat template yang terdapat pada libraries
	}

    public function index(){ //merupakan pendeklarasian function dalam class
        $this->template->views('admin/_Template/template'); //digunakan untuk menampilkan template pada view
    }
}
?>