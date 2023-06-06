<?php

// class Test{


// }

// $a = new Test();


class Mobil{
    public $nama;
    public $merk;
    public $warna;


    //method
    public function tambahkecepatan(){

    }

    public function kurangikecepatan(){

    }
}


$mobil1 = new Mobil(); //object


class Produk {
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999;

    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printharga(){
        return $this->harga;0;
    }
}

$produk1 = new Produk($_POST['ini nama'] "Hoodie", "Jaket", 185000);


echo "$produk1->nama, $produk1->jenis";
echo "<br>";
echo "Harga :" .$produk1->printharga();


?>