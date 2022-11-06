<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM berita WHERE id_berita = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Ubah Data</h3>
<hr>
<form method="post" action=""enctype="multipart/form-data" >
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" >Judul</label>
                        <input name="txtjudul"  value="<?=$r['judul_berita']?>" class="form-control py-4" type="text" placeholder="Masukkan Judul" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Content</label>
                <textarea name="txtcontent"  id="" cols="30" rows="10"class="form-control py-4"><?=$r['content_berita']?></textarea>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Tanggal</label>
                <input name="txttanggal"  value="<?=$r['tanggal']?>" class="form-control py-4" type="date" />
            </div>
            <div class="form-group">
                <label class="small mb-1" >Gambar</label>
                <input name="txtgambar" class="form-control py-4" type="file">
                <img src="../gambar/<?=$r['gambar']?>" alt="" width="100" height="100">
                </input>
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
            </div>
        <?php
            if (@$_POST['simpan']) {
                $judul= $_POST['txtjudul'];
                $content= $_POST['txtcontent'];
                $tanggal= $_POST['txttanggal'];
                $gambar = $_FILES['txtgambar']['name'];
                $tmp = $_FILES['txtgambar']['tmp_name'];
                $id_user ="1";
              
                if(empty($gambar)){
                    mysqli_query($k,"UPDATE berita SET judul_berita = '$judul',content_berita = '$content',tanggal ='$tanggal',id_user = '$id_user' WHERE id_berita = '$id' "); 
                }else{
                    mysqli_query($k,"UPDATE berita SET judul_berita = '$judul',content_berita = '$content',tanggal ='$tanggal',gambar = '$gambar',id_user = '$id_user' WHERE id_berita = '$id' "); 
                    copy($tmp, "../gambar/$gambar");
                }
                 
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=berita'</script>";
            }
        ?>
 
</form>
