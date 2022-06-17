<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Identitas Perguruan Tinggi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Info PT</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form action=<?php echo base_url() . "/pages"; ?>>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Identitas Perguruan Tinggi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kode Perguruan Tinggi</label>
                                        <input type="text" name="kode_pt" class="form-control" placeholder="Kode Perguruan Tinggi">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Perguruan Tinggi</label>
                                        <input type="text" name="nama_pt" class="form-control" placeholder="Nama Perguruan Tinggi">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Singkat Perguruan Tinggi</label>
                                        <input type="text" name="namma_pt_singkat" class="form-control" placeholder="Nama Singkat Perguruan Tinggi">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" value="Simpan">Submit</button>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Identitas Tersimpan</h3>
                        </div>
                        <div class="card-body">
                            <br>Kode PT : <b>201</b><br>Nama PT : <b>TADIKA</b><br>Singkatan Nama : <b>TDA</b><br>
                        </div>
                        <div style="text-align: center;">
                            <a href="#">
                                <i class="fa fa-angle-double-right mr-1"></i>
                                Hapus Data
                                <i class="fa fa-angle-double-left mr-1"></i>
                            </a>
                        </div>
                        <h3></h3>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
</div>