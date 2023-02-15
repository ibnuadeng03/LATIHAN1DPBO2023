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

class Main {
    public static void main(String[] args) {
         // ------------------------ // pendeklarasian // ------------------------ //
        Scanner sc = new Scanner(System.in);
        String namaFakultas = "";               // untuk nama fakultas //
        String prodi = "";                      // untuk program studi //
        int tahunMasuk = 0;                     // tahun masuk //
        DataPodik mhs = new DataPodik();
        int n = 0;
        int nipDosenpa = 0;                     // nip dosen PA //
        String namaDosenpa = "";                // nama dosen PA //
        
        // -------------------------------------------- HEADER -------------------------------------------------------------------------//
        System.out.println("\n                      KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI");
        System.out.println("                            PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)");
        System.out.println("                              PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)");
        System.out.println("                                DIREKTORAT JENDERAL PENDIDIKAN TINGI");
        System.out.println("                 Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan");
        System.out.println("                    Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman,");
        System.out.println("                              Pintu 1 Senayan, Jakarta Pusat 10270");
        System.out.println("     Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id");
        System.out.println(" =========================================================================================================");
        
        System.out.println("              Selamat Datang Bapak/Ibu diportal Pangkalan Data Pendidikan Tinggi (PDDikti)");
        System.out.println("                 PUSDATIN KEMENDIKBUDRISTEKDIKTI Direktorat Jenderal Pendidikan Tinggi");

        System.out.println(" ---------------------------------------------------------------------------------------------------------");
        System.out.println("                                      DATA POKOK PENDIDIKAN");
        System.out.println("                                    UNIVERSITAS IKATAN BATIN");
        System.out.println("                                 TAHUN PEMBAHARUAN 2022/2023-Genap");
        System.out.println(" ---------------------------------------------------------------------------------------------------------\n");
        
        
        // ==================== Menu Inputan/CREATE USER ======================== //
        System.out.println("\n MENU INPUTAN");
        System.out.println(" ISI Nama Fakultas  ");
        System.out.print("  > Nama Fakultas    : ");            // Isi nama fakultasnya //
        try {
            namaFakultas = sc.next();
        } catch (Exception e) {
        }
        System.out.print("  > Program Studi    : ");            // Isi nama program studinya //
        try {
            prodi = sc.next();
        } catch (Exception e) {
        }
        System.out.print("  > Tahun Masuk      : ");            // Isi tahun masuknya //
        try {
            tahunMasuk = sc.nextInt();
        } catch (Exception e) {
        }
        System.out.print("  > Jumlah Mahasiswa : ");            // Isi jumlah mahasiswa nya //
        try {
            n = sc.nextInt();
        } catch (Exception e) {
        }
        String[] mahasiswa = new String[n];
        System.out.println("  > Nama Mahasiswa : ");            // isi nama mahasiswanya //
        for (int i = 0; i < mahasiswa.length; i++) {
            mahasiswa[i] = "";
            System.out.print("    - ");
            try {
                mahasiswa[i] = sc.next();
            } catch (Exception e) {
            }
        }
        System.out.println("  > Dosen Pembimbing Akademik ");       // isi nama dosen pembimbing akademik //
        System.out.print("    Nama Dosen : ");
        try {
            namaDosenpa = sc.next();
        } catch (Exception e) {
        }
        System.out.print("    NIP        : ");                      // isi NIP dosen pembimbing akademik //
        try {
            nipDosenpa = sc.nextInt();
        } catch (Exception e) {
        }

        // setter dan/atau getter //
        mhs.setNamaFakultas(namaFakultas);
        mhs.setProdi(prodi);
        mhs.setMahasiswa(mahasiswa);
        mhs.setTahunMasuk(tahunMasuk);
        mhs.getDosenpa().setNamaDosenpa(namaDosenpa);
        mhs.getDosenpa().setnipDosenpa(nipDosenpa);

        // ===================== Menampilkan/read hasil dari yang diinputkan user ======================== //
        System.out.println("");
        System.out.println("\n Data Berhasil Ditambahkan!.");
        System.out.println("============================================");
        System.out.println("          DATA INFORMASI PENDIDIKAN\n   ");
        System.out.println("Nama Fakultas : " + mhs.getNamaFakultas());                 // menampilkan nama fakultas //
        System.out.println("Program Studi : " + mhs.getProdi());                        // menampilkan prodi //
        System.out.println("Tahun Masuk   : " + mhs.getTahunMasuk());                   // menampilkan tahun masuknya //
        System.out.println("\nDaftar Nama Mahasiswa ;");                                // menampilkan data mahasiswanya //
        for (int j = 0; j < mahasiswa.length; j++) {
            System.out.println((j + 1) + "." + mhs.getMahasiswa()[j]);
        }
        System.out.println("\nInformasi Dosen Pembimbing Akademik ;");                  // menampilkan data dosen PA //
        System.out.println("- Nama Dosen : " + mhs.getDosenpa().getNamaDosenpa());      // nama dosen PA //
        System.out.println("- NIP        : " + mhs.getDosenpa().getnipDosenpa());       // NIP dosen PA //
        System.out.println("============================================\n");

        // ----------------------------------------------- FOOTER --------------------------------------- //
        System.out.println("\n      Copyright 2023. IBNU ADENG KURNIA");
        System.out.println("\n             All Rights Reserved");
    }
}
