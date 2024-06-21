<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid py-5" id="about">
        <div class="container" style=" padding-top : 70px;">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="<?= base_url(); ?>/assets/img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"><?= session()->get('name'); ?></h3>
                    <p><?= session()->get('deskripsi'); ?></p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary"><?= session()->get('username'); ?></span></h6></div>
<!--                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary"></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">Master</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">10 Years</span></h6></div>-->
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary"><?= session()->get('phone'); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary"><?= session()->get('address'); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><?= session()->get('email'); ?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Divisi: <span class="text-secondary"><?= session()->get('divisi'); ?></span></h6></div>
                    </div>
                    <?php
                    $usernow = session()->get('username');
                    ?>
                    <a href="<?= base_url("profile/edit/$usernow") ?>" class="btn blue btn-outline-primary mr-4">Edit Bio</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection('content'); ?>