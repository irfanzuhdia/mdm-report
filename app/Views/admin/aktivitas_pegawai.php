<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Aktivitas Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Proyek</th>
                                            <th>Lokasi</th>
                                            <th>Aktivitas</th>
                                            <th>Dibuat</th>
                                            <th>Diedit</th>
                                        </tr>
                                    </thead>
<!--                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Proyek</th>
                                            <th>Lokasi</th>
                                            <th>Aktivitas</th>
                                            <th>Dibuat</th>
                                            <th>Diedit</th>
                                        </tr>
                                    </tfoot>
-->                                   <tbody>
                                        <?php
                                        $no = 1;
                                        $usernow = session()->get('username');
                                        foreach ($aktivitas as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $row->username; ?></td>
                                                <td><?= $row->proyek; ?></td>
                                                <td><?= $row->lokasi; ?></td>
                                                <td><?= $row->aktivitas; ?></td>
                                                <td><?= $row->created_at; ?></td>
                                                <td><?= $row->updated_at; ?></td>
                                                
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
<?= $this->endSection('content'); ?>
