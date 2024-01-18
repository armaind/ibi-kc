@extends('layouts.admin.dashboard')

@section('title', 'Tambah Data Koordinator')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Koordinator AIBIC</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Data Koordinator</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tambah Data Koordinator AIBIC</h2>
        <p class="section-lead">Silahkan isi data data yang diperlukan</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <form method="POST" action="{{ route('data-koordinator.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">NAMA</label>
                        <input id="name" type="text" value="{{ old('name') }}" class=" form-control" name="name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">USERNAME</label>
                        <input id="username" type="text" value="{{ old('username') }}" class=" form-control"
                            name="username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">PASSWORD</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomor_telepon">NOMOR TELEPON</label>
                        <input id="nomor_telepon" type="number" value="{{ old('phone_number') }}"" class=" form-control"
                            name="phone_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">EMAIL</label>
                        <input id="email" type="text" value="{{ old('email') }}" class=" form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <textarea class="form-control" id="alamat" name="address" rows="5">{{ old('address') }}</textarea>
                </div>

                <input type="hidden" value="STAFF" name="roles">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection