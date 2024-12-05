<?php
$servername = "localhost";
$username = "user_management"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "user_management";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Contoh untuk memverifikasi admin login
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $admin_username = $_GET['admin_uname'];
    $admin_password = $_GET['admin_psw'];
    $admin_code = $_GET['admin_code'];

    $sql = "SELECT * FROM admins WHERE username = ? AND code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $admin_username, $admin_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        // Verifikasi password (gunakan bcrypt untuk hashing)
        if (password_verify($admin_password, $admin['password'])) {
            // Login berhasil
            header("Location: home.html");
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Admin tidak ditemukan!";
    }
}

$conn->close();
?><?php
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "user_management";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Contoh untuk memverifikasi admin login
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $admin_username = $_GET['admin_uname'];
    $admin_password = $_GET['admin_psw'];
    $admin_code = $_GET['admin_code'];

    $sql = "SELECT * FROM admins WHERE username = ? AND code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $admin_username, $admin_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        // Verifikasi password (gunakan bcrypt untuk hashing)
        if (password_verify($admin_password, $admin['password'])) {
            // Login berhasil
            header("Location: home.html");
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Admin tidak ditemukan!";
    }
}

$conn->close();
?>