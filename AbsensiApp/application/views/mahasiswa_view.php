<?php
$this->load->view("components/head");
$this->load->view("components/navbar");
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-mahasiswa">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form <span id="mode"></span> Mahasiswa</h3></div>
                <div class="modal-body">
                    <form action="" autocomplete="off">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" id="nim" class="form-control" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class='form-control'></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" id="telepon" class="form-control" name="telepon">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="simpan">
                    <span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                    <button class="btn btn-danger" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Batal</button>
                </div>
            </div>
        </div>
    </div>

    <div class="page-header">
        <h1><span class="glyphicon glyphicon-briefcase"></span> 
            Mahasiswa <small>Berisi Informasi Data Mahasiswa</small></h1> 
    </div>
    <button class="btn btn-default" id="reload">
        <span class="glyphicon glyphicon-refresh"></span> Reload
    </button>
    <button class="btn btn-success pull-right" id="tambah">
        <span class="glyphicon glyphicon-plus"></span> Tambah</button>
    <div class="clearfix"></div>
    <table class="table table-bordered table-striped table-hover"
        style="margin-top:10px;">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script src="assets/js/app/mahasiswa.js"></script>
<?php
$this->load->view("components/foot");
?>