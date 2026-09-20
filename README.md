# 🚀 Mini Project 1: Product Information System

Tugas proyek kecil-kecilan buat belajar konsep **3-Tier Architecture** (Arsitektur 3 Lapis) di PHP[cite: 1]. Di sesi ini, fokus utamanya bukan langsung bikin web yang kompleks, tapi lebih ke **pematangan konsep dan alur logisnya dulu** (*Sesi Tanpa Coding / Pengetikan Kode*)[cite: 1].

---

## 💡 Gimana Sistem Ini Dirancang?

Jadi, sistem ini dibikin terpisah jadi 3 file biar kodenya rapi dan nggak numpuk di satu tempat (*Separation of Concerns*)[cite: 1]:

1. **`products.php` (Data Layer)** 📦
   * Berkas buat menampung data produk[cite: 1]. 
   * Pakai *multidimensional array* yang isinya detail produk kayak ID, Nama, Kategori, Harga, Stok, dan Deskripsi[cite: 1].

2. **`functions.php` (Processing Layer)** ⚙️
   * Berkas tempat logika atau "otak" aplikasi[cite: 1].
   * Isinya fungsi `hitungTotalNilaiStok()` buat ngitung total aset gudang, plus logika pengondisian buat nandain kalau ada produk yang stoknya mau habis (`stok < 3`)[cite: 1].

3. **`index.php` (Presentation Layer)** 🖥️
   * Berkas tampilan utama yang diakses di browser[cite: 1].
   * Tinggal panggil dua berkas di atas pakai `require_once`, terus tampilkan datanya ke tabel HTML pakai perulangan `foreach`[cite: 1].

---

## 📁 Struktur Folder Proyek

```text
.
├── products.php      # Tempat simpan array data produk
├── functions.php     # Tempat fungsi perhitungan & logika
├── index.php         # Tampilan tabel HTML
└── README.md         # Catatan tugas & jawaban evaluasi
