<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                    <a href="<?= base_url('/admin/tambahaset'); ?>" class="btn btn-success btn-icon-split" >
                    <span class="text">Tambah Aset</span>
                    </a>
                    <hr>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Aset</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Aset</th>
                                            <th>Jumlah</th>
                                            <th>Lokasi</th>
                                            <th>Aksi</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($aset as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $row->nama_aset; ?></td>
                                                <td><?= $row->jumlah_tersedia; ?></td>
                                                <td><?= $row->lokasi; ?></td>
                                                <td>
                                                    <a title="Edit" href="<?= base_url("admin/aset/edit/$row->id_aset"); ?>" class="btn btn-info">Edit</a>
                                                    <a title="Delete" href="<?= base_url("admin/aset/delete/$row->id_aset") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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
