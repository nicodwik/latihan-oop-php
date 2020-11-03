<?php

trait Hewan {
    public $nama, 
        $darah =  50,
        $jumlahKaki,
        $keahlian ;
        
    public function atraksi() {
        return $this->$nama . " sedang " . $this->$keahlian ;
    }
}

trait Fight {
    public $attackPower,
        $defencePower;
    
    public function serang($penyerang, $diserang) {
        return $penyerang . " sedang menyerang " . $diserang;
    }

    public function diserang($diserang) {
        return $diserang . " sedang diserang";
    }
}

class Elang {
    use nama, darah, jumlahKaki, keahlian, attackPower, defencePower, atraksi, serang, diserang;
    
    public function __construct($nama, $jumlahKaki, $keahlian, $attackPower, $defencePower) {
        $this->$nama = $nama;
        $this->$jumlahKaki = $jumlahKaki;
        $this->$keahlian = $keahlian;
        $this->$attackPower = $attackPower;
        $this->$defencePower = $defencePower;
    }

    public function getInfoHewan() {
        return "Nama Hewan: " . $this->$nama "<br> 
                Jumlah Darah: " . $this->$darah "<br> 
                Jumlah Kaki: " . $this->$jumlahKaki "<br>
                Keahlian: " . $this->$keahlian "<br>
                Attack Power: " . $this->$attackPower "<br>
                Defence Power: " . $this->$defencePower "<br>;
                Jenis Hewan: Elang <br>";
    }

    public function serang($penyerang, $diserang) {
        return $diserang->$darah - $penyerang->$attackPower/$diserang->$defencePower
    }
}

class Harimau {
    use nama, darah, jumlahKaki, keahlian, attackPower, defencePower, atraksi, serang, diserang;
    
    public function __construct($nama, $jumlahKaki, $keahlian, $attackPower, $defencePower) {
        $this->$nama = $nama;
        $this->$jumlahKaki = $jumlahKaki;
        $this->$keahlian = $keahlian;
        $this->$attackPower = $attackPower;
        $this->$defencePower = $defencePower;
    }

    public function getInfoHewan() {
        return "Nama Hewan: " . $this->$nama "<br> 
                Jumlah Darah: " . $this->$darah "<br> 
                Jumlah Kaki: " . $this->$jumlahKaki "<br>
                Keahlian: " . $this->$keahlian "<br>
                Attack Power: " . $this->$attackPower "<br>
                Defence Power: " . $this->$defencePower "<br>;
                Jenis Hewan: Harimau <br>";
    }

    public function serang($penyerang, $diserang) {
        return $diserang->$darah - $penyerang->$attackPower/$diserang->$defencePower
    }
}

$elang1 = new Elang("elang_1", 2, "terbang tinggi", 10, 5);
$harimau1 = new Harimau("harimau_1", 4, "lari cepat", 7, 8);

// menampilkan method pada Elang
echo $elang1->atraksi();
echo $elang1->serang($elang1, $harimau1);
echo $elang1->diserang($harimau1);
echo $elang1->getInfoHewan();

// menampilkan method pada Harimau
echo $harimau1->atraksi();
echo $harimau1->serang($harimau1, $elang1);
echo $harimau1->diserang($elang1);
echo $harimau1->getInfoHewan();
