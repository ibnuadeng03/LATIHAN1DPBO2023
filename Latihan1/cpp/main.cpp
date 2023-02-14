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

#include <bits/stdc++.h>
#include "DataPodik.cpp"

using namespace std;

int main() {
    // ------------------------ // pendeklarasian // ------------------------ //
	int jmlFak;						
    vector<DataPodik> fak;			
    string fakultas = "";		
    string programStudi = "";
    int tahunMasuk;
    int n;
    char lanjut;

	// ------------------------------------------ // Header Program // --------------------------------------------------------------- //
    cout << "\n                         KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI" << endl;
    cout << "                              PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)" << endl;
    cout << "                                PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)" << endl;
    cout << "                                   DIREKTORAT JENDERAL PENDIDIKAN TINGI" << endl;
    cout << "                  Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan" << endl;
    cout << "                      Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman," << endl;
    cout << "                                   Pintu 1 Senayan, Jakarta Pusat 10270" << endl;
    cout << "       Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id" << endl;
    cout << "=========================================================================================================\n" << endl;
    
    cout << "              Selamat Datang Bapak/Ibu diportal Pangkalan Data Pendidikan Tinggi (PDDikti)  "<< endl;
    cout << "                  PUSDATIN KEMENDIKBUDRISTEKDIKTI Direktorat Jenderal Pendidikan Tinggi"<< endl;
    
    cout << "---------------------------------------------------------------------------------------------------------\n"<< endl;
    cout << "                                              DATA POKOK PENDIDIKAN"<< endl;
    cout << "                                            UNIVERSITAS IKATAN BATIN "<< endl;
    cout << "                                         TAHUN PEMBAHARUAN 2022/2023-Genap" << endl;
    cout << "---------------------------------------------------------------------------------------------------------\n"<< endl;
    
	// ------------------------ // meminta inputan untuk jumlah fakultas yg hendak diinputkan // ------------------------ //
	cout << "Silakan Tentukan Jumlah Fakultas Yang Akan diInputkan: ";
    cin >> jmlFak;
    cout << endl;
	
	// ------------------------ // pengisian data yg diperlukan // ------------------------ //
    for(int i = 0; i < jmlFak; i++) {
        cout << "         \nPILIHAN ANDA      " << endl;
        cout << "ISI Fakultas Ke- " << i+1 << " " << endl;
        cout << " > Nama Fakultas    : ";
        cin >> fakultas;
        cout << " > Program Studi    : ";
        cin >> programStudi;
        cout << " > Tahun Masuk      : ";
        cin >> tahunMasuk;
        cout << " > Jumlah Mahasiswa : ";
        cin >> n;
        vector<string> mahasiswa;
        // ------------------------ // format posisi data  // ------------------------ //
		for(int j = 0; j < n; j++) {
            string p = "";
            cout << "   " << j+1 << ". ";
            cin >> p;
            mahasiswa.push_back(p);
        }
        // ------------------------ // masuk data berdasarkan urutan // ------------------------ //
		DataPodik t(fakultas, programStudi, tahunMasuk, mahasiswa);
        fak.push_back(t);
    }
	
	// ------------------------ // menampilkan banyaknya fakultas yg telah dinputkan // ------------------------ //
	cout << "\n\n======================" ;
    cout << endl << "Daftar Nama Fakultas :" << endl;
	cout << "======================\n" ;
	
	// ------------------------ // format/tata letak banyaknya fakultas yg telah dinputkan // ------------------------ //
    for(int i = 0; i < jmlFak; i++) {
        cout << i+1 << ". " << fak[i].getFakultas() << endl;
    }
	
	// ------------------------ // ini merupakan menu untuk melakukan perubahan data (ubah nama fak, prodi, thn masuk, menambah mhs dan menghapus mhs // ------------------------ //
    do {
        cout << "\n\n----------------------------------------------------------------------------------------" ;
		cout << endl << "Jika dirasa ada kekeliruan, silakan gunakan menu ini untuk melakukan perubahan." << endl;
		cout << endl << " ++++++++ Menu AKSI ++++++++ " << endl;
        int idFak = 0;
        cout << " > Pilih Nomor Fakultas : ";
        cin >> idFak;
        cout << "   1. Ubah Nama Fakultas" << endl;
        cout << "   2. Ubah Program Studi" << endl;
        cout << "   3. Ubah Tahun Masuk" << endl;
        cout << "   4. Tambah Mahasiswa" << endl;
        cout << "   5. Hapus Mahasiswa" << endl;

        // ------------------------ // memilih menu yg akan diubah // ------------------------ //
		int pilihan = 0;
        cout << " > Pilihan  Menu : ";
        cin >> pilihan;

        switch (pilihan) {
            // ------------------------ // pilihan ke-1 : jika mengubah nama fakultas // ------------------------ //
			case 1: {
                cout << "   Ubah nama Fakultas menjadi :";
                cin >> fakultas;
                fak[idFak-1].setFakultas(fakultas);
                break;
            }
            
			// ------------------------ // pilihan ke-2 : jika mengubah nama prodi // ------------------------ //
            case 2: {
                cout << "   Ubah nama Program Studi menjadi : ";
                cin >> programStudi;
                fak[idFak-1].setProgramStudi(programStudi);
                break;
            }
            
			// ------------------------ // pilihan 3 : jika mengubah nama tahun masuk // ------------------------ //
			case 3: {
                cout << "   Ubah nama Tahun Masuk menjadi : ";
                cin >> tahunMasuk;
                fak[idFak-1].setTahunMasuk(tahunMasuk);
                break;
            }
            
			// ------------------------ // pilihan 4 : jika menambah mahasiswa // ------------------------ //
			case 4: {
                cout << "   Nama Mahasiswa yang akan ditambahkan : ";
                string q;
                cin >> q;
                fak[idFak-1].addNewMahasiswa(q);
                break;
            }
            
			// ------------------------ // pilihan 5 : jika menghapus mahasiswa // ------------------------ //
			case 5: {
                cout << "   Nama Mahasiswa yang akan dihapus : ";
                string q;
                cin >> q;
                fak[idFak-1].delMahasiswa(q);
                break;
            }
            // ------------------------ // selain dri yg disebutkan // ------------------------ //
			default:
                break;
        }

        fak[idFak-1].getDataMahasiswa(idFak);
		
		// ------------------------ // pilihan jika hendak lanjut mengubah kembali atau selesai // ------------------------ //
        cout << "Apakah Anda ingin melanjutkan? (y/t) : \n";
        cin >> lanjut;
    } while(lanjut == 'y' || lanjut == 'Y');
		
		// ------------------------ // footer // ------------------------ //
		cout << endl << "\n         Copyrigt 2023. IBNU ADENG KURNIA";
		cout << endl << "                All Rights Reserved\n";
    return 0;
}
