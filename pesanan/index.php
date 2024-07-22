

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?page=home/index"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=shop/index">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="pesanan/tambah_pesanan.php" method="post" class="checkout-form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Nomor Handphone</label>
                                <input type="tel" id="" name="no_tujuan">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Alamat</label>
                                <input type="text" id="" name="alamat_tujuan">
                            </div>
                            <div class="col-lg-12">
                            <input type="hidden" id="alamatsaya" name="alamatsaya">
                                <label for="">Provinsi</label>
                                <select name="nama_provinsi" class="form-control" id=""></select>
                            </div>
                            <div class="col-lg-12">
                            <input type="hidden" id="alamatku" name="alamatku">
                                <label for="">Kota / Kabupaten</label>
                                <select name="nama_kota" class="form-control" id=""></select>
                            </div>
                            <div class="col-lg-12">
                            <input type="hidden" id="alamatkudetail" name="alamatkudetail">  
                                <label for="">Ekspedisi</label>
                                <select name="nama_ekspedisi" class="form-control" id=""></select>
                            </div>
                            <div class="col-lg-12">
                                <label for="">Paket</label>
                                <select name="nama_paket" class="form-control" id="">
                                    <option value="">Pilih Paket</option>
                                </select>
                            </div>
                            <input type="hidden" name="total_berat" value="1200">
                            <div class="col-lg-12">
                                <label for="">Upload Bukti Bayar</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>


                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    <?php
                                    if(!isset($_SESSION['id_user'])){
                                        echo "<script>
                                        alert('SILAHKAN LOGIN DULU');
                                        window.location.href='admin/login/index.php';
                                        </script>";
                                        }

						$total_harga = 0;
						$keranjang = mysqli_query($koneksi,"SELECT * FROM keranjang JOIN produk ON keranjang.id_produk=produk.id_produk ORDER BY id_keranjang DESC");
						while($item= mysqli_fetch_array($keranjang)):
						$total_harga += $item['harga'] * $item['kuantitas'];
						?>
                                    <li class="fw-normal"><?= $item['nama_produk']?><span>Rp.<?= $item['harga'] * $item['kuantitas'] ?></span></li>
                                    <?php endwhile; ?>
                                    <li class="total-price">Total <span>Rp.<?= number_format($total_harga,0,',','.') ?></span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    
	 <script>
        $(document).ready(function() {
            $.ajax({
                type: 'post',
                url: 'pesanan/data_provinsi.php',
                success: function(hasil_provinsi) {
                    $("select[name=nama_provinsi").html(hasil_provinsi);
                }
            });

            $("select[name=nama_provinsi]").on("change", function() {
                //ambil id_provinsi yang dipilih (dari atribut pribadi)
                var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi")
                $.ajax({
                    type: 'post',
                    url: 'pesanan/data_kota.php',
                    data: 'id_provinsi=' + id_provinsi_terpilih,
                    success: function(hasil_kota) {
                        $("select[name=nama_kota]").html(hasil_kota)
                    }
                })
            });

            $.ajax({
                type: 'post',
                url: 'pesanan/data_ekspedisi.php',
                success: function(hasil_ekspedisi) {
                    $("select[name=nama_ekspedisi").html(hasil_ekspedisi);
                }
            });

            $("select[name=nama_ekspedisi").on("change", function() {
                //mendapatkan data ongkos kirim

                //mendapatkan ekspedisi yang dipilih
                var ekspedisi_terpilih = $("select[name=nama_ekspedisi]").val();

                //mendapatkan id_kota yang dipilih pengguna
                var kota_terpilih = $("option:selected", "select[name=nama_kota]").attr("id_kota")

                //mendapatkan total berat dari inputan
                var total_berat = $("input[name=total_berat]").val();

                $.ajax({
                    type: 'post',
                    url: 'pesanan/data_paket.php',
                    data: 'ekspedisi=' + ekspedisi_terpilih + '&kota=' + kota_terpilih + '&berat=' + total_berat,
                    success: function(hasil_paket) {
                        $("select[name=nama_paket]").html(hasil_paket);

                        //letakkan nama ekspedisi terpilih di input ekspedisi
                        $("input[name=ekspedisi").val(ekspedisi_terpilih);
                    }
                })
            });

            $("select[name=nama_kota]").on("change", function() {
                var prov = $("option:selected", this).attr("nama_provinsi");
                var kot = $("option:selected", this).attr("nama_kota");
                var tipe = $("option:selected", this).attr("tipe_kota");
                var kode_pos = $("option:selected", this).attr("kode_pos");
				var alamatku = tipe + ' ' + kot + ' ' + 'Provinsi' + ' ' + prov + ' Kode Pos ' + kode_pos;

                $("input[name=alamatku]").val(alamatku);
                // $("input[name=kota]").val(kot);
                // $("input[name=tipe]").val(tipe);
                // $("input[name=kode_pos]").val(kode_pos);
            });

            $("select[name=nama_paket]").on("change", function() {
                var paket = $("option:selected", this).attr("paket");
                var ongkir = $("option:selected", this).attr("ongkir");
                var etd = $("option:selected", this).attr("etd");

				var alamatull = paket + '; ' + ongkir + '; ' + etd
                $("input[name=alamatkudetail]").val(alamatull);
				// console.log(alamatull);
                // $("input[name=paket]").val(paket);

                // $("input[name=ongkir]").val(ongkir);
                // $("input[name=estimasi]").val(etd);
            });
            $("select[name=nama_paket]").on("change", function() {
                var alamat1 = document.getElementById("alamatku").value;
				var alamat2 = document.getElementById("alamatkudetail").value;
				var alamatfull = document.getElementById("alamatsaya");
				var ekspedisi = $("select[name=nama_ekspedisi]").val();
				
				var fullAddress = alamat1 + ' ' + ekspedisi + ' ' + alamat2 + ' ' + 'Hari';
				console.log(alamatfull);
				alamatfull.value = fullAddress;
              

            });
        });
    </script>
