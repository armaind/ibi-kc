@extends('layouts.staff.dashboard')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Update Data Koordinator AIBIC</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('staff')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Data Koordinator</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Update Data Koordinator AIBIC</h2>
        <p class="section-lead">Silahkan update data data yang diperlukan</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <form method="POST" action="{{ route('koordinator.update', $item->id) }}">
                @method('PUT')
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">NAMA</label>
                        <input id="name" type="text" value="{{ $item->name }}" class=" form-control" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">USERNAME</label>
                        <input id="username" type="text" value="{{ $item->username }}" class=" form-control"
                            name="username">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomor_telepon">NOMOR TELEPON</label>
                        <input id="nomor_telepon" type="number" value="{{ $item->phone_number }}" class=" form-control"
                            name="phone_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">EMAIL</label>
                        <input id="email" type="text" value="{{ $item->email }}" class=" form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <textarea class="form-control" id="alamat" name="address" rows="5">{{ $item->address }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection