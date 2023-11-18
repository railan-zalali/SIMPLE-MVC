<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yng sesuai
$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level']=="admin") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// session star
		// digunakan apabila file login bisa dilewati
		$_SESSION['index'] = true;
		// if ($_SESSION['index'] = true) {
		header("location: siswa/index.php");
		// }
		// $_SESSION['index'] = false;
		// 	header("location: larangan_akses.php");
		// else {
			// header("location: larangan_akses.php");
		// }
		
		// cek jika user login sebagai username
	// } elseif ($data['level']=="user") {
	// 	// buat session
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['level'] = "user";
	// 	// alihkan ke dasboard user
	// 	header("location: halaman_user.php");
	} else {
		// alihkan ke halaman login kembali
		header("location: index.php?pesan=gagal");
	}
} else {
	header("location: index.php?pesan=gagal");
}

?>
