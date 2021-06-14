<div class="row">
    <div class="col-lg-7"> 
    <div class="p-5"> 
    <div class="text-center"> 
    <h1 class="h4 text-gray-900 mb-4">Tambah User</h1></div> <!--untuk memberikan judul tabel-->
        <form class="user" action="<?php echo base_url('Mahasiswa/input');?>" method="post"> 
        <!--apabila tombol ditekan maka akan melakukan proses pengiputan data-->
<div class="form-group"> <!--from untuk username dengann menggunakan id username-->
<input type="text" class="form-control form-control-user" 
id="username" name="username" placeholder="Username Maximal 10 Character" require> 
</div> 
    <div class="form-group"> <!--from untuk password dengann menggunakan pass-->
        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 
    Character" require> 
    </div>
    <div class="form-group"> <!--from untuk nama dengann menggunakan nama-->
        <input type="nama" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" require> 
    </div>  
    <div class="form-group"> <!--from untuk grup dengann menggunakan grup-->
        <select id="grup" class="form-control" name="grup" 
    require> 
        <option value="0">Pilih Grup User</option> 
        <option value="1">Admin</option> 
        <option value="2">User</option> 
        </select> 
    </div> 
    <!--button untuk menambahkan data-->
    <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
</form><hr> 
<div class="text-center"> <!--membuat text berada ditengah--> 
<a class="small" href="index">Kembali</a> <!--untuk memberi judul yang berada dibawah form-->
</div></div></div></div> 