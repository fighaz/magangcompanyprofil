<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM galeri WHERE id_galeri = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Ubah Data</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" >Judul</label>
                        <input name="txtjudul"  value="<?=$r['judul_galeri']?>" class="form-control py-4" type="text" placeholder="Masukkan Judul" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Gambar</label>
                <input name="txtgambar" class="form-control py-4" type="file">
                <img src="../gambar/<?=$r['gambar']?>" alt="" width="100" height="100">
                </input>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Tanggal</label>
                <input name="txttanggal"  value="<?=$r['tanggal']?>" class="form-control py-4" type="date" />
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
            </div>
        <?php
            if (@$_POST['simpan']) {
                $judul= $_POST['txtjudul'];
                $gambar = $_FILES['txtgambar']['name'];
                $tmp = $_FILES['txtgambar']['tmp_name'];;
                $tanggal= $_POST['txttanggal'];
                $id_user ="1";
                
                if(empty($gambar)){
                    mysqli_query($k,"UPDATE galeri SET judul_galeri = '$judul',tanggal ='$tanggal',id_user = '$id_user' WHERE id_galeri = '$id' "); 
                }else{
                    mysqli_query($k,"UPDATE galeri SET judul_galeri = '$judul',gambar = '$gambar',tanggal ='$tanggal',id_user = '$id_user' WHERE id_galeri = '$id' "); 
                    copy($tmp, "../gambar/$gambar");
                }
                 
                 
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=galeri'</script>";
            }
        ?>
 
</form>
