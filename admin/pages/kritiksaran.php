<h1>Kritik & Saran </h1>
<div class="card-body">
                        <div class="table-responsive">
                                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Namal</th>
                                                <th>Email</th>
                                                <th>Subjek</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email </th>
                                                <th>Subjek</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                    $sql = "SELECT * FROM pesan";
                                                    $q = mysqli_query($k,$sql);
                                                    while($r = mysqli_fetch_assoc($q)){
                                            ?>
                                                <tr>
                                                    <td><?=$r['nama'] ?></td>
                                                    <td><?=$r['email'] ?></td>
                                                    <td><?=$r['subjek'] ?></td>
                                                    <td><?=$r['pesan'] ?></td>
                                                </tr>
                                            <?php }?>
                                        </tbody> 
                                    </table>
                        </div>
</div>