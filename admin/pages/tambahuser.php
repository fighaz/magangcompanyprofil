<h3 class="mt-4">Tambah Data</h3>
<hr>
<form method="post" action="">
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" >Nama</label>
                        <input name="txtnama" class="form-control py-4" type="text" placeholder="Masukkan Nama" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="small mb-1" >Telepon</label>
                <input name="txttelp" class="form-control py-4" type="text" placeholder="Masukan No Telp" />
            </div>
            <div class="form-group">
                <label class="small mb-1" >Alamat</label>
                <input name="txtalamat" class="form-control py-4" type="text" placeholder="Masukan Alamat" />
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" >Username</label>
                        <input name="txtusername" class="form-control py-4"  type="text" placeholder="Masukan Username" />
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
                $password= md5($_POST['txtpassword']);
                mysqli_query($k,"INSERT INTO user(nama_user,telepon,alamat,username,password)VALUES('$nama','$telepon','$alamat','$username','$password')"); 
                echo "<script>alert('Data Berhasil Disimpan');location='.?hal=user'</script>";
            }
        ?>
 
</form>
