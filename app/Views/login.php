<!DOCTYPE html>
<!-- saved from url=(0048)https://brandio.io/envato/iofrm/html/login5.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/iofrm_files/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/iofrm_files/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/iofrm_files/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/iofrm_files/iofrm-theme9.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="<?= base_url(); ?>/iofrm_files/graphic2.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="<?= base_url(); ?>/iofrm_files/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
						<?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

						
                        <form method="post" action="<?= base_url(); ?>/login/process">
						<?= csrf_field(); ?>
                            <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="https://api.whatsapp.com/send/?phone=6208113461666&text=HI%21&app_absent=0">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="<?= base_url(); ?>/iofrm_files/jquery.min.js"></script>
<script src="<?= base_url(); ?>/iofrm_files/popper.min.js"></script>
<script src="<?= base_url(); ?>/iofrm_files/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/iofrm_files/main.js"></script>

</body></html>