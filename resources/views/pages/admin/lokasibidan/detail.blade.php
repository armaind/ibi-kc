@extends('layouts.admin.dashboard')

@section('title', 'Detail')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Lokasi Penempatan Bidan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Lokasi Penempatan Bidan</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Lokasi Penempatan Bidan</h2>
        <p class="section-lead">---.</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <p class="font-weight-bold" style="font-size: 17px;">Identitas</p>
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nama Bidan</th>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <th>Nomer Registrasi Bidan</th>
                        <td>{{ $item->nrbidan }}</td>
                    </tr>
                    <tr>
                        <th>Lokasi Penempatan Bidan</th>
                        <td>{{ $item->puskesmas }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{url('/admin/lokasi-bidan')}}" class="btn btn-primary">Kembali </a>
        </div>
</section>


@endsection