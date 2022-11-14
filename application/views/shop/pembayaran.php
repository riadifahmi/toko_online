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
                    <a class="nav-link" href="<?= base_url(); ?>products/pembayaran">Pembayaran</a>
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

          
            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script>
        	$(document).ready(function(){
	            $("#provinsi").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+$(this).val();
	                $('#kabupaten').load(url);
	                return false;
	            })
	   
	   			$("#kabupaten").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+$(this).val();
	                $('#kecamatan').load(url);
	                return false;
	            })
	   
	   			$("#kecamatan").change(function (){
	                var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
	                $('#desa').load(url);
	                return false;
	            })
	        });
    	</script>

<div class="mt-3 container">
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-8">
            <h2><i class="">Checkout</i></h2>
            <br><br>
            <div class="btn btn-sm btn-danger">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    } 

                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');                    
                 ?>
            </div><br><br>
            <h4>Input Alamat Pengiriman dan Pembayaran<h4>
                <form method= "post" action="<?php echo base_url() ?>products/proses_pesanan">

                    <div class="form-group mt-4">
                        <label><h6>Nama Lengkap</h6></label>
                        <Input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control"></Input>
                    </div>

                    <div class="form-group mb-3">
                        <label><h6>Alamat Lengkap</h6></label>
                        <Input type="text" name="alamat" placeholder="Alamat Lengkap Anda "class="form-control"></Input>
                    </div>

                    <div class="form-group mb-3">
                        <label><h6>Provinsi</h6></label>
                        <select name="prov" class="form-control" id="provinsi">
                        <option>- Select Provinsi -</option>
                        <?php 
				foreach($provinsi as $prov)
				{
					echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
				}
			?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label><h6>Kabupaten</h6></label>
                        <select name="kab" class="form-control" id="kabupaten">
                        <option value=''>Select Kabupaten</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label><h6>Kecamatan</h6></label>
                        <select name="kec" class="form-control" id="kecamatan">
                        <option>Select Kecamatan</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label><h6>Desa</h6></label>
                        <select name="des" class="form-control" id="desa">
                        <option>Select Desa</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label><h6>No.Telepon</h6></label>
                        <Input type="text" name="no_telp" placeholder="Nomor Telepon Anda "class="form-control"></Input>
                    </div>

                    <div class="form-group mt-3">
                        <label><h6>Jasa Pengiriman</h6></label>
                        <select class="form-control">
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>GOJEK</option>
                            <option>GRAB</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label><h6>Pilih Pembayaran</h6></label>
                        <select class="form-control">
                            <option>BCA</option>
                            <option>MANDIRI</option>
                            <option>BRN</option>
                            <option>BRI</option>
                            <option>COD</option>
                        </select>
                    </div>

                 <button type="submit" class="btn btn-sm btn-warning mb-3">Buat Pesanan</button>   

                </form>

                <?php
            }else{
                echo "<h4>Keranjang Belanja Anda Masih Kosong";
            }
                ?>
        </div>
        <div class="col-md-12"></div>
    </div>
</div>
</div>
</div>
</div>