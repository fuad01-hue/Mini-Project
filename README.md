# Sistem Informasi Produk

Sistem Informasi Produk berbasis web sederhana yang dikembangkan dengan PHP. Proyek ini mengimplementasikan konsep pemisahan tanggung jawab (Separation of Concerns) untuk menjaga keteraturan dan kemudahan pemeliharaan kode.

## Fitur Utama

Menampilkan daftar komoditas produk secara dinamis.

Kalkulasi otomatis total nilai aset produk di gudang berdasarkan harga dan ketersediaan.

Indikator visual otomatis untuk item dengan stok kritis (Stok < 3).

## Struktur Utama

Sistem dibangun berdasarkan 3 komponen utama:

products.php - Penyimpanan data (Data Layer).

functions.php - Pemrosesan logika (Processing Layer).

index.php - Tampilan antarmuka (Presentation Layer).

Catatan: Untuk detail arsitektur logis dan desain sistem secara mendalam, silakan merujuk pada file BLUEPRINT.md.

## Cara Penggunaan

Pastikan server lokal (seperti XAMPP, MAMP, atau Laragon) sudah berjalan.

Tempatkan folder proyek di dalam direktori htdocs (XAMPP) atau www (Laragon/WAMP).

Buka browser dan akses http://localhost/nama-folder-proyek.
