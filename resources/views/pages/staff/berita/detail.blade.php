@extends('layouts.staff.dashboard')

@section('title', $item->judul)
@section('content')

<style>
    .blog-box .blog-details .blog-social li+li {
        padding-left: 12px;
    }

    .blog-box .blog-details .blog-social li:first-child {
        padding-right: 12px;
    }
</style>

<section class="section">
    <div class="section-header">
        <h1>{{ $item->judul }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/staff/berita">Berita</a></div>
            <div class="breadcrumb-item">{{ $item->headline }}</div>
        </div>
    </div>
    
    <div class="section-body">
        <h2 class="section-title">Berita</h2>
        <p class="section-lead">--</p>
    </div>
    
    <article class="article article-style-c">
        <div class="article-header">
            <div class="article-image" data-background="{{ asset('images/' . $item->thumbnail) }}"></div>
        </div>
        <div class="article-details">
            <div class="article-category"><a href="#">{{$item->kategori}}</a> <div class="bullet"></div> <a>{{$item->tanggal}}</a> &nbsp; &nbsp; <a href="">{{$item->name}}</a> <p> <a>{{$item->headline}}</a></div>
                <div class="article-title"><h1><a>{{$item->judul}}</a></h1>
                </div>
                <p>{!!htmlspecialchars_decode($item->isi_berita)!!}</p>
                {{-- <div class="article-user">
                    <img alt="image" src="../assets/img/avatar/avatar-2.png">
                    <div class="article-user-details">
                        <div class="user-detail-name">
                            <a href="#">Irwansyah Saputra</a>
                        </div>
                        <div class="text-job">Mobile Developer</div>
                    </div>
                </div> --}}
            </div>
        </article>
        <div class="d-flex">
            <div class="d-flex flex-grow-1 align-items-center">
                <a href="{{route('berita-koordinator.index')}}" class="btn btn-primary mr-2" aria-haspopup="true" aria-expanded="false">Kembali</a>
                {{-- <a href="{{route('berita-koordinator.edit', $item->judul)}}" class="btn btn-warning" aria-haspopup="true" aria-expanded="false">Edit</a> --}}
            </div>
            {{-- <div class="p-2">
                <form class="pull-right" action="{{route('berita-koordinator.destroy', $item->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </div> --}}
        </div>
</section>
  
    {{-- <div class="comment my-3 p-t-50 p-r-50 p-b-30 p-l-50">
        <div id="disqus_thread"></div>
        <script>
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://aibic.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" target="_blank">comments powered by Disqus.</a></noscript>
    </div> --}}

@endsection