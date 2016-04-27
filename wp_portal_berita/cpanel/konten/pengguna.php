<?php
if(isset($_GET['hapus'])){
	$sql = "DELETE FROM tb_pengguna WHERE idpengguna = '".$_GET['id']."'";
	$qry = mysql_query($sql);
}
$sql = "SELECT * FROM tb_pengguna";
$qry = mysql_query($sql);
$no= 1;
?>
<div id="post">
		<h4>Halaman Admin Panel</h4>
        <div id="post-text">
<a href="?p=penggunatambah">Tambah Data</a>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="30" scope="col">No</th>
    <th scope="col">Username</th>
    <th scope="col">Nama lengkap</th>
    <th scope="col">Email</th>
    <th scope="col">Telp</th>
    <th width="50" scope="col">Aksi</th>
  </tr>
  <?php while($data = mysql_fetch_array($qry)) { ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><img src="../<?php echo $data['foto'] ?>" width="64" align="top"><?php echo $data['username'] ?>&nbsp;</td>
    <td><?php echo $data['nama_depan'].' '.$data['nama_blkg'] ?>&nbsp;</td>
    <td><?php echo $data['email'] ?>&nbsp;</td>
    <td><?php echo $data['telp'] ?>&nbsp;</td>
    <td align="center">
    <a href="?p=penggunaedit&amp;id=<?php echo $data['idpengguna'] ?>">E</a> | 
    <a href="?p=pengguna&hapus=ok&id=<?php echo $data['idpengguna'] ?>" onClick="return confirm('Hapus bro?')">H</a></td>
  </tr>
  <?php } ?>
</table>
</div>
</div>