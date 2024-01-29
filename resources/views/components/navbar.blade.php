<nav class="navbar navbar-expand-lg bg-white py-3">
    <div class="container">
        <a href="{{ route('dashboard') }}" class="navbar-brand fw-bold">Manajemen Siswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav gap-3 ms-0 ms-md-5">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link btn {{ request()->is('/') ? 'active' : '' }}">
                        <i class='bx bxs-dashboard'></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('siswa.index') }}"
                        class="nav-link btn {{ request()->is('siswa*') ? 'active' : '' }}">
                        <i class='bx bxs-user-badge'></i> Siswa
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link btn dropdown-toggle {{ request()->is('jurusan*') || request()->is('kelas*') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-buildings'></i> Kelas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('kelas.index') }}">Kelas</a></li>
                        <li><a class="dropdown-item" href="{{ route('jurusan.index') }}">Jurusan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('guru.index') }}"
                        class="nav-link btn {{ request()->is('guru*') ? 'active' : '' }}">
                        <i class='bx bxs-user-pin'></i> Guru
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mapel.index') }}"
                        class="nav-link btn {{ request()->is('mapel*') ? 'active' : '' }}">
                        <i class='bx bxs-notepad'></i> Mapel
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link btn dropdown-toggle"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-buildings'></i> SPP
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('spp.index') }}">SPP</a></li>
                        <li><a class="dropdown-item" href="#">SPP Siswa</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                Log Out
                            </a>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
