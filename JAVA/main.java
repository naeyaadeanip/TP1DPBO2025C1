import java.util.Scanner;
import java.util.ArrayList;

class main{
    public static void main(String[] args){

        int exit = 0, i = 0;
        int menu = 0;

        String id, nama, kategori;
        int harga;
        ArrayList<petshop> listshop = new ArrayList<>();
        String newline = System.lineSeparator();
        Scanner scan = new Scanner(System.in);

        while(exit == 0) //looping menu
        {
            int index = 0;
            menu = 0;
            System.out.println("Pilih Menu:" + newline);
            System.out.println("1. Tampilkan Data Produk");
            System.out.println("2. Tambah Data Produk");
            System.out.println("3. Hapus Data Produk");
            System.out.println("4. Ubah Data Produk");
            System.out.println("5. Cari Data Produk");
            System.out.println("6. Exit");
            menu = scan.nextInt();
            //menampilkan data
            if(menu == 1)
            {
                if(listshop.size() == 0)
                {
                    System.out.println(newline + "Data Kosong" + newline);
                }
                else
                {
                    System.out.println(newline + "Data Produk" + newline);
                    for(i = 0; i < listshop.size(); i++)
                    {
                        System.out.println(Integer.toString(i+1) + ". ID: " + listshop.get(i).getID());
                        System.out.println("   Nama: " + listshop.get(i).getNamaProduk());
                        System.out.println("   Kategori: " + listshop.get(i).getKategoriProduk());
                        System.out.println("   Harga: " + listshop.get(i).getHargaProduk());
                    }
                    System.out.println(newline);
                }
            }
            //menambahkan data
            else if(menu == 2)
            {
                System.out.println("Masukkan ID: ");
                id = scan.next();
                System.out.println("Masukkan Nama: ");
                nama = scan.next();
                System.out.println("Masukkan Kategori: ");
                kategori = scan.next();
                System.out.println("Masukkan Harga: ");
                harga = scan.nextInt();

                petshop temp = new petshop();
                temp.setID(id);
                temp.setNamaProduk(nama);
                temp.setKategoriProduk(kategori);
                temp.setHargaProduk(harga);

                listshop.add(temp);
                System.out.println(newline + "Data Berhasil Ditambahkan" + newline);
            }
            //menghapus data
            else if(menu == 3)
            {
                index = 0;
                System.out.println("Masukkan Nama yang akan dihapus: ");
                nama = scan.next();

                i = 0;
                while(i < listshop.size() && index == 0)
                {
                    if(listshop.get(i).getNamaProduk().equals(nama))
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
                    listshop.remove(i);
                    System.out.println(newline + "Data Berhasil Dihapus" + newline);
                }
                else
                {
                    System.out.println(newline + "Data Tidak Ditemukan" + newline);
                }
            }
            //mengubah data
            else if(menu == 4)
            {
                index = 0;
                System.out.println("Masukkan Nama yang akan diubah: ");
                nama = scan.next();
                i = 0;
                while(i < listshop.size() && index == 0)
                {
                    if(listshop.get(i).getNamaProduk().equals(nama))
                    {
                        index = 1;
                    }
                    else
                    {
                        i++;
                    }
                }
                System.out.println("Masukan ID Produk baru :");
                id = scan.next();
                System.out.println("Masukkan Nama Produk baru: ");
                nama = scan.next();
                System.out.println("Masukkan Kategori Produk baru: ");
                kategori = scan.next();
                System.out.println("Masukkan Harga Produk baru: ");
                harga = scan.nextInt();

                if(index == 1)
                {
                    listshop.get(i).setID(id);
                    listshop.get(i).setNamaProduk(nama);
                    listshop.get(i).setKategoriProduk(kategori);
                    listshop.get(i).setHargaProduk(harga);
                    System.out.println(newline + "Data Berhasil Diubah" + newline);
                }
                else
                {
                    System.out.println(newline + "Data Tidak Ditemukan" + newline);
                }
            }
            //mencari data
            else if(menu == 5)
            {
                index = 0;
                System.out.println("Masukkan Nama yang akan dicari: ");
                nama = scan.next();
                i = 0;
                while(i < listshop.size() && index == 0)
                {
                    if(listshop.get(i).getNamaProduk().equals(nama))
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
                    System.out.println(newline + "Data Ditemukan" + newline);
                    System.out.println("ID: " + listshop.get(i).getID());
                    System.out.println("Nama: " + listshop.get(i).getNamaProduk());
                    System.out.println("Kategori: " + listshop.get(i).getKategoriProduk());
                    System.out.println("Harga: " + listshop.get(i).getHargaProduk() + newline);
                }
                else
                {
                    System.out.println(newline + "Data Tidak Ditemukan" + newline);
                }
            }
            //exit dari menu
            else if(menu == 6)
            {
                exit = 1;
            }
            else
            {
                System.out.println(newline + "Menu Tidak Tersedia" + newline);
            }
        }
    }
}