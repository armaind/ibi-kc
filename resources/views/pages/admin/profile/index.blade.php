@extends('layouts.admin.dashboard')

@section('title', 'Profile')
@section('content')

<head>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<section class="section">
  <div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Hi, {{ Auth::user()->username }}!</h2>
    <p class="section-lead">Change information about yourself on this page.</p>
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-description">
            <div class="profile-widget-name">{{ Auth::user()->name }} <div class="text-muted d-inline font-weight-normal"><div></div></div>
            </div>
            Aplikasi Ikatan Bidan Indonesia Cirebon — <b>AIBIC</b>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
          <form method="post" class="needs-validation" novalidate="">
            @csrf
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" required="" readonly>
                <div class="invalid-feedback">Please fill in the first name</div>
              </div>
              <div class="row">
                <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{ Auth::user()->email }}" required="" readonly>
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                      </div>
                      <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input type="tel" class="form-control" value="{{ Auth::user()->telp_rumah }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Bio</label>
                        <textarea class="form-control summernote-simple" id="summernote" readonly>Aplikasi Ikatan Bidan Indonesia Cirebon — <b>AIBIC</b>
                        </textarea>
                      </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </div>
            </div>
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
        ]
      });
  </script>
</div>

@endsection