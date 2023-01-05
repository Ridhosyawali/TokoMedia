<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>    

    <div class="row mt-4">

        <?php foreach ($alat_musik as $brg ) : ?>

            <div class="card ml-2 mb-2" style="width: 15rem;">
            <a href="<?= base_url('dashboard/detail/'.$brg->id_barang) ?>"><img width="" src="<?= base_url().'/uploads/'.$brg->gambar; ?>" class="card-img-top"  alt=""></a>
            <!-- <img href="detail" src="<?= base_url().'/uploads/'.$brg->gambar; ?>" class="card-img-top" alt="..."> -->
            <div class="card-body">
                <a style="color:#0a000a;" href="#Detail" class="card-title"><h5><?= $brg->nama_brg; ?></h5></a>
                <br>
                <small><?= $brg->keterangan; ?></small>
            <div class="price mt-3">
                <b>Rp<?= number_format($brg->harga,0,',','.') ?></b>
            </div>    
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,
                '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>
            </div>
            </div>
            
        <?php endforeach; ?>
    
    </div>
</div>