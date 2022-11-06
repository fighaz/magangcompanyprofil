
<h1 class="mt-4">User</h1>
<hr>
<a href=".?hal=tambahuser" class="btn btn-primary">Tambah</a>
    <div class="card-body">
                        <div class="table-responsive">
                                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Telepon</th>
                                                <th>Alamat</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Telepon</th>
                                                <th>Alamat</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                    $sql = "SELECT * FROM user";
                                                    $q = mysqli_query($k,$sql);
                                                    while($r = mysqli_fetch_assoc($q)){
                                            ?>
                                                <tr>
                                                    <td><?=$r['nama_user'] ?></td>
                                                    <td><?=$r['telepon'] ?></td>
                                                    <td><?=$r['alamat'] ?></td>
                                                    <td><?=$r['username'] ?></td> 
                                                    <td><?=$r['password'] ?></td>
                                                    <td>
                                                       <a href=".?hal=ubahuser&id=<?=$r['id_user']?>">Ubah</a>
                                                       - 
                                                       <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus ?')" href=".?hal=hapususer&id=<?=$r['id_user']?>">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody> 
                                    </table>
                        </div>
    </div>