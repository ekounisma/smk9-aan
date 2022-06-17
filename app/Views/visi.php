<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>VISI&MISI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=<?php echo base_url() . "/mahasiswa"; ?>>Home</a></li>
                        <li class="breadcrumb-item active">Info PT</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <form action=<?php echo base_url() . "/mahasiswa"; ?>>
                    <div class="card-header">
                        <h3 class="card-title">Visi & Misi Perguruan Tinggi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <b>Visi</b>
                        <textarea class="summernote"></textarea>
                        <b>Misi</b>
                        <textarea class="summernote"></textarea>
                        <div class="card-footer">
                            <a href="#">
                            </a>
                        </div>
                    </div>


                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" value="Simpan">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>