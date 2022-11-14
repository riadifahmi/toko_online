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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/dashboard">Dashboard</a>
                </li> -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>keranjang">Keranjang</a>
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

            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <!-- <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus fa-sm"></i> Tambah Barang</button> -->
            <h3 class="ml-2"><i class="fas fas-edit">Keranjang</i></h3>
            <div class="ml-3 mt-3">
                <a href="<?= base_url(); ?>products"  class="btn btn-danger mt-2">Kembali</a>
            </div>

            <!-- kolom pencarian -->
            <div class="row mb-3 ml-1 mt-3">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari data barang" name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>

            <div class="container-fluid">
                
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Sub-Total</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($this->cart->contents() as $items) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $items['name'] ?></td>
                            <td><?php echo $items['qty'] ?></td>
                            <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                            <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                        </tr>

                    <?php endforeach ?>

                    <tr>
                        <td colspan="4"></td>
                        <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></td>
                    </tr>
                </table>
                <div align="right">
                    <a href="<?php echo base_url('products/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
                    <a href="<?php echo base_url('products') ?>"><div class="btn btn-sm btn-primary">Lanjut Belanja</div></a>
                    <a href="<?php echo base_url('products/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
                </div>
            </div>
            <footer>
                <div class="inner-content">
                <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.              
                - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
        </footer>
            </div>
            </div>
            </div>