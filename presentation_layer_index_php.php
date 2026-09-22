<?php

require_once 'products.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fafb;
            color: #333;
            padding: 2rem;
        }
        h1 {
            color: #1f2937;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            background-color: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #e5e7eb;
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #f3f4f6;
            font-weight: 600;
        }
        /* Pewarnaan kondisional untuk stok kritis */
        .stok-kritis {
            background-color: #fef2f2;
            color: #991b1b;
        }
        .stok-kritis td {
            border-color: #fca5a5;
        }
        .badge {
            background-color: #ef4444;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 0.8em;
            font-weight: bold;
            margin-left: 5px;
        }
    </style>
</head>
<body>

    <h1>📦 Daftar Komoditas Produk</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Total Nilai Aset</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): 
                // Kalkulasi nilai aset
                $totalNilai = hitungTotalNilaiStok($product['Harga'], $product['Stok']);
                
                // Menentukan kelas CSS jika stok kritis
                $kritis = isStokKritis($product['Stok']);
                $rowClass = $kritis ? 'stok-kritis' : '';
            ?>
            <tr class="<?= $rowClass ?>">
                <td><?= $product['ID'] ?></td>
                <td><?= $product['Nama'] ?></td>
                <td><?= $product['Kategori'] ?></td>
                <td><?= formatRupiah($product['Harga']) ?></td>
                <td>
                    <?= $product['Stok'] ?>
                    <?php if ($kritis): ?>
                        <span class="badge">Kritis</span>
                    <?php endif; ?>
                </td>
                <td><?= formatRupiah($totalNilai) ?></td>
                <td><?= $product['Deskripsi'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
