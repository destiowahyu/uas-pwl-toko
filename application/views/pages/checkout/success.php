<main role="main" class="container">

    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pemesanan berhasil
                </div>
                <div class="card-body">
                    <h5>Nomor order: <?= $content->invoice ?></h5>
                    <p>Terima kasih sudah berbelanja.</p>
                    <p>Segera Lakukan Pembayaran Sebelum 24 Jam</p>
                    <ol>
                        <li>Jika Anda Memilih Pembayaran COD, silahkan tunggu hingga barang sampai kerumah Anda, lalu siapkan uang sesuai dengan harga Total Pembayaran yaitu : <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                        <li>Jika Anda memilih metode pembayaran transfer bank silahkan transfer sejumlah <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong> Ke nomor Virtual Account: <strong><?= $content->invoice ?></strong> a/n PT. ABC Destio Wahyu</li>
                        <li>Jika Anda memilih metode pembayaran Alfamart atau Indomaret Silahkan datang ke kasir dan sampaikan ke kasir akan melakukan pembayaran TOKO ABC, lalu tunjukkan nomor Pembayaran <strong><?= $content->invoice ?></strong>, dan lakukan pembayaran sejumlah <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                    </ol>
                    <p>Pembayaran akan dilakukan verifikasi secara manual.</p>
                    <p>Jika sudah silahkan kirimkan bukti transaksi di halaman konfirmasi atau bisa <a href="<?= base_url("myorder/detail/$content->invoice") ?>">klik disini</a></p>
                    <strong>*Anda tidak perlu mengirim bukti transaksi jika memilih metode pembayaran COD</strong><br><br>
                    <a href="<?= base_url('home') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>