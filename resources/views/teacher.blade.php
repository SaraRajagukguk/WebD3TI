@include('layouts.main')

    <main class="main">

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Teachers</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Teachers</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- team-area -->
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Tenaga Pengajar Kami</span>
                            <h2 class="site-title">Mari Berkenalan dengan <span>Para Tenaga Pengajar</span></h2>
                            <p>Tim pengajar kami adalah jantung dari institusi ini. Terdiri dari para ahli di bidangnya masing-masing, mereka tidak hanya berpengetahuan luas tetapi juga bersemangat dalam membimbing dan menginspirasi generasi penerus. Dengan dedikasi tinggi, mereka berkomitmen untuk memberikan pendidikan berkualitas yang relevan dengan perkembangan zaman. Para tenaga pengajar kami juga sudah terakreditasi dan tersetifikasi sehingga mampu mengajar dengan profesional.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($dosens as $dosen)
                        <div class="col-md-6 col-lg-3">
                            <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                                <div class="team-img">
                                    @if ($dosen->gambar)
                                        <img src="{{ asset('storage/' . $dosen->gambar) }}" alt="{{ $dosen->name }}">
                                    @else
                                        <img src="{{ asset('assets/img/team/default.jpg') }}" alt="Default Image"> <!-- Gambar default jika tidak ada gambar -->
                                    @endif
                                </div>
                                <div class="team-social">
                                    @if($dosen->facebook)
                                        <a href="{{ $dosen->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    <a href="#"><i class="fab fa-whatsapp"></i></a> <!-- Ganti dengan link WhatsApp jika ada -->
                                    @if($dosen->linkedin)
                                        <a href="{{ $dosen->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    @endif
                                    @if($dosen->instagram)
                                        <a href="{{ $dosen->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                    @endif
                                </div>
                                <div class="team-content">
                                    <div class="team-bio">
                                        <h5><a href="#">{{ $dosen->name }}</a></h5>
                                        <span>{{ $dosen->jabatan }}</span>
                                    </div>
                                </div>
                                <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- team-area end -->

    </main>

    @include('layouts.footer')