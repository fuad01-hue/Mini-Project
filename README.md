# Mini Project 1: Product Information System (Konsep & Desain)

Proyek ini merupakan implementasi dasar dari Sistem Informasi Manajemen Produk menggunakan bahasa pemrograman PHP murni (Native). Proyek ini dikembangkan sebagai bagian dari tugas Mini Project 1 untuk memahami konsep dasar perancangan sistem sebelum masuk ke tahap penulisan kode (coding)[cite: 1]. 

Fokus utama dari repositori ini adalah penerapan 3-Tier Architecture (Arsitektur Tiga Lapis) untuk melatih prinsip Separation of Concerns (pemisahan tanggung jawab kode) agar aplikasi lebih modular, rapi, dan mudah dikembangkan[cite: 1].

---

## Fitur dan Alur Sistem

Meskipun masih dalam tahap desain cetak biru (blueprint), sistem ini dirancang untuk dapat melakukan hal-hal berikut[cite: 1]:
1. Penyimpanan Data Terstruktur: Menggunakan array multidimensi untuk menampung data komoditas produk beserta atribut kelengkapannya[cite: 1].
2. Kalkulasi Otomatis: Menghitung total nilai aset gudang berdasarkan jumlah stok dan harga masing-masing produk[cite: 1].
3. Peringatan Stok Kritis: Memberikan penanda khusus pada antarmuka pengguna jika ada produk yang stoknya tersisa kurang dari 3 unit[cite: 1].

---

## Desain Arsitektur Sistem

Untuk menghindari penumpukan kode dalam satu file, sistem ini dipecah menjadi tiga lapisan utama[cite: 1]:

* 1. Data Layer (`products.php`)
  Bertugas khusus sebagai tempat penyimpanan data statis. Semua data komoditas produk disimpan di sini dalam bentuk multidimensional array agar mudah dikelola dan dipanggil oleh file lain[cite: 1].
  
* 2. Processing Layer (`functions.php`)
  Bertindak sebagai pusat logika aplikasi. File ini tidak mengurus tampilan maupun menyimpan data mentah, melainkan hanya berisi kumpulan fungsi logika. Contohnya adalah fungsi `hitungTotalNilaiStok()` dan logika pengondisian (if/else) untuk mengecek status stok kritis[cite: 1].

* 3. Presentation Layer (`index.php`)
  Berfungsi sebagai antarmuka pengguna (User Interface). File ini akan mengimpor data dari `products.php` dan logika dari `functions.php` menggunakan perintah `require_once`, lalu merendernya ke dalam layout tabel HTML menggunakan perulangan `foreach`[cite: 1].

---

## Struktur Repositori

```text
.
├── products.php             # File Data Layer (Database array sementara)
├── functions.php            # File Processing Layer (Fungsi & Logika bisnis)
├── index.php                # File Presentation Layer (Tampilan UI/HTML)
├── PRD_dan_Perencanaan.md   # Dokumen rincian arsitektur & jawaban evaluasi kelas
└── README.md                # Dokumentasi utama proyek
