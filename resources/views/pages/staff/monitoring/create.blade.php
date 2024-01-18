@extends('layouts.staff.dashboard')

@section('title', 'Monitoring Pelayanan')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Monitoring Pelayanan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('staff')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Monitoring Pelayanan</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Monitoring Pelayanan</h2>
        <p class="section-lead">This article component is based on card and flexbox.</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <form method="POST" action="{{ route('monitoring.store') }}">
                @csrf
                <p class="font-weight-bold" style="color:black; font-size: 15px;"> Identitas:</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nama<span class="text-danger">*</span></label>
                        <input id="name" type="text" class="form-control" value="{{ old('name') }}"
                            name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nomerregistrasi">Nomer Registrasi<span class="text-danger">*</span></label>
                        <input id="nomerregistrasi" type="text" value="{{ old('nomerregistrasi') }}" class="form-control"
                            name="nomerregistrasi" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomerdokumen">Nomer Dokumen<span class="text-danger">*</span></label>
                        <input id="nomerdokumen" type="text" class="form-control" value="{{ old('nomerdokumen') }}"
                            name="nomerdokumen" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nomerrevisi">Nomer Revisi<span class="text-danger">*</span></label>
                        <input id="nomerrevisi" type="text" value="{{ old('nomerrevisi') }}" class="form-control"
                            name="nomerrevisi" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tanggalterbit">Tanggal Terbit<span class="text-danger">*</span></label>
                        <input id="tanggalterbit" type="datetime-local" class="form-control" value="{{ old('tanggalterbit') }}"
                            name="tanggalterbit" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="halaman">Halaman<span class="text-danger">*</span></label>
                        <input id="halaman" type="text" value="{{ old('halaman') }}" class="form-control" name="halaman" required>
                    </div>
                </div>

                <p class="font-weight-bold" style="color:black; font-size: 15px;"> Kegiatan:</p>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg1">1. Apakah penanggung jawab pelayanan menetapkan standar dan indikator untuk menilai proses pelaksaaan pelayanan<span class="text-danger">*</span></label>
                        {{-- <input type="radio" name="keg1" value="ada">Ada
                        <input type="radio" name="keg1" value="tidakada">Tidak Ada --}}
                        <label class="col-md-12"> 
                            <input type="radio" name="keg1" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg1" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg2">2. Apakah penanggung jawab pelayanan mengumpulkan data<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg2" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg2" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg3">3. Apakah penanggung jawab pelayanan melakukan investigasi kinerja (pengamatan) dan pelaksaan kegiatan atau proses yang dipilih<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg3" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg3" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg4">4. Apakah penanggung jawab pelayanan membandingkan data yang diperoleh dengan standar atau indikator (baik kualitatif atau kuantitatif) yang telah ditentukan<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg4" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg4" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg5">5. Apakah penanggung jawab pelayanan mengamati perubahan lingkungan<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg5" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg5" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg6">6. Apakah penanggung jawab pelayanan mengumpulkan data untuk pengkajian lingkungan tersebut terhadap kegiatan yang sedang dilaksanakan<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg6" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg6" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg7">7. Apakah penanggung jawab pelayanan melakukan pengolahan, analisis data yang diperoleh<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg7" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg7" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg8">8. Apakah penanggung jawab pelayanan membuat penilaian dan kesimpulan tentang proses pelaksanaan kegiatan<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg8" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg8" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg9">9. Apakah penanggung jawab pelayanan mencatat hasil analisi dan kesimpulan<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg9" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg9" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg10">10. Apakah penanggung jawab program merumuskan rekomendasi tindak lanjut<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg10" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg10" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg11">11. Apakah penanggung jawab pelayanan mengambil keputusan melakukan tindakan (termasuk koreksi dan penyesuaian kegiatan, maupun perencanaan ulang)<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg11" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg11" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-check"> 
                    <div class="form-group">
                        <label for="keg12">12. Apakah penanggung jawab pelayanan menyampaikan semua hasil monitoring, pengendalian dan tindak lanjut kepada pihak yang berkepentingan sebagai wujud akunbilitas dan proses pengambilan keputusan lebih lanjut<span class="text-danger">*</span></label>
                        <label class="col-md-12"> 
                            <input type="radio" name="keg12" value="Ada">
                            <span class="ml-0">Ada</span>
                        </label>
                        <label class="col-md-6"> 
                            <input type="radio" name="keg12" value="Tidak Ada">
                            <span class="ml-0">Tidak Ada</span>
                        </label>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

<script>
    config = {
        enableTime: true,
        dateFormat: 'Y-m-d H:i',
    }
    flatpickr("input[type=datetime-local]", config);
</script>