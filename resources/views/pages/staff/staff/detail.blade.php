@extends('layouts.staff.dashboard')

@section('title', 'Detail Koordinator')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Detail Koordinator AIBIC</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('staff')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Data Koordinator</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Detail Koordinator AIBIC</h2>
        <p class="section-lead">--</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ $item->username }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $item->address }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $item->phone_number }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{url('/staff/koordinator')}}" class="btn btn-primary">Kembali </a>
        </div>
    </div>
</section>


@endsection