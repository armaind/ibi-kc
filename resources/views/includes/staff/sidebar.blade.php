<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{route('staff')}}">Aplikasi IBI Cirebon</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('staff')}}">AIBIC</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown {{ set_active(['staff']) }}">
            <a href="{{ route('staff')}}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Publikasi</li>
        <li class="nav-item dropdown {{ set_active(['berita.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i>
                <span>Berita</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('berita-koordinator.index') }}">Daftar Berita</a></li>
                {{-- <li><a class="nav-link" href="{{ route('berita-koordinator.create') }}">Tambah Berita</a></li> --}}
            </ul>
        </li>
        <li class="menu-header">Evaluasi Kinerja Bidan</li>
        <li class="nav-item dropdown {{ set_active(['visitasi.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i>
                <span>Visitasi</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('visitasi.index') }}">Data Bidan</a></li>
                <li><a class="nav-link" href="{{ route('visitasi.create') }}">Tambah Data Visitasi</a></li>
            </ul>
        </li>
        <li class="menu-header">Monitoring Kinerja Bidan</li>
        <li class="nav-item dropdown {{ set_active(['monitoring-koordinator.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                <span>Monitoring</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('monitoring-koordinator.index') }}">Data Kinerja Bidan</a></li>
                <li><a class="nav-link" href="{{ route('monitoring-koordinator.create') }}">Pelayanan</a></li>
            </ul>
        </li>
        <li class="menu-header">Koordinator</li>
        <li class="nav-item dropdown {{ set_active(['koordinator.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i>
                <span>Koordinator</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('koordinator.index') }}">Data Koordinator</a></li>
                {{-- <li><a class="nav-link" href="{{ route('koordinator.create') }}">Tambah Data Staff</a></li> --}}
            </ul>
        </li>
        <li class="menu-header">Penempatan Bidan</li>
        <li class="nav-item dropdown {{ set_active(['penempatan-bidann.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-location-arrow"></i>
                <span>Lokasi Bidan</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('penempatan-bidann.index') }}">Lokasi Penempatan</a></li>
                {{-- <li><a class="nav-link" href="{{ route('penempatan-bidann.create') }}">Tambah Penempatan</a></li> --}}
            </ul>
        </li>
        <li class="nav-item dropdown {{ set_active(['puskesmas.*']) }}">
            <a href="{{ route('puskesmas.index')}}" class="nav-link"><i class="far fa-hospital"></i><span>Lokasi Puskesmas</span></a>
        </li>
    </ul>
</aside>