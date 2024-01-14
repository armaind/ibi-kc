@extends('layouts.admin.dashboard')

@section('title', 'Berita')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Berita</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('admin')}}">Dashboard</a></div>
      <div class="breadcrumb-item">Berita</div>
    </div>
  </div>
  <div class="row">
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
            <div> {{ substr(strip_tags(htmlspecialchars_decode($item->isi_berita)), 0, 40) }}...</a></div>
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