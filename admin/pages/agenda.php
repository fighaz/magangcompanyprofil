<h1 class="mt-4">Agenda</h1>
<hr>
<a href=".?hal=tambahagenda" class="btn btn-primary">Tambah</a>
    <div class="card-body">
                        <div class="table-responsive">
                                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Content</th>
                                                <th>Tanggal</th>
                                                <th>User</th> 
                                                <th>Aksi</th>                                            
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Content</th>
                                                <th>Tanggal</th>
                                                <th>User</th> 
                                                <th>Aksi</th>  
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                    $sql = "SELECT * FROM agenda";
                                                    $q = mysqli_query($k,$sql);
                                                    while($r = mysqli_fetch_assoc($q)){
                                            ?>
                                                <tr>
                                                    <td><?=$r['judul_agenda'] ?></td>
                                                    <td><?=$r['content_agenda'] ?></td>
                                                    <td><?=$r['tanggal'] ?></td>
                                                    <td><?=$r['id_user'] ?></td>
                                                    <td>
                                                       <a href=".?hal=ubahagenda&id=<?=$r['id_agenda']?>">Ubah</a>
                                                       - 
                                                       <a  onclick="return confirm('Apakah Anda Yakin untuk Menghapus ?')" href=".?hal=hapusagenda&id=<?=$r['id_agenda']?>">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                        </tbody> 
                                    </table>
                        </div>

    </div>