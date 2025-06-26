<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

    <a href="../../index.php">Landing page</a><br>
    <a href="Untitled-1.php">nilai predikat</a>

    <h2>Form Diskon Pembayaran Mahasiswa</h2>
    <form method="post">
        NPM: <input type="text" name="npm"><br><br>
        Nama: <input type="text" name="nama"><br><br>
        Prodi: <input type="text" name="prodi"><br><br>
        Semester: <input type="number" name="semester"><br><br>
        Biaya UKT (Rp): <input type="number" name="ukt"><br><br>
        <input type="submit" value="Hitung">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = (int)$_POST['semester'];
    $biaya_ukt = (int)$_POST['ukt'];
    $diskon = 0;

    if ($biaya_ukt >= 5000000) {
        if ($semester > 8) {
            $diskon = 15;
        } else {
            $diskon = 10;
        }
    }

    $jumlah_diskon = $biaya_ukt * $diskon / 100;
    $total_bayar = $biaya_ukt - $jumlah_diskon;

    echo "<h3>Luaran yang Diharuskan</h3>";
    echo "NPM : $npm <br>";
    echo "NAMA : $nama <br>";
    echo "PRODI : $prodi <br>";
    echo "SEMESTER : $semester <br>";
    echo "BIAYA UKT : Rp. " . number_format($biaya_ukt, 0, ',', '.') . ",-<br>";
    echo "DISKON : $diskon%<br>";
    echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-<br>";
}

?>
</body>
</html>
