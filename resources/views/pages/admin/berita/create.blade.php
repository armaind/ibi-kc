@extends('layouts.admin.dashboard')

@section('title', 'Tambah Berita')
@section('content')

<head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<section class="section">
    <div class="section-header">
        <div class="section-header-back">
          <a href="{{ route('admin')}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Buat postingan baru</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="/admin/berita">Posts</a></div>
          <div class="breadcrumb-item">Berita</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Buat postingan baru</h2>
        <p class="section-lead">Di halaman ini Anda dapat membuat postingan baru dan mengisi semua kolom.</p>
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
            <form method="POST" action="{{route('berita.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="font-weight-bold" for="judul">Judul Berita<span class="text-danger">*</span></label>
                    <input id="judul" type="text" value="{{ old('judul') }}" class="form-control" name="judul" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="headline">Headline<span class="text-danger">*</span></label>
                    <input id="headline" type="text" value="{{ old('headline') }}" class="form-control" name="headline" required>
                    <div class="form-text small text-muted font-weight-medium">
                        Max 45 karakter.
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="kategori">Kategori<span class="text-danger">*</span></label>
                    <input id="kategori" type="text" value="{{ old('kategori') }}" class="form-control" name="kategori" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="customFile">Thumbnail (Optional) </label>
                    <div class="custom-file">
                    <input type="file" class="form-input" name="thumbnail">
                    </div>
                    <div class="form-text small text-muted font-weight-medium">
                        Max Height 450px
                    </div>
                </div>
                <input type="hidden" name="users" value={{Auth::user()->email}}>
                
                <div class="form-group">
                    <input class="form-control" type="hidden" name="name" value="{{Auth::user()->name}}">
                    <input class="form-control" type="hidden" name="tanggal" value="{{{now()->toDateString()}}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label text-md-right font-weight-bold">Content<span class="text-danger">*</span></label>
                    <div class="col-sm-12 col-md-7">
                      <textarea class="summernote-simple" id="summernote" name="isi_berita"></textarea>
                    </div>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> publish</button>
            </form>
        </div>
    </div>
</section>

<script>
    $('#summernote').summernote({
        dialogsInBody: true,
      minHeight: 150,
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['para', ['paragraph']],
        ['insert', ['link', 'picture', 'video']],
      ]
    });
</script>
<script>
    config = {
        enableTime: true,
        dateFormat: 'Y-m-d H:i',
    }
    flatpickr("input[type=datetime-local]", config);
</script>
@endsection