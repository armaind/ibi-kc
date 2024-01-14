@extends('layouts.staff.dashboard')

@section('title', 'Update Visitasi')
@section('content')


<section class="section">
    <div class="section-header">
        <h1>UPDATE DATA VISITASI</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('staff')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Data Visitasi</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">UPDATE DATA VISITASI</h2>
        <p class="section-lead">Disini anda dapat mengupdate data visitasi yang sebelumnya anda pilih. Perlu
            diketahui admin tidak dapat mengganti password bidan, hanya dapat mengganti data data yang tertera
            dibawah.</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <form method="POST" action="{{ route('data-bidan.update', $item->id) }}">
                @method('PUT')
                @csrf
                <p class="font-weight-bold" style="color:black; font-size: 15px;"> A. IDENTITAS:</p>
                <div class="form-group">
                    <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                    <input id="name" type="text" value="{{ $item->name }}" class="form-control" name="name" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input id="email" type="text" value="{{ $item->email }}" class="form-control" name="email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">Nama Panggilan<span class="text-danger">*</span></label>
                        <input id="username" type="text" value="{{ $item->username }}" class="form-control" name="username" required>
                    </div>
                </div>
                <p class="card-text" style="color:black;"> Alamat Rumah Lengkap:</p>
                <div class="form-group">
                    <label for="alamatrumah">Alamat<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="alamatrumah" name="alamatrumah" rows="5">{{ $item->alamatrumah }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telp_rumah">Telepon<span class="text-danger">*</span></label>
                        <input id="telp_rumah" type="number" value="{{ $item->telp_rumah }}" class="form-control" name="telp_rumah" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="provinsir">Provinsi<span class="text-danger">*</span></label>
                        <input id="provinsir" type="text" value="{{ $item->provinsir }}" class="form-control" name="provinsir" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kotar">Kota<span class="text-danger">*</span></label>
                        <input id="kotar" type="text" value="{{ $item->kotar }}" class="form-control" name="kotar" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="kecamatanr">Kecamatan<span class="text-danger">*</span></label>
                        <input id="kecamatanr" type="text" value="{{ $item->kecamatanr }}" class="form-control" name="kecamatanr" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kodeposr">Kode Pos<span class="text-danger">*</span></label>
                        <input id="kodeposr" type="number" value="{{ $item->kodeposr }}" class="form-control" name="kodeposr" required>
                    </div>
                </div>

                <p class="card-text" style="color:black;"> Alamat Praktik Lengkap:</p>
                <div class="form-group">
                    <label for="alamatpraktik">Alamat<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="alamatpraktik" name="alamatpraktik" rows="5">{{ $item->alamatpraktik }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telp_praktik">Telepon<span class="text-danger">*</span></label>
                        <input id="telp_praktik" type="number" value="{{ $item->telp_praktik }}" class="form-control" name="telp_praktik" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="provinsip">Provinsi<span class="text-danger">*</span></label>
                        <input id="provinsip" type="text" value="{{ $item->provinsip }}" class="form-control" name="provinsip" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kotap">Kota<span class="text-danger">*</span></label>
                        <input id="kotap" type="text" value="{{ $item->kotap }}" class="form-control" name="kotap" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="kecamatanp">Kecamatan<span class="text-danger">*</span></label>
                        <input id="kecamatanp" type="text" value="{{ $item->kecamatanp }}" class="form-control" name="kecamatanp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kodeposp">Kode Pos<span class="text-danger">*</span></label>
                        <input id="kodeposp" type="number" value="{{ $item->kodeposp }}" class="form-control" name="kodeposp" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jampraktik">Jam Praktik<span class="text-danger">*</span></label>
                        <input id="jampraktik" type="text" value="{{ $item->jampraktik }}" class="form-control" name="jampraktik" placeholder="09.00 - 17.00" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="haripraktik">Hari Praktik<span class="text-danger">*</span></label>
                        <select id="haripraktik" class="form-control" name="haripraktik" required>
                            <option value="{{ $item->haripraktik }}" selected>{{ $item->haripraktik }}</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                </div>

                <p class="font-weight-bold" style="color:black; font-size: 15px;"> B. SDM PENDUKUNG:</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tenagakesehatanlain">Tenaga Kesehatan Lain<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="tenagakesehatanlain" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="tenagakesehatanlain" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                    {{-- {{ ($item->tenagakesehatanlain || old('tenagakesehatanlain', 0) == 1 ? 'checked' : '')}} --}}
                    <div class="form-group col-md-6">
                        <label for="tenaganonkesehatan">Tenaga Non Kesehatan<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="tenaganonkesehatan" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="tenaganonkesehatan" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>

                <p class="font-weight-bold" style="color:black; font-size: 15px;"> C. BANGUNAN DAN RUANG:</p>
                <div class="form-row"> 
                    <div class="form-group col-md-12">
                        <label for="bangunan">1. Bangunan</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="bangunan" value="Rumah">
                            <span class="ml-0">Rumah</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="bangunan" value="Bagian dari Rumah">
                            <span class="ml-0">Bagian dari Rumah</span>
                        </label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="bangunan" value="Bagian dari Kantor/Tempat Kerja">
                            <span class="ml-0">Bagian dari Kantor/Tempat Kerja</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="bangunan" value="Bagian dari Gedung">
                            <span class="ml-0">Bagian dari Gedung</span>
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ruangtunggu">2. Ruang Tunggu</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="ruangtunggu" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="ruangtunggu" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ruangperiksa">3. Ruang Periksa</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="ruangperiksa" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="ruangperiksa" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ruangbersalin">4. Ruang Bersalin</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="ruangbersalin" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="ruangbersalin" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ruangnifas">5. Ruang Nifas</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="ruangnifas" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="ruangnifas" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="wc">6. WC/Kamar Mandi</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="wc" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="wc" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ruanglain">7. Ruang lain sesuai kebutuhan</label>
                        <label class="col-md-12"> 
                            <input type="checkbox" name="ruanglain" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="checkbox" name="ruanglain" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <a href="{{url('/staff/visitasi')}}" class="btn btn-primary">kembali </a>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection