<div class="row">
    <div class="col-lg-7"> 
    <div class="p-5"> 
    <div class="text-center"> 
    <h1 class="h4 text-gray-900 mb-4">Tambah Grup</h1></div> <!--untuk memberikan judul tabel-->
        <form class="user" action="<?php echo base_url('Grup/input');?>" method="post"> 
        <!--apabila tombol ditekan maka akan melakukan proses pengiputan data-->
<div class="form-group"> <!--from untuk username dengann menggunakan id username-->
<input type="text" class="form-control form-control-user" 
id="grup" name="grup" require> 
</div> 
    <!--button untuk menambahkan data-->
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
</form><hr> 
<div class="text-center"> <!--membuat text berada ditengah--> 
<a class="small" href="<?php echo base_url('Grup')?>">Kembali</a> <!--untuk memberi judul yang berada dibawah form-->
</div></div></div></div> 