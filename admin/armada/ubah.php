<?php
include "../layout/header.php";
include "../layout/navbar.php";

include '../koneksi.php';
$getid = $_GET['id_armada'];

$search = mysqli_query($koneksi,"SELECT * FROM armada WHERE id_armada ='$getid'");
$item = mysqli_fetch_array($search);

?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Component</h5>
                    </div>
                    <div class="card-body">
                        <h5>Form controls</h5>
                        <hr>
                        <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_armada" value="<?=$item['id_armada']?>">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Nama Armada</label>
                                        <input type="text" class="form-control" name="nama_armada"
                                            placeholder="Masukan Nama Armada" value="<?php echo $item ['nama_armada'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Harga</label>
                                        <input type="text" class="form-control" name="harga"
                                            placeholder=" Masukan Harga" value="<?php echo $item ['harga'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi"
                                            placeholder="Masukan Deskripsi"
                                            value="<?php echo $item ['deskripsi'];?>">
                                    </div>
                                    <button type="submit" class="btn  btn-primary" name="submit">Submit</button>


                                </div>
                                <div class="col-md-6">
                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">No hp</label>
                                        <input type="number" class="form-control" name="no_hp"
                                            placeholder="Masukan Nomor Hp" value="<?php echo $item ['no_hp'];?>">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gambar</label><br>
                                        <img src="../assets/images/armada/<?=$item ['gambar_armada']?>" width="100px">
                                        <input type="hidden" name="gambar_lama" value="<?= $item['gambar_armada']?>">
                                        <input type="file" name="gambar_armada" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>






                        <!-- [ form-element ] end -->
                    </div>
                    <!-- [ Main Content ] end -->

                </div>
            </div>
</section>
<!-- [ Main Content ] end -->
<!-- Warning Section start -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>


<?php
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $no_hp=$_POST['no_hp'];
    $foto=$_POST['foto'];

    $update="UPDATE user SET id_user='$id_user',password='$password',
    nama_lengkap='$nama_lengkap',no_hp='$no_hp',foto='$foto'";

    $hasil = mysqli_query($koneksi, $update) or die;
    
    if($hasil){
        echo '<script language="javascript">';
        echo 'alert("data berhasil diubah")';
        echo '</script>';
    }
}

include "../layout/footer.php"
?>