# Product Information System - System Architecture & Design Blueprint

Sistem Informasi Produk berbasis web sederhana yang dirancang menggunakan arsitektur 3-Layer (Data, Processing, Presentation) dengan PHP. Repositori ini berisi dokumen desain konseptual dan cetak biru arsitektur logis sistem sebelum tahap implementasi kode.

---

##  Arsitektur Sistem

Proyek ini membagi sistem ke dalam 3 lapisan utama (*3-tier architecture concept*) untuk menjaga keteraturan struktur kode dan pemisahan tanggung jawab (*Separation of Concerns*):

```
├── 1. Data Layer          --> products.php  (Menyimpan array data produk)
├── 2. Processing Layer    --> functions.php (Fungsi kalkulasi & logika bisnis)
└── 3. Presentation Layer  --> index.php     (Antarmuka tabel HTML)
```

---

##  Komponen Arsitektur Desain

### 1. Data Layer (`products.php`)
Berfungsi sebagai tempat penyimpanan data komoditas produk sementara dalam bentuk **Multidimensional Array** (sebelum diintegrasikan dengan Database SQL).
* **Atribut Data:**
  * `ID` (Unique Identifier)
  * `Nama` (Nama Produk)
  * `Kategori` (Jenis / Kelompok Produk)
  * `Harga` (Harga Satuan)
  * `Stok` (Jumlah Ketersediaan)
  * `Deskripsi` (Keterangan Ringkas)

### 2. Processing Layer (`functions.php`)
Berfungsi sebagai modul logika bisnis dan pemrosesan data sistem.
* **Fitur & Logika Utama:**
  * `hitungTotalNilaiStok()`: Fungsi kalkulasi untuk menghitung total nilai aset produk di gudang ($Total = Harga \times Stok$).
  * **Conditional Logic (Stok Kritis):** Memeriksa ambang batas ketersediaan barang. Jika `Stok < 3`, sistem akan menandai baris data tersebut untuk penyesuaian visual (*highlight/alert*).

### 3. Presentation Layer (`index.php`)
Berfungsi sebagai antarmuka pengguna (UI) untuk menampilkan data produk kepada pengguna akhir.
* **Integrasi & Rendering:**
  * Menghubungkan seluruh komponen menggunakan instruksi `require_once` untuk memuat `products.php` dan `functions.php`.
  * Merender data ke dalam bentuk **Tabel HTML** secara dinamis menggunakan perulangan (`foreach`).
  * Menerapkan pewarnaan kondisional pada baris tabel berdasarkan status stok kritis.

---

##  Catatan Pengembangan
* Sesi ini berfokus pada **pemetaan dan pematangan cetak biru (blueprint)** arsitektur desain secara logis.
* Implementasi baris kode (*coding*) dilakukan pada tahap pengembangan selanjutnya.
