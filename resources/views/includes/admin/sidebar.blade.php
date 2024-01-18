<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        {{-- <img style="width: 20%" src="{{url('main-assets/images/ibi-logo.png')}}" alt=""/> --}}
        <a href="{{route('admin')}}">Aplikasi IBI Cirebon</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('admin')}}">AIBIC</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown {{ set_active(['admin']) }}">
            <a href="{{ route('admin')}}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Publikasi</li>
        <li class="nav-item dropdown {{ set_active(['berita.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i>
                <span>Berita</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('berita.index') }}">Daftar Berita</a></li>
                <li><a class="nav-link" href="{{ route('berita.create') }}">Tambah Berita</a></li>
            </ul>
        </li>
        <li class="menu-header">Evaluasi Kinerja Bidan</li>
        <li class="nav-item dropdown {{ set_active(['data-bidan.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i>
                <span>Visitasi</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-bidan.index') }}">Data Bidan</a></li>
                <li><a class="nav-link" href="{{ route('data-bidan.create') }}">Tambah Data Visitasi</a></li>
            </ul>
        </li>
        <li class="menu-header">Monitoring Kinerja Bidan</li>
        <li class="nav-item dropdown {{ set_active(['monitoring.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                <span>Monitoring</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('monitoring.index') }}">Data Kinerja Bidan</a></li>
                <li><a class="nav-link" href="{{ route('monitoring.create') }}">Pelayanan</a></li>
            </ul>
        </li>
        <li class="menu-header">Pengelolaan koordinator</li>
        <li class="nav-item dropdown {{ set_active(['data-koordinator.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i>
                <span>Koordinator</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data-koordinator.index') }}">Data Koordinator</a></li>
                <li><a class="nav-link" href="{{ route('data-koordinator.create') }}">Tambah Koordinator</a></li>
            </ul>
        </li>
        
        <li class="menu-header">Penempatan Bidan</li>
        <li class="nav-item dropdown {{ set_active(['lokasi-bidan.*']) }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-location-arrow"></i>
                <span>Lokasi Bidan</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('lokasi-bidan.index') }}">Lokasi Penempatan</a></li>
                <li><a class="nav-link" href="{{ route('lokasi-bidan.create') }}">Tambah Penempatan</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown {{ set_active(['lokasi-puskesmas.*']) }}">
            <a href="{{ route('lokasi-puskesmas.index')}}" class="nav-link"><i class="far fa-hospital"></i><span>Lokasi Puskesmas</span></a>
        </li>
    </ul>
</aside>