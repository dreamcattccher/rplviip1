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
                        <label for="idmatakuliah">Mata Kuliah</label>
                        <select id="idmatakuliah" class="form-control" multiple>
                        <?php
                        foreach($matakuliah as $item):
                            echo "<option value='$item->idmatakuliah'>$item->nama</option>";
                        endforeach;
                        ?>
                        </select>
                    </div>
                    <button id="simpan-matakuliah" class="btn btn-success pull-right" style="margin-bottom:10px">Simpan</button>
                    <div class="clear-fix"></div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tabel-matakuliahkelas">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
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
                        <label for="idmahasiswa">Mahasiswa</label>
                        <select id="idmahasiswa" class="form-control" multiple>
                        <?php
                        foreach($mahasiswa as $item):
                            echo "<option value='{$item->nim}'>
                                    {$item->nim} - {$item->nama}
                                </option>";
                        endforeach;
                        ?>
                        </select>
                    </div>
                    <button id="simpan-mahasiswa" 
                        class="btn btn-success pull-right">Simpan</button>
                    <div class="clearfix"></div>
                    <table class="table table-bordered"
                        style="margin-top:10px">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Mahasiswa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tabel-mahasiswakelas">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
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

    <div class="form-inline">
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan"
                class="form-control">
                <option value="si">Sistem Informasi</option>
                <option value="ti">Teknik Informatika</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sesi">Sesi</label>
            <select name="sesi" id="sesi"
                class="form-control">
                <option value="p">Pagi</option>
                <option value="m">Malam</option>
            </select>
        </div>
        <button id="filter" class="btn btn-primary">Filter</button>
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
        <tbody id="tabel-jadwal">
        </tbody>
    </table>
</div>
<script src="assets/js/myfunction.js"></script>
<script src="assets/js/app/jadwal.js"></script>
<?php
$this->load->view("components/foot");
?>