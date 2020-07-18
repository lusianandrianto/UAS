<?php
error_reporting(0);
include "koneksi.php";
?>
<html>
<head>
       <title>UAS Lusian Andrianto/2016142055</title>
</head>
<body>
<h1 align="center"> Edit Data Pemantauan Covid-19</h1>
<?php
$b = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_data where no_id='$_GET[id]'"));

$jumlah_dirawat= mysqli_real_escape_string($conect, $_POST['jumlah_dirawat']);   
$jumlah_positif= mysqli_real_escape_string($conect, $_POST['jumlah_positif']);  
$jumlah_meninggal= mysqli_real_escape_string($conect, $_POST['jumlah_meninggal']);       
$kategori= mysqli_real_escape_string($conect, $_POST['kategori']);  
$jumlah_sembuh= mysqli_real_escape_string($conect, $_POST['jumlah_sembuh']);       

if(isset($_POST['simpan'])){
 if(empty($kategori)){ 
        $error="<p style='color:#F00;'>* Pilih Kategori Provinsi</p>";
    }
    elseif(empty($jumlah_positif)){ 
        $error="<p style='color:#F00;'>* Masukan jumlah positif</p>";
    }
    elseif(empty($jumlah_dirawat)){   
        $error="<p style='color:#F00;'>* Masukan jumlah dirawat</p>";
    }
    elseif(empty($jumlah_sembuh)){   
        $error="<p style='color:#F00;'>* Masukan jumlah sembuh</p>";
    }
    elseif(empty($jumlah_meninggal)){ 
        $error="<p style='color:#F00;'>* Masukan jumlah meninggal</p>";
    }
    else{  

    $save=mysqli_query($conect, "UPDATE tb_data set jumlah_dirawat='$jumlah_dirawat',jumlah_positif='$jumlah_positif',jumlah_meninggal='$jumlah_meninggal',id_kategori='$kategori',jumlah_sembuh='$jumlah_sembuh'where no_id='$_GET[id]'");
    if($save){ 
        echo "<script>alert('Data Berhasil disimpan ke database');document.location='data.php'</script>";
    }else{  
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='input.php'</script>";
    }
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Kategori Provinsi</td>
        <td>:</td>
        <td>
            <select name="kategori">
            <option value="">Pilih Kategori</option>
            <?php
            $ambildata = mysqli_query($conect, "SELECT * FROM tb_kategori");  
            while($a=mysqli_fetch_array($ambildata)){ 
                if($a['id_kategori'] == $b['id_kategori']){  
                ?>
                  <option value="<?php echo $a['id_kategori'];?>" selected>
                  <?php echo $a['nama_kategori'];?></option>
            <?php
            }else{   
                ?>
                <option value="<?php echo $a['id_kategori'];?>">
                <?php echo $a['nama_kategori'];?></option>
            <?php
                 }
            }
            ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jumlah Positif</td>
        <td>:</td>
        <td><input type="text" name="jumlah positif" placeholder="jumlah positif" size="20" maxlength="10" value="<?php echo $b['jumlah_positif'];?>"/></td>
    </tr>
    <tr>
        <td>Jumlah Dirawat</td>
        <td>:</td>
        <td><input type="text" name="jumlah dirawat" placeholder="jumlah dirawat" size="20" maxlength="10" value="<?php echo $b['jumlah_dirawat'];?>"/></td>
    </tr>
    <tr>
        <td>Jumlah Sembuh</td>
        <td>:</td>
        <td><input type="text" name="jumlah sembuh" placeholder="jumlah sembuh" size="20" maxlength="10" value="<?php echo $b['jumlah_sembuh'];?>"/></td>
    </tr>
    <tr>
        <td>Jumlah Meninggal</td>
        <td>:</td>
        <td><input type="text" name="jumlah meninggal" placeholder="jumlah meninggal" size="20" maxlength="10" value="<?php echo $b['jumlah_meninggal'];?>"/></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>