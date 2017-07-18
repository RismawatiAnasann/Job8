<html>
<body>
<?php
include_once("mysql_connect.php");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 0001','Laptop','arcer','1','4800000',
        'info@RismaShop.com','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 0002','Laptop','Asus','2',4500000',
        'info@RismaShop.com','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 0003','Baju','Long Dress','4',120000',
        'info@RismaShop.com','test.. ')");
$insert=mysql_query("INSERT INTO barang (kode,nama,kategori,jml_pokok,jml_jual)
        VALUES (' 0004','Sepatu','snacker','5',95000',
        'info@RismaShop.com','test.. ')");
if($insert)
{echo"barhasil menyisipkan data pada tabel barang";}
else
{echo"gagal pengisipan data";}
?>
</body>
</html>