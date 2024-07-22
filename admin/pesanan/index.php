

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
                        <!-- <a href="?page=produk/tambah" class="btn btn-primary">Tambah Data</a> -->
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Pesanan</th>
                                        <th>Id User</th>
                                        <th>Tanggal</th>                                    
                                        <th>Bukti Bayar</th>
                                        <th>No Tujuan</th>
                                        <th>Alamat Tujuan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                $no =1;
                                $pesanan = mysqli_query($koneksi,"SELECT * FROM pesanan ORDER BY id_pesanan DESC");
                                while($item = mysqli_fetch_array($pesanan)){
                                    ?>
                                    <tr>
                                        <td><?=  $no++; ?></td>
                                        <td><?= $item['id_pesanan']; ?></td>
                                        <td><?= $item['id_user']?></td>
                                        <td><?= $item['tgl_pesanan']; ?></td>                                        
                                        <td><img src="../admin/assets/images/bukti_bayar/<?= $item['bukti_bayar']?>" width="100px"></td>
                                        <td><?= $item['no_tujuan']; ?></td>
                                        <td><?= $item['alamat_tujuan']; ?></td>
                                        <td><?= $item['status_pesanan']; ?></td>
                                        <td>
                                        <a class="btn btn-warning" href="?page=pesanan/ubah&id_pesanan=<?php echo $item['id_pesanan'];?>">Ubah</a>
                                        <a class="btn btn-danger" href="pesanan/hapus.php?id_pesanan=<?php echo $item['id_pesanan'];?>">Hapus</a>
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
