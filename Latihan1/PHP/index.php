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

include "Mahasiswa.php";

$mahasiswa = [];        //  variabel untuk menyimpan daftar data mahasiswa  //

// ==================================================== HEADER ============================================================//
echo "<h3><center> KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI </center></h3>";
echo "<h3><center>    PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)     </center></h3>";
echo "<h3><center>     PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)       </center></h3>";
echo "<h3><center>      DIREKTORAT JENDERAL PENDIDIKAN TINGI            </center></h3>";
echo "<p><center> Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman, Pintu 1 Senayan, Jakarta Pusat 10270 </center></p>";
echo "<p><center> Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id </center></p>";
echo "<h3><center> --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </center></h3>";

echo "<h4><center> DATA POKOK PENDIDIKAN </center></h4>";
echo "<h4><center> UNIVERSITAS IKATAN BATIN </center></h4>";
echo "<h4><center> TAHUN PEMBAHARUAN 2022/2023-Genap  </center></h4>";
echo "<p><center> Jln. Raya Majalaya-Cicalengka Kp. Rancakendal Desa Tangsimekar Kecamatan Paseh Kabupaten Bandung Provinsi Jawa Barat 40383. </center></p>";

//  ========= sesuai dengan yg disampaikan oleh tim asesiten, untuk ini data saya harcode, dikarena keterbatasan satu dan lain hal ========== //
// ini merupakan data pertama //
$mahasiswa[] = new Mahasiswa("Prof. Dr. dr. (H.C). H. Aldebaran Alfahri Putra Kurnia, Sp.PD-KGEH., Ph.D.", "0503258", "A-Spesialis Penyakit Dalam", "A-Fakultas Kedokteran", "S2", "Alumnus (Telah Lulus)", "Laki-Laki", "Islam", "2005-Ganjil", "SMAN 1 Majalaya Kabupaten Bandung, Universitas Gadjah Mada, Universitas Indonesia, University of New South Wales (UNSW), Australia", "LN-Lp/06 2739274352309001", 173, 58);
$mahasiswa[] = new Mahasiswa();
$mahasiswa[] = new Mahasiswa();
$mahasiswa[] = new Mahasiswa();
$mahasiswa[] = new Mahasiswa();

echo "<p> ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>";
// ini merupakan data kedua //
// SETTER digunakan //
// set dimulai nama, nim, prodi, fakultas, jenjang, status mhs, j.kelamin, agama, smt awal, asal sekolah, no seri ijazah, tinggi badan, dan berat badan //
$mahasiswa[1]->setNama("Andhika Subagja");
$mahasiswa[1]->setNim("2101657");
$mahasiswa[1]->setProdi("E-Teknik Sipil");
$mahasiswa[1]->setFakultas("E-Fakultas Teknologi dan Kejuruan");
$mahasiswa[1]->setJenjang("S1");
$mahasiswa[1]->setStatusMhs("Terdaftar");
$mahasiswa[1]->setJKelamin("Laki-Laki");
$mahasiswa[1]->setAgama("Islam");
$mahasiswa[1]->setSmtAwal("2021-Ganjil");
$mahasiswa[1]->setAsalSekolah("SMAN 1 Majalaya, Kabupaten Bandung");
$mahasiswa[1]->setNoSeriIjazah("DN-Dp/06 1686231");
$mahasiswa[1]->setTinggiBadan(151);
$mahasiswa[1]->setBeratBadan(53);
$mahasiswa[1]->setGaris("  ");

// ini merupakan data ketiga //
// set dimulai nama, nim, prodi, fakultas, jenjang, status mhs, j.kelamin, agama, smt awal, asal sekolah, no seri ijazah, tinggi badan, dan berat badan //
$mahasiswa[2]->setNama("Naisya Salsa Aulia");
$mahasiswa[2]->setNim("1901879");
$mahasiswa[2]->setProdi("C-Manajemen");
$mahasiswa[2]->setFakultas("C-Fakultas Ekonomi dan Bisnis ");
$mahasiswa[2]->setJenjang("S1");
$mahasiswa[2]->setStatusMhs("Terdaftar");
$mahasiswa[2]->setJKelamin("Perempuan");
$mahasiswa[2]->setAgama("Islam");
$mahasiswa[2]->setSmtAwal("2019-Ganjil");
$mahasiswa[2]->setAsalSekolah("SMAN 1 Solokanjeruk, Kabupaten Bandung");
$mahasiswa[2]->setNoSeriIjazah("DN-Dp/13 1279081");
$mahasiswa[2]->setTinggiBadan(160);
$mahasiswa[2]->setBeratBadan(77);
$mahasiswa[2]->setGaris("  ");

// ini merupakan data keempat //
// set dimulai nama, nim, prodi, fakultas, jenjang, status mhs, j.kelamin, agama, smt awal, asal sekolah, no seri ijazah, tinggi badan, dan berat badan //
$mahasiswa[3]->setNama("Sinta Rahayu, S.Hum");
$mahasiswa[3]->setNim("2001652");
$mahasiswa[3]->setProdi("F-Sastra Inggris");
$mahasiswa[3]->setFakultas("F-Fakultas Bahasa dan Sastra");
$mahasiswa[3]->setJenjang("S2");
$mahasiswa[3]->setStatusMhs("Cuti Akademik");
$mahasiswa[3]->setJKelamin("Perempuan");
$mahasiswa[3]->setAgama("Islam");
$mahasiswa[3]->setSmtAwal("2020-Ganjil");
$mahasiswa[3]->setAsalSekolah("SMAN 1 Sangkan, Kabupaten Bandung Barat");
$mahasiswa[3]->setNoSeriIjazah("DN-Dp/06 8906529");
$mahasiswa[3]->setTinggiBadan(120);
$mahasiswa[3]->setBeratBadan(53);
$mahasiswa[3]->setGaris(" ... <br></br>");
$mahasiswa[3]->setGaris(" ... <br></br>");
$mahasiswa[3]->setGaris(" ... <br></br>");

// ini merupakan data kelima //
// set dimulai nama, nim, prodi, fakultas, jenjang, status mhs, j.kelamin, agama, smt awal, asal sekolah, no seri ijazah, tinggi badan, dan berat badan //
$mahasiswa[4]->setNama("Dra. Hj. Intan Rara Juliana, M.Sc.");
$mahasiswa[4]->setNim("2105268");
$mahasiswa[4]->setProdi("G-Ilmu Pemerintahan");
$mahasiswa[4]->setFakultas("G-Fakultas Ilmu Sosial dan Ilmu Politik");
$mahasiswa[4]->setJenjang("S3");
$mahasiswa[4]->setStatusMhs("Terdaftar");
$mahasiswa[4]->setJKelamin("Perempuan");
$mahasiswa[4]->setAgama("Islam");
$mahasiswa[4]->setSmtAwal("2021-Ganjil");
$mahasiswa[4]->setAsalSekolah("SMAN 1 Ebah Kabupaten Tasikmalaya, Universitas Pendidikan Indonesia, University of Birmingham, Inggris Raya");
$mahasiswa[4]->setNoSeriIjazah("LN-Lp/18 2789172540399546");
$mahasiswa[4]->setTinggiBadan(115);
$mahasiswa[4]->setBeratBadan(59);
$mahasiswa[4]->setGaris("  ");

// ini merupakan bagian untuk menampilkan data, agar data terlihat rapih//
echo "<table>";
echo "<H4> Biodata Mahasiswa </H4>";        // bernama Biodata Mahasiswa //
foreach($mahasiswa as $mhs) {  
    // ============================= Getter digunakan ============================================== //
    echo "<tr><td>1. Nama</td><td>:</td><td>" . $mhs->getNama() . "</td></tr>";                                 //tampilkan nama //
    echo "<tr><td>2. Nomor Induk Mahasiswa (NIM)</td><td>:</td><td>" . $mhs->getNim() . "</td></tr>";           //tampilkan nim //
    echo "<tr><td>3. Program Studi</td><td>:</td><td>" . $mhs->getProdi() . "</td></tr>";                       //tampilkan prodi //
    echo "<tr><td>4. Fakultas</td><td>:</td><td>" . $mhs->getFakultas() . "</td></tr>";                         //tampilkan fakultas //
    echo "<tr><td>5. Jenjang</td><td>:</td><td>" . $mhs->getJenjang() . "</td></tr>";                           //tampilkan jenjang //
    echo "<tr><td>6. Status Mahasiswa</td><td>:</td><td>" . $mhs->getStatusMhs() . "</td></tr>";                //tampilkan status mahasiswa //
    echo "<tr><td>7. Jenis Kelamin</td><td>:</td><td>" . $mhs->getJKelamin() . "</td></tr>";                    // tampilkan jenis kelamin //
    echo "<tr><td>8. Agama</td><td>:</td><td>" . $mhs->getAgama() . "</td></tr>";                               // tampilkan agama //
    echo "<tr><td>9. Semester Awal</td><td>:</td><td>" . $mhs->getSmtAwal() . "</td></tr>";                     // tampilkan smt awal //
    echo "<tr><td>10. Asal Sekolah</td><td>:</td><td>" . $mhs->getAsalSekolah() . "</td></tr>";                 // tampilkan asal sekolah //
    echo "<tr><td>11. Nomor Seri Ijazah</td><td>:</td><td>" . $mhs->getNoSeriIjazah() . "</td></tr>";           // tampilkan no seri ijazah //
    echo "<tr><td>12. Tinggi Badan</td><td>:</td><td>" . $mhs->getTinggiBadan() . "</td></tr>";                 // tampilkan tinggi badan //
    echo "<tr><td>13. Berat Badan</td><td>:</td><td>" . $mhs->getBeratBadan() . "</td></tr>";                   // tampilkan berat badan ///
    echo "<tr><td></td><td><br></br></td><td>" . $mhs->getGaris() . "</td></tr>";                               // ini untuk garis sedemikian sehingga, asumsinya datanya banyak sehingga disimbolkan dengan '...' // 
}
echo "</table>";

// ====================================================== FOOTER ========================================================= //
echo "<p> ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>"; 
echo "<h4><center> COPYRIGHT © 2023. IBNU ADENG KURNIA </center></h4>";
echo "<h4><center> All Rights Reserved </center></h4>";
echo "<p> ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>";
?>