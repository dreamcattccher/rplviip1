<?php 
$this->load->view("components/head");
$this->load->view("components/navbar"); 
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-dosen">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Dosen</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="iddosen">ID Dosen</label>
                        <input type="text" id="iddosen" class="form-control">
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
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control">
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
            Dosen <small>Berisi Informasi Data Dosen</small></h1> 
    </div>

    <button class="btn btn-success pull-right" 
        data-toggle="modal" data-target="#form-dosen">
        <span class="glyphicon glyphicon-plus"></span> Tambah</button>
    <div class="clearfix"></div>
    <table class="table table-bordered table-striped table-hover"
        style="margin-top:10px;">
        <thead>
            <tr>
                <th>ID Dosen</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>D002</td>
                <td>Andi</td>
                <td>Sekip</td>
                <td>081XXXXX</td>
                <td>andi@gmail.com</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-dosen">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>D002</td>
                <td>Andi</td>
                <td>Sekip</td>
                <td>081XXXXX</td>
                <td>andi@gmail.com</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-dosen">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>D002</td>
                <td>Andi</td>
                <td>Sekip</td>
                <td>081XXXXX</td>
                <td>andi@gmail.com</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-dosen">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>D002</td>
                <td>Andi</td>
                <td>Sekip</td>
                <td>081XXXXX</td>
                <td>andi@gmail.com</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-dosen">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>D002</td>
                <td>Andi</td>
                <td>Sekip</td>
                <td>081XXXXX</td>
                <td>andi@gmail.com</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-dosen">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>D002</td>
                <td>Andi</td>
                <td>Sekip</td>
                <td>081XXXXX</td>
                <td>andi@gmail.com</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-dosen">
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