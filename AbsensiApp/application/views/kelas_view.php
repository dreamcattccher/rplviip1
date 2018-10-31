<?php 
$this->load->view("components/head");
$this->load->view("components/navbar"); 
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-kelas">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Kelas</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idkelas">ID Kelas</label>
                        <input type="text" id="idkelas" class="form-control">
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
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" class="form-control">
                            <option value="ti">Teknik Informatika</option>
                            <option value="si">Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sesi">Sesi</label>
                        <select id="sesi" class="form-control   ">
                            <option value="p">Pagi</option>
                            <option value="m">Malam</option>
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
            Kelas <small>Berisi Informasi Data Kelas</small></h1> 
    </div>

    <button class="btn btn-success pull-right" 
        data-toggle="modal" data-target="#form-kelas">
        <span class="glyphicon glyphicon-plus"></span> Tambah</button>
    <div class="clearfix"></div>
    <table class="table table-bordered table-striped table-hover"
        style="margin-top:10px;">
        <thead>
            <tr>
                <th>ID kelas</th>
                <th>Semester</th>
                <th>Jurusan</th>
                <th>Sesi</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-kelas">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-kelas">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-kelas">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-kelas">
                    <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                </td>
                <td><button class="btn btn-danger btn-block">
                    <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-kelas">
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