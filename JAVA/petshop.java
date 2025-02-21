class petshop
{
    private String ID;
    private String namaproduk;
    private String kategoriproduk;
    private int hargaproduk;

    petshop()
    {
        this.ID = "";
        this.namaproduk = "";
        this.kategoriproduk = "";
        this.hargaproduk = 0;
    };

    petshop(String id, String nama, String kategori, int harga) //constructor
    {
        this.ID = id;
        this.namaproduk = nama;
        this.kategoriproduk = kategori;
        this.hargaproduk = harga;
    }
    //setter dan getter
    void setID(String id)
    {
        this.ID = id;
    }
    void setNamaProduk(String nama)
    {
        this.namaproduk = nama;
    }
    void setKategoriProduk(String kategori)
    {
        this.kategoriproduk = kategori;
    }
    void setHargaProduk(int harga)
    {
        this.hargaproduk = harga;
    }

    String getID()
    {
        return this.ID;
    }
    String getNamaProduk()
    {
        return this.namaproduk;
    }
    String getKategoriProduk()
    {
        return this.kategoriproduk;
    }
    int getHargaProduk()
    {
        return this.hargaproduk;
    }
};