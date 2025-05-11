<?php
interface HewanPeliharaan {
    public function bersuara();
    public function makan();
}

class Kucing implements HewanPeliharaan {
    public function bersuara() {
        echo "Meong meong<br>";
    }
    public function makan() {
        echo "Kucing sedang makan ikan.<br>";
    }
}

class Anjing implements HewanPeliharaan {
    public function bersuara() {
        echo "Guk guk<br>";
    }
    public function makan() {
        echo "Anjing sedang makan tulang.<br>";
    }
}

// Membuat objek
$kucing = new Kucing();
$anjing = new Anjing();

// Memanggil method
echo "<h2>Kucing</h2>";
$kucing->bersuara();
$kucing->makan();

echo "<h2>Anjing</h2>";
$anjing->bersuara();
$anjing->makan();
?>
