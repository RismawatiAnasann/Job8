<html>
<body>
<table border="1">
<tr bgcolor="#ccccc">
     <td>Kode</td>
     <td>Nama</td>
     <td>Kategori</td>
	 <td>Jml_pokok</td>
	 <td>Jml_jual</td>

</tr>
<?php
include_once ("mysql_connect.php");
$selectview=mysql_query("select Kode,Nama,Kategori,Jml_pokok,Jml_jual
              from barang order by Kode,Nama,Kategori,Jml_pokok,Jml_jual asc");
while($data=mysql_fetch_array($selectview))
{   echo"<tr>
    <td>$data[o]</td>
    <td>$data[1]</td>
    <td>$data[2]</td>
	<td>$data[3]</td>
	<td>$data[4]</td>
  </tr>";

}
?>
</table>
</body>
</html>
