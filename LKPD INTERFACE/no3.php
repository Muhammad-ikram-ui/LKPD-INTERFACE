<?php
interface Cetak {
    public function cetak();
}

class Printer implements Cetak {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function cetak() {
        echo "Printer {$this->nama} sedang mencetak dokumen.\n";
    }
}

class Scanner implements Cetak {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function cetak() {
        echo "Scanner {$this->nama} sedang memindai dokumen.\n";
    }
}

// Contoh penggunaan
$printer = new Printer("Epson L3150");
$printer->cetak();

$scanner = new Scanner("Canon LiDE 300");
$scanner->cetak();
?>
