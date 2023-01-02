<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr align="center">
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th colspan="2">Aksi</th>
            
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td align="center"><?= $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td><a class="btn btn-sm btn-primary">Detail</a></td>  
                <td><a href="<?php echo base_url('admin/invoice/delete/'.$inv->id); ?>" class="btn btn-sm btn-danger">Hapus</a></td>
            </tr>
            <?php endforeach ; ?>
    </table>
</div>