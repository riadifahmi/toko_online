
        <!-- Header -->
        <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="#"><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>home">Home</a>
                </li> 
                <li class="nav-item  active">
                    <a class="nav-link" href="<?= base_url(); ?>products">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>purchase">Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>contact">Contact Us</a>
                </li>
                </ul>               
            </div>
            </div>    
            <a class="navbar-brand" href="<?= base_url(); ?>auth"><i class="fa fa-user float-right"></i></a>   
        </nav>
        </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
              <div class="row grid mb-5">
        <div class="col-lg-6">
        <form action="" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari data barang" name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                        <?php if( empty($barang)) : ?>
                <div class="alert alert-danger mt-2" role="alert">
                    Data barang tidak di temukan.
                </div>
            <?php endif; ?>    
                    </form>                  
        </div>
        
    </div>
    <div class="container"></div>
        <div class="row mt-3">
          <div class="col-md-12">
            <div class="filters mt-5">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          <?php foreach ($barang as $brg) : ?>
                <div class="col-lg-4 col-md-4 all dev">
                    <div class="product-item">
                    <a href="#"><img src="<?php echo base_url().'/uploads/'.$brg['gambar'] ?>" alt=""></a>
                    <div class="down-content">
                        <h4><?= $brg['nama_brg']; ?></h4>    
                        <h6>Rp. <?= $brg['harga']; ?></h6>
                        <p><?= $brg['keterangan']; ?></p>
                        <a href="#" class="btn btn-danger">Tambah ke Keranjang</a>
                        <a href="<?= base_url(); ?>shop/detail_products/<?= $brg['id_brg']; ?>" class="btn btn-danger">Detail</a>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
                  
          <div class="col-md-12">
            <ul class="pages">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
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
