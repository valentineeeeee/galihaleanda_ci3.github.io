<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pendaftaran</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="card">
			<div class="card-content collapse show">
				<div class="card-body">
	
					<div class="table-responsive">
						<table class="table">
							<thead>
								
								<tr>
									<th>ID Kursus</th>
									<th>Tanggal Pendaftaran</th>
                                    <th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($daftar as $d) : ?>
								<tr>
									<th scope="row"><?php echo $d ['id_kursus'] ?> </th>
									<td> <?php echo $d ['tanggal'] ?></td>
									<td> <?php echo $d ['status'] ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
        </div>

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->