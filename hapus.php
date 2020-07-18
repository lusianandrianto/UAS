<?php
include "koneksi.php";

$id=$_GET['id'];   
$hapus = mysqli_query($conect, "DELETE FROM tb_data where no_id='$id'");
if($hapus){
    echo "<script>alert('Data Berhasil Di Hapus');document.location='data.php'</script>";
}else{  
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='data.php'</script>";
}
?>