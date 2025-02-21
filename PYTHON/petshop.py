class petshop:
    __ID = ""
    __namaproduk = ""
    __kategoriproduk = ""
    __hargaproduk = 0

    def __init__(self): #constructor
        self.ID = ""
        self.namaproduk = ""
        self.kategoriproduk = ""
        self.hargaproduk = 0

    #setter dan getter
    def setID(self, id):
        self.ID = id
    def setNamaproduk(self, nama):
        self.namaproduk = nama
    def setKategoriproduk(self, kategori):
        self.kategoriproduk = kategori
    def setHargaproduk(self, harga):
        self.hargaproduk = harga

    def getID(self):
        return self.ID
    def getNamaproduk(self):
        return self.namaproduk
    def getKategoriproduk(self):
        return self.kategoriproduk
    def getHargaproduk(self):
        return self.hargaproduk