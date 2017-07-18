<html>
<body>
<?php
include_once("mysql_connect.php");
$tabel=mysql_query("CREATE TABLE barang (
Kode INT NOT NULL,
Nama VARCHAR(25) NOT NULL ,
Kategori VARCHAR(25) NOT NULL ,
Jml_pokok INT NOT NULL,
Jml_juall INT NOT NULL,
PRIMARY KEY(Kode))");

if($tabel)
{echo"berhasil membuat tabel barang melalui scipt php";}
else
{echo"Gagal membuat tabel";}
?>
</body>
</html>
  