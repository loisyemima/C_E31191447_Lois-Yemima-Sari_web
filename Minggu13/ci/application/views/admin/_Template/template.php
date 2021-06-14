<!DOCTYPE html>
<html lang="en">
<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
    <?php echo @$head;?> <!--untuk menampilkan file head-->
    <body id="page-top"> <!-- untuk mengelompokkan elemen-->

    <!--page wrapper-->
    <div id="wrapper"> <!-- untuk mengelompokkan elemen isi keseluruhan-->

    <!--sidebar-->
    <?php echo @$sidebar;?> <!--untuk menampilkan file sidebar-->
    <!--end of sidebar-->
    
    <!--content wrrapper-->
    <!--untuk memberi kemampuan container agar dapat memenipulasi item-item (elemen) yang ada didalamnya-->
    <div id="content-wrapper" class="d-flex flex-column">

    <!--main content-->
    <div id="content"> <!-- untuk mengelompokkan elemen-->

    <!--topbar-->
    <?php echo @$topbar;?> <!--untuk menampilkan file topbar-->
    <!--end of topbar-->

    <!--begin page content-->
    <?php echo @$content;?> <!--untuk menampilkan file content-->
    <!--/.container-fluid-->

</div>
<!--end of main content-->

<!--footer-->
<?php echo @$footer;?> <!--untuk menampilkan file footer-->
<!--end of footer-->

</div>
<!--end of content wrapper-->

</div>
<!--end of page wrapper-->

<!--scroll to top button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i> <!--merupkan ikon yang ingin ditampilkan-->
</a>

<!--logout modal-->
<!--digunakan untuk menyembunyikan pesan logout--> 
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <!--untuk membuat judul pada pesan logout-->
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <!--merupakan button untuk menutup pesan logout-->
            <button class="close" type="button" data-dismiss="modal" aris-label="close">
                <span aria-hidden="true">x</span> <!--untuk memberikan judul pada button-->
</button>
</div>
<!--pemberian keterangan saat melakukan logout-->
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
    <!--merupakan button untuk kembali pada pesan logout-->
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <!--merupakan tombol untuk keluar yang selanjutnya diarahkan pada halaman login-->
    <a class="btn btn-primary" href="<?php echo site_url('login')?>">Logout</a> 
</div>
</div>
</div>
</div>

<!--bootstrap core javascript-->
<!--memanggil file js pada folder assets-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!--core plugin javascript-->
<!--memanggil file js pada folder assets-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!--custom scripts for all pages-->
<!--memanggil file js pada folder assets-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
</body>
</html>