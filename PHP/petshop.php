<?php
class petshop
{
    private $ID = '';
    private $namaproduk = '';
    private $kategoriproduk = '';
    private $hargaproduk = '';
    private $fotoproduk = '';

    public function __construct($ID = '', $namaproduk = '', $kategoriproduk = '', $hargaproduk = '', $fotoproduk = '') //parameter
    {
        $this->ID = $ID;
        $this->namaproduk = $namaproduk;
        $this->kategoriproduk = $kategoriproduk;
        $this->hargaproduk = $hargaproduk;
        $this->fotoproduk = $fotoproduk;
    }
    //setter
    public function setID($id)
    {
        $this->ID = $id;
    }
    public function setNamaproduk($nama)
    {
        $this->namaproduk = $nama;
    }
    public function setKategoriproduk($kategori)
    {
        $this->kategoriproduk = $kategori;
    }
    public function setHargaproduk($harga)
    {
        $this->hargaproduk = $harga;
    }
    public function setFotoproduk($foto)
    {
        $this->fotoproduk = $foto;
    }
    //getter
    public function getID()
    {
        return $this->ID;
    }
    public function getNamaproduk()
    {
        return $this->namaproduk;
    }
    public function getKategoriproduk()
    {
        return $this->kategoriproduk;
    }
    public function getHargaproduk()
    {
        return $this->hargaproduk;
    }
    public function getFotoproduk()
    {
        return $this->fotoproduk;
    }
}
?>