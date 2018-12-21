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
                    <form action="">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:25%;">NIM</th>
                                    <th>Nama</th>
                                    <th style="width:20%;">Status</th>
                                </tr>
                            </thead>
                            <tbody id="absensidetail">
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="simpan" class="btn btn-success">
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

    <div class="form-inline">
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select name="" id="kelas" class="form-control">
            <?php
            foreach($kelas as $item):
                echo "<option value='{$item->idkelas}'>{$item->idkelas}</option>";
            endforeach;
            ?>
            </select>
        </div>
        <div class="form-group">
            <label for="matakuliah">Mata Kuliah</label>
            <select name="" id="matakuliah" class="form-control">
            </select>
        </div>
        <button id="submit" class="btn btn-primary">Submit</button>
    </div>

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
        <tbody id="absensi">
        </tbody>
    </table>
</div>
<script src="assets/js/app/absensi.js"></script>
<?php 
$this->load->view("components/foot"); 
?>