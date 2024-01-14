@extends('layouts.admin.dashboard')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Update Monitoring Pelayanan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div> 
          <div class="breadcrumb-item">Monitoring Pelayanan</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Update Monitoring Pelayanan</h2>
        <p class="section-lead">Silahkan isi data data yang diperlukan
            dibawah</p>
    </div>
    <div class="card card-primary">
        <div class="card-body">
            <form method="POST" action="{{ route('monitoring.update', $item->id) }}">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomerdokumen">Nomer Dokumen</label>
                        <input id="nomerdokumen" type="text" class="form-control" value="{{ $item->nomerdokumen }}"
                            name="nomerdokumen" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nomerrevisi">Nomer Revisi</label>
                        <input id="nomerrevisi" type="text" value="{{ $item->nomerrevisi }}" class="form-control"
                            name="nomerrevisi" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tanggalterbit">Tanggal Terbit</label>
                        <input id="tanggalterbit" type="datetime-local" class="form-control" value="{{ $item->tanggalterbit }}"
                            name="tanggalterbit" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="halaman">Halaman</label>
                        <input id="halaman" type="text" value="{{ $item->halaman }}" class="form-control" name="halaman" required>
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