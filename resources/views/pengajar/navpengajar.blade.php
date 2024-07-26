<nav class="navbar navbar-light 
bg-success border-bottom-0">
    <!-- Navbar toggle button (hamburger icon) -->
    <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="sidebar">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div class="offcanvas offcanvas-start 
bg-success d-md-block" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-light" id="sidebarLabel">Portal Koas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-light" href="{{route('pengajar')}}"><i class="fa-solid fa-house"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('pengajar.jadwal')}}"><i class="fa-solid fa-calendar"></i>
                    Jadwal Bimbingan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('pengajar.koas')}}"><i class="fa-solid fa-book"></i>
                    Jadwal Ujian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('pengajar.koas')}}"><i class="fa-solid fa-users"></i>
                    Daftar Koas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/logout"><i class="fa-solid fa-right-from-bracket"></i>
                    Log Out
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar p-0">
            <!-- Added `p-0` to remove padding -->
            <div class="position-sticky bg-success vh-100">
                <!-- `vh-100` makes the sidebar full height -->
                <div class="pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span class="text-light">
                            Portal Koas RSUD Tarakan
                        </span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="{{route('pengajar')}}"><i class="fa-solid fa-house"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('pengajar.jadwal')}}"><i class="fa-solid fa-calendar"></i>
                                Jadwal Bimbingan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('pengajar.jadwal')}}"><i class="fa-solid fa-book"></i>
                                Jadwal Ujian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('pengajar.koas')}}"><i class="fa-solid fa-users"></i>
                                Daftar Koas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/logout"><i class="fa-solid fa-right-from-bracket"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
