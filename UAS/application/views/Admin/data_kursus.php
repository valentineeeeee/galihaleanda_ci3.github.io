<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Tables</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Tables
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Data Kursus<a href="<?= site_url('Kursus/input_kursus'); ?>" class="btn btn-primary ml-1"><i class="ft-plus-square"></i></a></h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">	
				<div class="card-body">
	
					<div class="table-responsive">
						<table class="table">	
							<thead>
								<tr>
									<th>ID Kursus</th>
									<th>Nama Kursus</th>
									<th>Pengajar</th>									
									<th>Harga</th>
									<th>Deskripsi</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($kursus as $k) : ?>
								<tr>
									<th scope="row"><?php echo $k ['id_kursus'] ?> </th>
									<td><?php echo $k ['nama_kursus'] ?></td>
									<td><?php echo $k ['pengajar'] ?></td>
									<td><?php echo $k ['harga'] ?></td>
									<td><?php echo $k ['deskripsi'] ?></td>
									<td><a href="<?php echo base_url('kursus/edit/') . $k['id_kursus']; ?>" class="btn btn-info"><i class="ft-edit"></i></a>&nbsp;&nbsp;
<a href="<?php echo base_url('kursus/delete/') . $k['id_kursus']; ?>" class="btn btn-danger"><i class="ft-trash-2"></i></a></td>
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
<!-- Basic Tables end -->

        </div>
      </div>
    </div>