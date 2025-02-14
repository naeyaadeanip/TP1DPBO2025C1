#include <iostream>
#include <string>

using namespace std;

class petshop //class petshop
{
    private:
        string ID;
        string namaproduk;
        string kategoriproduk;
        int hargaproduk;
    
    public:
        petshop() //constructor
        {
            ID = "";
            namaproduk = "";
            kategoriproduk = "";
            hargaproduk = 0;
        };
        petshop(string id, string nama, string kategori, int harga) //constructor
        {
            ID = id;
            namaproduk = nama;
            kategoriproduk = kategori;
            hargaproduk = harga;
        }

        void setID(string id)
        {
            ID = id;
        }
        void setNamaProduk(string id)
        {
            namaproduk = id;
        }
        void setKategoriProduk(string id)
        {
            kategoriproduk = id;
        }
        void setHargaProduk(int id)
        {
            hargaproduk = id;
        }

        string getID() //
        {
            return ID;
        }
        string getNamaProduk()
        {
            return namaproduk;
        }
        string getKategoriProduk()
        {
            return kategoriproduk;
        }
        int getHargaProduk()
        {
            return hargaproduk;
        }

        ~petshop() //destructor
        {
        }
};