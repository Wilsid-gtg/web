<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $imam_id = $_POST['imam_id'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $alamat = $_POST['alamat'];
    $sub_total = $_POST['sub_total'];
    $diskon = $_POST['diskon'];
    $total_akhir = $_POST['total_akhir'];
    $metode_pembayaran = $_POST['metode_pembayaran'];

    $sql = "INSERT INTO detailpemesanan (user_id, imam_id, tanggal_mulai, tanggal_selesai, alamat, sub_total, diskon, total_akhir, metode_pembayaran) 
            VALUES ('$user_id', '$imam_id', '$tanggal_mulai', '$tanggal_selesai', '$alamat', '$sub_total', '$diskon', '$total_akhir', '$metode_pembayaran')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
