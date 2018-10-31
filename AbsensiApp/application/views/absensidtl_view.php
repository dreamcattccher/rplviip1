<?php 
$this->load->view("components/head");
$this->load->view("components/navbar"); 
?>
<div class="container">
    <div class="page-header">
        <h1><span class="glyphicon glyphicon-briefcase"></span> 
            Absensi Detail <small>Berisi Informasi Data Absensi Detail Mahasiswa</small></h1> 
    </div>
    
    <a href="absensi" class="btn btn-primary">
        Kembali
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Status</th>
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
<?php 
$this->load->view("components/foot"); 
?>