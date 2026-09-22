System Architecture & Design Blueprint

Dokumen ini memuat desain konseptual dan cetak biru arsitektur logis dari Sistem Informasi Produk. Sistem dirancang agar dapat diukur (scalable) dan mudah dikelola sebelum memasuki tahap integrasi basis data tingkat lanjut.

Arsitektur Sistem (3-Tier Architecture Concept)

Proyek ini membagi sistem ke dalam 3 lapisan utama untuk menjaga keteraturan struktur kode dan pemisahan tanggung jawab (Separation of Concerns).

├── 1. Data Layer          --> products.php  (Menyimpan array data produk)
├── 2. Processing Layer    --> functions.php (Fungsi kalkulasi & logika bisnis)
└── 3. Presentation Layer  --> index.php     (Antarmuka tabel HTML)


 \Komponen Arsitektur Desain

1. Data Layer (products.php)

Berfungsi sebagai tempat penyimpanan data komoditas produk sementara dalam bentuk Multidimensional Array. Lapisan ini bertindak sebagai basis data statis sebelum sistem diintegrasikan secara penuh dengan Database SQL.

Atribut Data:

ID: Unique Identifier / Kode Unik Produk.

Nama: Nama Produk.

Kategori: Jenis / Kelompok Produk.

Harga: Harga Satuan produk.

Stok: Jumlah Ketersediaan di gudang.

Deskripsi: Keterangan ringkas mengenai produk.

2. Processing Layer (functions.php)

Berfungsi sebagai modul logika bisnis dan pusat pemrosesan data sistem. Semua kalkulasi dan aturan kondisional dieksekusi di lapisan ini.

Fitur & Logika Utama:

hitungTotalNilaiStok(): Fungsi kalkulasi matematika untuk menghitung total nilai aset produk di gudang (Rumus: Total = Harga * Stok).

Conditional Logic (Stok Kritis): Aturan sistem yang memeriksa ambang batas ketersediaan barang secara iteratif. Jika Stok < 3, sistem akan memberikan flag pada baris data tersebut untuk memicu penyesuaian visual (highlight/alert) di lapisan presentasi.

3. Presentation Layer (index.php)

Berfungsi sebagai antarmuka pengguna (UI) untuk merender dan menampilkan informasi data kepada pengguna akhir di browser. Lapisan ini murni menangani tampilan tanpa menyertakan deklarasi data atau logika kalkulasi berat.

Integrasi & Rendering:

Dependencies Injection: Menghubungkan seluruh lapisan komponen menggunakan instruksi require_once untuk memuat data dari products.php dan modul dari functions.php.

Dynamic HTML Rendering: Menampilkan data ke dalam elemen Tabel HTML secara dinamis menggunakan perulangan (foreach).

Conditional UI State: Menerapkan instruksi CSS/pewarnaan kondisional pada baris tabel secara spesifik berdasarkan hasil pengecekan status stok kritis dari Processing Layer.
