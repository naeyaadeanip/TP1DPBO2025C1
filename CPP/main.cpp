#include "petshop.cpp"
#include <list>

using namespace std;

int main() 
{
    int exit = 0;
    int menu = 0;

    string id, nama, kategori;
    int harga;

    petshop temp;

    list<petshop> 
        listshop;

    while(exit == 0) //looping menu
    {
        list<petshop>::iterator i;
        int index = 0;
        menu = 0;
        cout << "Pilih Menu: " << '\n';
        cout << "1. Tampilkan Data" << '\n';
        cout << "2. Tambah Data" << '\n';
        cout << "3. Ubah Data" << '\n';
        cout << "4. Hapus Data" << '\n';
        cout << "5. Cari Data" << '\n';
        cout << "6. Exit" << '\n';
        cin >> menu;

        //menampilkan data
        if(menu == 1) 
        {
            if(listshop.size() == 0)
            {
                cout << endl
                        << "Data Kosong" << endl
                        << endl;
            }
            else
            {
                int total = 1;
                cout << endl
                     << "Data Petshop" << endl;
                for(i = listshop.begin(); i != listshop.end(); i++)
                {
                    cout << total << ". ID: " << i->getID() << endl;
                    cout << "   Nama Produk: " << i->getNamaProduk() << endl;
                    cout << "   Kategori Produk: " << i->getKategoriProduk() << endl;
                    cout << "   Harga Produk: " << i->getHargaProduk() << endl;
                    total++;
                }
                cout << endl;
            }
        }
        //menambahkan data
        else if(menu == 2)
        {
            cout << "Masukkan ID: ";
            cin >> id;
            cout << "Masukkan Nama Produk: ";
            cin >> nama;
            cout << "Masukkan Kategori Produk: ";
            cin >> kategori;
            cout << "Masukkan Harga Produk: ";
            cin >> harga;

            temp.setID(id);
            temp.setNamaProduk(nama);
            temp.setKategoriProduk(kategori);
            temp.setHargaProduk(harga);

            listshop.push_back(temp);
            cout << endl
                    << "Data Berhasil Ditambahkan" << endl
                    << endl;
        }
        //mengubah data
        else if(menu == 3)
        {
            index = 0;
            cout << "Masukkan Nama yang ingin diubah: ";
            cin >> nama;
            i = listshop.begin();
            while(i != listshop.end() && index == 0)
            {
                if(i->getNamaProduk() == nama)
                {
                    index = 1;
                }
                else
                {
                    i++;
                }
            }
            cout << "Masukan ID baru: ";
            cin >> id;
            cout << "Masukkan Nama Produk baru: ";
            cin >> nama;
            cout << "Masukkan Kategori Produk baru: ";
            cin >> kategori;
            cout << "Masukkan Harga Produk baru: ";
            cin >> harga;
            if(index == 1)
            {
                i->setID(id);
                i->setNamaProduk(nama);
                i->setKategoriProduk(kategori);
                i->setHargaProduk(harga);
                cout << endl
                        << "Data Berhasil Diubah" << endl
                        << endl;
            }
            else
            {
                    cout << endl
                            << "Data Tidak Ditemukan" << endl
                            << endl;
                }
            }
            //menghapus data
            else if(menu == 4)
            {
                index = 0;
                cout << "Masukkan Nama yang ingin dihapus: ";
                cin >> nama;
                i = listshop.begin();
                while(i != listshop.end() && index == 0)
                {
                    if(i->getNamaProduk() == nama)
                    {
                        index = 1;
                    }
                    else
                    {
                        i++;
                    }
                }
                if(index == 1)
                {
                    listshop.erase(i);
                    cout << endl
                            << "Data Berhasil Dihapus" << endl
                            << endl;
                }
                else
                {
                    cout << endl
                            << "Data Tidak Ditemukan" << endl
                            << endl;
                }
            }
            //mencari data
            else if(menu == 5)
            {
                index = 0;
                cout << "Masukkan Nama yang ingin dicari: ";
                cin >> nama;
                i = listshop.begin();
                while(i != listshop.end() && index == 0)
                {
                    if(i->getNamaProduk() == nama)
                    {
                        index = 1;
                    }
                    else
                    {
                        i++;
                    }
                }
                if(index == 1)
                {
                    cout << endl;
                    cout << "ID: " << i->getID() << endl;
                    cout << "Nama Produk: " << i->getNamaProduk() << endl;
                    cout << "Kategori Produk: " << i->getKategoriProduk() << endl;
                    cout << "Harga Produk: " << i->getHargaProduk() << endl;
                    cout << endl;
                }
                else
                {
                    cout << endl
                            << "Data Tidak Ditemukan" << endl
                            << endl;
                }
            }
            //keluar dari menu
            else if(menu == 6)
            {
                exit = 1;
            }
            else
            {
                cout << endl
                        << "Menu Tidak Tersedia" << endl
                        << endl;
            }
        }
    return 0;
}