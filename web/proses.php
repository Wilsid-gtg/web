<?php
$servername = "localhost";
$username = "root";
$password = ""; // Ubah jika MySQL Anda punya password
$database = "db_imamku";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['massage'];

// Simpan ke database
$sql = "INSERT INTO kontak (first_name, last_name, email, message) VALUES ('$first_name', '$last_name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Pesan berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
