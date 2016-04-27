<?php
include 'koneksi.php';

$username = $_POST['username'];
$nama_depan = $_POST['nama_depan'];
$nama_blkg = $_POST['nama_blkg'];
$email = $_POST['email'];
$password = $_POST['password'];
$telp = $_POST['telp'];

@move_uploaded_file($_FILES['foto']['tmp_name'], '../../gambar/'.$_FILES['foto']['name']);
$foto = 'gambar/'.$_FILES['foto']['name'];

$sql = "INSERT INTO tb_pengguna VALUES(
		'',
		'".$username."',
		md5('".$password."'),
		'".$nama_depan."',
		'".$nama_blkg."',
		'".$email."',
		'".$foto."',
		".$telp.");";
$qry = mysql_query($sql);
header('location:../?p=pengguna');
?>