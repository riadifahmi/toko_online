

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
                    <a class="nav-link" href="<?= base_url(); ?>admin/dashboard">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>admin/data_barang">Data Barang</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/invoice">Invoice</a>
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
            <div class="row">
            <div class="col-md-12">
            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus fa-sm"></i> Tambah Barang</button>

            <!-- kolom pencarian -->
            <div class="row mt-3">
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

            <div class="container">
            <div class="row mt-3">
            <div class="col-md-12">
            <table class="table table-bordered" width="1000">
            <?php if( empty($barang)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data barang tidak di temukan.
                </div>
            <?php endif; ?>
                <tr>
                    <th>No</th>
                    <th>Gambar Produk</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th colspan="3"><center>Aksi</center></th>
                </tr>

                <?php
                $no=1;
                foreach($barang as $brg) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><img src="<?php echo base_url() . '/uploads/' . $brg['gambar'] ?>" alt="" width="100"></td>
                    <td><?= $brg['nama_brg']; ?></td>
                    <td><?= $brg['keterangan']; ?></td>
                    <td><?= $brg['harga']; ?></td>
                    <td><?= $brg['stok']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>admin/data_barang/detail/<?= $brg['id_brg']; ?>" class="badge badge-warning"><u>Detail</u></a>
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>admin/data_barang/edit/<?= $brg['id_brg']; ?>" class="badge badge-success"><u>Edit</u></a>
                    </td>
                    <td>
                    <a href="<?= base_url(); ?>admin/data_barang/hapus/<?= $brg['id_brg']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');"><u>Hapus</u></a>
                    </td>
                    
                </tr>

                <?php endforeach; ?>

            </table>
            <!-- <?php echo $this->pagination->create_links(); ?> -->
            <footer>
                <div class="inner-content">
                <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.              
                - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                </div>
        </footer>
            </div>
            </div>
            </div>
        
            <!-- Modal -->
            <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi/'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label">Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

                </form>
            </div>
            </div>
            </div>
            </header>



