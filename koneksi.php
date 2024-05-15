<?php
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "portfolio";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Query untuk menyimpan data
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
