<?php
header('Content-Type: application/json'); // Menetapkan tipe konten sebagai JSON
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mendapatkan nilai-nilai yang dikirim dari form kontak
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Melakukan koneksi ke database
  $servername = "localhost"; // Ganti dengan nama server MySQL Anda
  $username = "root"; // Ganti dengan username MySQL Anda
  $password = ""; // Ganti dengan password MySQL Anda
  $dbname = "phortofolio_form"; // Ganti dengan nama database MySQL Anda

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Memeriksa koneksi database
  if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
  }

  // Menyimpan data ke tabel dalam database
  $sql = "INSERT INTO contact_form (first_name, last_name, phone, email, message)
          VALUES ('$firstName', '$lastName', '$phone', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
    // Mengirim respons JSON bahwa data berhasil disimpan
    $response = array("success" => true, "message" => "Pesan Telah Dikirim!.");
    echo json_encode($response);
  } else {
    // Mengirim respons JSON bahwa terjadi kesalahan
    $response = array("success" => false, "message" => "Terjadi kesalahan: " . $conn->error);
    echo json_encode($response);
  }

  // Menutup koneksi database
  $conn->close();
}
?>
