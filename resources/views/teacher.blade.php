@include('layouts.main')

<<<<<<< HEAD
=======


>>>>>>> f8d01cba6e6776a2c55d9654f8b157167c37a612
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

<<<<<<< HEAD
=======
        
>>>>>>> f8d01cba6e6776a2c55d9654f8b157167c37a612
        <!-- team-area -->
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
<<<<<<< HEAD
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Tenaga Pengajar Kami</span>
                            <h2 class="site-title">Mari Berkenalan dengan <span>Para Tenaga Pengajar</span></h2>
                            <p>Tim pengajar kami adalah jantung dari institusi ini. Terdiri dari para ahli di bidangnya masing-masing, mereka tidak hanya berpengetahuan luas tetapi juga bersemangat dalam membimbing dan menginspirasi generasi penerus. Dengan dedikasi tinggi, mereka berkomitmen untuk memberikan pendidikan berkualitas yang relevan dengan perkembangan zaman. Para tenaga pengajar kami juga sudah terakreditasi dan tersetifikasi sehingga mampu mengajar dengan profesional.</p>
=======
                            <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Our Teachers</span>
                            <h2 class="site-title">Meet With Our <span>Teachers</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout.</p>
>>>>>>> f8d01cba6e6776a2c55d9654f8b157167c37a612
                        </div>
                    </div>
                </div>
                <div class="row">
<<<<<<< HEAD
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
=======
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="assets/img/team/01.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Angela T. Vigil</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="assets/img/team/02.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Frank A. Mitchell</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="assets/img/team/03.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Susan D. Lunsford</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="assets/img/team/04.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Dennis A. Pruitt</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="team-img">
                                <img src="assets/img/team/01.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Angela T. Vigil</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="team-img">
                                <img src="assets/img/team/02.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Frank A. Mitchell</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="team-img">
                                <img src="assets/img/team/03.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Susan D. Lunsford</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay="1s">
                            <div class="team-img">
                                <img src="assets/img/team/04.jpg" alt="thumb">
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Dennis A. Pruitt</a></h5>
                                    <span>Associate Professor</span>
                                </div>
                            </div>
                            <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                        </div>
                    </div>
>>>>>>> f8d01cba6e6776a2c55d9654f8b157167c37a612
                </div>
            </div>
        </div>
        <!-- team-area end -->

    </main>

<<<<<<< HEAD
=======

>>>>>>> f8d01cba6e6776a2c55d9654f8b157167c37a612
    @include('layouts.footer')