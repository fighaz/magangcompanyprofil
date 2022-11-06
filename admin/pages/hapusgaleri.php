<?php
$id = $_GET['id'];
$sql = "DELETE FROM galeri WHERE id_galeri = '$id'";
$q = mysqli_query($k,$sql);
echo "<script>alert('Data Berhasil Dihapus');location='.?hal=galeri'</script>";
?>