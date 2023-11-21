<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>INTERBAHASA</h2>
      <p>Silahkan liat deskripsi pendaftaran kursus disini </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8">
          <img src="assets/img/course-details.jpg" class="img-fluid" alt="">
          <h3> <?php echo $detail['nama_kursus'] ?></h3>
          <p>
            <?php echo $detail['deskripsi'] ?>
          </p>
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Pengajar</h5>
            <p><a href="#"> <?php echo $detail['pengajar'] ?></a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Biaya</h5>
            <p> <?php echo $detail['harga'] ?></p>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <a href="<?php echo base_url('user/daftar_kursus/') . $detail['id_kursus'] ?>" class="get-started-btn">Daftar</a>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Cource Details Section -->


</main><!-- End #main -->