<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $uname = htmlspecialchars($_POST['uname']);
    $nik = htmlspecialchars($_POST['nik']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_hp = htmlspecialchars($_POST['no_hp']); 
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $password_repeat = htmlspecialchars($_POST['password_repeat']);
    $kode_keamanan = htmlspecialchars($_POST['kode_keamanan']);

    // Simpan data ke dalam file data.html
    $data ="
    <h2>Data Pengguna</h2>
    <p>Nama Lengkap: $uname</p>
    <p>Nik: $nik</p>
    <p>Alamat: $alamat</p>
    <p>No Hp: $no_hp</p>
    <p>Email: $email</p>
    <p>User Name: $username</p>
    <p>Password: $password</p>
    <p>Ulangi Password: $password_repeat</p>
    <p>Kode Keamanan: $kode_keamanan</p>
    <hr>
    ";

    // Append data ke dalam file data.html
    file_put_contents('data.html', $data, FILE_APPEND | LOCK_EX);
    
    // Redirect ke halaman terima kasih atau halaman lain
    header("Location: thank_you.html");
    exit();
}
?>