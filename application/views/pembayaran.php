<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            

            <h4>Form Pembayaran</h4>

            <form method="post" action="<?= base_url() ?>dashboard/proses_pesanan">
                    
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">No. telepon</label>
                        <input type="number" name="no_telp" placeholder="Nomor Telepon Anda"class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Jasa Pengiriman</label>
                        <select class="form-control">
                            <option value="">JNE</option>
                            <option value="">TIKI</option>
                            <option value="">POS Indonesia</option>
                            <option value="">GOJEK</option>
                            <option value="">GRAB</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Pilih Bank</label>
                        <select class="form-control">
                            <option value="">BCA - xxxxxxxx</option>
                            <option value="">BNI - xxxxxxxx</option>
                            <option value="">BTN - xxxxxxxx</option>
                            <option value="">BRI - xxxxxxxx</option>
                            <option value="">MANDIRI - xxxxxxxx</option>
                        </select>
                    </div>

                    <div class="text-monospace text-dark">
                        <h5>
                   <?php  
                    $grand_total=0;
                    if($keranjang = $this->cart->contents())
                    {
                        foreach($keranjang as $item)
                        {
                            $grand_total = $grand_total + $item['subtotal'];
                        }

                        echo "Total Belanja Anda: Rp.".number_format($grand_total,0,',','.');
                    
                ?></h5>
            </div><br>

                    <button type="submit" class="btn btn-primary mb-3">Checkout</button>


            </form>

            <?php
            }else
            {
                echo "<h5>Keranjang Belanja Anda Masih Kosong";
            }
            ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>