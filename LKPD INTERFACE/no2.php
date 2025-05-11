<?php
interface Kendali {
    public function hidupkan();
    public function matikan();
}

class Lampu implements Kendali {
    private $status;

    public function __construct() {
        $this->status = 'mati';
    }

    public function hidupkan() {
        $this->status = 'hidup';
        echo "Lampu dinyalakan.\n";
    }

    public function matikan() {
        $this->status = 'mati';
        echo "Lampu dimatikan.\n";
    }

    public function getStatus() {
        return $this->status;
    }
}

class TV implements Kendali {
    private $status;

    public function __construct() {
        $this->status = 'mati';
    }

    public function hidupkan() {
        $this->status = 'hidup';
        echo "TV dinyalakan.\n";
    }

    public function matikan() {
        $this->status = 'mati';
        echo "TV dimatikan.\n";
    }

    public function getStatus() {
        return $this->status;
    }
}

// Contoh penggunaan
$lampu = new Lampu();
$lampu->hidupkan();
echo "Status Lampu: " . $lampu->getStatus() . "\n";
$lampu->matikan();
echo "Status Lampu: " . $lampu->getStatus() . "\n";

$tv = new TV();
$tv->hidupkan();
echo "Status TV: " . $tv->getStatus() . "\n";
$tv->matikan();
echo "Status TV: " . $tv->getStatus() . "\n";
?>
