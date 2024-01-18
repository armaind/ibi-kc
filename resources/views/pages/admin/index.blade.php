@extends('layouts.admin.dashboard')

@section('title', 'Dashboard Admin')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Selamat Datang, {{ Auth::user()->name }}!</h1>
        <div class="section-header-breadcrumb">
          {{-- <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div> --}}
        </div>
      </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Bidan</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('users')->where('roles', 'BIDAN')->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Koordinator</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('users')->where('roles', 'STAFF')->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Monitoring</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('monitorings')->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Lokasi Puskesmas</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('lokasi_puskesmas')->count() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="row">
            <div class="col-md-12 rounded-1">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{url('main-assets/images/slide/announcement-dashboard-images-1.png')}}" class="d-block w-100"
                            style="border-radius: 6px" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img src="{{url('main-assets/images/slide/announcement-dashboard-images-2.png')}}" class="d-block w-100"
                            style="border-radius: 6px" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img src="{{url('main-assets/images/slide/announcement-dashboard-images-3.png')}}" class="d-block w-100"
                            style="border-radius: 6px" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>

    {{-- <div class="row mb-4 mt-4">
        <div class="col-md-4 ">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Selamat Datang, {{ Auth::user()->name }}!</h4>
                </div>
                
                <div class="card-body">
                    <p>Aplikasi Ikatan Bidan Indonesia Cirebon &mdash; AIBIC </p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row mb-4">
        @forelse ($items as $item)
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
              <div class="article-image" data-background="{{ asset('images/' . $item->thumbnail) }}">
              </div>
              <div class="article-badge">
                <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
              </div>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="{{route('berita.show', $item->judul)}}">{{ substr(strip_tags(htmlspecialchars_decode($item->judul)), 0, 30) }}...</a></h2>
                {{-- <h7>{{ $item->kategori }} | <i style="font-size: 12px" class="icofont icofont-user"></i> {{ $item->name }}</h7> --}}
                <p style="font-size:10px;">{{ $item->tanggal }}</p>
                <div> {{ substr(strip_tags(htmlspecialchars_decode($item->isi_berita)), 0, 30) }}...</a></div>
              </div>
              <div class="article-cta">
                <a href="{{route('berita.show', $item->judul)}}">Read More <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
        @empty
        @endforelse
    </div>
    
</section>

@endsection