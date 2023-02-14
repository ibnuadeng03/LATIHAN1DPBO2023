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

#include <iostream>
#include <bits/stdc++.h>
#include <string>

using namespace std;

// ------------------------ // ^_^ Membuat kelas dengan nama DataPodik ^_^ // ------------------------ //
class DataPodik {
    // ------------------------ // kelas pertama ialah private // ------------------------ //
	private:
        // atribute class private //
		string fakultas;				// fakultas //
        string programStudi;			//  prodi  //
        int tahunMasuk;					// TahunMasuk //
        vector<string> mahasiswa;		// mahasiswa //
	
	// ------------------------ // kelas kedua ialah public // ------------------------ //
    public:
        // ------------------------ // konstruktor // ------------------------ //
		DataPodik() {}
        DataPodik(string fakultas, string programStudi, int tahunMasuk, vector<string> mahasiswa) {
            this->fakultas = fakultas;
            this->programStudi = programStudi;
            this->tahunMasuk = tahunMasuk;
            this->mahasiswa.insert(this->mahasiswa.end(), mahasiswa.begin(), mahasiswa.end());
        }
		
		// ------------------------ // SETTER AND GETTER // ------------------------ //
		// ------------------------ // mengeset dan mengembalikan untuk fakultas // ------------------------ //
        void setFakultas(string fakultas) {
            this->fakultas = fakultas;
        }

        string getFakultas() {
            return this->fakultas;
        }
		
		// ------------------------ // mengeset dan mengembalikan untuk prodi // ------------------------ //
        void setProgramStudi(string programStudi) {
            this->programStudi = programStudi;
        }

        string getProgramStudi() {
            return this-> programStudi;
        }
		
		// ------------------------ // mengeset dan mengembalikan untuk tahun masuk // ------------------------ //
        void setTahunMasuk(int tahunMasuk) {
            this->tahunMasuk = tahunMasuk;
        }

        int getTahunMasuk() {
            return this->tahunMasuk;
        }
		
		
		// ------------------------ // untuk menghapus mahasiswa // ------------------------ //
        void delMahasiswa(string mahasiswa) {
            vector<string>::iterator it;
            it = find(this->mahasiswa.begin(), this->mahasiswa.end(), mahasiswa);
            this->mahasiswa.erase(this->mahasiswa.begin()+(it - this->mahasiswa.begin()));
        }
        
		// ------------------------ // untuk menambah mahasiswa // ------------------------ //
        void addNewMahasiswa(string mahasiswa) {
            this->mahasiswa.push_back(mahasiswa);
        }
		
		// ------------------------ // untuk mengembalikan mahasiswa // ------------------------ //
        vector<string> getMahasiswa() {
            return this->mahasiswa;
        }
		
		// ------------------------ // untuk menampilkan data daftar mahasiswa // ------------------------ //
        void cetakMahasiswa() {
            if(!this->mahasiswa.empty()) {
                cout << "Daftar Mahasiswa:" << endl;
                for(int i = 0; i < this->mahasiswa.size(); i++) {
                    cout <<   i+1 << ". " << this->mahasiswa[i] << endl;
                }
            } else {
                cout << "  Mahasiswa tidak ada/Belum terdaftar." << endl;
            }
        }
        
        // ------------------------ // untuk menampilkan perubahan data mahasiswa  // ------------------------ //
        void getDataMahasiswa(int fakultasNo) {
        	cout << endl << "\n === HASIL PERUBAHAN ===";
            cout << endl << "+-------------- Fakultas yang diubah No-" << fakultasNo << " --------------+" << endl;
            cout << "Fakultas      : " << this->fakultas << endl;
            cout << "Program Studi : " << this->programStudi << endl;
            cout << "Tahun Masuk   : " << this->tahunMasuk << endl;
            cetakMahasiswa();
            cout << "+-------------------------------------------------------+" << endl << endl;
        }

        ~DataPodik() {}			// Destruktor //
};
