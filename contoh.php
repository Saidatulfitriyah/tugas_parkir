
int main() {
	//Inisialisasi variabel
	int jenis, lama, harga, tambahan, jam_berikutnya;
	
	cout<<"PROGRAM C++ TARIF PARKIR KENDARAAN"<<endl;
	cout<<"1. Mobil"<<endl;
	cout<<"2. Motor"<<endl;
	cout<<endl;
	cout<<"Masukan Jenis Kendaraan       : ";
	cin>>jenis;
	//Pemilihan dengan switch case
	switch (jenis){
		case 1  : 
			harga=3000;
			tambahan=1000;
			break;
		case 2  :
			harga=2000;
			tambahan=500;
			break;
		default :
			harga=0;		
	}

	cout<<"Masukan Lama Parkir (Per Jam) : ";
	cin>>lama;
	//Kondisi percabangan
	if (lama>2){
		jam_berikutnya=((lama-2)*tambahan);
	}else {
		jam_berikutnya=0;
	}
	//Menampilkan Hasil
	cout<<"------------------------------------"<<endl;
	cout<<"2 Jam Pertama  Rp:"<<harga<<endl;
	cout<<"Jam Berikutnya Rp:"<<jam_berikutnya<<endl;
	cout<<"Total Bayar    Rp:"<<harga+jam_berikutnya<<endl;