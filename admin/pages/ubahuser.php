<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id_user = '$id'";
    $q = mysqli_query($k,$sql);
    $r = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Ubah Data</h3>
<hr>
<form method="post" action="">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" >Nama</label>
                        <input name="txtnama" value="<?=$r['nama_user']?>" class="form-control py-4" type="text" placeholder="Masukkan Nama" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Telepon</label>
                <input name="txttelp" value="<?=$r['telepon']?>" class="form-control py-4 ress" type="text" placeholder="Masukan No Telp" />
            </div>
            <div class="form-group">
                <label class="small mb-1" >Alamat</label>
                <input name="txtalamat" value="<?=$r['alamat']?>" class="form-control py-4" type="text" placeholder="Masukan Alamat" />
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" >Username</label>
                        <input name="txtusername" value="<?=$r['username']?>" class="form-control py-4"  type="text" placeholder="Masukan Username" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1"> Password</label>
                        <input name="txtpassword"class="form-control py-4" type="password" placeholder="password" />
                    </div>
                </div>
            </div>
            <div class="form-group mt-4 mb-0">
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
            </div>
        <?php
            if (@$_POST['simpan']) {
                $nama= $_POST['txtnama'];
                $telepon= $_POST['txttelp'];
                $alamat= $_POST['txtalamat'];
                $username= $_POST['txtusername'];
                $password= $_POST['txtpassword'];
                if(empty($password)){
                    mysqli_query($k,"UPDATE user SET nama_user = '$nama',telepon = '$telepon',alamat ='$alamat',username = '$username' WHERE id_user = '$id' "); 
                }else{
                    mysqli_query($k,"UPDATE user SET nama_user = '$nama',telepon = '$telepon',alamat ='$alamat',username = '$username',password = '$password' WHERE id_user = '$id' "); 
                }
                 
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=user'</script>";
            }
        ?>
 
</form>
