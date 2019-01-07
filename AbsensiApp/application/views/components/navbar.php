<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" 
                data-toggle="collapse" data-target="#navbar-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="beranda">AbsensiApp</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" 
                    data-toggle="dropdown" role="button">
                    <span class="glyphicon glyphicon-hdd"></span> 
                    Master <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="mahasiswa">Mahasiswa</a></li>
                        <li><a href="dosen">Dosen</a></li>
                        <li><a href="kelas">Kelas</a></li>
                        <li><a href="matakuliah">Mata Kuliah</a></li>
                        <li class="divider"></li>
                        <li><a href="user">User</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" 
                    data-toggle="dropdown" role="button">
                    <span class="glyphicon glyphicon-tasks"></span> 
                    Transaksi <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="jadwal">Jadwal</a></li>
                        <li><a href="absensi">Absensi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" 
                    data-toggle="dropdown" role="button">
                    <span class="glyphicon glyphicon-print"></span> 
                    Laporan <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="laporan/mahasiswa" target="_blank">Lap.Mahasiswa</a></li>
                        <li><a href="laporan/dosen" target="_blank">Lap.Dosen</a></li>
                        <li><a href="laporan/absensi" target="_blank">Lap.Absensi</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" 
                    data-toggle="dropdown" role="button">
                    <span class="glyphicon glyphicon-user"></span> 
                    <?= $this->session->userdata("nama"); ?> <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="profil">Profil</a></li>
                        <li><a href="user/gantipass">Rubah Password</a></li>
                        <li class="divider"></li>
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>