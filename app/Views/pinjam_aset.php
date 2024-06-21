<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container" style=" padding-top : 100px;">
    <div class="card">
        <div class="card-header">
            <h3>Pinjam Barang</h3>
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
            <form method="post" action="<?= base_url('aset/prosespinjam/') ?>">
                <?= csrf_field(); ?>

                    <input type="hidden" class="form-control" id="username" name="username" value="<?= session()->get('username'); ?>" readonly="">

                <div class="form-group">
                    <label for="nama">Nama Aset</label>
                    <input type="text" class="form-control" id="" name="" value="<?= $aset->nama_aset; ?>" readonly="">
                    <input type="hidden" class="form-control" id="id_aset" name="id_aset" value="<?= $aset->id_aset; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Jumlah Pinjam</label>
                    <input type="text" class="form-control" id="jumlah_pinjam" name="jumlah_pinjam">
                </div>

                <div class="form-group">
                    <label for="nama">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                </div>

                <div class="form-group">
                    <label for="alamat">Tanggal Pengembalian</label>
                    <input  type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian"></input>
                </div>

                <input type="hidden" class="form-control" id="status_pengajuan" name="status_pengajuan" value="Menunggu Konfirmasi" readonly="">

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>