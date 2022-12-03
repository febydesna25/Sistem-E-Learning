<div class="nav-left-sidebar" style="background-color:#4682B4">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav"style="color: #000000" >
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Fitur
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('dashboard')? 'active' : ''}}" href="{{ url('dashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-home"></i>Dashboard <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('kelasdashboard')? 'active' : ''}}" href="{{ url('kelasdashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="  fas fa-server"></i>Kelas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('mahasiswadashboard')? 'active' : ''}}" href="{{ url('mahasiswadashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class=" fas fa-newspaper"></i>Mahasiswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dosendashboard')? 'active' : ''}}" href="{{ url('dosendashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="  fas fa-table"></i>Dosen</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('matkuldashboard')? 'active' : ''}}" href="{{ url('matkuldashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class=" fas fa-th-large"></i>Matkul</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('daftaradashboard')? 'active' : ''}}" href="{{ url('daftaradashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class=" fas fa-th"></i>Daftar Kelas A</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link {{ Request::is('daftarbdashboard')? 'active' : ''}}" href="{{ url('daftarbdashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class=" fas fa-th"></i>Daftar Kelas B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('materidashboard')? 'active' : ''}}" href="{{ url('materidashboard') }}" style="color: #000000"  aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-map"></i>Daftar Materi</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
 </div>