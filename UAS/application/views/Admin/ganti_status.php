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
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section id="content-types">
                <div class="row match-height">

                    <div class="col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title">Form Ganti Status</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo base_url('daftar/ubah_status') ?>" method="post">
                                    <input type="hidden" id="donationinput1" value="<?php echo $daftar['id_daftar'] ?>" name="id_daftar" readonly>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <p for="donationinput1" class="sr-only">ID Kursus</p>
                                                <input type="text" id="donationinput1" value="<?php echo $daftar['id_kursus'] ?>" class="form-control" name="id_kursus" readonly>
                                            </div>
                                            <div class="form-group">
                                                <p for="donationinput2" class="sr-only">ID User</p>
                                                <input type="text" id="donationinput2" value="<?php echo $daftar['id_user'] ?>" class="form-control" name="id_user" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput1" class="sr-only">Nama Kursus</label>
                                                <select name="status" class="form-control">
                                                    <option value"Belum_Bayar">Belum Bayar</option>
                                                    <option value"Sudah_Bayar">Sudah Bayar</option>
                                                </select>
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