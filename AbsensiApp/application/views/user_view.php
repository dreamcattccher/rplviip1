<?php 
$this->load->view("components/head");
$this->load->view("components/navbar"); 
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-user">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form User</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userid">User ID</label>
                        <input type="text" class="form-control"
                            id="userid">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control"
                            id="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" rows="5"
                            class="form-control"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control"
                                id="telepon">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"
                                id="email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <select id="status" class="form-control">
                                <option value="ak">Akademik</option>
                                <option value="do">Dosen</option>
                                <option value="mh">Mahasiswa</option>
                            </select>
                        </div>    
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
        <h1><span class="glyphicon glyphicon-user"></span> 
            User <small>Berisi Informasi Profil User</small></h1> 
    </div>

    <button class="btn btn-success pull-right" 
        data-toggle="modal" data-target="#form-user">
        <span class="glyphicon glyphicon-plus"></span> Tambah</button>
    <div class="clearfix"></div>
    <table class="table table-bordered table-striped table-hover"
        style="margin-top:10px;">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>budi@gmail.com</td>
                <td>Mahasiswa</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-user">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>budi@gmail.com</td>
                <td>Mahasiswa</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-user">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>budi@gmail.com</td>
                <td>Akademik</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-user">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>budi@gmail.com</td>
                <td>Dosen</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-user">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>001</td>
                <td>Budi</td>
                <td>budi@gmail.com</td>
                <td>Akademik</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-user">
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