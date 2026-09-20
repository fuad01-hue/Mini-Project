# Mini Project 1: Product Information System (Desain)

Proyek ini berfokus pada pematangan cetak biru (*blueprint*) dan desain konseptual arsitektur 3-tier (*Layered Architecture*) untuk Sistem Informasi Manajemen Data Produk menggunakan PHP[cite: 1].

---

## 🏛️ Komponen Arsitektur Desain Konseptual

Sistem ini dirancang menggunakan prinsip pemisahan tanggung jawab (*Separation of Concerns*) yang terbagi menjadi 3 lapisan utama[cite: 1]:

1. **Data Layer (`products.php`)**
   * Berkas penampung *multidimensional array* yang menyimpan data komoditas produk[cite: 1].
   * Menyimpan atribut: `ID`, `Nama`, `Kategori`, `Harga`, `Stok`, dan `Deskripsi`[cite: 1].

2. **Processing Layer (`functions.php`)**
   * Berisi fungsi `hitungTotalNilaiStok()` untuk mengalkulasi total nilai aset gudang[cite: 1].
   * Berisi logika kondisional untuk menyaring warna baris tabel jika status stok dalam kondisi kritis (`stok < 3`)[cite: 1].

3. **Presentation Layer (`index.php`)**
   * Merajut seluruh komponen menggunakan `require_once`[cite: 1].
   * Merender data ke dalam layout tabel HTML via perulangan `foreach`[cite: 1].

---

## 📂 Struktur Berkas

```text
.
├── products.php      # Data Layer (Menyimpan array data produk)
├── functions.php     # Processing Layer (Logika bisnis & kalkulasi)
├── index.php         # Presentation Layer (Tampilan antarmuka tabel)
└── README.md         # Dokumentasi & Jawaban Sesi Evaluasi
