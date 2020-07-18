<?php
error_reporting(0); 
include "koneksi.php";
?>

<html>
<head>
       <title>UAS Lusian Andrianto/2016142055</title>
</head>
<body>
<h1 align="center"> Input Data</h1>
<?php

$jumlah_dirawat= mysqli_real_escape_string($conect, $_POST['jumlah_dirawat']);    
$jumlah_positif= mysqli_real_escape_string($conect, $_POST['jumlah_positif']);  
$jumlah_meninggal= mysqli_real_escape_string($conect, $_POST['jumlah_meninggal']);    
$kategori= mysqli_real_escape_string($conect, $_POST['kategori']);  
$jumlah_sembuh= mysqli_real_escape_string($conect, $_POST['jumlah_sembuh']);       

if(isset($_POST['simpan'])){
 $save=mysqli_query($conect, "INSERT INTO tb_data (no_id,jumlah_dirawat,jumlah_positif,jumlah_meninggal,id_kategori,jumlah_sembuh)
    values ('','$jumlah_dirawat','$jumlah_positif','$jumlah_meninggal','$kategori','$jumlah_sembuh')");
    if($save){ 
        echo "<script>alert('Data Berhasil disimpan ke database');document.location='data.php'</script>";
    }else{  
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='data.php'</script>";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr>
        <td>Kategori Produk</td>
        <td>:</td>
        <td>
            <select name="kategori">
            <option value="">Pilih Kategori</option>
            <option value="1">Banten</option>
            <option value="2">DKI Jakarta</option>
            <option value="3">Jawa Barat</option>
            <option value="4">Jawa Tengah</option>
            <option value="5">Jawa Timur</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jumlah Positif</td>
        <td>:</td>
        <td><textarea name="jumlah_positif" placeholder="jumlah_positif" rows="3" cols="50"/></textarea></td>
    </tr>
    <tr>
        <td>jumlah dirawat</td>
        <td>:</td>
        <td><input type="text" name="jumlah_dirawat" placeholder="jumlah_dirawat" size="20" maxlength="10"/></td>
    </tr>
    <tr>
        <td>jumlah sembuh</td>
        <td>:</td>
        <td><input type="text" name="jumlah_sembuh" placeholder="jumlah_sembuh" size="30" maxlength="30"/></td>
    </tr>
    <tr>
        <td>Jumlah Meninggal</td>
        <td>:</td>
        <td><input type="text" name="jumlah_meninggal" placeholder="jumlah_meninggal" size="30" maxlength="30"/></td>
    </tr>
    <tr>
        <td colspan="7"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>
</table>
</form>
</body>
</html>