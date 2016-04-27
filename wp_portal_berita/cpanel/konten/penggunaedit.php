<?php
$sql = "SELECT * FROM tb_pengguna WHERE idpengguna =".$_GET['id'];
$qry = mysql_query($sql);
$data = mysql_fetch_array($qry);
?>
<div id="post">
		<h4>Halaman Admin Panel</h4>
        <div id="post-text">
  <form action="modul/penggunaupdate.php" method="post" enctype="multipart/form-data" name="formpengguna" id="formpengguna">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center">Update Data Pengguna</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username" id="username" value="<?php echo $data['username'] ?>"></td>
    </tr>
    <tr>
      <td>Nama Depan</td>
      <td><input type="text" name="nama_depan" id="nama_depan" value="<?php echo $data['nama_depan'] ?>"></td>
    </tr>
    <tr>
      <td>Nama Belakang</td>
      <td><input type="text" name="nama_blkg" id="nama_blkg" value="<?php echo $data['nama_blkg'] ?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" id="email" value="<?php echo $data['email'] ?>"></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td><input type="text" name="telp" id="telp" value="<?php echo $data['telp'] ?>"></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id" id="id" value="<?php echo $data['idpengguna'] ?>"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="simpan" id="simpan" value="Simpan"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
  </div>
</div>