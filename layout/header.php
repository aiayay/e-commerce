
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hybe | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <script src="assets/js/jquery.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        weverseshop@hybe.co.id
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                <?php
					 if (isset($_SESSION['id_user'])):
				?> 
                    <a href="logout.php" class="login-panel"><i class="fa fa-user"></i>Logout</a>
                <?php else: ?>
                        <a href="admin/login/index.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <?php endif;?>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="assets/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="assets/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="assets/img/hybelogo.jpg" alt="" width="100px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                    <?php
                                    
                                $sql = "SELECT COUNT(*) AS id_produk FROM keranjang ORDER BY id_keranjang DESC";
                                    $result = $koneksi->query($sql);
                                    if ($result->num_rows > 0 ) {
                                        //Mengambil hasil query
                                        $row = $result->fetch_assoc();
                                        $jumlah_data = $row['id_produk'];
                            ?>
                                <a href="?page=shop/keranjang">
                                    <i class="icon_bag_alt"></i>
                                    <span><?= $jumlah_data;?></span>
                                </a>
                                <?php } ?>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                            <?php

                                                $total_harga = 0;
                                                $keranjang = mysqli_query($koneksi,"SELECT * FROM keranjang JOIN produk ON keranjang.id_produk=produk.id_produk ORDER BY id_keranjang DESC");
                                                while($data= mysqli_fetch_array($keranjang)):
                                                    $total_harga += $data['harga'] * $data['kuantitas'];

                                            ?>
                                                <tr>
                                                    <td class="si-pic"><img src="admin/assets/images/produk/<?= $data['foto_produk']?>" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <h6><?php echo $data['nama_produk']?></h6>
                                                            <p><?php echo $data['harga']?></p>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                    <a href="shop/hapus.php?id_keranjang=<?php echo $data['id_keranjang'];?>">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <?php endwhile; ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                               
                                    <div class="select-button">
                                        <!-- <a href="" class="primary-btn view-card">VIEW CARD</a> -->
                                        <a href="?page=pesanan/index" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                        <?php
                            $kategori = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id_kategori DESC");
                            while($item = mysqli_fetch_array($kategori)):
                        ?>
                            <li><a href="#"><?= $item['nama_kategori']?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="?page=home/index">Home</a></li>
                        <li><a href="?page=shop/index">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="?page=shop/keranjang">Shopping Cart</a></li>
                                <li><a href="?page=pesanan/index">Checkout</a></li>
                                <li><a href="./blog-details.html">History Order</a></li>
                                <?php
									 if (isset($_SESSION['id_user'])):
								?> 
                                    <li><a href="logout.php">Logout</a></li>
                                <?php else: ?>
                                    <li><a href="admin/login/index.php">Login</a></li>
								<?php endif;?>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->