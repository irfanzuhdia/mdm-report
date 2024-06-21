<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" style=" padding-top : 100px;">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Aktivitas</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('aset/pinjam/update/' . $peminjaman->id_peminjaman) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Jumlah Pinjam</label>
                    <input type="text" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam" value="<?= $peminjaman->jumlah_pinjam; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $peminjaman->tgl_pinjam; ?>">
                </div>

                <div class="form-group">
                    <label for="alamat">Tanggal Pengembalian</label>
                    <input  type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= $peminjaman->tgl_pengembalian; ?>"></input>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>