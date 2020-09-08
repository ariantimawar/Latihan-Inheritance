<?php
class Mobil{
    public $nama, $merk, $warna, $kecepatanMaksimal, $jumlahPenumpang;

    public function tambahkecepatan(){
        return "Kecepatan Bertambah";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;

    public function aktifkanTurbo(){
        $this->turbo=true;
        return "Turbo diaktifkan";
    }
}

$mobilKu = new MobilSport();
echo $mobilKu->tambahkecepatan();
echo "<br>";
echo $mobilKu->aktifkanTurbo();
?>