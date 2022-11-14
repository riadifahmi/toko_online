<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2>Sixteen <em>Clothing</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>products">Our Products</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>purchase">Purchase</a>
                </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>contact">Contact Us</a>
                    </li>
                    <li class="nav-link float-right text-primary mt-1">
                        <?php $keranjang = 'Cart: ' . $this->cart->total_items() . ' items' ?>
                        <?php echo $keranjang ?>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="nav navbar-nav navbar-right">

        </ul>
        <a class="navbar-brand" href="<?= base_url(); ?>auth"><i class="fa fa-user float-right"></i></a>

    </nav>

</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="<?= base_url(); ?>products">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>



            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/img/images/product_01.jpg" alt=""></a>
                    <div class="down-content">
                        <h4>Sepatu</h4>
                        <h6>Rp.300.000</h6>
                        <p>Sepatu merk All Star</p>
                        <a href="<?= base_url(); ?>home/tambah_ke_keranjang/<?= $brg['id_brg']; ?>" class="btn btn-danger">Tambah Ke Keranjang</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/img/images/product_02.jpg" alt=""></a>
                    <div class="down-content">
                        <h4>Jaket Wanita</h4>
                        <h6>Rp.140.000</h6>
                        <p>Jaket untuk cuaca dingin</p>
                        <a href="<?= base_url(); ?>home/tambah_ke_keranjang/<?= $brg['id_brg']; ?>" class="btn btn-danger">Tambah Ke Keranjang</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/img/images/product_03.jpg" alt=""></a>
                    <div class="down-content">
                        <h4>Syal</h4>
                        <h6>Rp.35.000</h6>
                        <p> Syal Rajut untuk penghangat leher</p>
                        <a href="<?= base_url(); ?>home/tambah_ke_keranjang/<?= $brg['id_brg']; ?>" class="btn btn-danger">Tambah Ke Keranjang</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/img/images/gambar_04.jpg" alt=""></a>
                    <div class="down-content">
                        <h4>Pakaian Bermotif</h4>
                        <h6>Rp.40.000</h6>
                        <p> Pakaian outdoor untuk pria/wanita</p>
                        <a href="<?= base_url(); ?>home/tambah_ke_keranjang/<?= $brg['id_brg']; ?>" class="btn btn-danger">Tambah Ke Keranjang</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/img/images/gambar_05.jpg" alt=""></a>
                    <div class="down-content">
                        <h4>Sweater</h4>
                        <h6>Rp.36.000</h6>
                        <p>Sweater ovesize bahan fleece tebal</p>
                        <a href="<?= base_url(); ?>home/tambah_ke_keranjang/<?= $brg['id_brg']; ?>" class="btn btn-danger">Tambah Ke Keranjang</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img src="assets/img/images/gambar_06.jpg" alt=""></a>
                    <div class="down-content">
                        <h4>Topi Bucket</h4>
                        <h6>Rp.30.000</h6>
                        <p>Topi polos bucket hat distro</p>
                        <a href="<?= base_url(); ?>home/tambah_ke_keranjang/<?= $brg['id_brg']; ?>" class="btn btn-danger">Tambah Ke Keranjang</a>
                        <a href="<?= base_url(); ?>home/detail/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Sixteen Clothing</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Looking for the best products?</h4>
                        <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
                        <ul class="featured-list">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetur an adipisicing elit</a></li>
                            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                            <li><a href="#">Corporis, omnis doloremque</a></li>
                            <li><a href="#">Non cum id reprehenderit</a></li>
                        </ul>
                        <a href="<?= base_url(); ?>about" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="<?php echo base_url('assets/img/images/feature-image.jpg') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="filled-button">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>