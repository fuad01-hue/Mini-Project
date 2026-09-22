<?php
// Processing Layer - Fungsi kalkulasi & logika bisnis

/**
 * Menghitung total nilai aset berdasarkan harga satuan dan jumlah stok
 */
function hitungTotalNilaiStok($harga, $stok) {
    return $harga * $stok;
}

/**
 * Mengecek apakah stok berada pada ambang batas kritis (Stok < 3)
 */
function isStokKritis($stok) {
    return $stok < 3;
}

/**
 * Memformat angka menjadi format mata uang Rupiah
 */
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}