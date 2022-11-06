<h1>Galeri</h1>
<hr>
<a href=".?hal=tambahgaleri" class="btn btn-primary">Tambah</a>
<div class="card-body">
                        <div class="table-responsive">
                                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Tanggal</th>
                                                <th>User</th>
                                                <th>Aksi</th>  
                                            </tr>
                                        </thead>
                                        <tfoot>
                                                <th>Judul</th>
                                                <th>Gambar</th>
                                                <th>Tanggal</th>
                                                <th>User</th>
                                                <th>Aksi</th>  
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                    $sql = "SELECT * FROM galeri";
                                                    $q = mysqli_query($k,$sql);
                                                    while($r = mysqli_fetch_assoc($q)){
                                            ?>
                                                <tr>
                                                    <td><?=$r['judul_galeri'] ?></td>
                                                    <td>
                                                        <img src="../gambar/<?=$r['gambar'] ?>" alt="" width="70" height="70">
                                                    </td>
                                                    <td><?=$r['tanggal'] ?></td>
                                                    <td><?=$r['id_user'] ?></td>
                                                    <td>
                                                       <a href=".?hal=ubahgaleri&id=<?=$r['id_galeri']?>">Ubah</a>
                                                       - 
                                                       <a  onclick="return confirm('Apakah Anda Yakin untuk Menghapus ?')" href=".?hal=hapusgaleri&id=<?=$r['id_galeri']?>">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody> 
                                    </table>
                        </div>
</div>