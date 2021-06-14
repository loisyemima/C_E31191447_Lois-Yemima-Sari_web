<?php
 class Template { //merupakan nama kelas yang digunakan
 protected $_ci; //property hanya dapat diakses kelas itu sendiri
function __construct() { //fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
$this->_ci = &get_instance(); //sebuah fungsi yang didefinisikan di file inti dari CodeIgniter 
}
function views($template = NULL, $data = NULL) { 
if ($template != NULL) {
// Bagian $data['head'] untuk memanggil file head.php dari folder 
// ['head'] data yang kita panggil dari file template.php dari folder 
$data['head'] = $this->_ci->load->view('admin/_Template/head', $data, TRUE);
 
// Bagian $data['topbar'] untuk memanggil file topbar.php dari folder 
// ['topbar'] data yang kita panggil dari file template.php dari folder 
$data['topbar'] = $this->_ci->load->view('admin/_Template/topbar', $data, TRUE);
// Bagian $data['sidebar'] untuk memanggil file sidebar.php dari folder 
// ['sidebar'] data yang kita panggil dari file template.php dari folder 
$data['sidebar'] = $this->_ci->load->view('admin/_Template/sidebar', $data, TRUE);
// ['isi'] data yang kita panggil dari file content.php dari folder
$data['isi'] = $this->_ci->load->view($template, $data, TRUE);
 
// Bagian $data['content'] untuk memanggil file content.php dari folder 
// ['content'] data yang kita panggil dari file template.php dari folder 
$data['content'] = $this->_ci->load->view('admin/_Template/content', $data, TRUE);
// Bagian $data['footer'] untuk memanggil file footer.php dari folder 
// ['footer'] data yang kita panggil dari file template.php dari folder 
$data['footer'] = $this->_ci->load->view('admin/_Template/footer', $data, TRUE);
 
// Bagian $data['template'] untuk menampilkan file template.php dari folder 
// view('Admin/_Template/Template', $data, TRUE); untuk memanggil $data diatas 
echo $data['template'] = $this->_ci->load->view('admin/_Template/template', $data, TRUE); }}}