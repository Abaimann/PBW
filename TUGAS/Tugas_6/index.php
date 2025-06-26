<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;  
            border: 1px solid #444;
            background-color: #fff;
        }

        h2 {
            font-weight: bold;
            border-bottom: 1px solid #444;
            padding-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }

        strong {
            font-size: 1.1em;
        }

        input, select {
            margin: 5px 0 10px;
            padding: 5px;
            width: 100%;
        }

        button {
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="../../index.html">Landing page</a>
    <div class="container">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>

        <form method="post">
            <label for="namaBarang">Pilih Barang:</label>
            <select name="namaBarang" id="namaBarang" required>
                <option value="Keyboard">Keyboard</option>
                <option value="Mouse">Mouse</option>
                <option value="Monitor">Monitor</option>
            </select>

            <label for="jumlahBeli">Jumlah Beli:</label>
            <input type="number" name="jumlahBeli" id="jumlahBeli" min="1" required>

            <button type="submit">Hitung Total</button>
        </form>

        <?php
        // Data harga barang
        $barang = [
            "Keyboard" => 150000,
            "Mouse" => 100000,
            "Monitor" => 1000000
        ];

        // Konstanta Pajak
        define("PAJAK", 0.10);

        // Format angka ke rupiah
        function rupiah($angka) {
            return "Rp " . number_format($angka, 0, ',', '.');
        }

        // Proses form jika disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namaBarang = $_POST['namaBarang'];
            $jumlahBeli = (int)$_POST['jumlahBeli'];
            $hargaSatuan = $barang[$namaBarang];

            $totalSebelumPajak = $hargaSatuan * $jumlahBeli;
            $pajak = $totalSebelumPajak * PAJAK;
            $totalBayar = $totalSebelumPajak + $pajak;

            echo "<hr>";
            echo "<p>Nama Barang: $namaBarang</p>";
            echo "<p>Harga Satuan: " . rupiah($hargaSatuan) . "</p>";
            echo "<p>Jumlah Beli: $jumlahBeli</p>";
            echo "<p>Total Harga (Sebelum Pajak): " . rupiah($totalSebelumPajak) . "</p>";
            echo "<p>Pajak (10%): " . rupiah($pajak) . "</p>";
            echo "<p><strong>Total Bayar: " . rupiah($totalBayar) . "</strong></p>";
        }
        ?>
    </div>
</body>
</html>
