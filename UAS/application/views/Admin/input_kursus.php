<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Basic Form Elements</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Form Elements
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Inputs start -->
        <section id="content-types">
				<div class="row match-height">

					<div class="col-xl-12 col-md-12">
						<div class="card">
							<div class="card-content">
								<div class="card-body">
									<h4 class="card-title">Form Tambah Kursus</h4>
								</div>
								<div class="card-body">
									<form action="<?php echo base_url('kursus/insert') ?>" method="post">
										<div class="form-body">
											<div class="form-group">
												<label for="donationinput1" class="sr-only">Nama Kursus</label>
												<input type="text" id="donationinput1"  class="form-control" placeholder="Nama Kursus" name="nama_kursus">
												
												</div>
												<div class="form-group">
												<label for="donationinput2" class="sr-only">Pengajar</label>
												<input type="text" id="donationinput2"  class="form-control" placeholder="Pengajar" name="pengajar">
												
											</div>

											<div class="form-group">
												<label for="donationinput2" class="sr-only">Harga</label>
												<input type="text" id="donationinput2"  class="form-control" placeholder="Harga" name="harga">
												
											</div>

											<div class="form-group">
												<label for="donationinput2" class="sr-only">Deskripsi</label>
												<textarea id="donationinput2"  class="form-control" placeholder="Deskripsi" name="deskripsi"></textarea>
												
											</div>
										</div>
										<div class="form-actions center">
											<button type="submit" class="btn btn-outline-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Content types section end -->
        </div>
      </div>
    </div>