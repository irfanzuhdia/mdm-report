<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Website Pelaporan</h2>
          <h2 class="animate__animated animate__fadeInUp"><span>PT. MULTI DAYA MITRA</span></h2>
          <p class="animate__animated animate__fadeInUp">PT. Multi Daya Mitra was established in 2013, deal with project of electricity, industrial automation, fire alarm and mechanical part which was founded by several people who are experienced in their expertise.</p>
<!--          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
        </div>
      </div>

      <!-- Slide 2 -->
<!--      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

       Slide 3 
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
-->
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>

      <g class="wave1"><!--hijau biru #1f6cbf-->
        <use xlink:href="#wave-path" x="50" y="3" fill="#17cf41">
      </g>
      <g class="wave2"><!--kuning-->
        <use xlink:href="#wave-path" x="50" y="0" fill="#ffc107">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <p>Halo <?= session()->get('username'); ?></p>
          <h2>Silahkan Pilih Salah Satu Menu</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6">
            <a href="<?= base_url(); ?>/aktivitas">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
              <h4 class="title">Aktivitas</h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </a>
          </div>
          <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
            <a href="<?= base_url(); ?>/aset">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
              <h4 class="title">Pinjam Aset</h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </a>
          </div>

          <div class="col-lg-6 col-md-6 mt-5 mt-lg-6 ">
            <a href="daftarinvestasi.html">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
              <h4 class="title">Pengajuan Investasi</h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </a>
          </div>

          <div class="col-lg-6 col-md-6 mt-5">
          <a href="<?= base_url(); ?>/profile">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
              <h4 class="title">Profil Karyawan</h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </a>
          </div>

<!--          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>
-->
      </div>
    </section><!-- End Services Section -->

<?= $this->endSection('content'); ?>
  <!-- ======= Footer ======= -->
