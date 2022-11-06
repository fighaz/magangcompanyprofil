<h3 class="mt-4">Tambah Data</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" >Judul</label>
                        <input name="txtjudul" class="form-control py-4" type="text" placeholder="Masukkan Judul" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Gambar</label>
                <input name="txtgambar" class="form-control py-4" type="file"></input>
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
                $judul = $_POST['txtjudul'];
                $gambar = $_FILES['txtgambar']['name'];
                $tmp = $_FILES['txtgambar']['tmp_name'];
                $tanggal = date("Y-m-d");
                $iduser = "1";

               
                mysqli_query($k,"INSERT INTO galeri(judul_galeri,gambar,tanggal,id_user)VALUES('$judul','$gambar','$tanggal','$iduser')"); 
                copy($tmp, "../gambar/$gambar");
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=galeri'</script>";
            }
        ?>
 
</form>
