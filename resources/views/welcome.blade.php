@include('includes.header')

<body>

    @include('includes.navbar')

    <header class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 my-auto">
                    <p class="label-top text-primary" data-aos="fade-up" data-aos-duration="900">AIBIC</p>
                    <h1 data-aos="fade-up" data-aos-duration="1100">Aplikasi Ikatan Bidan Indonesia Cirebon
                    </h1>
                    {{-- <p data-aos="fade-up" data-aos-duration="1300">
                        Ikatan Bidan Indonesia (IBI) merupakan organisasi profesi bidan di Indonesia. Wadah Para bidan dalam mencapai tujuan melalui kebijakan peningkatan profesionalisme anggota guna menjamin masyarakat mendapatkan pelayanan berkualitas. IBI didirikan pada tanggal 24 Juni 1951, menjadi anggota Kongres Wanita Indonesia (KOWANI)  pada tahun 1951 dan bergabung menjadi anggota ICM (International Confederation of Midwives) pada tahun 1956. Kantor pusat berkedudukan di Jakarta, IBI memiliki perwakilan di 34 Provinsi, 509 kota/kabupaten dan 3728 ranting diseluruh indonesia.
                    </p> --}}
                    {{-- <a data-aos="fade-up" data-aos-duration="1500" href="{{url('/auth')}}"
                        class="btn btn-primary px-5 py-2 mb-2 mb-md-0">Mulai sekarang &nbsp; →
                    </a>
                    <a data-aos="fade-up" data-aos-duration="1700" href="#cara-lapor"
                        class="btn btn-outline-primary px-5 py-2">Cara bayar
                    </a> --}}
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1700">
                    <img style="width: 80%" src="{{url('main-assets/images/ibi-logo.png')}}" alt=""
                        class="img-fluid d-none d-lg-block d-print-block float-md-end" srcset="" />
                </div>
            </div>
        </div>
    </header>

    <section class="about-section mt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">TENTANG IBI</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">APA ITU IBI?</h1>
                    <hr data-aos="fade-up" data-aos-duration="1400" width="50%" class="mx-auto" />
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Ikatan Bidan Indonesia (IBI) merupakan organisasi profesi bidan di Indonesia. Wadah Para bidan dalam mencapai tujuan melalui kebijakan peningkatan profesionalisme anggota guna menjamin masyarakat mendapatkan pelayanan berkualitas.
                    </p>
                    <a href="{{url('/tentang-kami')}}" data-aos="fade-up" data-aos-duration="1800"
                        class="btn btn-outline-primary px-4 py-2">Baca lebih lanjut</a>
                </div>
            </div>
        </div>
    </section>
    {{-- @section('berita')
        <div class="row">
          @forelse ($berita as $ber)
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" data-background="{{ asset('images/' . $ber->thumbnail) }}">
                </div>
                <div class="article-badge">
                  <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="{{route('berita.show', $ber->judul)}}">{{ $ber->judul }}</a></h2>
                  <h7>{{ $ber->kategori }} | <i style="font-size: 12px" class="icofont icofont-user"></i> {{ $ber->name }}</h7>
                  <p style="font-size:10px;">{{ $ber->tanggal }}</p>
                  <div> {!!$ber->isi_berita !!}</div>
                </div>
                <div class="article-cta">
                  <a href="{{route('berita.show', $ber->judul)}}">Read More <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </article>
          </div>
          @empty
          @endforelse
        </div>
      @endsection --}}
    <section class="about-section-2 mt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1600">
                    <img src="{{url('main-assets/images/body-image-1.webp')}}" class="img-fluid" alt="" srcset="" />
                </div>
                <div class="col-md-7 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">KEMUDAHAN MENGGUNAKAN
                        AIBIC</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">Pengecekan Visitasi data Bidan tak pernah semudah ini</h1>
                    <p data-aos="fade-up" data-aos-duration="1400">
                        Dengan adanya AIBIC, kemudahan pengecekan data bidan agar dapat diakses dimana saja dan kapan saja!
                    </p>
                    <a id="cara-lapor" href="{{url('/auth')}}">
                        <p data-aos="fade-up" data-aos-duration="1600" class="text-primary"
                            style="text-decoration: none"> Masuk sekarang →</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="instruction-section mt-100">
        <div class="container">
            <div class="row">
                <div class="header-instruction text-center">
                    <div class="col-md-7 mx-auto">
                        <p class="text-primary label-top" data-aos="fade-up" data-aos-duration="1000">BAGAIMANA
                            AIBIC BEKERJA</p>
                        <h1 data-aos="fade-up" data-aos-duration="1200">CARA LOGIN & PENGGUNAAN BAGI BIDAN</h1>
                        <p data-aos="fade-up" data-aos-duration="1400">
                            Untuk anda yang masih baru kenal dengan kami, kami berikan
                            caranya kok dibawah bagaimana caranya untuk menggunakan aplikasi
                            ini
                            Cara masuk dan penggunaan pada AIBIC, akan kami jelaskan secara rinci dibawah
                            ini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-8 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="mb-3"><i
                            class="lni lni-camera icon-top bg-primary px-3 py-2 text-center"></i></p>
                    <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top">LANGKAH PERTAMA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2">Menghubungi koordinator untuk mendaftarkan diri,  Login ke AIBIC Menggunakan Username & Password</h1>
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Segera login dengan username & password, setelah itu anda dapat langsung masuk ke aplikasi kami
                    </p>
                    <a href="{{url('/faq')}}">
                        <p class="text-primary" style="text-decoration: none" data-aos="fade-up"
                            data-aos-duration="1800"> Selengkapnya →</p>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{url('main-assets/images/section-2.png')}}" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{url('main-assets/images/section-4.png')}}" class="img-fluid" alt="" />
                </div>
                <div class="col-md-8 my-auto">
                    <p class="mb-3" data-aos="fade-up" data-aos-duration="1000"><i
                            class="lni lni-lock icon-top bg-primary px-3 py-2 text-center"></i></p>
                    <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top">LANGKAH KEDUA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2">
                        Segera pilih menu "Visitasi" di sidebar kiri anda, lalu anda dapat melengkapi data diri anda
                    </h1>
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Setelah itu anda dapat melihat data anda dimana saja dan kapan saja!
                    </p>
                    <a href="{{url('/faq')}}">
                        <p class="text-primary" style="text-decoration: none" data-aos="fade-up"
                            data-aos-duration="1800"> Selengkapnya →</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
    @include('includes.script')

</body>

</html>