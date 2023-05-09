<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Simpan kontak ke database atau kirim ke API di sini.
    // Untuk contoh ini, kita hanya akan menampilkan data yang diterima.
    echo "Kontak baru telah diterima:<br>";
    echo "Nama: " . htmlspecialchars($name) . "<br>";
    echo "Telepon: " . htmlspecialchars($phone) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
    header('Location: index.php');
    exit();
}