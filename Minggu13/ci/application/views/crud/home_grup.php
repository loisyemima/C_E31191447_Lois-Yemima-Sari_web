<?php 
    $getGrup = $this->session->userdata('session_grup');
    ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <!--untuk memberi judul pada tabel-->
    <h6 class="m-0 font-weight-bold text-primary">DataTables Grup</h6></div>
    <div class="card-body"><div class="table-responsive"> <!--wadah untuk menampung element yang digunakan-->
        <!--untuk membuat tabel yang akan ditampilkan pada content-->
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead> <!--untuk membuat judul pada kolom-->
        <tr><th>No</th>
            <th>Grup</th>
            <th></th></tr>
        </thead>
        <tbody>
        <?php $no = 1; //untuk menampilkan angka awal
            foreach($grup as $baris){ //untuk melakukan perulangan
        ?>
        <tr><td><?php echo $no++; ?></td> <!--untuk memberikan angka secara urut-->
            <td><?php echo $baris->grup; ?></td> <!--untuk mengisikan grup yang telah diinputkan-->
            <td>
            <?php
            if($getGrup == 1){
                echo '<a href="'.base_url('Grup/edit/'.$baris->id_grup).'" class="fa fa-edit">';
                echo " ";
                echo '<a href="'.base_url('Grup/hapus/'.$baris->id_grup).'" class="fa fa-times">';
            } ?>
            </td></tr>
        <?php } ?> <!--sebagai penutup-->
        </tbody>
        </table>
        </div>
        <!-- untuk berpindah ke tampilan tambah_mahasiswa-->
        <a href="<?php echo base_url('Grup/tambah')?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span></a> <!--untuk memberi judul pada menu-->
            
</div></div>