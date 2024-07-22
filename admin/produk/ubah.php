<?php



$getid = $_GET['id_produk'];

$search = mysqli_query($koneksi,"SELECT * FROM produk where id_produk ='$getid'");
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
                        <form action="produk/proses_ubah.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_produk" value="<?=$item['id_produk']?>">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">

                                    <label for=" exampleInputEmail1">ID Kategori</label>
                                <select name="id_kategori" id="" class="form-control" required>
                                    <option value="">Pilih Kategori</option>

                                    <?php
                                            include '../koneksi.php';
                                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                            while ($k = mysqli_fetch_array($kategori)){
                                        ?>
                                    <option value="<?= $k['id_kategori']?>"
                                        <?= $k['id_kategori']== $item['id_kategori'] ? 'selected' :''?>>
                                        <?= $k['nama_kategori']?>
                                    </option>
                                    <?php } ?>
                                </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Produk</label>
                                        <input type="text" class="form-control" name="nama_produk"
                                            placeholder=" Masukan Nama Produk" value="<?php echo $item ['nama_produk'];?>">
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
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input type="number" class="form-control" name="harga"
                                            placeholder="Masukan Harga" value="<?php echo $item ['harga'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Foto</label><br>
                                        <img src="assets/images/produk/<?=$item ['foto_produk']?>" width="100px">
                                        <input type="hidden" name="foto_lama" value="<?= $item['foto_produk']?>">
                                        <input type="file" name="foto_produk" class="form-control">
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


