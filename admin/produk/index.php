

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a></li>
                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
 
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="?page=produk/tambah" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama produk</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>                                    
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                $no =1;
                                $user = mysqli_query($koneksi,"SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori ORDER BY id_produk DESC");
                                while($item = mysqli_fetch_array($user)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $item['nama_produk']; ?></td>
                                        <td><?= $item['nama_kategori']?></td>
                                        <td><?= $item['deskripsi']; ?></td>                                        
                                        <td><?= $item['harga']; ?></td>
                                        <td><img src="assets/images/produk/<?= $item['foto_produk']?>" width="100px"></td>
                                        <td>
                                        <a class="btn btn-warning" href="?page=produk/ubah&id_produk=<?php echo $item['id_produk'];?>">Ubah</a>
                                        <a class="btn btn-danger" href="produk/hapus.php?id_produk=<?php echo $item['id_produk'];?>">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
          
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
