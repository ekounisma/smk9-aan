<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>
    <section class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Update Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input name="ID" type="text" class="form-control" id="inputEmail3" placeholder="ID" value=<?php foreach ($mhs as $iden) : echo $iden['id'];
                                                                                                                        endforeach; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input name="NIM" type="text" class="form-control" id="inputEmail3" placeholder="NIM" value=<?php foreach ($mhs as $iden) : echo $iden['nim'];
                                                                                                                        endforeach; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input nama="Nama" type="text" class="form-control" id="inputPassword3" placeholder="Nama" value=<?php foreach ($mhs as $iden) : echo $iden['nama'];
                                                                                                                                endforeach; ?>>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input name="Telepon" type="text" class="form-control" id="inputEmail3" placeholder="Telepon" value=<?php foreach ($mhs as $iden) : echo $iden['telepon'];
                                                                                                                                endforeach; ?>>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">update</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </section>
</div>