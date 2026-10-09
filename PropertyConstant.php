<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11%
$jumlahPajak = $produk->harga * Produk::PAJAK; //1.100.000

//total
$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $pajak ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.". $total;