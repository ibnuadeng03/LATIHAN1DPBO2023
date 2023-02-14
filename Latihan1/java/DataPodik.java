/*  
	Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan latihan ke-1 
	dalam mata kuliah desain dan pemrograman berorientasi objek C2 2023
	untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.
*/

/*  Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.
*/

import java.util.Scanner;

// ------------------------ // ^_^ Membuat kelas dengan nama DataPodik ^_^ // ------------------------ //
class DataPodik {
    // ------------------------ // kelas private // ------------------------ //
    // atribute class private //
    private String namaFakultas;        // Fakultas //
    private String prodi;               // Program Studi //
    private int tahunMasuk;             // Tahun Masuk //
    private String[] mahasiswa;         // Mahasiswa //
    Dosenpa dosenpa;                    // Dosen Pembimbing Akademik

    DataPodik() {                       // konstruktor //
        this.namaFakultas = "";
        this.prodi = "";
        this.tahunMasuk = 0;
        this.dosenpa = new Dosenpa();
        this.mahasiswa = new String[50];
    }


    // ------------------------ // SETTER AND GETTER // ------------------------ //
    // get dosen pembimbing akademik //
    Dosenpa getDosenpa() {
        return this.dosenpa;
    }

    // set dan get nama fakultas //
    void setNamaFakultas(String namaFakultas) {
        this.namaFakultas = namaFakultas;
    }

    // get nama fakultas //
    String getNamaFakultas() {
        return this.namaFakultas;
    }

    // set program studi //
    void setProdi(String prodi) {
        this.prodi = prodi;
    }

    // get program studi //
    String getProdi() {
        return this.prodi;
    }

    // set tahun masuk //
    void setTahunMasuk(int tahunMasuk) {
        this.tahunMasuk = tahunMasuk;
    }

    // get tahun masuk //
    int getTahunMasuk() {
        return this.tahunMasuk;
    }

    // set mahasiswa //
    void setMahasiswa(String[] p) {
        for (int i = 0; i < p.length; i++) {
            this.mahasiswa[i] = p[i];
        }
    }

    // get mahasiswa //
    String[] getMahasiswa() {
        return this.mahasiswa;
    }

    // ====== membuat class untuk dosen pembimbing akademik ======= //
    class Dosenpa {
        // terdiri dari nama dosen-nya dan nip //
        private String namaDosenpa;
        private int nipDosenpa;
        
        //kontruktor //
        Dosenpa() {
            this.namaDosenpa = "";
            this.nipDosenpa = 0;
        }

        // setter dan getter //
        // set nama dosen pembimbing akademik //
        void setNamaDosenpa(String nDosenpa) {
            this.namaDosenpa = nDosenpa;
        }

        // get nama dosen pembimbing akademik //
        String getNamaDosenpa() {
            return this.namaDosenpa;
        }

        // set nomor induk pegawai (nip) dosen pembimbing akademik //
        void setnipDosenpa(int nip) {
            this.nipDosenpa = nip;
        }

        // get nomor induk pegawai (nip) dosen pembimbing akademik //
        int getnipDosenpa() {
            return this.nipDosenpa;
        }
    }
}