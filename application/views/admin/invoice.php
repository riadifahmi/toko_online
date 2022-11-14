

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
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>admin/data_barang">Data Barang</a>
                </li> 
                <li class="nav-item active">
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
            </div>    
            <a class="navbar-brand" href="<?= base_url(); ?>auth"><i class="fa fa-user float-right"></i></a>   
        </nav>
        </header>

<div class="container-fluid">
<div class="row">
            <div class="col-md-12 mt-5">
    <h4 class="mt-5 mb-3 ml-2">Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pemesanan</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </table>
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

