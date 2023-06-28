<?php
// Mengambil data email dari form
$email = $_POST['email'];

// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phortofolio_form";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Membuat tabel jika belum ada
$sql = "CREATE TABLE IF NOT EXISTS emails (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === false) {
    echo "Error creating table: " . $conn->error;
}

// Menyisipkan email ke dalam tabel
$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

if ($conn->query($sql) === true) {
    echo "Email berhasil disimpan dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
