''' 
	Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan latihan ke-1 
	dalam mata kuliah desain dan pemrograman berorientasi objek C2 2023
	untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.
'''

'''  
    Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.
'''

# membuat kelas dengan nama DataPodik #
class DataPodik:
    def __init__(self):
        self.namaFakultas = ""                      # nama fakultas 
        self.prodi = ""                             # program studi 
        self.tahunMasuk = ""                        # tahun masuk 
        self.mahasiswa = []                         # mahasiswa
        self.dataProdi = self.DataProdi()           # data prodi

    ### SETTER DAN GETTER ####
    #Set nama fakultas 
    def setNamaFakultas(self, namaFakultas):
        self.namaFakultas = namaFakultas
    
    #get nama fakultas 
    def getNamaFakultas(self):
        return self.namaFakultas

    #set program studi
    def setProdi(self, prodi):
        self.prodi = prodi

    #set program studi
    def getProdi(self):
        return self.prodi

    #set tahun masuk 
    def setTahunMasuk(self, tahunMasuk):
        self.tahunMasuk = tahunMasuk

    #get tahun masuk 
    def getTahunMasuk(self):
        return self.tahunMasuk

    #set mahasiswa 
    def setMahasiswa(self, mahasiswa):
        self.mahasiswa = mahasiswa.copy()

    #get mahasiswa
    def getMahasiswa(self):
        return self.mahasiswa

    #get data prodi
    def getDataProdi(self):
        return self.dataProdi

    ###### membuat class dengan nama Data Prodi #######
    class DataProdi:
        def __init__(self):
            self.tahunBerdiri = ""                      # untuk tahun berdiri 
            self.pimpinan = ""                          # untuk pimpinan prodi

        ##### SETTER DAN GETTER ######
        # set tahun berdiri prodi
        def setTahunBerdiri(self, tahunBerdiri):
            self.tahunBerdiri = tahunBerdiri

        #get tahun berdiri prodi
        def getTahunBerdiri(self):
            return self.tahunBerdiri

        #set pimpinan prodi
        def setPimpinan(self, pimpinan):
            self.pimpinan = pimpinan

        #get pimpinan prodi
        def getPimpinan(self):
            return self.pimpinan
