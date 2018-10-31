<?php
$this->load->view("components/head");
$this->load->view("components/navbar");
?>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="form-kelas-matakuliah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Kelas Mata Kuliah</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idkelas">Kelas</label>
                        <select id="idkelas" class="form-control">
                            <option value="tiviip1">TI VII P1</option>
                            <option value="tiip1">TI I P1</option>
                            <option value="siiip1">SI II P1</option>
                            <option value="siiiip1">SI III P1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idmatakuliah">Mata Kuliah</label>
                        <select id="idmatakuliah" class="form-control">
                            <option value="bd">Basis Data</option>
                            <option value="al">Algoritma</option>
                            <option value="vb1">Visual Basic 1</option>
                            <option value="vb2">Visual Basic 2</option>
                            <option value="ag">Agama</option>
                            <option value="pr">Project</option>
                            <option value="pw">Pemograman Web</option>
                            <option value="pb">Pemograman Piranti Bergerak</option>
                        </select>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Project</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Project</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Project</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Project</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="form-kelas-mahasiswa">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Kelas Mahasiswa</h3></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idkelas">Kelas</label>
                        <select id="idkelas" class="form-control">
                            <option value="tiviip1">TI VII P1</option>
                            <option value="tiip1">TI I P1</option>
                            <option value="siiip1">SI II P1</option>
                            <option value="siiiip1">SI III P1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="idmahasiswa">Mahasiswa</label>
                        <select id="idmahasiswa" class="form-control">
                            <option value="ad">Andi</option>
                            <option value="bd">Budi</option>
                            <option value="jh">Johan</option>
                            <option value="al">Alex</option>
                        </select>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Mahasiswa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Budi</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Andi</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Alex</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                            <tr>
                                <td>TIVIIP1</td>
                                <td>Johan</td>
                                <td><button class="btn btn-danger btn-block">
                                    <span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
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
            Jadwal Kelas & Mahasiswa <small>Berisi Informasi Jadwal Kelas & Mahasiswa </small></h1> 
    </div>

    <table class="table table-bordered table-striped table-hover"
        style="margin-top:10px;">
        <thead>
            <tr>
                <th>ID kelas</th>
                <th>Semester</th>
                <th>Jurusan</th>
                <th>Sesi</th>
                <th>Jumlah Mahasiswa</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td class="jsiswa">20</td>
                <td>
                    <button class="btn btn-primary btn-block"
                        data-toggle="modal" data-target="#form-kelas-matakuliah">
                        Mata Kuliah</button>
                </td>
                <td>
                    <button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-kelas-mahasiswa">
                        Mahasiswa</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td class="jsiswa">20</td>
                <td>
                    <button class="btn btn-primary btn-block"
                        data-toggle="modal" data-target="#form-kelas-matakuliah">
                        Mata Kuliah</button>
                </td>
                <td>
                    <button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-kelas-mahasiswa">
                        Mahasiswa</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td class="jsiswa">20</td>
                <td>
                    <button class="btn btn-primary btn-block"
                        data-toggle="modal" data-target="#form-kelas-matakuliah">
                        Mata Kuliah</button>
                </td>
                <td>
                    <button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-kelas-mahasiswa">
                        Mahasiswa</button>
                </td>
            </tr>
            <tr>
                <td>TIVIIP1</td>
                <td>VII</td>
                <td>Teknik Informatika</td>
                <td>Pagi</td>
                <td class="jsiswa">20</td>
                <td>
                    <button class="btn btn-primary btn-block"
                        data-toggle="modal" data-target="#form-kelas-matakuliah">
                        Mata Kuliah</button>
                </td>
                <td>
                    <button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-kelas-mahasiswa">
                        Mahasiswa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php
$this->load->view("components/foot");
?>