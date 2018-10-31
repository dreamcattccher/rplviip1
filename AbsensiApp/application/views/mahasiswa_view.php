<?php
$this->load->view("components/head");
$this->load->view("components/navbar");
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-mahasiswa">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Mahasiswa</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" id="telepon" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">
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

    <button class="btn btn-success pull-right" 
        data-toggle="modal" data-target="#form-mahasiswa">
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
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>Sei Deli</td>
                <td>061888811</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-mahasiswa">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>Sei Deli</td>
                <td>061888811</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-mahasiswa">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>Sei Deli</td>
                <td>061888811</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-mahasiswa">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>Sei Deli</td>
                <td>061888811</td>
                <td><button class="btn btn-warning btn-block" 
                        data-toggle="modal" data-target="#form-mahasiswa">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>Sei Deli</td>
                <td>061888811</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-mahasiswa">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
$this->load->view("components/foot");
?>