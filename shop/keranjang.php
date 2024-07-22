

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?page=home/index"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=shop/index">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
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
                                <tr>
                                    <td class="cart-pic first-row"><img src="admin/assets/images/produk/<?= $item['foto_produk']?>" width="100px"></td>
                                    <td class="cart-title first-row">
                                        <h5><?= $item['nama_produk']?></h5>
                                    </td>
                                    <td class="p-price first-row"><?= $item['harga']?></td>
                                    <td class="qua-col first-row"><?= $item['kuantitas']?></td>
                                    <td class="total-price first-row"><?= $item['harga'] * $item['kuantitas'] ?></td>
                                    <td class="close-td first-row"><a href="shop/hapus.php?id_keranjang=<?php echo $item['id_keranjang'];?>"><i class="ti-close"></i></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="?page=shop/index" class="primary-btn continue-shop">Continue shopping</a>
                                <!-- <a href="#" class="primary-btn up-cart">Update cart</a> -->
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>Rp.<?= number_format($total_harga,0,',','.') ?></span></li>
                                </ul>
                                <a href="?page=pesanan/index" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
