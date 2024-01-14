@extends('layouts.admin.dashboard')

@section('title', 'Detail')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Monitoring Pelayanan — {{ $item->name }}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Monitoring Pelayanan</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Monitoring Pelayanan</h2>
        <p class="section-lead">Berikut adalah detail pelayanan yang bernama {{Auth::user()->name}}.</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <p class="font-weight-bold" style="font-size: 17px;">Identitas</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>{{Auth::user()->name}}</td>
                    </tr>
                    <tr>
                        <th>Nomor Dokumen</th>
                        <td>{{ $item->nomerdokumen }}</td>
                    </tr>
                    <tr>
                        <th>Nomer Revisi</th>
                        <td>{{ $item->nomerrevisi }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Terbit</th>
                        <td>{{ $item->tanggalterbit }}</td>
                        </tr>
                    <tr>
                        <th>Halaman</th>
                        <td>{{ $item->halaman }}</td>
                    </tr>
                    <tr>
                        <th>1. Apakah penanggung jawab pelayanan menetapkan standar dan indikator untuk menilai proses pelaksaaan pelayanan</th>
                        <td>{{ $item->keg1 }}</td>
                    </tr>
                    <tr>
                        <th>2. Apakah penanggung jawab pelayanan mengumpulkan data</th>
                        <td>{{ $item->keg2 }}</td>
                    </tr>
                    <tr>
                        <th>3. Apakah penanggung jawab pelayanan melakukan investigasi kinerja (pengamatan) dan pelaksaan kegiatan atau proses yang dipilih</th>
                        <td>{{ $item->keg3 }}</td>
                    </tr>
                    <tr>
                        <th>4. Apakah penanggung jawab pelayanan membandingkan data yang diperoleh dengan standar atau indikator (baik kualitatif atau kuantitatif) yang telah ditentukan</th>
                        <td>{{ $item->keg4 }}</td>
                    </tr>
                    <tr>
                        <th>5. Apakah penanggung jawab pelayanan mengamati perubahan lingkungan</th>
                        <td>{{ $item->keg5 }}</td>
                    </tr>
                    <tr>
                        <th>6. Apakah penanggung jawab pelayanan mengumpulkan data untuk pengkajian lingkungan tersebut terhadap kegiatan yang sedang dilaksanakan</th>
                        <td>{{ $item->keg6 }}</td>
                    </tr>
                    <tr>
                        <th>7. Apakah penanggung jawab pelayanan melakukan pengolahan, analisis data yang diperoleh</th>
                        <td>{{ $item->keg7 }}</td>
                    </tr>
                    <tr>
                        <th>8. Apakah penanggung jawab pelayanan membuat penilaian dan kesimpulan tentang proses pelaksanaan kegiatan</th>
                        <td>{{ $item->keg8 }}</td>
                    </tr>
                    <tr>
                        <th>9. Apakah penanggung jawab pelayanan mencatat hasil analisi dan kesimpulan</th>
                        <td>{{ $item->keg9 }}</td>
                    </tr>
                    <tr>
                        <th>10. Apakah penanggung jawab program merumuskan rekomendasi tindak lanjut</th>
                        <td>{{ $item->keg10 }}</td>
                    </tr>
                    <tr>
                        <th>11. Apakah penanggung jawab pelayanan mengambil keputusan melakukan tindakan (termasuk koreksi dan penyesuaian kegiatan, maupun perencanaan ulang)</th>
                        <td>{{ $item->keg11 }}</td>
                    </tr>
                    <tr>
                        <th>12. Apakah penanggung jawab pelayanan menyampaikan semua hasil monitoring, pengendalian dan tindak lanjut kepada pihak yang berkepentingan sebagai wujud akunbilitas dan proses pengambilan keputusan lebih lanjut</th>
                        <td>{{ $item->keg12 }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <a href="{{url('/admin/data-bidan')}}" class="btn btn-primary">Kembali </a>
</section>


@endsection