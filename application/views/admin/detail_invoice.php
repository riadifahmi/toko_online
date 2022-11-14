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
    <br><br><br><br><br>
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div></h4>

    <table class="mt-3 table table-bordered table-hover table-striped">

       <tr>
        <th>Id Barang</th>
        <th>Gambar Produk</th>
        <th>Nama Produk</th>
        <th>Jumlah Pesanan</th>
        <th>Harga Satuan</th>
        <th>Sub-Total</th>
       </tr>

       <?php
       $total = 0;
       foreach ($pesanan as $psn) :
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal;
        ?>

        <tr>
            <td><?php echo $psn->id_brg ?></td>
            <td><?php echo $psn->nama_brg ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga,0,',','.') ?></td>
            <td><?php echo number_format($subtotal,0,',','.') ?></td>
        </tr>

        <?php endforeach; ?>
        
    </table>
    <a href="<?= base_url(); ?>admin/invoice"  class="mt-3 btn btn-danger">Kembali</a>
</div>