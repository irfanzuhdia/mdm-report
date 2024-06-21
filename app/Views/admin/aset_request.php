<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
                    <hr>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Request</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Peminjam</th>
                                            <th>Nama Aset</th>
                                            <th>Jumlah Pinjam</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Status Pengajuan</th>
                                            <th>Status Aset</th>
                                            <th>Aksi</th>
                                    </tr>
                                    </thead>
                                     <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($peminjaman as $row) {
                                            ?>
                                            <tr>
                                            <td><?= $no++; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['nama_aset']; ?></td>
                                                <td><?= $row['jumlah_pinjam']; ?></td>
                                                <td><?= $row['tgl_pinjam']; ?></td>
                                                <td><?= $row['tgl_pengembalian']; ?></td>
                                                <td><?= $row['status_pengajuan']; ?></td>
                                                <td><?= $row['status_barang']; ?></td>
                                                <td>
                                                <?php $dataedit = $row['id_peminjaman'];?>

                                                <form method="post" action="<?= base_url('admin/aset/request/acc/' . $dataedit) ?>">
                                                <?= csrf_field(); ?>
                                                <button type="submit" id="status_pengajuan" name="status_pengajuan" value="✅" class="btn btn-success" >Setujui</button>
                                                </form>

                                                <form method="post" action="<?= base_url('admin/aset/request/dec/' . $dataedit) ?>">
                                                <?= csrf_field(); ?>
                                                <button type="submit" id="status_pengajuan" name="status_pengajuan" value="❌" class="btn btn-danger" >Tolak</button>
                                                </form>

                                                <form method="post" action="<?= base_url('admin/aset/statusbarang/' . $dataedit) ?>">
                                                <?= csrf_field(); ?>
                                                <button type="submit" id="status_barang" name="status_barang" value="✅" class="btn btn-primary" >Aset Dikembalikan</button>
                                                </form>

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
