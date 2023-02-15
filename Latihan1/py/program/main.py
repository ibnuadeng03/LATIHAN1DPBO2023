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

from DataPodik import *

## pendeklarasian ##
faks = []
namaFakultas = ""
prodi = ""
tahunMasuk = ""
n = 0

#### ================================================= HEADER ========================================= #######
print("\n                    KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI")
print("                          PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)")
print("                           PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)")
print("                              DIREKTORAT JENDERAL PENDIDIKAN TINGI")
print("             Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan")
print("                Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman,")
print("                               Pintu 1 Senayan, Jakarta Pusat 10270")
print("     Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id")
print(" =========================================================================================================\n")

print("               Selamat Datang Bapak/Ibu diportal Pangkalan Data Pendidikan Tinggi (PDDikti)")
print("                  PUSDATIN KEMENDIKBUDRISTEKDIKTI Direktorat Jenderal Pendidikan Tinggi")

print(" ---------------------------------------------------------------------------------------------------------")
print("                                        DATA POKOK PENDIDIKAN")
print("                                       UNIVERSITAS IKATAN BATIN")
print("                                   TAHUN PEMBAHARUAN 2022/2023-Genap")
print(" ---------------------------------------------------------------------------------------------------------\n")


#Menu Inputan untuk user ####
n = int(input(" Silakan Masukkan Jumlah Fakultas yang akan ditambahkan : "))            ## meminta masukan ke user untuk jml fakultas yg akan dicreate 
print(" + + + + + + + + + + + + + + + + + + + + +")
for i in range(n):
    fak = DataPodik()
    mahasiswa = []
    namaFakultas = input("   > Nama Fakultas " + str(i + 1) + "  : ")                   ## meminta masukkan ke user untuk nama fakultas 
    prodi = input("   > Program Studi    : ")                                           ## meminta masukkan ke user untuk  prodi
    tahunMasuk = input("   > Tahun Masuk      : ")                                      ## meminta masukkan ke user untuk  tahun masuk 
    m = 0
    m = int(input("   > Jumlah Mahasiswa : "))                                          ## meminta masukkan ke user untuk  jml mahasiswa
    print("   > Daftar Mahasiswa")                                                      ## menampilkan data mahasiswa
    for j in range(m):
        strP = input("     - ")
        mahasiswa.append(strP)
    
    tahunBerdiri = ""
    pimpinan = ""
    print("   > Detail Program Studi")                                                  ## menampilkan detail prodi 
    tahunBerdiri = input("     - Tahun Berdiri          : ")                            ## meminta masukkan ke user untuk tahun berdiri prodinya
    pimpinan = input("     - Pimpinan Program Studi : ")                                ## meminta masukkan ke user untuk pimpinan prodinya

    ########## SETTER DAN GETTTER ################
    ## set untuk (nama fakultas, prodi, tahun amsuk, mahasiswa)
    ## get untuk (tahun berdiri dan pimpinan prodi)
    fak.setNamaFakultas(namaFakultas)
    fak.setProdi(prodi)
    fak.setTahunMasuk(tahunMasuk)
    fak.setMahasiswa(mahasiswa)
    fak.getDataProdi().setTahunBerdiri(tahunBerdiri)
    fak.getDataProdi().setPimpinan(pimpinan)

    faks.append(fak)
    print(" + + + + + + + + + + + + + + + + + + + + +\n")

################################### menampilkan daftar fakultas yg user buat ###################################
print("\n## ## ## ## ## ## ## ## ## ## ## ## ## ##")
print("Daftar Fakultas Yang Anda Isi;")
for i in range(n):
    print(str(i + 1), ".", faks[i].getNamaFakultas())
print("## ## ## ## ## ## ## ## ## ## ## ## ## ##\n")


print("")
idFak = 0
##################################### untuk melihat informasi fakutas beserta lainnya dari yg user inputakan ################################3
print("Jika Anda Ingin Melihat detail informasi Fakultas beserta lainnya, ikuti langkah berikut: ")
idFak = int(input("Tampilkan Detail Informasi di Fakultas ke- : "))
print(" + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + ")
print("   Silakan, berikut data yang Anda minta ;\n")
print("    > Nama Fakultas : " + faks[idFak-1].getNamaFakultas())                                      # nama fakultas 
print("    > Program Studi : " + faks[idFak-1].getProdi())                                             ## program studi
print("    > Tahun Masuk   : " + faks[idFak-1].getTahunMasuk())                                         ## tahun masuk
print("    > Daftar Mahasiswa ;")                                                                         ### daftar mahasiswa
for p in faks[idFak-1].getMahasiswa():
    print("      - " + p)
print("    > Detail Program Studi ;")                                                                      ## detail prodi
print("      - Tahun Berdiri           : " + faks[idFak-1].getDataProdi().getTahunBerdiri())                ## tahun berdiri
print("      - Pimpinan Program Studi  : " + faks[idFak-1].getDataProdi().getPimpinan())                    ## pimpinan
print(" + + + + + + + + + + + + + + + + + + + + + + + + + + + + + + \n\n")

############################ ======================== FOOTER ========================= ########################################################S
print("                                  Copyrigt © 2023. IBNU ADENG KURNIA")
print("                                         All Rights Reserved")