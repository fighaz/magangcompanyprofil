<?php
    $id = $_GET['id_biodata'];
    $sql = "SELECT * FROM biodata WHERE id_biodata = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Ubah Data</h3>
<hr>
<form method="post" action="">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" >Nama Perusahaan</label>
                        <input name="txtperusahaan"  value="<?=$r['nama_perusahaan']?>" class="form-control py-4" type="text" placeholder="Masukkan Judul" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Telepon</label>
                <textarea name="txttelepon" value="<?=$r['telepon']?>" id="" cols="30" rows="10"class="form-control py-4"><?=$r['telepon']?></textarea>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Alamat</label>
                <textarea name="txtalamat" value="<?=$r['alamat']?>" id="" cols="30" rows="10"class="form-control py-4"><?=$r['alamat']?></textarea>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Nama Pimpinan</label>
                <textarea name="txtpimpinan" value="<?=$r['nama_pimpinan']?>"  id="" cols="30" rows="10"class="form-control py-4"><?=$r['nama_pimpinan']?></textarea>
            </div>
                <label class="small mb-1" >Logo</label>
                <input name="txtlogo" class="form-control py-4" type="file">
                <img src="../logo_perusahaan/<?=$r['logo_perusahaan']?>" alt="" width="100" height="100">
                </input>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Visi</label>
                <textarea name="txtvisi" value="<?=$r['visi']?>"  id="" cols="30" rows="10"class="form-control py-4"><?=$r['nama_pimpinan']?></textarea>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Misi</label>
                <textarea name="txtmisi" value="<?=$r['misi']?>"  id="" cols="30" rows="10"class="form-control py-4"><?=$r['nama_pimpinan']?></textarea>
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
            </div>
        <?php
            if (@$_POST['simpan']) {
                $perusahaan= $_POST['txtperusahaan'];
                $telepon= $_POST['txttelepon'];
                $alamat= $_POST['txtalamat'];
                $pimpinan= $_POST['txtpimpinan'];
                $logo = $_FILES['txtlogo']['name'];
                $tmp = $_FILES['txtlogo']['tmp_name'];
                $visi= $_POST['txtvisi'];
                $misi= $_POST['txtmisi']; 
                $id="1";
                if(empty($logo)){
                    mysqli_query($k,"UPDATE biodata SET nama_perusahaan = '$perusahaan',telepon = '$telepon',nama_pimpinan ='$pimpinan',visi ='$visi',misi ='$misi' WHERE id_biodata = '$id' "); 
                }else{
                    mysqli_query($k,"UPDATE biodata SET nama_perusahaan = '$perusahaan',telepon = '$telepon',nama_pimpinan ='$pimpinan',logo_perusahaan = '$logo',visi ='$visi',misi ='$misi' WHERE id_biodata = '$id' ");
                    copy($tmp, "../gambar/$gambar");
                }
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=biodata'</script>";
            }
        ?>
 
</form>
