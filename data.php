	<h2>Pemrograman Web 2</h2>
	<h2>UAS Lusian Andrianto/206142055/06TPLM009</h2>
	<br/>
<?php
include "koneksi.php";

echo "<br>";
echo "<p align=center>";
echo "Data Pemantauan Covid19 Wilayah Banten";
echo "<br>";
echo "Per " . date('l,d-m-Y H:i:s a') . "";
echo "<br>";
echo "<br>Lusian Andrianto / 2016142055";

?>
<html>
<head>
       <title>UAS Lusian Andrianto/2016142055</title>
</head>
<body>
	
<br/>
	<br/>
 
	<a href="logout.php">LOGOUT</a>
	<br>
	<a href="cetak1.php" target="_WINDOW">Cetak pdf</a>
	
    <table border="1" width="900" align="center">
       <thead>
       <tr>
           <td colspan="7"><a href="input.php" title="input data">Tambah Data</a></td>
       </tr>
       <tr>
           <th>No ID</th>
           <th>Kategori Provinsi</th>
           <th>Jumlah Positif</th>
           <th>Jumlah dirawat</th>
           <th>Jumlah sembuh</th>
           <th>Jumlah Meninggal</th>
           <th>Action</th>
       </tr>
       </thead>

       <tbody>
<?php
$ambildata=mysqli_query($conect, "SELECT * FROM tb_data, tb_kategori where tb_data.id_kategori=tb_kategori.id_kategori order by no_id desc");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <td><?php echo $a['no_id'];?></td>
           <td><?php echo $a['nama_kategori'];?></td>
           <td><?php echo $a['jumlah_positif'];?></td>
           <td><?php echo $a['jumlah_dirawat'];?></td>
           <td><?php echo $a['jumlah_sembuh'];?></td>
           <td><?php echo $a['jumlah_meninggal'];?></td>
           <td><a href="edit.php?id=<?php echo $a['no_id'];?>" title="edit data"><button>Edit</button></a> |
           <a href="hapus.php?id=<?php echo $a['no_id'];?>" title="edit data"><button>Hapus</button></a></td>
       </tr>
<?php
}
?>
</tbody>

</table>
</body>
</html>