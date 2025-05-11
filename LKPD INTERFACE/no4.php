<?php
interface Pembayaran {
    public function prosesBayar($jumlah);
}

class BayarTunai implements Pembayaran {
    public function prosesBayar($jumlah) {
        echo "Pembayaran tunai sebesar Rp " . number_format($jumlah, 2, ',', '.') . " telah diproses.\n";
    }
}

class BayarTransfer implements Pembayaran {
    public function prosesBayar($jumlah) {
        echo "Pembayaran transfer sebesar Rp " . number_format($jumlah, 2, ',', '.') . " telah diproses.\n";
    }
}

// Contoh penggunaan
$bayarTunai = new BayarTunai();
$bayarTunai->prosesBayar(150000);

$bayarTransfer = new BayarTransfer();
$bayarTransfer->prosesBayar(250000);
?>
