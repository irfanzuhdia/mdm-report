<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                    <a href="Reset.html" class="btn btn-secondary btn-icon-split" >

                    <span class="text">Reset Password</span>
                    </a>
                    <a href="<?= base_url('/admin/tambahpegawai'); ?>" class="btn btn-success btn-icon-split" >
                    <span class="text">Tambah Karyawan</span>
                    </a>
                    <hr>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Divisi</th>
                                            <th>Aksi</th>
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
                                        foreach ($users as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $row->username; ?></td>
                                                <td><?= $row->name; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->phone; ?></td>
                                                <td><?= $row->address; ?></td>
                                                <td><?= $row->divisi; ?></td>
                                                <td>
                                                    <a title="Edit" href="<?= base_url("admin/pegawai/edit/$row->username"); ?>" class="btn btn-info">Edit</a>
                                                    <a title="Delete" href="<?= base_url("admin/pegawai/delete/$row->username") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                                                </td>
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
