<div class="container-fluid">
    <h3><i class="fas fa-edit">EDIT DATA BARANG</i></h3>

    <?php   foreach($barang as $brg) : ?>
    
        <form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>" >

            
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
                <input type="text" class="form-control" name="kategori" id="" value="<?= $brg->kategori ?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="" value="<?= $brg->harga ?>" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" id="" value="<?= $brg->stok ?>" >
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>