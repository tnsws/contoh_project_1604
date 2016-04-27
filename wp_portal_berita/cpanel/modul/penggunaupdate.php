<?php
include 'koneksi.php';

$id = $_POST['id'];
$username = $_POST['username'];
$nama_depan = $_POST['nama_depan'];
$nama_blkg = $_POST['nama_blkg'];
$email = $_POST['email'];
$telp = $_POST['telp'];

$sql = "UPDATE tb_pengguna SET
		username = '".$username."',
		nama_depan = '".$nama_depan."',
		nama_blkg = '".$nama_blkg."',
		email = '".$email."',
		telp = ".$telp."
		WHERE idpengguna = ".$id;
$qry = mysql_query($sql);
header('location:../?p=pengguna');
?>