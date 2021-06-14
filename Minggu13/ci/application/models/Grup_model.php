<?php
//mewakili semua hal yang berhubungan dengan database. Seperti insert, select, update, delete
class Grup_model extends CI_Model{
        function getGrup(){ //merupakan pendeklarasian function dalam class
                $this->db->select('*'); //untuk menyeleksi satu atau bebrapa field saja pada suatu query
                $this->db->from('tm_grup');
                $query = $this->db->get(); //untuk menyeleksi seluruh data pada suatu tabel di database
                return $query; //untuk mengembalikan nilai 
        }

        public function input_data($data,$table){ //merupakan pendeklarasian function dalam class dengan parameter
            $this->db->insert($table,$data);// untuk menambahkan data pada database
        }

        function edit_data($where,$table){
                return $this->db->get_where($table,$where);
        }

        function update_data($where,$data,$table){
                $this->db->where($where);
                $this->db->update($table,$data);
        }

        function hapus_data($where, $table) {
                $this->db->where($where);
                $this->db->delete($table);
        }

}
?>