<h1>Biodata</h1>
<hr>
<a href=".?hal=ubahbiodata" class="btn btn-primary">Ubah</a>
<div class="card-body">
                        <div class="table-responsive">
                                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <th>Telepon</th>
                                                <th>Nama Pimpinan</th>
                                                <th>Logo </th>
                                                <th>Visi</th>
                                                <th>Misi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Perusahaan</th>
                                                <th>Telepon</th>
                                                <th>Nama Pimpinan</th>
                                                <th>Logo </th>
                                                <th>Visi</th>
                                                <th>Misi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                    $sql = "SELECT * FROM biodata";
                                                    $q = mysqli_query($k,$sql);
                                                    while($r = mysqli_fetch_assoc($q)){
                                            ?>
                                                <tr>
                                                    <td><?=$r['nama_perusahaan'] ?></td>
                                                    <td><?=$r['telepon'] ?></td>
                                                    <td><?=$r['nama_pimpinan'] ?></td>
                                                    <td>
                                                        <img src="../logo_perusahaan/<?=$r['logo_perusahaan'] ?>" alt="" width="20" height="20">
                                                    </td>
                                                    <td><?=$r['visi'] ?></td>
                                                    <td><?=$r['misi'] ?></td>
                                                </tr>
                                            <?php }?>
                                        </tbody> 
                                    </table>
                        </div>
</div>
