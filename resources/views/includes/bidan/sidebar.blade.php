<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        {{-- <img style="width: 20%" src="{{url('main-assets/images/ibi-logo.png')}}" alt=""/> --}}
        <a href="{{route('bidan')}}">Aplikasi IBI Cirebon</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('bidan')}}">AIBIC</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown {{ set_active(['bidan']) }}">
            <a href="{{ route('bidan')}}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Publikasi</li>
        <li class="nav-item dropdown {{ set_active(['berita.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i>
                <span>Berita</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('berita-bidan.index') }}">Daftar Berita</a></li>
                {{-- <li><a class="nav-link" href="{{ route('berita.create') }}">Tambah Berita</a></li> --}}
            </ul>
        </li>
        <li class="menu-header">Evaluasi Kinerja Bidan</li>
        <li class="nav-item dropdown {{ set_active(['data-bidann.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i>
                <span>Visitasi</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-bidann.index') }}">Data Bidan</a></li>
                {{-- <li><a class="nav-link" href="{{ route('data-bidann.create') }}">Tambah Data Visitasi</a></li> --}}
            </ul>
        </li>
        <li class="menu-header">Monitoring Kinerja Bidan</li>
        <li class="nav-item dropdown {{ set_active(['monitoring-bidan.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                <span>Monitoring</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('monitoring-bidan.index') }}">Data Kinerja Bidan</a></li>
                {{-- <li><a class="nav-link" href="{{ route('monitoring-bidan.create') }}">Pelayanan</a></li> --}}
            </ul>
        </li>
        <li class="menu-header">Pengelolaan koordinator</li>
        <li class="nav-item dropdown {{ set_active(['datakoordinator.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i>
                <span>Koordinator</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('datakoordinator.index') }}">Data Koordinator</a></li>
                {{-- <li><a class="nav-link" href="{{ route('datakoordinator.create') }}">Tambah Koordinator</a></li> --}}
            </ul>
        </li>

        <li class="menu-header">Penempatan Bidan</li>
        <li class="nav-item dropdown {{ set_active(['penempatan-bidan.*']) }}">
            <a href="{{ route('penempatan-bidan.index')}}" class="nav-link"><i class="fas fa-location-arrow"></i><span>Lokasi Bidan</span></a>
        </li>
        <li class="nav-item dropdown {{ set_active(['lokasi-puskesmas.*']) }}">
            <a href="{{ route('lokasi-puskesmas-bidan.index')}}" class="nav-link"><i class="far fa-hospital"></i><span>Lokasi Puskesmas</span></a>
        </li>
    </ul>
</aside>