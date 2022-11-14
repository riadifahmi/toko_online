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
                    <a class="nav-link" href="<?= base_url(); ?>products/pembayaran">Proses Pesanan</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>products">Products</a>
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


<div class="container-fluid">
    <div class="alert alert-success">
        <p class="text-center align-middle">
            Selamat, Pesanan Anda Telah Berhasil Diproses!!!
        </p>
    </div>
</div>