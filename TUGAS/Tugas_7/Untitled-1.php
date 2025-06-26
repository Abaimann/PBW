<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
<a href="../../index.php">Landing page</a><br>
<a href="Untitled-2.php">Diskon-pembayaran-mahasiswa</a>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br>
    Nilai: <input type="number" name="nilai"><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $predikat = "";
    $status = "";

    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75) {
        $predikat = "B";
    } elseif ($nilai >= 65) {
        $predikat = "C";
    } elseif ($nilai >= 50) {
        $predikat = "D";
    } elseif ($nilai >= 0) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    if ($predikat == "A" || $predikat == "B" || $predikat == "C") {
        $status = "Lulus";
    } elseif ($predikat == "D" || $predikat == "E") {
        $status = "Tidak Lulus";
    } else {
        $status = "-";
    }

    echo "<hr>";
    echo "Nama : $nama <br>";
    echo "Nilai : $nilai <br>";
    echo "Predikat : $predikat <br>";
    echo "Status : $status <br>";
}
?>

</body>
</html>