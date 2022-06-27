<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Master Dosen</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- tabel --->
                            <div class="card-body p-0">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>NPP</th>
                                            <th>NIDN</th>
                                            <th>Nama Dosen</th>
                                            <th>Homebase</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1.</td>
                                            <td>201</td>
                                            <td></td>
                                            <td>K Ros</td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-pencil-square-o mr-1"></i>
                                                </a>
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-times mr-1"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm" data-toggle="modal" data-target="#modal-tambahdosen">
                                        <i class="fa fa-plus mr-1"></i>
                                    </a>
                                </span>
                            </div>
                            <!-- akhir tabel -->

                            <!-- MODAL AWAL -->

                            <div class="modal fade" id="modal-tambahdosen">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Dosen</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- isi -->
                                            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">NPP</label>
                                                            <input type="text" name="npp[]" class="form-control" placeholder="NPP">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">NIDN</label>
                                                            <input type="text" name="nidn[]" class="form-control" placeholder="NIDN">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Nama Dosen</label>
                                                            <input type="text" name="namadosen[]" class="form-control" placeholder="Nama Dosen">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="insert-form"></div>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm" id="btn-reset-form">
                                                        <i class="fa fa-undo mr-1"></i>
                                                    </a>
                                                    <a href="#" class="link-black text-sm" id="btn-tambah-form">
                                                        <i class="fa fa-plus mr-1"></i>
                                                    </a>
                                                </span>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>