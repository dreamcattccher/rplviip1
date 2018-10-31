<?php
$this->load->view("components/head");
$this->load->view("components/navbar");
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-matakuliah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Mata Kuliah</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idmatakuliah">ID matakuliah</label>
                        <input type="text" id="idmatakuliah" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control">
                        </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select id="semester" class="form-control">
                            <option value="1">I</option>
                            <option value="2">II</option>
                            <option value="3">III</option>
                            <option value="4">IV</option>
                            <option value="5">V</option>
                            <option value="6">VI</option>
                            <option value="7">VII</option>
                            <option value="8">VIII</option>
                        </select>
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
            Mata Kuliah <small>Berisi Informasi Data Mata Kuliah</small></h1> 
    </div>

    <button class="btn btn-success pull-right" 
        data-toggle="modal" data-target="#form-matakuliah">
        <span class="glyphicon glyphicon-plus"></span> Tambah</button>
    <div class="clearfix"></div>
    <table class="table table-bordered table-striped table-hover"
        style="margin-top:10px;">
        <thead>
            <tr>
                <th>ID matakuliah</th>
                <th>Nama</th>
                <th>Semester</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>MK001</td>
                <td>Basis Data</td>
                <td>III</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-matakuliah">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>MK001</td>
                <td>Basis Data</td>
                <td>III</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-matakuliah">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>MK001</td>
                <td>Basis Data</td>
                <td>III</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-matakuliah">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>MK001</td>
                <td>Basis Data</td>
                <td>III</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-matakuliah">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>MK001</td>
                <td>Basis Data</td>
                <td>III</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-matakuliah">
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