@extends('layouts.admin.dashboard')

@section('title', 'Detail Visitasi')
@section('content')

<section class="section">
    <div class="card" style="width:100%;">
        <div class="card-body">
            <h2 class="card-title text-uppercase" style="color: black;">Detail Bidan — {{ $item->name }} </h2>
            <hr>
            <p class="card-text"> Berikut adalah detail bidan yang bernama {{$item->name}}. Detail
                meliputi Nama Lengkap, Username, Email, Alamat, Nomor Telepon & Kelas.
            </p>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <p class="font-weight-bold" style="font-size: 17px;">A. IDENTITAS</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nama Pemohon</th>
                        <td>{{ $item->name }}</td>
                    </tr>
                </tbody>
            </table>

            <p class="font-weight-bold">Alamat Rumah</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $item->telp_rumah }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $item->alamatrumah }}</td>
                    </tr>
                    <tr>
                        <th>Provinsi</th>
                        <td>{{ $item->provinsir }}</td>
                        </tr>
                    <tr>
                        <th>Kota</th>
                        <td>{{ $item->kotar }}</td>
                    </tr>
                    <tr>
                        <th>Kecamatan</th>
                        <td>{{ $item->kecamatanr }}</td>
                    </tr>
                    <tr>
                        <th>Kode Pos</th>
                        <td>{{ $item->kodeposr }}</td>
                        </tr>
                    </tbody>
            </table>
            
            <p class="font-weight-bold">Alamat Praktik</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $item->telp_praktik }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $item->alamatpraktik }}</td>
                    </tr>
                    <tr>
                        <th>Provinsi</th>
                        <td>{{ $item->provinsip }}</td>
                    </tr>
                    <tr>
                        <th>Kota</th>
                        <td>{{ $item->kotap }}</td>
                    </tr>
                    <tr>
                        <th>Kecamatan</th>
                        <td>{{ $item->kecamatanp }}</td>
                    </tr>
                    <tr>
                        <th>Kode Pos</th>
                        <td>{{ $item->kodeposp }}</td>
                    </tr>
                    <tr>
                        <th>Jam Praktik</th>
                        <td>{{ $item->jampraktik }}</td>
                    </tr>
                    <tr>
                        <th>Hari Praktik</th>
                        <td>{{ $item->haripraktik }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <p class="font-weight-bold" style="font-size: 15px;">B. SDM PENDUKUNG</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Tenaga Kesehatan Lain</th>
                        <td>{{ $item->tenagakesehatanlain }}</td>
                    </tr>
                    <tr>
                        <th>Tenagan Non Kesehatan</th>
                        <td>{{ $item->tenaganonkesehatan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <p class="font-weight-bold" style="font-size: 15px;">C. BANGUNAN DAN RUANG</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Bagunan</th>
                        <td>{{ $item->bangunan }}</td>
                    </tr>
                    <tr>
                        <th>Ruang Tunggu</th>
                        <td>{{ $item->ruangtunggu }}</td>
                    </tr>
                    <tr>
                        <th>Ruang Periksa</th>
                        <td>{{ $item->ruangperiksa }}</td>
                    </tr>
                    <tr>
                        <th>Ruang Bersalin</th>
                        <td>{{ $item->ruangbersalin }}</td>
                    </tr>
                    <tr>
                        <th>Ruang Nifas</th>
                        <td>{{ $item->ruangnifas }}</td>
                    </tr>
                    <tr>
                        <th>WC/Kamar Mandi</th>
                        <td>{{ $item->wc }}</td>
                    </tr>
                    <tr>
                        <th>Ruang lain sesuai kebutuhan</th>
                        <td>{{ $item->ruanglain }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{url('/admin/data-bidan')}}" class="btn btn-primary">Kembali </a>
</section>


@endsection