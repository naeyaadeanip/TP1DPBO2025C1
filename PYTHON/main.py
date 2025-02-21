from petshop import petshop

exit = 0
menu = 0
ID = ""; namaproduk = ""; kategoriproduk = ""; hargaproduk = 0

listshop = []
#looping menu
while exit == 0:
    index = 0
    print("\nPilih Menu")
    print("1. Tampilkan Data")
    print("2. Tambah Data")
    print("3. Hapus Data")
    print("4. Ubah Data")
    print("5. Cari Data")
    print("6. Exit")
    menu = input()
    #menampilkan data
    if int(menu) == 1:
        if len(listshop) == 0:
            print("\n Data Kosong \n")
        else:
            total = 1
            print("\n Data Petshop \n")
            for pet in listshop:
                print(str(total)+". ID : " , pet.getID())
                print("   Nama Produk : " , pet.getNamaproduk())
                print("   Kategori Produk : " , pet.getKategoriproduk())
                print("   Harga Produk : " , pet.getHargaproduk())
                total += 1
    #menambah data
    elif int(menu) == 2:
        temp = petshop()
        print("Masukkan ID : ")
        ID = input()
        print("Masukkan Nama Produk : ")
        namaproduk = input()
        print("Masukkan Kategori Produk : ")
        kategoriproduk = input()
        print("Masukkan Harga Produk : ")
        hargaproduk = input()

        temp.setID(ID)
        temp.setNamaproduk(namaproduk)
        temp.setKategoriproduk(kategoriproduk)
        temp.setHargaproduk(hargaproduk)

        listshop.append(temp)
        print("\n Data Berhasil Ditambahkan \n")
    #menghapus data
    elif int(menu) == 3:
        index = 0
        print("Masukkan Nama Produk yang akan dihapus : ")
        namaproduk = input()
        i = 0
        while i < len(listshop) and index == 0:
            if listshop[i].getNamaproduk() == namaproduk:
                index = 1
            else:
                i += 1
        if index == 1:
            listshop.pop(i)
            print("\n Data Berhasil Dihapus \n")
        else:
            print("\n Data Tidak Ditemukan \n")
    #mengubah data
    elif int(menu) == 4:
        index = 0
        print("Masukkan Nama Produk yang akan diubah : ")
        namaproduk = input()
        i = 0
        while i < len(listshop) and index == 0:
            if listshop[i].getNamaproduk() == namaproduk:
                index = 1
            else:
                i += 1
        print("Masukkan ID baru : ")
        ID = input()
        print("Masukkan Nama Produk baru : ")
        namaproduk = input()
        print("Masukkan Kategori Produk baru : ")
        kategoriproduk = input()
        print("Masukkan Harga Produk baru : ")
        hargaproduk = input()

        if index == 1:
            listshop[i].setID(ID)
            listshop[i].setNamaproduk(namaproduk)
            listshop[i].setKategoriproduk(kategoriproduk)
            listshop[i].setHargaproduk(hargaproduk)
            print("\n Data Berhasil Diubah \n")
        else:
            print("\n Data Tidak Ditemukan \n")
    #mencari data
    elif int(menu) == 5:
        index = 0
        print("Masukkan Nama Produk yang akan dicari : ")
        namaproduk = input()
        i = 0
        while i < len(listshop) and index == 0:
            if listshop[i].getNamaproduk() == namaproduk:
                index = 1
            else:
                i += 1
        if index == 1:
            print("\n Data Ditemukan \n")
            print("ID : " + listshop[i].getID())
            print("Nama Produk : " , listshop[i].getNamaproduk())
            print("Kategori Produk : " , listshop[i].getKategoriproduk())
            print("Harga Produk : " , listshop[i].getHargaproduk())
        else:
            print("\n Data Tidak Ditemukan \n")
    #exit dari menu
    elif int(menu) == 6:
        exit = 1