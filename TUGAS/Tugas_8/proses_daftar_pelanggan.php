<?php
   include 'koneksi_db.php'; // Koneksi database


   // Inisialisasi variabel pencarian
    $search_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
    $search_telepon = isset($_GET['telepon']) ? $_GET['telepon'] : '';


   // Query untuk menampilkan daftar buku dengan filter pencarian
   $query = "SELECT * FROM pelanggan WHERE 1=1";
    if (!empty($search_nama)) {
        $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
    }
    if (!empty($search_telepon)) {
    $query .= " AND Telepon = " . $conn->real_escape_string($search_telepon);
}

    $result = $conn->query($query);
?>