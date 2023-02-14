<?php 

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

// ------------------------ // ^_^ Membuat kelas dengan nama Mahasiswa ^_^ // ------------------------ //
class Mahasiswa {
    // atribute class private //
    private $nama,                  // nama //
            $nim,                   // nim //
            $prodi,                 // prodi //
            $fakultas,              // fakultas //
            $jenjang,               // jenjang //
            $statusMhs,             // status mahasiswa //
            $jKelamin,              // jenis kelamin //
            $agama,                 // agama //
            $smtAwal,               // semester awal //
            $asalSekolah,           // asal sekolah //
            $noSeriIjazah,          // no seri ijazah //
            $tinggiBadan,           // tinggi badan //
            $beratBadan,            // berat badan //
            $garis;

    // KONSTRUKTOR //
    public function __construct($nama = "",
                                $nim = "",
                                $prodi = "",
                                $fakultas = "",
                                $jenjang = "",
                                $statusMhs = "",
                                $jk = "",
                                $agama = "",
                                $smtAwal = "",
                                $asalSekolah = "",
                                $noSeriIjazah = "",
                                $tinggiBadan = 0,
                                $beratBadan = 0,
                                $garis = "") {
        /*
            berlaku untuk yg atas dan bawah, kontruktor dimulai dari nama, nim
            prodi, fakultas, jenjang, statusMHS, j.kelamin, agama, smtAwal, 
            asal sekolah, noseriijazah, tinggiBadan, Berat badan.
        */
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
        $this->jenjang = $jenjang;
        $this->statusMhs = $statusMhs;
        $this->jKelamin = $jk;
        $this->agama = $agama;
        $this->smtAwal = $smtAwal;
        $this->asalSekolah = $asalSekolah;
        $this->noSeriIjazah = $noSeriIjazah;
        $this->tinggiBadan = $tinggiBadan;
        $this->beratBadan = $beratBadan;
        $this->garis = $garis;
    }

    // ============== SETTER dan GETTER ================== //
    // set nama //
    public function setNama($nama) {
        $this->nama = $nama;
    }
    //get nama //
    public function getNama() {
        return $this->nama;
    }

    //set nim //
    public function setNim($nim) {
        $this->nim = $nim;
    }
    //get nim //
    public function getNim() {
        return $this->nim;
    }
    
    //set prodi //
    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }
    //get prodi //
    public function getProdi() {
        return $this->prodi;
    }

    //set fakultas 
    public function setFakultas($fakultas) {
        $this->fakultas = $fakultas;
    }
    // get fakultas //
    public function getFakultas() {
        return $this->fakultas;
    }

    //set jenjang //
    public function setJenjang($jenjang) {
        $this->jenjang = $jenjang;
    }
    //get jenjang //
    public function getJenjang() {
        return $this->jenjang;
    }
    
    //set status mahasiswa //
    public function setStatusMhs($statusMhs) {
        $this->statusMhs = $statusMhs;
    }
    //get status mahasiswa //
    public function getStatusMhs() {
        return $this->statusMhs;
    }

    //set jenis kelamin//
    public function setJKelamin($jKelamin) {
        $this->jKelamin = $jKelamin;
    }
    //get jenis kelamin //
    public function getJKelamin() {
        return $this->jKelamin;
    }

    //set agama //
    public function setAgama($agama) {
        $this->agama = $agama;
    }
    //get agama //
    public function getAgama() {
        return $this->agama;
    }

    //set smtr Awal //
    public function setSmtAwal($smtAwal) {
        $this->smtAwal = $smtAwal;
    }
    //get smtr awal //
    public function getSmtAwal() {
        return $this->smtAwal;
    }

    //set asal sekolah //
    public function setAsalSekolah($asalSekolah) {
        $this->asalSekolah = $asalSekolah;
    }
    //get asal sekolah//
    public function getAsalSekolah() {
        return $this->asalSekolah;
    }
    
    //set no seri ijazah //
    public function setNoSeriIjazah($noSeriIjazah) {
        $this->noSeriIjazah = $noSeriIjazah;
    }
    //get no seri ijazah //
    public function getNoSeriIjazah() {
        return $this->noSeriIjazah;
    }

    //set tinggi badan//
    public function setTinggiBadan($tinggiBadan) {
        $this->tinggiBadan = $tinggiBadan;
    }
    //get tinggi badan //
    public function getTinggiBadan() {
        return $this->tinggiBadan;
    }

    //set berat badan //
    public function setBeratBadan($beratBadan) {
        $this->beratBadan = $beratBadan;
    }
    //get berat badan //
    public function getBeratBadan() {
        return $this->beratBadan;
    }

    //set garis //
    public function setGaris($garis) {
        $this->garis = $garis;
    }

    //get garis //
    public function getGaris() {
        return $this->garis;
    }

    // DESTRUKTOR //
    public function __destruct() { 
    }
}
?>