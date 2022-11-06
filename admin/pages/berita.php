<h1>Berita</h1>
<hr>
<a href=".?hal=tambahberita" class="btn btn-primary">Tambah</a>
<div class="card-body">
                        <div class="table-responsive">
                                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Tanggal</th>
                                                <th>Gambar </th>
                                                <th>User</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Tanggal</th>
                                                <th>Gambar </th>
                                                <th>User</th>
                                                <th>Aksi</th> 
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                    $sql = "SELECT * FROM berita";
                                                    $q = mysqli_query($k,$sql);
                                                    while($r = mysqli_fetch_assoc($q)){
                                            ?>
                                                <tr>
                                                    <td><?=$r['judul_berita'] ?></td>
                                                    <td><?=$r['content_berita'] ?></td>
                                                    <td><?=$r['tanggal'] ?></td>
                                                    <td>
                                                        <img src="../gambar/<?=$r['gambar'] ?>" alt="" width="70" height="70">
                                                    </td>
                                                    <td><?=$r['id_user'] ?></td>
                                                    <td>
                                                       <a href=".?hal=ubahberita&id=<?=$r['id_berita']?>">Ubah</a>
                                                       - 
                                                       <a  onclick="return confirm('Apakah Anda Yakin untuk Menghapus ?')" href=".?hal=hapusberita&id=<?=$r['id_berita']?>">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody> 
                                    </table>
                        </div>
</div>