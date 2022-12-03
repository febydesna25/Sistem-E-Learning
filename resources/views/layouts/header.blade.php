<header>
  <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a  class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link @yield('menuHome')">Home</a>
                <a href="/kelas"  class="nav-item nav-link @yield('menuKelas')">Kelas</a>
                <a href="/mahasiswa" class="nav-item nav-link @yield('menuMahasiswa')">Mahasiswa</a>
                <a href="/dosen" class="nav-item nav-link @yield('menuDosen')">Dosen</a>
                <a href="/matkul" class="nav-item nav-link @yield('menuMatkul')">Mata Kuliah</a>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Daftar</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/daftara" class="dropdown-item">Daftar Kelas A</a>
                        <a href="/daftarb" class="dropdown-item">Daftar Kelas B</a>
                    </div>
                </div>
                <a href="/materi" class="nav-item nav-link @yield('menuMateri')">Materi</a>
            </div>
            <a href="/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>

        </div>
    </nav>
    <!-- Navbar End -->
</header>