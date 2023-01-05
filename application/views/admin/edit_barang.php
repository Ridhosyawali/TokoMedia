<div class="container-fluid">
    <h3><i class="fas fa-edit">EDIT DATA BARANG</i></h3>

    <?php   foreach($barang as $brg) : ?>
    
        <form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>" enctype="multipart/form-data">

             <div class="mb-3">
                <img src="<?= base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" style="width: 15rem;">
                <input type="file" name="gambar" class="form-control" placeholder="Update Foto" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_brg" id="" value="<?= $brg->nama_brg ?>" >
                <input type="hidden" class="form-control" name="id_barang" id="" value="<?= $brg->id_barang ?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="" value="<?= $brg->keterangan ?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Kategori</label> 
                <select class="form-control" name="kategori">
                  <option value=""><?= $brg->kategori ?></option>
                  <option value="Alat_musik">Alat Musik</option>
                  <option value="Alat_olahraga">Alat olahraga</option>
                  <option value="Alat_tulis">Alat tulis</option>
                  <option value="Buku">Buku</option>
                  <option value="Tas">Tas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="" value="<?= $brg->harga ?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" id="" value="<?= $brg->stok ?>" >
            </div>
            <button type="submit" class="btn btn-sm btn-primary mb-5">Simpan</button>
            <?php echo anchor('admin/data_barang/','<div class="btn btn-sm btn-danger mb-5">Kembali</div>') ?>
        </form>
    <?php endforeach; ?>
</div>