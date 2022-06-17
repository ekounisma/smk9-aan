<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pimpinan Perguruan Tinggi</h1>
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
                    <form action=<?php echo base_url() . "/mahasiswa"; ?>>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pimpinan Perguruan Tinggi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Rektor/Ketua/Direktur</label>
                                        <input type="text" name="kode_pt" class="form-control" placeholder="Rektor/Ketua/Direktur">
                                    </div>
                                    <div class="form-group">
                                        <label>WR/PuKet/AsDir I</label>
                                        <input type="text" name="nama_pt" class="form-control" placeholder="WR/PuKet/AsDir I">
                                    </div>
                                    <div class="form-group">
                                        <label>WR/PuKet/AsDir II</label>
                                        <input type="text" name="namma_pt_singkat" class="form-control" placeholder="WR/PuKet/AsDir II">
                                    </div>
                                    <div class="form-group">
                                        <label>WR/PuKet/AsDir III</label>
                                        <input type="text" name="namma_pt_singkat" class="form-control" placeholder="WR/PuKet/AsDir III">
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
                            <h3 class="card-title">Data Pimpinan Tersimpan</h3>
                        </div>
                        <div class="card-body">
                            <br>Rektor/Ketua/Direktur : <b>EDI</b><br>WR/PuKet/AsDir I : <b>MAIL</b><br>WR/PuKet/AsDir II : <b></b><br>WR/PuKet/AsDir III : <b></b>
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