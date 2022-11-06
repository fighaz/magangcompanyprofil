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
                <label class="small mb-1" >Content</label>
                <textarea name="txtcontent" id="" cols="30" rows="10"class="form-control py-4"></textarea>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Tanggal</label>
                <input name="txttanggal" class="form-control py-4" type="date" />
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
            </div>
        <?php
            if (@$_POST['simpan']) {
                $judul = $_POST['txtjudul'];
                $content = $_POST['txtcontent'];
                $tanggal = $_POST['txttanggal'];
                $iduser = "1";

                mysqli_query($k,"INSERT INTO agenda(judul_agenda,content_agenda,tanggal,id_user)VALUES('$judul','$content','$tanggal','$iduser')"); 
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=agenda'</script>";
            }
        ?>
 
</form>
