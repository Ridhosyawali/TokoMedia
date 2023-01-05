<div class="container-fluid">
    
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">

        <?php foreach($barang as $brg): ?>
           <div class="row"  >
                <div class="col-md4 mr-4"  >
                    <img src="<?= base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-9" >
                    <table class="table text-capitalize">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?= $brg->nama_brg ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?= $brg->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?= $brg->kategori ?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?= $brg->stok ?></strong></td>
                        </tr>
                        <tr>
                            <td><div class="text-capitalize">Harga</div></td>
                            <td><div class="text-monospace font-italic">Rp.<?= number_format($brg->harga,0,',','.')  ?></div></td>
                        </tr>
                    </table>

                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_barang,
                    '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>

                    <?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                </div>
           </div>

        <?php endforeach; ?>
        
        </div>
    </div>

</div>