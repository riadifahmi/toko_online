
<header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="#"><h2>Sixteen <em>Clothing</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/dashboard">Dashboard</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>admin/data_barang">Data Barang</a>
                </li> 
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/invoices">Invoices</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>contact">Contact Us</a>
                </li> -->
                </ul>               
            </div>
            </div>    
            <a class="navbar-brand" href="<?= base_url(); ?>auth"><i class="fa fa-user float-right"></i></a>   
            </nav>

<div class="mt-3 container">
    <h3><i class="fa fa-edit">Detail Data Barang</i></h3>
    
    
    <?php foreach($barang as $brg) : ?>
        <form action="<?php echo base_url().'admin/data_barang/update/'; ?>" method="post" enctype="multipart/form-data">
        
            <div class="form-group mt-3">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control"
                value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control"
                value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control"
                value="<?php echo $brg->harga ?>">
            </div>
           
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control"
                value="<?php echo $brg->stok ?>">
            </div>

            <div class="form-group">
                <label>Gambar Produk</label>
                <div class="row">
            <div class="col-md-4">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>"width="300">
            </div>
            </div>  
            </div>

            <a href="<?= base_url(); ?>admin/data_barang"  class="btn btn-danger">Kembali</a>

        </form>
        <?php endforeach; ?>

</div>

</header>