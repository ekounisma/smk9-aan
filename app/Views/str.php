<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Struktur Perguruan Tinggi</h1>
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
                                <h3 class="card-title">Update Struktur</h3>
                            </div>
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan Struktur</label>
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
                            </form>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" value="Simpan">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Struktur Tersimpan</h3>
                        </div>
                        <div class="card-body box-profile">
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