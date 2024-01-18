@extends('layouts.staff.dashboard')

@section('title', 'Lokasi Penempatan Bidan')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Lokasi Penempatan Bidan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('staff')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Lokasi Penempatan Bidan</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Lokasi Penempatan Bidan</h2>
        <p class="section-lead">---.</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        <li><h4>Error</h4></li>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('penempatan-bidann.store') }}" validate>
                @csrf
                <p class="font-weight-bold" style="color:black; font-size: 15px;"> Identitas:</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nrbidan">Nomer Registrasi Bidan</label>
                        <input id="nrbidan" type="text" class="form-control" value="{{ old('nrbidan') }}"
                            name="nrbidan" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Nama Bidan</label>
                        <input id="name" type="text" value="{{ old('name') }}" class="form-control"
                            name="name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="puskesmas">Lokasi Penempatan Bidan</label>
                        <select id="puskesmas" type="text" class="form-control" value="{{ old('puskesmas') }}"
                            name="puskesmas" required>
                            <option value="" disabled selected>Puskesmas</option>
                            <option value="WALED">WALED</option>
                            <option value="CIBOGO">CIBOGO</option>
                            <option value="PASALEMAN">PASALEMAN</option>
                            <option value="CILEDUG">CILEDUG</option>
                            <option value="PABUARAN">PABUARAN</option>
                            <option value="LOSARI">LOSARI</option>
                            <option value="ASTANALANGGAR">ASTANALANGGAR</option>
                            <option value="TERSANA">TERSANA</option>
                            <option value="KALIBUNTU">KALIBUNTU</option>
                            <option value="BABAKAN">BABAKAN</option>
                            <option value="GEMBONGAN">GEMBONGAN</option>
                            <option value="GEBANG">GEBANG</option>
                            <option value="KARANG SEMBUNG">KARANG SEMBUNG</option>
                            <option value="KUBANGDELEG">KUBANGDELEG</option>
                            <option value="SINDANG LAUT">SINDANG LAUT</option>
                            <option value="SUSUKAN LEBAK">SUSUKAN LEBAK</option>
                            <option value="SEDONG">SEDONG</option>
                            <option value="ASTANA JAPURA">ASTANA JAPURA</option>
                            <option value="SIDAMULYA">SIDAMULYA</option>
                            <option value="PANGENAN">PANGENAN</option>
                            <option value="MUNDU">MUNDU</option>
                            <option value="BEBER">BEBER</option>
                            <option value="KAMARANG">KAMARANG</option>
                            <option value="TALUN">TALUN</option>
                            <option value="CIPERNA">CIPERNA</option>
                            <option value="SUMBER">SUMBER</option>
                            <option value="WATU BELAH">WATU BELAH</option>
                            <option value="SENDANG">SENDANG</option>
                            <option value="DUKU PUNTANG">DUKU PUNTANG</option>
                            <option value="SINDANG JAWA">SINDANG JAWA</option>
                            <option value="PALIMANAN">PALIMANAN</option>
                            <option value="KEPUH">KEPUH</option>
                            <option value="PLUMBON">PLUMBON</option>
                            <option value="LURAH">LURAH</option>
                            <option value="WARUROYOM">WARUROYOM</option>
                            <option value="KARANGSARI">KARANGSARI</option>
                            <option value="PANGKALAN">PANGKALAN</option>
                            <option value="PLERED">PLERED</option>
                            <option value="ASTAPADA">ASTAPADA</option>
                            <option value="KEDAWUNG">KEDAWUNG</option>
                            <option value="GUNUNG JATI">GUNUNG JATI</option>
                            <option value="MAYUNG">MAYUNG</option>
                            <option value="KEDATON">KEDATON</option>
                            <option value="SURANENGGALA">SURANENGGALA</option>
                            <option value="KLANGENAN">KLANGENAN</option>
                            <option value="JEMARAS">JEMARAS</option>
                            <option value="WANGUN HARJA">WANGUN HARJA</option>
                            <option value="TEGAL GUBUG">TEGAL GUBUG</option>
                            <option value="PANGURAGAN">PANGURAGAN</option>
                            <option value="CIWARINGIN">CIWARINGIN</option>
                            <option value="WINONG">WINONG</option>
                            <option value="GEMPOL">GEMPOL</option>
                            <option value="SUSUKAN">SUSUKAN</option>
                            <option value="BUNDER">BUNDER</option>
                            <option value="GEGESIK">GEGESIK</option>
                            <option value="JAGAPURA">JAGAPURA</option>
                            <option value="KALIWEDI">KALIWEDI</option>
                        </select>
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="halaman">Halaman</label>
                        <input id="halaman" type="text" value="{{ old('halaman') }}" class="form-control" name="halaman" required>
                    </div> --}}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection