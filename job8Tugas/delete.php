<html>
<body>
<?php
include_once("mysql_connect.php");
$Kode=2;
$delete=mysql_query("delete from barang where Kode= '$Kode");
if($delete)
{echo"berhasil menghapus data barang dengan Kode $Kode";}
else
{echo"gagal menghapus data";}
?>
</body>
</html>