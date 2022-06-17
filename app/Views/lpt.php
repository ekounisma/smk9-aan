<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Logo Perguruan Tinggi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Logo</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form action=<?php echo base_url() . "/mahasiswa"; ?>>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Upload Logo</h3>
                            </div>
                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan Logo</label>
                                        <input type="text" name="keterangan_berkas" class="form-control" placeholder="Keterangan Logo">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>

                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="berkas" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
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
                    <!-- Profile Image -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Logo Tersimpan</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="#">
                                <br><br>
                                LOGO NEW
                            </div>
                            <h3></h3>
                            <div style="text-align: center;">
                                <a href="#">
                                    <i class="fa fa-angle-double-right mr-1"></i>
                                    Hapus Logo
                                    <i class="fa fa-angle-double-left mr-1"></i>
                                </a>
                            </div>
                            <h3></h3>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
</div>