<?php 
$this->load->view("components/head");
$this->load->view("components/navbar"); 
?>
<div class="container">
<div class="modal fade" tabindex="-1" role="dialog" id="form-absensidtl">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><h3>Form Detail Absensi</h3></div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:25%;">NIM</th>
                                <th>Nama</th>
                                <th style="width:20%;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Budi</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="h">Hadir</option>
                                        <option value="a">Absen</option>
                                        <option value="i">Izin</option>
                                        <option value="s">Sakit</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Budi</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="h">Hadir</option>
                                        <option value="a">Absen</option>
                                        <option value="i">Izin</option>
                                        <option value="s">Sakit</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Budi</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="h">Hadir</option>
                                        <option value="a">Absen</option>
                                        <option value="i">Izin</option>
                                        <option value="s">Sakit</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Budi</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="h">Hadir</option>
                                        <option value="a">Absen</option>
                                        <option value="i">Izin</option>
                                        <option value="s">Sakit</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Budi</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="h">Hadir</option>
                                        <option value="a">Absen</option>
                                        <option value="i">Izin</option>
                                        <option value="s">Sakit</option>
                                    </select>
                                </td>
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
            Absensi <small>Berisi Informasi Data Absensi Mahasiswa</small></h1> 
    </div>

    <form action="" class="form-inline">
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select name="" id="kelas" class="form-control">
                <option value="tiviip1">TI VII P1</option>
                <option value="tiviip1">TI VII P1</option>
                <option value="tiviip1">TI VII P1</option>
                <option value="tiviip1">TI VII P1</option>
            </select>
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah</label>
            <select name="" id="matakuliah" class="form-control">
                <option value="bd">Basis Data</option>
                <option value="al">Algoritma</option>
                <option value="ag">Agama</option>
                <option value="pr">Project</option>
            </select>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pertemuan</th>
                <th>Hadir</th>
                <th>Absen</th>
                <th>Izin</th>
                <th>Sakit</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>22</td>
                <td><button class="btn btn-warning btn-block" data-target="#form-absensidtl" data-toggle="modal">
                    <span class="glyphicon glyphicon-eye-open"></span> Lihat</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>22</td>
                <td><button class="btn btn-warning btn-block" data-target="#form-absensidtl" data-toggle="modal">
                    <span class="glyphicon glyphicon-eye-open"></span> Lihat</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>22</td>
                <td><button class="btn btn-warning btn-block" data-target="#form-absensidtl" data-toggle="modal">
                    <span class="glyphicon glyphicon-eye-open"></span> Lihat</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>22</td>
                <td><button class="btn btn-warning btn-block" data-target="#form-absensidtl" data-toggle="modal">
                    <span class="glyphicon glyphicon-eye-open"></span> Lihat</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>22</td>
                <td><button class="btn btn-warning btn-block" data-target="#form-absensidtl" data-toggle="modal">
                    <span class="glyphicon glyphicon-eye-open"></span> Lihat</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>20</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>22</td>
                <td><button class="btn btn-warning btn-block" data-target="#form-absensidtl" data-toggle="modal">
                    <span class="glyphicon glyphicon-eye-open"></span> Lihat</button></td>
            </tr>
        </tbody>
    </table>
</div>
<?php 
$this->load->view("components/foot"); 
?>