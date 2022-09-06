
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
                    <a class="nav-link" href="<?= base_url(); ?>admin/dashboard">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>admin/data_barang">Data Barang</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/invoices">Invoices</a>
                </li>
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

<div class="container">
    <h3><i class="fas fa-edit">Edit Data Barang</i></h3>

    
        <form action="<?php echo base_url().'admin/data_barang/update/'; ?>" method="post">
        <input type="hidden" name="id_brg" value="<?= $barang['id_brg']; ?>">
        
            <div class="form-group mt-3">
                <label>Nama Barang</label>
                
                <input type="text" name="nama_brg" class="form-control"
                value="<?= $barang['nama_brg']; ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                
                <input type="text" name="keterangan" class="form-control"
                value="<?= $barang['keterangan']; ?>">
            </div>

            <div class="form-group">
                <label>Harga</label>
                
                <input type="text" name="harga" class="form-control"
                value="<?= $barang['harga']; ?>">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control"
                value="<?= $barang['stok']; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
            <a href="<?= base_url(); ?>admin/data_barang"  class="btn btn-danger btn-sm mt-3">Kembali</a>

        </form>
        
</div>

</header>